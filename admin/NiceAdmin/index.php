<?php require 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  
  <?php include "includes/files.php"; ?>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "includes/header.php"; ?>

  <!-- ======= Sidebar ======= -->
  <?php include "includes/sidebar.php"; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard Wellcome <?php //echo $_SESSION["user"];?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php include 'includes/cards.php'; ?>
  </main><!-- End #main -->
 <div class="mt-5"></div>
 
  <!-- ======= Footer ======= -->
  <?php include 'includes/foooter.php'; ?> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>