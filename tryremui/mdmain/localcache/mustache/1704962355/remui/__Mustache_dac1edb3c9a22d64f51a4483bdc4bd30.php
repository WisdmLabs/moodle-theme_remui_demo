<?php

class __Mustache_dac1edb3c9a22d64f51a4483bdc4bd30 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="calendar-upcoming-block-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-template="core_calendar/upcoming_mini">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/upcoming_mini')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('isloggedin');
        $buffer .= $this->section23a9bb644a171b4fd929f62c31637b58($context, $indent, $value);

        return $buffer;
    }

    private function sectionBe92dededa6a23b09887ba9f360057a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-{{uniqid}}"), \'upcoming\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
';
                $buffer .= $indent . '    CalendarView.init($("#calendar-upcoming-block-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"), \'upcoming\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23a9bb644a171b4fd929f62c31637b58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#calendar-upcoming-block-{{uniqid}}"), \'upcoming\');
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->sectionBe92dededa6a23b09887ba9f360057a4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
