<?php

class PortfoliosController extends AppController{
	public $uses = array('Portfolio');

	public function index(){
		$data = $this->Portfolio->find('all', array(
			'order' => array('id' => 'desc'),
			'fields' => array('id', 'title', 'requirements', 'pf1', 'pf6')
		));
		$title_for_layout = 'Portfolio';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function view($id){
		$data = $this->Portfolio->findById($id);
		$title_for_layout = $data['Portfolio']['title'];
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Portfolio->find('all', array('order' => array('id'=>'desc')));
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Portfolio->create();
			$data = $this->request->data['Portfolio'];
			$imageTypes = array("image/jpeg");
			 $uploadFolder = "upload";
			 $uploadPath = WWW_ROOT . $uploadFolder;
			 $i = 1;
			 $j = 1;
			 $image = array();
			 while($j<=6){
				$image[$j] = $this->request->data['Portfolio']['pf'.$j];
				$j++;
			}

			while($i<=6){
			 foreach ($imageTypes as $type) {
			 	if ($type != $image[$i]['type']) { 
                	$this->Session->setFlash('Unacceptable file type');
                	break;
           		}
			// debug($type);
           		if ($image[$i]['error'] == 0) {
                	 //image file name
                	$imageName = array();
                    $imageName[$i] = $image[$i]['name'];

                    //check if file exists in upload folder
                    if (file_exists($uploadPath . '/' . $imageName[$i])) {
					//create full filename with timestamp
                        $imageName[$i] = date('d-m-Y') . '_' . $imageName[$i];
                    }
                    //create full path with image name
                    $full_image_path = $uploadPath . '/' . $imageName[$i];

                }else{
					$this->Session->setFlash('Error uploading file.');
                	break;
                }

                //upload image to upload folder
                if (move_uploaded_file($image[$i]['tmp_name'], $full_image_path)) {
                    $this->Session->setFlash('File saved successfully');
                    $this->set('imageName',$imageName);
	            }
			 }

            if(!empty($data['pf'.$i]['name'])){
            	// unset($data['pf1']);
           		$data['pf'.$i] = $imageName[$i];
            }else{
            	unset($data['pf'.$i]);
            }
			 $i++;
			} //endwhile
			// debug($data);
			// 	die();

			if($this->Portfolio->save($data)){
				$this->Session->setFlash('Saved', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Error', 'default', array(), 'bad');
			}
		}
		$title_for_layout = 'Add new portfolio';
		$this->set(compact('title_for_layout'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Portfolio->exists($id)){
			throw new NotFoundException('Not found...');
		}
		$data = $this->Portfolio->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
		$this->Portfolio->id = $id;
		$data1 = $this->request->data['Portfolio'];
		$imageTypes = array("image/jpeg");
			 $uploadFolder = "upload";
			 $uploadPath = WWW_ROOT . $uploadFolder;
			 $i = 1;
			 $j = 1;
			 $image = array();
			 while($j<=6){
				$image[$j] = $this->request->data['Portfolio']['pf'.$j];
				$j++;
			}
			while($i<=6){
			 foreach ($imageTypes as $type) {
			 	if ($type != $image[$i]['type']) { 
                	$this->Session->setFlash('Unacceptable file type');
                	break;
           		}
			// debug($type);
           		if ($image[$i]['error'] == 0) {
                	 //image file name
                	$imageName = array();
                    $imageName[$i] = $image[$i]['name'];

                    //check if file exists in upload folder
                    if (file_exists($uploadPath . '/' . $imageName[$i])) {
					//create full filename with timestamp
                        $imageName[$i] = date('d-m-Y') . '_' . $imageName[$i];
                    }
                    //create full path with image name
                    $full_image_path = $uploadPath . '/' . $imageName[$i];

                }else{
					$this->Session->setFlash('Error uploading file.');
                	break;
                }

                //upload image to upload folder
                if (move_uploaded_file($image[$i]['tmp_name'], $full_image_path)) {
                    $this->Session->setFlash('File saved successfully');
                    $this->set('imageName',$imageName);
	            }
			 }

			// debug($data1);
			// 	die();
            if(!empty($data1['pf'.$i]['name'])){
            	// unset($data['pf1']);
           		$data1['pf'.$i] = $imageName[$i];
            }else{
            	unset($data1['pf'.$i]);
            }
			 $i++;
			} //endwhile
			if($this->Portfolio->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			// debug($data1);
			// die();
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$title_for_layout = 'Editing material';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function admin_delete($id){
		if (!$this->Portfolio->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Portfolio->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}