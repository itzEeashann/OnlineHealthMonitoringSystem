<?php
  include('session.php');
  include("conn.php");
  $result = mysqli_query($con,"SELECT * FROM health_status WHERE ic = '".$_SESSION['ic']."'");
  $row = mysqli_fetch_array($result);
  mysqli_close($con);
?>

<head>
  <title>Health Status</title>
  <link href="style/HEALTHSTATUS.CSS" rel="stylesheet">
  <link href="style/TABLE.CSS" rel="stylesheet">
  <link href="style/header_footer.css" rel="stylesheet">
</head>

<body>
<?php
  include('header_NoSession.php');
?>
<section class="services" id="services">

  <h1 class="heading"> Health <span>Status</span> </h1>

  <div class="box-container">
      <div class="box">
          <h3>Weight (kg)</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['weight'];
          ?> 
          </div>
      </div>

      <div class="box">
          <h3>Height (cm)</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['height'];
          ?> 
          </div>
      </div>

      <div class="box">
          <h3>Body Mass Index(BMI)(kg/m²)</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['bmi'];
          ?>
          </div>
      </div>

      <div class="box">
          <br><h3>Blood Pressure</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['blood_pressure'];
          ?>
          </div>
      </div>

      <div class="box">
          <h3>Blood Sugar (mg/dL)</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['blood_sugar'];
          ?>
          </div>
          
      </div>

      <div class="box">
          <h3>Cholestrol Level (mg/dL)</h3>
          <div class="box" style="font-size: 20px;"></span>
          <?php
            echo $row['cholesterol_level'];
          ?>
          </div>
      </div>

      <div class="box">
        <h3>Heart Rate (bpm)</h3>
        <div class="box" style="font-size: 20px;"></span>
        <?php
            echo $row['heart_rate'];
        ?>
        </div>
      </div>
      <div class="box">
        <h3>Last Edited Date</h3>
        <div class="box" style="font-size: 20px;"></span>
        <?php
            echo $row['date_updated'];
        ?>
        </div>
      </div>

  </div>

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
            <td class="box" style="font-size: 20px;" ></span>
            <?php
            echo $row['activities_of_daily_life']
            ?>
            </td>
          </tr>
          <tr>
            <td>FALLING</td>
            <td class="box" style="font-size: 20px;" ></span>
            <?php
            echo $row['falling']
            ?>
            </td>
          </tr>
          <tr>
            <td>INCONTINENCE(UNCONTROLLABLE LEAKAGE OF URINE)</td>
            <td class="box" style="font-size: 20px;" ></span>
            <?php
            echo $row['incontinence']
            ?>
            </td>
          </tr>
          <tr>
            <td>COGNITIVE(RISK OF DEMENTIA)</td>
            <td class="box" style="font-size: 20px;" ></span>
            <?php
            echo $row['cognitive']
            ?>
            </td>
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
    </body>
</section>
<?php
  include("footer.html");
?>
</body>