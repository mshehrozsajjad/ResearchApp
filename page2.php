<!DOCTYPE html>
<html>

<?php
require 'header.php';
?>
<body>
  <section>
    <div class="container">
      <div class="row block">
        <div class="col-lg-12">

          <p class="lead">So let’s start in Albany, New York. You live in a lovely old house but all of a sudden the faucet starts leaking like crazy and spouting water. Your run downstairs and turn off the water.
          </p>
          <p class="lead">
            Next stop, Google. <br/>

          </p>
          <h3 style="margin-bottom:30px;">And you key in</h3>
          <div class="form-holder">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 col-lg-9 mx-auto">
                  <div class="searchBox">
                    <div class=" google-logo mx-auto text-center">
                      <img src="http://freewp.world/google-logo/google.png" alt="logo" class="img-fluid">

                    </div>
                    <div class=" google-form text-center">
                      <form action="page3.php" method="post">
                        <div class="form-group">
                          <input type="text" disabled class="form-control google-search" value="Emergency, plumber, Albany" name="search">
                          <div class="btn-group">
                            <button type="submit" class="btn btn-default">Google Search</button>
                            <button type="submit" class="btn btn-default" disabled>I'm Feeling Lucky</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <h3 style="margin-top:30px;">
            Now hit search and go select your plumber, quick before the kitchen floods!
          </h3>

        </div>
      </div>

    </div>
  </section>


  <!-- Javascript files-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>

</body>
</html>
