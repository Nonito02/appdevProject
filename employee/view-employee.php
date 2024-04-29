
<?php 
    require_once "include/header.php";
?>

<?php 
 
//  database connection
require_once "../connection.php";

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn , $sql);

$i = 1;
$you = "";


?>

<style>
table, th, td {
  border: 1px solid black;
  padding: 15px;
}
table {
  border-spacing: 10px;
}
</style>

<div class="container bg-white shadow">
    <div class="py-4 mt-5"> 
    <h4 class="text-center pb-3">All Employees</h4>
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>S.No.</th>
        <th>Employee Id</th>
        <th>Name</th>
        <th>Email</th> 
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Age</th>
    </tr>
    <?php 
    
    if( mysqli_num_rows($result) > 0){
        while( $rows = mysqli_fetch_assoc($result) ){
            $name= $rows["name"];
            $email= $rows["email"];
            $dob = $rows["dob"];
            $gender = $rows["gender"];
            $id = $rows["id"];
            if($gender == "" ){
                $gender = "Not Defined";
            } 

            if($dob == "" ){
                $dob = "Not Defined";
                $age = "Not Defined";
            }else{
                $date1=date_create($dob);
                $date2=date_create("now");
                $diff=date_diff($date1,$date2);
                $age = $diff->format("%y Years"); 
            }

            if($email == $_SESSION["email_emp"] ){
                $name = "{$name} (You)";
            } 
            
            ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $id; ?></td>
        <td> <?php echo $name ; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $dob; ?></td>
        <td><?php echo $age; ?></td> 

    <?php 
            $i++;
            }
        }else{
        echo "no admin found";
        }
    ?>
     </tr>
    </table>
    </div>
</div>

<?php 
    require_once "include/footer.php";
?>

<?php 
    require_once "include/footer.php";
?>