<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointmentsFixture
 */
class AppointmentsFixture extends TestFixture
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
                'patient_id' => 1,
                'doctor_id' => 1,
                'appointment_date' => '2023-04-16 16:58:41',
                'created' => '2023-04-16 16:58:41',
                'modified' => '2023-04-16 16:58:41',
            ],
        ];
        parent::init();
    }
}
