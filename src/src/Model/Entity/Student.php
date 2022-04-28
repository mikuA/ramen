<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $birth
 * @property int $grade
 * @property int $class
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $club_id
 *
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Test[] $tests
 */
class Student extends Entity
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
        'name' => true,
        'gender' => true,
        'birth' => true,
        'grade' => true,
        'class' => true,
        'created' => true,
        'modified' => true,
        'club_id' => true,
        'club' => true,
        'tests' => true,
    ];
}
