<?php

class __Mustache_5b7a97f96fc0f969fa79e9cd49b41d5f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('liveeditorlink');
        $buffer .= $this->section0d51fa6a09c921adb7a8e11740c996a1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<div class="block-content ';
        $value = $context->find('haslimitedwidth');
        $buffer .= $this->sectionA210891a87555833e700b7b6cdab89e3($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('blockcss');
        $buffer .= $this->sectionC4821435abac53e6970f17d6957907cf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('blockhtml'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionAd4cd286b92f6f2e7a8bc665fbd27e75($context, $indent, $value);
        $buffer .= $indent . '<script type=\'text/javascript\' id=\'block-script\'>';
        $value = $this->resolveValue($context->find('blockjs'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</script>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0d51fa6a09c921adb7a8e11740c996a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{liveeditorlink}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('liveeditorlink'), $context);
                $buffer .= $indent . ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA210891a87555833e700b7b6cdab89e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{haslimitedwidth}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('haslimitedwidth'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4821435abac53e6970f17d6957907cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<style type="text/css">{{{blockcss}}}</style>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<style type="text/css">';
                $value = $this->resolveValue($context->find('blockcss'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</style>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd4cd286b92f6f2e7a8bc665fbd27e75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
$(document).ready(function(){
    if($(\'body\').hasClass(\'limitedwidth\')){
        $(document).on(\'click\',\'.moodle-actionmenu .move-top \' ,function(){
            checkregion(this, 200);
        });
        $(document).on(\'click\',\'.moodle-actionmenu .move-bottom \' ,function(){
            checkregion(this,200);
        });

        $(document).on(\'mouseleave\',\'.moodle-actionmenu [data-draggroups="block"]\' ,function(){
            checkregion(this,300);
        });

        function checkregion(currentblock,time){
            setTimeout(function () {
                var regionname =  $(currentblock).closest("aside[data-blockregion]").attr("data-blockregion");
                if(regionname == "full-width-top" || regionname == "full-bottom" ){

                    $(currentblock).closest(\'.block\').find(".block-content").removeClass(\'edw-limitedwidth-block\');
                }else{
                    $(currentblock).closest(\'.block\').find(".block-content").addClass(\'edw-limitedwidth-block\');
                }

            }, time);
        }
    }else{
        $(\'.block\').find(\'.edw-limitedwidth-block\').removeClass(\'edw-limitedwidth-block\');
    }
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '$(document).ready(function(){
';
                $buffer .= $indent . '    if($(\'body\').hasClass(\'limitedwidth\')){
';
                $buffer .= $indent . '        $(document).on(\'click\',\'.moodle-actionmenu .move-top \' ,function(){
';
                $buffer .= $indent . '            checkregion(this, 200);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        $(document).on(\'click\',\'.moodle-actionmenu .move-bottom \' ,function(){
';
                $buffer .= $indent . '            checkregion(this,200);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(document).on(\'mouseleave\',\'.moodle-actionmenu [data-draggroups="block"]\' ,function(){
';
                $buffer .= $indent . '            checkregion(this,300);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        function checkregion(currentblock,time){
';
                $buffer .= $indent . '            setTimeout(function () {
';
                $buffer .= $indent . '                var regionname =  $(currentblock).closest("aside[data-blockregion]").attr("data-blockregion");
';
                $buffer .= $indent . '                if(regionname == "full-width-top" || regionname == "full-bottom" ){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    $(currentblock).closest(\'.block\').find(".block-content").removeClass(\'edw-limitedwidth-block\');
';
                $buffer .= $indent . '                }else{
';
                $buffer .= $indent . '                    $(currentblock).closest(\'.block\').find(".block-content").addClass(\'edw-limitedwidth-block\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            }, time);
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    }else{
';
                $buffer .= $indent . '        $(\'.block\').find(\'.edw-limitedwidth-block\').removeClass(\'edw-limitedwidth-block\');
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
