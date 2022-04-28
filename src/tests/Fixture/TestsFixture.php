<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestsFixture
 */
class TestsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'student_id' => 1,
                'date' => '2022-04-26',
                'subject' => 'Lorem ipsum dolor sit amet',
                'score' => 1,
                'created' => '2022-04-26 08:20:43',
                'modified' => '2022-04-26 08:20:43',
                'teacher_id' => 1,
            ],
        ];
        parent::init();
    }
}
