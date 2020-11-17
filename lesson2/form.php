<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <div class="">
            <label for="">Username:</label>
            <input type="text" name="name">
        </div>
        <div class="">
            <label for="">Age:</label>
            <input type="number" name="age">
        </div>
        <div>
            <label for="">Gender:</label>
            <input type="radio" checked value="1" name="gender">Nữ
            <input type="radio" value="2" name="gender">Nam
            <input type="radio" value="3" name="gender">Khác
        </div>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>