<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $customer_id
 * @property int $quantity
 * @property string $address
 * @property int $city
 * @property int $zip_code
 * @property int $country
 * @property \Cake\I18n\FrozenTime $order_time
 * @property int $id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Artwork[] $artworks
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'quantity' => true,
        'address' => true,
        'city' => true,
        'zip_code' => true,
        'country' => true,
        'order_time' => true,
        'customer' => true,
        'artworks' => true,
    ];
}
