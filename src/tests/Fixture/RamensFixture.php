<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RamensFixture
 */
class RamensFixture extends TestFixture
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
                'id' => '',
                'name' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
            ],
        ];
        parent::init();
    }
}
