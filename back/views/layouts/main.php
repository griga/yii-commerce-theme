<?php /**@var $this Controller */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $this->pageTitle ?></title>
    <link rel="stylesheet" href="<?= app()->theme->baseUrl ?>/css/admin.css"/>
    <link rel="stylesheet" href="<?= app()->theme->baseUrl ?>/css/sb-admin.css"/>
    <link rel="shortcut icon" href="<?= app()->theme->baseUrl ?>/img/favicon.png"/>
</head>
<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/">Commerce&nbsp;
                <small>admin</small>
            </a>
        </div>
        <!-- /.navbar-header -->

        <?= $this->renderPartial('//layouts/_navbar-right') ?>

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <div id="side-menu">
                    <div class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="<?= t('Search') ?>...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('.sub-menu-expander').on('click', function () {
                                $(event.target).closest('li').toggleClass('active');
                            })
                        });
                    </script>
                    <ul class="nav">
                        <?php MenuHtml::renderItems([[
                            'url' => 'catalog/product',
                            'label' => '<i class="glyphicon glyphicon-th-large"></i> ' . t('Products catalog'),
                            'caret' => '<i class="sub-menu-expander"></i>',
                            'items' => [
                                [
                                    'url' => 'catalog/product',
                                    'label' => '<i class="glyphicon glyphicon-th"></i> ' . t('Products'),
                                    'active' => app()->controller->id == 'product',
                                ],
                                [
                                    'url' => 'catalog/category',
                                    'label' => '<i class="glyphicon glyphicon-th-list"></i> ' . t('Categories'),
                                    'active' => app()->controller->id == 'category',
                                ],
                                [
                                    'url' => 'catalog/filter',
                                    'label' => '<i class="glyphicon glyphicon-filter"></i> ' . t('Filters'),
                                    'active' => app()->controller->id == 'filter',
                                ],
                                [
                                    'url' => 'catalog/manufacturer',
                                    'label' => '<i class="glyphicon glyphicon-barcode"></i> ' . t('Manufacturers'),
                                    'active' => app()->controller->id == 'manufacturer',
                                ],
/*                                [
                                    'url' => 'catalog/rotation',
                                    'label' => '<i class="glyphicon glyphicon-repeat"></i> ' . t('Rotation'),
                                    'active' => app()->controller->id == 'rotation',
                                ],*/
                            ]
                        ], [
                            'url' => 'translation',
                            'label' => '<i class="glyphicon glyphicon-pencil"></i> ' . t('Translations'),
                        ], [
                            'url' => 'shop',
                            'label' => '<i class="glyphicon glyphicon-shopping-cart"></i> ' . t('Shop'),
                            'caret' => '<i class="sub-menu-expander"></i>',
                            'items' => [
                                [
                                    'url' => 'shop/manage',
                                    'label' => '<i class="glyphicon glyphicon-th"></i> ' . t('Orders'),
                                    'active' => app()->controller->id == 'manage' && app()->controller->module->id == 'shop',
                                ]
                            ]
                        ], [
                            'url' => 'user',
                            'label' => '<i class="glyphicon glyphicon-user"></i> ' . t('Users'),
                        ], [
                            'url' => 'content',
                            'label' => '<i class="glyphicon glyphicon-text-width"></i> ' . t('Site content'),
                            'caret' => '<i class="sub-menu-expander"></i>',
                            'items' => [
                                [
                                    'url' => 'menu',
                                    'label' => '<i class="glyphicon glyphicon-align-justify"></i> ' . t('Menu'),
                                    'active' => app()->controller->id == 'module' && app()->controller->module->id == 'menu',
                                ],
                                [
                                    'url' => 'content/page',
                                    'label' => '<i class="glyphicon glyphicon-align-justify"></i> ' . t('Static pages'),
                                    'active' => app()->controller->id == 'page' && app()->controller->module->id == 'content',
                                ],
                                [
                                    'url' => 'content/slide',
                                    'label' => '<i class="glyphicon glyphicon-facetime-video"></i> ' . t('Slides'),
                                ],
                                [
                                    'url' => 'content/news',
                                    'label' => '<i class="glyphicon glyphicon-edit"></i> ' . t('News'),
                                ],
                            ]
                        ]]) ?>


                    </ul>

                </div>
            </div>
        </div>
        <!-- /.navbar-static-side -->
    </nav>


    <div id="page-wrapper">
        <?php $this->widget('\yg\tb\Breadcrumbs', array(
            'links' => $this->breadcrumbs,
        )) ?>

        <?= $content ?>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<footer></footer>
<?php cs()->registerCoreScript('jquery') ?>
<?php cs()->registerPackage('cookie') ?>
<?php cs()->registerCoreScript('bootstrap') ?>
<?php cs()->registerScriptFile(app()->theme->baseUrl . '/js/main.js') ?>
</body>
</html>
