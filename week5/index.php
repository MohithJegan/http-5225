<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <!-- Boostrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
     // connection string
     $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'colors'
     );

     if(!$connection){
        die("Connection Failed:" . mysqli_connect_error());
     }

     $query = "SELECT * FROM colors";
     $colors = mysqli_query($connection, $query);
     
     // Loop to display the record from DB
     while($row = mysqli_fetch_assoc($colors)) { 
       
        echo "<div class='fw-bold text-center text-white p-5 shadow-lg border border-light' style='background-color:{$row["Hex"]};'>{$row["Name"]}</div>";
        
     }
  

    ?>
</body>
</html>