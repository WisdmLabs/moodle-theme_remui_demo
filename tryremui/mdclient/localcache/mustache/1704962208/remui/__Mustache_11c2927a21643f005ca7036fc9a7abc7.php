<?php

class __Mustache_11c2927a21643f005ca7036fc9a7abc7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover ">
';
        $buffer .= $indent . '    <div class="footer-container container">
';
        $buffer .= $indent . '        <div class="floating-buttons-wrapper">
';
        $buffer .= $indent . '            <button id="gotop" class="btn btn-primary btn-floating d-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section9b2f7d00befe41ef6fd7c45a5a31ed1d($context, $indent, $value);
        $buffer .= '" role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section9b2f7d00befe41ef6fd7c45a5a31ed1d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-UpArrow"></span>
';
        $buffer .= $indent . '                <span class="btn-floating-text">';
        $value = $context->find('str');
        $buffer .= $this->section9b2f7d00befe41ef6fd7c45a5a31ed1d($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $value = $context->findDot('focusdata.enabled');
        $buffer .= $this->sectionDbb384ef86984caf68d1a148b46893a2($context, $indent, $value);
        $value = $context->find('floating_buttons');
        $buffer .= $this->section390c2bba21cdaaa099783d3f040821d6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.edw_feedback_and_support');
        $buffer .= $this->section8ad81a8b82d6aff6c5c3de4394a8a3d7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button class="btn btn-primary btn-floating d-none d-md-flex moodlehelpbtn" data-action="footer-popover" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionCdb9dc0f0dba8106de5ce0c2b2856182($context, $indent, $value);
        $buffer .= '" data-region="footer-container-popover" >
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Cancel"></span>
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Help"></span>
';
        $buffer .= $indent . '                <span class="btn-floating-text">';
        $value = $context->find('str');
        $buffer .= $this->sectionEec5bbe8a145b2e5938079f873697c01($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '
';
        $value = $context->find('enablebeacon');
        $buffer .= $this->sectionD9464fd1fd18e1cdabe4bb45f0df114b($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->section06cda21bc993221786582a54478b0467($context, $indent, $value);
        $buffer .= $indent . '            <div class="footer-section">
';
        $buffer .= $indent . '                <div class="logininfo">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.edwiser_check_faq');
        $buffer .= $this->section0a244837a2e08c67b128b7a9ea5d15bb($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="footer-section ">
';
        $value = $context->findDot('footerdata.poweredby');
        $buffer .= $this->section27b1df3d1cc1476c75b17f123213e835($context, $indent, $value);
        $value = $context->findDot('footerdata.poweredby');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="footer-poweredby">';
            $value = $context->find('str');
            $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->section343c424e834bfed912460eeceddc981c($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-mainsection-wrapper">
';
        if ($partial = $this->mustache->loadPartial('theme_remui/footer_sections')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-secondarysection-wrapper">
';
        $value = $context->findDot('footerdata.footercopyrights');
        $buffer .= $this->sectionE5e0b43894628740cb4cfc1474cf8098($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $value = $context->find('js');
        $buffer .= $this->sectionC609a62e471f2129a340f41655a06c73($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('enablebeacon');
        $buffer .= $this->section149de4456c07b970cca6c8d902303720($context, $indent, $value);

        return $buffer;
    }

    private function section9b2f7d00befe41ef6fd7c45a5a31ed1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gotop, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gotop, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf8adbd64d408b7936d7a46c33c505b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglefocusmode, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'togglefocusmode, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b5abc1f143954331c900606211efb61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'focusmode, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'focusmode, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbb384ef86984caf68d1a148b46893a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button id="focusmodebutton" type="button" class="btn {{focusdata.btnbg}} btn-floating align-items-center justify-content-center d-flex" data-toggle="tooltip" data-placement="left" data-trigger="hover" aria-label="{{#str}}togglefocusmode, theme_remui{{/str}}" role="Button" aria-pressed="false" >
                    <i class="{{focusdata.btnicon}}" aria-hidden="true"></i>
                    <span class="btn-floating-text">{{#str}}focusmode, theme_remui{{/str}}</span>
                </button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button id="focusmodebutton" type="button" class="btn ';
                $value = $this->resolveValue($context->findDot('focusdata.btnbg'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' btn-floating align-items-center justify-content-center d-flex" data-toggle="tooltip" data-placement="left" data-trigger="hover" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionCf8adbd64d408b7936d7a46c33c505b8($context, $indent, $value);
                $buffer .= '" role="Button" aria-pressed="false" >
';
                $buffer .= $indent . '                    <i class="';
                $value = $this->resolveValue($context->findDot('focusdata.btnicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-hidden="true"></i>
';
                $buffer .= $indent . '                    <span class="btn-floating-text">';
                $value = $context->find('str');
                $buffer .= $this->section4b5abc1f143954331c900606211efb61($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section390c2bba21cdaaa099783d3f040821d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{floating_buttons}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('floating_buttons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d9f2c7e42790f2c89e00b1c6faeffae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sendfeedback, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sendfeedback, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section353f76a43601fd4b63e413f6f58637d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edwiserfeedback, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edwiserfeedback, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ad81a8b82d6aff6c5c3de4394a8a3d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button class="btn btn-floating d-none d-md-flex send-remui-feedback" aria-label="{{#str}}sendfeedback, theme_remui{{/str}}" title="{{#str}}sendfeedback, theme_remui{{/str}}" style="background: #EE8E4A;color: white;">
                <span class="edw-icon edw-icon-Feedback"></span>
                <span class="btn-floating-text">{{#str}}edwiserfeedback, theme_remui{{/str}}</span>
            </button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button class="btn btn-floating d-none d-md-flex send-remui-feedback" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0d9f2c7e42790f2c89e00b1c6faeffae($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section0d9f2c7e42790f2c89e00b1c6faeffae($context, $indent, $value);
                $buffer .= '" style="background: #EE8E4A;color: white;">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Feedback"></span>
';
                $buffer .= $indent . '                <span class="btn-floating-text">';
                $value = $context->find('str');
                $buffer .= $this->section353f76a43601fd4b63e413f6f58637d3($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdb9dc0f0dba8106de5ce0c2b2856182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEec5bbe8a145b2e5938079f873697c01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edwiserhelp, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edwiserhelp, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb903d5c5a5fcf9e9e44c3513169fba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edwisersupport, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edwisersupport, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9464fd1fd18e1cdabe4bb45f0df114b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button class="btn btn-primary btn-floating d-none d-md-flex beaconbtn open" onclick="Beacon(\'toggle\')" >
                <span class="edw-icon edw-icon-Comment-03"></span>
                <span class="edw-icon edw-icon-Cancel"></span>
                <span class="btn-floating-text">{{#str}}edwisersupport, theme_remui{{/str}}</span>
            </button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button class="btn btn-primary btn-floating d-none d-md-flex beaconbtn open" onclick="Beacon(\'toggle\')" >
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Comment-03"></span>
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Cancel"></span>
';
                $buffer .= $indent . '                <span class="btn-floating-text">';
                $value = $context->find('str');
                $buffer .= $this->sectionBb903d5c5a5fcf9e9e44c3513169fba9($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF42d697b7ce9ccc3aef2c8ea6ca4f9d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-popover-section-links">{{{output.edw_feedback_and_support}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-popover-section-links">';
                $value = $this->resolveValue($context->findDot('output.edw_feedback_and_support'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8d1fc87ebd319678fabb27670f5f003(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-popover-section-links">{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-popover-section-links">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1d84ccad2c93d5d04a6720ac706e2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-popover-section-links">{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-popover-section-links">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5556f6f42103b6f4432f22aa19c24237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-popover-section-links">{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-popover-section-links">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06cda21bc993221786582a54478b0467(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section ">
                <!--
                {{#output.edw_feedback_and_support}}
                    <div class="footer-popover-section-links">{{{output.edw_feedback_and_support}}}</div>
                {{/output.edw_feedback_and_support}}
                -->
                {{# output.page_doc_link }}
                    <div class="footer-popover-section-links">{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div class="footer-popover-section-links">{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div class="footer-popover-section-links">{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section ">
';
                $buffer .= $indent . '                <!--
';
                $value = $context->findDot('output.edw_feedback_and_support');
                $buffer .= $this->sectionF42d697b7ce9ccc3aef2c8ea6ca4f9d5($context, $indent, $value);
                $buffer .= $indent . '                -->
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionF8d1fc87ebd319678fabb27670f5f003($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section0a1d84ccad2c93d5d04a6720ac706e2c($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section5556f6f42103b6f4432f22aa19c24237($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a244837a2e08c67b128b7a9ea5d15bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>{{{output.edwiser_check_faq}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>';
                $value = $this->resolveValue($context->findDot('output.edwiser_check_faq'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5119999a7c7fb0b208b72b0555404d48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredby, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredby, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3da7e2a35bcc4f1ee765f9cfb98d6890(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginname, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pluginname, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ea452c5496369d4ecca198aeddc820c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank">
                        {{#str}}pluginname, theme_remui{{/str}}
                    </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section3da7e2a35bcc4f1ee765f9cfb98d6890($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27b1df3d1cc1476c75b17f123213e835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-poweredby">
                    {{# str }}poweredby, theme_remui {{/ str }}
                    {{#footerdata.isadmin}}
                    <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank">
                        {{#str}}pluginname, theme_remui{{/str}}
                    </a>
                    {{/footerdata.isadmin}}
                    {{^footerdata.isadmin}}
                    {{#str}}pluginname, theme_remui{{/str}}
                    {{/footerdata.isadmin}}

                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-poweredby">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section5119999a7c7fb0b208b72b0555404d48($context, $indent, $value);
                $buffer .= '
';
                $value = $context->findDot('footerdata.isadmin');
                $buffer .= $this->section6ea452c5496369d4ecca198aeddc820c($context, $indent, $value);
                $value = $context->findDot('footerdata.isadmin');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('str');
                    $buffer .= $this->section3da7e2a35bcc4f1ee765f9cfb98d6890($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section343c424e834bfed912460eeceddc981c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD17c8f581785f2401adab0621f99b45b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{.}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
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

    private function sectionAfb5bd0d6c53eea311acca1beaccd972(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logo">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section958c646af1807aa75f435b3ef640efb5(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('logominiurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logomini">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f5b61d9fa7785a4bf300cc1a08c801e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="navbar-brand-logo icononly"><i class="fa fa-{{siteicon}}"></i></span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="navbar-brand-logo icononly"><i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a9356de6f96647ebf7639891276cd91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="navbar-brand-logo font-weight-bolder iconsitename">
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
                
                $buffer .= $indent . '                        <span class="navbar-brand-logo font-weight-bolder iconsitename">
';
                $buffer .= $indent . '                            <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>&nbsp;
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d9309dce4cbbaeca45617fe18c27d10(Mustache_Context $context, $indent, $value)
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
                        <span class="navbar-brand-logo icononly"><i class="fa fa-{{siteicon}}"></i></span>
                        {{/icononly}}

                        {{#iconwithsitename}}
                        <span class="navbar-brand-logo font-weight-bolder iconsitename">
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
                $buffer .= $this->sectionAfb5bd0d6c53eea311acca1beaccd972($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logominiurl');
                $buffer .= $this->section958c646af1807aa75f435b3ef640efb5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('icononly');
                $buffer .= $this->section3f5b61d9fa7785a4bf300cc1a08c801e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('iconwithsitename');
                $buffer .= $this->section3a9356de6f96647ebf7639891276cd91($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5e0b43894628740cb4cfc1474cf8098(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-copyright-wrapper " {{#attributes}} {{{.}}} {{/attributes}}>
                <div class="{{^footerdata.footershowlogo}}d-none{{/footerdata.footershowlogo}} secondary-footer-logo">
                    <div class="navbar-logo-footer-wrapper {{^footerdata.useheaderlogo}}d-none{{/footerdata.useheaderlogo}}">
                        <a href="{{{ config.homeurl }}}"
                        class="navbar-brand d-flex  m-0 p-0 aabtn footer-logo"
                        aria-label="{{ sitename }} - {{#str}}brandname, theme_remui{{/str}}">
                        {{#output.get_branding_context}}
                        {{#logourl}}
                        <img src="{{ logourl }}" class="navbar-brand-logo logo">
                        {{/logourl}}

                        {{#logominiurl}}
                        <img src="{{ logominiurl }}" class="navbar-brand-logo logomini">
                        {{/logominiurl}}

                        {{#icononly}}
                        <span class="navbar-brand-logo icononly"><i class="fa fa-{{siteicon}}"></i></span>
                        {{/icononly}}

                        {{#iconwithsitename}}
                        <span class="navbar-brand-logo font-weight-bolder iconsitename">
                            <i class="fa fa-{{siteicon}}"></i>&nbsp;
                            {{{ sitename }}}
                        </span>
                        {{/iconwithsitename}}
                        {{/output.get_branding_context}}
                    </a>
                    </div>

                    <div class="footer-diff-logo {{^footerdata.secondaryfooterlogo}}d-none{{/footerdata.secondaryfooterlogo}}">
                        <a href="{{{ config.homeurl }}}"
                        class="navbar-brand d-flex m-0 p-0 aabtn footer-logo"
                        aria-label="{{ sitename }} - {{#str}}brandname, theme_remui{{/str}}">
                        <img src="{{footerdata.secondaryfooterlogo}}" class="navbar-brand-logo logomini">
                    </a>
                    </div>
                </div>
                <div class="footer-content-debugging footer-dark">
                    <div class="footer-content-debugging-wrapper footer-dark-inner ">
                        {{> theme_remui/footer_legal}}
                    </div>
                </div>
                <div class="copyright-content secondary-footer-copyright {{^footercopyrightsshow}}d-none{{/footercopyrightsshow}}" {{#attributes}} {{{.}}} {{/attributes}}>
                    <p class=" mb-0">{{{content}}}</p>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-copyright-wrapper " ';
                $value = $context->find('attributes');
                $buffer .= $this->sectionD17c8f581785f2401adab0621f99b45b($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <div class="';
                $value = $context->findDot('footerdata.footershowlogo');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= ' secondary-footer-logo">
';
                $buffer .= $indent . '                    <div class="navbar-logo-footer-wrapper ';
                $value = $context->findDot('footerdata.useheaderlogo');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        class="navbar-brand d-flex  m-0 p-0 aabtn footer-logo"
';
                $buffer .= $indent . '                        aria-label="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' - ';
                $value = $context->find('str');
                $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->findDot('output.get_branding_context');
                $buffer .= $this->section9d9309dce4cbbaeca45617fe18c27d10($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="footer-diff-logo ';
                $value = $context->findDot('footerdata.secondaryfooterlogo');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        class="navbar-brand d-flex m-0 p-0 aabtn footer-logo"
';
                $buffer .= $indent . '                        aria-label="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' - ';
                $value = $context->find('str');
                $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->findDot('footerdata.secondaryfooterlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="navbar-brand-logo logomini">
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="footer-content-debugging footer-dark">
';
                $buffer .= $indent . '                    <div class="footer-content-debugging-wrapper footer-dark-inner ">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/footer_legal')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="copyright-content secondary-footer-copyright ';
                $value = $context->find('footercopyrightsshow');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '" ';
                $value = $context->find('attributes');
                $buffer .= $this->sectionD17c8f581785f2401adab0621f99b45b($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                    <p class=" mb-0">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section061513c2e5ecb49294359ac5dc59fa9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendfeedback, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendfeedback, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6896ece60285d6e02f5cae4c424a5a93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' descriptionmodal_text1, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' descriptionmodal_text1, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8ae5f9571bc3531421ba1adeb672b06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' descriptionmodal_text2, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' descriptionmodal_text2, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d2bde21193bacd22106efd69aa20937(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackmodal_next, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackmodal_next, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA46cd6eac87fa72a213b09eba8354933(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emptydescription_error, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emptydescription_error, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7033921daf89bb4248c53571122d94e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' highlightmodal_text1, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' highlightmodal_text1, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a00c342c6d682a2418a17d605b6a81a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' blackout_button, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' blackout_button, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b2f5cbe146db0f69895a6428cb6c62b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' blackout_button_tooltip, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' blackout_button_tooltip, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe541e4dfc987d69869bbe896f532592(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' highlight_button, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' highlight_button, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb8fbac801eca79678fa4faab9ed547b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' highlight_button_tooltip, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' highlight_button_tooltip, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98b0a1cc0545ab585ff626f37b7dcedd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackmodal_skipnext, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackmodal_skipnext, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf3d277ff7d4ae622969ebf63f37a851(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackmodal_previous, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackmodal_previous, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section828e9811d63c0460f9b9b1e45ae9bf76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedback_email_heading, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedback_email_heading, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c67987d7f1f61cde750c4cbfde7d599(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description_heading, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description_heading, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section380c309fb8d9655f38706848700842ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'feebdack_datacollected_desc, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'feebdack_datacollected_desc, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7142bdef9a0f9b4933235afb1677350e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedback_screenshot, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedback_screenshot, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80acdd68b5edc63c1dc7159e8f9c54a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackmodal_submit, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackmodal_submit, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f2b367b4dc81a0468fd75b057013072(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' incorrectemail_error, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' incorrectemail_error, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a54a1f9ca7927d86244f2e14fcf4a6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submit_loading, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submit_loading, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section727f40e91ecaa3112e7e7b97c5c97525(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submit_success, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submit_success, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d80641239a7d2a30d679921b433c6f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackmodal_ok, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackmodal_ok, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3533c790d0e5f0adb2353df6970210fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submit_error, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submit_error, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73ef4b75c2e555ee3e375073b167ed10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_remui/feedback\'], function($) {
    $(document).ready(function() {
        $.feedback({
            ajaxURL: \'theme_remui_handle_bug_feedback_report\', // external api method
            html2canvasURL: \'{{canvasurl}}\',
            initialBox: false,
            highlightElement: true,
            postHTML: false,
            strokeStyle: \'#62a8ea\',
            lineJoin: \'round\',
            tpl: {
                description:\'<div id="feedback-welcome"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div>{{# str }} descriptionmodal_text1, theme_remui {{/ str }}<textarea class="form-control" id="feedback-note-tmp"></textarea>{{# str }} descriptionmodal_text2, theme_remui {{/ str }}<button id="feedback-welcome-next" class="feedback-next-btn btn btn-primary">{{# str }} feedbackmodal_next, theme_remui {{/ str }}</button><div id="feedback-welcome-error">{{# str }} emptydescription_error, theme_remui {{/ str }}</div><div class="feedback-wizard-close"></div></div>\',

                highlighter:\'<div id="feedback-loading-icon" data-html2canvas-ignore="true"><img src="{{feedback_loading_image}}" alt="Loading..." /></div><div id="feedback-highlighter"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} highlightmodal_text1, theme_remui {{/ str }}</p><div class="markup-buttons"><div class="blackout-wrap"><button class="feedback-setblackout feedback-active"><div class="ico"></div><span>{{# str }} blackout_button, theme_remui {{/ str }}</span></button><label class="lower tooltiptext">{{# str }} blackout_button_tooltip, theme_remui {{/ str }}</label></div><div class="highlight-wrap"><button class="feedback-sethighlight"><div class="ico"></div><span>{{# str }} highlight_button, theme_remui {{/ str }}</span></button><label class="tooltiptext">{{# str }} highlight_button_tooltip, theme_remui {{/ str }}</label></div></div><div class="feedback-buttons"> <button id="feedback-skiphighlighter-next" class="feedback-next-btn btn btn-link ml-2 w-auto"><span>{{# str }} feedbackmodal_skipnext, theme_remui {{/ str }}</span></button><button id="feedback-highlighter-next" class="feedback-next-btn btn btn-primary w-auto"><span>{{# str }} feedbackmodal_next, theme_remui {{/ str }}</span></button><button id="feedback-highlighter-back" class="feedback-back-btn btn btn-secondary"><span>{{# str }} feedbackmodal_previous, theme_remui {{/ str }}</span></button></div><div class="feedback-wizard-close"></div></div>\',

                overview:\'<div id="feedback-overview"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><div id="feedback-overview-description"><div id="feedback_person_email_id"><h3>{{# str }} feedback_email_heading, theme_remui {{/ str }}</h3><input class="form-control" type="email" id="feedback_person_email_id_field" value="{{feedbacksender_emailid}}" /></div><div id="feedback-overview-description-text"><h3>{{# str }} description_heading, theme_remui {{/ str }}</h3><p class="mt-20 dataoverview">{{# str }}feebdack_datacollected_desc, theme_remui {{/ str }}</p></div></div><div id="feedback-overview-screenshot"><h3>{{# str }} feedback_screenshot, theme_remui {{/ str }}</h3></div><div class="feedback-buttons"><button id="feedback-submit" class="feedback-submit-btn feedback-btn-blue">{{# str }} feedbackmodal_submit, theme_remui {{/ str }}</button><button id="feedback-overview-back" class="feedback-back-btn btn btn-secondary">{{# str }} feedbackmodal_previous, theme_remui {{/ str }}</button></div><div id="feedback-overview-error">{{# str }} emptydescription_error, theme_remui {{/ str }}</div><div id="feedback-email-error" style="display: none;">{{# str }} incorrectemail_error, theme_remui {{/ str }}</div><div class="feedback-wizard-close"></div></div>\',

                submitLoading:\'<div id="feedback-submit-loading"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_loading, theme_remui {{/ str }}</p></div>\',
                submitSuccess:  \'<div id="feedback-submit-success"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_success, theme_remui {{/ str }}</p></p><button class="feedback-close-btn feedback-btn-blue">{{# str }} feedbackmodal_ok, theme_remui {{/ str }}</button><div class="feedback-wizard-close"></div></div>\',
                submitError:\'<div id="feedback-submit-error"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_error, theme_remui {{/ str }}</p><button class="feedback-close-btn feedback-btn-blue">{{# str }} feedbackmodal_ok, theme_remui {{/ str }}</button><div class="feedback-wizard-close"></div></div>\'
            },
            feedbackButton: \'.send-remui-feedback\',
            onTrigger: function(){
                $(\'.btn-floating[data-action="footer-popover"]\').on(\'click\');
            },
            onClose: function() { window.location.reload(); }
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
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/feedback\'], function($) {
';
                $buffer .= $indent . '    $(document).ready(function() {
';
                $buffer .= $indent . '        $.feedback({
';
                $buffer .= $indent . '            ajaxURL: \'theme_remui_handle_bug_feedback_report\', // external api method
';
                $buffer .= $indent . '            html2canvasURL: \'';
                $value = $this->resolveValue($context->find('canvasurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\',
';
                $buffer .= $indent . '            initialBox: false,
';
                $buffer .= $indent . '            highlightElement: true,
';
                $buffer .= $indent . '            postHTML: false,
';
                $buffer .= $indent . '            strokeStyle: \'#62a8ea\',
';
                $buffer .= $indent . '            lineJoin: \'round\',
';
                $buffer .= $indent . '            tpl: {
';
                $buffer .= $indent . '                description:\'<div id="feedback-welcome"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div>';
                $value = $context->find('str');
                $buffer .= $this->section6896ece60285d6e02f5cae4c424a5a93($context, $indent, $value);
                $buffer .= '<textarea class="form-control" id="feedback-note-tmp"></textarea>';
                $value = $context->find('str');
                $buffer .= $this->sectionA8ae5f9571bc3531421ba1adeb672b06($context, $indent, $value);
                $buffer .= '<button id="feedback-welcome-next" class="feedback-next-btn btn btn-primary">';
                $value = $context->find('str');
                $buffer .= $this->section5d2bde21193bacd22106efd69aa20937($context, $indent, $value);
                $buffer .= '</button><div id="feedback-welcome-error">';
                $value = $context->find('str');
                $buffer .= $this->sectionA46cd6eac87fa72a213b09eba8354933($context, $indent, $value);
                $buffer .= '</div><div class="feedback-wizard-close"></div></div>\',
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                highlighter:\'<div id="feedback-loading-icon" data-html2canvas-ignore="true"><img src="';
                $value = $this->resolveValue($context->find('feedback_loading_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="Loading..." /></div><div id="feedback-highlighter"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div><p>';
                $value = $context->find('str');
                $buffer .= $this->sectionB7033921daf89bb4248c53571122d94e($context, $indent, $value);
                $buffer .= '</p><div class="markup-buttons"><div class="blackout-wrap"><button class="feedback-setblackout feedback-active"><div class="ico"></div><span>';
                $value = $context->find('str');
                $buffer .= $this->section6a00c342c6d682a2418a17d605b6a81a($context, $indent, $value);
                $buffer .= '</span></button><label class="lower tooltiptext">';
                $value = $context->find('str');
                $buffer .= $this->section8b2f5cbe146db0f69895a6428cb6c62b($context, $indent, $value);
                $buffer .= '</label></div><div class="highlight-wrap"><button class="feedback-sethighlight"><div class="ico"></div><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionFe541e4dfc987d69869bbe896f532592($context, $indent, $value);
                $buffer .= '</span></button><label class="tooltiptext">';
                $value = $context->find('str');
                $buffer .= $this->sectionCb8fbac801eca79678fa4faab9ed547b($context, $indent, $value);
                $buffer .= '</label></div></div><div class="feedback-buttons"> <button id="feedback-skiphighlighter-next" class="feedback-next-btn btn btn-link ml-2 w-auto"><span>';
                $value = $context->find('str');
                $buffer .= $this->section98b0a1cc0545ab585ff626f37b7dcedd($context, $indent, $value);
                $buffer .= '</span></button><button id="feedback-highlighter-next" class="feedback-next-btn btn btn-primary w-auto"><span>';
                $value = $context->find('str');
                $buffer .= $this->section5d2bde21193bacd22106efd69aa20937($context, $indent, $value);
                $buffer .= '</span></button><button id="feedback-highlighter-back" class="feedback-back-btn btn btn-secondary"><span>';
                $value = $context->find('str');
                $buffer .= $this->sectionFf3d277ff7d4ae622969ebf63f37a851($context, $indent, $value);
                $buffer .= '</span></button></div><div class="feedback-wizard-close"></div></div>\',
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                overview:\'<div id="feedback-overview"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div><div id="feedback-overview-description"><div id="feedback_person_email_id"><h3>';
                $value = $context->find('str');
                $buffer .= $this->section828e9811d63c0460f9b9b1e45ae9bf76($context, $indent, $value);
                $buffer .= '</h3><input class="form-control" type="email" id="feedback_person_email_id_field" value="';
                $value = $this->resolveValue($context->find('feedbacksender_emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" /></div><div id="feedback-overview-description-text"><h3>';
                $value = $context->find('str');
                $buffer .= $this->section4c67987d7f1f61cde750c4cbfde7d599($context, $indent, $value);
                $buffer .= '</h3><p class="mt-20 dataoverview">';
                $value = $context->find('str');
                $buffer .= $this->section380c309fb8d9655f38706848700842ef($context, $indent, $value);
                $buffer .= '</p></div></div><div id="feedback-overview-screenshot"><h3>';
                $value = $context->find('str');
                $buffer .= $this->section7142bdef9a0f9b4933235afb1677350e($context, $indent, $value);
                $buffer .= '</h3></div><div class="feedback-buttons"><button id="feedback-submit" class="feedback-submit-btn feedback-btn-blue">';
                $value = $context->find('str');
                $buffer .= $this->section80acdd68b5edc63c1dc7159e8f9c54a5($context, $indent, $value);
                $buffer .= '</button><button id="feedback-overview-back" class="feedback-back-btn btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->sectionFf3d277ff7d4ae622969ebf63f37a851($context, $indent, $value);
                $buffer .= '</button></div><div id="feedback-overview-error">';
                $value = $context->find('str');
                $buffer .= $this->sectionA46cd6eac87fa72a213b09eba8354933($context, $indent, $value);
                $buffer .= '</div><div id="feedback-email-error" style="display: none;">';
                $value = $context->find('str');
                $buffer .= $this->section5f2b367b4dc81a0468fd75b057013072($context, $indent, $value);
                $buffer .= '</div><div class="feedback-wizard-close"></div></div>\',
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                submitLoading:\'<div id="feedback-submit-loading"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div><p>';
                $value = $context->find('str');
                $buffer .= $this->section2a54a1f9ca7927d86244f2e14fcf4a6f($context, $indent, $value);
                $buffer .= '</p></div>\',
';
                $buffer .= $indent . '                submitSuccess:  \'<div id="feedback-submit-success"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div><p>';
                $value = $context->find('str');
                $buffer .= $this->section727f40e91ecaa3112e7e7b97c5c97525($context, $indent, $value);
                $buffer .= '</p></p><button class="feedback-close-btn feedback-btn-blue">';
                $value = $context->find('str');
                $buffer .= $this->section5d80641239a7d2a30d679921b433c6f6($context, $indent, $value);
                $buffer .= '</button><div class="feedback-wizard-close"></div></div>\',
';
                $buffer .= $indent . '                submitError:\'<div id="feedback-submit-error"><div class="feedback-logo">';
                $value = $context->find('str');
                $buffer .= $this->section061513c2e5ecb49294359ac5dc59fa9d($context, $indent, $value);
                $buffer .= '</div><p>';
                $value = $context->find('str');
                $buffer .= $this->section3533c790d0e5f0adb2353df6970210fd($context, $indent, $value);
                $buffer .= '</p><button class="feedback-close-btn feedback-btn-blue">';
                $value = $context->find('str');
                $buffer .= $this->section5d80641239a7d2a30d679921b433c6f6($context, $indent, $value);
                $buffer .= '</button><div class="feedback-wizard-close"></div></div>\'
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            feedbackButton: \'.send-remui-feedback\',
';
                $buffer .= $indent . '            onTrigger: function(){
';
                $buffer .= $indent . '                $(\'.btn-floating[data-action="footer-popover"]\').on(\'click\');
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            onClose: function() { window.location.reload(); }
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

    private function sectionC609a62e471f2129a340f41655a06c73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});


{{# cansendfeedback }}
require([\'jquery\', \'theme_remui/feedback\'], function($) {
    $(document).ready(function() {
        $.feedback({
            ajaxURL: \'theme_remui_handle_bug_feedback_report\', // external api method
            html2canvasURL: \'{{canvasurl}}\',
            initialBox: false,
            highlightElement: true,
            postHTML: false,
            strokeStyle: \'#62a8ea\',
            lineJoin: \'round\',
            tpl: {
                description:\'<div id="feedback-welcome"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div>{{# str }} descriptionmodal_text1, theme_remui {{/ str }}<textarea class="form-control" id="feedback-note-tmp"></textarea>{{# str }} descriptionmodal_text2, theme_remui {{/ str }}<button id="feedback-welcome-next" class="feedback-next-btn btn btn-primary">{{# str }} feedbackmodal_next, theme_remui {{/ str }}</button><div id="feedback-welcome-error">{{# str }} emptydescription_error, theme_remui {{/ str }}</div><div class="feedback-wizard-close"></div></div>\',

                highlighter:\'<div id="feedback-loading-icon" data-html2canvas-ignore="true"><img src="{{feedback_loading_image}}" alt="Loading..." /></div><div id="feedback-highlighter"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} highlightmodal_text1, theme_remui {{/ str }}</p><div class="markup-buttons"><div class="blackout-wrap"><button class="feedback-setblackout feedback-active"><div class="ico"></div><span>{{# str }} blackout_button, theme_remui {{/ str }}</span></button><label class="lower tooltiptext">{{# str }} blackout_button_tooltip, theme_remui {{/ str }}</label></div><div class="highlight-wrap"><button class="feedback-sethighlight"><div class="ico"></div><span>{{# str }} highlight_button, theme_remui {{/ str }}</span></button><label class="tooltiptext">{{# str }} highlight_button_tooltip, theme_remui {{/ str }}</label></div></div><div class="feedback-buttons"> <button id="feedback-skiphighlighter-next" class="feedback-next-btn btn btn-link ml-2 w-auto"><span>{{# str }} feedbackmodal_skipnext, theme_remui {{/ str }}</span></button><button id="feedback-highlighter-next" class="feedback-next-btn btn btn-primary w-auto"><span>{{# str }} feedbackmodal_next, theme_remui {{/ str }}</span></button><button id="feedback-highlighter-back" class="feedback-back-btn btn btn-secondary"><span>{{# str }} feedbackmodal_previous, theme_remui {{/ str }}</span></button></div><div class="feedback-wizard-close"></div></div>\',

                overview:\'<div id="feedback-overview"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><div id="feedback-overview-description"><div id="feedback_person_email_id"><h3>{{# str }} feedback_email_heading, theme_remui {{/ str }}</h3><input class="form-control" type="email" id="feedback_person_email_id_field" value="{{feedbacksender_emailid}}" /></div><div id="feedback-overview-description-text"><h3>{{# str }} description_heading, theme_remui {{/ str }}</h3><p class="mt-20 dataoverview">{{# str }}feebdack_datacollected_desc, theme_remui {{/ str }}</p></div></div><div id="feedback-overview-screenshot"><h3>{{# str }} feedback_screenshot, theme_remui {{/ str }}</h3></div><div class="feedback-buttons"><button id="feedback-submit" class="feedback-submit-btn feedback-btn-blue">{{# str }} feedbackmodal_submit, theme_remui {{/ str }}</button><button id="feedback-overview-back" class="feedback-back-btn btn btn-secondary">{{# str }} feedbackmodal_previous, theme_remui {{/ str }}</button></div><div id="feedback-overview-error">{{# str }} emptydescription_error, theme_remui {{/ str }}</div><div id="feedback-email-error" style="display: none;">{{# str }} incorrectemail_error, theme_remui {{/ str }}</div><div class="feedback-wizard-close"></div></div>\',

                submitLoading:\'<div id="feedback-submit-loading"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_loading, theme_remui {{/ str }}</p></div>\',
                submitSuccess:  \'<div id="feedback-submit-success"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_success, theme_remui {{/ str }}</p></p><button class="feedback-close-btn feedback-btn-blue">{{# str }} feedbackmodal_ok, theme_remui {{/ str }}</button><div class="feedback-wizard-close"></div></div>\',
                submitError:\'<div id="feedback-submit-error"><div class="feedback-logo">{{# str }} sendfeedback, theme_remui {{/ str }}</div><p>{{# str }} submit_error, theme_remui {{/ str }}</p><button class="feedback-close-btn feedback-btn-blue">{{# str }} feedbackmodal_ok, theme_remui {{/ str }}</button><div class="feedback-wizard-close"></div></div>\'
            },
            feedbackButton: \'.send-remui-feedback\',
            onTrigger: function(){
                $(\'.btn-floating[data-action="footer-popover"]\').on(\'click\');
            },
            onClose: function() { window.location.reload(); }
        });
    });
});
{{/ cansendfeedback }}

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_remui/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $value = $context->find('cansendfeedback');
                $buffer .= $this->section73ef4b75c2e555ee3e375073b167ed10($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE96d55491adbd3d5da030571d4717ef8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($) {
        $(document).ready(function(){
            // Init Beacon.
            window.Beacon(\'init\', \'20161736-5fba-49ab-91ce-c0ef930782f3\');

            // Update Beacon Icon position variables.
            var r = document.querySelector(\':root\');

            r.style.setProperty(\'--hs-beacon-window-v-offset\', \'70px\');
            r.style.setProperty(\'--hs-beacon-window-h-offset-right\', \'14px\');

            setTimeout(function(){
                $(".btn-floating.open").removeClass(\'open\');
            }, 2000);

            // Toggle Button icon.
            $(document).on(\'click\', \'.beaconbtn\', function() {
                if (!$(this).hasClass("show")) {
                    $(this).addClass("show");
                } else {
                    $(this).removeClass("show");
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
                
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(document).ready(function(){
';
                $buffer .= $indent . '            // Init Beacon.
';
                $buffer .= $indent . '            window.Beacon(\'init\', \'20161736-5fba-49ab-91ce-c0ef930782f3\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Update Beacon Icon position variables.
';
                $buffer .= $indent . '            var r = document.querySelector(\':root\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            r.style.setProperty(\'--hs-beacon-window-v-offset\', \'70px\');
';
                $buffer .= $indent . '            r.style.setProperty(\'--hs-beacon-window-h-offset-right\', \'14px\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            setTimeout(function(){
';
                $buffer .= $indent . '                $(".btn-floating.open").removeClass(\'open\');
';
                $buffer .= $indent . '            }, 2000);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Toggle Button icon.
';
                $buffer .= $indent . '            $(document).on(\'click\', \'.beaconbtn\', function() {
';
                $buffer .= $indent . '                if (!$(this).hasClass("show")) {
';
                $buffer .= $indent . '                    $(this).addClass("show");
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    $(this).removeClass("show");
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
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

    private function section149de4456c07b970cca6c8d902303720(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
     <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
    {{#js}}
    require([\'jquery\'], function($) {
        $(document).ready(function(){
            // Init Beacon.
            window.Beacon(\'init\', \'20161736-5fba-49ab-91ce-c0ef930782f3\');

            // Update Beacon Icon position variables.
            var r = document.querySelector(\':root\');

            r.style.setProperty(\'--hs-beacon-window-v-offset\', \'70px\');
            r.style.setProperty(\'--hs-beacon-window-h-offset-right\', \'14px\');

            setTimeout(function(){
                $(".btn-floating.open").removeClass(\'open\');
            }, 2000);

            // Toggle Button icon.
            $(document).on(\'click\', \'.beaconbtn\', function() {
                if (!$(this).hasClass("show")) {
                    $(this).addClass("show");
                } else {
                    $(this).removeClass("show");
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
                
                $buffer .= $indent . '     <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
';
                $value = $context->find('js');
                $buffer .= $this->sectionE96d55491adbd3d5da030571d4717ef8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
