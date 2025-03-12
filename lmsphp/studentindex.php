<?php 
  include('functions.php');
  secure();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include('reusable/nav.php'); ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All Students</h1>
        </div>
      </div>
    </div>
  </div>

  <?php 
      require('reusable/conn.php');
      $query = 'SELECT * FROM students';
      $students = mysqli_query($connect, $query);
  ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php get_message(); ?>
        </div>
      </div>
      <div class="row">
        <?php
          foreach($students as $student){
            echo '<div class="col-md-4 mt-3 mb-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body shadow-sm p-4">
                            <!-- Student Image -->
                            <div class="text-center mb-4">
                                <img src="' . $student['image'] . '" class="img-fluid rounded-circle shadow-sm" alt="Student Image" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>

                            <!-- Student Name -->
                            <div class="mb-3">
                                <span class="fw-bold text-primary">Name:</span>
                                <span class="text-muted">' . $student['name'] . '</span>
                            </div>

                            <!-- Student Email -->
                            <div class="mb-3">
                                <span class="fw-bold text-primary">Email:</span>
                                <span class="text-muted">' . $student['email'] . '</span>
                            </div>

                            <!-- Student Phone -->
                            <div class="mb-3">
                                <span class="fw-bold text-primary">Phone:</span>
                                <span class="text-muted">' . $student['phone'] . '</span>
                            </div>
                        </div>
                    </div>
                </div>';  
          }
        ?>
      </div>
    </div>
  </div>


</body>
</html>