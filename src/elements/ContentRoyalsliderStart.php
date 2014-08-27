<?php

namespace Sope;

class ContentRoyalsliderStart extends \Contao\ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_royalslider';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE === 'BE')
        {
            $this->Template = new \BackendTemplate('be_wildcard');
            $this->Template->title = '### ROYALSLIDER START ###';
            return;
        }

        $arrOptions = \Sope\Royalslider::recordToOptions($this);
        $this->Template->content = \Sope\Royalslider::startSlider($arrOptions, sprintf('royalslider_%s', $this->id));
    }
}