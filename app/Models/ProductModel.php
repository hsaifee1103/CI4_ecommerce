<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    /**
     * table name
     */
    protected $table = "products";

    /**
     * allowed Field
     */
    protected $allowedFields = ['title',
'description',
'style',
'category',
'color',
'regular_price',
'sale_price',
'featured',
'recipient',
'occasion',
'others',
'is_recommend',
'created_at',
'updated_at',

    ];
}