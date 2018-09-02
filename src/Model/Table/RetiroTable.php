<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Retiro Model
 *
 * @method \App\Model\Entity\Retiro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Retiro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Retiro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Retiro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Retiro|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Retiro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Retiro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Retiro findOrCreate($search, callable $callback = null, $options = [])
 */
class RetiroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('retiro');
        $this->setDisplayField('idretiro');
        $this->setPrimaryKey('idretiro');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idretiro')
            ->allowEmpty('idretiro', 'create');

        $validator
            ->integer('profesor_idprofesor')
            ->requirePresence('profesor_idprofesor', 'create')
            ->notEmpty('profesor_idprofesor');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        return $validator;
    }
}
