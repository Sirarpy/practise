<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        form{
            width:40%;
            margin: 0 auto;
        }
        .reg{
            font-size: 30px;
            color: #10ccba;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="reg">Log-in</div>
<form method="post" action="check_log.php">
        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Log-in</button>
    <?php if(isset($_GET['lms'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?= $_GET['lms']?>
        </div>
    <?php } ?>

</form>

</body>
</html>




