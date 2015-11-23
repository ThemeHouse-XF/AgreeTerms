<?php

class ThemeHouse_AgreeTerms_Listener_ControllerPreDispatch extends ThemeHouse_Listener_ControllerPreDispatch
{

    public static $redirectToTerms = true;

    public static function controllerPreDispatch(XenForo_Controller $controller, $action)
    {
        $controllerPreDispatch = new ThemeHouse_AgreeTerms_Listener_ControllerPreDispatch($controller, $action);
        $controllerPreDispatch->run();

        $visitor = XenForo_Visitor::getInstance();

        if (empty($visitor['agree_terms_th'])) {
            self::$redirectToTerms = false;
        }

        if ($controller instanceof XenForo_ControllerPublic_Account && strtolower($action) == 'terms') {
            self::$redirectToTerms = false;
        }

        if (self::$redirectToTerms && $controller instanceof XenForo_ControllerPublic_Abstract) {
            self::$redirectToTerms = false;
            $controller->getRouteMatch()->setSections('account');
            throw new XenForo_ControllerResponse_Exception(
                $controller->responseReroute('XenForo_ControllerPublic_Account', 'terms'));
        }
    } /* END controllerPreDispatch */
}