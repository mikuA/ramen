<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClubsFixture
 */
class ClubsFixture extends TestFixture
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
                'clubname' => 'Lorem ipsum dolor sit amet',
                'coach' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-04-26 07:59:10',
                'modified' => '2022-04-26 07:59:10',
            ],
        ];
        parent::init();
    }
}
