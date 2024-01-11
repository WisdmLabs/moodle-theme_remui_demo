<?php

class __Mustache_b5f09a5439fc0a2d087dcd0c7c763558 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showemojipicker');
        $buffer .= $this->section07a791af5c174fd3e3f291519e22aecc($context, $indent, $value);
        $buffer .= $indent . '<div class="d-flex flex-gap-2 justify-content-between">
';
        $buffer .= $indent . '    <div class="position-relative d-flex align-items-center flex-gap-4">
';
        $value = $context->find('showemojipicker');
        $buffer .= $this->sectionD7511da7fbcb8c01a257700105f0c936($context, $indent, $value);
        $buffer .= $indent . '        <textarea
';
        $buffer .= $indent . '            dir="auto"
';
        $buffer .= $indent . '            data-region="send-message-txt"
';
        $buffer .= $indent . '            class="bg-light form-control p-0 border-0 bg-transparent"
';
        $buffer .= $indent . '            rows="1"
';
        $buffer .= $indent . '            data-auto-rows
';
        $buffer .= $indent . '            data-min-rows="1"
';
        $buffer .= $indent . '            data-max-rows="2"
';
        $buffer .= $indent . '            aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionA9e3d4df9ffdf1ff00aaf77ff4ebe82e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            placeholder="';
        $value = $context->find('str');
        $buffer .= $this->sectionA9e3d4df9ffdf1ff00aaf77ff4ebe82e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            style="resize: none;"
';
        $buffer .= $indent . '            maxlength="';
        $value = $this->resolveValue($context->find('messagemaxlength'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        ></textarea>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '        class="btn p-0 "
';
        $buffer .= $indent . '        aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionAb824786c8682f6171ef8d2596f84a5d($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-action="send-message"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span class="edw-icon edw-icon-Send" data-region="send-icon-container"></span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section07a791af5c174fd3e3f291519e22aecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div
        class="emoji-auto-complete-container w-100 hidden"
        data-region="emoji-auto-complete-container"
        aria-live="polite"
        aria-hidden="true"
    >
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div
';
                $buffer .= $indent . '        class="emoji-auto-complete-container w-100 hidden"
';
                $buffer .= $indent . '        data-region="emoji-auto-complete-container"
';
                $buffer .= $indent . '        aria-live="polite"
';
                $buffer .= $indent . '        aria-hidden="true"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5df971d582457358a4ccf481abd0509f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' toggleemojipicker, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' toggleemojipicker, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7511da7fbcb8c01a257700105f0c936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div
                data-region="emoji-picker-container"
                class="emoji-picker-container hidden"
                aria-hidden="true"
            >
                {{> core/emoji/picker }}
            </div>
            <button
                class="btn p-0"
                aria-label="{{#str}} toggleemojipicker, core {{/str}}"
                data-action="toggle-emoji-picker"
            >
                <span class="edw-icon edw-icon-Smile_2"></span>
            </button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div
';
                $buffer .= $indent . '                data-region="emoji-picker-container"
';
                $buffer .= $indent . '                class="emoji-picker-container hidden"
';
                $buffer .= $indent . '                aria-hidden="true"
';
                $buffer .= $indent . '            >
';
                if ($partial = $this->mustache->loadPartial('core/emoji/picker')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '                class="btn p-0"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5df971d582457358a4ccf481abd0509f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-action="toggle-emoji-picker"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Smile_2"></span>
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e3d4df9ffdf1ff00aaf77ff4ebe82e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' typeamessage, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' typeamessage, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb824786c8682f6171ef8d2596f84a5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendmessage, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendmessage, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
