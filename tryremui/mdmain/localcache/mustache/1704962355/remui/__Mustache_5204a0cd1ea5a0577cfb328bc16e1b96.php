<?php

class __Mustache_5204a0cd1ea5a0577cfb328bc16e1b96 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('defaulteventcontext');
        $buffer .= $this->sectionD65a30a4975da7f5fdef31080ae18b7f($context, $indent, $value);

        return $buffer;
    }

    private function section17f3d1ab55887b273f62f9f7fe44e71b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newevent, core_calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'newevent, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD65a30a4975da7f5fdef31080ae18b7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button{{!
    }} class="btn btn-primary"{{!
    }} data-context-id="{{defaulteventcontext}}"{{!
    }} data-action="new-event-button"{{!
    }}>
    {{#str}}newevent, core_calendar{{/str}}
</button>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<button';
                $buffer .= ' class="btn btn-primary"';
                $buffer .= ' data-context-id="';
                $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= ' data-action="new-event-button"';
                $buffer .= '>
';
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->section17f3d1ab55887b273f62f9f7fe44e71b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
