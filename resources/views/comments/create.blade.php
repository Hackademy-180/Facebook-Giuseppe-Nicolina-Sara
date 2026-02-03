<x-layout>
    <main class="container">
        <section class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    {{-- <span>{{Auth::user()->name}} ha commentato: </span> --}}
                    <form method="POST" action="{{route("comment_store")}}">
                    @csrf
                    
                    <label for="content" class="form-label"></label>
                    <textarea class="form-control" id="content" rows="3" name="content"  ></textarea>
                    @error('content')
                      <p class="text text-danger">
                        {{$message}}
                      </p>
                    @enderror
                    
                    <button class="btn btn-primary mt-3" type="submit">Commenta</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</x-layout>