<?php

class __Mustache_aa5202179b4b4667ba291e8dded485ea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="edg-quizlist-content" data-cid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '	<div class="edg-quiz-list d-flex flex-column hidden">
';
        $value = $context->find('quizzes');
        $buffer .= $this->section70df24ef5921a6d6f9b2a9b605a6d414($context, $indent, $value);
        $value = $context->find('quizzes');
        if (empty($value)) {
            
            $buffer .= $indent . '		<div class="alert alert-info" role="alert">
';
            $value = $context->find('quizpage');
            $buffer .= $this->sectionD40db397e1b946a436e73ff702f30d66($context, $indent, $value);
            $value = $context->find('quizpage');
            if (empty($value)) {
                
                $value = $context->find('search');
                $buffer .= $this->section5ccd497ffc6ffde12df2818b48e2138c($context, $indent, $value);
                $value = $context->find('search');
                if (empty($value)) {
                    
                    $buffer .= $indent . '					';
                    $value = $context->find('str');
                    $buffer .= $this->sectionDb5d1cb6ce1a4814bab3f27a61f1620e($context, $indent, $value);
                    $buffer .= '
';
                }
            }
            $buffer .= $indent . '		</div>
';
        }
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<div class="edg-quiz-skeleton">
';
        $buffer .= $indent . '		<div class="edg-quiz-dummy">
';
        $buffer .= $indent . '			<div class="edg-dquiz-title animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-stats animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-button animate"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<div class="edg-quiz-dummy">
';
        $buffer .= $indent . '			<div class="edg-dquiz-title animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-stats animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-button animate"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '		<div class="edg-quiz-dummy">
';
        $buffer .= $indent . '			<div class="edg-dquiz-title animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-stats animate"></div>
';
        $buffer .= $indent . '			<div class="edg-dquiz-button animate"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionFae71ed2f0eb60814276179bf3bfec88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' grade ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' grade ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf451d7159ca8bfdc9650efe74d46455(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' regrade, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' regrade, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCad32b94609947225b9e21fd5aef8a1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#str}} regrade, block_edwiser_grader {{/str}}
				';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '					';
                $value = $context->find('str');
                $buffer .= $this->sectionCf451d7159ca8bfdc9650efe74d46455($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70df24ef5921a6d6f9b2a9b605a6d414(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="edg-quiz-item {{quizstatus}}">
			<div class="edg-quiz-title">{{{ quiztitle }}}</div>
			<div class="edg-quiz-stats d-flex flex-column">
				<p class="m-0">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<span class="edg-stats-count">{{ notgradedusers}}</span>Requires Grading
				</p>
				<p class="m-0">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<span class="edg-stats-count">{{ gradedusers}}</span>Graded
				</p>
				<p class="m-0">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<span class="edg-stats-count">{{ notattemptedusers}}</span>Not Attempted
				</p>
			</div>
			<a href="{{gradeurl}}" class="btn btn-primary btn-sm">
				{{^regrade}}
					{{#str}} grade {{/str}}
				{{/regrade}}
				{{#regrade}}
					{{#str}} regrade, block_edwiser_grader {{/str}}
				{{/regrade}}
			</a>
		</div>
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '		<div class="edg-quiz-item ';
                $value = $this->resolveValue($context->find('quizstatus'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '			<div class="edg-quiz-title">';
                $value = $this->resolveValue($context->find('quiztitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '			<div class="edg-quiz-stats d-flex flex-column">
';
                $buffer .= $indent . '				<p class="m-0">
';
                $buffer .= $indent . '					<span><i class="fa fa-user" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '					<span class="edg-stats-count">';
                $value = $this->resolveValue($context->find('notgradedusers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>Requires Grading
';
                $buffer .= $indent . '				</p>
';
                $buffer .= $indent . '				<p class="m-0">
';
                $buffer .= $indent . '					<span><i class="fa fa-user" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '					<span class="edg-stats-count">';
                $value = $this->resolveValue($context->find('gradedusers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>Graded
';
                $buffer .= $indent . '				</p>
';
                $buffer .= $indent . '				<p class="m-0">
';
                $buffer .= $indent . '					<span><i class="fa fa-user" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '					<span class="edg-stats-count">';
                $value = $this->resolveValue($context->find('notattemptedusers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>Not Attempted
';
                $buffer .= $indent . '				</p>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<a href="';
                $value = $this->resolveValue($context->find('gradeurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary btn-sm">
';
                $value = $context->find('regrade');
                if (empty($value)) {
                    
                    $buffer .= $indent . '					';
                    $value = $context->find('str');
                    $buffer .= $this->sectionFae71ed2f0eb60814276179bf3bfec88($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('regrade');
                $buffer .= $this->sectionCad32b94609947225b9e21fd5aef8a1c($context, $indent, $value);
                $buffer .= $indent . '			</a>
';
                $buffer .= $indent . '		</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b3465188a81370edfb3f40ca7c0fd22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noattemptmademsg, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noattemptmademsg, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD40db397e1b946a436e73ff702f30d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
				{{#str}} noattemptmademsg, block_edwiser_grader {{/str}}
			';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '				';
                $value = $context->find('str');
                $buffer .= $this->section5b3465188a81370edfb3f40ca7c0fd22($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4404794849451b5767f1ad37195d080e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noquizfoundmsg, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noquizfoundmsg, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ccd497ffc6ffde12df2818b48e2138c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{#str}} noquizfoundmsg, block_edwiser_grader {{/str}}
				';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '					';
                $value = $context->find('str');
                $buffer .= $this->section4404794849451b5767f1ad37195d080e($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb5d1cb6ce1a4814bab3f27a61f1620e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noquizzesmsg, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noquizzesmsg, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
