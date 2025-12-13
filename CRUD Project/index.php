<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        direction: rtl;
    }
</style>
<body>
<div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>لیست کاربران</h1>
        <div>
            <a href="create.php" class="btn btn-primary">اضافه کردن کاربر جدید</a>
        </div>
    </header>

    <table class="table table-bordered">
        <thead>
        <tr>
           <th>آیدی</th>
            <th>نام کاربر</th>
            <th>نام خانوادگی</th>
            <th>نوع قرارداد</th>
            <th>وضعیت</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "connect.php";

        $sql = "SELECT * FROM books";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)) {
            ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['title']); ?></td>
            <td><?php echo htmlspecialchars($row['author']); ?></td>
            <td><?php echo htmlspecialchars($row['type']); ?></td>
            <td>
                <a href="details.php?id=<?php echo $row['id']; ?>" class="btn btn-info">بیشتر</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><img width="25" height="25" src="https://img.icons8.com/pulsar-line/96/edit-text-file.png" alt="edit-text-file"/></a>
                <a href="delete.php?=<?php echo $row['id']; ?>" class="btn btn-danger"><img width="25" height="25" src="https://img.icons8.com/fluency-systems-regular/48/filled-trash.png" alt="filled-trash"/></a>
            </td>
        </tr>
        <?php
        }
        ?>

        </tbody>


    </table>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
