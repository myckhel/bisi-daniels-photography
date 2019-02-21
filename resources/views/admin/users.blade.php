@extends('layouts.app')
@section('title') Users @endsection

@section('css')
<link href="{{ URL::asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection
@section('content')

<section class="contact-area section_padding_100 mt-100">
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
          <div id="wrapper">
            @include('layouts.menu')
<?php
//include config
// require_once('../includes/config.php');

// //if not logged in redirect to login page
// if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM blog_members WHERE memberID = :memberID') ;
		$stmt->execute(array(':memberID' => $_GET['deluser']));

		header('Location: users.php?action=deleted');
		exit;

	}
}

?>


	<?php
	//show message from add / edit page
	if(isset($_GET['action'])){
		echo '<h3>User '.$_GET['action'].'.</h3>';
	}
	?>

	<table  id="posts" class="table table-striped table-bordered">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Action</th>
	</tr>

			@foreach($users as $row)

				<tr>
				<td>{{$row->name}}</td>
<td>{{$row->email}}</td>

				<td>
					<!-- <a href="edit-user.php?id=<?php echo $row->id;?>">Edit</a> -->
					<?php if($row->id != 1){?>
						| <a  class="btn btn-danger"  href="javascript:deluser('<?php echo $row->id;?>','<?php echo $row->name;?>')">Delete</a>
					<?php } ?>
				</td>
				@endforeach

 </tr>

	</table>

	<p><a class="btn btn-success"  href="{{route('register')}}">Add User</a></p>

</div>
@endsection

@section('js')
<script src="{{URL::asset('js/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery.dataTables.js')}}"></script>
<script language="JavaScript" type="text/javascript">
function deluser(id, title)
{
	if (confirm("Are you sure you want to delete '" + title + "'"))
	{
		window.location.href = 'users.php?deluser=' + id;
	}
}

$(document).ready(() => {
  $('#users').DataTable()
})
</script>
@endsection
