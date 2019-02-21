@extends('layouts.app')
@section('title') Admin @endsection

@section('css')
<link href="{{ URL::asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection
@section('content')

<?php
//show message from add / edit page
if(isset($_GET['action'])){
  echo '<h3>Post '.$_GET['action'].'.</h3>';
}
?>


<section class="contact-area section_padding_100 mt-100">
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
          <div id="wrapper">
            @include('layouts.menu')
<table id="posts" class="table table-striped table-bordered">
<tr>
  <th>Title</th>
  <th>Date</th>
  <th>Action</th>
</tr>
@foreach ($posts as $key => $post)
  <tr>
  <td>{{$post->title}}</td>
  <td>{{date('jS M Y', strtotime($post->updated_at))}}</td>
   <td>
     <a class="btn btn-info" href="{{route('post.add')}}?id={{$post->id}}&action=edit">Edit</a> |
     <a class="btn btn-danger" href="#" onclick="delpost({{$post->id}},'{{$post->title}}')">Delete</a>
   </td>

  </tr>

@endforeach

</table>

<p><a class="btn btn-success" href="{{route('post.add')}}">Add Post</a></p>

<!-- </div> -->
</div>
</div>
</div>
@endsection

@section('js')
<script src="{{URL::asset('js/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery.dataTables.js')}}"></script>
<script language="JavaScript" type="text/javascript">
function delpost(id, title)
{
  if (confirm("Are you sure you want to delete '" + title + "'"))
  {
    $.ajax({url: "", data: {id: id, type: 'delpost', _token: "{{csrf_token()}}"}, type: "post"})
    .done((res) => {
      if (res.status) {
        window.location.reload()
      } else {
        res.text.map((e) => alert(e))
      }
      console.log(res);
    })
  }
}

$(document).ready(() => {
  $('#posts').DataTable()
})
</script>
@endsection
