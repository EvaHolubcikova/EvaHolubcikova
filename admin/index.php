<?php 
	include 'hlavickaAdmin.php';
	include 'navbarAdmin.php';
	include 'pataAdmin.php';
?>
<style>body {background-color: grey}</style>
<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark ">
                    <div class="card-header text-center text-white" ><b>Prihlásenie</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row was-validated bg-dark">
                                <small id="emailHelp" class="form-text text-white mb-2"><b>Užívateľské meno</b></small>
                                <div class="col-lg-12 input-container">
                                   
                                    <input type="text" id="email_address" class="form-control" name="email-address" required > 
                                      

                                    <div class="invalid-feedback">
                                      Zadajte svoje užívateľské meno
                                    </div>
                                </div>
                               
                            </div>

                            <div class="form-group row was-validated">
                                 <small id="emailHelp" class="form-text text-dark mb-2"><b>Heslo</b></small>
                                <div class="col-lg-12">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                      Zadajte svoje heslo
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <div class="checkbox text-white">
                                        <label>
                                            <input type="checkbox" name="remember"> Pamätať prihlásenie
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center "> 
                                <button type="submit" class="btn btn-light">
                                    <a href="prihlasenie.php">Prihlásiť sa</a>
                                </button>
                                <br>
                                <a href="#" class="page-link border-0 bg-dark text-white">
                                    Zaregistruj sa
                                </a>
                                <a href="#" class="page-link border-0 bg-dark text-white">
                                    Zabudol som heslo
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>