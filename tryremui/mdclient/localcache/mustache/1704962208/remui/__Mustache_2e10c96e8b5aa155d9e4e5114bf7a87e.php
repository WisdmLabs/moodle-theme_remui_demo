<?php

class __Mustache_2e10c96e8b5aa155d9e4e5114bf7a87e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('overview.messageurl');
        $buffer .= $this->sectionE17d9ea6199d1f2de297fb5495802187($context, $indent, $value);

        return $buffer;
    }

    private function sectionA66c69093db49656d03b61ec97795dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' seeall, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' seeall, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE17d9ea6199d1f2de297fb5495802187(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="view-overview" class="text-center r-p-3d5">
        <a class="h-semibold-6 edw-header-color" href="{{overview.messageurl}}">
            {{#str}} seeall, core_message {{/str}}
        </a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-region="view-overview" class="text-center r-p-3d5">
';
                $buffer .= $indent . '        <a class="h-semibold-6 edw-header-color" href="';
                $value = $this->resolveValue($context->findDot('overview.messageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA66c69093db49656d03b61ec97795dc2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
