<?php

class __Mustache_1701eb74ebd78b08c7bbba072445c61c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div ';
        $buffer .= ' class="';
        $blockFunction = $context->findInBlock('drawerclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= ' d-print-none not-initialized"';
        $buffer .= ' data-region="fixed-drawer"';
        $buffer .= ' id="';
        $blockFunction = $context->findInBlock('id');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"';
        $buffer .= ' data-preference="';
        $blockFunction = $context->findInBlock('drawerpreferencename');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"';
        $buffer .= ' data-state="';
        $blockFunction = $context->findInBlock('drawerstate');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"';
        $buffer .= ' data-forceopen="';
        $blockFunction = $context->findInBlock('forceopen');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= '0';
        }
        $buffer .= '"';
        $buffer .= ' data-close-on-resize="';
        $blockFunction = $context->findInBlock('drawercloseonresize');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= '0';
        }
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="drawerheader">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand align-items-center m-0 aabtn" aria-label="';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' - ';
        $value = $context->find('str');
        $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->findDot('output.get_branding_context');
        $buffer .= $this->sectionF320eb9a054626c2aeb01a4e65f7f13e($context, $indent, $value);
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn drawertoggle icon-no-margin hidden d-flex"
';
        $buffer .= $indent . '            data-toggler="drawers"
';
        $buffer .= $indent . '            data-action="closedrawer"
';
        $buffer .= $indent . '            data-target="';
        $blockFunction = $context->findInBlock('id');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '            data-toggle="tooltip"
';
        $buffer .= $indent . '            data-placement="';
        $blockFunction = $context->findInBlock('tooltipplacement');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'right';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            title="';
        $blockFunction = $context->findInBlock('closebuttontext');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('str');
            $buffer .= $this->section36783d1fe3b25f68270791f3280502a0($context, $indent, $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <span class="edw-icon edw-icon-Cancel"></span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="drawercontent drag-container" data-usertour="scroller">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('drawercontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionFd3a3cef07a00986ddfbee26b90481ca($context, $indent, $value);

        return $buffer;
    }

    private function sectionAa3229971a02cbf04b1b4dc2fd0ff1b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'brandname, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'brandname, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb1e2e9ef687991a09df078efa0da549(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img src="{{ logourl }}" class="navbar-brand-logo logo">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logo">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49003938d61ef57445814fba560d6c60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img src="{{ logominiurl }}" class="navbar-brand-logo logomini">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('logominiurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logomini">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfba307b4077a743bc2fe6d0cf3596a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="navbar-brand-logo icononly" style="color: {{color}};">
                        <i class="fa fa-{{siteicon}}"></i>
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="navbar-brand-logo icononly" style="color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                        <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d5d706a419970f41185e3bed9f73f77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="navbar-brand-logo iconsitename" style="color: {{color}};">
                        <i class="fa fa-{{siteicon}}"></i>&nbsp;
                        {{{ sitename }}}
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="navbar-brand-logo iconsitename" style="color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                        <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>&nbsp;
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF320eb9a054626c2aeb01a4e65f7f13e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#logourl}}
                    <img src="{{ logourl }}" class="navbar-brand-logo logo">
                {{/logourl}}

                {{#logominiurl}}
                    <img src="{{ logominiurl }}" class="navbar-brand-logo logomini">
                {{/logominiurl}}

                {{#icononly}}
                    <span class="navbar-brand-logo icononly" style="color: {{color}};">
                        <i class="fa fa-{{siteicon}}"></i>
                    </span>
                {{/icononly}}

                {{#iconwithsitename}}
                    <span class="navbar-brand-logo iconsitename" style="color: {{color}};">
                        <i class="fa fa-{{siteicon}}"></i>&nbsp;
                        {{{ sitename }}}
                    </span>
                {{/iconwithsitename}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->sectionFb1e2e9ef687991a09df078efa0da549($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logominiurl');
                $buffer .= $this->section49003938d61ef57445814fba560d6c60($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('icononly');
                $buffer .= $this->sectionDfba307b4077a743bc2fe6d0cf3596a5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('iconwithsitename');
                $buffer .= $this->section8d5d706a419970f41185e3bed9f73f77($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36783d1fe3b25f68270791f3280502a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closedrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closedrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd3a3cef07a00986ddfbee26b90481ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/drawers\']);
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_remui/drawers\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
