<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route('profile_update', compact('profile'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3 mt-5">
                        <label for="name" class="form-label">Modifica nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$profile->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Modifica Cognome:</label>
                        <input class="form-control" type="text" id="description" rows="3" name="surname" value="{{$profile->surname}}"></input>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Modifica data di nascita:</label>
                        <input type="date" class="form-control" id="birthday" placeholder="" name="birthday" value="{{$profile->birthday}}">
                    </div>
                     <div class="mb-3">
                        <label for="bio" class="form-label">Bio:</label>
                        <textarea class="form-control" id="bio" rows="3" name="bio"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Nuova Immagine:</label>
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