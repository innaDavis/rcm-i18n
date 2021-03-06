<?php

namespace RcmI18n\Factory;

use RcmI18n\ViewHelper\ParamTranslate;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ViewHelperParamTranslatorFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $viewServiceManager
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $viewServiceManager)
    {
        $serviceLocator = $viewServiceManager->getServiceLocator();

        $paramTranslator = $serviceLocator->get(
            'RcmI18n\Service\ParameterizeTranslator'
        );

        return new ParamTranslate($paramTranslator);
    }
}
