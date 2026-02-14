<html>

<head>
    <title>MediFlow</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        .form-control {
            border-radius: 0.75rem;
        }
    </style>

    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }

    </script>

</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4><i class="fa fa-user-plus" aria-hidden="true"></i> MediFlow</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-4"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item mr-4"><a class="nav-link" href="services.html">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <!-- Left Panel: Branding -->
        <div class="brand-panel">
            <div class="brand-content">
                <img src="images/favicon.png" alt="MediFlow Logo">
                <h2>Welcome to MediFlow</h2>
                <p>Your trusted partner in healthcare management. Book appointments, connect with doctors, and manage
                    your health journey all in one place.</p>
            </div>
        </div>

        <!-- Right Panel: Forms -->
        <div class="form-panel">
            <div class="auth-card">
                <div class="auth-header">
                    <h3>Get Started</h3>
                </div>

                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab">Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab">Admin</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- Patient Register -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                        <form method="post" action="func2.php">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="fname"
                                        onkeydown="return alphaOnly(event);" required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="lname"
                                        onkeydown="return alphaOnly(event);" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email"
                                        required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control"
                                        placeholder="Your Phone *" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="password" class="form-control" placeholder="Password *" id="password"
                                        name="password" onkeyup='check();' required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="password" class="form-control" id="cpassword"
                                        placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required />
                                    <small id='message'></small>
                                </div>
                            </div>

                            <div class="form-group text-center mb-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <label class="radio mr-4">
                                        <input type="radio" name="gender" value="Male" checked> Male
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="gender" value="Female"> Female
                                    </label>
                                </div>
                            </div>

                            <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();"
                                value="Register" />
                            <div class="text-center mt-3">
                                <a href="index1.php" class="text-muted">Already have an account? Login</a>
                            </div>
                        </form>
                    </div>

                    <!-- Doctor Login -->
                    <div class="tab-pane fade" id="profile" role="tabpanel">
                        <form method="post" action="func1.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username *" name="username3"
                                    onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" name="password3"
                                    required />
                            </div>
                            <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                        </form>
                    </div>

                    <!-- Admin Login -->
                    <div class="tab-pane fade" id="admin" role="tabpanel">
                        <form method="post" action="func3.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username *" name="username1"
                                    onkeydown="return alphaOnly(event);" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" name="password2"
                                    required />
                            </div>
                            <input type="submit" class="btnRegister" name="adsub" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>