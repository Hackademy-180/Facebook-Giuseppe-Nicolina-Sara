<!--Vertically centered scrollable modal -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" id="createpostmodal">
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">titlo del post</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">una breve descrizione</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="mood" class="form-label">stato d'animo</label>
            <input type="text" class="form-control" id="mood" placeholder="" name="mood">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Immagine:</label>
            <input type="file" class="form-control" id="img" placeholder="" name="img">
        </div>
        <div>
            <button>Button</button>
        </div>
    </form>
</div>