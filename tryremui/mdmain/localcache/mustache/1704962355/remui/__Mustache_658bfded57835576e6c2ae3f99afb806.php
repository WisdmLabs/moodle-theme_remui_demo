<?php

class __Mustache_658bfded57835576e6c2ae3f99afb806 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('settings');
        $buffer .= $this->sectionBd749905eb51ad4eee9bd921eca5811b($context, $indent, $value);

        return $buffer;
    }

    private function sectionE6c04fce2fea6762873e9c4a6436446c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' privacy, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' privacy, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8066e0c6b8fb0c0ca2f106b49fc72a1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' privacy_desc, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' privacy_desc, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6259fc4cbb1fcf6ca3d9c71957a5159(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactableprivacy, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contactableprivacy, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE689b904e297036aec8bcbdbb11a7c3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="custom-control custom-radio pl-0">
                    <input type="radio" name="message_blocknoncontacts" id="block-noncontacts-{{uniqid}}-{{value}}" value="{{value}}">
                    <span class=" h-regular-6 m-0" for="block-noncontacts-{{uniqid}}-{{value}}">{{text}}</span>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="custom-control custom-radio pl-0">
';
                $buffer .= $indent . '                    <input type="radio" name="message_blocknoncontacts" id="block-noncontacts-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class=" h-regular-6 m-0" for="block-noncontacts-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section536de0f92617de273ac3373d5c1904d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationpreferences, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cac6e41b8d2a2f3f442af8b75816dd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' general, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' general, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52fe934e9fc665fc68606e5d376063e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' useentertosend, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' useentertosend, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd749905eb51ad4eee9bd921eca5811b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="settings" class="p-0 msg-panel-setting-wrapper">
    <div class="p-p-6  msg-setting-privacy-wrapper">
        <div class="d-flex flex-column msg-setting-privacy-header">
            <h3 class="h-semibold-5  m-0 setting-header">{{#str}} privacy, message {{/str}}</h3>
            <p class="m-0 msg-panel-privacydesc">{{#str}} privacy_desc, message {{/str}}</p>
        </div>
        <div data-preference="blocknoncontacts" class="msg-setting-privacy-content">
            <fieldset>
                <legend class="sr-only">{{#str}} contactableprivacy, message {{/str}}</legend>
                {{#privacy}}
                <div class="custom-control custom-radio pl-0">
                    <input type="radio" name="message_blocknoncontacts" id="block-noncontacts-{{uniqid}}-{{value}}" value="{{value}}">
                    <span class=" h-regular-6 m-0" for="block-noncontacts-{{uniqid}}-{{value}}">{{text}}</span>
                </div>
                {{/privacy}}
            </fieldset>
        </div>
    </div>

    <div class="hidden p-p-6  msg-notification-preference-wrapper" data-region="notification-preference-container">
        <h3 class="m-0 h-semibold-5 setting-header ">{{#str}} notificationpreferences, core_message {{/str}}</h3>
    </div>
    <div class="p-p-6 general-setting-wrapper">
        <h3 class="m-0 h-semibold-5 setting-header">{{#str}} general, core {{/str}}</h3>
        <div data-preference="entertosend">
            <div class="custom-control pl-0">
                <input type="checkbox" id="enter-to-send-{{uniqid}}"
                    {{#entertosend}}checked{{/entertosend}}>
                <span class=" h-regular-6" for="enter-to-send-{{uniqid}}">{{#str}} useentertosend, core_message {{/str}}</span>
            </div>
        </div>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-region="settings" class="p-0 msg-panel-setting-wrapper">
';
                $buffer .= $indent . '    <div class="p-p-6  msg-setting-privacy-wrapper">
';
                $buffer .= $indent . '        <div class="d-flex flex-column msg-setting-privacy-header">
';
                $buffer .= $indent . '            <h3 class="h-semibold-5  m-0 setting-header">';
                $value = $context->find('str');
                $buffer .= $this->sectionE6c04fce2fea6762873e9c4a6436446c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <p class="m-0 msg-panel-privacydesc">';
                $value = $context->find('str');
                $buffer .= $this->section8066e0c6b8fb0c0ca2f106b49fc72a1f($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div data-preference="blocknoncontacts" class="msg-setting-privacy-content">
';
                $buffer .= $indent . '            <fieldset>
';
                $buffer .= $indent . '                <legend class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionF6259fc4cbb1fcf6ca3d9c71957a5159($context, $indent, $value);
                $buffer .= '</legend>
';
                $value = $context->find('privacy');
                $buffer .= $this->sectionE689b904e297036aec8bcbdbb11a7c3e($context, $indent, $value);
                $buffer .= $indent . '            </fieldset>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="hidden p-p-6  msg-notification-preference-wrapper" data-region="notification-preference-container">
';
                $buffer .= $indent . '        <h3 class="m-0 h-semibold-5 setting-header ">';
                $value = $context->find('str');
                $buffer .= $this->section536de0f92617de273ac3373d5c1904d0($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="p-p-6 general-setting-wrapper">
';
                $buffer .= $indent . '        <h3 class="m-0 h-semibold-5 setting-header">';
                $value = $context->find('str');
                $buffer .= $this->section9cac6e41b8d2a2f3f442af8b75816dd0($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <div data-preference="entertosend">
';
                $buffer .= $indent . '            <div class="custom-control pl-0">
';
                $buffer .= $indent . '                <input type="checkbox" id="enter-to-send-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('entertosend');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <span class=" h-regular-6" for="enter-to-send-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section52fe934e9fc665fc68606e5d376063e6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
