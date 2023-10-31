<!DOCTYPE html>
<html lang="en">

<head>
  

  <title>Table-data</title>
  <?php include "includes/files.php"; ?>

<body>

  <!-- ======= Header ======= -->
  <?php include "includes/header.php"; ?>

  <!-- ======= Sidebar ======= -->
  <?php include "includes/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables Data</li>
          <!-- <li class="breadcrumb-item active">Data</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">usertype</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                   require_once 'includes/classes/meekrodb.2.3.class.php'; // Adjust the path to MeekroDB

                   // Include your configuration file
                   require_once 'db_config.php';
                   
                   // Check if the user is authorized to access this data
                   
                       // Use MeekroDB to perform the database query
                       $results = DB::query("SELECT * FROM admin_users");
                   
                       // Check if any rows were returned
                       if ($results) {
                           foreach ($results as $row) {
                               // Process each row of data from the admin_users table
                                 $id= $row['id'];
                                $name= $row['username'];
                                $email= $row['email'];
                                $mobile= $row['mobile'];
                                $address= $row['address'];
                                $usertype= $row['usertype'];
                               
                          }
                       
                      }
                  ?>
                  <?php
                  //  include "config.php";
                  //  $qry = "SELECT * FROM admin_users";
                  //  $result = mysqli_query($cn, $qry);
                  //  if($result->num_rows > 0){
                  //   while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $mobile; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $usertype; ?></td>
                    <td>
                      <a href="edit.php?editid=<?php echo $row['id']; ?>" >Edit</a>|<a href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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