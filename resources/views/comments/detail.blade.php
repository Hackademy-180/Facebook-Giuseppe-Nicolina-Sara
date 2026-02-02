<x-layout>
    <h1 class="text-center mt-5">Tutti i commenti</h1>
    <main class="container">
        <section class="row mt-5 g-4">
            @foreach($comments as $comment)
            <article class="col-12 col-md-3">
                <div class="d-flex align-items-center gap-2">
                    <a href="" class="d-flex align-items-center gap-2 text-decoration-none text-black"><img src="https://picsum.photos/300/200" alt="" class="icon-drop"></a>
                    <span>{{Auth::user()->name}} ha commentato: </span>
                </div>
                <!-- -->
                <div class="card d-flex justify-content-evenly mt-3">
                    <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                        <p>{{$comment->content}}</p>
                    </div>
                    
                </div>
                <ul>
                    <span>{{ $comment->created_at }}</span>
                    @if(Auth::id()==$comment->user->id)
                    <form method="POST" action="{{route('comment_destroy', compact('comment'))}}">
                        @csrf
                        @method('DELETE')
                        <button>
                            <i class="fa-solid fa-eraser ms-5" style="color: #d72714;"></i>
                        </button>
                    </form>
                    @endif
                    
                    <i class="fa-solid fa-highlighter" style="color: #005eff;"></i>
                </ul>
            </article>
            
            @endforeach
        </section>
    </main>
</x-layout>



