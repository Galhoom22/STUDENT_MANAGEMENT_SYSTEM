<!DOCTYPE html>
<html lang="en">

<head>
    <title>مشروع إدارة الطلاب</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start Cairo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- External CSS File -->
    <link rel='stylesheet' href='css/styles.css'>
</head>

<body dir='rtl'>
    <?php include('database/connect.php') ?>
    <div id='mother'>
        <form method="POST">
            <!-- لوحة التحكم -->
            <aside>
                <div id='div'>
                    <img src="imgs/student.png" alt='website logo' width="200">
                    <h3>لوحة المدير</h3>
                    <label for='id'>:رقم الطالب</label><br>
                    <input type='number' name='id' id='id' required><br>

                    <label for='name'>:اسم الطالب</label><br>
                    <input type='text' name='name' id='name' required><br>

                    <label for='address'>:عنوان الطالب</label><br>
                    <input type='text' name='address' id='address' required><br><br>

                    <button name='add'>اضافة طالب</button>
                    <button name='del'>حذف طالب</button>
                </div>
            </aside>

            <!-- عرض بيانات الطلاب -->
            <main>
                <table id='tbl'>
                    <tr>
                        <th>رقم الطالب</th>
                        <th>اسم الطالب</th>
                        <th>عنوان الطالب</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)):
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                        echo "</tr>";
                    endwhile;
                    ?>
                </table>
            </main>
        </form>
    </div>
</body>

</html>