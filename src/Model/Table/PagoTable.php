<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pago Model
 *
 * @method \App\Model\Entity\Pago get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pago newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pago|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pago|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pago[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pago findOrCreate($search, callable $callback = null, $options = [])
 */
class PagoTable extends Table
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

        $this->setTable('pago');
        $this->setDisplayField('idpago');
        $this->setPrimaryKey('idpago');
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
            ->integer('idpago')
            ->allowEmpty('idpago', 'create');

        $validator
            ->integer('idalumno')
            ->requirePresence('idalumno', 'create')
            ->notEmpty('idalumno');

        $validator
            ->integer('idprofesor')
            ->requirePresence('idprofesor', 'create')
            ->notEmpty('idprofesor');

        $validator
            ->date('fecha_pago')
            ->requirePresence('fecha_pago', 'create')
            ->notEmpty('fecha_pago');

        $validator
            ->scalar('plataforma')
            ->maxLength('plataforma', 250)
            ->requirePresence('plataforma', 'create')
            ->notEmpty('plataforma');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        return $validator;
    }
}
