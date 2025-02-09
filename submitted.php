<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Complete</title>
        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-center submitCon">
        <div class="row">
            <div class="col-md-12">
                <h1><b><?php echo "You have successfully been added to our newsletter ".$_POST['firstName']." ".$_POST['lastName']."! ".$_POST['email']." will receive weekly emails"; ?></b></h1>
            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>