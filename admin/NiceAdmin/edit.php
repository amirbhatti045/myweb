<?php 
include 'config.php';

$get_id = $_GET['editid'];
$qry = "SELECT * FROM admin_users WHERE id='$get_id'";
$result = mysqli_query($cn,$qry);
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_rows > 0){
    $id = $row['id'];
    $username =$row['username'];
    $email =$row['email'];
    $mobile =$row['mobile'];
    $address =$row['address'];
    $usertype =$row['usertype'];
    
}else{
    header('Location:tables_data.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  

  <title>Add Member</title>
  <?php include "includes/files.php"; ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "includes/header.php"; ?>

  <!-- ======= Sidebar ======= -->
  <?php include "includes/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="update.php">update-Forms</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add User or Admin</h5>

              <!-- General Form Elements -->
              <form method="post" action="update.php">
                <input type="hidden" value="<?php echo $id; ?>" name="id_php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label  class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <label  class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="file">
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" placeholder="Enter your Address with City Name"value="<?php echo $address; ?>">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">User Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="usertype" >
                      <option ><?php echo $usertype; ?></option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Update Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="update">Update Form</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/foooter.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
