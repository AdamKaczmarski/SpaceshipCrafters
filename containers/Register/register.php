<!-- Registratrion modal made with bootstrap -->

<div class="modal fade " id="registerModal" tabindex="-1" aria-labelledby="Register" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header" style="border-bottom: 1px solid gray;">
                <h2 class="modal-title" id="Register">Register</h2>
                <p class="text-muted"> Already have an account? 
                            <a href="#" class="register-link" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </p>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate method="post" role="form" onchange="changedForm()" action="./containers/Authentication/registration.php" id="registerForm">
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control is-invalid" id="usernameRegister" name="usernameRegister" pattern="[A-Za-z]{2,}" required placeholder="Username">
                        <label for="usernameRegister" class="text-dark">Username</label>
                    </div>
                    <div class="mb-3 form-floating">

                        <input type="text" id="firstNameRegister" required placeholder="John" pattern="[A-Za-z]{2,}" class="form-control is-invalid" name="firstNameRegister">
                        <label for="firstNameRegister" class="text-dark">First Name</label>
                    </div>
                    <div class="mb-3 form-floating">
                        
                        <input type="text" class="form-control is-invalid" name="lastNameRegister" id="lastNameRegister" required placeholder="Doe" pattern="[A-Za-z]{2,}">
                        <label for="lastNameRegister" class="text-dark">Last Name</label>
                    </div>
                    <div class="mb-3 form-floating">
                        
                        <input type="text" class="form-control is-invalid " id="phoneNumberRegister" name="phoneNumberRegister" aria-describedby="phoneNumberHelp" placeholder="123123123" required pattern="(\+|00)\d[0-9]{7,17}">
                        <label for="phoneNumberRegister" class="text-dark">Phone Number</label>
                        <div class="phoneNumberHelp" class="form-text" style="color:#6c757d;">Please enter in format 00/+(country code)(number) eg. 00447640328345</div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control is-invalid" name="emailRegister" id="emailRegister" placeholder="john@exampl.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <label for="emailRegister" class="text-dark">Email address</label>
                    </div>
                    <div class="mb-3 form-floating">
                        
                        <input type="password" class="form-control mb-2 is-invalid" name="passwordRegister" aria-describedby="passwordHelp" id="passwordRegister" required placeholder="......">
                        <label for="passwordRegister" class="text-dark">Password</label>
                        <div class="passwordHelp" class="form-text" style="color:#6c757d;">Your password must be at least 6 characters long and contain upper and lower case characters numbers and at least one symbol</div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" class="form-control mb-2 is-invalid" name="passwordConfirmRegister" id="passwordConfirmRegister" required placeholder="......">
                        <label for="passwordConfirmRegister" class="text-dark">Confirm password</label>
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid gray;">
                        <input type="text" value="<?php echo $_SERVER['REQUEST_URI']; ?>" style="display:none;" name="path"/>
                        <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnRegister" id="btnRegister" disabled>Register</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<script src="./js/jquery-3.6.0.js"></script>
<script src="./js/registerValidation.js"></script>
