<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title> Calculator </title>
</head>
<body>
<div class="container">
    <form action="" method="POST">

        <div class="form-group">
            <label for="productDescription">Product Description</label>
            <input type="text" name="productDescription" id="productDescription" class="form-control" placeholder=""
                   readonly value="<?php echo $productDescription ?>">
        </div>
        <div class="form-group">
            <label for="listPrice">List Price</label>
            <input type="text" name="listPrice" id="listPrice" class="form-control" placeholder=""
                   readonly value="<?php echo "$listPrice" ?>">
        </div>
        <div class="form-group">
            <label for="discountPercent">Discount Percent</label>
            <div class="input-group">
                <input type="text" class="form-control" name="discountPercent" aria-label="Percent amount" readonly value="<?php echo "$discountPercent"; ?>">
                <div class="input-group-append" >
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="listPrice">Discount Amount</label>
            <input type="text" name="discountAmount" id="discountAmount" class="form-control" placeholder=""
                   readonly value="<?php echo "$discountAmount" ?>">
        </div>
        <div class="form-group">
            <label for="listPrice">Discount Price</label>
            <input type="text" name="discountPrice" id="discountPrice" class="form-control" placeholder=""
                   readonly value="<?php echo "$discountPrice" ?>">
        </div>

        <button type="button" class="btn btn-primary" onclick="window.history.back()">Back</button>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
