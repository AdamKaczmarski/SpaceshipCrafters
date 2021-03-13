<div class="modal fade" id="reg-failModal" aria-labelledby="modalTitle" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header justify-content-center" style="border-bottom: 1px solid gray;">
                <h2 class="modal-titel" id="modalTitle">Username or email is already taken</h2>
            </div>
            <div class="modal-body">
                <p class="lead">Please try another username or email</p>
            </div>
            <div class="modal-footer justify-content-between" style="border-top: 1px solid gray;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteModal('reg-failModal')">Dismiss</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</div>