<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */


namespace backend\modules\category;

use Yii\UrlAsset\component\UrlAsset;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppUrlAsset extends UrlAsset
{    
   
     public $url = [
        [
            'category'=>[
                'label' => 'Master Management', 
                'url' => ['/#'],
                'linkOptions'=>[
                    'class' => 'fa fa-group',
                ],
                'items' => [
                    [
                        'label' => 'Category', 
                        'url' => ['/category'],
                        'linkOptions'=>[
                            'class' => 'fa fa-group',
                        ]
                    ],  
                ]
            ],
            'ztrash'=>[
                'items' => [
                   
                    [
                        'label' => 'Category Trash', 
                        'url' => ['/category/category-trash/index'],
                        'linkOptions'=>[
                            'class' => 'fa fa-trash-o',
                        ]
                    ],
                ]
            ]
        ]
    ];
    
    public $module = ['category'=>'category','category/category-trash'=>'ztrash'];
}