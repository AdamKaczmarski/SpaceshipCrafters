<!-- Modal made with bootstrap that will show that entered credentials were incorrect -->

<div class="modal fade" id="login-failWrongModal" data-bs-backdrop="static" aria-labelledby="modalTitle" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header justify-content-center" style="border-bottom: 1px solid gray;">
                <h2 class="modal-titel" id="modalTitle">Something went wrong :(</h2>
            </div>
            <div class="modal-body">
                <p class="lead">Username or password were incorrect</p>
            </div>
            <div class="modal-footer" style="border-top: 1px solid gray;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteModal('login-failWrongModal')">Dismiss</button>
            </div>
        </div>
    </div>
</div>