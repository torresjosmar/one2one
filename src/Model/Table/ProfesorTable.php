<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesor Model
 *
 * @method \App\Model\Entity\Profesor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profesor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profesor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profesor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfesorTable extends Table
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

        $this->setTable('profesor');
        $this->setDisplayField('idprofesor');
        $this->setPrimaryKey('idprofesor');
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
            ->integer('idprofesor')
            ->allowEmpty('idprofesor', 'create');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 200)
            ->allowEmpty('nombres');

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
            ->scalar('especialidad')
            ->maxLength('especialidad', 200)
            ->allowEmpty('especialidad');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 4294967295)
            ->allowEmpty('descripcion');

        $validator
            ->scalar('video_presentacion')
            ->maxLength('video_presentacion', 45)
            ->allowEmpty('video_presentacion');

        $validator
            ->scalar('url_facebook')
            ->maxLength('url_facebook', 45)
            ->allowEmpty('url_facebook');

        $validator
            ->scalar('url_twitter')
            ->maxLength('url_twitter', 45)
            ->allowEmpty('url_twitter');

        $validator
            ->scalar('url_instagram')
            ->maxLength('url_instagram', 45)
            ->allowEmpty('url_instagram');

        $validator
            ->integer('usuario_idusuario')
            ->requirePresence('usuario_idusuario', 'create')
            ->notEmpty('usuario_idusuario');

        $validator
            ->integer('provincia_idprovincia')
            ->allowEmpty('provincia_idprovincia');

        return $validator;
    }
}
