<?php

ClassLoader::addNamespaces(array
(
    'Sope',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Elements
    'Sope\ContentRoyalsliderBreak' => 'system/modules/royalslider/elements/ContentRoyalsliderBreak.php',
    'Sope\ContentRoyalsliderEnd'   => 'system/modules/royalslider/elements/ContentRoyalsliderEnd.php',
    'Sope\ContentRoyalsliderStart' => 'system/modules/royalslider/elements/ContentRoyalsliderStart.php',
    'Sope\Royalslider' => 'system/modules/royalslider/classes/Royalslider.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_royalslider' => 'system/modules/royalslider/templates',
    'royalslider_start' => 'system/modules/royalslider/templates',
    'royalslider_end' => 'system/modules/royalslider/templates',
    'royalslider_break' => 'system/modules/royalslider/templates',
));
