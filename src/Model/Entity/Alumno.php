<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity
 *
 * @property int $idalumno
 * @property string $nombres
 * @property int $usuario_idusuario
 * @property string $apellidos
 * @property int $edad
 * @property string $telefono_celular
 * @property string $telefono_fijo
 * @property string $foto_perfil
 * @property string $nombre_responsable
 * @property string $apellido_responsable
 * @property int $subcategoria_idsubcategoria
 * @property int $provincia_idprovincia
 */
class Alumno extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombres' => true,
        'usuario_idusuario' => true,
        'apellidos' => true,
        'edad' => true,
        'telefono_celular' => true,
        'telefono_fijo' => true,
        'foto_perfil' => true,
        'nombre_responsable' => true,
        'apellido_responsable' => true,
        'subcategoria_idsubcategoria' => true,
        'provincia_idprovincia' => true
    ];
}
