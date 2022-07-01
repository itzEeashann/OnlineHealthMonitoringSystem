<?php
  include('session.php');
?>
<head>
  <title>Search Patient</title>
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
      <body>
        <div class="col-4 text-right">
        </div>
          <table class="content-table">
            <form method="post" action="edit_health_status.php">
              <tr>
              <td>I/C Number of Patient</td>
              <td><input name="searchkey" type="text" placeholder="I/C Number of Patient" class="box"></span><br>
              </td>
            </tr>
            <button class="btn btn-sm btn-primary" name="searchBtn" type="submit">Search</button>
            </form>
          </table>
      </body>
    </section>
  </section>

  <?php
    include('footer.html');
  ?>
</body>