<?php

class __Mustache_f75e3fcec1b74aaee8c25982143e445c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" ';
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"
';
            $buffer .= $indent . '    ';
        }
        $buffer .= ' data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="message-drawer-view-overview-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="d-flex flex-column h-100 tab-body-container"
';
        $buffer .= $indent . '        style="overflow-y: auto">
';
        $buffer .= $indent . '        <ul class="nav nav-tabs nav-justified border-0 m-0 p-0 msg-panel-tab">
';
        $buffer .= $indent . '            <li class="nav-item " data-region="view-overview-favourites" title="';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('str');
            $buffer .= $this->sectionF7558f374c4ffa9cd2c6759ea660f7e8($context, $indent, $value);
        }
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        if ($parent = $this->mustache->loadPartial('theme_remui/message_drawer_tab_button')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block1f9cf042c845bc7d69f3a18ffe6e4729'),
                'title' => array($this, 'blockE45f1a96020b269c4cf5bd35e5284ce8'),
                'placeholder' => array($this, 'blockC3c99d5a80a362adeed0ec8573a012e3'),
                'emptymessage' => array($this, 'block1b26391ead37e686641b381d179106e6'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li class="nav-item" data-region="view-overview-group-messages" title="';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('str');
            $buffer .= $this->section0e294840ed8efb1916cf4e3c314868bd($context, $indent, $value);
        }
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        if ($parent = $this->mustache->loadPartial('theme_remui/message_drawer_tab_button')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block1c982b338b49ee345e9557f09e5fb99a'),
                'title' => array($this, 'block01a8220b04c9439c6d4c02009e742d49'),
                'placeholder' => array($this, 'blockD9ed2155e134b68dac5fd9b2b5154f84'),
                'emptymessage' => array($this, 'block9081de0534e38b174cfbd8dcb9cb7a58'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <li class="nav-item"  data-region="view-overview-messages" title="';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('str');
            $buffer .= $this->section046630067946e0203516666af8928e75($context, $indent, $value);
        }
        $buffer .= ' ">
';
        $buffer .= $indent . '                ';
        if ($parent = $this->mustache->loadPartial('theme_remui/message_drawer_tab_button')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block6e790403fcb38c4ec980f2cdb110ce26'),
                'title' => array($this, 'block4c6362597625cc58f0187fad1bda6bf0'),
                'placeholder' => array($this, 'blockC9aa259edc54f0ba7849d5f0303ab45d'),
                'notification' => array($this, 'block8962113a7151ee443bf34446548e06ec'),
                'emptymessage' => array($this, 'block000c018bfe50a80586901567af7cf7e0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </ul>
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_favourites')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_group_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section_messages')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF7558f374c4ffa9cd2c6759ea660f7e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourites ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' favourites ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916501edc8941102f320cc739ac0bc50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nofavourites, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nofavourites, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e294840ed8efb1916cf4e3c314868bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' groupconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' groupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5914da41773e98b58b47f202d261c9b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nogroupconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nogroupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section046630067946e0203516666af8928e75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'individualconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'individualconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d31b20b9ef820d76cb60e59e8bea065(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                individualconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                individualconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE938951d339622c1728fa14fcd1c100d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="text-center p-2">
                    <p class="text-center text-muted mt-2">{{.}}</p>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="text-center p-2">
';
                $buffer .= $indent . '                    <p class="text-center text-muted mt-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section088ffe8d586f44aaabcd5c09cc823693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noindividualconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noindividualconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block1f9cf042c845bc7d69f3a18ffe6e4729($context)
    {
        $indent = $buffer = '';
        $buffer .= 'view-overview-favourites';
    
        return $buffer;
    }

    public function blockE45f1a96020b269c4cf5bd35e5284ce8($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionF7558f374c4ffa9cd2c6759ea660f7e8($context, $indent, $value);
    
        return $buffer;
    }

    public function blockC3c99d5a80a362adeed0ec8573a012e3($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    <div class="text-center py-2">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                        ');
        }
        $buffer .= $indent . '                    </div>
';
    
        return $buffer;
    }

    public function block1b26391ead37e686641b381d179106e6($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <p class="text-muted mt-2">';
        $value = $context->find('str');
        $buffer .= $this->section916501edc8941102f320cc739ac0bc50($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }

    public function block1c982b338b49ee345e9557f09e5fb99a($context)
    {
        $indent = $buffer = '';
        $buffer .= 'view-overview-group-messages';
    
        return $buffer;
    }

    public function block01a8220b04c9439c6d4c02009e742d49($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section0e294840ed8efb1916cf4e3c314868bd($context, $indent, $value);
    
        return $buffer;
    }

    public function blockD9ed2155e134b68dac5fd9b2b5154f84($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <div class="text-center py-2">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function block9081de0534e38b174cfbd8dcb9cb7a58($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <p class="text-muted mt-2">';
        $value = $context->find('str');
        $buffer .= $this->section5914da41773e98b58b47f202d261c9b8($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }

    public function block6e790403fcb38c4ec980f2cdb110ce26($context)
    {
        $indent = $buffer = '';
        $buffer .= 'view-overview-messages';
    
        return $buffer;
    }

    public function block4c6362597625cc58f0187fad1bda6bf0($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section9d31b20b9ef820d76cb60e59e8bea065($context, $indent, $value);
    
        return $buffer;
    }

    public function blockC9aa259edc54f0ba7849d5f0303ab45d($context)
    {
        $indent = $buffer = '';
        $buffer .= '
';
        $buffer .= $indent . '                <div class="text-center py-2">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function block8962113a7151ee443bf34446548e06ec($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('overview.notification');
        $buffer .= $this->sectionE938951d339622c1728fa14fcd1c100d($context, $indent, $value);
    
        return $buffer;
    }

    public function block000c018bfe50a80586901567af7cf7e0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <p class="text-muted mt-2">';
        $value = $context->find('str');
        $buffer .= $this->section088ffe8d586f44aaabcd5c09cc823693($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
