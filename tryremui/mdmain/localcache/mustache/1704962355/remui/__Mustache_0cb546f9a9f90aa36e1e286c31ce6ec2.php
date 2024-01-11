<?php

class __Mustache_0cb546f9a9f90aa36e1e286c31ce6ec2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="simplesearchform edw-search-field  mb-0">
';
        $buffer .= $indent . '    <form autocomplete="off" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="get" accept-charset="utf-8"
';
        $buffer .= $indent . '    class="mform form-inline simplesearchform searchform-navbar mb-0">
';
        $buffer .= $indent . '        <div class="input-group align-items-center bg-white ">
';
        $buffer .= $indent . '            <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <div class="input-group-prepend">
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-submit">
';
        $buffer .= $indent . '                    <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <input type="text" id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-control withclear navigation-text"
';
        $buffer .= $indent . '            placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '" name="query"
';
        $buffer .= $indent . '            data-region="input" autocomplete="off" ';
        $value = $context->find('query');
        $buffer .= $this->section19415be2a0237a6228c81cfd16b8f479($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9dbf37a0f544ff636ac78cdadec0a0c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19415be2a0237a6228c81cfd16b8f479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'value="{{.}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'value="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
