<?php

class __Mustache_61a941902943996ce0efb28c88127e40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="enrolled_users_stats_block">
';
        $value = $context->find('hascategory');
        $buffer .= $this->section75a46dc7c80fde9fbe43f58f826d9387($context, $indent, $value);
        $value = $context->find('hascategory');
        if (empty($value)) {
            
            $buffer .= $indent . '  <div class="enroll-stats-error alert alert-info">
';
            $buffer .= $indent . '    ';
            $value = $context->find('str');
            $buffer .= $this->section0bd845db9465bc0d8c0c8db6f81af5fd($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '  </div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9440442ecb151ccfda5d9d1550675961(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectcategory, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectcategory, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bd1a7ffec8a334457b0eefee00f65df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <option data-id="{{ key }}">{{{categoryname}}}</option>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <option data-id="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('categoryname'), $context);
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

    private function section91f9ec669bc1383f466c183c99bae363(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nousersincoursecategoryfound, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nousersincoursecategoryfound, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75a46dc7c80fde9fbe43f58f826d9387(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div class="chart-content-wrapper d-flex  justify-content-around align-items-center flex-gap-6">
    <div class="enrolleduser-chart-wrapper  m-0 p-0 align-self-center">
      <div class="chart-responsive">
        <canvas id="pieChartblock"></canvas>
      </div>
    </div>
    <div class="d-flex flex-column flex-gap-8">
      <div class="d-flex flex-column flex-gap-1">
        <label class="m-0">{{#str}}selectcategory, block_remuiblck{{/str}}</label>
        <select id=\'coursecategorylistblock\' class=\'coursecategorylistblock form-control mb-10\' data-style="coursecategorylistblock form-control">
          {{# category }}
          <option data-id="{{ key }}">{{{categoryname}}}</option>
          {{/ category }}
        </select>
      </div>
      <ul class="chart-legend list-group list-group-full clearfix m-0 border-0 flex-gap-4"></ul>
    </div>
  </div>
  <div class="enroll-stats-error alert alert-danger" style="display:none">
    {{#str}}problemwhileloadingdata, block_remuiblck{{/str}}
  </div>
  <div class="enroll-stats-nouserserror alert alert-info" style="display:none">
    {{#str}}nousersincoursecategoryfound, block_remuiblck{{/str}}
  </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <div class="chart-content-wrapper d-flex  justify-content-around align-items-center flex-gap-6">
';
                $buffer .= $indent . '    <div class="enrolleduser-chart-wrapper  m-0 p-0 align-self-center">
';
                $buffer .= $indent . '      <div class="chart-responsive">
';
                $buffer .= $indent . '        <canvas id="pieChartblock"></canvas>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="d-flex flex-column flex-gap-8">
';
                $buffer .= $indent . '      <div class="d-flex flex-column flex-gap-1">
';
                $buffer .= $indent . '        <label class="m-0">';
                $value = $context->find('str');
                $buffer .= $this->section9440442ecb151ccfda5d9d1550675961($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '        <select id=\'coursecategorylistblock\' class=\'coursecategorylistblock form-control mb-10\' data-style="coursecategorylistblock form-control">
';
                $value = $context->find('category');
                $buffer .= $this->section4bd1a7ffec8a334457b0eefee00f65df($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <ul class="chart-legend list-group list-group-full clearfix m-0 border-0 flex-gap-4"></ul>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <div class="enroll-stats-error alert alert-danger" style="display:none">
';
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->sectionBdd2f8149d7c1eb0d0f6838d9c94954c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '  <div class="enroll-stats-nouserserror alert alert-info" style="display:none">
';
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->section91f9ec669bc1383f466c183c99bae363($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bd845db9465bc0d8c0c8db6f81af5fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocoursecategoryfound, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocoursecategoryfound, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
