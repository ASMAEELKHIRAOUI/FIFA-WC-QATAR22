<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/sign.css"/>
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <script defer  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <title>FIFA World Cup Qatar 2022™ - SignIn</title>
</head>

<body>
    <div class="row-lg h-100 d-flex align-items-center p-5 flex-wrap">
        <div class="col-lg-1"></div>
        <div id="signIn" class="col-lg-5">
            <form action="signin.php" method="POST" id="form" data-parsley-validate>
                <p class="signin text-center"> SIGN IN </p>
                <div class="email pt-3">
                    <p>Email Address</p>
                    <input name="email" class="input form form-control" type="email" data-parsley-type="email" required>
                </div>
                <div class="password pt-3">
                    <p>Password</p>
                    <input class="input form form-control" type="password" name="password" data-parsley-minlength="8" required>
                </div>
                <div class="row justify-content-center mt-3"><button class="btn" name="signIN">SIGN IN NOW</button></div>
                <div class="signup text-center mt-4">
                    Don't have an account? <a class="link" href="signup.php">Create one!</a>
                </div>
                <div class="privacy text-center mt-4">
                    By clicking on "sign in now" you agree to <a class="link" href="">Privacy Policy</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>