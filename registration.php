<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
    <label for="Name" >Name</label>
    <input type="text" name="name" id="name">
    </div>
    <label for="Email">Email</label>
    <input type="text" name="email" id="email" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <label for="cpassword">Confirm Password</label>
    <input type="password" name="cpassword" id="cpassword" required>
    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
    <option value="">Select your gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    <label for="country">Country</label>
    <select id="country" name="country" required>
    <option value=""> Select your country</option>
    <option value="Ghana">Ghana</option> <!--Here we will use the db to select-->
    </select>
    



</body>
</html>