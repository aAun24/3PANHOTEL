<?php
if(!isset($_SESSION)){
	session_start();
}
session_unset();
session_destroy();
//$url=site_url();
echo "<meta http-equiv='refresh' content='0; URL=http://localhost:4869/3PANHOTEL'>";

?>