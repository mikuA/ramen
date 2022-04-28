<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Totals Controller
 *
 * @property \App\Model\Table\TotalsTable $Totals
 * @method \App\Model\Entity\Total[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TotalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ramens'],
        ];
        $totals = $this->paginate($this->Totals);

        $this->set(compact('totals'));
    }

    /**
     * View method
     *
     * @param string|null $id Total id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $total = $this->Totals->get($id, [
            'contain' => ['Ramens'],
        ]);

        $this->set(compact('total'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $total = $this->Totals->newEmptyEntity();
        if ($this->request->is('post')) {
            $total = $this->Totals->patchEntity($total, $this->request->getData());
            if ($this->Totals->save($total)) {
                $this->Flash->success(__('The total has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The total could not be saved. Please, try again.'));
        }
        $ramens = $this->Totals->Ramens->find('list', ['limit' => 200])->all();
        $this->set(compact('total', 'ramens'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Total id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $total = $this->Totals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $total = $this->Totals->patchEntity($total, $this->request->getData());
            if ($this->Totals->save($total)) {
                $this->Flash->success(__('The total has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The total could not be saved. Please, try again.'));
        }
        $ramens = $this->Totals->Ramens->find('list', ['limit' => 200])->all();
        $this->set(compact('total', 'ramens'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Total id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $total = $this->Totals->get($id);
        if ($this->Totals->delete($total)) {
            $this->Flash->success(__('The total has been deleted.'));
        } else {
            $this->Flash->error(__('The total could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
