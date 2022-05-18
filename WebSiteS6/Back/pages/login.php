

<?php include("header.php");?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                 <form action="traitementLogin.php" method="POST">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                                </a>
                                <h3>Sign In</h3>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Login">
                                <label for="floatingInput">Login</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="mdp" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Mot de passe</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </div>
                    </form>
                    <?php if (isset($_POST['res'])) {?>

                            <input type="hidden" class="form-control"  placeholder="Erreur de login et de mot de passe">
                        <?php }?>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

<?php include("footer.php");?>    