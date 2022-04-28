<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $name
 * @property int $description
 * @property \Cake\I18n\FrozenTime $create_date
 * @property int $id
 *
 * @property \App\Model\Entity\CategoryImage[] $category_images
 * @property \App\Model\Entity\Artwork[] $artworks
 */
class Category extends Entity
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
        'name' => true,
        'description' => true,
        'create_date' => true,
        'category_images' => true,
        'artworks' => true,
    ];
}
