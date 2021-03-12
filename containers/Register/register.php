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
                <form>
                    <div class="mb-3">
                        <label for="usernameRegister" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="firstNameRegister" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstNameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="lastNameRegister" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastNameRegister">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberRegister" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phoneNumberRegister">
                    </div>
                    <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailRegister">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRegister" class="form-label">Password</label>
                        <input type="password" class="form-control mb-2" id="passwordRegister" aria-describedby="passwordHelp">
                        <div class="passwordHelp" class="form-text" style="color:#6c757d;">Your password must be at least 6 characters long and contain upper and lower case characters</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmRegister" class="form-label">Confirm password</label>
                        <input type="password" class="form-control mb-2" id="passwordConfirmRegister">
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid gray;">
                        <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>