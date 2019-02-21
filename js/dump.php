<?php
// include_once 'Request.php';
//
// $uri = urldecode(
//     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
// );
// var_dump($uri);
// if ($uri == '/') {
//   return ;
// }
// if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
//     return false;
// }
//
// function to($uri){
//   return '/studio'.$uri;
// }
//
// function route($uri, $cb){
//   $request = $_SERVER['REQUEST_URI'];
//   if (to($uri) == $request) {
//     if (is_callable($cb)) {
//         $returnValue = call_user_func($cb);
//     }
//   } else {
//     require __DIR__ . '/views/404.php';
//   }
//
// }
//
// // $request = $_SERVER['REQUEST_URI'];
// route('/', function(){
//   return require __DIR__ . '/views/home.php';
// });
// }
?>
<?php //require('includes/config.php');
// require('App/Blog.php');
 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">

		<h1>Blog</h1>
		<hr /> -->

		<?php
			// try {
      //   $blog = new Blog($db);
			// 	// $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
			// 	// while($row = $stmt->fetch()){
      //   //
			// 	// 	echo '<div>';
			// 	// 		echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
			// 	// 		echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
			// 	// 		echo '<p>'.$row['postDesc'].'</p>';
			// 	// 		echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';
			// 	// 	echo '</div>';
      //   //
			// 	// }
      //   $rows = $blog->select()->get();
      //   foreach($rows as $row){
      //
			// 		echo '<div>';
			// 			echo '<h1><a href="viewpost.php?id='.$row->postID.'">'.$row->postTitle.'</a></h1>';
			// 			echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row->postDate)).'</p>';
			// 			echo '<p>'.$row->postDesc.'</p>';
			// 			echo '<p><a href="viewpost.php?id='.$row->postID.'">Read More</a></p>';
			// 		echo '</div>';
      //
			// 	}
      //
			// } catch(PDOException $e) {
			//     echo $e->getMessage();
			// }
		?>

	<!-- </div>


</body>
</html> -->
