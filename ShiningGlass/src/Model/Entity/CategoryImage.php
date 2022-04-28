<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoryImage Entity
 *
 * @property string $file_name
 * @property int $category_id
 * @property int $id
 *
 * @property \App\Model\Entity\Category $category
 */
class CategoryImage extends Entity
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
        'file_name' => true,
        'category_id' => true,
        'category' => true,
    ];
}
