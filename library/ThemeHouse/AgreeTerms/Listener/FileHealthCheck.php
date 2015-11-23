<?php

class ThemeHouse_AgreeTerms_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/AgreeTerms/Extend/XenForo/ControllerPublic/Account.php' => '6e3f027fe08e2ed984c7d008b2742676',
                'library/ThemeHouse/AgreeTerms/Extend/XenForo/DataWriter/Phrase.php' => '4ae0b116d9c4bc1b08777e3299727b9e',
                'library/ThemeHouse/AgreeTerms/Extend/XenForo/DataWriter/User.php' => 'dcab100fbe478113494b19cbddc18526',
                'library/ThemeHouse/AgreeTerms/Install/Controller.php' => '84c0823152f865b06aab8ac5f25aa0e0',
                'library/ThemeHouse/AgreeTerms/Listener/ControllerPreDispatch.php' => '792ae44c82a797e874ff713422ca4fe6',
                'library/ThemeHouse/AgreeTerms/Listener/LoadClass.php' => '7833127d6517d6a58d0c204030412cc1',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}