<?php

namespace Sope;

class ContentRoyalsliderBreak extends \Contao\ContentElement
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
        }

        $this->Template->content = \Sope\Royalslider::breakSlider();
    }
}