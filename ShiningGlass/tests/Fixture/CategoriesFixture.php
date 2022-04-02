<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
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
                'name' => 1,
                'description' => 1,
                'create_date' => '2022-04-02 03:30:36',
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
