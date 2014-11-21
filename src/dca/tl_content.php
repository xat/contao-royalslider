<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['royalsliderStart'] = '{type_legend},type;{basic_legend},royalCSS,royalSkin,royalJqEasing;royalAutoScaleSlider,royalAutoScaleSliderWidth,royalAutoScaleSliderHeight,royalImageScaleMode;royalImageAlignCenter,royalImageScalePadding,royalControlNavigation,royalArrowsNav,royalArrowsNavAutoHide,royalArrowsNavHideOnTouch,royalImgWidth,royalImgHeight,royalSlidesSpacing,royalStartSlideId,royalLoop,royalLoopRewind,royalRandomizeSlides,royalNumImagesToPreload,royalUsePreloader,royalSlidesOrientation,royalTransitionType,royalTransitionSpeed,royalEaseInOut,royalEaseOut,royalControlsInside,royalNavigateByClick,royalSliderDrag,royalSliderTouch,royalKeyboardNavEnabled,royalFadeinLoadedSlide,royalAllowCSS3,royalGlobalCaption,royalAddActiveClass,royalMinSlideOffset,royalAutoHeight,royalSlides;{thumbs_legend:hide},royalThumbTouch,royalThumbOrientation,royalThumbArrows,royalThumbSpacing,royalThumbArrowsAutoHide,royalThumbAutoCenter,royalThumbTransitionSpeed,royalThumbFitInViewport,royalThumbFirstMargin,royalThumbArrowLeft,royalThumbArrowRight,royalThumbAppendSpan;{fullscreen_legend:hide},royalFullscreenEnabled,royalFullscreenKeyboardNav,royalFullscreenButtonFS,royalFullscreenNativeFS;{deeplinking_legend:hide},royalDeepEnabled,royalDeepChange,royalDeepPrefix;{autoplay_legend:hide},royalAutoplayEnabled,royalAutoplayStopAtAction,royalAutoplayPauseOnHover,royalAutoplayDelay;{video_legend:hide},royalVideoAutoHideArrows,royalVideoAutoHideControlNav,royalVideoAutoHideBlocks,royalVideoYouTubeCode,royalVideoVimeoCode;{block_legend:hide},royalBlockFadeEffect,royalBlockMoveEffect,royalBlockMoveOffset,royalBlockSpeed,royalBlockEasing,royalBlockDelay;{visiblenearby_legend:hide},royalVisibleEnabled,royalVisibleCenterArea,royalVisibleCenter,royalVisibleNavigateByCenterClick,royalVisibleBreakpoint,royalVisibleBreakpointCenterArea;royalAdditionalOptions;{template_legend:hide},customTpl;{protected_legend:hide}';

$GLOBALS['TL_DCA']['tl_content']['fields']['royalCSS'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalCSS'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'includeCSS',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSkin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSkin'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('default', 'default-inverted', 'minimal-white', 'universal'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(64) NOT NULL default 'fit-if-smaller'",
    'property'                => 'useSkin',
    'propertyType'            => 'string',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalJqEasing'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalJqEasing'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'includeJqEasing',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoScaleSlider'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoScaleSlider'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'autoScaleSlider',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoScaleSliderWidth'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoScaleSliderWidth'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => '800',
    'eval'                    => array('tl_class'=>'w50 clr', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default ''",
    'property'                => 'autoScaleSliderWidth',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoScaleSliderHeight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoScaleSliderHeight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '400'",
    'property'                => 'autoScaleSliderHeight',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalImageScaleMode'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalImageScaleMode'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('none', 'fill', 'fit', 'fit-if-smaller'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'fit-if-smaller'",
    'property'                => 'imageScaleMode',
    'propertyType'            => 'string',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalImageAlignCenter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalImageAlignCenter'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'imageAlignCenter',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalImageScalePadding'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalImageScalePadding'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default '4'",
    'property'                => 'imageScalePadding',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalControlNavigation'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalControlNavigation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('none', 'bullets', 'thumbnails', 'tabs'),
    'eval'                    => array('tl_class'=>''),
    'sql'                     => "varchar(64) NOT NULL default 'bullets'",
    'property'                => 'controlNavigation',
    'propertyType'            => 'string',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalArrowsNav'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalArrowsNav'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'arrowsNav',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalArrowsNavAutoHide'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalArrowsNavAutoHide'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'arrowsNavAutoHide',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalArrowsNavHideOnTouch'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalArrowsNavHideOnTouch'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'arrowsNavHideOnTouch',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalImgWidth'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalImgWidth'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default ''",
    'property'                => 'imgWidth',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalImgHeight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalImgHeight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default ''",
    'property'                => 'imgHeight',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSlidesSpacing'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSlidesSpacing'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '8'",
    'property'                => 'slidesSpacing',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalStartSlideId'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalStartSlideId'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '0'",
    'property'                => 'startSlideId',
    'propertyType'            => 'number',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalLoop'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalLoop'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'loop',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalLoopRewind'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalLoopRewind'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'loopRewind',
    'propertyType'            => 'boolean',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalRandomizeSlides'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalRandomizeSlides'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'randomizeSlides',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalNumImagesToPreload'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalNumImagesToPreload'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '4'",
    'property'                => 'numImagesToPreload',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalUsePreloader'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalUsePreloader'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'usePreloader',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSlidesOrientation'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSlidesOrientation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('vertical', 'horizontal'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'horizontal'",
    'property'                => 'slidesOrientation',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalTransitionType'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalTransitionType'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('move', 'fade'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'move'",
    'property'                => 'transitionType',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalTransitionSpeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalTransitionSpeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '600'",
    'property'                => 'transitionSpeed',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalEaseInOut'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalEaseInOut'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'easeInOutSine'",
    'property'                => 'easeInOut',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalEaseOut'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalEaseOut'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'easeOutSine'",
    'property'                => 'easeOut',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalControlsInside'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalControlsInside'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'controlsInside',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalNavigateByClick'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalNavigateByClick'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'navigateByClick',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSliderDrag'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSliderDrag'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'sliderDrag',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSliderTouch'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSliderTouch'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'sliderTouch',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalKeyboardNavEnabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalKeyboardNavEnabled'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'keyboardNavEnabled',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalFadeinLoadedSlide'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalFadeinLoadedSlide'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'fadeinLoadedSlide',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAllowCSS3'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAllowCSS3'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'allowCSS3',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalGlobalCaption'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalGlobalCaption'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'globalCaption',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAddActiveClass'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAddActiveClass'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'addActiveClass',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalMinSlideOffset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalMinSlideOffset'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '10'",
    'property'                => 'minSlideOffset',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoHeight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoHeight'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'autoHeight',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalSlides'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalSlides'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(1024) NOT NULL default ''",
    'property'                => 'slides',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbDrag'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbDrag'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.drag',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbTouch'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbTouch'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.touch',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbOrientation'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbOrientation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('horizontal', 'vertical'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'horizontal'",
    'property'                => 'thumbs.orientation',
    'propertyType'            => 'string',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbArrows'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbArrows'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.arrows',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbSpacing'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbSpacing'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '4'",
    'property'                => 'thumbs.spacing',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbArrowsAutoHide'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbArrowsAutoHide'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'thumbs.arrowsAutoHide',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbAutoCenter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbAutoCenter'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.autoCenter',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbTransitionSpeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbTransitionSpeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '600'",
    'property'                => 'thumbs.transitionSpeed',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbFitInViewport'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbFitInViewport'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.fitInViewport',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbFirstMargin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbFirstMargin'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'thumbs.firstMargin',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbArrowLeft'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbArrowLeft'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
    'property'                => 'thumbs.arrowLeft',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbArrowRight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbArrowRight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
    'property'                => 'thumbs.arrowRight',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalThumbAppendSpan'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalThumbAppendSpan'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'thumbs.appendSpan',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalFullscreenEnabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalFullscreenEnabled'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'fullscreen.enabled',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalFullscreenKeyboardNav'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalFullscreenKeyboardNav'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'fullscreen.keyboardNav',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalFullscreenButtonFS'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalFullscreenButtonFS'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'fullscreen.buttonFS',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalFullscreenNativeFS'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalFullscreenNativeFS'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'fullscreen.nativeFS',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalDeepEnabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalDeepEnabled'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'deeplinking.enabled',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalDeepChange'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalDeepChange'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'deeplinking.change',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalDeepPrefix'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalDeepPrefix'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
    'property'                => 'deeplinking.prefix',
    'propertyType'            => 'string'
);


$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoplayEnabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoplayEnabled'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'autoplay.enabled',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoplayStopAtAction'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoplayStopAtAction'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'autoplay.stopAtAction',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoplayPauseOnHover'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoplayPauseOnHover'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'autoplay.pauseOnHover',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAutoplayDelay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAutoplayDelay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '3000'",
    'property'                => 'autoplay.delay',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVideoAutoHideArrows'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVideoAutoHideArrows'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'video.autoHideArrows',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVideoAutoHideControlNav'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVideoAutoHideControlNav'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'video.autoHideControlNav',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVideoAutoHideBlocks'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVideoAutoHideBlocks'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'video.autoHideBlocks',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVideoYouTubeCode'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVideoYouTubeCode'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(1024) NOT NULL default ''",
    'property'                => 'video.youTubeCode',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVideoVimeoCode'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVideoVimeoCode'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(1024) NOT NULL default ''",
    'property'                => 'video.vimeoCode',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockFadeEffect'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockFadeEffect'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'block.fadeEffect',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockMoveEffect'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockMoveEffect'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('left', 'right', 'top', 'bottom', 'none'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'top'",
    'property'                => 'block.moveEffect',
    'propertyType'            => 'string',
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockMoveOffset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockMoveOffset'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '20'",
    'property'                => 'block.moveOffset',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockSpeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockSpeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '400'",
    'property'                => 'block.speed',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockEasing'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockEasing'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default 'easeOutSine'",
    'property'                => 'block.easing',
    'propertyType'            => 'string'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalBlockDelay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalBlockDelay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '200'",
    'property'                => 'block.delay',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleEnabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleEnabled'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''",
    'property'                => 'visibleNearby.enabled',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleCenterArea'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleCenterArea'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default '0.6'",
    'property'                => 'visibleNearby.centerArea',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleCenter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleCenter'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'visibleNearby.center',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleNavigateByCenterClick'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleNavigateByCenterClick'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default '1'",
    'property'                => 'visibleNearby.navigateByCenterClick',
    'propertyType'            => 'boolean'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleBreakpoint'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleBreakpoint'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'rgxp'=>'digit'),
    'sql'                     => "varchar(64) NOT NULL default '0'",
    'property'                => 'visibleNearby.breakpoint',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalVisibleBreakpointCenterArea'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalVisibleBreakpointCenterArea'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default '0.8'",
    'property'                => 'visibleNearby.breakpointCenterArea',
    'propertyType'            => 'number'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['royalAdditionalOptions'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['royalAdditionalOptions'],
    'exclude'                 => true,
    'inputType'               => 'multiColumnWizard',
    'sql'                     => "mediumtext NULL",
    'eval'                    => array
    (
        'columnFields' => array
        (
            'option_key' => array
            (
                'label'                 => &$GLOBALS['TL_LANG']['tl_content']['option_key'],
                'exclude'               => true,
                'inputType'             => 'text',
                'eval'                  => array('style'=>'width:150px'),
            ),
            'option_value' => array
            (
                'label'                 => &$GLOBALS['TL_LANG']['tl_content']['option_value'],
                'exclude'               => true,
                'inputType'             => 'text',
                'eval'                  => array('style'=>'width:150px'),
            ),
            'option_type' => array
            (
                'label'                 => &$GLOBALS['TL_LANG']['tl_content']['option_type'],
                'exclude'               => true,
                'inputType'             => 'select',
                'options'               => array('number', 'boolean', 'string'),
                'eval'                  => array('style'=>'width:150px'),
            ),
        )
    )
);