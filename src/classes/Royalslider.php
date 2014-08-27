<?php

namespace Sope;

/**
 * Class Royalslider
 */
class Royalslider
{

    /**
     * @param $objRecord
     * @param string $strTable
     * @param null $arrHandlers
     * @return array
     */
    public static function recordToOptions($objRecord, $strTable = 'tl_content', $arrHandlers = null)
    {
        $arrFields = $GLOBALS['TL_DCA'][$strTable]['fields'];
        if (!isset($arrHandlers))
        {
            $arrHandlers = self::getDefaultTypeConverters();
        }

        $arrFields = array_filter($arrFields, function($arrField) {
            return isset($arrField['property']);
        });

        $arrOptions = array();

        foreach ($arrFields as $strField => $arrField)
        {
            // convert the values into something JSON friendly
            $val = $arrHandlers[$arrField['propertyType']]($objRecord->$strField);
            self::setValueFromPath($arrField['property'], $val, $arrOptions);
        }

        return $arrOptions;
    }

    /**
     * @return array
     */
    public static function getDefaultTypeConverters()
    {
        return array
        (

            'boolean' => function($val)
            {
                return !empty($val);
            },

            'string' => function($val)
            {
                return empty($val) ? null : $val;
            },

            'number' => function($val)
            {
                return floatval($val);
            }

        );
    }

    /**
     * http://stackoverflow.com/a/9628276/1652642
     *
     * @param $strPath
     * @param $val
     * @param $arrTarget
     */
    public static function setValueFromPath($strPath, $val, &$arrTarget)
    {
        $arrLevels = explode('.', $strPath);
        $temp = &$arrTarget;
        foreach($arrLevels as $key) {
            $temp = &$temp[$key];
        }
        $temp = $val;
        unset($temp);
    }

    /**
     * @param $arrOptions
     * @param string $strId
     * @param string $strTemplate
     * @return string
     */
    public static function startSlider($arrOptions, $strId = 'royalslider', $strTemplate = 'royalslider_start')
    {
        $objTemplate = new \FrontendTemplate($strTemplate);
        $objTemplate->options = $arrOptions;
        $objTemplate->id = $strId;
        return $objTemplate->parse();
    }

    /**
     * @param string $strTemplate
     * @return string
     */
    public static function breakSlider($strTemplate = 'royalslider_break')
    {
        $objTemplate = new \FrontendTemplate($strTemplate);
        return $objTemplate->parse();
    }

    /**
     * @param string $strTemplate
     * @return string
     */
    public static function endSlider($strTemplate = 'royalslider_end')
    {
        $objTemplate = new \FrontendTemplate($strTemplate);
        return $objTemplate->parse();
    }

}