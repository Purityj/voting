<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>

       <!-- Bootstrap css link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center text-white">Register Account</h2>
        <div class="container text-center">
<!-- Use post method when sending sensitive data to the db. Include the enctype when sending a photo the db -->
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <!--username  -->
                <div class="mb-3">
                    <input type="text" placeholder="Enter your username" name="username" required="required" class="form-control w-50 m-auto">
                </div>
                <!-- mobile number -->
                <div class="mb-3">
                    <input type="text" placeholder="Enter your mobile number" name="mobile" required="required" class="form-control w-50 m-auto" maxlength="10" minlength="10">
                </div>
                <!-- password -->
                <div class="mb-3">
                    <input type="password" placeholder="Enter your password" name="password" required="required" class="form-control w-50 m-auto">
                </div>
                <!-- confirm password -->
                <div class="mb-3">
                    <input type="password" placeholder="Confirm password" name="cpassword" required="required" class="form-control w-50 m-auto">
                </div>
                <!-- image -->
                <div class="mb-3">
                    <input type="file"  name="photo" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <select name="std" id="" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button class="btn btn-dark my-4" type="submit">Register</button>
                <p>Already have an account? <a href="../index.php" class="text-white">Login in here</a></p>
            </form>
        </div>

    </div>
    
</body>
</html>