<?php

$id =$_GET["glass"];
if(($table->where("id",$id)->exists())){
  $glass = $table->where("id",$id)->first();
}
else{
    die("no glass found");
}
?>
  <html>
      <table border='1'>
          <tr>
             <?php  echo "<td>Type: ".$glass->product_name."</td>";?>
               <?php  echo "<td>Price: ".$glass->list_price."</td>";?>   
        </tr>
       <tr>
           <td>
      <?php echo"<h5>Details</h5>";?>
       <?php  echo "Code: ".$glass->PRODUCT_code;?></br>
       <?php  echo "Item Id: ".$glass->id;?><br>
        <?php  echo "Rating: ".$glass->Rating;?>
           </td>
           <td>
             <h6><img src="View/images/images/<?php echo $glass->Photo;?>"></h6>   
           </td>
       </tr>
        </table>
</html>
        
        
        
        
        
        
        
        
        
        
        
        