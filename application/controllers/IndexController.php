<?php
class IndexController extends Zend_Controller_Action
{
    public function init()
    {
       $this->initView();
	   $this->view->baseUrl=$this->_request->getBaseUrl();
       if(SessionCheck::sessionCheckSum()===0)
        {
            $this->_redirect('/authentication');
        }else{
            $this->view->user=SessionCheck::sessionCheckSum();
        }
    }
    public function indexAction()
    {
    }
}
