<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>

<h1>Code Challenge 1</h1>

    <?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
    }
    // Get the list of users
    $users = getUsers();

    // Loops
    for($i=0;$i<count($users);$i++){
        echo "<h3>User id: {$users[$i]['id']}</h3>";
        echo "<h4>Name: {$users[$i]['name']} </h4>";
        echo "<h4>Username: {$users[$i]['username']} </h4>";
        echo "<h4>Email: <a href='mailTo:{$users[$i]['email']}'>{$users[$i]['email']}</a></h4>";
        echo "<h4>Address:</h4>";
        echo "<h4>Suite: {$users[$i]['address']['suite']}</h4>";
        echo "<h4>Street: {$users[$i]['address']['street']}</h4>";
        echo "<h4>City: {$users[$i]['address']['city']}</h4>";
        echo "<h4>Zip Code: {$users[$i]['address']['zipcode']}</h4>";
        echo "<hr/>";
    }
    ?>
</body>
</html>