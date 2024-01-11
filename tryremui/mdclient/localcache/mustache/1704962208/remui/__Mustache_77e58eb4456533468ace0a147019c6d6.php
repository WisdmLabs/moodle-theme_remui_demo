<?php

class __Mustache_77e58eb4456533468ace0a147019c6d6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hidden " aria-hidden="true" data-region="view-contacts">
';
        $buffer .= $indent . '    <div class="d-flex align-items-center justify-content-between contacts-header-wrapper">
';
        $buffer .= $indent . '        <div class="d-flex msg-backicon-searchbox-wrapper">
';
        $value = $context->find('isdrawer');
        $buffer .= $this->section902c8e931b628e7a0dc94e248b2a7123($context, $indent, $value);
        $buffer .= $indent . '            <div class="msg-contact-header h-semibold-4">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section3164d40d409f55a2719829efc68aaf95($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="contact-searchicon">
';
        $buffer .= $indent . '            <a class="d-inline-block text-decoration-none" href="#" data-route="view-search" role="button" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section902c8e931b628e7a0dc94e248b2a7123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="align-self-stretch">
                <a class="h-100 d-flex align-items-center back-icon text-decoration-none" href="#" data-route-back role="button">
                    {{> core_message/message_drawer_icon_back }}
                </a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="align-self-stretch">
';
                $buffer .= $indent . '                <a class="h-100 d-flex align-items-center back-icon text-decoration-none" href="#" data-route-back role="button">
';
                if ($partial = $this->mustache->loadPartial('core_message/message_drawer_icon_back')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3164d40d409f55a2719829efc68aaf95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allcontacts, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' allcontacts, theme_remui ';
                $context->pop();
            }
        }
    
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
