<?php

class __Mustache_1f4c2bda3390f6c5e9b1fd0deed914a9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="filemanager fp-dlg">
';
        $buffer .= $indent . '    <p class="fp-dlg-text p-mb-6 para-regular-2"></p>
';
        $buffer .= $indent . '    <div class="d-flex flex-row-reverse flex-gap-1">
';
        $buffer .= $indent . '        <button class="fp-dlg-butconfirm btn-primary btn">';
        $value = $context->find('str');
        $buffer .= $this->sectionBffcc11c55b131e93962e74edf8be01e($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button class="fp-dlg-butcancel btn-secondary btn">';
        $value = $context->find('str');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBffcc11c55b131e93962e74edf8be01e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ok';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ok';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
