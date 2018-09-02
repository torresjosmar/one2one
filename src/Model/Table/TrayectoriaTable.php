<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trayectoria Model
 *
 * @method \App\Model\Entity\Trayectorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trayectorium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trayectorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trayectorium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trayectorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trayectorium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trayectorium findOrCreate($search, callable $callback = null, $options = [])
 */
class TrayectoriaTable extends Table
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

        $this->setTable('trayectoria');
        $this->setDisplayField('idtrayectoria');
        $this->setPrimaryKey('idtrayectoria');
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
            ->integer('idtrayectoria')
            ->allowEmpty('idtrayectoria', 'create');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmpty('descripcion');

        $validator
            ->integer('profesor_idprofesor')
            ->requirePresence('profesor_idprofesor', 'create')
            ->notEmpty('profesor_idprofesor');

        return $validator;
    }
}
