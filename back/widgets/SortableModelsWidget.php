<?php


class SortableModelsWidget extends CWidget{
    public $models;
    public $sortableParent = false;
    public $controllerUrl;

    public function run()
    {
        $this->registerJs();
        $this->render('modelsList', array(
            'models'=>$this->models,
            'sortableParent'=>$this->sortableParent,
            'controllerUrl'=>$this->controllerUrl,
        ));
    }

    private function registerJs(){
        if(!app()->clientScript->isScriptRegistered(get_class($this))){
            $url = app()->createUrl($this->controllerUrl . 'sort');
            $js = <<< JS
                $('#sortable-models-list').nestedSortable({
                    forcePlaceholderSize: true,
                    handle: 'div',
                    helper:	'clone',
                    items: 'li',
                    opacity: .6,
                    placeholder: 'placeholder',
                    tabSize: 10,
                    tolerance: 'pointer',
                    toleranceElement: '> div',
                    stop: function(event, ui){
                        var data = $('#sortable-models-list').nestedSortable('toHierarchy', {startDepthCount: 0});
                        $.post('{$url}', {data:data});
                    }
                });
JS;
            app()->clientScript->registerScript(get_class($this), $js, CClientScript::POS_READY);
        }


    }



}