<?php

class __Mustache_05ebbfcd0acf69257b982925319ed60c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('pageheadingbutton');
        $buffer .= $this->section7c6f2c4fbf30aad3e5396005b2697ec5($context, $indent, $value);
        $buffer .= $indent . '<header';
        $buffer .= ' id="page-header"';
        $buffer .= ' class="header-maxwidth d-print-none ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' position-relative overflow-hidden"';
        $buffer .= ' style="background: url(';
        $value = $this->resolveValue($context->find('courseimage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ');">
';
        $buffer .= $indent . '    <div class = "position-absolute w-100 h-100" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.0)  -24.52%, #000000 97.67%);left:0%;bottom:0%; opacity:';
        $value = $this->resolveValue($context->find('overlayopacity'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"> </div>
';
        $buffer .= $indent . '    <div class="w-100 header-wrapper" style="z-index:1;">
';
        $buffer .= $indent . '        <div class="d-flex flex-wrap">
';
        $value = $context->find('hasnavbar');
        $buffer .= $this->section2292e61b29f2de29daf222b96b952dad($context, $indent, $value);
        $value = $context->find('courseheader');
        $buffer .= $this->sectionD218b8f47321dbfa2798d9d3247e9c25($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="d-flex align-items-center">
';
        $buffer .= $indent . '            <div class="dashboard-bar-wrapper">
';
        $buffer .= $indent . '                <div class="header-main-section">
';
        $value = $context->find('categoryname');
        $buffer .= $this->section32cbaff232e9de42f27793bb84671090($context, $indent, $value);
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('contextheader');
            $buffer .= $this->section4649126f0ec37576f6a7f0e31685c0d0($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('core/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="header-sub-section">
';
        $value = $context->find('rnrdesign');
        $buffer .= $this->section645a38352282f193454d026ad52998ad($context, $indent, $value);
        $value = $context->find('teachers');
        $buffer .= $this->section829223c051c686dd3c3014fb5a515fb0($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="header-actions-container " data-region="header-actions-container">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionF2fcab843e0def12de04abaf96a4213a($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section7c6f2c4fbf30aad3e5396005b2697ec5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="d-flex reset-pagebutton-wrapper">
         {{{pageheadingbutton}}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="d-flex reset-pagebutton-wrapper">
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2292e61b29f2de29daf222b96b952dad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="page-navbar">
                {{{navbar}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="page-navbar">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD218b8f47321dbfa2798d9d3247e9c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="course-header">
                {{{courseheader}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="course-header">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32cbaff232e9de42f27793bb84671090(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="category">
                        <span class="badge p-p-1 small-info-regular">
                            {{{categoryname}}}
                        </span>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="category">
';
                $buffer .= $indent . '                        <span class="badge p-p-1 small-info-regular">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4649126f0ec37576f6a7f0e31685c0d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{{contextheader}}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645a38352282f193454d026ad52998ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="edw-ratings-wrapper">
                        {{{rnrdesign}}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="edw-ratings-wrapper">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('rnrdesign'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f3680dc038cca5ab5e8f5c40901276a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ',&nbsp;';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ',&nbsp;';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3d578b7cfd0da80c783a41bf5b5b53b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                            }}{{#hasanother}},&nbsp;{{/hasanother}}{{name}}{{!
                            }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasanother');
                $buffer .= $this->section3f3680dc038cca5ab5e8f5c40901276a($context, $indent, $value);
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB12bb05da14444d5418adaeb52dd6ec6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="stat">
                            <b class="count"> +{{teachercount}}</b>
                        </span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="stat">
';
                $buffer .= $indent . '                            <b class="count"> +';
                $value = $this->resolveValue($context->find('teachercount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section829223c051c686dd3c3014fb5a515fb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="instructor-info stat-container">
                        <span class="titles h-semibold-6">
                            {{#instructors}}{{!
                            }}{{#hasanother}},&nbsp;{{/hasanother}}{{name}}{{!
                            }}{{/instructors}}
                        </span>
                        {{#teachercount}}
                        <span class="stat">
                            <b class="count"> +{{teachercount}}</b>
                        </span>
                        {{/teachercount}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="instructor-info stat-container">
';
                $buffer .= $indent . '                        <span class="titles h-semibold-6">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('instructors');
                $buffer .= $this->sectionB3d578b7cfd0da80c783a41bf5b5b53b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $value = $context->find('teachercount');
                $buffer .= $this->sectionB12bb05da14444d5418adaeb52dd6ec6($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2fcab843e0def12de04abaf96a4213a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-action ">{{{.}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="header-action ">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
