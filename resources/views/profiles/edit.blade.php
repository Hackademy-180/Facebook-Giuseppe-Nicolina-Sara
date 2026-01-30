<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3 mt-5">
                        <label for="name" class="form-label">Nuovo nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione prodotto:</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Nuovo Prezzo:</label>
                        <input type="number" class="form-control" id="price" placeholder="" name="price" value="">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Nuova Copertina:</label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Modifica</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
</x-layout>