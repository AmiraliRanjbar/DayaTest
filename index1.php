<!DOCTYPE html>
<html lang="fa">
<head>
    <title>Page Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=IBM+Plex+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&family=Merriweather+Sans:wght@300..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:wght@300..900&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: "Rubik", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    form{
        max-width: 500px;
        border-radius: 10px;
        background-color: gray;
        padding: 20px 40px;
        margin: 20px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .box1{
        max-width: 500px;
        background-color: gray;
        border-radius: 10px;
        padding: 20px 40px;
        margin: 20px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<form method="post" action="<?php echo  $_SERVER['PHP_SELF'];?>">
    نام کاربری را وارد نمایید : <label>
        <input type="text" name="fname" />
    </label>
    <br><br>
    ایمیل را وارد نمایید : <label>
        <input type="email" name="email" />
    </label>
    <br><br>
    <button type="submit" id="btn">ثبت اطلاعات</button>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fname'];
    $email = $_POST['email'];
    //بررسی خالی بودن یا نبودن متغییر
        if(empty($name ) && empty($email) ) {
        echo "<h4 style='color:red'>نام کاربری و ایمیل را وارد کنید<h1></h4>";
    } else {
        echo  "<div class='box1'>";
        echo  "<h4 style='color: green'>اطلاعات با موفقیت ثبت شد</h4>";
        echo  "<br>";
        echo "<h3>اطلاعات وارد شده: </h3>";
        echo  $name;
       echo "<br>";
        echo  $email;
        echo "</div>";
    }
}

?>

</body>
</html>