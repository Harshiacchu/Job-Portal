<?php

include 'database.php';

session_start();

echo "";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cno = $_POST['cno'];
  $type = $_POST['type'];
  $password = $_POST['password'];

  $sql = "insert into user_det(name, email, cno,  type, password) values('$name','$email','$cno','$type','$password')";


  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record created successfully')</script>";
    if ($type == 'Student') {
      header("Location: sdash.php");
    } else {
      header("Location: cdash.php");
    }
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  mysqli_close($conn);

}

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $type = $_POST['type'];
  $password = $_POST['password'];

  $sql = "SELECT email, type, password FROM user_det";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    if ($type == 'Student') {
      while ($row = $result->fetch_assoc()) {
        if ($row['email'] == $email) {
          if ($row['password'] == $password) {
            header("Location: sdash.php");
          } else {
            $_SESSION['status'] = "Incorrect password";
            header("Location: home.php");
          }
        } else {
          $_SESSION['status'] = "Email id doesnt exist";
          header("Location: home.php");
        }
      }
    } elseif ($type == 'Company') {
      while ($row = $result->fetch_assoc()) {
        if ($row['email'] == $email) {
          if ($row['password'] == $password) {
            header("Location: cdash.php");
          } else {
            $_SESSION['status'] = "Incorrect password";
            header("Location: home.php");
          }
        } else {
          $_SESSION['status'] = "Email id doesnt exist";
          header("Location: home.php");
        }

      }
    } else {
      $_SESSION['status'] = "User doesnt exist";
      header("Location: home.php");
    }
  } else {
    echo "0 results";
  }
  $conn->close();
}


  if (isset($_POST['sub'])) {
    $cn = $_POST['cn'];
    $pos = $_POST['pos'];
    $jd = $_POST['jd'];
    $ctc = $_POST['ctc'];

    $sql = "INSERT INTO c_det(cname, position, j_desc, ctc) VALUES('$cn','$pos','$jd','$ctc')";


    if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "New job posted successfully";
          header("Location: cdash.php");
      
    } else {
      $_SESSION['status'] = "Error in posting";
          header("Location: cdash.php");
    }

    mysqli_close($conn);
  }

  if (isset($_POST['del'])) {
    $id = $_POST['id'];
    

    $sql = "DELETE FROM c_det WHERE id = '$id'";


    if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Deleted successfully";
          header("Location: cdash.php");
      
    } else {
      $_SESSION['status'] = "Error in deletion";
          header("Location: cdash.php");
    }

    mysqli_close($conn);
  }

  if (isset($_POST['apply'])) {
    $id = $_POST['id'];
    $sn = $_POST['sn'];
    $quali = $_POST['qua'];
    $jpos = $_POST['jpos'];
    $cname = $_POST['cname'];
    $yr = $_POST['yr'];
    $mail = $_POST['mail'];
    

    $sql = "INSERT INTO s_det(cid, name, quali, jpos, cn, type, mail) VALUES ('$id','$sn','$quali','$jpos','$cname','$yr','$mail')";


    if (mysqli_query($conn, $sql)) {
      $_SESSION['status'] = "Inserted successfully";
          header("Location: sdash.php");
      
    } else {
      $_SESSION['status'] = "Error in deletion";
          header("Location: sdash.php");
    }

    mysqli_close($conn);
  }
?>