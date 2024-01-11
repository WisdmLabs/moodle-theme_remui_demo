<?php

class __Mustache_6a5880567d1a6fc49df0781d9966b0fe extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="latest_members">
';
            $buffer .= $indent . '    <ul class="users-list row">
';
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
            $value = $context->find('js');
            $buffer .= $this->section8751c4c4a9b1b89ccaafcd891908f1d4($context, $indent, $value);
        }

        return $buffer;
    }

    private function section8751c4c4a9b1b89ccaafcd891908f1d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/latest_members\'], function(latestMembers) {
    latestMembers.init(\'#latest_members\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/latest_members\'], function(latestMembers) {
';
                $buffer .= $indent . '    latestMembers.init(\'#latest_members\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
