<?php
include 'connection/database.php';

$obj= new Database();

//$obj->insert('student_data',['stu_name'=>'Kumar Sanu','stu_age'=>'30','stu_city'=>'Mumbai']);
//echo "Insert result is:";
//print_r($obj->getResult());

//$obj->update('student_data',['stu_name'=>'Satyam Kumar','stu_age'=>'36','stu_city'=>'Lucknow'], 'stu_id="1"');
//echo "Update result is:";
//print_r($obj->getResult());

// $obj->delete('student_data','stu_id="1"');
// echo "Delete result is:";
// print_r($obj->getResult());

// $obj->sql('SELECT * FROM student_data');
// echo "SQL result is:";
// print_r($obj->getResult());

$obj->select('reg','*',null,null,null,2);
echo " Select result is:";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";

$obj->pagination('reg',null,null,2);
 ?>
<html>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript"></script>
      
    <head>
        <meta charset="UTF-8">
        <title>OOPS CRUD</title>
    </head>
    <body>
        <form method="POST" action=" <?php $_SERVER['PHP_SELF'] ?>">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user" autocomplete="off" >
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>

            <a href="reg.php">New Registration</a>
    </body>
</html>
