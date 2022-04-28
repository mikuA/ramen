<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TotalsFixture
 */
class TotalsFixture extends TestFixture
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
                'date' => 'Lorem ipsum do',
                'ramen_id' => 'L',
                'quantity' => 1,
                'acounting' => 1,
                'responsible' => 'L',
            ],
        ];
        parent::init();
    }
}
