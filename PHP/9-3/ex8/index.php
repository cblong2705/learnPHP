<!DOCTYPE html>
<html>
   <body>
   
      <table width="600px" cellspacing="0px" cellpadding="0px" border="2px">    
      <?php  
      for($row=0; $row <= 9; $row++)  
      {  
          echo "<tr>";  
          for($col=0; $col <10; $col++)  
          {  
            if ($col < 10) {
              $total = $row.$col;
            }
            else {
              $total = $row*$col;
            }


              echo "<td height=30px width=30px bgcolor=#FFFFFF>$total</td>";  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
       
   </body>
</html>