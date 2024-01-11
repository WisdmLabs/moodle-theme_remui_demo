<?php

class __Mustache_4b0e9b643f23535fd9afc63411381e87 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="overview-header align-items-between justify-content-between" aria-hidden="false" ';
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= ' data-region="view-overview">
';
        $buffer .= $indent . '    <div class="simplesearchform edw-search-field">
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <label for="message-searchinput-overview">
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <div class="input-group-prepend">
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-submit" data-action="submit">
';
        $buffer .= $indent . '                    <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <input type="text" id="message-searchinput-overview" class="form-control withclear navigation-text align-self-center" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '" name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" data-region="view-overview-search-input" title="';
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="message-header-action-btns d-flex  align-items-center pr-0">
';
        $buffer .= $indent . '        <div class="message-header-action-btn">
';
        $buffer .= $indent . '            <a href="#" data-route="view-contacts" role="button" title="contact request count">
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Group-user"></span>
';
        $buffer .= $indent . '                <!--';
        $value = $context->find('str');
        $buffer .= $this->sectionAe27671d8d1750e9af3adcc5df1cbf0d($context, $indent, $value);
        $buffer .= ' -->
';
        $buffer .= $indent . '                <span
';
        $buffer .= $indent . '                    class="badge edw-msg-panel-badge ';
        $value = $context->find('contactrequestcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '"
';
        $buffer .= $indent . '                    data-region="contact-request-count"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                    <span aria-hidden="true">';
        $value = $this->resolveValue($context->find('contactrequestcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section805e650638aa325ee8db2b322ff4bb8f($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('caneditownmessageprofile');
        $buffer .= $this->sectionB6eeafdc8914809ea5d5ddaa05601606($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section507b9f28a10a9aed70b7b7a308c6a3ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core_search ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, core_search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe27671d8d1750e9af3adcc5df1cbf0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805e650638aa325ee8db2b322ff4bb8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pendingcontactrequests, core_message, {{contactrequestcount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pendingcontactrequests, core_message, ';
                $value = $this->resolveValue($context->find('contactrequestcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6584ba6b6168cbf2f66e5fde26dfdaad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' settings, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6eeafdc8914809ea5d5ddaa05601606(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="message-header-action-btn">
            <a
                href="#"
                data-route="view-settings"
                data-route-param="{{loggedinuser.id}}"
                aria-label="{{#str}} settings, core_message {{/str}}"
                role="button"
                title="{{#str}} settings, core_message {{/str}}"
            >
                <span class="edw-icon edw-icon-Setting"></span>
            </a>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="message-header-action-btn">
';
                $buffer .= $indent . '            <a
';
                $buffer .= $indent . '                href="#"
';
                $buffer .= $indent . '                data-route="view-settings"
';
                $buffer .= $indent . '                data-route-param="';
                $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section6584ba6b6168cbf2f66e5fde26dfdaad($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                role="button"
';
                $buffer .= $indent . '                title="';
                $value = $context->find('str');
                $buffer .= $this->section6584ba6b6168cbf2f66e5fde26dfdaad($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Setting"></span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
