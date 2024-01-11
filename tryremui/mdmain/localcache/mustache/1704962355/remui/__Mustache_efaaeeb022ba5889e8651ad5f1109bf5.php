<?php

class __Mustache_efaaeeb022ba5889e8651ad5f1109bf5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="section border-0 card rounded-0" data-region="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_lazy_load_list')) {
            $context->pushBlockContext(array(
                'rootclasses' => array($this, 'blockCed4692a28108c122f15652e04ade043'),
                'rootattributes' => array($this, 'blockEd8489bdab608dc6b3e228b81947cd0e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockCed4692a28108c122f15652e04ade043($context)
    {
        $indent = $buffer = '';
        $buffer .= 'collapse  ';
        $value = $context->find('expanded');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function blockEd8489bdab608dc6b3e228b81947cd0e($context)
    {
        $indent = $buffer = '';
        $buffer .= '            id="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            aria-labelledby="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-toggle"
';
        $buffer .= $indent . '            data-parent="#message-drawer-view-overview-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
