<?php
App::uses('AppController', 'Controller');
/**
 * PackageItineraries Controller
 *
 * @property PackageItinerary $PackageItinerary
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PackageItinerariesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text', 'Js', 'Cache', 'Time');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PackageItinerary->recursive = 0;
		$this->set('packageItineraries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PackageItinerary->exists($id)) {
			throw new NotFoundException(__('Invalid package itinerary'));
		}
		$options = array('conditions' => array('PackageItinerary.' . $this->PackageItinerary->primaryKey => $id));
		$this->set('packageItinerary', $this->PackageItinerary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PackageItinerary->create();
			if ($this->PackageItinerary->save($this->request->data)) {
				$this->Session->setFlash(__('The package itinerary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The package itinerary could not be saved. Please, try again.'));
			}
		}
        
        $this->loadModel('Package');
		$packages = $this->Package->find('list');
		$this->set(compact('packages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PackageItinerary->exists($id)) {
			throw new NotFoundException(__('Invalid package itinerary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PackageItinerary->save($this->request->data)) {
				$this->Session->setFlash(__('The package itinerary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The package itinerary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PackageItinerary.' . $this->PackageItinerary->primaryKey => $id));
			$this->request->data = $this->PackageItinerary->find('first', $options);
		}
		$packages = $this->PackageItinerary->Package->find('list');
		$this->set(compact('packages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PackageItinerary->id = $id;
		if (!$this->PackageItinerary->exists()) {
			throw new NotFoundException(__('Invalid package itinerary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PackageItinerary->delete()) {
			$this->Session->setFlash(__('The package itinerary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The package itinerary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
