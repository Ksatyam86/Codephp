
<?php include 'header.php';?>

<div class="container">
  <h2>User Management</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Users List &nbsp;&nbsp; <a href="add.php"><button class="btn btn-success">+Add User</button></a> </div>
    <div class="panel-body"></div>

    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $json_data=array();

    $obj->sql('SELECT * FROM students');
    $data=$obj->getResult();
    $i=1;
    foreach ( $data as $key) { ?>      
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $key['first_name'];?></td>
      <td><?php echo $key['last_name'];?></td>
      <td><?php echo $key['mobile'];?></td>
      <td><?php echo $key['email'];?></td>
      
      <td><a href="edit.php?eid=<?php echo $key['id'] ?>"><button class="btn btn-primary">Edit</button></a></td>
      <td><a href="delete.php?did=<?php echo $key['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>  
    <?php } ?>
  </tbody>
</table>
  </div>
</div>

</body>
</html>