<?php

class __Mustache_97b446c44b7bbcb4b03d4d59c9361daf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex fieldset-header">
';
        $buffer .= $indent . '    <div class="position-relative d-flex ftoggler justify-content-between align-items-center w-100 ';
        $value = $context->find('header');
        $buffer .= $this->sectionA25cbd30c7ffb07034bc9c5240546b87($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <h3 class="d-flex align-self-stretch align-items-center m-0 fieldset-title" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('helpbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </h3>
';
        $value = $context->find('collapseable');
        $buffer .= $this->sectionD8a076a4df53f093b7a358db452343ed($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'container" class=" p-py-lg-8 p-py-md-6 p-py-4 pt-0 fcontainer ';
        $value = $context->find('collapseable');
        $buffer .= $this->sectionFf0fe0910fea799e597d74360fc85a68($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('collapsed');
        if (empty($value)) {
            
            $buffer .= 'show';
        }
        $buffer .= '">
';

        return $buffer;
    }

    private function sectionA25cbd30c7ffb07034bc9c5240546b87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'p-py-lg-8 p-py-md-6 p-py-4';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'p-py-lg-8 p-py-md-6 p-py-4';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7df0e231697f3a9dfdd1138e1b79a2b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8a076a4df53f093b7a358db452343ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a data-toggle="collapse"
               href="#{{id}}container"
               role="button"
               aria-expanded="{{#collapsed}}false{{/collapsed}}{{^collapsed}}true{{/collapsed}}"
               aria-controls="{{id}}container"
               class="p-0 btn icons-collapse-expand stretched-link fheader {{#collapsed}}collapsed{{/collapsed}}"
            >
                <span class="expanded-icon icon-no-margin" title="{{#str}} collapse, core {{/str}}">
                    <span class="edw-icon edw-icon-Down-Arrow"></span>
                </span>
                <span class="collapsed-icon icon-no-margin" title="{{#str}} expand, core {{/str}}">
                    <span class="dir-rtl-hide"><span class="edw-icon edw-icon-Right-Arrow"></span></span>
                    <span class="dir-ltr-hide"><span class="edw-icon edw-icon-Left-Arrow"></span></span>
                </span>
                <span class="sr-only">{{{header}}}</span>
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a data-toggle="collapse"
';
                $buffer .= $indent . '               href="#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'container"
';
                $buffer .= $indent . '               role="button"
';
                $buffer .= $indent . '               aria-expanded="';
                $value = $context->find('collapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $value = $context->find('collapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'container"
';
                $buffer .= $indent . '               class="p-0 btn icons-collapse-expand stretched-link fheader ';
                $value = $context->find('collapsed');
                $buffer .= $this->section7df0e231697f3a9dfdd1138e1b79a2b0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                <span class="expanded-icon icon-no-margin" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="edw-icon edw-icon-Down-Arrow"></span>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="collapsed-icon icon-no-margin" title="';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide"><span class="edw-icon edw-icon-Right-Arrow"></span></span>
';
                $buffer .= $indent . '                    <span class="dir-ltr-hide"><span class="edw-icon edw-icon-Left-Arrow"></span></span>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="sr-only">';
                $value = $this->resolveValue($context->find('header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf0fe0910fea799e597d74360fc85a68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapseable collapse ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapseable collapse ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
