<?php

class __Mustache_21d7d511719ceff3efaf05b596d6a245 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="popover-region collapsed popover-region-message" id="nav-message-popover-container" data-region="popover-region-messages">
';
        $buffer .= $indent . '    <a id="message-drawer-toggle-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="nav-link popover-region-toggle position-relative icon-no-margin" href="#"
';
        $buffer .= $indent . '            role="button">
';
        $buffer .= $indent . '        ';
        $value = $context->find('pix');
        $buffer .= $this->sectionAb38a1c1b6aa5e4850d7c5aa9c0530f6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div
';
        $buffer .= $indent . '            class="count-container ';
        $value = $context->find('unreadcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            data-region="count-container"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <span aria-hidden="true">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionFa23ba6f88204e1ae20c4d35663caf0c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </a>
';
        if ($partial = $this->mustache->loadPartial('core_message/message_jumpto')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section458006f38c09d12d7e209efa8764f6b1($context, $indent, $value);

        return $buffer;
    }

    private function sectionB69af701c3da068c4b63a9d598702913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemessagemenu, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglemessagemenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb38a1c1b6aa5e4850d7c5aa9c0530f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/message, core, {{#str}} togglemessagemenu, message {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/message, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa23ba6f88204e1ae20c4d35663caf0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unreadconversations, core_message, {{unreadcount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unreadconversations, core_message, ';
                $value = $this->resolveValue($context->find('unreadcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section458006f38c09d12d7e209efa8764f6b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core_message/message_popover\'
],
function(
    $,
    Popover
) {
    var toggle = $(\'#message-drawer-toggle-{{uniqid}}\');
    Popover.init(toggle);

    $(\'#nav-message-popover-container\').click(function() {
        $(this).toggleClass(
            \'collapsed\',
            $(\'[data-origin="message-drawer-toggle-{{uniqid}}"]\').is(\'.hidden\')
        );
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_message/message_popover\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Popover
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var toggle = $(\'#message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    Popover.init(toggle);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#nav-message-popover-container\').click(function() {
';
                $buffer .= $indent . '        $(this).toggleClass(
';
                $buffer .= $indent . '            \'collapsed\',
';
                $buffer .= $indent . '            $(\'[data-origin="message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"]\').is(\'.hidden\')
';
                $buffer .= $indent . '        );
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
