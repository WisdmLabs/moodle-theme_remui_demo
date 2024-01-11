<?php

class __Mustache_5f44df88b487174c819ff8a6693cf79c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('additionaloptions');
        $buffer .= $this->sectionDf93cdd9b32ea2bd389d86ba2ad74663($context, $indent, $value);

        return $buffer;
    }

    private function section11352dffef15d7c7875602ba40556abd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moreactions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moreactions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74abb3cc60ffe12f30c02419e1664972(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moremenu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moremenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf4ff67e1dfde0b1f4e34bf1149bc158(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}" {{/attributes}} href="{{url}}"
                tabindex="-1">{{string}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a role="menuitem" class="dropdown-item" ';
                $value = $context->find('attributes');
                $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                tabindex="-1">';
                $value = $this->resolveValue($context->find('string'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf93cdd9b32ea2bd389d86ba2ad74663(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="dropdown nav-item">
        <button aria-label="{{#str}}moreactions{{/str}}" class="btn dropdown-toggle" id="dropdown-actions"
            data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
            {{#str}}moremenu{{/str}}
        </button>

        <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
            {{#options}}
            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}" {{/attributes}} href="{{url}}"
                tabindex="-1">{{string}}</a>
            {{/options}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="dropdown nav-item">
';
                $buffer .= $indent . '        <button aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section11352dffef15d7c7875602ba40556abd($context, $indent, $value);
                $buffer .= '" class="btn dropdown-toggle" id="dropdown-actions"
';
                $buffer .= $indent . '            data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section74abb3cc60ffe12f30c02419e1664972($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
';
                $value = $context->find('options');
                $buffer .= $this->sectionEf4ff67e1dfde0b1f4e34bf1149bc158($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
