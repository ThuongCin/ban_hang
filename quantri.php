<?php
session_start();
include_once('Connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vietpro Mobile Shop - Trang chủ quản trị</title>
    <link rel="stylesheet" type="text/css" href="css/quantri.css" />
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="navbar">

                <div id="user-info">
                    <p>Xin chào <span><?php echo $_SESSION['tk']; ?></span> đã đăng nhập vào hệ thống</p>
                    <p><a href="dangxuat.php">Đăng xuất</a></p>
                </div>
            </div>
            <div id="banner">
                <div id="logo"><a href="#"><img src="anh/logo.png" /></a></div>
            </div>
        </div>
<br> <br>
        <?php
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once'danhsach.php';
                    break;
                case 'Them':
                    require_once'Them.php';
                    break;
                case 'Sua':
                    require_once'Sua.php';
                    break;
                case 'Xoa':
                    require_once'Xoa.php';
                    break;
                default:
                    require_once'danhsach.php';
                    break;
            }
        } else{
            require_once 'danhsach.php';
        }
        ?>

    </div>
</body>

</html>