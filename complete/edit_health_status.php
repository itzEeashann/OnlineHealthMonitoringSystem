<?php
include('session.php');
include("conn.php");
$search_key = "";


if(isset($_POST['searchBtn'])){
	$search_key = $_POST['searchkey'];
  $testic = mysqli_query($con,"SELECT * FROM health_status WHERE ic=$search_key");
  $testresult = mysqli_fetch_array($testic);
  if($testresult['ic']!= null){
    $result=mysqli_query($con,"SELECT * FROM health_status WHERE ic=$search_key");
    $row=mysqli_fetch_array($result);
  } else {
    echo "<script>alert('IC number Unavailable,Please try again');window.location.href='searchpatient.php'; </script>";
  }
  }

  if(isset($_POST["doneBtn"])){
    include("conn.php");
    $sql= "UPDATE health_status SET  
    weight='$_POST[weight]',
    height='$_POST[height]',
    bmi='$_POST[bmi]', 
    blood_pressure='$_POST[blood_pressure]', 
    blood_sugar='$_POST[blood_sugar]',
    cholesterol_level='$_POST[cholesterol_level]',
    heart_rate='$_POST[heart_rate]',
    activities_of_daily_life='$_POST[activities_of_daily_life]',
    falling='$_POST[falling]',
    incontinence='$_POST[incontinence]',
    cognitive='$_POST[cognitive]',
    date_updated='$_POST[date_updated]'
    WHERE ic= '$_POST[searchkey]'";
    if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    echo "<script>alert('Record updated!'); window.location.href='searchpatient.php';</script>";
    }
    else {echo "<script>alert('Record Failed!'); </script>";
    }
  
    }
?>
<head>
  <title>Update Patient's Health Status</title>
  <link href="style/UPDATE_PATIENT.CSS" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet">
  <link href="style/header_footer.css" rel="stylesheet">
</head>

<body>
  <?php
    include('header_NoSession.php');
  ?>
  
  <section class="services" id="services">
    <h1 class="heading"> Update <span>Patient</span> </h1>
    <section>
        <div class="col-4 text-right">
              
        </div>
          <table class="content-table">
          <form method="post">   
          <tbody>
            <tr>
              <td>I/C Number of Patient</td>
              <td><input name="searchkey" type="text" placeholder="I/C Number of Patient" class="box" style="font-size: 20px;" value="<?php echo $row["ic"] ?>" ></span></td>
            </tr>
            <button class="btn btn-sm btn-primary" name="searchBtn" type="submit">Search</button>&nbsp;&nbsp;
            <a href="deletepatient.php?id=<?php echo $row["ic"]?>" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-sm btn-primary" >Delete</a>
            <tr>
              <td>Name of Patient</td>
              <td><input disabled type="text" placeholder="Name of Patient" class="box" style="font-size: 20px;" value="<?php echo $row["patient_name"] ?>"></span></td>
            </tr>
          </tbody>
        </table>
    <div class="box-container">
        <div class="box" >
            <h3>Weight (kg)</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["weight"] ?>" name="weight"></span>
        </div>

        <div class="box" >
            <h3>Height (cm)</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["height"] ?>" name="height"></span>
        </div>

        <div class="box" >
            <h3>Body Mass Index(BMI)(kg/m²)</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["bmi"] ?>" name="bmi"></span>
        </div>

        <div class="box" >
            <h3>Blood Pressure</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["blood_pressure"] ?>" name="blood_pressure"></span>
        </div>

        <div class="box" >
            <h3>Blood Sugar (mg/dL)</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["blood_sugar"] ?>" name="blood_sugar"></span>
        </div>

        <div class="box" >
            <h3>Cholestrol Level (mg/dL)</h3>
            <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["cholesterol_level"] ?>" name="cholesterol_level"></span>
        </div>

        <div class="box" >
          <h3>Heart Rate (bpm)</h3>
          <input type="text" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["heart_rate"] ?>" name="heart_rate"></span>
        </div>
        <div class="box" >
          <h3>Last Edited Date</h3>
          <input type="date" placeholder="" class="box" style="font-size: 16px;" value="<?php echo $row["date_updated"] ?>" name="date_updated"></span>
        </div>
    </div>
    </section> 
  </section>

  <section>
      <body>
          <table class="content-table">
          <thead>
            <tr>
              <th>ABILITY</th>
              <th>SCORE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ACTIVITIES OF DAILY LIFE</td>
              <td><input type="text" placeholder="" class="box" style="font-size: 20px;" value="<?php echo $row["activities_of_daily_life"] ?>" name="activities_of_daily_life"></span></td>
            </tr>
            <tr>
              <td>FALLING</td>
              <td><input type="text" placeholder="" class="box" style="font-size: 20px;" value="<?php echo $row["falling"] ?>" name="falling"></span></td>
            </tr>
            <tr>
              <td>INCONTINENCE(UNCONTROLLABLE LEAKAGE OF URINE)</td>
              <td><input type="text" placeholder="" class="box" style="font-size: 20px;" value="<?php echo $row["incontinence"] ?>" name="incontinence"></span></td>
            </tr>
            <tr>
              <td>COGNITIVE(RISK OF DEMENTIA)</td>
              <td><input type="text" placeholder="" class="box" style="font-size: 20px;" value="<?php echo $row["cognitive"] ?>" name="cognitive"></span></td>
            </tr>
          </tbody>
        </table>
        <table class="content-table2">
          <thead>
            <tr>
              <th>1 - LESS CAPABLE (MOST RISK)</th>
              <th>5 - MOST CAPABLE (LESS RISK)</th>
            </tr>
          </thead>
        </table>
        <div class="col-4 text-right">
          <button class="btn btn-sm btn-primary" name="doneBtn" type="submit">Done</button>
          <button class="btn btn-sm btn-primary" name="cancelBtn" onclick="canceledit()">Cancel</button>
        </div>
        </form>
        <script>
        function canceledit() {
      if (confirm("Are you sure?") == true) {
          window.open("home.php", "_blank"); 
        }
        }
        </script>
      </body>
  </section>
  <?php
    include('footer.html');
  ?>
</body>