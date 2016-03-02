<?php


App::uses('Controller', 'Controller');


class AppController extends Controller {
	public $uses = array('App', 'News', 'Review');

	public $components = array('DebugKit.Toolbar', 'Menu', 'Session', 'Auth' => array(
            'loginRedirect' => '/',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError' => 'Вы не имеете прав доступа к данной странице'
        ));

	public $helpers = array('Html', 'Form', 'Session');

	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
		$admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
		if(!$admin) $this->Auth->allow();
		if($admin){
			$this->layout = 'default';
		}else{
			if($this->request->params['action']=='home'){
				$this->layout = 'index';
			}else{
				$this->layout = 'page';
			}

		}
		$news = $this->_getNews();
		$reviews = $this->_getReviews();
		$clients = $this->_getClients();
		$this->set(compact('admin', 'news', 'reviews', 'clients'));

	}

	protected function _getNews(){
		$news = $this->News->find('all', array(
			'order' => array('date' => 'desc'),
			'limit' => 9
			));
		return $news;
	}

	protected function _getReviews(){
		$reviews = $this->Review->find('all', array(
			'conditions' => array('active' => '1')
		));
		return $reviews;
	}

	protected function _getClients(){
		$clients = $this->Client->find('all');
		return $clients;
	}
}
