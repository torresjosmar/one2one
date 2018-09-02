<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Retiro Entity
 *
 * @property int $idretiro
 * @property int $profesor_idprofesor
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $total
 */
class Retiro extends Entity
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
        'profesor_idprofesor' => true,
        'fecha' => true,
        'total' => true
    ];
}
