<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php include_once './header.php' ?>
    <div class="container">
        <form action="luu-danh-muc-moi.php" method="post" >
            <div class="col-6 offset-3">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="name">
                </div>
                
                <div class="form-group">
                    <label for="">Đường dẫn</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-info">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>