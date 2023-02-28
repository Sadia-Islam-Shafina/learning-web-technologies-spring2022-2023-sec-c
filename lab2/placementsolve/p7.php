<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
</head>
<body>
    <table border="1" height="80px" width="350px">
        <tr>
            <td>
                
                <?php
                for($x=0;$x<=2;$x++){	
	                for($y=0;$y<=$x;$y++){
		                echo "*";
	                    }
	                echo "<br/>";
                    }
                ?>
            </td>
            <td>
                
            <?php
            for($x=3; $x>=1; $x--)
            {
                for($y=1; $y<=$x; $y++)
                {
                    echo " $y ";
                }
                echo "<br>";

            }  

            ?>   
            </td>
            <td>
            <?php
                $alpha = range('A', 'Z');
                $a= 0;
                for($x=0; $x<=2; $x++)
                {
                    for($y=0; $y<=$x; $y++)
                    echo $alpha[$a++]." ";
                    echo "<br>";
                }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>
