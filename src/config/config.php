<?php

$GLOBALS['TL_CTE']['royalslider'] = array
(
    'royalsliderStart' => 'ContentRoyalsliderStart',
    'royalsliderBreak' => 'ContentRoyalsliderBreak',
    'royalsliderEnd' => 'ContentRoyalsliderEnd'
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'royalsliderStart';
$GLOBALS['TL_WRAPPERS']['separator'][] = 'royalsliderBreak';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'royalsliderEnd';