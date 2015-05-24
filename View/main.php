<?php require ('header.php'); ?>

<h1>Welcome <?php echo $userName ?>!</h1>
<br>

<form action='../controller/index.php' method='post' enctype= 'multipart/form-data'>
	<input type='file' name='file1'>
	<br>
	<input type='submit' value='upload'>

<?php require ('footer.php'); ?>