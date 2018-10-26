<?php

include_once('includes/auth.php');

logout();

header("Location: signin.php?logout=success");
exit();
