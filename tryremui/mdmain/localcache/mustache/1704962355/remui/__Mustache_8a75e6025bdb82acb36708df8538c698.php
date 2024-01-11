<?php

class __Mustache_8a75e6025bdb82acb36708df8538c698 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="edg-main-content" ';
        $value = $context->find('quizpage');
        $buffer .= $this->sectionC78c98602815a3e80f44a255262960d0($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('dashboardpage');
        $buffer .= $this->section157bea80a08004b5847980b3dc13b00e($context, $indent, $value);
        $value = $context->find('dashboardpage');
        if (empty($value)) {
            
            $buffer .= $indent . '		<div class="edg-search-container">
';
            $buffer .= $indent . '			<div class="input-group">
';
            $buffer .= $indent . '				<div class="input-group-prepend">
';
            $buffer .= $indent . '					<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
';
            $buffer .= $indent . '				</div>
';
            $buffer .= $indent . '				<input type="text" class="form-control" id="edg-search-input" placeholder="';
            $value = $context->find('str');
            $buffer .= $this->section6efcd2d0d6ca2669b9fe59d553dc9db3($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '			</div>
';
            $buffer .= $indent . '		</div>
';
            if ($partial = $this->mustache->loadPartial('block_edwiser_grader/quizlist')) {
                $buffer .= $partial->renderInternal($context, $indent . '		');
            }
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionC78c98602815a3e80f44a255262960d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-page="{{ quizpage }}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-page="';
                $value = $this->resolveValue($context->find('quizpage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17b24c16c2578a184f3539b0e04044de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectcourses, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectcourses, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d3f98d52517f7d87d4f2b42a57915d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<option value="{{ id }}">{{{ name }}}</option>
				';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '					<option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6efcd2d0d6ca2669b9fe59d553dc9db3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchplaceholder, block_edwiser_grader';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchplaceholder, block_edwiser_grader';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9255f89cc4d3b2dec1632a24b29a6f12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<label for="edg-course-sbox" class="m-0 edg-cs-label">{{#str}} selectcourses, block_edwiser_grader {{/str}}</label>
			<select id="edg-course-sbox" class="edg-course-select form-control">
				{{#courses}}
					<option value="{{ id }}">{{{ name }}}</option>
				{{/courses}}
			</select>
				<div class="edg-search-container">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
						<input type="text" class="form-control" id="edg-search-input" placeholder="{{#str}}searchplaceholder, block_edwiser_grader{{/str}}">
					</div>
				</div>
				{{> block_edwiser_grader/quizlist}}
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '			<label for="edg-course-sbox" class="m-0 edg-cs-label">';
                $value = $context->find('str');
                $buffer .= $this->section17b24c16c2578a184f3539b0e04044de($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '			<select id="edg-course-sbox" class="edg-course-select form-control">
';
                $value = $context->find('courses');
                $buffer .= $this->section6d3f98d52517f7d87d4f2b42a57915d7($context, $indent, $value);
                $buffer .= $indent . '			</select>
';
                $buffer .= $indent . '				<div class="edg-search-container">
';
                $buffer .= $indent . '					<div class="input-group">
';
                $buffer .= $indent . '						<div class="input-group-prepend">
';
                $buffer .= $indent . '							<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '						</div>
';
                $buffer .= $indent . '						<input type="text" class="form-control" id="edg-search-input" placeholder="';
                $value = $context->find('str');
                $buffer .= $this->section6efcd2d0d6ca2669b9fe59d553dc9db3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '					</div>
';
                $buffer .= $indent . '				</div>
';
                if ($partial = $this->mustache->loadPartial('block_edwiser_grader/quizlist')) {
                    $buffer .= $partial->renderInternal($context, $indent . '				');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE025e78392bc43bab799b845c96d7236(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocoursesmsg, block_edwiser_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nocoursesmsg, block_edwiser_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section157bea80a08004b5847980b3dc13b00e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{#courses.0}}
			<label for="edg-course-sbox" class="m-0 edg-cs-label">{{#str}} selectcourses, block_edwiser_grader {{/str}}</label>
			<select id="edg-course-sbox" class="edg-course-select form-control">
				{{#courses}}
					<option value="{{ id }}">{{{ name }}}</option>
				{{/courses}}
			</select>
				<div class="edg-search-container">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
						<input type="text" class="form-control" id="edg-search-input" placeholder="{{#str}}searchplaceholder, block_edwiser_grader{{/str}}">
					</div>
				</div>
				{{> block_edwiser_grader/quizlist}}
		{{/courses.0}}
		{{^courses.0}}
			<div class="alert alert-info" role="alert">
				<p>{{#str}} nocoursesmsg, block_edwiser_grader {{/str}}</p>
			</div>
		{{/courses.0}}
	';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('courses.0');
                $buffer .= $this->section9255f89cc4d3b2dec1632a24b29a6f12($context, $indent, $value);
                $value = $context->findDot('courses.0');
                if (empty($value)) {
                    
                    $buffer .= $indent . '			<div class="alert alert-info" role="alert">
';
                    $buffer .= $indent . '				<p>';
                    $value = $context->find('str');
                    $buffer .= $this->sectionE025e78392bc43bab799b845c96d7236($context, $indent, $value);
                    $buffer .= '</p>
';
                    $buffer .= $indent . '			</div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
