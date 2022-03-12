<?php
for ($i=0; $i<count($_FILES["file"]["name"]); $i++){
	move_uploaded_file($_FILES["file"]["tmp_name"][$i], $_FILES["file"]["name"][$i]);
}
?>
