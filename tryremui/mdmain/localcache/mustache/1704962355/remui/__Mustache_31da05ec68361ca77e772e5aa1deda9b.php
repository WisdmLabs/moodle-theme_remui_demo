<?php

class __Mustache_31da05ec68361ca77e772e5aa1deda9b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('str');
        $buffer .= $this->sectionE16e3384e4b18ead255232d5fa40f707($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="homepage-dep-warn-container">
';
        $buffer .= $indent . '    <div class="homepage-dep-top-region d-flex flex-column flex-gap-1d5">
';
        $buffer .= $indent . '        <h4 class="h-semibold-4 m-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionEd01d5011cfdca210af3372e5b923c73($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <p class="p-0 para-regular-1">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section7954bd942f4d2ffb841d05d5ebfc8bc4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '        <p class="para-semibold-1 m-0">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->sectionDeed9d7dc2f2176b0af229dff631100d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="homepage-dep-bottom-region">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <p class="para-semibold-1 m-0">';
        $value = $context->find('str');
        $buffer .= $this->section572e155f1df64ff5e7a64916047ff945($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <a class = "para-semibold-1" target="_blank" href="https://edwiser.org/documentation/edwiser-remui/edwiser-remui-page-builder-migration-guide/">';
        $value = $context->find('str');
        $buffer .= $this->sectionA8f271f889069755ac7a4ef877a4a635($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="bottom-divider-region position-relative">
';
        $buffer .= $indent . '            <span class="divider-text position-absolute h-bold-5 text-white d-flex justify-content-center align-items-center">';
        $value = $context->find('str');
        $buffer .= $this->section0895efecba4bf73f4f150a67acdafb4a($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <div class="divicer-line h-100"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="bottom-secondary-region">
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <p class="para-semibold-1 m-0 p-pb-2d5">';
        $value = $context->find('str');
        $buffer .= $this->sectionDa12823035f92273e5c4b137c4e61ecd($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                    <a id="homepage-edwpagebuilder-migratorbtn" href="';
        $value = $context->find('showmigratebtn');
        $buffer .= $this->section381640df8ab433f23a6cc1ac425180dc($context, $indent, $value);
        $value = $context->find('showmigratebtn');
        if (empty($value)) {
            
            $buffer .= '#';
        }
        $buffer .= '" ';
        $value = $context->find('showmigratebtn');
        if (empty($value)) {
            
            $buffer .= 'style="cursor:not-allowed; pointer-events:initial" ';
        }
        $buffer .= ' class="btn btn-primary ';
        $value = $this->resolveValue($context->find('disablebtn'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" >Migrate homepage design</a>
';
        $buffer .= $indent . '                    ';
        $value = $context->find('showmigratebtn');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->sectionAfb7f403ba3a2ff7700c0e5eb73093d3($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <div class="p-pb-2d5">
';
        $buffer .= $indent . '                        <div class="accordion homepage-dep-info-accordion" id="accordion2">
';
        $buffer .= $indent . '                            <div class="accordion-group">
';
        $buffer .= $indent . '                                <div class="accordion-heading ">
';
        $buffer .= $indent . '                                    <div class="d-flex">
';
        $buffer .= $indent . '                                        <span class="edw-icon edw-icon-Help p-mr-1d5"></span>
';
        $buffer .= $indent . '                                        <a class="accordion-toggle text-decoration-none  d-flex justify-content-between align-items-center w-100" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
';
        $buffer .= $indent . '                                            <h6 class="h-bold-6 m-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionFc6c1c1583d6242741de50bc3b397dc6($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '                                            <span class="edw-icon edw-icon-Down-Arrow arrow-iconspan "></span>
';
        $buffer .= $indent . '                                            <span class="edw-icon edw-icon-UpArrow arrow-iconspan d-none"></span>
';
        $buffer .= $indent . '                                        </a>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div id="collapseOne" class="accordion-body collapse">
';
        $buffer .= $indent . '                                    <div class="accordion-inner para-regular-1 p-mt-2d5">
';
        $buffer .= $indent . '                                        ';
        $value = $context->find('str');
        $buffer .= $this->section38a98257d938647f086641e904a14142($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <p class="para-regular-1 m-0 bottom-secondary-region-note">';
        $value = $context->find('str');
        $buffer .= $this->section5e22b7e801d5087d71e2a411d15f4f2c($context, $indent, $value);
        $buffer .= ' </p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="homepage-dep-upgrade-info">
';
        $buffer .= $indent . '        <span class="upgrade-info-highlighted-content para-regular-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionBcdbb91fdd189b7ced330c647425b34d($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <a href="https://edwiser.org/my-account/" target="_blank" class="para-semibold-1">';
        $value = $context->find('str');
        $buffer .= $this->section81dfc32ad024fbac0264fd8e61be3390($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section138f4562c7fa551fa8945381ff4cb1a7($context, $indent, $value);

        return $buffer;
    }

    private function sectionE16e3384e4b18ead255232d5fa40f707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpage-dep-top-above-st, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'settingpage-dep-top-above-st, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd01d5011cfdca210af3372e5b923c73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpage-dep-top-st1, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpage-dep-top-st1, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7954bd942f4d2ffb841d05d5ebfc8bc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpage-dep-top-st2, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpage-dep-top-st2, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDeed9d7dc2f2176b0af229dff631100d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpage-dep-top-st3, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpage-dep-top-st3, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section572e155f1df64ff5e7a64916047ff945(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomst1, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomst1, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8f271f889069755ac7a4ef877a4a635(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomst2, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomst2, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0895efecba4bf73f4f150a67acdafb4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomst3, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomst3, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa12823035f92273e5c4b137c4e61ecd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomsecondaryst1, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomsecondaryst1, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section381640df8ab433f23a6cc1ac425180dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{wwwroot}}/local/edwiserpagebuilder/homepageimporter/homepage.php?data={{data}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/local/edwiserpagebuilder/homepageimporter/homepage.php?data=';
                $value = $this->resolveValue($context->find('data'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfb7f403ba3a2ff7700c0e5eb73093d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomsecondaryst2, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomsecondaryst2, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc6c1c1583d6242741de50bc3b397dc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomsecondaryst3, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomsecondaryst3, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38a98257d938647f086641e904a14142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomsecondaryst4, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomsecondaryst4, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e22b7e801d5087d71e2a411d15f4f2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settingpagedepbottomsecondaryst5, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settingpagedepbottomsecondaryst5, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcdbb91fdd189b7ced330c647425b34d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'homepagedrpecationmodalst8,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'homepagedrpecationmodalst8,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81dfc32ad024fbac0264fd8e61be3390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'upgradeherelinktext,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'upgradeherelinktext,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section138f4562c7fa551fa8945381ff4cb1a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($){
	$(document).ready(function(){
        $(".homepage-dep-info-accordion .accordion-heading .accordion-toggle").click(function(){
            $(".accordion-heading .edw-icon-Down-Arrow").toggleClass("d-none");
            $(".accordion-heading .edw-icon-UpArrow").toggleClass("d-none");
        });
	});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($){
';
                $buffer .= $indent . '	$(document).ready(function(){
';
                $buffer .= $indent . '        $(".homepage-dep-info-accordion .accordion-heading .accordion-toggle").click(function(){
';
                $buffer .= $indent . '            $(".accordion-heading .edw-icon-Down-Arrow").toggleClass("d-none");
';
                $buffer .= $indent . '            $(".accordion-heading .edw-icon-UpArrow").toggleClass("d-none");
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '	});
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
