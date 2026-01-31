<div class="card w-75 mt-5">
  <img src="{{Storage::url($face->img)}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h4 class="card-title text-center">{{$face->title}}</h4>
    <p class="card-text">{{$face->content}}</p>
    <p class="card-text">{{$face->mood}}</p>
     
    <span>{{ $face->created_at }}</span>
    <div class="d-flex mt-3 align-items-center justify-content-center gap-3">
      <a href="#" class="btn"><i class="fa-regular fa-thumbs-up fa-1x"></i> Mi piace</a>
      <a href="{{route('post_detail', compact('face'))}}" class="btn"><i class="fa-regular fa-comment"></i> Commenta</a>
      <a href="#" class="btn"><i class="fa-solid fa-share-nodes"></i> Condividi</a>
      <a href="{{route('comment_detail')}}" class="btn"><i class="fa-solid fa-align-justify"></i> Tutti i commenti</a>
    </div>
  </div>
</div>