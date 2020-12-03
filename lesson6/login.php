<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="col-6 offset-3">
            <form action="post-login.php" method="post">
                <h2 class="text-center">Đăng nhập</h2>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <?php if(isset($_GET['msg'])):?>
                    <p class="text-danger"><?= $_GET['msg'] ?></p>
                <?php endif ?>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>