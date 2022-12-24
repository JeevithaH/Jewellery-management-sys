<?php
    include("../../config/pdoconfig.php");
    $output = '
     <table class="table table-sm">
     <thead>
            <tr>
            <th scope="col" class="table-info"> id</th>

              <th scope="col" class="table-info"> Name</th>
              <th scope="col" class="table-info">image</th>
              <th scope="col" class="table-info">Action</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM category";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $name = $row['name'];
         $image = $row['image'];
         $output .= '      <tr>
         <th scope="row">'.$id.'</th>

         <th scope="row">'.$name.'</th>
         <td><img src="../php/uploads-category/'.$image.'" width="100px" /></td>


         <td>
        <button class="btn btn-sm btn-glow btn-info cat-del" data-id="'.$row['id'].'">delete</button></td>
        
         
       </div></div></td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>