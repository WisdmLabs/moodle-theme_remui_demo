<?php

class __Mustache_9aab02b5c88c1291ba02ce3f2ec3cd71 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="row">
';
        $value = $context->find('sectiondata');
        $buffer .= $this->section05a455941d9fb6efe839d5e9fb5d67d0($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section893c0f179926b816360f8baf790b7a8e($context, $indent, $value);

        return $buffer;
    }

    private function sectionC444fdafbd8b5102c5573b7dfa5a82dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="{{classes}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d14598c61b1adbd187f8553e08a9930(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'drag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'drag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdf3c2db9d5a647a21e3803f63203a31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#dragable}}drag{{/dragable}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $context->find('dragable');
                $buffer .= $this->section6d14598c61b1adbd187f8553e08a9930($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04cb4c2741cdc911907b81d1c7f125e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="panel-action edw-icon edw-icon-Move" aria-hidden="true"></a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a class="panel-action edw-icon edw-icon-Move" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section809f04da0a4ccd5fc481b20f86d05a17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="panel-actions" title="move">
                            {{#dragable}}<a class="panel-action edw-icon edw-icon-Move" aria-hidden="true"></a>{{/dragable}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="panel-actions" title="move">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('dragable');
                $buffer .= $this->section04cb4c2741cdc911907b81d1c7f125e4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02d3e339fe2d849e916a98d4874ae9fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#dragable}}drag{{/dragable}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('dragable');
                $buffer .= $this->section6d14598c61b1adbd187f8553e08a9930($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b03ed81c79ec85866ee5ba91be6bc4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="panel panel-bordered {{classes}}" id="{{id}}">
                    <div class="panel-heading  {{#editing}} {{#dragable}}drag{{/dragable}}{{/editing}}">
                        <h4 class="h-semibold-4 m-0" title="{{blockname}}">{{blockname}}</h4>
                        {{#editing}}
                            <div class="panel-actions" title="move">
                            {{#dragable}}<a class="panel-action edw-icon edw-icon-Move" aria-hidden="true"></a>{{/dragable}}
                            </div>
                        {{/editing}}
                    </div>
                    <div class="panel-body {{#editing}}{{#dragable}}drag{{/dragable}}{{/editing}}">
                        {{{content}}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="panel panel-bordered ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="panel-heading  ';
                $value = $context->find('editing');
                $buffer .= $this->sectionEdf3c2db9d5a647a21e3803f63203a31($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <h4 class="h-semibold-4 m-0" title="';
                $value = $this->resolveValue($context->find('blockname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('blockname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
';
                $value = $context->find('editing');
                $buffer .= $this->section809f04da0a4ccd5fc481b20f86d05a17($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="panel-body ';
                $value = $context->find('editing');
                $buffer .= $this->section02d3e339fe2d849e916a98d4874ae9fa($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05a455941d9fb6efe839d5e9fb5d67d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <section id="{{id}}" {{#classes}}class="{{classes}}"{{/classes}}>
            {{#content}}
                <div class="panel panel-bordered {{classes}}" id="{{id}}">
                    <div class="panel-heading  {{#editing}} {{#dragable}}drag{{/dragable}}{{/editing}}">
                        <h4 class="h-semibold-4 m-0" title="{{blockname}}">{{blockname}}</h4>
                        {{#editing}}
                            <div class="panel-actions" title="move">
                            {{#dragable}}<a class="panel-action edw-icon edw-icon-Move" aria-hidden="true"></a>{{/dragable}}
                            </div>
                        {{/editing}}
                    </div>
                    <div class="panel-body {{#editing}}{{#dragable}}drag{{/dragable}}{{/editing}}">
                        {{{content}}}
                    </div>
                </div>
            {{/content}}
        </section>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <section id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('classes');
                $buffer .= $this->sectionC444fdafbd8b5102c5573b7dfa5a82dd($context, $indent, $value);
                $buffer .= '>
';
                $value = $context->find('content');
                $buffer .= $this->section8b03ed81c79ec85866ee5ba91be6bc4c($context, $indent, $value);
                $buffer .= $indent . '        </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section893c0f179926b816360f8baf790b7a8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_remuiblck/jqueryui\'], function($){
    const enableSortable = () => {
        $( "#sortable1, #sortable2, #sortable3" ).sortable({
            connectWith: ".connectedSortable",
            placeholder: "sort-highlight",
            forcePlaceholderSize: true,
            handle: ".drag",
            zIndex: 999999,
            stop:function(){

                var sortables   = [\'#sortable1\', \'#sortable2\', \'#sortable3\'];
                var nonempty = [\'nonemptytop\', \'nonemptyleft\', \'nonemptyright\'];
                var preferences = [\'remui_layout_top\', \'remui_layout_left\', \'remui_layout_right\'];

                for(var loop=0; loop < sortables.length; loop++){

                    var data = $(sortables[loop]).sortable(\'toArray\');
                    var sortable = data.filter(function(blck) {
                        return blck !== nonempty[loop];
                    });

                    M.util.set_user_preference(preferences[loop], JSON.stringify(sortable));

                    if(sortable.length == 0)
                    {
                        $(sortables[loop]).addClass(\'blankheight\');
                    }else{
                        $(sortables[loop]).removeClass(\'blankheight\');
                    }

                }
            }
        }).disableSelection();
    };
    enableSortable();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'block_remuiblck/jqueryui\'], function($){
';
                $buffer .= $indent . '    const enableSortable = () => {
';
                $buffer .= $indent . '        $( "#sortable1, #sortable2, #sortable3" ).sortable({
';
                $buffer .= $indent . '            connectWith: ".connectedSortable",
';
                $buffer .= $indent . '            placeholder: "sort-highlight",
';
                $buffer .= $indent . '            forcePlaceholderSize: true,
';
                $buffer .= $indent . '            handle: ".drag",
';
                $buffer .= $indent . '            zIndex: 999999,
';
                $buffer .= $indent . '            stop:function(){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var sortables   = [\'#sortable1\', \'#sortable2\', \'#sortable3\'];
';
                $buffer .= $indent . '                var nonempty = [\'nonemptytop\', \'nonemptyleft\', \'nonemptyright\'];
';
                $buffer .= $indent . '                var preferences = [\'remui_layout_top\', \'remui_layout_left\', \'remui_layout_right\'];
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                for(var loop=0; loop < sortables.length; loop++){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    var data = $(sortables[loop]).sortable(\'toArray\');
';
                $buffer .= $indent . '                    var sortable = data.filter(function(blck) {
';
                $buffer .= $indent . '                        return blck !== nonempty[loop];
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    M.util.set_user_preference(preferences[loop], JSON.stringify(sortable));
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    if(sortable.length == 0)
';
                $buffer .= $indent . '                    {
';
                $buffer .= $indent . '                        $(sortables[loop]).addClass(\'blankheight\');
';
                $buffer .= $indent . '                    }else{
';
                $buffer .= $indent . '                        $(sortables[loop]).removeClass(\'blankheight\');
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }).disableSelection();
';
                $buffer .= $indent . '    };
';
                $buffer .= $indent . '    enableSortable();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
