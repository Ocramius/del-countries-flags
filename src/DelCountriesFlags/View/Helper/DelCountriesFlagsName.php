<?php
namespace DelCountriesFlags\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class DelCountriesFlagsName extends AbstractHelper implements ServiceManagerAwareInterface
{
	/**
     * $var string template used for view
     */
    protected $viewTemplate;

        /**
     * @var ServiceManager
     */
    protected $serviceManager;
    
	/**
     * __invoke
     *
     * @param string $id //eg GBR, USA etc
     * @access public
     * @return string
     */
    public function __invoke($id = null)
    {
        if($id)
        {
	    	$sm = $this->getServiceManager();
			//need to fetch top lvl ServiceManager
	        $sm = $sm->getServiceLocator();
	        $service = $sm->get('delcountriesflags_service');
	        $country = $service->getCountry($id);
	
	        $vm = new ViewModel(array(
	            'country' => $country,
	        ));
	        $viewfile = $this->viewTemplate;
	        $vm->setTemplate($viewfile);
	
	        return $this->getView()->render($vm);
        }
        else
        {
        	return false;
        }
    }
	
	/**
     * @param string $viewTemplate
     * @return NewUsers
     */
    public function setViewTemplate($viewTemplate)
    {
        $this->viewTemplate = $viewTemplate;
        return $this;
    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Set service manager instance
     *
     * @param ServiceManager $locator
     * @return DelCountriesFlagsName
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}