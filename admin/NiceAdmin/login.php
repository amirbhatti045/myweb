<?php 

// session_start();
// // $_SESSION['user']
//    $username = $_POST["username"];
//    $password = $_POST["password"];

  //  $qry = "SELECT * FROM admin_users WHERE email='$email' AND password='$password' ";
  //  $result = mysqli_query($cn, $qry);
  //  if(mysqli_num_rows($result) > 0) {
  //   foreach($result as $row) {
  //     $id = $row['id'];
  //     $username = $row['username'];
  //     $email = $row['email'];
  //     $mobile = $row['mobile'];
  //     $address = $row['address'];
    
    // $_SESSION['auth'] = true;
    // $_SESSION['auth_user'] = [
    //   'id'=> $id,
    //   'username'=> $username,
    //   'email'=> $email,
    //   'mobile'=> $mobile,
    //   'address'=> $address
    // ];
  //   header('Location:index.php');
  //  }
   

// }
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
  

  <title>Login-admin </title>
  <?php include "includes/files.php"; ?>

  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 " method="post" action="auth.php">
                    <div class="col-12">
                      <label class="form-label">User Name</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" ></span>
                        <input type="text"  class="form-control"  required name="username">    
                      </div>
                    </div>
                    <div class="col-12">
                      <label  class="form-label">Password</label>
                      <input type="text"  class="form-control"  required name="password">  
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
              <div class="credits">
                Designed by <a href="">Amir Bhatti</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>