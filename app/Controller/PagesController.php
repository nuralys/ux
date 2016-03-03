<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Page', 'News', 'Review', 'Client', 'Slider');

	public function home(){
		$news = $this->News->find('all', array(
			'limit' => 4,
			'order' => array('date' => 'desc')
		));
		
		$clients = $this->Client->find('all');
		$sliders = $this->Slider->find('all', array(
			'order' => array('id' => 'desc')
		));
		
		$this->layout = 'index';
		$title_for_layout = 'Usability Lab';
		$this->set(compact('news', 'title_for_layout', 'clients', 'sliders'));
	}

	public function admin_index(){
		$data = $this->Page->find('all');
		$title_for_layout = 'Pages';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function index($page_alias = null){
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$page = $this->Page->findByAlias($page_alias);
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}
		$news = $this->News->find('all',array(
			'limit' => 4,
			'order' => array('created' => 'desc')
			));
		$title_for_layout = $page['Page']['title'];
		$reviews = $this->Review->find('all');
		$clients = $this->Client->find('all');
		
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'news', 'reviews', 'clients', 'title_for_layout', 'meta'));
	}

	public function contacts(){
		$this->view = 'contacts';
		$page = $this->Page->findByAlias('contacts');
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('title_for_layout', 'meta', 'page'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Page->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Page->findById($id);
		if(!$id){
			throw new NotFoundException('Not found...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Page->id = $id;
			$data1 = $this->request->data['Page'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Page->save($data1)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Editing material';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function contactus(){

		if( !empty($this->request->data) ){
			$email = new CakeEmail('smtp');
			$email->from(array('info@uxui.kz' => 'Usability Lab'))
			->to('info@uxui.kz')
			->subject('New letter');
			$message = 'Name: '. $this->request->data['Page']['name'] . ' Телефон: '. $this->request->data['Page']['phone'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}
}
