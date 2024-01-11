<?php

class __Mustache_ab9e39187dc47379ae0ded73aaf4b42c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('data');
        $buffer .= $this->section868abf53320d331214d29a077d43e6d5($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB3e11f15e78cc9a3f97e4ef9aef1a776($context, $indent, $value);

        return $buffer;
    }

    private function section868abf53320d331214d29a077d43e6d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> block_remuiblck/enrolled_users_stats }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_remuiblck/enrolled_users_stats')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3e11f15e78cc9a3f97e4ef9aef1a776(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/userstats\'], function(){});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/userstats\'], function(){});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
