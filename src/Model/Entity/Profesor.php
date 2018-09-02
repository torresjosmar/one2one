<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesor Entity
 *
 * @property int $idprofesor
 * @property string $nombres
 * @property string $apellidos
 * @property int $edad
 * @property string $telefono_celular
 * @property string $telefono_fijo
 * @property string $foto_perfil
 * @property string $especialidad
 * @property string $descripcion
 * @property string $video_presentacion
 * @property string $url_facebook
 * @property string $url_twitter
 * @property string $url_instagram
 * @property int $usuario_idusuario
 * @property int $provincia_idprovincia
 */
class Profesor extends Entity
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
        'apellidos' => true,
        'edad' => true,
        'telefono_celular' => true,
        'telefono_fijo' => true,
        'foto_perfil' => true,
        'especialidad' => true,
        'descripcion' => true,
        'video_presentacion' => true,
        'url_facebook' => true,
        'url_twitter' => true,
        'url_instagram' => true,
        'usuario_idusuario' => true,
        'provincia_idprovincia' => true
    ];
}
