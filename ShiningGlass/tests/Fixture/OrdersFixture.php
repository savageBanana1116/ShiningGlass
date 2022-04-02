<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'customer_id' => 1,
                'quantity' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 1,
                'zip_code' => 1,
                'country' => 1,
                'order_time' => '2022-04-02 03:29:13',
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
