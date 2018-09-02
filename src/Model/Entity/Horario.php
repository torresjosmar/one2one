<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Horario Entity
 *
 * @property int $idhorario
 * @property string $hora
 * @property string $dia
 * @property int $alumno_idalumno
 * @property int $profesor_idprofesor
 */
class Horario extends Entity
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
        'hora' => true,
        'dia' => true,
        'alumno_idalumno' => true,
        'profesor_idprofesor' => true
    ];
}
