<?php  include 'Header.php' ?>
<?php include 'Connection.php' ?>

<?php 

$query = "Select * from employee_table";

if(isset($_GET['srch'])){
    $search = $_GET['search'];
    $query = "Select * from employee_table where FirstName like '%$search%' or LastName like '%$search%' or Gender like '%$search%' or
    CNIC like '%$search%' or Education like '%$search%' or Desgination like '%$search%' or City like '%$search%' or Salary like '%$search%' or DOB like '%$search%' or DateofAppoint like '%$search%' or DateofJoin like '%$search%'";};

($result = mysqli_query($conn, $query)) or die('Incorrect Query.');
$rowcount = mysqli_num_rows($result);
if($rowcount > 0){
    ?>

    <form action="" method="get">
        <div class="input-group col-md-6 container mb-5 mt-3" >
        
            <input type="text" class="form-control" placeholder="Search" autofocus name="search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary" name="srch">Search</button>
                <a href="ViewData.php" class="btn btn-success ml-3">Reset</a>
            </div>
        
        </div>
    </form>
    <a href="Assignment.php" style="margin-left:80px;">Enter New Records</a>
    <table class="container mt-3 table table-bordered table-striped table-hover table-dark">
        <tr align="center" style="border-bottom:2px solid white;">
            <th style="color:wheat;">First Name</th>
            <th style="color:wheat;">Last Name</th>
            <th style="color:wheat;">Choose Photo</th>
            <th style="color:wheat;">Gender</th>
            <th style="color:wheat;">CNIC</th>
            <th style="color:wheat;">Education</th>
            <th style="color:wheat;">Designation</th>
            <th style="color:wheat;">City</th>
            <th style="color:wheat;">Salary</th>
            <th style="color:wheat;">DOB</th>
            <th style="color:wheat;">Email</th>
            <th style="color:wheat;">Address</th>
            <th style="color:wheat;">Contact</th>
            <th style="color:wheat;">Date of Appoint</th>
            <th style="color:wheat;">Date of Joining</th>
            <th style="color:wheat;" colspan="2">CRUD Operations</th>
        </tr>

        <?php while($data = mysqli_fetch_assoc($result)){
            echo '<tr>'; ?>
            <td style="border-bottom:2px solid white;"><?= $data['FirstName']?></td>
            <td style="border-bottom:2px solid white;"><?= $data['LastName'] ?></td>
            <td style="border-bottom:2px solid white;"><img src="<?= $data['ChoosePhoto'] ?>" style="margin-left:12px; height: 65px; width:65px;"></td>
            <td style="border-bottom:2px solid white;"><?= $data['Gender'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['CNIC']?></td>
            <td style="border-bottom:2px solid white;"><?= $data['Education'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['Desgination'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['City'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['Salary'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['DOB'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['EmployeeEmail'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['Address'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['ContactNo'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['DateofAppoint'] ?></td>
            <td style="border-bottom:2px solid white;"><?= $data['DateofJoin'] ?></td>
            <td style="border-bottom:2px solid white;"><a href="Edit.php?id=<?=$data['EmpID']?>" class="btn btn-primary">Edit</a></td>
            <td style="border-bottom:2px solid white;"><a href="ViewData.php?Delid=<?=$data['EmpID']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?');return false;">Delete</a></td>
            <?php
            echo '</tr>'; 
        } ?>
    </table>

    <?php 
}
    else{
        echo '<p>No Records Found.</p>';
    }

    error_reporting(0);
    $Delid = $_GET['Delid'];
    $Delquery = "Delete from employee_table where EmpID = $Delid";

    $res= mysqli_query($conn, $Delquery);

    if($res){
        echo "<script>alert('Data Deleted Successfully!'); window.location.href = 'ViewData.php';</script>";
    }
    else{
        echo "<script>alert('Data Deletion Failed!')</script>";
    }


?>

