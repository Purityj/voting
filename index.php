<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark">
        <h1 class="text-center text-info">Voting System</h1>
        <div class="bg-info py-4">
            <h2 class="text-center">Login</h2>
        
            <div class="container text-center">
                <form action="./actions/login.php" method="POST">
                    <!-- name -->
                    <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your name" required="required">
                    </div>
                    <!-- mobile number -->
                    <div class="mb-3">
                        <input type="text" name="mobile" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10">
                    </div>
                    <!-- password -->
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control w-50 m-auto"required="required" placeholder="Enter your password">
                    </div>
                    <!-- choices -->
                    <div class="mb-3">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="group">Group</option>
                            <option value="voter">Voter</option>
                        </select>
                    </div>
                    <!-- login button -->
                    <button type="submit" class="btn btn-dark  my-4">Login</button>
                    <p>Don't have an account? <a href="./partials/registration.php" class="text-white"> Register here</a></p>
                    

                </form>
                
            </div>

        </div>    
</body>
</html>