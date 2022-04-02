<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtworkImagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtworkImagesTable Test Case
 */
class ArtworkImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtworkImagesTable
     */
    protected $ArtworkImages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ArtworkImages',
        'app.Artworks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ArtworkImages') ? [] : ['className' => ArtworkImagesTable::class];
        $this->ArtworkImages = $this->getTableLocator()->get('ArtworkImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ArtworkImages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArtworkImagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ArtworkImagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
