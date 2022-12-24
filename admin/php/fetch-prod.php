<?php
    include("../../config/pdoconfig.php");
    $output = '
     <table class="table table-sm">
     <thead>
            <tr>
              <th scope="col" class="table-info"> Name</th>
              <th scope="col" class="table-info">image</th>
              <th scope="col" class="table-info">dis</th>
              <th scope="col" class="table-info">mrp</th>
              <th scope="col" class="table-info">cat_id</th>
              <th scope="col" class="table-info">details</th>
              <th scope="col" class="table-info">Action</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM product";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $name = $row['name'];
         $image = $row['img'];
    $dis = $row['dis'];
    $mrp = $row['mrp'];
    $cat_id = $row['cat_id'];
    $det = $row['details'];
         $output .= '      <tr>
         <th scope="row">'.$name.'</th>
         <td><img src="../php/uploads-prod/'.$image.'" width="100px" /></td>
         <th scope="row">'.$dis.'</th>
         <th scope="row">'.$mrp.'</th>
         <th scope="row">'.$cat_id.'</th>

         <th scope="row">'.$det.'</th>

         <td>
        <button class="btn btn-sm btn-glow btn-info prod-del" data-id="'.$row['id'].'">delete</button></td>
        
         
       </div></div></td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>