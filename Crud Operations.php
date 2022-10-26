
<?php include 'Connection.php' ?>

<?php 
//Insert Coding Start Here

if(isset($_POST['sub'])){
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Gender = $_POST['gen'];
    $Cnic = $_POST['cnic'];
    $Education = $_POST['edu'];
    $designation = $_POST['designation'];
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $Dob = $_POST['dateofbirth'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Contact = $_POST['contact'];    
    $Doappoint = $_POST['appoint'];
    $Dojoin = $_POST['joindate']; 

    //Images Work Start Here

    $FileName = $_FILES['uploadphoto']['name'];
    $FileSize = $_FILES['uploadphoto']['size'];
    $FileTempLocation = $_FILES['uploadphoto']['tmp_name'];
    $FileType = $_FILES['uploadphoto']['type'];
    

    if($FileName != ""){
        if(strtolower($FileType) == 'image/jpeg' || strtolower($FileType) == 'image/jpg' || strtolower($FileType) == 'image/png' ){
            if($FileSize <= 1000000){
                $Folder = 'images/'.$FileName;
                $Choosephoto = $Folder;
                if(file_exists($Folder)){
                    echo "<script>alert('Image already Exists in the Folder.')</script>";
                }
            
                else{
                    if(move_uploaded_file($FileTempLocation, $Folder)){
                        echo "<script>alert('Image Uploaded Successfully!')</script>";
                    }
                    else{
                        echo "<script>alert('Image Uploaded Failed.')</script>";
                    }
                }
                
                    //Images Work End Here
                
                    $query = "insert into employee_table (FirstName, LastName, 	ChoosePhoto,Gender,CNIC,Education,Desgination,City,Salary,DOB,EmployeeEmail,Address,ContactNo,DateofAppoint,DateofJoin) 
                    values ('$FirstName','$LastName','$Choosephoto','$Gender','$Cnic','$Education','$designation','$city','$salary','$Dob','$Email', '$Address', '$Contact', '$Doappoint','$Dojoin')";
                
                    $res = mysqli_query($conn,$query);
                    if($res){
                        echo "<script>alert('Data Inserted into Database Successfully!'); window.location.href = 'ViewData.php';</script>";
                    }
                    else{
                        echo "<script>alert('Data Insertion Failed!')</script>";
                    }
            }
            else{
                 echo "<script>alert('Your Image Size should be less than or equal to 1MB.'); window.location.href = 'Assignment.php';</script>";
            }
        }
        else{
                echo "<script>alert('Your Image Format is not Supported.'); window.location.href = 'Assignment.php';</script>";
            }

    }
    else{
        echo "<script>alert('You dont Select an Image.'); window.location.href = 'Assignment.php';</script>";
    }
    

}


//Insert Coding End Here


//Update Coding Start here

if(isset($_POST['update'])){
    $Empid = $_POST['empid'];
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Gender = $_POST['gen'];
    $Cnic = $_POST['cnic'];
    $Education = $_POST['edu'];
    $designation = $_POST['designation'];
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $Dob = $_POST['dateofbirth'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Contact = $_POST['contact']; 
    $Doappoint = $_POST['appoint'];
    $Dojoin = $_POST['joindate']; 
    
    //Images Work Start Here

    $FileName = $_FILES['uploadphoto']['name'];
    $FileSize = $_FILES['uploadphoto']['size'];
    $FileTempLocation = $_FILES['uploadphoto']['tmp_name'];
    $FileType = $_FILES['uploadphoto']['type'];
   
    if($FileName != ""){
        
        
            if(strtolower($FileType) == 'image/jpeg' || strtolower($FileType) == 'image/jpg' || strtolower($FileType) == 'image/png' ){
                if($FileSize <= 1000000){
                    $Folder = 'images/'.$FileName;
                    $Choosephoto = $Folder;
                       //Images Work End Here
                    
                    if(file_exists($Folder)){
                    echo "<script>alert('Image already Exists in the Folder.')</script>";
                    }
                
                    else{
                        if(move_uploaded_file($FileTempLocation, $Folder)){
                            echo "<script>alert('Image Updated Successfully!')</script>";
                        }
                        else{
                            echo "<script>alert('Image Updation Failed.')</script>";
                        }
                    }
                    $query= "update employee_table set FirstName ='$FirstName',LastName = '$LastName',ChoosePhoto ='$Choosephoto',Gender='$Gender',CNIC='$Cnic',Education='$Education',
                    Desgination='$designation', City='$city',Salary='$salary',DOB='$Dob',EmployeeEmail='$Email',Address='$Address', ContactNo='$Contact',DateofAppoint='$Doappoint',DateofJoin='$Dojoin' where EmpID =$Empid";
                
                    $res =mysqli_query($conn, $query);
                    
                    if($res){
                        echo "<script>alert('Data Updated into Database Successfully!'); window.location.href = 'ViewData.php';</script>";
                    }
                    else{
                        echo "<script>alert('Data Updation Failed!')</script>";
                    }
                        
                }
                else{
                     echo "<script>alert('Your Image Size should be less than or equal to 1MB.'); window.location.href = 'ViewData.php';</script>";
                }
            }
            else{
                    echo "<script>alert('Your Image Format is not Supported.'); window.location.href = 'ViewData.php';</script>";
                }        
    }
    else{
        
        $query= "update employee_table set FirstName ='$FirstName',LastName = '$LastName',Gender='$Gender',CNIC='$Cnic',Education='$Education',
        Desgination='$designation', City='$city',Salary='$salary',DOB='$Dob',EmployeeEmail='$Email',Address='$Address', ContactNo='$Contact',DateofAppoint='$Doappoint',DateofJoin='$Dojoin' where EmpID =$Empid";
    
        $res =mysqli_query($conn, $query);
        echo "<script>alert('Image is not Updated!')</script>";
        if($res){
            echo "<script>alert('Data Updated into Database Successfully!'); window.location.href = 'ViewData.php';</script>";
        }
        else{
            echo "<script>alert('Data Updation Failed!')</script>";
        }
    }
}

//Update Coding End here