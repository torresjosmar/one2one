<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formacionacademica Model
 *
 * @method \App\Model\Entity\Formacionacademica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formacionacademica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Formacionacademica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formacionacademica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacionacademica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formacionacademica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formacionacademica findOrCreate($search, callable $callback = null, $options = [])
 */
class FormacionacademicaTable extends Table
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

        $this->setTable('formacionacademica');
        $this->setDisplayField('idformacionacademica');
        $this->setPrimaryKey('idformacionacademica');
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
            ->integer('idformacionacademica')
            ->allowEmpty('idformacionacademica', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 45)
            ->allowEmpty('titulo');

        $validator
            ->scalar('descripcion')
            ->allowEmpty('descripcion');

        $validator
            ->integer('profesor_idprofesor')
            ->requirePresence('profesor_idprofesor', 'create')
            ->notEmpty('profesor_idprofesor');

        return $validator;
    }
}
