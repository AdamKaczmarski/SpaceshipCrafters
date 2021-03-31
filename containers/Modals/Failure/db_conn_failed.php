<!-- Modal made with bootstrap that will show that the page cannot connect to the database -->
<div class="modal fade" id="conn-failModal" data-bs-backdrop="static" aria-labelledby="modalTitle" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header justify-content-center" style="border-bottom: 1px solid gray;">
                <h2 class="modal-titel" id="modalTitle">Something went wrong :(</h2>
            </div>
            <div class="modal-body">
                <p class="lead">Couldn't connect to the database, please try again later.</p>
            </div>
            <div class="modal-footer" style="border-top: 1px solid gray;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="deleteModal('conn-failModal')">Dismiss</button>
            </div>
        </div>
    </div>
</div>