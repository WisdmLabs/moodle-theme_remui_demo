<?php

class __Mustache_a737f692c7c3e8838b66e03e585266d5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class=\'course-progress-settings d-none flex-wrap  ';
            $value = $context->find('alwaysload');
            $buffer .= $this->section64879cc4956ded67a6998c4318702124($context, $indent, $value);
            $buffer .= '\'>
';
            $buffer .= $indent . '    <div class="form-check d-flex" title="';
            $value = $context->find('str');
            $buffer .= $this->section6165f24a4748267ce6f40e450ff9b77b($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <input type="checkbox" class="form-check-input d-flex align-self-center" id="always-load-progress" ';
            $value = $context->find('alwaysload');
            $buffer .= $this->section829887c36eff14311a4dd5529f02f034($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '        <label class="form-check-label p-ml-2" for="always-load-progress">';
            $value = $context->find('str');
            $buffer .= $this->sectionEacd4f1d2ec17f9f47f4e07bd66e96b5($context, $indent, $value);
            $buffer .= '</label>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <button class="btn btn-primary " id="load-progress"
';
            $buffer .= $indent . '        title="';
            $value = $context->find('str');
            $buffer .= $this->section154d2a9dd2e801e02c3f78bc968d7cc3($context, $indent, $value);
            $buffer .= '">';
            $value = $context->find('str');
            $buffer .= $this->section3b00e8af9aecf92de62b0f9f4262da48($context, $indent, $value);
            $buffer .= '</button>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div class="block-processing d-none">
';
            $buffer .= $indent . '    <div class="block-processing-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div class="course-progress-block" id="course-progress-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '    <table id="DataTables_Teacher" class="dataTable">
';
            $buffer .= $indent . '        <thead>
';
            $buffer .= $indent . '            <tr role="row">
';
            $buffer .= $indent . '            <th>#</th>
';
            $buffer .= $indent . '            <th>';
            $value = $context->find('str');
            $buffer .= $this->sectionCb718b99caee41e0260616c8c4a2115f($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            $value = $context->find('str');
            $buffer .= $this->section07a6f33d2c721bd97ec4468e5d394b19($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            $value = $context->find('str');
            $buffer .= $this->sectionC57302775d5ec6b2422c95a847d08c49($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th style="width: 100px;">';
            $value = $context->find('str');
            $buffer .= $this->section58626568f26cbfa0d1710c712564a20c($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </thead>
';
            $buffer .= $indent . '        <tbody>
';
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            $buffer .= $indent . '        </tbody>
';
            $buffer .= $indent . '    </table>
';
            $buffer .= $indent . '    <div class="student_progress_ele">
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
            $value = $context->find('js');
            $buffer .= $this->section5be2ae1f4776ac152317d15fddf00f6b($context, $indent, $value);
        }

        return $buffer;
    }

    private function section64879cc4956ded67a6998c4318702124(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' always-loading ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' always-loading ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6165f24a4748267ce6f40e450ff9b77b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' alwaysloaddesc, block_remuiblck ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' alwaysloaddesc, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section829887c36eff14311a4dd5529f02f034(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked
';
                $buffer .= $indent . '            ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEacd4f1d2ec17f9f47f4e07bd66e96b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' alwaysload, block_remuiblck ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' alwaysload, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section154d2a9dd2e801e02c3f78bc968d7cc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadcourseprogressdesc, block_remuiblck ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loadcourseprogressdesc, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b00e8af9aecf92de62b0f9f4262da48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadcourseprogress, block_remuiblck
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loadcourseprogress, block_remuiblck
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb718b99caee41e0260616c8c4a2115f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courses, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07a6f33d2c721bd97ec4468e5d394b19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startdate, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startdate, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC57302775d5ec6b2422c95a847d08c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enrolledstudents, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'enrolledstudents, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58626568f26cbfa0d1710c712564a20c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'progress, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5be2ae1f4776ac152317d15fddf00f6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/course_progress\'], function(courseprogress) {
  courseprogress.init(\'[data-block="remuiblck"] #courseprogress\', {{{alwaysloadwarning}}});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/course_progress\'], function(courseprogress) {
';
                $buffer .= $indent . '  courseprogress.init(\'[data-block="remuiblck"] #courseprogress\', ';
                $value = $this->resolveValue($context->find('alwaysloadwarning'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
