<x-layout>
    <h1>commenti</h1>
    <main class="container">
        <section class="row mt-5 g-4">
            @foreach($comments as $comment)
                <article class="col-12 col-md-3">
                    <div class="card d-flex justify-content-evenly">
                    <span>{{Auth::user()->name}} ha commentato: </span>
                        <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                            <a href="{{route('comment_detail', compact('comment'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>
    </main>
</x-layout>