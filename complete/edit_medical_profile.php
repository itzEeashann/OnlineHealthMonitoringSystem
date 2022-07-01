<?php
include("session.php");
	if(isset($_POST["updateBtn"])){
		include("conn.php");
    $id = $_SESSION['id'];
		$sql = "UPDATE doctor_nurse_profile SET 
		doctor_nurse_name='$_POST[name]', 
		contact_number='$_POST[contact_number]',   
		gender='$_POST[gender]', 
		hospital_name='$_POST[hospital_name]' 
		WHERE id= $id";
		if (mysqli_query($con, $sql)) {
		mysqli_close($con);
		echo "<script>alert('Record updated!'); window.location.href='viewmedicalprofile.php';</script>";
		}
    else {echo "<script>alert('Record Failed!'); </script>";
		}

	}
?>

<head>
  <title>Edit Profile</title>
  <link href="style/header_footer.css" rel="stylesheet" type="text/css">
  <link href="style/EDITPROFILE.CSS" rel="stylesheet" type="text/css">

</head>
<body>
  <?php
    include("conn.php");
    $id = $_SESSION['id'];
    $result = mysqli_query($con,"SELECT * FROM doctor_nurse_profile WHERE id=$id");
    $row = mysqli_fetch_array($result);

    include('header_NoSession.php');
  ?>

  <div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://wallpapercave.com/dwp2x/wp2595607.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Edit Profile</h1>
            <p class="text-white mt-0 mb-5">You can edit your profile informations here.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="card-body">
                  <form method="post" >
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-name">Name</label>
                            <input name="name" type="text" id="input-name" class="form-control form-control-alternative" value="<?php echo $row["doctor_nurse_name"] ?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-last-name">Contact Number</label>
                            <input name="contact_number" type="tel" id="input-tel" class="form-control form-control-alternative"value="<?php echo $row["contact_number"] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-name">Name of Hospital/ Shelter</label>
                            <input name="hospital_name" type="text" id="input-name" class="form-control form-control-alternative" value="<?php echo $row["hospital_name"] ?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-name">Gender</label> <br>
                            <input type="radio" name="gender" 
                            <?php
                            if ($row["gender"]=="male"){
                              echo 'checked="checked"';
                            }
                            ?>			
                            value="male" required="required"> &nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" 
                            <?php
                            if ($row["gender"]=="female"){
                              echo 'checked="checked"';
                            }
                            ?>	
                            value="female" required="required"> &nbsp;&nbsp;Female 
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn" name="updateBtn">Save</button>
                    <hr class="my-4">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    mysqli_close($con);
    include('footer.html');
  ?>

</body>