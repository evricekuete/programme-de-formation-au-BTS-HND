<?php include('../layouts/navbar.php'); ?>
            <!-- Section Contact-->
            <section class="page-section mt-5 py-5" id="contact">
            <div class="container">
                <!-- Contact Section header-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">contacter nous</h2>
                <!-- Icon pour diviser-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">

                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="nom" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Votre nom</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nom.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email"  name="email"  placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email non valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" name="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero de telephone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Votre numero de telephone.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Entrer  votre message.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">merci Vos donnees sont enregistrees. successful!</div>
                                    Pour activer votre formulaire,
                                    <br />
                                    <a href="https://istec-education.com">rendevous sur notre site</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur un paramettre a ete errone!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>



<?php include('../layouts/footer.php'); ?>