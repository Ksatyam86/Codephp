<?php include 'header.php';?>

<?php

if (isset($_POST['Submit'])) {

    $fname=$_POST['first'];
	$lname=$_POST['last'];
	$mname=$_POST['mobile'];
	$ename=$_POST['email'];

	$obj->insert('students',['first_name'=>$fname,
						      'last_name'=>$lname,
	   					         'mobile'=>$mname,
	   					          'email'=>$ename]);

	echo "<div class='bg-success'>Insert Successfully</div>";
	
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
    <input type="text" class="form-control" name="first" id="exampleInputEmail1" placeholder="Enter Name">  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Lastname</label>
    <input type="text" class="form-control" name="last" id="exampleInputEmail1" placeholder="Enter Last">  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" name="mobile" id="exampleInputEmail1" placeholder="Enter Mobile">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email">  </div>  
 
  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
</form>
</div>
  
  </div>
</div>

</body>
</html>