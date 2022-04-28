<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RamensTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RamensTable Test Case
 */
class RamensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RamensTable
     */
    protected $Ramens;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ramens',
        'app.Totals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ramens') ? [] : ['className' => RamensTable::class];
        $this->Ramens = $this->getTableLocator()->get('Ramens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ramens);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RamensTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
