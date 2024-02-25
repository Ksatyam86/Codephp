<?php
error_reporting(E_ALL);
ini_set('display_errors',1); 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include 'connection/database.php';
$obj= new Database();

  $method = $_SERVER['REQUEST_METHOD']; 

  switch($method) {

  case 'GET':

    	 $path = explode('/', $_SERVER['REQUEST_URI']);
        if(isset($path[4]) && is_numeric($path[4])) {

        	$user_id=$path[4];        	

    $obj->sql("SELECT * FROM students where id='$user_id'");
    $data=$obj->getResult();

  }else{

  	  $obj->sql('SELECT * FROM students');
      $data=$obj->getResult();
  }        
   
    echo json_encode($data);
    break;

  case 'POST':
    $user=json_decode(file_get_contents("php://input"));

    $fname=$user->fname;
	  $lname=$user->lname;
	  $mname=$user->mobile;
	  $ename=$user->email;

	$data=$obj->insert('students',['first_name'=>$fname,
						      'last_name'=>$lname,
	   					         'mobile'=>$mname,
	   					          'email'=>$ename]);

    if($data) {
            $response = ['message' => 'Record Inserted successfully.'];
        } else {
            $response = ['message' => 'Failed to insert record.'];
        }
        echo json_encode($response);
        return;

	
  break;

  case "PUT":
        $user = json_decode( file_get_contents('php://input') );

      $user_id=$user->id;
        $fname=$user->fname;
	    $lname=$user->lname;
	    $mname=$user->mobile;
	    $ename=$user->email;

	    $msg=$obj->update('students',['first_name'=>$fname,
						                'last_name'=>$lname,
	   					                 'mobile'=>$mname,
	   					                  'email'=>$ename], "id='$user_id'");	
       
        echo json_encode($msg);
        break;

         case "DELETE":

          $path = explode('/', $_SERVER['REQUEST_URI']);
        if(isset($path[4]) && is_numeric($path[4])) {

        	$user_id=$path[4];        	

         $result=$obj->delete('students',"id= '$user_id'");

           if($result) {
            $response = ['message' => 'Record deleted successfully.'];
        } else {
            $response = ['message' => 'Failed to delete record.'];
        }
        echo json_encode($response);
        return;
       }
        
        break;
}
    



/*$userpostdata=json_decode(file_get_contents("php://input",true));
print_r($userpostdata);
die; 

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
	
}*/?>

