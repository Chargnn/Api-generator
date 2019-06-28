<?php
    header('Content-type: application/json');
    header('Content-Disposition: attachment; filename="json_export.txt"');
?>

{{ $data }}
