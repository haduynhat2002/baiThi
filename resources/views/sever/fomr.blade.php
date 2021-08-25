<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Form</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price">
        </div>
        <div class="form-group">
            <label>Avatar:</label>
            <input type="text" class="form-control" placeholder="Enter Avatar" name="avatar">
        </div>
        <button type="submit" class="col-12 btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('#btn').click(function (){
            $.ajax({
                url: "http://localhost:8000/api/product",
                method: 'POST',
                data: {
                    name: $('#name').val(),
                    name: $('#price').val(),
                    name: $('#avatar').val(),
                },
                success: function (data) {
                    alert('Them moi san pham thanh cong')
                    window.localhost.href = 'http://localhost:8000'
                },
                error:function () {

            }
            })
            }
        )
    })
</script>
</body>
</html>
