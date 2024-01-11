<?php

class __Mustache_20ce44fbcb8581f7c0059777d88a4080 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('homepagedepricationmodal'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('canaddbottomblocks');
        $buffer .= $this->section19f8da6e1172786549368e34709d8bc5($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('canaddfullwidthbottomblocks');
        $buffer .= $this->section3ca6873fa335d0e38a12989be6e7a21e($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('edw_quick_menu');
        $buffer .= $this->section5ef1b86754625e938d23a8f14930d781($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('addblockfloatmenu');
        $buffer .= $this->sectionB3889670f0e9651476bd4b50accdaf79($context, $indent, $value);
        $value = $context->find('showloader');
        $buffer .= $this->sectionD0be4c9addb1021c17cfeb91e11ec61f($context, $indent, $value);
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        $value = $context->find('pagebuilderfileexist');
        $buffer .= $this->sectionA2965af3b4a905a5c9911e46548c763a($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionF17be32ecc3f8decfec9019d8964a681($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('enabledictionary');
        $buffer .= $this->section6b4ae0f2d82cccb1b2ae35f9d62f620b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showloader');
        $buffer .= $this->sectionF6437b34baba8846b01a7f2aaac4bb4a($context, $indent, $value);
        $buffer .= $indent . '<!--
';
        $value = $context->find('sitenotification');
        $buffer .= $this->section4c8da4d76c58ff34a8ce91610162171e($context, $indent, $value);
        $buffer .= $indent . '-->
';

        return $buffer;
    }

    private function section84ef97633645451a23c0678c5e14026b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'side-bottom,theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'side-bottom,theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12e7e2636039839da544bd8df69d724a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="region-bottom-blocks-indicator" class="container-fluid block-indicator">
                <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                    {{#str}}side-bottom,theme_remui {{/str}}
                </font>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="region-bottom-blocks-indicator" class="container-fluid block-indicator">
';
                $buffer .= $indent . '                <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section84ef97633645451a23c0678c5e14026b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </font>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19f8da6e1172786549368e34709d8bc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section id="region-bottom-blocks" class="has-blocks" aria-label="region bottom blocks">
        <div role="main">
            {{{addblockbuttonbottom}}}
            {{{ sidebottomblocks }}}
            {{#addblockbuttonbottom}}
            <div id="region-bottom-blocks-indicator" class="container-fluid block-indicator">
                <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                    {{#str}}side-bottom,theme_remui {{/str}}
                </font>
            </div>
            {{/addblockbuttonbottom}}
        </div>
    </section>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <section id="region-bottom-blocks" class="has-blocks" aria-label="region bottom blocks">
';
                $buffer .= $indent . '        <div role="main">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addblockbuttonbottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sidebottomblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('addblockbuttonbottom');
                $buffer .= $this->section12e7e2636039839da544bd8df69d724a($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53508b2b6b9b62bd7f902d724758b88e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'full-bottom,theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'full-bottom,theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdbe34f86843936eb391802eba304d2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-fullwidthbottom-blocks-indicator" class="container-fluid block-indicator">
                    <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                        {{#str}}full-bottom,theme_remui {{/str}}
                    </font>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div id="region-fullwidthbottom-blocks-indicator" class="container-fluid block-indicator">
';
                $buffer .= $indent . '                    <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section53508b2b6b9b62bd7f902d724758b88e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </font>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ca6873fa335d0e38a12989be6e7a21e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section id="region-fullwidthbottom-blocks" class="has-blocks" aria-label="region top blocks">
        <div role="main">
            {{{addblockbuttonfullwidthbottom}}}
            {{{ sidefullwidthbottomblocks }}}
            {{#addblockbuttonfullwidthbottom}}
                <div id="region-fullwidthbottom-blocks-indicator" class="container-fluid block-indicator">
                    <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                        {{#str}}full-bottom,theme_remui {{/str}}
                    </font>
                </div>
            {{/addblockbuttonfullwidthbottom}}
        </div>
    </section>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <section id="region-fullwidthbottom-blocks" class="has-blocks" aria-label="region top blocks">
';
                $buffer .= $indent . '        <div role="main">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addblockbuttonfullwidthbottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sidefullwidthbottomblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('addblockbuttonfullwidthbottom');
                $buffer .= $this->sectionDdbe34f86843936eb391802eba304d2b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ef1b86754625e938d23a8f14930d781(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> theme_remui/edw_quick_menu}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/edw_quick_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3889670f0e9651476bd4b50accdaf79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{addblockfloatmenu}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('addblockfloatmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0be4c9addb1021c17cfeb91e11ec61f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="page-loader-wrapper">
    <img src="{{loaderimageurl}}" alt="loader image">
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="page-loader-wrapper">
';
                $buffer .= $indent . '    <img src="';
                $value = $this->resolveValue($context->find('loaderimageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image">
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2965af3b4a905a5c9911e46548c763a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>local_edwiserpagebuilder/layout_require_js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserpagebuilder/layout_require_js')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF17be32ecc3f8decfec9019d8964a681(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_remui/loader\');
require([\'theme_remui/loader\', \'theme_remui/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_remui/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_remui/loader\');
';
                $buffer .= $indent . 'require([\'theme_remui/loader\', \'theme_remui/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_remui/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6329481cd90aa947ddaf2db6c4cf2f8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/dictionary\'], function(dictionary) {
    dictionary.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_remui/dictionary\'], function(dictionary) {
';
                $buffer .= $indent . '    dictionary.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b4ae0f2d82cccb1b2ae35f9d62f620b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'theme_remui/dictionary\'], function(dictionary) {
    dictionary.init();
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section6329481cd90aa947ddaf2db6c4cf2f8c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14ebd9dc43941ea3b62eaa7f29ffb9ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
$(window).on(\'load\', function() {
    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
});
$(document).ready(function() {
    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '$(window).on(\'load\', function() {
';
                $buffer .= $indent . '    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6437b34baba8846b01a7f2aaac4bb4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
$(window).on(\'load\', function() {
    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
});
$(document).ready(function() {
    $(\'#page-loader-wrapper\').fadeOut(\'slow\');
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section14ebd9dc43941ea3b62eaa7f29ffb9ee($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section432bbf7a26be0aa7bdead15d191b2eb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($){
    $(document).ready(function(){
        // Hide and Show Go to top button.
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $(".alert.site-announcement").addClass("fixedtop-0");
            } else {
                $(".alert.site-announcement").removeClass("fixedtop-0");
            }
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
                $buffer .= $indent . '    $(document).ready(function(){
';
                $buffer .= $indent . '        // Hide and Show Go to top button.
';
                $buffer .= $indent . '        $(window).scroll(function() {
';
                $buffer .= $indent . '            if ($(this).scrollTop() > 50) {
';
                $buffer .= $indent . '                $(".alert.site-announcement").addClass("fixedtop-0");
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(".alert.site-announcement").removeClass("fixedtop-0");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c8da4d76c58ff34a8ce91610162171e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'jquery\'], function($){
    $(document).ready(function(){
        // Hide and Show Go to top button.
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $(".alert.site-announcement").addClass("fixedtop-0");
            } else {
                $(".alert.site-announcement").removeClass("fixedtop-0");
            }
        });
    });
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section432bbf7a26be0aa7bdead15d191b2eb1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
