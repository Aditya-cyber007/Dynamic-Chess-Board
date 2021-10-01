<html>
<head> 
</head>
<body class = "center"><table style="border-spacing:0px;border:1px solid black">

    <h1>Dynamic chess board</h1>
<?php
$value=$_GET['num_of_boxes'];
for ($r=1;$r<=$value;$r++)
{
    echo "<tr>";
    for ($c=1;$c<=$value;$c++){
        $a=$r+$c;
        if ($a%2==0){
            echo"<td style='background-color:black;border:1px solid black; width:65px;height:60px'></td>";
            }
        else{
            echo"<td></td>";
            }
    }
    echo "</tr>";

}
?>
</table>

</body>
</html>
