<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rol Model
 *
 * @method \App\Model\Entity\Rol get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rol findOrCreate($search, callable $callback = null, $options = [])
 */
class RolTable extends Table
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

        $this->setTable('rol');
        $this->setDisplayField('idrol');
        $this->setPrimaryKey('idrol');
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
            ->integer('idrol')
            ->allowEmpty('idrol', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->allowEmpty('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 200)
            ->allowEmpty('descripcion');

        return $validator;
    }
}
