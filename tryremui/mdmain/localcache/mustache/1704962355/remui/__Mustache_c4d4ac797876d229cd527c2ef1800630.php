<?php

class __Mustache_c4d4ac797876d229cd527c2ef1800630 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="quiz_stats">
';
        $value = $context->find('has_courses_for_quiz');
        $buffer .= $this->section3cd29eb0de73037a36dbd2b9badf3070($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section0bb84162a17c0edcdfdee931cf9d48af($context, $indent, $value);

        return $buffer;
    }

    private function section613fab0ac82f299761314e277cf170d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <option data-courseid="{{ courseid }}">{{{ shortname }}}</option>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <option data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bda9e873eaf8be41ca25a1237b578d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <option data-courseid="{{ courseid }}" data-quizid="{{ quizid }}">{{{ quizname }}}</option>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <option data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-quizid="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('quizname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdd2f8149d7c1eb0d0f6838d9c94954c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'problemwhileloadingdata, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'problemwhileloadingdata, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cd29eb0de73037a36dbd2b9badf3070(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="quiz-list-wrapper">
    <select id="quiz-course-list" class="form-control">
      {{# courses_for_quiz}}
      <option data-courseid="{{ courseid }}">{{{ shortname }}}</option>
      {{/ courses_for_quiz}}
    </select>

    <select id="quiz-list" class="form-control">
      {{# quizzes_in_first_course}}
      <option data-courseid="{{ courseid }}" data-quizid="{{ quizid }}">{{{ quizname }}}</option>
      {{/ quizzes_in_first_course}}
    </select>
  </div>

  <div id="quiz-chart-area" class="chart">
    <canvas id="barChart"></canvas>
  </div>
  <div class="quiz-stats-error alert alert-danger" style="display:none">
    {{#str}}problemwhileloadingdata, block_remuiblck{{/str}}
  </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <div class="quiz-list-wrapper">
';
                $buffer .= $indent . '    <select id="quiz-course-list" class="form-control">
';
                $value = $context->find('courses_for_quiz');
                $buffer .= $this->section613fab0ac82f299761314e277cf170d6($context, $indent, $value);
                $buffer .= $indent . '    </select>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <select id="quiz-list" class="form-control">
';
                $value = $context->find('quizzes_in_first_course');
                $buffer .= $this->section0bda9e873eaf8be41ca25a1237b578d1($context, $indent, $value);
                $buffer .= $indent . '    </select>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <div id="quiz-chart-area" class="chart">
';
                $buffer .= $indent . '    <canvas id="barChart"></canvas>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <div class="quiz-stats-error alert alert-danger" style="display:none">
';
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->sectionBdd2f8149d7c1eb0d0f6838d9c94954c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb84162a17c0edcdfdee931cf9d48af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/quizstats\'], function(quizstats) {
quizstats.init(\'#quiz_stats\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/quizstats\'], function(quizstats) {
';
                $buffer .= $indent . 'quizstats.init(\'#quiz_stats\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
