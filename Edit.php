<?php  include 'Header.php' ?>
<?php include 'Connection.php' ?>

<?php 
error_reporting(0);
$id = $_GET['id'];
$query = "Select * from employee_table where EmpID = $id";
$Getdata = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($Getdata);
?>

<div class="container bg-white col-md-8">
    <h3 class="Empedit">EDIT EMPLOYEE</h3>
        
    <form action="Crud Operations.php" onsubmit="return validation()" method="post" enctype="multipart/form-data">
            
            <img src="<?= $result['ChoosePhoto'] ?>" id="UserImage" name="uploadphoto" style="margin-left:80%; border-radius:10px; margin-top:5px; height: 100px; width:100px;">            
            
            <p style="font-size:12px; margin-bottom:-7px; text-align:right;"><b>Supported Formats: jpeg, jpg, & png only.</b></p> 
        <div class="row mt-2">
            <input type="hidden" name="empid" value="<?= $result['EmpID']?>">
            
            <div class="col-md-4">
                
                <div class="form-group mt-2">
                    <label for="" class="mb-1">First Name:</label>
                    
                    <input type="text" name="firstname" id="EmpFName" placeholder="First Name" class="form-control" value="<?= $result['FirstName'] ?>">
                </div>
                
            </div>
            
            <div class="col-md-4">

            <div class="form-group mt-2">
                    <label for="" class="mb-1">Last Name:</label>
                    
                    <input type="text" name="lastname" id="EmpLName" value="<?= $result['LastName']?>" placeholder="Last Name" class="form-control ">
                </div>
            </div>

            <div class="col-md-4">

                
                <div class="form-group mt-2">
                <label for="" class="mb-1">Choose Photo:</label>
                    <input type="file" class="form-control" id="Pro_Image" value=" $image=<?= $result['ChoosePhoto']?>" name="uploadphoto">
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-6">
            

                <div class="form-group mt-2">
                    <label for="gen" class="mb-1">Gender:</label> 
                        <div class="form-check-inline form-control  ml-5">
                                <label class="form-check-label">
                                Male: <input type="radio"  id="gender" class="form-check-input" name="gen" value = "Male" <?php if($result['Gender'] == 'Male'){ echo 'checked';} ?>>
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" id="gender" class="form-check-input" name="gen" value = "Female" <?php if($result['Gender'] == 'Female'){ echo 'checked';} ?>>
                                </label>
                        </div>
                            
                </div>
                    
            </div>

            <div class="col-md-6">
                <div class="form-group mt-2">
                <label for="" class="mb-1">Cnic No:</label>                   
                    
                    <input type="text" name="cnic" id="EmpCNIC" value="<?= $result['CNIC']?>" placeholder="CNIC No." class="form-control ">
                </div>    
            </div>

            
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group mt-2">
                    <label for="Edu" class="mb-1">Education:</label>
                    <input type="text" class="form-control" id="Edu" value="<?= $result['Education']?>" name="edu" placeholder="Enter Your Education">
                </div>


            </div>

            <div class="col-md-4">
                <div class="form-group mt-2">
                    <label for="Desig" class="mb-1">Designation:</label>
                    <input type="text" class="form-control" id="Desig" value="<?= $result['Desgination']?>" name="designation" placeholder="Enter Your Designation">
                </div>


            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select City:</label>
                    <select class="form-control" id="city" name = "city">
                        <option value="" <?php if($result['City'] == ''){echo 'selected';} ?>>--Select--</option>
                        <option value = "Karachi" <?php if($result['City'] == 'Karachi'){echo 'selected';} ?>>Karachi</option>
                        <option value = "Lahore" <?php if($result['City'] == 'Lahore'){echo 'selected';} ?>>Lahore</option>
                        <option value = "Islamabad" <?php if($result['City'] == 'Islamabad'){echo 'selected';} ?>>Islamabad</option>
                        <option value = "Peshawar" <?php if($result['City'] == 'Peshawar'){echo 'selected';} ?>>Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Salary:</label>                
                <input type="number" id="salary" name="salary" value="<?= $result['Salary']?>" class="form-control" placeholder="Enter Your Salary">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">Date of Birth:</label>               
                <input type="date" id="dob" name="dateofbirth" class="form-control" value="<?= $result['DOB']?>" placeholder="Enter Your DOB">

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Email Address:</label>                
                <input type="text" id="email" name="email" value="<?= $result['EmployeeEmail']?>" class="form-control" placeholder="Enter Your Email">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">House Address:</label>               
                <input type="text" id="address" name="address" value="<?= $result['Address']?>" class="form-control" placeholder="Enter Your Address">

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
            <label for="" class="mt-2 mb-1">Contact No:</label>                
                <input type="text" id="contact" name="contact" value="<?= $result['ContactNo']?>" class="form-control" placeholder="Enter Your Contact No.">

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Date of Appointment:</label>                
                <input type="date" id="dofappoint" name="appoint" class="form-control" value="<?= $result['DateofAppoint']?>" placeholder="Enter Your Appointment Date">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">Date of Joining:</label>               
                <input type="date" id="dofjoining" name="joindate" class="form-control" value="<?= $result['DateofJoin']?>" placeholder="Enter Your Joining Date">

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="subbtn btn btn-dark form-control mb-4 mt-3" name="update">Update / Edit</button>

            </div>

        </div>
    </form>
</div>

<script>
        $(document).ready(function () {

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })

            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {

                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
</script>