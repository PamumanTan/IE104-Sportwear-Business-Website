<?php
function convertDateFormat($dateString)
{
    $dateTime = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
    if ($dateTime !== false) {
        return $dateTime->format('d/m/Y');
    }
    return null; // Invalid date format
}
