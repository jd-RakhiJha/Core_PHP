<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>


    <h2 class="text justify-content-center">Create an Account</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" novalidate enctype="multipart/form-data">

        <div class="row">
            <div class="col-50">
                <label for="employe id">Employee Id</label>
                <input type="text" id="employe" name="employe_id" placeholder="employee Id">

                <div class="mb-2">
                    <label for="formFile" class="form-label">Profile Image</label>
                    <input class="form-control" name="profile_name" type="file" id="formFile">
                </div>

                <div class="container">
                    <label for="employe id">Gender</label>
                    <select name="gender" data-mdb-select-init>
                        <option value="1">Gender</option>
                        <option value="2">Female</option>
                        <option value="3">Male</option>
                        <option value="4">Other</option>
                    </select>
                </div>

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your fname">

                <label for="mname">Middle Name</label>
                <input type="text" id="mname" name="middlename" placeholder="Your mname">

                <label for="lname"> Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your lname">



                <div class="container">
                    <label for="birthdayDate" class="form-label">Birthday</label>
                    <input type="text" name="birthday" class="form-control form-control-lg" id="birthdayDate" />
                </div>

            </div>

            <label for="employe id">Marital</label>
            <select name="marital"data-mdb-select-init>
                <option value="1">Single</option>
                <option value="2">Married</option>
                <option value="3">Unmarried</option>
            </select>

            <div class="container">
                <label for="mumber"> Mobile</label>
                <input type="number" id="mobileN" name="mobile" placeholder="Your number">
            </div>
        </div>

        <div class="container"></div>
        <label for="adr">Address1</label>
        <input type="text" id="adr" name="address1" placeholder="Your Address">
        </div>

        <div class="container"></div>
        <label for="adr">Address2</label>
        <input type="text" id="adr" name="address2" placeholder="Your Address">
        </div>

        <div class="container"></div>
        <label for="adr">Country</label>
        <input type="text" id="country" name="country" placeholder="country">
        </div>

        <label for="city"> City</label>
        <input type="text" id="city" name="city" placeholder="city ">

        <div class="container"></div>
        <label for="state"> State</label>
        <input type="text" id="state" name="state" placeholder="state ">
        </div>

        <div class="container">
            <label for="joindate" class="form-label">Join Date</label>
            <input type="text" name="joindate" class="form-control form-control-lg" id="joindate">
        </div>

        <div class="container">
            <label for="leavedate" class="form-label">Leave Date</label>
            <input type="text" name="leavedate" class="form-control form-control-lg" id="leavedate">
        </div>

        <div class="container"></div>
        <label for="status">Status</label>
        <input type="text" id="status" name="status" placeholder="Status">
        </div>

        <div class="container"></div>
        <label for="role">Role</label>
        <input type="text" id="role" name="role" placeholder="Role">
        </div>

        <div class="container"></div>
        <label for="position">Position</label>
        <input type="text" id="position" name="position" placeholder="position">
        </div>

        <div class="container"></div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email">
        </div>

        <div class="container"></div>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" placeholder="password">
        </div>


        <!-- Submit Button -->
        <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Register</button>
        </div>

    </form>




</body>

</html>


<!---- php code--->

<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if(isset($_POST['submit'])){
        print_r($_POST);


    
     $gender = $_POST["gender"]; 
     $firstname = $_POST["firstname"]; 
     $middlename = $_POST["middlename"]; 
     $lastname = $_POST["lastname"]; 
     $birthday = $_POST["birthday"]; 
     $marital = $_POST["marital"]; 
     $mobile = $_POST["mobile"]; 
     $address1 = $_POST["address1"]; 
     $address2 = $_POST["address2"]; 
     $country = $_POST["country"]; 
     $city = $_POST["city"]; 
     $state = $_POST["state"]; 
     $joindate = $_POST["joindate"]; 
     $leavedate = $_POST["leavedate"]; 
     $status = $_POST["status"]; 
     $role = $_POST["role"]; 
     $position = $_POST["position"]; 
     $email = $_POST["email"]; 
     $password = $_POST["password"];  

     $insert_queery = "INSERT INTO user(first name, middle name, last name, profile_image, gender, birthday, marital, mobile, address1, address2, country, 	city, state, join_date, leave_date, status, role, position, email, password) VALUES(' $employe_id', '$gender', '$firstname', '$middlename', '$lastname', '$birthday', '$marital', '$mobile', '$address1', '$address2', '$country', ' $city', '$state', '$joindate', '$leavedate', '$status', ' $role','   $position', '$email', '$password')";

    }

}

?>