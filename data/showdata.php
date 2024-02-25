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
$result=$obj->getResult();


   
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

$obj->pagination('reg',null,null,2);
 ?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title>OOPS CRUD</title>
    </head>
    <body>

        <table border="1" width='500px'>
            <tr>
                <th>Student ID</th>
                  <th>Student Name</th>
                    <th>Student City</th>
                      <th>Student Gender</th>


            </tr>
            <?php foreach ($result as list("id"=>$id,"name"=>$name,"city"=>$city,"gender"=>$gender)) {
             ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $city; ?></td>
                <td><?php echo $gender; ?></td>
            </tr>
<?php } ?>
        </table>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
      
    </body>
</html>
