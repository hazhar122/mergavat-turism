<?php
if ($_POST['form_name'] === "addnew") {
        addnew();
} else if ($_POST['form_name'] === "editnew") {
        editnew();
} else if ($_POST['form_name'] === "login") {
        login();
} else if ($_POST['form_name'] === "UserSend") {
        ControllNews();
}
function addnew()
{
        include_once("connectdb.php");
        if ($conn) {
                $title = $_POST['title'];
                $textbody = $_POST['textbody'];
                $imgbody = $_FILES['imgnews'];
                move_uploaded_file($imgbody['tmp_name'], "../../images/news_img/" . $imgbody['name']);
                $path = 'http://localhost/myproject/images/news_img/' . $imgbody['name'];
                $query = "INSERT INTO posts (title, path, post_body, user_id)
        VALUES ('$title', '$path', '$textbody', 1);";
                $res = mysqli_query($conn, $query);
                if ($res) {
                        header("Location:/myproject/pags/admin/admin.php");
                } else {
                        echo "NO";
                        var_dump($query);
                }
        } else {
                echo "Don`t Connect DB";
        }
}
function editnew()
{
        // var_dump($_POST);
        // var_dump($_FILES);
        include_once("connectdb.php");
        if ($conn) {
                if ($_POST['btn'] == 'edit') {
                        $id = $_POST['user_id'];
                        $title = $_POST['title'];
                        $text_body = $_POST['post_body'];
                        $imgnews = $_FILES['imgnews'];
                        move_uploaded_file($imgnews['tmp_name'], "../../images/news_img/" . $imgnews['name']);
                        $path = 'http://localhost/myproject/images/news_img/' . $imgnews['name'];
                        $query = " UPDATE posts SET `title` = '$title' , `path` = '$path' , `post_body` = '$text_body' WHERE `id` = '$id' ";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                                header("Location:/myproject/pags/admin/admin.php");
                        } else {
                                echo "<script>alert('Dont Update');</script>";
                        }
                } else if ($_POST['btn'] == 'delete') {
                        $id = $_POST['user_id'];
                        $query = " DELETE FROM posts WHERE `id` = '$id' ";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                                header("Location:/myproject/pags/admin/admin.php");
                        } else {
                                echo "<script>alert('Dont Delete');</script>";
                                header("Location:/myproject/pags/admin/admin.php");
                        }
                }
        } else {
                echo "DONT CONNECT DATA BACE";
        }
}
function login()
{
        include_once("connectdb.php");
        if ($conn) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password' AND `is_admin` = 1 ";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) === 1) {
                        header("Location:/myproject/pags/admin/admin.php");
                } else {
                        header("Location:/myproject/pags/login/login.html");
                }
        } else {
                echo "Don`t Connect DB";
        }
}
function ControllNews()
{
        var_dump($_POST);
        if ($_POST['btn'] === "Confirmation") {
                include_once("connectdb.php");
                $id = $_POST['id'];
                $res = mysqli_query($conn, "UPDATE `posts` SET user_id = 1 WHERE id= '$id';");
                if ($res) {
                        header("Location:/myproject/pags/admin/newsusers/usernew.php");
                }
        } elseif ($_POST['btn'] === "reject") {
                include_once("connectdb.php");
                $id = $_POST['id'];
                $res = mysqli_query($conn, "DELETE FROM `posts` WHERE id = '$id';");
                if ($res) {
                        header("Location:/myproject/pags/admin/newsusers/usernew.php");
                }
        }
}
