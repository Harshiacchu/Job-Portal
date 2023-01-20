<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="header">
        <a href="home.php" class="logo">JOB PORTAL</a>
        <div class="header-right">
            <!-- <a class="active" href="#home">Home</a> -->
            <!-- <a href="home.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a> -->
        </div>
    </div>

    <div class="container">

        <form method="post" action="home.php">
            <h1 class="sup">REGISTER</h1>
            <hr>
            <div class="mb-3">
                <label for="InputName" class="form-label">Full Name</label>
                <input class="form-control" type="text" placeholder="Enter your full name"
                    aria-label="default input example" name="name">
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your email" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="InputNumber" class="form-label">Contact Number</label>
                <input class="form-control" type="text" placeholder="Enter your phone no"
                    aria-label="default input example" name="cno">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="company1" value="Company" name="type" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Company
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="student1" value="Student" name="type">
                <label class="form-check-label" for="exampleRadios2">
                    Student
                </label>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password"
                    name="password">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Re-Type Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Re-type Password">
            </div>

            
            <hr>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            <div class="container-signin">
                <p>Already have an account? <a href="home.php">Login</a>.</p>
            </div>

        </form>
    </div>

</body>

</html>

