<?php
function primeCount($post_num){
$count = 0;  
$num = 2;  
echo "| ";
while ($count < $post_num )  
{  
  $num_count=0;  
  for ( $i=1; $i<=$num; $i++)  
  {  
      if (($num%$i)==0)  
      {  
        $num_count++;  
      }  
  }  
  if ($num_count<3)  
  {  
      echo $num."  ";
      $count=$count+1;  
  }  
    $num=$num+1;  
  } 
}
primeCount(10);
?>