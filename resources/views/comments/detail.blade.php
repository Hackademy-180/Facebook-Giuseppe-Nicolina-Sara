<x-layout>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <span>{{Auth::user()->name}} ha commentato: </span>
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Commenta</button>
            </div>
        </section>
    </main>
</x-layout>