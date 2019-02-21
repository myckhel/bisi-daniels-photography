@extends('layouts.app')
@section('title') {{$post->title}} @endsection

@section('css')
@endsection
@section('content')
<section class="blog-area section_padding_100 mt-100">
    <div class="container">
      <div class="row">
        <div class="title col-md-12 text-center">
          <h1 class="text-center"></h1>
        </div>
        <div class="img">
          <img class="img-thumbnail" src="{{$post->feature()}}" alt="">
        </div>
        <div class="article">
          <?php echo $post->content ?>
        </div>

      </div>
    </div>
</section>
@endsection
@section('js')
@endsection
