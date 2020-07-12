<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivrosTable Test Case
 */
class LivrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LivrosTable
     */
    protected $Livros;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Livros',
        'app.Categorias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Livros') ? [] : ['className' => LivrosTable::class];
        $this->Livros = TableRegistry::getTableLocator()->get('Livros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Livros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
