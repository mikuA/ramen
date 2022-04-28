<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ramensy Controller
 *
 * @method \App\Model\Entity\Ramensy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RamensyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ramensy = $this->paginate($this->Ramensy);

        $this->set(compact('ramensy'));
    }

    /**
     * View method
     *
     * @param string|null $id Ramensy id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ramensy = $this->Ramensy->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ramensy'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ramensy = $this->Ramensy->newEmptyEntity();
        if ($this->request->is('post')) {
            $ramensy = $this->Ramensy->patchEntity($ramensy, $this->request->getData());
            if ($this->Ramensy->save($ramensy)) {
                $this->Flash->success(__('The ramensy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ramensy could not be saved. Please, try again.'));
        }
        $this->set(compact('ramensy'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ramensy id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ramensy = $this->Ramensy->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ramensy = $this->Ramensy->patchEntity($ramensy, $this->request->getData());
            if ($this->Ramensy->save($ramensy)) {
                $this->Flash->success(__('The ramensy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ramensy could not be saved. Please, try again.'));
        }
        $this->set(compact('ramensy'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ramensy id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ramensy = $this->Ramensy->get($id);
        if ($this->Ramensy->delete($ramensy)) {
            $this->Flash->success(__('The ramensy has been deleted.'));
        } else {
            $this->Flash->error(__('The ramensy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
