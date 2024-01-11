<?php

class __Mustache_3876bb5839113fed284245ed6f0f99e1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-content" class="pb-3 d-print-block">
';
        $buffer .= $indent . '    <div id="region-main-box">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section1575b5b225bb2f0e5a86a9a6ea2982c2($context, $indent, $value);
        $buffer .= $indent . '        <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section98dc8d5cb621946c6745b44b94a9b8a7($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section040c6d0a7d93aee16cc40d13dd04270f($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->section5d8fffe618394a03a835ee1d17738c27($context, $indent, $value);
        $value = $context->find('user');
        $buffer .= $this->section7b5888882364384236049780aa9e05d4($context, $indent, $value);
        $value = $context->find('user');
        $buffer .= $this->sectionA5637fd2dd7dfd2798f57f823914af8f($context, $indent, $value);
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('user');
        $buffer .= $this->sectionB79071c912e4e177f23dbfbe96425d3a($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </section>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section25a8e49468321e8b4391493c273538d2($context, $indent, $value);

        return $buffer;
    }

    private function section1575b5b225bb2f0e5a86a9a6ea2982c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="region-main-settings-menu" class="d-print-none">
            <div> {{{ regionmainsettingsmenu }}} </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '            <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
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

    private function section98dc8d5cb621946c6745b44b94a9b8a7(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section040c6d0a7d93aee16cc40d13dd04270f(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d8fffe618394a03a835ee1d17738c27(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                    <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b5888882364384236049780aa9e05d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>theme_remui/profile_general_details}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/profile_general_details')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section279e3087add8a5b37e61559d404d6bdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ firstname }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section720da621e11b81c3d93c0d5a76321389(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aboutme, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aboutme, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c2d3b7209d10f7d9c9f3571b6ad33a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' courses, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' courses, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF30b1f4071f2a4f1e06e3696fe5f0508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#usercourses" aria-controls="usercourses"
                                role="tab">
                                {{# str }} courses, theme_remui {{/ str }}
                            </a>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                            <a class="nav-link" data-toggle="tab" href="#usercourses" aria-controls="usercourses"
';
                $buffer .= $indent . '                                role="tab">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->section9c2d3b7209d10f7d9c9f3571b6ad33a0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcb613229c7c2d23872adb86762c5913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' setting, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' setting, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5637fd2dd7dfd2798f57f823914af8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="edw-tabs-navigation">
                    <ul class="nav nav-tabs more-nav " role="tablist">
                        <li class="nav-item" role="presentation">
                            <a id="aboutmetab" class="nav-link active" data-toggle="tab" href="#aboutme" aria-controls="aboutme" role="tab">
                                {{# notcurrentuser }} {{ firstname }}{{/ notcurrentuser}}
                                {{^ notcurrentuser }}{{# str }} aboutme, theme_remui {{/ str }}{{/ notcurrentuser}}
                            </a>
                        </li>
                        {{#usercourses}}
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#usercourses" aria-controls="usercourses"
                                role="tab">
                                {{# str }} courses, theme_remui {{/ str }}
                            </a>
                        </li>
                        {{/usercourses}}
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#userprefs" aria-controls="userprefs" role="tab">
                                {{# str }} setting, theme_remui {{/ str }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-wrapper">
                    <div class="tab-pane active animation-slide-left" id="aboutme" role="tabpanel">
                        <div role="main">
                            {{> theme_remui/profile_about_me}}
                        </div>
                    </div>

                    <div class="tab-pane animation-slide-left" id="usercourses" role="tabpanel">
                        <div role="main">
                            {{> theme_remui/profile_courses }}
                        </div>
                    </div>
                    <div class="tab-pane animation-slide-left float-right" id="userprefs" role="tabpanel">
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="edw-tabs-navigation">
';
                $buffer .= $indent . '                    <ul class="nav nav-tabs more-nav " role="tablist">
';
                $buffer .= $indent . '                        <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                            <a id="aboutmetab" class="nav-link active" data-toggle="tab" href="#aboutme" aria-controls="aboutme" role="tab">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('notcurrentuser');
                $buffer .= $this->section279e3087add8a5b37e61559d404d6bdd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $context->find('notcurrentuser');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section720da621e11b81c3d93c0d5a76321389($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $value = $context->find('usercourses');
                $buffer .= $this->sectionF30b1f4071f2a4f1e06e3696fe5f0508($context, $indent, $value);
                $buffer .= $indent . '                        <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                            <a class="nav-link" data-toggle="tab" href="#userprefs" aria-controls="userprefs" role="tab">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->sectionBcb613229c7c2d23872adb86762c5913($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="tab-content profile-tab-wrapper">
';
                $buffer .= $indent . '                    <div class="tab-pane active animation-slide-left" id="aboutme" role="tabpanel">
';
                $buffer .= $indent . '                        <div role="main">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/profile_about_me')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="tab-pane animation-slide-left" id="usercourses" role="tabpanel">
';
                $buffer .= $indent . '                        <div role="main">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/profile_courses')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="tab-pane animation-slide-left float-right" id="userprefs" role="tabpanel">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB79071c912e4e177f23dbfbe96425d3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25a8e49468321e8b4391493c273538d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_remui/profile\'], function(){
$(document).ready(function(){
$(\'.header-button-group\').removeClass(\'btn-group\').appendTo(".extra-buttons-container");
$(\'#message-user-button\').addClass(\'btn-primary btn-lg\');
$(\'#toggle-contact-button\').addClass(\'btn-secondary btn-lg\');

});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/profile\'], function(){
';
                $buffer .= $indent . '$(document).ready(function(){
';
                $buffer .= $indent . '$(\'.header-button-group\').removeClass(\'btn-group\').appendTo(".extra-buttons-container");
';
                $buffer .= $indent . '$(\'#message-user-button\').addClass(\'btn-primary btn-lg\');
';
                $buffer .= $indent . '$(\'#toggle-contact-button\').addClass(\'btn-secondary btn-lg\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
