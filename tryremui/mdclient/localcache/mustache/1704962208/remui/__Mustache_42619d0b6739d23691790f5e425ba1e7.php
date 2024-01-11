<?php

class __Mustache_42619d0b6739d23691790f5e425ba1e7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="recent_assignments">
';
            $buffer .= $indent . '<table class="table">
';
            $buffer .= $indent . '    <thead>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '    </thead>
';
            $buffer .= $indent . '    <tbody>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '    </tbody>
';
            $buffer .= $indent . '</table>
';
            $buffer .= $indent . '</div>
';
            $value = $context->find('js');
            $buffer .= $this->section61ffb1ce8215f360315271cebc01a7dd($context, $indent, $value);
        }

        return $buffer;
    }

    private function section61ffb1ce8215f360315271cebc01a7dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/recent_feedbacks\'], function(recentFeedbacks) {
  recentFeedbacks.init(\'#recent_assignments\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/recent_feedbacks\'], function(recentFeedbacks) {
';
                $buffer .= $indent . '  recentFeedbacks.init(\'#recent_assignments\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
