<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pago Entity
 *
 * @property int $idpago
 * @property int $idalumno
 * @property int $idprofesor
 * @property \Cake\I18n\FrozenDate $fecha_pago
 * @property string $plataforma
 * @property int $total
 */
class Pago extends Entity
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
        'idalumno' => true,
        'idprofesor' => true,
        'fecha_pago' => true,
        'plataforma' => true,
        'total' => true
    ];
}
