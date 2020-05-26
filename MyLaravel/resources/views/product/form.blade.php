<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
            integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
            crossorigin="anonymous"></script>
    <style>
        body {
            margin-left: 50px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Product form</h1>
<form action ="/product/list" method="post">

    {{csrf_field()}}

    <div class="form-group">
        <label>Product Name :</label><br>
        <input type="text" name = "name" class="form-group">
    </div>
    <div class="form-group">
        <label>Price : </label><br>
        <input type="text" name = "price" class="form-group">
    </div>
    <div class="form-group">
        <label>Category :</label>
        <select name = "category" class="form-control">
            <option value="cate1">Category 1</option>
            <option value="cate2">Category 2</option>

        </select>
    </div>

    <div class="form-group">
        <label>Img :</label><br>
        <input type="text" name="thumbnail" class="form-group">
    </div>

    <div class = "form-group">
        description :<br> <textarea name="description" form="tera" rows="3"></textarea>
    </div>
    <div >
        <input type="submit" value="Save" class="btn btn-primary">
        <input type="submit" value="Reset" class="btn btn-dark">
    </div>
</form>
</body>
</html>
