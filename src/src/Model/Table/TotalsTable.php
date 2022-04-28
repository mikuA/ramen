<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Totals Model
 *
 * @property \App\Model\Table\RamensTable&\Cake\ORM\Association\BelongsTo $Ramens
 *
 * @method \App\Model\Entity\Total newEmptyEntity()
 * @method \App\Model\Entity\Total newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Total[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Total get($primaryKey, $options = [])
 * @method \App\Model\Entity\Total findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Total patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Total[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Total|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Total saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Total[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Total[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Total[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Total[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TotalsTable extends Table
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

        $this->setTable('totals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ramens', [
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
            ->scalar('date')
            ->maxLength('date', 16)
            ->allowEmptyString('date');

        $validator
            ->scalar('ramen_id')
            ->maxLength('ramen_id', 3)
            ->allowEmptyString('ramen_id');

        $validator
            ->integer('quantity')
            ->allowEmptyString('quantity');

        $validator
            ->integer('acounting')
            ->allowEmptyString('acounting');

        $validator
            ->scalar('responsible')
            ->maxLength('responsible', 3)
            ->allowEmptyString('responsible');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('ramen_id', 'Ramens'), ['errorField' => 'ramen_id']);

        return $rules;
    }
}
