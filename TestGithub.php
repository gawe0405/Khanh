<!DOCTYPE html>
<html lang="en">
<head>
    <title> phep tinh voi 2 so </title>
</head>
<body>
    <?php
    $num=0;
    for($i=1;$i<=100;$i++)
    {
        if($i%7==0)
        {
            $num=$num+1;
            
        }
    }
    echo "Tim duoc ".$num." so!" ;  
    for($i=1;$i<=100;$i++)
    {
        if($i%7==0)
        {
            $num=$num+1;
            echo "<br/>".$i;
            echo "<br/>";
        }
    }     
    
    ?>
</body>
</html>