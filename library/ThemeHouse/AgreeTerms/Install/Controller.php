<?php

class ThemeHouse_AgreeTerms_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/terms-of-service-and-rules.3027/';

    protected function _getTableChanges()
    {
        return array(
            'xf_user_profile' => array(
                'agree_terms_th' => 'TINYINT(3) NOT NULL DEFAULT 0', /* END 'agree_terms_th' */
            ), /* END 'xf_user_profile' */
        );
    } /* END _getTableChanges */


	protected function _postInstall()
	{
		$addOn = $this->getModelFromCache('XenForo_Model_AddOn')->getAddOnById('YoYo_');
		if ($addOn) {
			$db->query("
				UPDATE xf_user_profile
					SET agree_terms_th=agree_terms_waindigo");
		}
	}
}