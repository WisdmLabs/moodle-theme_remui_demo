<?php

class __Mustache_e840befefc17ddda0940e551488b5846 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-toggle" class=" p-0" data-region="toggle">
';
        $buffer .= $indent . '    <a class="nav-link w-100 m-0 d-flex pt-0 align-items-center justify-content-center overview-section-toggle ';
        $value = $context->find('expanded');
        if (empty($value)) {
            
            $buffer .= 'collapsed';
        }
        $buffer .= '"
';
        $buffer .= $indent . '        data-toggle="collapse" data-target="#';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        aria-expanded="';
        $value = $context->find('expanded');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        $value = $context->find('expanded');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '"
';
        $buffer .= $indent . '        aria-controls="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <span class="">';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        <small class="hidden " data-region="section-total-count-container">
';
        $buffer .= $indent . '            <span aria-hidden="true" class="badge edw-msg-panel-badge" data-region="section-total-count">';
        $value = $this->resolveValue($context->findDot('count.total'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>';
        $buffer .= '<span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section157ed066b52ac7131926b0c2638ed003($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </small>
';
        $buffer .= $indent . '        <span class="hidden ml-2" data-region="loading-icon-container">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="';
        $value = $context->findDot('count.unread');
        $buffer .= $this->sectionDa85a3598aa2ce9629e1f55f5c6a967b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->findDot('count.unread');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= ' badge badge-pill"
';
        $buffer .= $indent . '            data-region="section-unread-count">
';
        $buffer .= $indent . '            <span aria-hidden="true">';
        $value = $this->resolveValue($context->findDot('count.unread'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2583a6656b06f3645e457db265540388($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section157ed066b52ac7131926b0c2638ed003(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalconversations, core_message, {{count.total}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totalconversations, core_message, ';
                $value = $this->resolveValue($context->findDot('count.total'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa85a3598aa2ce9629e1f55f5c6a967b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-flex';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-flex';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2583a6656b06f3645e457db265540388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unreadconversations, core_message, {{count.unread}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unreadconversations, core_message, ';
                $value = $this->resolveValue($context->findDot('count.unread'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
