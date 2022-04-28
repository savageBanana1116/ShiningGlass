<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArtworkImage Entity
 *
 * @property string $file_name
 * @property int $artwork_id
 * @property int $id
 *
 * @property \App\Model\Entity\Artwork $artwork
 */
class ArtworkImage extends Entity
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
        'artwork_id' => true,
        'artwork' => true,
    ];
}
