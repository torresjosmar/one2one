<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagoTable Test Case
 */
class PagoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PagoTable
     */
    public $Pago;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pago'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pago') ? [] : ['className' => PagoTable::class];
        $this->Pago = TableRegistry::getTableLocator()->get('Pago', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pago);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
