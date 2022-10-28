<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   <?php //include 'registration.php'; ?>
   <?php include 'navbar.php';?>
   <div class="container">
      <?php
      if(isset($_GET['error'])) {
          if($_GET['error'] == 'confirmation') {
      ?>

         <div class="alert alert-danger" role="alert">
            Password aldaa!
         </div>


      <?php     
          }
      }
      ?>
      <form action="registration.php" method="POST">
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Name</label>
         <input value="" type="text" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Username</label>
         <input value="" type="text" required name="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input value="" type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
         <input type="password" name="password_confirmation" required class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
         <input required type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Terms & Agreements</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </div>
  </body>
</html>