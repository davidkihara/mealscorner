@include('layouts.app')
<div class="container">
  @foreach ($posts as $post)
    <div class="row">
      <div class="card col-md-6">
        <div class="card-header">
          <a href="{{ route('posts.show', ['post'=>$post->id])}}">{{ $post->name }}</a>
          <div class="lead">
            <small><i>posted</i></small>
            <small><i>{{ $post->created_at->diffForHumans() }}</i></small>
          </div>
        </div>

        <!--------------------------Image and Description------------------------------------------------------------------->
        <div class="row">
          <div class="col-md-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset($post->image1) }}"
                    alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset($post->image2) }}"
                    alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset($post->image3) }}"
                    alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset($post->image4) }}"
                    alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset($post->image5) }}"
                    alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset($post->image6) }}"
                    alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <p>{{ $post->description }}</p>
          </div>
        </div><hr>
        {{-- <div class="flip-box ">
          <div class=" flip-box-inner">
            <div class="flip-box-front wrapper">
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="ny.jpg" alt="New York" width="1100" height="500">
              </div>
              </div>
            </div>
          </div>
          <div class="flip-box-back">
            <p>{{ $post->description }}</p>
          </div>
<img src="{{ asset($post->image1) }}" alt="" class="card-img-top">
        <div class="row bottom-card" >
          <div class="col-md-4">
          </div>
          </div>
        </div> --}}
        <!------------------------End Image--------------------------------------------------------------->
        <div class="button-div">
          <a class="btn btn-primary index-btn-like" href="#">Like</a>
          <a class="btn btn-primary index-btn-comments" href="{{ route('posts.show', ['post'=>$post->id])}}"><span>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span></a>
          <a class="btn btn-primary index-btn-recipe" href="{{ route('showrecipe',  ['post'=>$post->id]) }}">Recipe</a>
        </div>
      </div>
    </div>
  @endforeach
  <p>{{ $posts->links() }}</p>
</div>
