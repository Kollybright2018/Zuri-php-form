<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Registration Form</title>
</head>
<body>
    .<div class="container-fluid !direction !spacing">
        <div class="row justify-content-center mt-3" >
            <div class="col-4">
                <form action="user_data.php" method="post">
                    <div class="form-group">
                        <label class="form-label" for="Name">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name here" required >
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="Name">Email:</label>
                        <input type="email" name="email" class="form-control" id="email"  placeholder="Enter Your Mail" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="date">Date of Birth:</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="" required>
                    </div>
                        <p class="my-3">Gender:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" checked placeholder="" required>Male
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" placeholder="" required>Female
                    <label class="form-check-label" for="radio2"></label>
                    </div>

                    <div class="form-group">
                    <label class="form-label" for="country">Country:</label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="Enter your country " required>
                    </div>

                <input type="submit" name="register" value="Register" class="form-contol btn btn-success my-3">

                </form>
            </div>
        </div>
    </div>
</body>
</html>