<?php
if(!isset($_SESSION)){
	session_start();
}
session_unset();
session_destroy();
//$url=site_url();
echo "<meta http-equiv='refresh' content='0; URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project'>";

?>