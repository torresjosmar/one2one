<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoria Model
 *
 * @method \App\Model\Entity\Categorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriaTable extends Table
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

        $this->setTable('categoria');
        $this->setDisplayField('idcategoria');
        $this->setPrimaryKey('idcategoria');
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
            ->integer('idcategoria')
            ->allowEmpty('idcategoria', 'create');

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
