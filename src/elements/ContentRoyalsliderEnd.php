<?php

namespace Sope;

class ContentRoyalsliderEnd extends \Contao\ContentElement
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
            $this->Template->title = '### ROYALSLIDER END ###';
            return;
        }

        $this->Template->content = \Sope\Royalslider::endSlider();
    }
}