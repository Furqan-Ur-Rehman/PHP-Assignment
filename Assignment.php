
<?php  include 'Header.php' ?>
<?php include 'Connection.php' ?>


<div class="container bg-white col-md-8">
    <h3 class="EmpRegis">EMPLOYEE REGISTRATION</h3>
        
    <form action="Crud Operations.php" onsubmit="return validation()" method="post" enctype="multipart/form-data">
            
            <img src="Noimage.jpg" id="UserImage" style="margin-left:78%; border:1px solid black; border-radius:10px; margin-top:5px; height: 105px; width:105px;">            
            <p style="font-size:12px; margin-bottom:-7px; text-align:right;"><b>Supported Formats: jpeg, jpg, & png only.</b></p>

            <div class="row mt-2">
            

                <div class="col-md-4">
                    
                    <div class="form-group mt-2">
                        <label for="" class="mb-1">First Name:</label>
                        
                        <input type="text" name="firstname" id="EmpFName" placeholder="First Name" class="form-control ">
                    </div>
                    
                </div>
            
                <div class="col-md-4">

                <div class="form-group mt-2">
                        <label for="" class="mb-1">Last Name:</label>
                        
                        <input type="text" name="lastname" id="EmpLName" placeholder="Last Name" class="form-control ">
                    </div>
                </div>

                <div class="col-md-4">

                    
                    <div class="form-group mt-2">
                    <label for="photo" class="mb-1">Choose Photo:</label>
                        <input type="file" class="form-control" id="Pro_Image" name="uploadphoto">
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6">
            
                <div class="form-group mt-2">
                    <label for="gen" class="mb-1">Gender:</label> 
                        <div class="form-check-inline form-control  ml-5">
                                <label class="form-check-label">
                                Male: <input type="radio" class="form-check-input" id="gender" required name="gen" value = "Male">
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" class="form-check-input" id="gender" required name="gen" value = "Female">
                                </label>
                        </div>
                            
                </div>
                    
            </div>

            <div class="col-md-6">
                <div class="form-group mt-2">
                <label for="" class="mb-1">Cnic No:</label>                   
                    
                    <input type="text" name="cnic" id="EmpCNIC" placeholder="CNIC No." class="form-control ">
                </div>    
            </div>

            
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group mt-2">
                    <label for="Edu" class="mb-1">Education:</label>
                    <input type="text" class="form-control" id="Edu" name="edu" placeholder="Enter Your Education">
                </div>


            </div>

            <div class="col-md-4">
                <div class="form-group mt-2">
                    <label for="Desig" class="mb-1">Designation:</label>
                    <input type="text" class="form-control" id="Desig" name="designation" placeholder="Enter Your Designation">
                </div>


            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="city" class="mt-2 mb-1">Select City:</label>
                    <select class="form-control" id="city" name = "city">
                        <option value="">--Select--</option>
                        <option value = "Karachi">Karachi</option>
                        <option value = "Lahore">Lahore</option>
                        <option value = "Islamabad">Islamabad</option>
                        <option value = "Peshawar">Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Salary:</label>                
                <input type="number" id="salary" name="salary" class="form-control" placeholder="Enter Your Salary">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">Date of Birth:</label>               
                <input type="date" id="dob" name="dateofbirth" class="form-control" placeholder="Enter Your DOB">

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Email Address:</label>                
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">House Address:</label>               
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address">

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
            <label for="" class="mt-2 mb-1">Contact No:</label>                
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Your Contact No.">

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <label for="" class="mt-2 mb-1">Date of Appointment:</label>                
                <input type="date" id="dofappoint" name="appoint" class="form-control" placeholder="Enter Your Appointment Date">

            </div>

            <div class="col-md-6"> 
            <label for="" class="mt-2 mb-1">Date of Joining:</label>               
                <input type="date" id="dofjoining" name="joindate" class="form-control" placeholder="Enter Your Joining Date">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="subbtn btn btn-dark form-control mb-4 mt-3" name="sub">Submit</button>
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

