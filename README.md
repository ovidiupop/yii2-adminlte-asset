AdminLTE Asset Bundle
=====================

*Backend UI for Yii2 Framework, based on [AdminLTE](https://github.com/almasaeed2010/AdminLTE)*


Installation
------------
```
composer require ovidiupop/yii2-adminlte-asset "^2.1"
```

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/ovidiupop/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],
],
```

Plugins
-------

```php
use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'chart.js/Chart.min.css',
        // more plugin CSS here
    ];
    public $js = [
        'chart.js/Chart.bundle.min.js'
        // more plugin Js here
    ];
    public $depends = [
        'ovidiupop\adminlte\web\AdminLteAsset',
    ];
}
```

As this asset depends on our `AdminLteAsset` it's the only asset you have to register, for example in
your `main.php` layout file.


### Custom content header

If you want to use native DOM of headers AdminLTE

```html
<h1>
    About <small>static page</small>
</h1>
```

then you can follow the code:

```php
/* @var yii\web\View $this */

$this->params['breadcrumbs'][] = 'About';

$this->beginBlock('content-header'); ?>
About <small>static page</small>
<?php $this->endBlock(); ?>

<div class="site-about">
    <p> This is the About page. You may modify the following file to customize its content: </p>
    <code><?= __FILE__ ?></code>
</div>
```

### Left sidebar menu - Widget Menu

If you need to separate sections of the menu then just add the `header` option to item in `items`
```php
    'items' => [
        ['label' => 'Gii', 'iconType' => 'far' 'icon' => 'file-code', 'url' => ['/gii']],
        ['label' => 'Debug', 'icon' => 'dashboard-alt', 'url' => ['/debug']],
        ['label' => 'MAIN NAVIGATION', 'header' => true], // here
        // ... a group items
        ['label' => '', 'header' => true],
        // ... a group items
        ['label' => '', 'header' => true],
        // ... a group items
```

To add a badge for a item:

```php
'items' => [
    [
        'label' => 'Mailbox',
        'iconType' => 'far',
        'icon' => 'envelope',
        'url' => ['/mailbox'],
        'badge' => '<span class="badge badge-info right">123</span>'
    ],
]
```

By default to icons will be added prefix of [Font Awesome](https://fontawesome.com/)

### Template for Gii CRUD generator

Tell Gii about our template. The setting is made in the config file:

```php
if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [ // HERE
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@vendor/ovidiupop/yii2-adminlte-asset/gii/templates/crud/simple',
                ]
            ]
        ],
    ];
}
```

Further Information
-------------------

For AdminLTE documentation, please read https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html
 
