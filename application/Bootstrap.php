<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
    protected  function _initSession()
    {
        Zend_Session::start();
        
    }
    protected function _initPlugins() {
        $fc = Zend_Controller_Front::getInstance();
        //$fc->registerPlugin(new Core_Plugin_AccessHandler());
        $fc->registerPlugin(new Application_Plugin_Navigation());
        //$fc->registerPlugin(new Core_Plugin_Auth());
    }
    protected function _initDoctype() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
    }

    protected function _initLayoutHtml() {
        $view = $this->getResource('view');
        $view->headMeta()->setCharset('UTF-8');
        
        $view->headLink()->appendStylesheet('/css/bootstrap.min.css');
        $view->headLink()->appendStylesheet('/css/bootstrap-theme.min.css');
        $view->headLink()->appendStylesheet('/css/typeahead.css');
        $view->headLink()->appendStylesheet('/css/jquery.dataTables.min.css');
        $view->headLink()->appendStylesheet('/css/jquery.dataTables_themeroller.min.css');
        $view->headLink()->appendStylesheet('/css/dataTables.bootstrap.css');
        $view->headLink()->appendStylesheet('/css/main.css');
        

        $view->headScript()->appendFile('/js/jquery.js');
        $view->headScript()->appendFile('/js/bootstrap.min.js');
        $view->headScript()->appendFile('/js/typeahead.bundle.js');
        $view->headScript()->appendFile('/js/jquery.dataTables.min.js');
        $view->headScript()->appendFile('/js/dataTables.bootstrap.js');
        $view->headScript()->appendFile('/js/main.js');
        
    }

    protected function _initZFDebug() {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace('ZFDebug');

        $options = array(
            'plugins' => array('Variables',
                'File' => array('base_path' => APPLICATION_PATH),
                'Memory',
                'Time',
                'Registry',
                'Exception',
                'Database')
        );

        # Instantiate the database adapter and setup the plugin.
        # Alternatively just add the plugin like above and rely on the autodiscovery feature.
        if ($this->hasPluginResource('db')) {
            $this->bootstrap('db');
            $db = $this->getPluginResource('db')->getDbAdapter();
            $options['plugins']['Database']['adapter'] = $db;
        }

        # Setup the cache plugin
        if ($this->hasPluginResource('cache')) {
            $this->bootstrap('cache');
            $cache = $this - getPluginResource('cache')->getDbAdapter();
            $options['plugins']['Cache']['backend'] = $cache->getBackend();
        }

        $debug = new ZFDebug_Controller_Plugin_Debug($options);

        $this->bootstrap('frontController');
        $frontController = $this->getResource('frontController');
        $frontController->registerPlugin($debug);
    }
    


}
