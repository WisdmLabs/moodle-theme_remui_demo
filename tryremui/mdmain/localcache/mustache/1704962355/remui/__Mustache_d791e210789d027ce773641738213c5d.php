<?php

class __Mustache_d791e210789d027ce773641738213c5d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('pagelayout_frontpage');
        $buffer .= $this->section164a9a247647e1bf2b6c12365d611aed($context, $indent, $value);

        return $buffer;
    }

    private function section164a9a247647e1bf2b6c12365d611aed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="frontpage-sections container-fluid p-0">
    {{> theme_remui/frontpage_legacy_slider}}
    {{> theme_remui/frontpage_legacy_aboutus}}
    {{> theme_remui/frontpage_legacy_testimonials}}
    {{> theme_remui/frontpage_legacy_blogs}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="frontpage-sections container-fluid p-0">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/frontpage_legacy_slider')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_remui/frontpage_legacy_aboutus')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_remui/frontpage_legacy_testimonials')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                if ($partial = $this->mustache->loadPartial('theme_remui/frontpage_legacy_blogs')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
