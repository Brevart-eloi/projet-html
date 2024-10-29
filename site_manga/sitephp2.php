<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Site Web Inscription</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="sitecss2.css" rel="stylesheet" />
    </head>
    <body>
        <section class="signup-section">
            <div class="container px-4 px-lg-5" id="signup">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">INSCRIS-TOI !</h2>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Username input-->
                            <div class="row input-group-newsletter mb-3">
                                <div class="col">
                                    <input class="form-control" id="username" type="text" placeholder="Nom d'utilisateur..." aria-label="Nom d'utilisateur" data-sb-validations="required" />
                                </div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="username:required">Un nom d'utilisateur est requis.</div>

                            <!-- Password input-->
                            <div class="row input-group-newsletter mb-3">
                                <div class="col">
                                    <input class="form-control" id="password" type="password" placeholder="Mot de passe..." aria-label="Mot de passe" data-sb-validations="required" />
                                </div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="password:required">Un mot de passe est requis.</div>

                            <!-- Submit button -->
                            <div class="row input-group-newsletter">
                                <div class="col-auto">
                                    <button class="btn btn-primary" id="submitButton" type="submit">Je m'inscris</button>
                                </div>
                            </div>

                            <!-- Submit success message-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Envoi effectué!</div>
                                    Pour activer ce formulaire, inscrivez-vous sur
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>

                            <!-- Submit error message-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3 mt-2">Erreur lors de l'envoi!</div>
                            </div>

                            <!-- Link to login page -->
                            <div class="btn-connexion">
                                <h2 class="text-white mb-5">Revenir à la connexion :</h2>   
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
