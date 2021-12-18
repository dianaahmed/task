
<!DOCTYPE html>
<html lang="en">
 
<body>

    
  <?php include 'readProducts.php' ;
  echo "<table>";
   
   
   echo "<tr>";
  echo  "<th>id</th>";
  echo  "<th>name</th>";
   echo "<th>price</th>";
   echo "<th>image_name</th>";
  echo "</tr>";
  //print_r($ar) ;
   foreach($pro as $b)
    {  
	 echo "<tr>";
     echo "<td>".$b->getCode()."</td>";
     echo "<td>". $b->getName()."</td>";
     echo "<td>".$b->getPrice()."</td>";
     echo "<td>".$b->getImage_name()."</td>";
      echo"</tr>";
    }
    echo " </table>";
  
	?>
    
 </body>
</html>