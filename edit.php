<?php include 'header.php';?>

<?php

    $edit_id=$_REQUEST['eid'];

    $obj->sql("SELECT * FROM students where id='$edit_id'");
    $data=$obj->getResult();

   foreach ($data as $key) {
    $fdname=$key['first_name'];
    $ldname=$key['last_name'];
    $mdname=$key['mobile'];
    $edname=$key['email'];
   }

if (isset($_POST['Update'])) {

  $fname=$_POST['first'];
	$lname=$_POST['last'];
	$mname=$_POST['mobile'];
	$ename=$_POST['email'];

	$msg=$obj->update('students',['first_name'=>$fname,
						                'last_name'=>$lname,
	   					                 'mobile'=>$mname,
	   					                  'email'=>$ename], "id='$edit_id'");

  if ($msg) {
   echo "<div class='bg-success'>Updated Successfully</div>";
  }else{
    echo "<div class='bg-danger'>Not Updated Successfully</div>";
  }

	
	
}?>

<div class="container">

  <h2>User Management</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Users List &nbsp;&nbsp; <a href="index.php"><button class="btn btn-success">Back</button></a> </div>
    <div class="panel-body"></div>
   <div class="container">

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Firstname</label>
    <input type="text" class="form-control" value="<?php echo $fdname ?>" name="first" id="exampleInputEmail1" placeholder="Enter Name">  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Lastname</label>
    <input type="text" class="form-control" value="<?php echo $ldname ?>" name="last" id="exampleInputEmail1" placeholder="Enter Last">  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" value="<?php echo $mdname ?>" name="mobile" id="exampleInputEmail1" placeholder="Enter Mobile">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" value="<?php echo $edname ?>" name="email" id="exampleInputEmail1" placeholder="Enter Email">  </div>  
 
  <button type="submit" name="Update" class="btn btn-primary">Update</button>
</form>
</div>
  
  </div>
</div>
</br>

</body>
</html>