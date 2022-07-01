<?php
  include('session.php');
?>

<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="style/header_footer.css">
        <link href="style/PROFILE.css" rel="stylesheet">
    </head>

    <body>
    <?php
        include("header_NoSession.php");
        include("conn.php");
        $result = mysqli_query($con,"SELECT * FROM doctor_nurse_profile WHERE id = '".$_SESSION['id']."'");
        $row = mysqli_fetch_array($result);
         mysqli_close($con);
    ?>

  <div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://www.itl.cat/pngfile/big/290-2908573_medicine-doctor.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Welcome!</h1>
            <p class="text-white mt-0 mb-5">Welcome to your profile page, you can view your profile information here</p>
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
                <div class="col-4 text-right">
                  <a href="edit_medical_profile.php" class="btn btn-sm btn-primary">Edit Profile</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-name">Name</label>
                         <id="input-name" class="form-control form-control-alternative" >
                        <?php
                        echo $row['doctor_nurse_name'];
                        ?> 
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-id-number">ID Number</label>
                        <id="input-id-number" class="form-control form-control-alternative" >
                        <?php
                        echo $row['id'];
                        ?>                      
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="Gender">Gender</label>
                        <id="input-first-name" class="form-control form-control-alternative">
                        <?php
                        echo $row['gender'];
                        ?> 
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Contact Number</label>
                        <id="input-tel" class="form-control form-control-alternative">
                        <?php
                        echo $row['contact_number'];
                        ?> 
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Name of hospital/ shelter</label>
                        <id="input-tel" class="form-control form-control-alternative">
                        <?php
                        echo $row['hospital_name'];
                        ?> 
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include('footer.html');
  ?>
</body>
</html>