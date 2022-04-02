<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtworksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtworksTable Test Case
 */
class ArtworksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtworksTable
     */
    protected $Artworks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artworks',
        'app.Orders',
        'app.ArtworkImages',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Artworks') ? [] : ['className' => ArtworksTable::class];
        $this->Artworks = $this->getTableLocator()->get('Artworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artworks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArtworksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ArtworksTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
