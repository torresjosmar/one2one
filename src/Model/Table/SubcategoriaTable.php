<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subcategoria Model
 *
 * @method \App\Model\Entity\Subcategorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subcategorium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subcategorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subcategorium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subcategorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subcategorium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subcategorium findOrCreate($search, callable $callback = null, $options = [])
 */
class SubcategoriaTable extends Table
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

        $this->setTable('subcategoria');
        $this->setDisplayField('idsubcategoria');
        $this->setPrimaryKey('idsubcategoria');
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
            ->integer('idsubcategoria')
            ->allowEmpty('idsubcategoria', 'create');

        $validator
            ->integer('categoria_idcategoria')
            ->requirePresence('categoria_idcategoria', 'create')
            ->notEmpty('categoria_idcategoria');

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
