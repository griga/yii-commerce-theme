<?php
/** Created by griga at 20.05.2014 | 12:27.
 * @var boolean $sortableParent
 * @var ProductCategory[] $models
 */ ?>

<ol <?= $sortableParent ? 'id="sortable-models-list"' : '' ?>>
    <?php foreach($models as $model):?>
        <li class="sortable-model-wrapper" id="sortable-model-<?= $model['id'] ?>">
            <div class="row sortable-model-item">
                <div class="col-sm-9">
                    <?php if($model['filename']):?>
                        <?= CHtml::image(Upload::model()->getThumb($model['filename'], 30, 30)); ?>
                    <?php endif;?>
                    <?= l($model['name'], [$controllerUrl.'update', 'id' => $model['id']], ['class'=>'sortable-model-name'])?>
                    <a href="/admin<?= $controllerUrl ?>update/<?= $model['id'] ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>

                    <a href="<?= app()->createUrl($controllerUrl.'create',['parent_id'=>$model['id']]) ?>">
                        <i class="glyphicon glyphicon-plus-sign"></i>
                    </a>
                </div>
            </div>
            <?php if(count($model['children'])>0):?>
                <?php $this->widget('webroot.themes.commerce.back.widgets.SortableModelsWidget', array(
                    'models'=>$model['children'],
                    'controllerUrl'=>$controllerUrl
                ))?>
            <?php endif;?>
        </li>
    <?php endforeach;?>
</ol>