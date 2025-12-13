<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>اضافه کردن کاربر جدید</h1>
        <div>
            <a href="index.php" class="btn btn-primary">بازگشت</a>
        </div>
    </header>
    <form action="process.php" method="post">
        <div class="form-element my-4">
            <input type="text" class="form-control" name="title" placeholder="نام کاربر" required>
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="author" placeholder="نام خانوادگی" required>
        </div>
        <div class="form-element my-4">
            <select name="type" class="form-control" required>
                <option value="">انتخاب نوع قرارداد</option>
                <option value="تمام وقت">تمام وقت</option>
                <option value="پاره وقت">پاره وقت</option>
                <option value="بلند مدت">بلند مدت</option>
                <option value="کوتاه مدت">کوتاه مدت</option>
            </select>
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="description" placeholder="اطلاعات کاربر" required>
        </div>
        <div class="form-element">
            <a href="index.php">
                <input type="submit" class="btn btn-success" name="create"  value="اضافه کردن" >
            </a>
        </div>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
