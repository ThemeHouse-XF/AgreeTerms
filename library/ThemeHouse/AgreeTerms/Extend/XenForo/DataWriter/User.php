<?php

/**
 *
 * @see XenForo_DataWriter_User
 */
class ThemeHouse_AgreeTerms_Extend_XenForo_DataWriter_User extends XFCP_ThemeHouse_AgreeTerms_Extend_XenForo_DataWriter_User
{

    /**
     *
     * @see XenForo_DataWriter_User::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        $fields['xf_user_profile']['agree_terms_th'] = array(
            'type' => self::TYPE_BOOLEAN,
            'default' => 0
        );
        return $fields;
    } /* END _getFields */
}