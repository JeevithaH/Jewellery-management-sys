<?php 

   include("../../config/cofig.php");
  
$output = "";
$pending = "pending";
$sql = "SELECT * FROM lead WHERE (fname LIKE '%".$_POST['search']."%') or (sname LIKE '%".$_POST['search']."%') or (email LIKE '%".$_POST['search']."%' )or(course LIKE '%".$_POST['search']."%') or(centre LIKE '%".$_POST['search']."%') or (time LIKE '%".$_POST['search']."%')";

$result = mysqli_query($connection,$sql);
if(mysqli_num_rows($result) > 0 ){
      $output .= "<h4 align='center'>Search Results</h4>";
      $output = '
     <table class="table table-sm">
     <thead>
            <tr>
              <th scope="col" class="table-info">Frist Name</th>
              <th scope="col" class="table-info">Second Name</th>
              <th scope="col" class="table-info">Email</th>
              <th scope="col" class="table-info">Course</th>
              <th scope="col" class="table-info">Time</th>
              <th scope="col" class="table-info">Action</th>
              <th class="table-info">Edit</th>
            </tr>
          </thead>
          <tbody>
     ';
      while($row = mysqli_fetch_array($result))
      {
        $id = $row['id'];
        $fname = $row['fname'];
        $sname = $row['sname'];
        $email = $row['email'];
        $course = $row['course'];
        $time = $row['time'];
        $output .= '      <tr>
        <th scope="row">'.$fname.'</th>
        <td>'.$sname.'</td>
        <td>'.$email.'</td>
        <td>'.$course.'</td>
        <td> '.$time.'</td>
        <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
        <td><button class="btn btn-sm btn-glow btn-primary edit" data-id="'.$row['id'].'">Edit</button></td>
        </tr>
        </tbody>';
      }
      $output .=  '  </table>';
echo $output;
        
}else{
    echo "Nothing found";
}

?>