<?php

class __Mustache_333f7030cc39faabc438b54fae1928aa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ratings-block-wrapper d-flex">
';
        $value = $context->find('avgratingstat');
        $buffer .= $this->section046ceb0a26f0473e04c731f4455e1a8d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="avg-rating-progress">
';
        $value = $context->find('ratingprogress');
        $buffer .= $this->section44efa4ba02857d4ade0ade6bb806d68e($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionC820bf4b096bd2bb0b2c49205cba68c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courseratingtext,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courseratingtext,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dcf868b6a6e875e677e26753a5c804d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rating-part d-flex justify-content-center">
            <div class="writereview">
                <button type="button" class="btn btn-warning writereviewbtn">
                    {{reviewbtntext}}
                </button>
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rating-part d-flex justify-content-center">
';
                $buffer .= $indent . '            <div class="writereview">
';
                $buffer .= $indent . '                <button type="button" class="btn btn-warning writereviewbtn">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('reviewbtntext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section046ceb0a26f0473e04c731f4455e1a8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="avg-rating-stat">
        <div class="avg-rating__wrapper d-flex flex-column justify-content-center align-items-center">
            <h2>{{averagerating}}</h2>
            <div>{{{averageratingstar}}}</div>
            <p>
                {{ratingcount}} {{#str}}courseratingtext,block_edwiserratingreview{{/str}}
            </p>
        </div>
        {{#reviewbtntext}}
        <div class="rating-part d-flex justify-content-center">
            <div class="writereview">
                <button type="button" class="btn btn-warning writereviewbtn">
                    {{reviewbtntext}}
                </button>
            </div>
        </div>
        {{/reviewbtntext}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="avg-rating-stat">
';
                $buffer .= $indent . '        <div class="avg-rating__wrapper d-flex flex-column justify-content-center align-items-center">
';
                $buffer .= $indent . '            <h2>';
                $value = $this->resolveValue($context->find('averagerating'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $buffer .= $indent . '            <div>';
                $value = $this->resolveValue($context->find('averageratingstar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <p>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('ratingcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionC820bf4b096bd2bb0b2c49205cba68c7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '        </div>
';
                $value = $context->find('reviewbtntext');
                $buffer .= $this->section9dcf868b6a6e875e677e26753a5c804d($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44efa4ba02857d4ade0ade6bb806d68e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="progress-wrapper">
            <div class="progress ">
                <div class="progress-bar" role="progressbar" style="width: {{progress}}%;" aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">{{progress}}%</div>
            </div>
            <div class="stars">
                {{{starsdesign}}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="progress-wrapper">
';
                $buffer .= $indent . '            <div class="progress ">
';
                $buffer .= $indent . '                <div class="progress-bar" role="progressbar" style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%;" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-valuemin="0" aria-valuemax="100">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%</div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="stars">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('starsdesign'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
