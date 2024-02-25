<?php
include 'connect.php';
include 'session.php';

 $limit = 2;
                  if(isset($_GET['page'])){
                    $page = $_GET['page'];
                  }else{
                    $page = 1;
                  }
                  $offset = ($page - 1) * $limit;

$sql= "SELECT * FROM reg ORDER BY id DESC LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result)>0){

?>
<table border='1' width="50%" >

    <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Username</th>
        <th>City</th>
        <th>Gender</th>
        <th>Image</th>
        <th>Edit</th>
         <th>Delete</th>
         <th>Download</th>
    </tr>
    <?php

     $i=1;
    while($row =  mysqli_fetch_assoc($result)){
   
    ?>
    <tr>
        <td> <?php echo $i ?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['city']?></td>
        <td><?php echo $row['gender']?></td>
        <td><img src="<?php echo $row['image']?>" width="100px" height="100px"></td>
        <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
        <td><a href="clf hasangaj latter hed.pdf" target="_blank">Download</a></td>
    </tr>
    <?php
    $i++;
}
?>
</table>

<?php
      $sql1 = "SELECT * FROM reg";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);



                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="viewall.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="viewall.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="viewall.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                }

 ?>


    <?php
}else{ echo"No Record Found"; }
?>