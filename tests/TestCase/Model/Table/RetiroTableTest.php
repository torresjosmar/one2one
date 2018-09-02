<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RetiroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RetiroTable Test Case
 */
class RetiroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RetiroTable
     */
    public $Retiro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.retiro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Retiro') ? [] : ['className' => RetiroTable::class];
        $this->Retiro = TableRegistry::getTableLocator()->get('Retiro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Retiro);

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
