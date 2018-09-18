<?php
include 'MessageFunction.php';

require __DIR__.'/../config/Bootstrap.php';

// messageFunction.php
EditMessage($_POST['id'], $_POST['message'], $em);

header("Location: Sample.php");

