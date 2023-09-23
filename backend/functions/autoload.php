<?php
$files = glob($_SERVER['DOCUMENT_ROOT'] . '/document_tracker_v2/backend/class/*.php');
foreach ($files as $file) {
    require $file;
}
