<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artwork Entity
 *
 * @property int $id
 * @property int $sku
 * @property float $price
 * @property float $weight
 * @property string $size
 * @property string $descriptions
 * @property \Cake\I18n\FrozenTime $create_date
 * @property int|null $order_id
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\ArtworkImage[] $artwork_images
 * @property \App\Model\Entity\Category[] $categories
 */
class Artwork extends Entity
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
        'sku' => true,
        'price' => true,
        'weight' => true,
        'size' => true,
        'descriptions' => true,
        'create_date' => true,
        'order_id' => true,
        'order' => true,
        'artwork_images' => true,
        'categories' => true,
    ];
}
