<?php
/** Created by griga at 28.11.13 | 23:00.
 * 
 */?>
<ul>
    <?php foreach($this->categories as $cat ):?>
        <li data-cat-id="<?php echo $cat->id ;?>"><?php echo CHtml::link($cat->name , array('/catalog/adminCategory/update', 'id'=>$cat->id)) ;?>&nbsp;(<?php echo CHtml::link(count($cat->products), array("/catalog/admin/index", "Product[categoryId]"=>$cat->id)) ;?>)
        <?php if($cat->childrenCount>0) $this->widget('RecursiveModelsListWidget', array(
            'categories'=>$cat->children,
        ));?></li>
    <?php endforeach;?>
</ul>


