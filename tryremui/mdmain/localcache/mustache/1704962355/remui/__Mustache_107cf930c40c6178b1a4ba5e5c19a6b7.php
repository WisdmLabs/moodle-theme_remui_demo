<?php

class __Mustache_107cf930c40c6178b1a4ba5e5c19a6b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('urls.noevents');
        $buffer .= $this->section128b8e3929ae73d0d6c1d5724a88f3f0($context, $indent, $value);

        return $buffer;
    }

    private function sectionFf0ce8396ade5e121c84fd7cc79d9463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timelinenoevenettext, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' timelinenoevenettext, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section128b8e3929ae73d0d6c1d5724a88f3f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="hidden text-xs-center text-center" data-region="no-events-empty-message">
    <div class="empty-content-wrapper d-flex flex-column justify-content-center align-items-center flex-gap-4">
        <span class="edw-icon edw-icon-No-Activity1"></span>
        <p class=" para-semibold-3 m-0">{{#str}} timelinenoevenettext, theme_remui {{/str}}</p>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="hidden text-xs-center text-center" data-region="no-events-empty-message">
';
                $buffer .= $indent . '    <div class="empty-content-wrapper d-flex flex-column justify-content-center align-items-center flex-gap-4">
';
                $buffer .= $indent . '        <span class="edw-icon edw-icon-No-Activity1"></span>
';
                $buffer .= $indent . '        <p class=" para-semibold-3 m-0">';
                $value = $context->find('str');
                $buffer .= $this->sectionFf0ce8396ade5e121c84fd7cc79d9463($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
