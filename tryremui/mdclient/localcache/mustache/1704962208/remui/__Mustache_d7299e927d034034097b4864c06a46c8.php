<?php

class __Mustache_d7299e927d034034097b4864c06a46c8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="site-footer-legal ">
';
        $value = $context->find('footerdata');
        $buffer .= $this->section157cead01c8ae75acbc268d04f4cd8dd($context, $indent, $value);
        $buffer .= $indent . '    <a class="footer-bottomtext" href="';
        $value = $this->resolveValue($context->findDot('footerdata.bottomlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" target="_blank">';
        $value = $this->resolveValue($context->findDot('footerdata.bottomtext'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section931bf4eb2244099ed45a65d27f05f1c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-block';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-block';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a22c1cef95ba1e17514f52acdba89a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{footerprivacypolicy}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('footerprivacypolicy'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4076fe7190914716a4f4f13cc72db2f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' target="_blank" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' target="_blank" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section843718894b1267adbafccdbbee864e33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' privacypolicy, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' privacypolicy, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3e2274502cb9468bbbc02eff3bc811c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{footertermsandconditions}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('footertermsandconditions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3112891fa6016050b4207c2bcc6b4532(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' termsandconditions, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' termsandconditions, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section157cead01c8ae75acbc268d04f4cd8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="footer-privacy-policy
        {{^footerprivacypolicyshow}}d-none{{/footerprivacypolicyshow}}
        {{#footerprivacypolicyshow}}d-block{{/footerprivacypolicyshow}}"
        href="
        {{^footerprivacypolicyshow}}#{{/footerprivacypolicyshow}}
        {{#footerprivacypolicyshow}}{{footerprivacypolicy}}{{/footerprivacypolicyshow}}"
       {{#privacypolicynewtab}} target="_blank" {{/privacypolicynewtab}}>{{#str}} privacypolicy, theme_remui {{/str}}
    </a>

    <a class="footer-terms-and-conditions
        {{^footertermsandconditionsshow}}d-none{{/footertermsandconditionsshow}}
        {{#footertermsandconditionsshow}}d-block{{/footertermsandconditionsshow}}"
        href="
        {{^footertermsandconditionsshow}}#{{/footertermsandconditionsshow}}
        {{#footertermsandconditionsshow}}{{footertermsandconditions}}{{/footertermsandconditionsshow}}"
       {{#termsandconditionewtab}} target="_blank" {{/termsandconditionewtab}}>{{#str}} termsandconditions, theme_remui {{/str}}
    </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class="footer-privacy-policy
';
                $buffer .= $indent . '        ';
                $value = $context->find('footerprivacypolicyshow');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('footerprivacypolicyshow');
                $buffer .= $this->section931bf4eb2244099ed45a65d27f05f1c4($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '        href="
';
                $buffer .= $indent . '        ';
                $value = $context->find('footerprivacypolicyshow');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('footerprivacypolicyshow');
                $buffer .= $this->section3a22c1cef95ba1e17514f52acdba89a7($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '       ';
                $value = $context->find('privacypolicynewtab');
                $buffer .= $this->section4076fe7190914716a4f4f13cc72db2f3($context, $indent, $value);
                $buffer .= '>';
                $value = $context->find('str');
                $buffer .= $this->section843718894b1267adbafccdbbee864e33($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <a class="footer-terms-and-conditions
';
                $buffer .= $indent . '        ';
                $value = $context->find('footertermsandconditionsshow');
                if (empty($value)) {
                    
                    $buffer .= 'd-none';
                }
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('footertermsandconditionsshow');
                $buffer .= $this->section931bf4eb2244099ed45a65d27f05f1c4($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '        href="
';
                $buffer .= $indent . '        ';
                $value = $context->find('footertermsandconditionsshow');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('footertermsandconditionsshow');
                $buffer .= $this->sectionC3e2274502cb9468bbbc02eff3bc811c($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '       ';
                $value = $context->find('termsandconditionewtab');
                $buffer .= $this->section4076fe7190914716a4f4f13cc72db2f3($context, $indent, $value);
                $buffer .= '>';
                $value = $context->find('str');
                $buffer .= $this->section3112891fa6016050b4207c2bcc6b4532($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
