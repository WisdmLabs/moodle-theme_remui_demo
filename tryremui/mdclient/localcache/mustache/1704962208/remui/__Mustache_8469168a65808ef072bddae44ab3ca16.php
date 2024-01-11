<?php

class __Mustache_8469168a65808ef072bddae44ab3ca16 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('items');
        $buffer .= $this->section14fc2c658926075c6cf6d264990d8830($context, $indent, $value);

        return $buffer;
    }

    private function section94d274c861cee086ea316add2f8964e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="edw-icon {{profileicon}}"></span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="edw-icon ';
                $value = $this->resolveValue($context->find('profileicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23af091fd3f4b163335e21746eca9cc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{pixicon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('pixicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9625f345c43cbf47695087ebad2af59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}}{{pixicon}}{{/pix}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section23af091fd3f4b163335e21746eca9cc0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf431fdbd0299f52bc9f89b1771f516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img aria-hidden="true" src="{{imgsrc}}" alt="{{title}}"/>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img aria-hidden="true" src="';
                $value = $this->resolveValue($context->find('imgsrc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section032bbca5e8b1e9216a4d70ef03b4c419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{{url}}}" class="dropdown-item" role="menuitem" tabindex="-1" title="{{title}}">
            {{#profileicon}}<span class="edw-icon {{profileicon}}"></span>{{/profileicon}}

            {{^profileicon}}
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{title}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{/profileicon}}
            {{title}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="dropdown-item" role="menuitem" tabindex="-1" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('profileicon');
                $buffer .= $this->section94d274c861cee086ea316add2f8964e2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $value = $context->find('profileicon');
                if (empty($value)) {
                    
                    $value = $context->find('pixicon');
                    $buffer .= $this->sectionD9625f345c43cbf47695087ebad2af59($context, $indent, $value);
                    $value = $context->find('pixicon');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                ';
                        $value = $context->find('imgsrc');
                        $buffer .= $this->section3cf431fdbd0299f52bc9f89b1771f516($context, $indent, $value);
                        $buffer .= '
';
                    }
                }
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1bae510be5c7dbd13c2b1dd25bfa451(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#" class="carousel-navigation-link dropdown-item" role="menuitem" tabindex="-1" data-carousel-target-id="carousel-item-{{submenuid}}" title="{{title}}">
            {{#profileicon}}<span class="edw-icon {{profileicon}}"></span>{{/profileicon}}
            {{^profileicon}}
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{title}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{/profileicon}}
            {{title}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="#" class="carousel-navigation-link dropdown-item" role="menuitem" tabindex="-1" data-carousel-target-id="carousel-item-';
                $value = $this->resolveValue($context->find('submenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('profileicon');
                $buffer .= $this->section94d274c861cee086ea316add2f8964e2($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('profileicon');
                if (empty($value)) {
                    
                    $value = $context->find('pixicon');
                    $buffer .= $this->sectionD9625f345c43cbf47695087ebad2af59($context, $indent, $value);
                    $value = $context->find('pixicon');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                ';
                        $value = $context->find('imgsrc');
                        $buffer .= $this->section3cf431fdbd0299f52bc9f89b1771f516($context, $indent, $value);
                        $buffer .= '
';
                    }
                }
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dcadd4c046d6ae7246de01cd0536384(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="dropdown-divider"></div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="dropdown-divider"></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14fc2c658926075c6cf6d264990d8830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#link}}
        <a href="{{{url}}}" class="dropdown-item" role="menuitem" tabindex="-1" title="{{title}}">
            {{#profileicon}}<span class="edw-icon {{profileicon}}"></span>{{/profileicon}}

            {{^profileicon}}
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{title}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{/profileicon}}
            {{title}}
        </a>
    {{/link}}
    {{#submenulink}}
        <a href="#" class="carousel-navigation-link dropdown-item" role="menuitem" tabindex="-1" data-carousel-target-id="carousel-item-{{submenuid}}" title="{{title}}">
            {{#profileicon}}<span class="edw-icon {{profileicon}}"></span>{{/profileicon}}
            {{^profileicon}}
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{title}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{/profileicon}}
            {{title}}
        </a>
    {{/submenulink}}
    {{#divider}}<div class="dropdown-divider"></div>{{/divider}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('link');
                $buffer .= $this->section032bbca5e8b1e9216a4d70ef03b4c419($context, $indent, $value);
                $value = $context->find('submenulink');
                $buffer .= $this->sectionD1bae510be5c7dbd13c2b1dd25bfa451($context, $indent, $value);
                $buffer .= $indent . '    ';
                $value = $context->find('divider');
                $buffer .= $this->section5dcadd4c046d6ae7246de01cd0536384($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
