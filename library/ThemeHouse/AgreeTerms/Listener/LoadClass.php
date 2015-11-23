<?php

class ThemeHouse_AgreeTerms_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_AgreeTerms' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Account'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_User',
                    'XenForo_DataWriter_Phrase'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_AgreeTerms' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_AgreeTerms_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_AgreeTerms_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}