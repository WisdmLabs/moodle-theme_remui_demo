<?php

class __Mustache_19cc76b7f5698a39061ba847e16374e7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionD6ce210f220feaa6274509c8595505fb($context, $indent, $value);
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section9d1e5e3e5e26a72c4212f79b3aed4230($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->sectionD7d65e9bbfac635a50fccf5a323d911a($context, $indent, $value);
        $buffer .= $indent . '    <div class="hidden">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="layout-1 container-fluid p-0 ">
';
        $buffer .= $indent . '        <div id="course-archive-main-container"  class="container">
';
        $buffer .= $indent . '            
';
        if ($partial = $this->mustache->loadPartial('theme_remui/coursefilters')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '            <div class="loader-overlay d-flex justify-content-center align-items-center" style="min-height:200px;">
';
        $buffer .= $indent . '                <div class="inner" style="/* width: 50px; *//* height: 50px; */">
';
        $buffer .= $indent . '                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="/* margin: auto; *//* background: rgb(241, 242, 243); *//* display: block; */" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
';
        $buffer .= $indent . '                        <circle cx="50" cy="50" fill="none" stroke="#9b9091" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
';
        $buffer .= $indent . '                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
';
        $buffer .= $indent . '                        </circle>
';
        $buffer .= $indent . '                    </svg>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="d-none tag-wrapper p-my-6" style="display: flex;align-items: center;">
';
        $buffer .= $indent . '                <!-- Here we will render the course tags from Javascript side. -->
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-none course-cards grid-view latest-cards edw-course-card-grid">
';
        $buffer .= $indent . '                <!-- Here we will render the cards from Javascript side. -->
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-none w-100 cards-pagination">
';
        $buffer .= $indent . '                <!-- Here we will render the pagination from Javascript side. -->
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB999e1dec8985e90856a54b0b4753639($context, $indent, $value);

        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6ce210f220feaa6274509c8595505fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="region_main_settings_menu_proxy"></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d1e5e3e5e26a72c4212f79b3aed4230(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/activity_header }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7d65e9bbfac635a50fccf5a323d911a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container-fluid tertiary-navigation">
        <div class="navitem">
            {{> core/url_select}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB999e1dec8985e90856a54b0b4753639(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'theme_remui/coursecategory\'], function(c){
        c.init(\'{{{defaultcat}}}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'theme_remui/coursecategory\'], function(c){
';
                $buffer .= $indent . '        c.init(\'';
                $value = $this->resolveValue($context->find('defaultcat'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
