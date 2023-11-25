<?php 
    function addIfActive($name) {
        $time = $GLOBALS['$time'];
        if ($time == $name) {
            return 'active';
        }
        return '';
    }
?>