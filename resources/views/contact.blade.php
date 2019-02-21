@extends('layouts.app')
@section('title') Contact @endsection

@section('css')

@endsection
@section('content')
    <section class="contact-area section_padding_100 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="contact-heading-text text-center mb-100">
                        <span></span>
                        <h2>Please get in touch</h2>
                        <p>we'd love to hear from you.
                        please feel free to reach out to us onour mobile line,e-mail or any of our social media platforms.
                        we look forward to hearing from you. </p>
                    </div>
                </div>
                <!-- Contact Form Area -->
                <div class="col-10">
                    <div class="contact-form-area">
                        <form id="contact-form" action="" method="post">
                          @csrf()
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn studio-btn mt-3"><img src="img/core-img/logo-icon.png" alt=""> Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Follow Me Instagram Area Start -->
    <section class="follow-me-instagram-area">
        <div class="container">
            <div class="row">
                <div class="col-11 ml-auto">
                    <div class="follow-me-title">
                        <h5>Follow me @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds Area -->
        <div class="instagram-feeds-area owl-carousel">
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i1.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i2.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i3.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i4.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i5.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i6.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="single-instagram-feeds">
                <img src="img/bg-img/i7.jpg" alt="">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!-- Follow Me Instagram Area End -->




@endsection
@section('js')
<!-- sweet alert -->
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
<!-- user script -->
<script src="{{URL::asset('js/script.js')}}"></script>
<script>
$(document).ready( () => {
  console.log($('#contact-form'));
  $('#contact-form').on('submit', function (e) {
    e.preventDefault()
    console.log(this);
    console.log('in');
    data = $('#contact-form').serializeArray()
    // url = "mail.php"
    url = "{{route('mail.send')}}"
    $.ajax({url, data, type: 'POST'})
    .done( (res) => {
      console.log(res);
      if (res.status) {
        swal('Success!', res.text, 'Success')
      } else {
        swal('Oooops!', res.text, 'error')
      }
    })
    .fail( (e) => {
      console.log(e);
      swal('Oooops!', 'Internal Server Error', 'error')
    })
  })
})
</script>
@endsection
