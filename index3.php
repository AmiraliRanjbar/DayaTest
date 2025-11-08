<!DOCTYPE html>
<html>
<head>
    <title>Full Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=IBM+Plex+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&family=Merriweather+Sans:wght@300..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:wght@300..900&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        direction: rtl;
        font-family: "Rubik", sans-serif;
        box-sizing: border-box;
    }
    form{
        padding: 20px 40px;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 10px 20px;
        border-radius: 10px;
        box-shadow: 5px 5px 4px #a1a1ff;
        border: 1px solid blue;
        font-weight: bold;
    }
    .error {
        color: red;
    }
    input{
        max-width: 300px;
        margin: 10px;
        border-radius: 3px;
    }
</style>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "نام را وارد نمایید";
    } else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "نام معتبر وارد نمایید";
        }

    }

    if (empty($_POST["email"])) {
        $emailErr = "ایمیل را وارد نمایید";
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "لطفا ایمیل معتبر وارد نمایید";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "آدرس وب سایت معتبر نیست";
        }
    }

    if(empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])) {
        $genderErr = "";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function  test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<h1>PHP Form Full Validation</h1>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>نام</label> <input type="text" name="name" value="<?php echo $name; ?>" />
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>

    <label>ایمیل : </label> <input type="text" name="email" value="<?php echo  $email; ?>" />
    <span class="error"><?php echo  $emailErr; ?></span>
    <br><br>

    <label>آدرس وب سایت : </label> <input type="text" name="website" value="<?php echo  $website; ?>" />
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>

    <label>نظرات : <textarea name="comment" rows="5" cols="40" ><?php echo  $comment; ?>
        </textarea>
        <br><br>

        جنسیت : <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female")
            echo  "checked"; ?> value="female"> زن

        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">مرد
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">غیره
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="ثبت">

</form>


<?php
echo  "اطلاعات وارد شده  : ";
echo  $name;
echo  "<br>";
echo  $email;
echo  "<br>";
echo  $website;
echo  "<br>";
echo  $comment;
echo  "<br>";
echo  $gender;
?>

</body>
</html>



