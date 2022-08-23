<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Cloud Vision API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row mt-5">
            <div class="col-md-12 p-5" style="margin: auto; background: white; box-shadow: 5px 5px 2px #888; border-radius: 20px;">
                <div class="panel-heading">
                    <h2><strong>Google Cloud</strong> - Vision API</h2>
                </div>
                <hr>
                <form action="check.php" method="post" enctype="multipart/form-data" class="p-3">
                    <input type="file" name="image" accept="image/*" class="form-control" required>
                    <br>
                    <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Analyse Image</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>