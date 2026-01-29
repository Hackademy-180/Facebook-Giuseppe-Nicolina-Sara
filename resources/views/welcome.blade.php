<x-layout>
    <main class="container mt-5">
        <section class="row justify-content-center mt-3">
            <div class="d-flex gap-2 col-12 col-md-6 justify-content-center align-items-center form-post">
                <img src="https://picsum.photos/300/200" alt="" class="icon-user">
                <input class="form-control form-control-lg input-post" type="text" placeholder="A cosa stai pensando?" aria-label=".form-control-lg example" readonly data-bs-toggle="modal" data-bs-target="#createPostModal">
                <div class="modal fade" id="createPostModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Crea il tuo post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Titolo:</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Descrizione:</label>
                                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mood" class="form-label">Stato d'animo:</label>
                                        <input type="text" class="form-control" id="mood" placeholder="" name="mood">
                                    </div>
                                    <div class="mb-3">
                                        <label for="img" class="form-label">Immagine:</label>
                                        <input type="file" class="form-control" id="img" placeholder="" name="img">
                                    </div>
                            </div>
    
                            <div class="modal-footer">
                                <button class="modal-btn" type="submit" data-bs-dismiss="modal">Anulla</button>
                                <button class="modal-btn" type="submit" data-bs-dismiss="modal">Crea post</button>
                            </div>
    
                        </div>
                    </div>
                </div>
                <i class="fa-regular fa-face-grin-tears fa-2x" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-file-image fa-2x" style="color: #054d00;"></i>
            </div>
        </section>
        @foreach ($faces as $face)
        <x-card/>
        @endforeach
    </main>
</x-layout>