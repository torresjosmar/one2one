<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumno Model
 *
 * @method \App\Model\Entity\Alumno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alumno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno findOrCreate($search, callable $callback = null, $options = [])
 */
class AlumnoTable extends Table
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

        $this->setTable('alumno');
        $this->setDisplayField('idalumno');
        $this->setPrimaryKey('idalumno');
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
            ->integer('idalumno')
            ->allowEmpty('idalumno', 'create');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 200)
            ->allowEmpty('nombres');

        $validator
            ->integer('usuario_idusuario')
            ->requirePresence('usuario_idusuario', 'create')
            ->notEmpty('usuario_idusuario');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 200)
            ->allowEmpty('apellidos');

        $validator
            ->integer('edad')
            ->allowEmpty('edad');

        $validator
            ->scalar('telefono_celular')
            ->maxLength('telefono_celular', 20)
            ->allowEmpty('telefono_celular');

        $validator
            ->scalar('telefono_fijo')
            ->maxLength('telefono_fijo', 20)
            ->allowEmpty('telefono_fijo');

        $validator
            ->scalar('foto_perfil')
            ->maxLength('foto_perfil', 45)
            ->allowEmpty('foto_perfil');

        $validator
            ->scalar('nombre_responsable')
            ->maxLength('nombre_responsable', 200)
            ->allowEmpty('nombre_responsable');

        $validator
            ->scalar('apellido_responsable')
            ->maxLength('apellido_responsable', 200)
            ->allowEmpty('apellido_responsable');

        $validator
            ->integer('subcategoria_idsubcategoria')
            ->allowEmpty('subcategoria_idsubcategoria');

        $validator
            ->integer('provincia_idprovincia')
            ->allowEmpty('provincia_idprovincia');

        return $validator;
    }
}
