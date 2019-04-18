@include('layouts.app')
<div class="container">
    <div class="card show_card">
      <div class="card-header">
        <p>{{ $post->name }}</p>
        <div class="lead">
          <small><i>posted</i></small>
          <small><i>{{ $post->created_at->diffForHumans() }}</i></small>
        </div>
      </div>
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
                  alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset($post->image5) }}"
                  alt="Fifth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset($post->image6) }}"
                  alt="Sixth slide">
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
      </div>
      <hr>
      <br>
      <div class="">
        <div class="comments-div">
          <h3>Comments</h3>
          <span>{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span>

          @if (Auth::check())
            {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
            <p>{{ Form::textarea('body', old('body')) }}</p>
            {{ Form::hidden('post_id', $post->id) }}
            <p>{{ Form::submit('Send') }}</p>
          {{ Form::close() }}
          @endif
          @forelse ($post->comments as $comment)
            <p>{{ $comment->user->name }} {{$comment->created_at}}</p>
            <p>{{ $comment->body }}</p>
            <hr>
          @empty
            <p>This post has no comments</p>
          @endforelse
        </div>
      </div>
    </div>
</div>
