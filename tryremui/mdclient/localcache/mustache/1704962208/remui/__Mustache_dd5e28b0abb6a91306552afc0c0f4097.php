<?php

class __Mustache_dd5e28b0abb6a91306552afc0c0f4097 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="bottom border-0 d-flex justify-content-end flex-gap-2 ">
';
        $value = $context->find('footerlinks');
        $buffer .= $this->section1a47bb3ad1e306c5d93ebac8aa66cc5e($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1a47bb3ad1e306c5d93ebac8aa66cc5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="footer-link">
            <a class="btn btn-secondary btn-sm" href="{{url}}">{{linkname}}</a>
        </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="footer-link">
';
                $buffer .= $indent . '            <a class="btn btn-secondary btn-sm" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('linkname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
