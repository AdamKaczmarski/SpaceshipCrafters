<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content bg-dark">
            <div class="modal-header" style="border-bottom: 1px solid gray;">
                <h2 class="modal-title" id="Login">Login</h2>
            </div>
            <div class="modal-body">
                <form role="form" action="./containers/Authentication/authentication.php" method="post">
                    <div class="mb-3">
                        <label for="usernameLogin" class="form-label" >Username</label>
                        <input type="text" class="form-control" id="usernameLogin" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" >Password</label>
                        <input type="password" class="form-control" id="passwordLogin" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="remember-password">
                            <input type="checkbox" class="form-check-input" id="remember-password" name="remember">
                            Remember me
                        </label>
                    </div>
                    <div class="modal-footer justify-content-between" style="border-top: 1px solid gray;">
                       
                        <p class="text-muted"> Don't have an account? 
                            <a href="#" class="register-link" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                        </p>
                        <div class="justify-content-end">
                            <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>