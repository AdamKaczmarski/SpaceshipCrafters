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
                <form method="post" role="form" action="./containers/Authentication/registration.php">
                    <div class="mb-3">
                        <label for="usernameRegister" class="form-label">Username</label>
                        <input type="text" class="form-control" name="usernameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="firstNameRegister" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstNameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="lastNameRegister" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastNameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberRegister" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phoneNumberRegister">
                    </div>
                    <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="emailRegister">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRegister" class="form-label">Password</label>
                        <input type="password" class="form-control mb-2" name="passwordRegister" aria-describedby="passwordHelp">
                        <div class="passwordHelp" class="form-text" style="color:#6c757d;">Your password must be at least 6 characters long and contain upper and lower case characters</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmRegister" class="form-label">Confirm password</label>
                        <input type="password" class="form-control mb-2" name="passwordConfirmRegister">
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid gray;">
                        <input type="text" value="<?php echo $_SERVER['REQUEST_URI']; ?>" style="display:none;" name="path"/>
                        <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnRegister">Register</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>