<?php
    include "signinprocess.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS LINK -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Login</title>
  </head>
  <body>

    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="col-sm-8 modal-container">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="image/avatar/noimg2.png" width="100" height="100">
                </div>

                <div class="modal-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <!-- For php genarated warning for wrong password -->
                            <small>
                                <?php
                                    echo $error;
                                ?>
                            </small>

                        </div>
                        <button type="submit" name="signin" class="btn btn-outline-danger">Sign In</button>
                        </div class="form-group">
                            <a href="#">Forgot password?</a>
                            <a href="signup.php">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
