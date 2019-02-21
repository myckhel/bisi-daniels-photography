@extends('layouts.app')
@section('title') Create Post @endsection

@section('css')
<!-- <link rel="stylesheet" href="{{URL::asset('css/skin.min.css')}}"> -->
<link rel="stylesheet" href="{{URL::asset('css/sweetalert.css')}}">
<!-- <link rel="stylesheet" href="{{URL::asset('css/content.min.css')}}"> -->
@endsection

@section('content')
  <section class="contact-area section_padding_100 mt-100">
      <div class="container">
          <!-- <div class="row justify-content-center"> -->
            <div id="wrapper">
              @include('layouts.menu')

	<p><a href="./">Blog Admin Index</a></p>

	<h2>Add Post</h2>

	<form action='' method='post' id="add" enctype="multipart/form-data">
    @csrf
    @if(isset($post))
    <input type='text' name='action' hidden value="edit"></p>
    <input id="upload" type='text' name='upload' hidden></p>
    <input type='text' name='id'hidden value="{{$post->id}}"></p>
    @endif
		<p><label>Title</label><br />
		<input type='text' name='title' value="{{isset($post) ? $post->title : ''}}"></p>

    <p><label>Feature Image</label><br />
		<input type='file' accept="image/*" name='feature' value="{{isset($post) ? $post->feature : ''}}"></p>
    <div class="image" id="img-show-container" style="display: none; width:200; height:200">
      <div class="fa fa-remove blue delete" onclick="resetImgUpl()"></div>
      <canvas id="img-show" class="img-thumbnail img-response"></canvas>
    </div>

		<p><label>Description</label><br />
		<textarea name='description' cols='60' value="" rows='10'>{{isset($post) ? $post->description : ''}}</textarea></p>

		<p><label>Content</label><br />
		<textarea name='content' cols='60' value="" rows='10'>{{isset($post) ? $post->content : ''}}</textarea></p>

		<p><input class="btn-success btn" type='submit' name='submit' value="{{isset($post) ? 'update' : 'Submit'}}" id="submit"></p>

	</form>

</div>
@endsection

@section('js')
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('js/tinymce.min.js')}}"></script>
<script>
// var upload = false
var blobs;
function uploadImg(id) {
  if (!id) {
    return ;
  }
  var input = document.querySelector('input[type=file]');
  var file = input.files[0];
  var form = new FormData(),
      xhr = new XMLHttpRequest();
	// form.append("filename", imageData);
	// console.log(file);
	console.log(blobs);
  form.append('id', id);
	form.append('feature', blobs);
  // form.append('photo', file);
  form.append('_token', "{{csrf_token()}}");
  xhr.open('post', "{{route('upload.img')}}", true);
  xhr.send(form);
}
$(document).ready(() => {

  var input = document.querySelector('input[type=file]'); // see Example 4

  input.onchange = function () {
    var file = input.files[0];
    $('#upload').val(true)
    blobs = file;

    // upload(file);
    drawOnCanvas(file);

  }


  $("#add").submit((e) => {
    e.preventDefault()
    let data = $("#add").serializeArray()
    // if (upload) {
    //   data.upload = true
    // }
    $.ajax({url: "", data, type: "POST"})
    .done((res) => {
      if (res.status) {
        // c;er form
        $("#add").trigger('reset')
        uploadImg(res.id)
        alert('Added', 'OK')
        // swal('Success!', 'Added', 'Success')
      } else {
        res.text.forEach((v) => alert(v) )
        // show error
      }
      // upload = false
      console.log(res);
    })
  })
  tinymce.init({
      selector: "textarea",
      plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  })//.get('description').setContent('poooooo', {format: raw});

})

function drawOnCanvas(file) {
  var reader = new FileReader();

  reader.onload = function (e) {
    var dataURL = e.target.result,
        c = document.querySelector('#img-show'), // see Example 4
        ctx = c.getContext('2d'),
        img = new Image();

        $('#img-show-container').show()

    img.onload = function() {
      c.width = img.width;
      c.height = img.height;
      ctx.drawImage(img, 0, 0);
    };

    img.src = dataURL;
  };

  reader.readAsDataURL(file);
  // data = new FormData() //$('#register-form').serializeArray()
  // data.append($('#register-form').serializeArray())
  // // data.photo = input.files[0];
  // console.log(data);
}

function resetImgUpl(){
  $('#img-input').val(null)
  $('#img-show-container').hide()
}
</script>
@endsection
