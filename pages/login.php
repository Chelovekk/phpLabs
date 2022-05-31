<?php include "layout/login.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
</head>
<body>
<?php //include "pages/components/header.php"?>

<div class="container w-25 mt-4">
    <div class="row justify-content-center align-items-center">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                   aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                   aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>



        <div class="tab-content  col">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="post">
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">or:</p>


                    <div class="form-outline mb-4">
                        <input type="" id="loginName" class="form-control", name="username"/>
                        <label class="form-label" for="loginName">Email or username</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" name="password"/>
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>


                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked/>
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">

                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block mb-4" name="signin">Sign in</button>


                    <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form method="post">
                    <div class="text-center mb-3">
                        <p>Sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">or:</p>


                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control"/>
                        <label class="form-label" for="registerName">Name</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" name="username"/>
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control"/>
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" name="password"/>
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" name="confirm_password"/>
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>


                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                               aria-describedby="registerCheckHelpText"/>
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block mb-3" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "pages/components/footer.php"?>



<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>