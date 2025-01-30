<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Code Challenge 1</h1>
    <?php
        $hour = ceil(rand(1,24));
        echo "<h2> The hour is ".$hour."</h2>";
        if($hour>=5 && $hour<=9){echo "Bananas, Apples, and Oats\n";}
        elseif($hour>=12 && $hour<=14){echo "Fish, Chicken, and Vegetables\n";}
        elseif($hour>=19 && $hour<=21){echo "Steak, Carrots, and Broccoli\n";}
        else { echo "Animals are not being fed";}
    ?>

    <h1>Code Challenge 2</h1>
    <?php
    $magicNumber = ceil(rand(1,100));
    echo "<h2> The magic number is ".$magicNumber."</h2>";
    
    if($magicNumber%3===0 && $magicNumber%5===0)
    {
        echo"FizzBuzz";
    }
   
    elseif($magicNumber%3===0)
    {
        echo"Fizz";
    }
    elseif($magicNumber%5===0){
        echo"Buzz";
    }
    else {
        echo $magicNumber;
    }


    ?>
</body>
</html>