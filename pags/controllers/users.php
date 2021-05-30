<?php
if ($_POST['form_name'] == "register_user") {
        Register();
} elseif ($_POST['form_name'] == "login_user") {
        Login();
} elseif ($_POST['form_name'] == "add_new_user") {
        Addnew();
} elseif ($_POST['form_name'] == "edit_post_user") {
        EditPostUser();
}
function Register()
{
        include_once("connectdb.php");
        if ($conn) {
                $username = $_POST['name_user'];
                $password = $_POST['pass_user'];
                $email = $_POST['email_user'];
                $query = "INSERT INTO `users` (`username`,`password`,`email`,`is_admin`) VAlUES ('$username','$password','$email',0);";
                $res = mysqli_query($conn, $query);
                if ($res) {
                        $query_user = "SELECT * FROM `users` WHERE `username` = '$username'; ";
                        $res = mysqli_query($conn, $query_user);
                        session_start();
                        $user = mysqli_fetch_all($res);
                        $_SESSION['id'] = $user[0][0];
                        $_SESSION['username'] = $user[0][1];
                        header("Location:/myproject/pags/paneluser/userpanel.php");
                } else {
                        echo "NO";
                        var_dump($res);
                }
        } else {
                echo "Dont Connect DB";
        }
}
function Login()
{
        include_once("connectdb.php");
        if ($conn) {
                // var_dump($_POST);
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' AND `is_admin` = 0;";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) === 1) {
                        session_start();
                        $user = mysqli_fetch_all($res);
                        $_SESSION['id'] = $user[0][0];
                        $_SESSION['username'] = $user[0][1];
                        header("Location:/myproject/pags/paneluser/userpanel.php");
                } else {
                        header("Location:/myproject/pags/userlogin/login.php");
                        // echo "<script>alert('Username AND Password Nut is OK');</script>";
                }
        } else {
                echo "Dont Connect DB";
        }
}
function Addnew()
{
        include_once("connectdb.php");
        if ($conn) {
                session_start();
                $user_id = $_SESSION['id'];
                $title = $_POST['title'];
                $post_body = $_POST['post_body'];
                $image_post = $_FILES['img_body'];
                move_uploaded_file($image_post['tmp_name'], "../../images/news_img/" . $image_post['name']);
                $path = "http://localhost/myproject/images/news_img/" . $image_post['name'];
                $query = "INSERT INTO `posts` (title,path,post_body,user_id) VALUES ('$title','$path','$post_body','$user_id');";
                $res = mysqli_query($conn, $query);
                if ($conn) {
                        header("Location:/myproject/pags/paneluser/userpanel.php");
                } else {
                        echo 'Dont send';
                }
        }
}
function EditPostUser()
{
        if ($_POST['btn'] == "edit") {
                include_once("connectdb.php");
                if ($conn) {
                        $post_id = $_POST['post_id'];
                        $title = $_POST['title'];
                        $post_body = $_POST['post_body'];
                        $image_body = $_FILES['image_body'];
                        move_uploaded_file($image_body['tmp_name'], "../../images/news_img/" . $image_body['name']);
                        $path = 'http://localhost/myproject/images/news_img/' . $image_body['name'];
                        $query = "UPDATE `posts` SET title= '$title',path= '$path', post_body= '$post_body' WHERE id = '$post_id' ;";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                                header("Location:/myproject/pags/paneluser/userpanel.php");
                        } else {
                                echo "dzzz";
                                var_dump($query);
                        }
                } else {
                        echo "Dont Connect DB";
                }
        } elseif ($_POST['btn'] == "delete") {
                include_once("connectdb.php");
                if ($conn) {
                        $post_id = $_POST['post_id'];
                        $query="DELETE FROM `posts` WHERE id = '$post_id';";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                                header("Location:/myproject/pags/paneluser/userpanel.php");
                        } else {
                                echo "dzzz";
                                var_dump($query);
                        }
                }
        }
}
