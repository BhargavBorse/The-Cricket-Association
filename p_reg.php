<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#dc3545">
    <!-- manifest file -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    
    <!--CSS for login-->
    <link type="text/css" rel="stylesheet" href="login.css" />
    
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="custom.css" />
    <title>Register - TCA</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    
    <style>
        body{
            background-image: url(bg--1.png);
        }
    </style>
</head>

<body>         
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="d-flex justify-content-center">
                    <h3 class="font-weight-normal">The Cricket Association</h3>
                </div>
                <span class="border" style="background-color: rgba(34, 31, 32, 0.87); color: white;">
                    <form action="sql/reg.php" method="POST" style="padding: 50px; background-color: rgba(34, 31, 32, 0.87); color: white;">
                        <h3>Register Here</h3>
                        <hr class="border-bottom">
                        <label>Player Name</label>
                        <input type="text" name="name" class="form-control" id="username" required>
                        <br>
                        <label>Gender </label><br>
                        <input type="radio" name="gender" value="Male" required>  Male
                        <input type="radio" name="gender" value="Female">  Female <br><br>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <br>
                        <label>Contact</label>
                        <input type="number" name="phone_no" class="form-control" required>
                        <br>
                        <label>Select Game</label>
                        <select name="game" id="game" class="form-control" required>
                            <option value="Cricket" class="form-control">Cricket</option>
                        </select>
                        <br>
                        <label>Role</label>
                        <select name="role" id="role" class="form-control" required>
                            <option class="form-control" value="">---Select---</option>
                            <option value="Batsman" class="form-control">Batsman</option>
                            <option value="Bowler" class="form-control">Bowler</option>
                            <option value="wicket Keeper" class="form-control">Wicket Keeper</option>
                            <option value="Fielder" class="form-control">Fielder</option>
                        </select>
                        <br>
                        <label>DOB</label>
                        <input type="date" name="date" class="form-control" required>
                        <br>
                        <label>Age</label>
                        <input type="number" name="year" class="form-control" required>
                        <br>
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" required>
                        <br>
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <br>
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" required>
                        <br>
                        <input type="submit" value="SEND REQUEST" class="btn btn-block btn-outline-info">  
                        <!-- <a href="fp.php" class="nav-link btn-outline-info">Forgot Password</a> -->
                    </form>
                </span>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>