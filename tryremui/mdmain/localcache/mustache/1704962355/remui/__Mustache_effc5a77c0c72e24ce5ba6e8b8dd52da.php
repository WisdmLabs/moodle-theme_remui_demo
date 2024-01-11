<?php

class __Mustache_effc5a77c0c72e24ce5ba6e8b8dd52da extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="month-navigation-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="controls">
';
        $buffer .= $indent . '    <div class="calendar-controls mainarea-view">
';
        $buffer .= $indent . '        <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('previousperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="edw-icon-container arrow_link previous"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section79d01ec0a9380fe9e2b8dce0d84217d2($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="arrow_text desktop-content edw-icon large edw-icon-Square-Arrow_left"  aria-label="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '            <span class="arrow_text mobile-content edw-icon large edw-icon-Left-Arrow"  aria-label="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <h4 class="current desktop-content para-semibold-2 mb-0">';
        $value = $this->resolveValue($context->find('periodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <h4 class="current mobile-content h-semibold-5 mb-0">';
        $value = $this->resolveValue($context->find('periodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('nextperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="edw-icon-container arrow_link next"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section2bdd9bdfb552b2c9a443cb6030f28476($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="arrow_text desktop-content edw-icon large edw-icon-Square-Arrow_Right"></span>
';
        $buffer .= $indent . '            <span class="arrow_text mobile-content edw-icon large edw-icon-Right-Arrow"></span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="calendar-controls d-flex align-items-center justify-content-between p-p-4  sidebar-view">
';
        $buffer .= $indent . '        <h4 class="current h-semibold-5 mb-0">';
        $value = $this->resolveValue($context->find('periodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <div class="d-flex flex-gap-1">
';
        $buffer .= $indent . '            <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('previousperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="edw-icon-container arrow_link previous"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section79d01ec0a9380fe9e2b8dce0d84217d2($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '                <span class="arrow_text edw-icon large edw-icon-Left-Arrow"  aria-label="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('nextperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="edw-icon-container arrow_link next"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section2bdd9bdfb552b2c9a443cb6030f28476($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '                <span class="arrow_text edw-icon large edw-icon-Right-Arrow"></span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionD2a4d54646a4b8d37b100c1136d773d0($context, $indent, $value);

        return $buffer;
    }

    private function section79d01ec0a9380fe9e2b8dce0d84217d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthprev, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthprev, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdd9bdfb552b2c9a443cb6030f28476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthnext, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthnext, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2a4d54646a4b8d37b100c1136d773d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/month_navigation_drag_drop\'], function($, DragDrop) {
    var root = $(\'#month-navigation-{{uniqid}}-{{calendarinstanceid}}\');
    DragDrop.init(root);
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/month_navigation_drag_drop\'], function($, DragDrop) {
';
                $buffer .= $indent . '    var root = $(\'#month-navigation-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    DragDrop.init(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
