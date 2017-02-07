<!DOCTYPE html>

<html>

<head>
    <?php
    
    $namn = $_GET['namn'];
    
    $dag = $_GET['dag'];

    $månad = $_GET['månad'];

    $år = $_GET['år'];

    
    if($månad > 0 && $månad < 6){
        $color = 987655;
            
    }elseif($månad >= 6 && $månad <= 9){
        $color = 131337;
    
    }elseif($månad > 9){
        $color = 888888; 
        
    }
    ?>
    <style>
        body{
            background-color: #<?php echo $color; ?>
        }
    </style>
</head>
    
<body>
    <p>Hej, och välkommen till cancer</p>
    <?php
        echo "Mitt namn är " . $namn ."<br>";
        echo $dag ."/";
        echo $månad ."/";
        echo $år;

    ?>
</body>
</html>
