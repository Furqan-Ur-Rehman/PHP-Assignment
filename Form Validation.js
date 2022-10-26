function validation(){
    var EmpFirstName =document.getElementById('EmpFName').value;
    var EmpLastName =document.getElementById('EmpLName').value;
    var Gender = document.getElementById('gender').value;
    var EmpCNIC =document.getElementById('EmpCNIC').value;
    var EmpEdu = document.getElementById('Edu').value;
    var EmpDesig = document.getElementById('Desig').value;
    var Empcity = document.getElementById('city').value;
    var Empsalary = document.getElementById('salary').value;
    var Empdob = document.getElementById('dob').value;
    var Empemail = document.getElementById('email').value;
    var Empaddress = document.getElementById('address').value;
    var Empcont = document.getElementById('contact').value;
    var EmpdofAppoint = document.getElementById('dofappoint').value;
    var Empdofjoining = document.getElementById('dofjoining').value;
    


    // Regular Expressions
    var Emppattern =/^[a-zA-Z0-9 ,.\/-]{3,}$/
    // var Empgenderpattern =/^[a-zA-Z]{1,}$/    
    var Empdatepattern =/^[0-9-\/]{1,}$/
    var EmpEducation =/^[a-zA-Z-]{1,}$/
    var cnicpattern =/^[0-9-]{4,15}$/
    var salarypattern =/^[0-9.]{4,}$/    
    var emailpattern =/^[a-zA-Z0-9_]{3,}@[a-zA-Z]{3,}[.]{1}[com]{3}$/
    var phonepattern =/^[0-9-]{1,12}$/


    // Employee First Name
    if(Emppattern.test(EmpFirstName)){
        document.getElementById('EmpFName').style.borderColor="";
    }
    else{
        document.getElementById('EmpFName').style.borderColor="red";
        alert("***Please Enter Your First Name which at least 3 letters.");
        return false;
    }

    // Employee Last Name
    if(Emppattern.test(EmpLastName)){
        document.getElementById('EmpLName').style.borderColor="";
    }
    else{
        document.getElementById('EmpLName').style.borderColor="red";
        alert("***Please Enter Your Last Name which at least 3 letters.");
        return false;
    }

    // Employee Gender
    // if(Gender != "Male" || Gender != "Female" ){
    //     document.getElementById('gender').style.borderColor="";
    // }
    // else{
    //     document.getElementById('gender').style.borderColor="red";
    //     alert("***Please Enter Your Gender.");
    //     return false;
    // }

    // Employee CNIC
    if(cnicpattern.test(EmpCNIC)){
        document.getElementById('EmpCNIC').style.borderColor="";
    }
    else{
        document.getElementById('EmpCNIC').style.borderColor="red";
        alert("***Please Enter Your Correct CNIC Number which can consist of 15 characters include dashed(-) 2 times.");
        return false;
    }

    // Employee Education
    if(EmpEducation.test(EmpEdu)){
        document.getElementById('Edu').style.borderColor="";
    }
    else{
        document.getElementById('Edu').style.borderColor="red";
        alert("***Please Enter Your Education.");
        return false;
    }

    // Employee Designation
    if(Emppattern.test(EmpDesig )){
        document.getElementById('Desig').style.borderColor="";
    }
    else{
        document.getElementById('Desig').style.borderColor="red";
        alert("***Please Enter Your Designation.");
        return false;
    }

    // Employee City
    if(Emppattern.test(Empcity)){
        document.getElementById('city').style.borderColor="";
    }
    else{
        document.getElementById('city').style.borderColor="red";
        alert("***Please Enter Your City where you live.");
        return false;
    }

    // Employee Salary
    if(salarypattern.test(Empsalary)){
        document.getElementById('salary').style.borderColor="";
    }
    else{
        document.getElementById('salary').style.borderColor="red";
        alert("***Please Enter Your Salary.");
        return false;
    }

    // Employee DOB
    if(Empdatepattern.test(Empdob)){
        document.getElementById('dob').style.borderColor="";
    }
    else{
        document.getElementById('dob').style.borderColor="red";
        alert("***Please Enter Your DOB.");
        return false;
    }

    // Email Address
    if(emailpattern.test(Empemail)){
        document.getElementById('email').style.borderColor="";
    }

    else{
        document.getElementById('email').style.borderColor="red";
        alert("***Please Enter Your Correct Email Address e.g. (furqan689_@gmail.com)");
        return false;
    }

    // Employee Address
    if(Emppattern.test(Empaddress)){
        document.getElementById('address').style.borderColor="";
    }
    else{
        document.getElementById('address').style.borderColor="red";
        alert("***Please Enter Your Address where you live.");
        return false;
    }

    // Phone Number
    if(phonepattern.test(Empcont)){
        document.getElementById('contact').style.borderColor="";
    }
    else{
        document.getElementById('contact').style.borderColor="red";
        alert("***Phone Number is invalid {only numeric no. are allowed e.g.(03457896531 or 0345-7896531) or 11 numbers are allowed except -}..");
        return false;
    }

    // Date of Appoint
    if(Empdatepattern.test(EmpdofAppoint)){
        document.getElementById('dofappoint').style.borderColor="";
    }
    else{
        document.getElementById('dofappoint').style.borderColor="red";
        alert("***Please Enter your Date of Appoint.");
        return false;
    }

     // Date of Joining
     if(Empdatepattern.test(Empdofjoining)){
        document.getElementById('dofjoining').style.borderColor="";
    }
    else{
        document.getElementById('dofjoining').style.borderColor="red";
        alert("***Please Enter your Date of Joining.");
        return false;
    }
}