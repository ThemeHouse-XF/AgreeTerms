<?php

/**
 *
 * @see XenForo_DataWriter_Phrase
 */
class ThemeHouse_AgreeTerms_Extend_XenForo_DataWriter_Phrase extends XFCP_ThemeHouse_AgreeTerms_Extend_XenForo_DataWriter_Phrase
{

    protected function _postSave()
    {
        if ($this->get('title') == 'terms_rules_text') {
            $this->_db->query('UPDATE xf_user_profile SET agree_terms_th = 1');
        }

        parent::_postSave();
    } /* END _postSave */
}