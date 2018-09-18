<?php

include 'messageFunction.php';
require __DIR__.'/../config/bootstrap.php';

// messageFunction.php
EditMessage($_POST['id'], $_POST['message'], $em);

header("Location: Sample.php");

