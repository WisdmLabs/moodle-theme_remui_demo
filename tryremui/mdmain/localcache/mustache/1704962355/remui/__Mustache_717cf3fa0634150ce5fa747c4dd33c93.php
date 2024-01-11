<?php

class __Mustache_717cf3fa0634150ce5fa747c4dd33c93 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="reviewarea">
';
        if ($partial = $this->mustache->loadPartial('block_edwiserratingreview/showrating')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="feedbackform-container"></div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div class="reviews-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="reviewheader m-3">
';
        $buffer .= $indent . '            <h4>';
        $value = $context->find('str');
        $buffer .= $this->sectionD2a771cdfc0ecd622575011ca858bf08($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="inner-flex align-items-center">
';
        $value = $context->find('canapprovelink');
        $buffer .= $this->sectionB0c8d3c5c7e9cdf917d94a57485defac($context, $indent, $value);
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <Select class="form-control reviewselector mb-2">
';
        $buffer .= $indent . '                    <option value="0" selected>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section27496a2b18a4dfa4f8d0abd7304449ab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <option value="5" >
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionFef4764294972b9c5069acae71e4c548($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <option value="4">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionC588239a6c060b9cad543bb4d3087176($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <option value="3">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionEda55c6e154caacb576dc395fab1b374($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <option value="2" >
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section6956a0a4e31399159baf32f75d4974e2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <option value="1">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section2bb4b17127bc064435dad1eafbe7b291($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </option>
';
        $buffer .= $indent . '                </Select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="reviewdata"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div  id="showmorereviewclass">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section86a2e67a9fdb53e705edc089a912a2c1($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionD2a771cdfc0ecd622575011ca858bf08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reviews,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'reviews,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5be0a3d745a5eb1f81cd1e1b2dad27db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'approvalpage, block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'approvalpage, block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0c8d3c5c7e9cdf917d94a57485defac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="approval-page-link mr-2 mb-2">
                    <a href="{{canapprovelink}}" class="btn btn-outline-secondary" role="button">{{#str}}approvalpage, block_edwiserratingreview{{/str}}</a>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="approval-page-link mr-2 mb-2">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('canapprovelink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-outline-secondary" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section5be0a3d745a5eb1f81cd1e1b2dad27db($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27496a2b18a4dfa4f8d0abd7304449ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allratings,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'allratings,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFef4764294972b9c5069acae71e4c548(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fivestars,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fivestars,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC588239a6c060b9cad543bb4d3087176(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fourstars,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fourstars,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEda55c6e154caacb576dc395fab1b374(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'threestars,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'threestars,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6956a0a4e31399159baf32f75d4974e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'twostars,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'twostars,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bb4b17127bc064435dad1eafbe7b291(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'onestar,block_edwiserratingreview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'onestar,block_edwiserratingreview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86a2e67a9fdb53e705edc089a912a2c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([
        \'block_edwiserratingreview/formhandler\',
        \'block_edwiserratingreview/reviewfilter\',
        \'block_edwiserratingreview/famehandler\'
        ],
        function(Formhandler, Reviewfilter, FameHandler) {
        Formhandler.init();
        Reviewfilter.init();
        FameHandler.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([
';
                $buffer .= $indent . '        \'block_edwiserratingreview/formhandler\',
';
                $buffer .= $indent . '        \'block_edwiserratingreview/reviewfilter\',
';
                $buffer .= $indent . '        \'block_edwiserratingreview/famehandler\'
';
                $buffer .= $indent . '        ],
';
                $buffer .= $indent . '        function(Formhandler, Reviewfilter, FameHandler) {
';
                $buffer .= $indent . '        Formhandler.init();
';
                $buffer .= $indent . '        Reviewfilter.init();
';
                $buffer .= $indent . '        FameHandler.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
