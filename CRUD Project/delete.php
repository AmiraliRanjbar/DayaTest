<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    body{
        direction: rtl;
    }
</style>
<body>
<div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>حذف کاربر</h1>
        <div>
            <a href="index.php" class="btn btn-primary">بازگشت</a>
        </div>
    </header>
    <?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        include "connect.php";
        $sql = "SELECT * FROM books WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>

        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" placeholder="Book">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" placeholder="Author Name:">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">انتخاب نوع قرارداد</option>
                    <option value="تمام وقت" <?php if($row['type']=="Adventure"){echo "selected";} ?>>تمام وقت</option>
                    <option value="پاره وقت" <?php if($row['type']=="Fantasy"){echo "selected";} ?>>پاره وقت</option>
                    <option value="بلند مدت" <?php if($row['type']=="SciFi"){echo "selected";} ?>>بلند مدت</option>
                    <option value="کوتاه مدت" <?php if($row['type']=="Horror"){echo "selected";} ?>>کوتاه مدت</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" placeholder="Book Description:">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-element">
                <input type="submit" class="btn btn-danger" name="delete" value="حذف">
            </div>
        </form>

        <?php
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

