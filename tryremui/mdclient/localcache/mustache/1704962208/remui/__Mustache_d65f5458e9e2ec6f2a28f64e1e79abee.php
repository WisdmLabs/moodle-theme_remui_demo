<?php

class __Mustache_d65f5458e9e2ec6f2a28f64e1e79abee extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="icon-back-in-drawer">
';
        $buffer .= $indent . '    <span class="h-100 w-100 justify-content-center align-items-center dir-rtl-hide"><span class="edw-icon edw-icon-Left-Arrow"></span></span>
';
        $buffer .= $indent . '    <span class="h-100 w-100 justify-content-center align-items-center dir-ltr-hide"><span class="edw-icon edw-icon-Right-Arrow"></span></span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="icon-back-in-app">
';
        $buffer .= $indent . '    <span class="h-100 w-100 justify-content-center align-items-center dir-rtl-hide"><span class="edw-icon edw-icon-Cancel"></span></span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
