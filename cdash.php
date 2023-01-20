<?php include 'header.php'; ?>
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
<!-- Page content -->
<div class="content">
    
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
    Post Job
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
    Delete Job
  </button>
  
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <form method="POST" action="config.php">
                <div class="mb-3">
                    <label for="Company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="" name="cn">

                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="pos">
                </div>

                <div class="form-group">
                    <label for="job_desc">Job Description</label>
                    <textarea class="form-control" id="job_desc" rows="3" name="jd"></textarea>
                </div>

                <div class="mb-3">
                    <label for="ctc" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="ctc" name="ctc">
                </div>

                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
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
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
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
                        <td>
                            <?php echo $rows['position']; ?>
                        </td>
                        <td><?php echo $rows['ctc']; ?></td>
                    </tr>
                    
                <?php } ?>
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




</body>

</html>