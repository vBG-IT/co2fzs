<?php
session_destroy();
header("Location: ?sec=logout");
exit();
?>
