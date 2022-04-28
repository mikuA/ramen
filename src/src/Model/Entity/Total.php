<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Total Entity
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $ramen_id
 * @property int|null $quantity
 * @property int|null $acounting
 * @property string|null $responsible
 *
 * @property \App\Model\Entity\Ramen $ramen
 */
class Total extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'date' => true,
        'ramen_id' => true,
        'quantity' => true,
        'acounting' => true,
        'responsible' => true,
        'ramen' => true,
    ];
}
