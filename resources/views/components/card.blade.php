<div class="card">
  <img src="{{Storage::url($face->img)}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h4 class="card-title text-center">{{$face->title}}</h4>
    <p class="card-text">{{$face->content}}</p>
      <p class="card-text">{{$face->mood}}</p>
    <div class="d-flex mt-3 align-items-center justify-content-center">
      <a href="#" class="btn"><i class="fa-brands fa-searchengin fa-2x"></i></a>

         
          <button class="trash" type="submit"><i class="fa-regular fa-trash-can fa-2x text-danger"></i></button>
      
     
    </div>
  </div>
</div>