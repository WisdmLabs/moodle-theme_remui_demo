<?php

class __Mustache_2d44e0d2affaef21afe25b83950614ec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="footerdata">
';
        $value = $context->find('sections');
        $buffer .= $this->section93d5ce82aef97919df5fef0489a2dd57($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<hr class="d-block mb-0">
';

        return $buffer;
    }

    private function section9e4e57ccbaa34533dce4428148ad874f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{classes}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b0ec207322d0def2142b2c85260e73d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88fd2776de66a267caed7193a37b5e94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h6 class="h-regular-6 mb-0"><a target="_blank" href="{{address}}" >{{text}}</a></h6>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h6 class="h-regular-6 mb-0"><a target="_blank" href="';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" >';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h6>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC05ece6d58e95b503e81498425a70b87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="contenthtml">
                <h6 class="h-semibold-6 mb-0 ftr-column-title" >{{{title}}}</h6>
                <hr class="d-sm-block d-md-none my-0">
                <div class="section-html-content">
                   <p class="p-0 m-0">
                    {{{content}}}
                   </p>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="contenthtml">
';
                $buffer .= $indent . '                <h6 class="h-semibold-6 mb-0 ftr-column-title" >';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                <hr class="d-sm-block d-md-none my-0">
';
                $buffer .= $indent . '                <div class="section-html-content">
';
                $buffer .= $indent . '                   <p class="p-0 m-0">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                   </p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3065a7a6f731f2bd4d4c0bd4d8f6c999(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{link}}" class="{{class}} text-decoration-none" title="{{title}}"><i class="{{icon}}"></i></a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' text-decoration-none" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14500c75ebed6d01addb3a88ef5e4130(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="contentsocial social-links {{^socialiconvisibility}}d-none{{/socialiconvisibility}}">
                {{#social}}
                <a href="{{link}}" class="{{class}} text-decoration-none" title="{{title}}"><i class="{{icon}}"></i></a>
                {{/social}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="contentsocial social-links ';
                $value = $context->find('socialiconvisibility');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $value = $context->find('social');
                $buffer .= $this->section3065a7a6f731f2bd4d4c0bd4d8f6c999($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93d5ce82aef97919df5fef0489a2dd57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="footer-column-{{coulumnid}}" class="footer-section-wrapper {{#classes}}{{classes}}{{/classes}}" style="">
        <div class="footer-menu menu-{{orientation}} {{#customhtml}}d-none{{/customhtml}}">
            <h6 class="h-semibold-6 mb-0 ftr-column-title" >{{{ title }}}</h6>
            <hr class="d-sm-block d-md-none my-0 ">
            <div class="footer-menu-list">
                {{#menu}}
                <h6 class="h-regular-6 mb-0"><a target="_blank" href="{{address}}" >{{text}}</a></h6>
                {{/menu}}
            </div>
        </div>

        <div class="custom-html {{^customhtml}}d-none{{/customhtml}}">
            {{#hascontenthtml}}
            <div class="contenthtml">
                <h6 class="h-semibold-6 mb-0 ftr-column-title" >{{{title}}}</h6>
                <hr class="d-sm-block d-md-none my-0">
                <div class="section-html-content">
                   <p class="p-0 m-0">
                    {{{content}}}
                   </p>
                </div>
            </div>
            {{/hascontenthtml}}
            {{#hassocial}}
            <div class="contentsocial social-links {{^socialiconvisibility}}d-none{{/socialiconvisibility}}">
                {{#social}}
                <a href="{{link}}" class="{{class}} text-decoration-none" title="{{title}}"><i class="{{icon}}"></i></a>
                {{/social}}
            </div>
            {{/hassocial}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="footer-column-';
                $value = $this->resolveValue($context->find('coulumnid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="footer-section-wrapper ';
                $value = $context->find('classes');
                $buffer .= $this->section9e4e57ccbaa34533dce4428148ad874f($context, $indent, $value);
                $buffer .= '" style="">
';
                $buffer .= $indent . '        <div class="footer-menu menu-';
                $value = $this->resolveValue($context->find('orientation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('customhtml');
                $buffer .= $this->section3b0ec207322d0def2142b2c85260e73d($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h6 class="h-semibold-6 mb-0 ftr-column-title" >';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '            <hr class="d-sm-block d-md-none my-0 ">
';
                $buffer .= $indent . '            <div class="footer-menu-list">
';
                $value = $context->find('menu');
                $buffer .= $this->section88fd2776de66a267caed7193a37b5e94($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="custom-html ';
                $value = $context->find('customhtml');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $value = $context->find('hascontenthtml');
                $buffer .= $this->sectionC05ece6d58e95b503e81498425a70b87($context, $indent, $value);
                $value = $context->find('hassocial');
                $buffer .= $this->section14500c75ebed6d01addb3a88ef5e4130($context, $indent, $value);
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
