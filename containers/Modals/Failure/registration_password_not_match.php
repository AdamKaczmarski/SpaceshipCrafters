<!-- Modal made with bootstrap that will show that registration was not successfull because password and password confirmation were not the same -->
<div class="modal fade" id="reg-pNModal" aria-labelledby="modalTitle" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header justify-content-center" style="border-bottom: 1px solid gray;">
                <h2 class="modal-titel" id="modalTitle">Passwords do not match</h2>
            </div>
            <div class="modal-body">
                <p class="lead">Please try again</p>
            </div>
            <div class="modal-footer justify-content-between" style="border-top: 1px solid gray;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteModal('reg-pNModal')">Dismiss</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</div>