<?php

class __Mustache_932a482e94b215f896c0d00b5d7b04a3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hidden view-search" ';
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= ' aria-hidden="true" data-region="view-search">
';
        $buffer .= $indent . '    <div class="d-flex align-items-center view-search-header-wrapper">
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="d-flex align-items-center  view-icon-back-in text-decoration-none"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-route-back
';
        $buffer .= $indent . '            data-action="cancel-search"
';
        $buffer .= $indent . '            role="button"
';
        $buffer .= $indent . '        >
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_icon_back')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <div class="simplesearchform edw-search-field" >
';
        $buffer .= $indent . '            <div class="input-group">
';
        $buffer .= $indent . '                <label for="message-searchinput-overview">
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                <div class="input-group-prepend">
';
        $buffer .= $indent . '                    <button type="button" class="btn btn-submit" data-action="search" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <input type="text" class="form-control withclear navigation-text align-self-center" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '" data-region="search-input" title="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="hidden" data-region="loading-icon-container" >
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section507b9f28a10a9aed70b7b7a308c6a3ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core_search ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, core_search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
