<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS LINK -->
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <title>NewsFeed!</title>
  </head>


  <body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      
      <!-- Button For Toggling Navbar -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Username and Navbar profile picture -->
      <span class="navbar-text ml-auto">Username</span>
      <a class="navbar-brand "><img id="userImage" src="image/avatar/smoke.png" alt="smoke" width="50px" height="50px"></a>

      <!-- Wrapping the collapse items inside a div -->
      <div class="collapse navbar-collapse" id="target">

        <!-- Search Bar and Search button -->
        <form class="form-inline ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button type="btn btn-light my-sm-0" type="submit">Search</button>
        </form>

        <!-- Link List -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link">Strategy</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link">Logout</a>
          </li>
        </ul>
        <!-- End List -->

      </div>
      <!-- End Div -->

    </nav>
    <!-- End Nav -->







    <!-- This div containes all post, image and buttons -->
    <div class="container-fluid bg-dark text-light" id="container1">

      <!-- Profile Picture -->
      <img src="image/avatar/smoke.png" width="200px" height="200px" alt="Smoke" class="img-thumbnail mx-auto d-block" id="profilePic">

      <!-- Tab Div -->
      <div class="container-fluid">

        <div class="row">
          <div class="col text-center tabcol">
            Pictures
          </div>
          <div class="col text-center tabcol">
            Edit Profile
          </div>
        </div>

      </div>
      <!-- Tab Div End -->
      
      


      <!-- Post Div -->
      <div class="container-fluid" id="postdiv">

        <div class="container-fluid">
          <div class="row">
              <h3><b>Your posts</b></h3>
          </div>
        </div>






        <!-- This is a indevidual post-->
        <div class="container-fluid indpost">

          <!-- Username and time -->
          <div class="row p-1">
            <div class="col-sm-9 nametime">
              <h5>Username</h5>
            </div>
            <div class="col-sm-3 nametime">
              <small>Date and Time</small>
            </div>
          </div>
          <!-- End of  username and time -->

          <!-- Post content -->
          <div class="row p-1 postcontent">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea quam explicabo at molestias mollitia, consectetur, 
              dolores eveniet deleniti quaerat suscipit sint ullam quidem blanditiis. Aspernatur reiciendis voluptate deserunt 
              dolorum impedit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, expedita id repudiandae quasi 
              magni accusamus eius nesciunt vero nihil? Eveniet, perspiciatis qui voluptatibus at nam suscipit voluptatem similique 
              tempore ipsa.
            </p>
          </div>
          
          <!-- Buttons for like shere and comment -->
          <div class="row p-1">
            <button type="button" class="btn btn-danger ">Like</button>
            <button type="button" class="btn btn-primary">Share</button>
            <button type="button" class="btn btn-warning">Comment</button>
          </div>
          
        </div>
        <!-- End of indi Post-->


        <!-- This is a indevidual post-->
        <div class="container-fluid indpost">

          <!-- Username and time -->
          <div class="row p-1">
            <div class="col-sm-9 nametime">
              <h5>Username</h5>
            </div>
            <div class="col-sm-3 nametime">
              <small>Date and Time</small>
            </div>
          </div>
          <!-- End of  username and time -->

          <!-- Post content -->
          <div class="row p-1 postcontent">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea quam explicabo at molestias mollitia, consectetur, 
              dolores eveniet deleniti quaerat suscipit sint ullam quidem blanditiis. Aspernatur reiciendis voluptate deserunt 
              dolorum impedit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, expedita id repudiandae quasi 
              magni accusamus eius nesciunt vero nihil? Eveniet, perspiciatis qui voluptatibus at nam suscipit voluptatem similique 
              tempore ipsa.
            </p>
          </div>
          
          <!-- Buttons for like shere and comment -->
          <div class="row p-1">
            <button type="button" class="btn btn-danger ">Like</button>
            <button type="button" class="btn btn-primary">Share</button>
            <button type="button" class="btn btn-warning">Comment</button>
          </div>
            
        </div>
        <!-- End of indi Post-->


        <!-- This is a indevidual post-->
        <div class="container-fluid indpost">

          <!-- Username and time -->
          <div class="row p-1">
            <div class="col-sm-9 nametime">
              <h5>Username</h5>
            </div>
            <div class="col-sm-3 nametime">
              <small>Date and Time</small>
            </div>
          </div>
          <!-- End of  username and time -->

          <!-- Post content -->
          <div class="row p-1 postcontent">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea quam explicabo at molestias mollitia, consectetur, 
              dolores eveniet deleniti quaerat suscipit sint ullam quidem blanditiis. Aspernatur reiciendis voluptate deserunt 
              dolorum impedit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, expedita id repudiandae quasi 
              magni accusamus eius nesciunt vero nihil? Eveniet, perspiciatis qui voluptatibus at nam suscipit voluptatem similique 
              tempore ipsa.
            </p>
          </div>
          
          <!-- Buttons for like shere and comment -->
          <div class="row p-1">
            <button type="button" class="btn btn-danger ">Like</button>
            <button type="button" class="btn btn-primary">Share</button>
            <button type="button" class="btn btn-warning">Comment</button>
          </div>
            
        </div>
        <!-- End of indi Post-->

        



      
      
      
      
      </div>
      <!-- End of Post Div-->




      















    </div>
    <!-- End of div containing all post, image and buttons -->






    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>