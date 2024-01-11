<?php

class __Mustache_a3fde6096c97a59133de2113b3c4e08a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('editing');
        $buffer .= $this->sectionEea4f5df58176fce675e65cd14205473($context, $indent, $value);

        return $buffer;
    }

    private function sectionBd91755402457eefec1e1e12ab9088e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addblock, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addblock, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cc7de706c3f5092e9888d8fd4a889bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="#" class="dropdown-item btn btn-lg {{region}}-link" data-region="{{regionid}}"><span class="edw-icon edw-icon-Check p-mr-1"></span><span class="region-name-text">{{regionname}}</span></a>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="#" class="dropdown-item btn btn-lg ';
                $value = $this->resolveValue($context->find('region'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-link" data-region="';
                $value = $this->resolveValue($context->find('regionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span class="edw-icon edw-icon-Check p-mr-1"></span><span class="region-name-text">';
                $value = $this->resolveValue($context->find('regionname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fc5ffb584bb717190b696b7f6a5b7ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\',\'theme_remui/floating_add_block_handler\'], function($,FLOATADDBLOCKHANLDER){
        $(document).ready(function(){
            FLOATADDBLOCKHANLDER.init();
        });
    });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\',\'theme_remui/floating_add_block_handler\'], function($,FLOATADDBLOCKHANLDER){
';
                $buffer .= $indent . '        $(document).ready(function(){
';
                $buffer .= $indent . '            FLOATADDBLOCKHANLDER.init();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEea4f5df58176fce675e65cd14205473(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="position-relative">
    <div id="add-block-float-menu" class="floating-widget">
        <div class="btn-group dropup">
            <a class="btn btn-dark btn-lg d-flex align-items-center justify-content-center floating-add-block-button"  title="Add a block button"   type="button">
                {{! <span class="edw-icon edw-icon-brush large p-mr-1"></span> }}
                <span class="edw-icon edw-icon-Plus_24"></span>
                <span>{{#str}}addblock, moodle{{/str}}</span>
            </a>
            <button type="button" class="btn btn-lg btn-dark dropdown-toggle dropdown-toggle-split add-block-split-icon-btn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                <span class="edw-icon edw-icon-UpArrow large d-none"></span>
                <span class="edw-icon edw-icon-Down-Arrow large"></span>
            </button>
            <div class="dropdown-menu">
               {{#regiondata}}
                    <a href="#" class="dropdown-item btn btn-lg {{region}}-link" data-region="{{regionid}}"><span class="edw-icon edw-icon-Check p-mr-1"></span><span class="region-name-text">{{regionname}}</span></a>
               {{/regiondata}}
            </div>
        </div>
    </div>
</div>
    {{#js}}
    require([\'jquery\',\'theme_remui/floating_add_block_handler\'], function($,FLOATADDBLOCKHANLDER){
        $(document).ready(function(){
            FLOATADDBLOCKHANLDER.init();
        });
    });
    {{/js}}

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="position-relative">
';
                $buffer .= $indent . '    <div id="add-block-float-menu" class="floating-widget">
';
                $buffer .= $indent . '        <div class="btn-group dropup">
';
                $buffer .= $indent . '            <a class="btn btn-dark btn-lg d-flex align-items-center justify-content-center floating-add-block-button"  title="Add a block button"   type="button">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Plus_24"></span>
';
                $buffer .= $indent . '                <span>';
                $value = $context->find('str');
                $buffer .= $this->sectionBd91755402457eefec1e1e12ab9088e4($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <button type="button" class="btn btn-lg btn-dark dropdown-toggle dropdown-toggle-split add-block-split-icon-btn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
                $buffer .= $indent . '                <span class="sr-only">Toggle Dropdown</span>
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-UpArrow large d-none"></span>
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Down-Arrow large"></span>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '            <div class="dropdown-menu">
';
                $value = $context->find('regiondata');
                $buffer .= $this->section9cc7de706c3f5092e9888d8fd4a889bb($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $value = $context->find('js');
                $buffer .= $this->section9fc5ffb584bb717190b696b7f6a5b7ae($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
