<!DOCTYPE html>
<html lang="en">
<?php
require_once  '../config/db.php';
require_once  '../config/pass.php';

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Research </title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Research App</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>

      </ul>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 3</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p3myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p3myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p3myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 5</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p5myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p5myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p5myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 7</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p7myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p7myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p7myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 9</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p9myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p9myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p9myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 11</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p11myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p11myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p11myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Page 13</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 my-auto">

              <canvas class="p13myBarChart1" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p13myBarChart2" width="100" height="15"></canvas>
            </div>
            <div class="col-sm-12 my-auto">
              <canvas class="p13myBarChart3" width="100" height="15"></canvas>
            </div>
          </div>

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

    <script>

    // --Page 3 Bar Chart Example
    var ctx = $(".p3myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p3myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p3myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 3 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

    // --Page 5 Bar Chart Example
    var ctx = $(".p5myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
     var ctx = $(".p5myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p5myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 5 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

     // --Page 7 Bar Chart Example
    var ctx = $(".p7myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
     var ctx = $(".p7myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p7myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 7 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

     // --Page 9 Bar Chart Example
    var ctx = $(".p9myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
     var ctx = $(".p9myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p9myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 9 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

 // --Page 11 Bar Chart Example
    var ctx = $(".p11myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
     var ctx = $(".p11myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p11myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 11 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

 // --Page 13 Bar Chart Example
    var ctx = $(".p13myBarChart1");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 1 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 1 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Ad Clicks",
          backgroundColor: "rgba(2,117,216,1)",
          borderColor: "rgba(2,117,216,1)",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
     var ctx = $(".p13myBarChart2");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 2 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 2 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Map Clicks",
          backgroundColor: "#ffc107",
          borderColor: "#ffc107",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>
    var ctx = $(".p13myBarChart3");
    <?php
    $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 3 GROUP BY `link_id`;");
    $stmt->execute();

    if($stmt->rowCount()>0) {
      //if Ip exsist in DB

      ?>
    var myLineChart = new Chart(ctx, {

      type: 'bar',
      data: {

        labels: [ <?php
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        echo ($result['link_id']);
        while($result=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo ' , ';
          echo ($result['link_id']);


        } }
        $stmt = $DB_con->prepare("SELECT `link_id`, COUNT(`user_id` ) as count FROM `clicks` WHERE `page` = 13 and `type_id` = 3 GROUP BY `link_id`;");
        $stmt->execute();

        if($stmt->rowCount()>0) {
        ?>],
        datasets: [{
          label: "Organic Clicks",
          backgroundColor: "#28a745",
          borderColor: "#28a745",
          data: [<?php
          $result=$stmt->fetch(PDO::FETCH_ASSOC);
          echo ($result['count']);
          while($result=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            echo ' , ';
            echo ($result['count']);


          }  ?>],
        }],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,


            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }

    });
    <?php  }  ?>

    </script>
  </div>
</body>

</html>
