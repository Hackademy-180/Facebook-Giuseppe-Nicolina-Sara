<div class="card mt-5">
  <img src="{{Storage::url($face->img)}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    
    <h4 class="card-title text-center">{{$face->title}}</h4>
    <p class="card-text">{{$face->content}}</p>
      <p class="card-text">{{$face->mood}}</p>
    <div class="d-flex mt-3 align-items-center justify-content-center gap-3">
      <a href="#" class="btn"><i class="fa-regular fa-thumbs-up fa-1x"></i> Mi piace</a>
      <a href="{{route('post_detail', compact('face'))}}" class="btn"><i class="fa-regular fa-comment"></i> Commenta</a>
      <a href="#" class="btn"><i class="fa-solid fa-share-nodes"></i> Condividi</a>
    </div>
  </div>
</div>