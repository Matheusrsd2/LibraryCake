<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $genero
 * @property string|null $isbn
 * @property int|null $ano
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property int|null $categorias_produto_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 */
class Livro extends Entity
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
        'imagem' => true,
        'titulo' => true,
        'genero' => true,
        'isbn' => true,
        'ano' => true,
        'autor' => true,
        'created' => true,
        'updated' => true,
        'categorias_produto_id' => true,
        'categoria' => true,
    ];
}
