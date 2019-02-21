@extends('layouts.app')
@section('title') Blog @endsection

@section('css')
@endsection
@section('content')

<!-- Blog Area Start -->
<section class="blog-area section_padding_100 mt-100">
    <div class="container">
        <div id="blog-container" class="row justify-content-center">

        </div>
        <div class="message card bg-warning text-center" style="display: none">
          <p>No More Post</p>
        </div>
        <div id="load-more" class="card">
          <button class="btn studio-btn"><img src="img/core-img/logo-icon.png" alt=""> Load More</button>
        </div>
        <!-- Pagination -->
        <!-- <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation" class="pagination-area mb-100">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                        <li class="page-item"><a class="page-link" href="#">02.</a></li>
                        <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        <li class="page-item"><a class="page-link" href="#">04.</a></li>
                    </ul>
                </nav>
            </div>
        </div> -->
    </div>
</section>
<!-- Blog Area End -->

@endsection
@section('js')
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
<script>
$(document).ready( () => {
  // Start with first post.
  let counter = 0;

  // Load posts 20 at a time.
  const quantity = 20;
  // console.log($('#contact-form'));
  const load = () => {
    // Set start and end post numbers, and update counter.
    const start = counter;
    const end = quantity//start + quantity - 1;
    counter = start + quantity - 1//end + 1;
    let data = {'start': start, 'end': end}
    url = "{{route('post.get')}}"

    $.ajax({url, data})
    .done( (res) => {
      if (res.length > 0) {
        res.forEach((v) => {
          $('#blog-container').append(postTemplate(v));
        })
      } else {
        $('.message').show()
        $('#load-more').hide()
      }

    })
    .fail( (e) => {
      console.log(e);
      swal('Oooops!', 'Internal Server Error', 'error')
    })
  }

  //
  load()

  $('#load-more').click(() => load())

  // If scrolled to bottom, load the next 20 posts.
  // window.onscroll = () => {
  //   if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
  //       load();
  //   }
  // }
})
var postTemplate = (data) => `
  <div class="col-10">
      <div class="single-blog-area text-center mb-100 wow fadeInUpBig" data-wow-delay="100ms" data-wow-duration="1s">
          <div class="blog-thumbnail mb-100">
              <img src="${data.feature === null ? '{{URL::asset("img/blog_posts/default.jpg")}}' : '{{URL::asset("img/blog_posts")}}/'+data.feature}" alt="">
          </div>
          <div class="blog-content">
              <span></span>
              <h2>${data.title}</h2>
              <a href="#" class="post-date">${data.updated_at}</a>
              <a href="#" class="post-author">Bisi Daniels</a>
              <p>${data.description}</p>
              <a href="{{route('post.view')}}?id=${data.id}" class="btn studio-btn"><img src="img/core-img/logo-icon.png" alt=""> Read More</a>
          </div>
      </div>
  </div>
  `
</script>
@endsection
