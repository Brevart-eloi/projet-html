<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>site web inscription</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="sitecss2.css" rel="stylesheet" />
    </head>
    <!-- Signup-->
    <body>
        <section class="signup-section">
            <div class="container px-4 px-lg-5"  id="signup">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white" ></i>
                        <h2 class="text-white mb-5">INSCRIS TOI !</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">je m'inscris</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">un email est requis.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">votre Email n'est pas valide.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Envoie effectuer!</div>
                                    To activate this form, sign up at
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                            <div class="btn-connexion">
                                <h2 class="text-white mb-5">Revenir à la connexion :</h2>   
                            </div>
                            <div class="btn-connexion">
                                <a href="sitephp3.php">
                                    <button type="button" class="btn btn-primary">Connexion</button>
                                </a>  
                            </div>         
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>