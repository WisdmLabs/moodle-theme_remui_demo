<?php

class __Mustache_a6a6abe071e8aca47bdcdf46a4c7b93e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('formdata');
        $buffer .= $this->sectionB96fa7956cfe5f6a62f464a457c1b277($context, $indent, $value);

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35203701b9272a2bcc7f0a2878c4721d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="review-card__fame">
                <div class="review-card__fame-like mr-4">
                    <span class="likebtn m-0 py-2 {{#liked}}active{{/liked}}" data-reviewid="{{id}}" data-userid="{{userid}}">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span>
                    <span class="liked count" data-reviewid="{{id}}">{{likecount}}</span>
                </div>
                <div class="review-card__fame-dlike mr-4">
                    <span class="dlikebtn m-0 py-2 {{#dliked}}active{{/dliked}}" data-reviewid="{{id}}" data-userid="{{userid}}">
                        <i class="fa fa-thumbs-down " aria-hidden="true"></i>
                    </span>
                    <span class="dliked count" data-reviewid="{{id}}">{{dlikecount}}</span>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="review-card__fame">
';
                $buffer .= $indent . '                <div class="review-card__fame-like mr-4">
';
                $buffer .= $indent . '                    <span class="likebtn m-0 py-2 ';
                $value = $context->find('liked');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-reviewid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="liked count" data-reviewid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('likecount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="review-card__fame-dlike mr-4">
';
                $buffer .= $indent . '                    <span class="dlikebtn m-0 py-2 ';
                $value = $context->find('dliked');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-reviewid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-thumbs-down " aria-hidden="true"></i>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="dliked count" data-reviewid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('dlikecount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB96fa7956cfe5f6a62f464a457c1b277(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

    <li class="review-card mb-4" data-reviewid="{{id}}" data-userid="{{userid}}">
        <div class="review-card__profile">
            {{{userprofile}}}
        </div>
        <div class="review-card__details">
            <div class="mb-2">
                <h5 class="review-card__username mb-0">{{username}}</h5>
                <div class="review-card__rating">{{{starratinghtml}}}</div>
                <div class="review-card__date">{{date_created}}</div>
            </div>
            <p class="review-card__review mb-0">{{review}}</p>
            
            {{#famedetails}}
            <div class="review-card__fame">
                <div class="review-card__fame-like mr-4">
                    <span class="likebtn m-0 py-2 {{#liked}}active{{/liked}}" data-reviewid="{{id}}" data-userid="{{userid}}">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span>
                    <span class="liked count" data-reviewid="{{id}}">{{likecount}}</span>
                </div>
                <div class="review-card__fame-dlike mr-4">
                    <span class="dlikebtn m-0 py-2 {{#dliked}}active{{/dliked}}" data-reviewid="{{id}}" data-userid="{{userid}}">
                        <i class="fa fa-thumbs-down " aria-hidden="true"></i>
                    </span>
                    <span class="dliked count" data-reviewid="{{id}}">{{dlikecount}}</span>
                </div>
            </div>
            {{/famedetails}}

        </div>
    </li>

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <li class="review-card mb-4" data-reviewid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="review-card__profile">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('userprofile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="review-card__details">
';
                $buffer .= $indent . '            <div class="mb-2">
';
                $buffer .= $indent . '                <h5 class="review-card__username mb-0">';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '                <div class="review-card__rating">';
                $value = $this->resolveValue($context->find('starratinghtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                <div class="review-card__date">';
                $value = $this->resolveValue($context->find('date_created'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <p class="review-card__review mb-0">';
                $value = $this->resolveValue($context->find('review'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            
';
                $value = $context->find('famedetails');
                $buffer .= $this->section35203701b9272a2bcc7f0a2878c4721d($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </li>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
