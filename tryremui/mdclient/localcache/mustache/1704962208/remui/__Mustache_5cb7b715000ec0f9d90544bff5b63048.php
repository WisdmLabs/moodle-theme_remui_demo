<?php

class __Mustache_5cb7b715000ec0f9d90544bff5b63048 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="w-100">
';
        $buffer .= $indent . '    <div id="searchform-auto-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-inline simplesearchform edw-timeline-search-filter">
';
        $buffer .= $indent . '        <div class="align-items-center border border-1 d-flex justify-content-center rounded searchbar" role="search">
';
        $buffer .= $indent . '            <label for="searchinput">
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionA2d7da69df8fa846e491f9b472fc55cf($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <label class="search-icon d-flex px-2 mb-0">
';
        $buffer .= $indent . '                <i class="edw-icon edw-icon-Search"></i>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                data-region="input"
';
        $buffer .= $indent . '                data-action="search"
';
        $buffer .= $indent . '                id="searchinput"
';
        $buffer .= $indent . '                class="form-control withclear border-0 bg-transparent"
';
        $buffer .= $indent . '                placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section9725e66ab1fd184e85ae26687c0094d0($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                title="';
        $value = $context->find('str');
        $buffer .= $this->section9725e66ab1fd184e85ae26687c0094d0($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                name="search"
';
        $buffer .= $indent . '                value=""
';
        $buffer .= $indent . '                autocomplete="off"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '            <button
';
        $buffer .= $indent . '                class="btn btn-clear d-none"
';
        $buffer .= $indent . '                data-action="clearsearch"
';
        $buffer .= $indent . '                type="button"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section01a1cb688132d57fc41f0070a1ef998d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section40e9cf3a64788ffede70afd9139160c8($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA2d7da69df8fa846e491f9b472fc55cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchevents, block_timeline';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchevents, block_timeline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9725e66ab1fd184e85ae26687c0094d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    searchevents, block_timeline
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                    searchevents, block_timeline
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01a1cb688132d57fc41f0070a1ef998d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/cancel, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/cancel, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40e9cf3a64788ffede70afd9139160c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clearsearch, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clearsearch, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
