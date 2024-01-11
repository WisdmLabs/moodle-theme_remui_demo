<?php

class __Mustache_b400c4c6115f2848a4a43d03d099a3ac extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $context->findDot('focusdata.enabled');
        $buffer .= $this->section795ff4438393a00b1b692cc6553cab09($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('courseindex');
        $buffer .= $this->section1bdad85e559f685537d44e9ea7e2ba52($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->section5bb7ada7dcfd658eae94706a53e0cb95($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '        ';
        $value = $context->find('sitenotification');
        $buffer .= $this->section0a95f7542ba5109a5ecb39eaeb23c336($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('canaddfwtopblocks');
        $buffer .= $this->section0b167a11db688b841b2a10c228316e03($context, $indent, $value);
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '            ';
        $value = $context->find('notification');
        $buffer .= $this->sectionEaeb325b789ada9925494e9927bf906b($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('customhomepage');
        $buffer .= $this->sectionC7813adf01ae5d2e0c49f218f99b8bdc($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('customhomepage');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_remui/frontpagesections')) {
                $buffer .= $partial->renderInternal($context, $indent . '                ');
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '            <div class="drawer-toggles d-flex">
';
        $value = $context->find('courseindex');
        $buffer .= $this->section27baf3571c423aee4615b96fcffeef78($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->section337d9b61500112a6a028f1e6f59ddee5($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('notstudent');
        $buffer .= $this->section3f518c225fbe9f18b60af2f26b2b10d2($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('isdashboardstatsshow');
        $buffer .= $this->section421a1a61bad2ca6baa7222c4cf3ca835($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->sectionBbd9c4d6838df75db5a62df81394544f($context, $indent, $value);
        $value = $context->find('canaddtopblocks');
        $buffer .= $this->section1541c889529757e7468f15d67a77a8b3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('sitenotification');
        $buffer .= $this->sectionC83f85889373aabddc2602f25124ff0e($context, $indent, $value);

        return $buffer;
    }

    private function section795ff4438393a00b1b692cc6553cab09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> theme_remui/navbar_fm }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('theme_remui/navbar_fm')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bdad85e559f685537d44e9ea7e2ba52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_remui/drawer }}
            {{$id}}theme_remui-drawers-courseindex{{/id}}
            {{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
            {{$drawercontent}}
                {{{courseindex}}}
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
            {{$drawerstate}}show-drawer-left{{/drawerstate}}
            {{$tooltipplacement}}right{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{/ theme_remui/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_remui/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block05e0da68643b06893f68fa036a234fc1'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawercontent' => array($this, 'blockD56da21f9a4b20987f95cec76380b378'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'block9ac4e5859f44816b862545bc2c6e6a46'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bb7ada7dcfd658eae94706a53e0cb95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_remui/drawer }}
            {{$id}}theme_remui-drawers-blocks{{/id}}
            {{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
            {{$drawercontent}}
                <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                    {{{ addblockbutton }}}
                    {{{ sidepreblocks }}}
                </section>
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
            {{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
            {{$drawerstate}}show-drawer-right{{/drawerstate}}
            {{$tooltipplacement}}left{{/tooltipplacement}}
            {{$drawercloseonresize}}1{{/drawercloseonresize}}
            {{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
        {{/ theme_remui/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('theme_remui/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block01039ce50ee76069485efbb5fb449b2f'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'block382614dcdfc76c05d35bb2edf672a1b2'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a95f7542ba5109a5ecb39eaeb23c336(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{sitenotification}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('sitenotification'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90191ef1128c9bcb42a1ae523030aebd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="margin-top:59px"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="margin-top:59px"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c64ec2e3cb08df408c6125d5a97962(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'full-width-top,theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'full-width-top,theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC94f8cc023030aecc291284a00ce362e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="region-fullwidthtop-blocks-indicator" class="container-fluid block-indicator">
                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                            {{#str}}full-width-top,theme_remui {{/str}}
                        </font>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="region-fullwidthtop-blocks-indicator" class="container-fluid block-indicator">
';
                $buffer .= $indent . '                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionD8c64ec2e3cb08df408c6125d5a97962($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </font>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b167a11db688b841b2a10c228316e03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <section id="region-fullwidthtop-blocks" class="has-blocks"{{#sitenotification}}style="margin-top:59px"{{/sitenotification}} aria-label="region top blocks">
            <div role="main">
                {{{addblockbuttonfwtop}}}
                {{{ sidefwtopblocks }}}
                {{#addblockbuttonfwtop}}
                    <div id="region-fullwidthtop-blocks-indicator" class="container-fluid block-indicator">
                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                            {{#str}}full-width-top,theme_remui {{/str}}
                        </font>
                    </div>
                {{/addblockbuttonfwtop}}
            </div>
        </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <section id="region-fullwidthtop-blocks" class="has-blocks"';
                $value = $context->find('sitenotification');
                $buffer .= $this->section90191ef1128c9bcb42a1ae523030aebd($context, $indent, $value);
                $buffer .= ' aria-label="region top blocks">
';
                $buffer .= $indent . '            <div role="main">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('addblockbuttonfwtop'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sidefwtopblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('addblockbuttonfwtop');
                $buffer .= $this->sectionC94f8cc023030aecc291284a00ce362e($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEaeb325b789ada9925494e9927bf906b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> theme_remui/product_notification}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/product_notification')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7813adf01ae5d2e0c49f218f99b8bdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{customhomepage}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('customhomepage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27baf3571c423aee4615b96fcffeef78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                            class="btn btn-primary icon-no-margin p-0"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_remui-drawers-courseindex"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="{{#str}}opendrawerindex, core{{/str}}"
                        >
                            <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                            {{#pix}} t/index_drawer, moodle {{/pix}}
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                            class="btn btn-primary icon-no-margin p-0"
';
                $buffer .= $indent . '                            data-toggler="drawers"
';
                $buffer .= $indent . '                            data-action="toggle"
';
                $buffer .= $indent . '                            data-target="theme_remui-drawers-courseindex"
';
                $buffer .= $indent . '                            data-toggle="tooltip"
';
                $buffer .= $indent . '                            data-placement="right"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section337d9b61500112a6a028f1e6f59ddee5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
                        <button
                            class="btn btn-primary icon-no-margin p-0"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_remui-drawers-blocks"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="{{#str}}opendrawerblocks, core{{/str}}"
                        >
                            <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                            <span class="dir-rtl-hide">
                                <span class="edw-icon edw-icon-Long-Left_24"></span>
                            </span>
                            <span class="dir-ltr-hide">
                                <span class="edw-icon edw-icon-Long-Right_24"></span>
                            </span>
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                            class="btn btn-primary icon-no-margin p-0"
';
                $buffer .= $indent . '                            data-toggler="drawers"
';
                $buffer .= $indent . '                            data-action="toggle"
';
                $buffer .= $indent . '                            data-target="theme_remui-drawers-blocks"
';
                $buffer .= $indent . '                            data-toggle="tooltip"
';
                $buffer .= $indent . '                            data-placement="right"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <span class="dir-rtl-hide">
';
                $buffer .= $indent . '                                <span class="edw-icon edw-icon-Long-Left_24"></span>
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                            <span class="dir-ltr-hide">
';
                $buffer .= $indent . '                                <span class="edw-icon edw-icon-Long-Right_24"></span>
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD37afd8da1fb28d1608b9d10dae09bbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_remui/course_stats }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/course_stats')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f518c225fbe9f18b60af2f26b2b10d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#iscoursestatsshow}}
                    {{> theme_remui/course_stats }}
                {{/iscoursestatsshow}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('iscoursestatsshow');
                $buffer .= $this->sectionD37afd8da1fb28d1608b9d10dae09bbf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section421a1a61bad2ca6baa7222c4cf3ca835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_remui/dashboard_stats }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/dashboard_stats')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbd9c4d6838df75db5a62df81394544f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="secondary-navigation edw-tabs-navigation d-print-none">
                    {{> core/moremenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="secondary-navigation edw-tabs-navigation d-print-none">
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

    private function sectionC405c4dad5b4d5aa1da541eac1566d6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'side-top,theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'side-top,theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1126981e284e7e776b9e47eb38070625(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="region-top-blocks-indicator" class="container-fluid block-indicator">
                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                            {{#str}}side-top,theme_remui {{/str}}
                        </font>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="region-top-blocks-indicator" class="container-fluid block-indicator">
';
                $buffer .= $indent . '                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionC405c4dad5b4d5aa1da541eac1566d6a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </font>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1541c889529757e7468f15d67a77a8b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="region-top-blocks" class="has-blocks" aria-label="region top blocks">
                <div role="main">
                    {{{addblockbuttontop}}}
                    {{{ sidetopblocks }}}
                    {{#addblockbuttontop}}
                    <div id="region-top-blocks-indicator" class="container-fluid block-indicator">
                        <font class="text-center p-px-2d5 m-0  bg-white block-indicator-text-wrapper ">
                            {{#str}}side-top,theme_remui {{/str}}
                        </font>
                    </div>
                    {{/addblockbuttontop}}
                </div>
            </section>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="region-top-blocks" class="has-blocks" aria-label="region top blocks">
';
                $buffer .= $indent . '                <div role="main">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('addblockbuttontop'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sidetopblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('addblockbuttontop');
                $buffer .= $this->section1126981e284e7e776b9e47eb38070625($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd6876d47657b64d0457cd433a1260f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($){
        // Save the preference, after dismiss the announcement
        $(\'.site-announcement #dismiss_announcement\').click(function(){
            M.util.set_user_preference(\'remui_dismised_announcement\', true);
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($){
';
                $buffer .= $indent . '        // Save the preference, after dismiss the announcement
';
                $buffer .= $indent . '        $(\'.site-announcement #dismiss_announcement\').click(function(){
';
                $buffer .= $indent . '            M.util.set_user_preference(\'remui_dismised_announcement\', true);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC83f85889373aabddc2602f25124ff0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
    require([\'jquery\'], function($){
        // Save the preference, after dismiss the announcement
        $(\'.site-announcement #dismiss_announcement\').click(function(){
            M.util.set_user_preference(\'remui_dismised_announcement\', true);
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
                $buffer .= $this->sectionFd6876d47657b64d0457cd433a1260f1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block05e0da68643b06893f68fa036a234fc1($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_remui-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function blockD56da21f9a4b20987f95cec76380b378($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function block9ac4e5859f44816b862545bc2c6e6a46($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block01039ce50ee76069485efbb5fb449b2f($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_remui-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function block382614dcdfc76c05d35bb2edf672a1b2($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}
