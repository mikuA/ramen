<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ipsum dolor sit amet',
                'birth' => '2022-04-26',
                'grade' => 1,
                'class' => 1,
                'created' => '2022-04-26 08:36:55',
                'modified' => '2022-04-26 08:36:55',
                'club_id' => 1,
            ],
        ];
        parent::init();
    }
}
