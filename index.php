<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<div class="container mt-5">
    <form action="formhandler/action.php" method="post">
        <div class="form-group">
            <label for="firstname">Your firstname:</label>
            <input name="firstname" id="firstname" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="age">Your age:</label>
            <input name="age" id="age" type="number" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
