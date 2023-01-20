<?php
$servername = "localhost";
$username = "root";
$password = "harshitha";
$dbname = "job";

// connect the database with the server
$conn = new mysqli($servername, $username, $password, $dbname);

// if error occurs 
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$sql = "select * from c_det;";
$result = ($conn->query($sql));
//declare array to store the data of database
$row = [];

if ($result->num_rows > 0) {
    // fetch all data from db into array 
    $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <title>Dashboard</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="cdash.css">

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                    </ul>
                </div>
            </div>
        </nav>

        <div class="sidebar">
            <a class="active" href="sdash.php">Jobs</a>
            
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

        <div class="content">
    
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
    Apply for a Job
  </a>
  
  
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <form method="POST" action="config.php" enctype="multipart/form-data">
      <div class="mb-3">
                    <label for="Company_name" class="form-label">Job ID(from list)</label>
                    <input type="text" class="form-control" id="" name="id">

                </div>
                <div class="mb-3">
                    <label for="Company_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="" name="sn">

                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Qualification</label>
                    <input type="text" class="form-control" id="position" name="qua">
                </div>

                <div class="form-group">
                    <label for="job_desc">Applying for</label>
                    <textarea class="form-control" id="job_desc" rows="3" name="jpos"></textarea>
                </div>

                <div class="mb-3">
                    <label for="ctc" class="form-label">Company name</label>
                    <input type="text" class="form-control" id="ctc" name="cname">
                </div>

                <div class="mb-3">
                    <label for="ctc" class="form-label">Passed out year</label>
                    <input type="text" class="form-control" id="ctc" name="yr">
                </div>

                <div class="mb-3">
                    <label for="ctc" class="form-label">Email</label>
                    <input type="text" class="form-control" id="ctc" name="mail">
                </div>

                
                <button type="submit" class="btn btn-primary" name="apply">Submit</button>
            </form>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <form method="POST" action="config.php">
                <div class="mb-3">
                    <label for="Company_name" class="form-label">id</label>
                    <input type="text" class="form-control" id="" name="id">

                </div>
                <button type="submit" class="btn btn-primary" name="del">Delete</button>
            </form>
      </div>
    </div>
  </div>
</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Job ID</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">Job Desc</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($row))
                foreach ($row as $rows) {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['cname']; ?></td>
                        <td><?php echo $rows['position']; ?></td>
                        <td><?php echo $rows['j_desc']; ?></td>
                        <td><?php echo $rows['ctc']; ?></td>
                    </tr>
                <?php 
            } ?>
        </tbody>
    </table>
</div>

    <script>
        var closebtns = document.getElementsByClassName("btn-close");
        var i;

        for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function () {
                this.parentElement.style.display = 'none';
            });
        }
    </script>
    <script>
        var cb = document.getElementsByClassName("btn-close1");
        var i;

        for (i = 0; i < cb.length; i++) {
            cb[i].addEventListener("click", function () {
                this.parentElement.style.display = 'none';
            });
        }
    </script>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous">
	</script>

</body>

</html>