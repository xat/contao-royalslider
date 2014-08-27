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
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
            return;
        }

        $arrOptions = \Sope\Royalslider::recordToOptions($this);
        $this->Template->content = \Sope\Royalslider::startSlider($arrOptions);
    }
}