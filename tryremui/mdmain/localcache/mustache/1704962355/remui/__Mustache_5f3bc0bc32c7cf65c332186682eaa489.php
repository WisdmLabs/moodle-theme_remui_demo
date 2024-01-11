<?php

class __Mustache_5f3bc0bc32c7cf65c332186682eaa489 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="navbar fixed-top navbar-expand ';
        $value = $this->resolveValue($context->find('navlayout'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '  ';
        $value = $context->find('homepagetransparentheader');
        $buffer .= $this->section328f6957d2c73f7ae670b428fa690904($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-none d-md-flex align-items-center m-0 aabtn" aria-label="';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' - ';
        $value = $context->find('str');
        $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->findDot('output.get_branding_context');
        $buffer .= $this->section957265b38e1a07d19a39f78383718662($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="sub-nav">
';
        $buffer .= $indent . '        <div class="navbar-toggler-wrapper">
';
        $buffer .= $indent . '            <button class="navbar-toggler aabtn d-block d-lg-none border-0 h-100 p-0" data-toggler="drawers" data-action="toggle" data-target="theme_remui-drawers-primary">
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Mobile-menu"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section07e819b1f3f35b4c60bd7e2c826e6088($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- <ul class="navbar-nav d-none d-md-flex my-1 px-1">-->
';
        $buffer .= $indent . '        <!-- page_heading_menu -->
';
        $buffer .= $indent . '        <!-- ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '-->
';
        $buffer .= $indent . '        <!-- </ul> -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="usernavigation" class="navbar-nav ml-auto">
';
        $value = $context->find('edwisermenu');
        $buffer .= $this->section39081bc6c119b4da7b16f74d9a7db871($context, $indent, $value);
        $value = $context->findDot('output.edw_search_box');
        $buffer .= $this->sectionB28a9fbb7aaeac81b8d84bea40291df4($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->section1b07c681b61e4c86c26403bedfe7d701($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('usermenu');
        $buffer .= $this->section091772b4fbd355a3b8bf6c0a1f01bcab($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</nav>
';
        $value = $context->find('show_license_notice');
        $buffer .= $this->sectionF7d854b7b10681ad5c3a3c96f3341c26($context, $indent, $value);
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section328f6957d2c73f7ae670b428fa690904(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'trasnparent-home-nav';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'trasnparent-home-nav';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa3229971a02cbf04b1b4dc2fd0ff1b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'brandname, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'brandname, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10e5d4f269d4f9c19bcf73bf9ea0f78f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img src="{{ logourl }}" class="navbar-brand-logo logo">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logo">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47c8d461753448f5917588ce610c5da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img src="{{ logominiurl }}" class="navbar-brand-logo logomini">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logominiurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logomini">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7b24fab3f7a7dc790ba46e2d79a15ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="navbar-brand-logo icononly" style="color: {{color}};">
                    <i class="fa fa-{{siteicon}}"></i>
                </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="navbar-brand-logo icononly" style="color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f96fa7d66f2adbdd052e86a35cb7b22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="navbar-brand-logo iconsitename" style="color: {{color}};">
                    <i class="fa fa-{{siteicon}}"></i>&nbsp;
                    {{{ sitename }}}
                </span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="navbar-brand-logo iconsitename" style="color: ';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';">
';
                $buffer .= $indent . '                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>&nbsp;
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section957265b38e1a07d19a39f78383718662(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#logourl}}
                <img src="{{ logourl }}" class="navbar-brand-logo logo">
            {{/logourl}}

            {{#logominiurl}}
                <img src="{{ logominiurl }}" class="navbar-brand-logo logomini">
            {{/logominiurl}}

            {{#icononly}}
                <span class="navbar-brand-logo icononly" style="color: {{color}};">
                    <i class="fa fa-{{siteicon}}"></i>
                </span>
            {{/icononly}}

            {{#iconwithsitename}}
                <span class="navbar-brand-logo iconsitename" style="color: {{color}};">
                    <i class="fa fa-{{siteicon}}"></i>&nbsp;
                    {{{ sitename }}}
                </span>
            {{/iconwithsitename}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->section10e5d4f269d4f9c19bcf73bf9ea0f78f($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logominiurl');
                $buffer .= $this->section47c8d461753448f5917588ce610c5da8($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('icononly');
                $buffer .= $this->sectionB7b24fab3f7a7dc790ba46e2d79a15ed($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('iconwithsitename');
                $buffer .= $this->section6f96fa7d66f2adbdd052e86a35cb7b22($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07e819b1f3f35b4c60bd7e2c826e6088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="primary-navigation">
                {{> core/moremenu}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39081bc6c119b4da7b16f74d9a7db871(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="edwiser-navigation">
                    {{> core/moremenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="edwiser-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB28a9fbb7aaeac81b8d84bea40291df4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ output.edw_search_box }}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.edw_search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b07c681b61e4c86c26403bedfe7d701(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_remui/language_menu }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75a7c2e8639cc56ca94b6c803df7cb25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="divider  h-75 align-self-center"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="divider  h-75 align-self-center"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section091772b4fbd355a3b8bf6c0a1f01bcab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex usermenu-wrapper">
                <div class="divider  h-75 align-self-center"></div>
                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                    {{> core/user_menu }}
                </div>
                {{#isloggedin}}
                <div class="divider  h-75 align-self-center"></div>
                {{/isloggedin}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex usermenu-wrapper">
';
                $buffer .= $indent . '                <div class="divider  h-75 align-self-center"></div>
';
                $buffer .= $indent . '                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $value = $context->find('isloggedin');
                $buffer .= $this->section75a7c2e8639cc56ca94b6c803df7cb25($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7d854b7b10681ad5c3a3c96f3341c26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{{show_license_notice}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('show_license_notice'), $context);
                $buffer .= $indent . ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
