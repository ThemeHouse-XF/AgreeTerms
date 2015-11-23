<?php

/**
 *
 * @see XenForo_ControllerPublic_Account
 */
class ThemeHouse_AgreeTerms_Extend_XenForo_ControllerPublic_Account extends XFCP_ThemeHouse_AgreeTerms_Extend_XenForo_ControllerPublic_Account
{

    /**
     * Confirm agreement to revised set of terms and conditions on the site.
     */
    public function actionTerms()
    {
        $agree = $this->_input->filterSingle('agree', XenForo_Input::UINT);

        if ($this->isConfirmedPost() && $agree) {
            $userId = XenForo_Visitor::getUserId();

            $dw = XenForo_DataWriter::create('XenForo_DataWriter_User');
            $dw->setExistingData($userId);
            $dw->set('agree_terms_th', 0);
            $dw->save();

            return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
                $this->getDynamicRedirect(false, true));
        }

        $viewParams = array(
            'agree_to_terms' => true,
            'tosUrl' => XenForo_Dependencies_Public::getTosUrl()
        );

        return $this->_getWrapper('account', 'terms',
            $this->responseView('XenForo_ViewPublic_Account_Terms', 'th_account_terms_agreetermsofserv',
                $viewParams));
    } /* END actionTerms */
}