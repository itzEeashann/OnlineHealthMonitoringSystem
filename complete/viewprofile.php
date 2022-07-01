<?php
    include('session.php');
?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="style/header_footer.css">
        <link href="style/PROFILE1.CSS" rel="stylesheet">
    </head>
    <body>
    <?php
        include("header_NoSession.php");
        include("conn.php");
        $result = mysqli_query($con,"SELECT * FROM patient_profile WHERE ic ='".$_SESSION['ic']."'");
        // $result = mysqli_query($con,"SELECT * FROM patient_profile WHERE ic = '020221011106'");
        $row = mysqli_fetch_array($result);
         mysqli_close($con);
    ?>
        <div class="main-content">
                <!-- Header -->
                <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://cdn.mos.cms.futurecdn.net/7e9NZHbGx8raaHLXVZk82V-1024-80.jpeg); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
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
                            <h3 class="mb-0">My Profile</h3>
                            </div>
                            <div class="col-4 text-right">
                            <a href="edit_profile.php" class="btn btn-sm btn-primary">Edit Profile</a>
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
                                    <id="input-name" class="form-control form-control-alternative" value="">
                                    <?php
                                    echo $row['patient_name'];
                                    ?>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-ic-number">IC Number</label>
                                    <id="input-ic-number" class="form-control form-control-alternative" value="">
                                    <?php
                                    echo $row['ic'];
                                    ?>                            
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="Residential-Address">Residential Address</label>
                                    <id="input-Residential-Address" class="form-control form-control-alternative"value="">
                                    <?php
                                    echo $row['address'];
                                    ?>     
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-gender">Gender</label>
                                    <id="input-gender" class="form-control form-control-alternative"value="">
                                    <?php
                                    echo $row['gender'];
                                    ?>      
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">Country</label>
                                    <id="input-country" class="form-control form-control-alternative" value="">
                                    <?php
                                    echo $row['country'];
                                    ?>      
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-city">City</label>
                                    <id="input-city" class="form-control form-control-alternative" value="">
                                    <?php
                                    echo $row['city'];
                                    ?>  
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                    <label class="form-control-label" for="State">State</label>
                                    <id="input-state" class="form-control form-control-alternative"value="">
                                    <?php
                                    echo $row['state'];
                                    ?>  
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                    <label class="form-control-label" for="input-tel">Contact Number</label>
                                    <id="input-contact_number" class="form-control form-control-alternative"value="">
                                    <?php
                                    echo $row['contact_number'];
                                    ?>  
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="Postcode">Postcode</label>
                                    <id="input-postcode" class="form-control form-control-alternative"value="">
                                    <?php
                                    echo $row['postcode'];
                                    ?>  
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
            include("footer.html");
            ?>
    </body>
</html>