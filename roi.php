<!DOCTYPE html>
<html lang="en">
      <?php
          include ('connection.php');
          error_reporting(0);
          include ('db_software.php');
      ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="icon/snowflake.png" rel="shortcut icon">
  </head>
  <body>

    <div class="container">
      <nav class="navbar navbar-default nobord const navsmallmrgbot">
        <div class="container-fluid blueb">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <!--  <a class="navbar-brand" href="#">-->
            <a class="navbar-brand">
              <img src="images/Snowlogo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

              <li><a><h class="whitfnt geofont">Snow for Engineering: ROI Calculator</p></a></li>
              <li><a href="help.html"><h class="whitfnt2 geofont">Help</p></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      <div class="jumbotron aligncntr">
        <div class="container-fluid rightalgn"><img src="images/pointer3.png"></div>

        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h2 class="headngsprpg">ROI for
              <?php
              echo $companyName;
              ?>
            </h2>
          </div>
          <div class="col-md-2 col-sm-2 middleset aligncntr">
          <br>
            <a href="files/SampleCalculation.pdf" download><button type="button" class="btn dlbutdes">Download PDF</button></a>
          </div>

          <div class="col-md-4 col-sm-4 aligncntr"><br>
            <a href="#">
              <img src="images/newpdficon.png" width="45px" height="45px" onmouseover="this.src='images/newpdficonhover.png'"
                onmouseout="this.src='images/newpdficon.png'" title="Export to PDF">
            </a>
            <a href="#">
              <img src="images/newexcelicon.png" width="45px" height="45px" onmouseover="this.src='images/newexceliconhover.png'"
                onmouseout="this.src='images/newexcelicon.png'" title="Export to Excel">
            </a>
            <a href="#">
              <img src="images/newppticon.png" width="45px" height="45px" onmouseover="this.src='images/newppticonhover.png'"
                onmouseout="this.src='images/newppticon.png'" title="Export to PowerPoint">
            </a>
            <a href="#">
              <img src="images/pngicon.png" width="45px" height="45px" onmouseover="this.src='images/pngiconhover.png'"
                onmouseout="this.src='images/pngicon.png'" title="Export to PNG">
            </a>
            <a href="#">
              <img src="images/jpgicon.png" width="45px" height="45px" onmouseover="this.src='images/jpgiconhover.png'"
                onmouseout="this.src='images/jpgicon.png'" title="Export to JPG">
            </a>
          </div>
        </div><!--row-->

        <br>

          <div class="row">
            <div class="col-md-6 col-sm-6 roilbl">
              Application Name: <span class="roiplch"><?php echo $applicationName;  ?></span></br>
              Agreement Type: <span class="roiplch"><?php echo $agreementType;  ?></span></br>
              License Type: <span class="roiplch"><?php echo $licenseType;  ?></span></br>
              Number of Licenses: <span class="roiplch"><?php echo number_format($noOfLicenses); ?></span></br>
              Cost Per License: <span class="roiplch">$<?php echo number_format($costPerLicense,2); ?></span></br>
              Location: <span class="roiplch"><?php echo $imloc;  ?></span></br>
              <br>
            </div>

            <div class="col-md-6 col-sm-6 roidiv colorwhite">
              <span class="lresult" id="roidesign"><span id=roifnllbl> Calculated ROI: </span><br>$

                <?php
                //echo $calculatedROI;
                echo number_format($valSavings3,2);
                ?>
              </span>
            </br>
              <span class="lresult" id="cutlicdesign"><span id=cutlicfnllbl> Purchased licenses can be cut to: </span><br>
                <?php
                  echo number_format($cutLicenses);
                ?>
              </span>

            </div><!--general display of roi-->
          </div> <!--row-->


            <br>

                <table align="center">
                  <tr>
                      <th colspan="4" class="aligncntr tabletitlecelldes">ROI Calculation</th>
                  </tr>
                  <tr>
                      <td rowspan="2" width="30%" id="firstyrgradient">1st Year</td>
                      <td width="20%" class="yearlydatalbl colorwhite">ROI</td>
                      <td class="colorwhite yearlydata"><?php echo number_format($valROI1); ?>%</td>
                  </tr>
                  <tr>
                      <td width="20%" class="yearlydatalbl pricebgcol">savings</td>
                      <td class="pricebgcol yearlydata">$<?php echo number_format($valSavings1,2); ?></td>
                  </tr>
                  <tr>
                      <td rowspan="2" width="30%" id="secondyrgradient">2nd Year</td>
                      <td width="20%" class="yearlydatalbl colorwhite">ROI</td>
                      <td class="colorwhite yearlydata"><?php echo number_format($valROI2); ?>%</td>
                  </tr>
                  <tr>
                      <td width="20%" class="yearlydatalbl pricebgcol">savings</td>
                      <td class="pricebgcol yearlydata">$<?php echo number_format($valSavings2,2); ?></td>
                  </tr>
                  <tr>
                      <td rowspan="2" width="30%" id="thrdyrgradient">3rd Year</td>
                      <td width="20%" class="yearlydatalbl colorwhite">ROI</td>
                      <td class="colorwhite yearlydata"><?php echo number_format ($valROI3); ?>%</td>
                  </tr>
                  <tr>
                      <td width="20%" class="yearlydatalbl pricebgcol">savings</td>
                      <td class="pricebgcol yearlydata">$<?php echo number_format($valSavings3,2); ?></td>
                  </tr>

                </table>

          <br><br>

        <a href="company.php" class="btn recalcbutdes geofont">Click here to calculate again</a>

    </div><!--jumbotron-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <p class="dfooter geofont">Copyright © ROI Calculator. All rights reserved.</p>
  </body>
</html>
