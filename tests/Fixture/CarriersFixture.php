<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarriersFixture
 */
class CarriersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'carrier_code' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-04-16 16:58:30',
                'modified' => '2023-04-16 16:58:30',
            ],
        ];
        parent::init();
    }
}
