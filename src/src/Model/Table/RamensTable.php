<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ramens Model
 *
 * @property \App\Model\Table\TotalsTable&\Cake\ORM\Association\HasMany $Totals
 *
 * @method \App\Model\Entity\Ramen newEmptyEntity()
 * @method \App\Model\Entity\Ramen newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ramen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ramen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ramen findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ramen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ramen[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ramen|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ramen saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ramen[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ramen[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ramen[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ramen[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RamensTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ramens');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Totals', [
            'foreignKey' => 'ramen_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        return $validator;
    }
}
