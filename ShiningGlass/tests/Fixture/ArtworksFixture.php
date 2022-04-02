<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtworksFixture
 */
class ArtworksFixture extends TestFixture
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
                'sku' => 1,
                'price' => 1,
                'weight' => 1,
                'size' => 'Lorem ipsum dolor sit amet',
                'descriptions' => 'Lorem ipsum dolor sit amet',
                'create_date' => '2022-04-02 03:30:11',
                'order_id' => 1,
            ],
        ];
        parent::init();
    }
}
