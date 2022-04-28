<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ramens Controller
 *
 * @property \App\Model\Table\RamensTable $Ramens
 * @method \App\Model\Entity\Ramen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RamensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ramens = $this->paginate($this->Ramens);

        $this->set(compact('ramens'));
    }

    /**
     * View method
     *
     * @param string|null $id Ramen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ramen = $this->Ramens->get($id, [
            'contain' => ['Totals'],
        ]);

        $this->set(compact('ramen'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ramen = $this->Ramens->newEmptyEntity();
        if ($this->request->is('post')) {
            $ramen = $this->Ramens->patchEntity($ramen, $this->request->getData());
            if ($this->Ramens->save($ramen)) {
                $this->Flash->success(__('The ramen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ramen could not be saved. Please, try again.'));
        }
        $this->set(compact('ramen'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ramen id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ramen = $this->Ramens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ramen = $this->Ramens->patchEntity($ramen, $this->request->getData());
            if ($this->Ramens->save($ramen)) {
                $this->Flash->success(__('The ramen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ramen could not be saved. Please, try again.'));
        }
        $this->set(compact('ramen'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ramen id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ramen = $this->Ramens->get($id);
        if ($this->Ramens->delete($ramen)) {
            $this->Flash->success(__('The ramen has been deleted.'));
        } else {
            $this->Flash->error(__('The ramen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
