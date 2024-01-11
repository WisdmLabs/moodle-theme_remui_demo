<?php

class __Mustache_d2642c9f9062b34c00e46893b2e2771d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="add_notes" class="add-notes-container">
';
            $buffer .= $indent . '  <div class="add-select-wrapper">
';
            $buffer .= $indent . '    <div class="add-notes-select">
';
            $buffer .= $indent . '      <label for="select-note-course" class="select-note-course-label">';
            $value = $context->find('str');
            $buffer .= $this->section74e144245b20e9906e86fbfbf75f8cbd($context, $indent, $value);
            $buffer .= '</label>
';
            $buffer .= $indent . '      <select class="form-control" id="select-note-course">
';
            $buffer .= $indent . '        <option value="">';
            $value = $context->find('str');
            $buffer .= $this->section2e0e9635253b1160542a90cb7917794d($context, $indent, $value);
            $buffer .= '</option>
';
            $value = $context->find('courses');
            $buffer .= $this->section9c41c8e0528cfd30701dbacb8ef2c884($context, $indent, $value);
            $buffer .= $indent . '      </select>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="select-note-student d-none">
';
            $buffer .= $indent . '      <label for="select-note-student" class="select2-studentlist-label">';
            $value = $context->find('str');
            $buffer .= $this->section21752c02d4b091ed4a2486026c49b8f6($context, $indent, $value);
            $buffer .= '</label>
';
            $buffer .= $indent . '      <select class="select2-studentlist form-control" id="select-note-student"></select>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '  </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '  <div class="row  add-notes-button-wrapper d-none">
';
            $buffer .= $indent . '    <div class="add-notes-button">
';
            $buffer .= $indent . '      <a href="#" class="btn btn-secondary site-note">';
            $value = $context->find('str');
            $buffer .= $this->section5fe5258fa5741b59a5654bfc8c84bb70($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="add-notes-button">
';
            $buffer .= $indent . '      <a href="#" class="btn btn-secondary course-note">';
            $value = $context->find('str');
            $buffer .= $this->sectionB5f4636cfb58c74093d46fed09fb6542($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <div class="add-notes-button">
';
            $buffer .= $indent . '      <a href="#" class="btn btn-secondary personal-note">';
            $value = $context->find('str');
            $buffer .= $this->sectionFae3de5102ccecc81ae6f18f984a0720($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '  </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $value = $context->find('js');
            $buffer .= $this->section8456e2b48c235cbd6e6323c1c3053f8d($context, $indent, $value);
        }

        return $buffer;
    }

    private function section74e144245b20e9906e86fbfbf75f8cbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectacourse,
        block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectacourse,
';
                $buffer .= $indent . '        block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e0e9635253b1160542a90cb7917794d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectacourse, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectacourse, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c41c8e0528cfd30701dbacb8ef2c884(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option id="{{ id }}">{{ shortname }}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <option id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21752c02d4b091ed4a2486026c49b8f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectastudent,
        block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectastudent,
';
                $buffer .= $indent . '        block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fe5258fa5741b59a5654bfc8c84bb70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addsitenote, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addsitenote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5f4636cfb58c74093d46fed09fb6542(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcoursenote, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcoursenote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFae3de5102ccecc81ae6f18f984a0720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addpersonalnote, block_remuiblck';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addpersonalnote, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8456e2b48c235cbd6e6323c1c3053f8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/notes\'], function(){

});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'block_remuiblck/notes\'], function(){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
