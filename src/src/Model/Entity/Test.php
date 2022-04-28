<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity
 *
 * @property int $id
 * @property int $student_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $subject
 * @property int $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $teacher_id
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Teacher $teacher
 */
class Test extends Entity
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
        'student_id' => true,
        'date' => true,
        'subject' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'teacher_id' => true,
        'student' => true,
        'teacher' => true,
    ];
}
