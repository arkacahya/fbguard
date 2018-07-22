<?php
//check if the form has been submitted
if(isset($_POST['md5me'])) {
	//MD5 encode the submitted content
	$md5ed = md5($_POST['md5me']);
}
?>

<p>MD5 Value: <strong><?php echo $md5ed;?></strong></p>

<form action="#" method="post">
    <label for="md5me">MD5 Me:</label>
    <input name="md5me" id="md5me" type="text" />
    <input type="submit" value="Create MD5 Hash" />
</form>
