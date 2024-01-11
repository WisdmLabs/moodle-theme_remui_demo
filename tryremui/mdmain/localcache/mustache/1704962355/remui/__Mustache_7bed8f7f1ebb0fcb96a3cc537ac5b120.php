<?php

class __Mustache_7bed8f7f1ebb0fcb96a3cc537ac5b120 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showskiplink');
        $buffer .= $this->sectionBf5576a4b7595c5e65ad3a64a5a1a610($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="';
        $value = $context->find('hidden');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('hascontrols');
        $buffer .= $this->section12f3cb4be977f05616300fd1301c564b($context, $indent, $value);
        $buffer .= ' " role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-instance-id="';
        $value = $this->resolveValue($context->find('blockinstanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('arialabel');
        $buffer .= $this->section1e692aac7b8190fe966aa30db3fe2059($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $buffer .= ' ';
            $value = $context->find('title');
            $buffer .= $this->sectionBb6cc2c50e86377a4b196696cba482ae($context, $indent, $value);
            $buffer .= ' ';
        }
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="block-body-wrapper">
';
        $buffer .= $indent . '        <div class="block-header-wrapper d-flex justify-content-between align-items-center">
';
        $value = $context->find('title');
        $buffer .= $this->section8e0035b3a9a1ffadd8a6c44714da4732($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $context->find('title');
        if (empty($value)) {
            
            $buffer .= '<span></span>';
        }
        $buffer .= '
';
        $value = $context->find('hascontrols');
        $buffer .= $this->sectionF871ca39d298c3bb3ddca09798c5e98f($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-text content block-content-area ';
        $value = $context->find('isbodytransparent');
        if (empty($value)) {
            
            $buffer .= 'edw-block-body';
        }
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="footer">';
        $value = $this->resolveValue($context->find('footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $value = $context->find('showskiplink');
        $buffer .= $this->sectionFf35dc3204b596595581ef37955e5043($context, $indent, $value);

        return $buffer;
    }

    private function sectionBe3d023555afc33fa231c38a8a50c680(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'skipa, access, {{{title}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'skipa, access, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf5576a4b7595c5e65ad3a64a5a1a610(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="#sb-{{skipid}}" class="sr-only sr-only-focusable">{{#str}}skipa, access, {{{title}}}{{/str}}</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<a href="#sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only sr-only-focusable">';
                $value = $context->find('str');
                $buffer .= $this->sectionBe3d023555afc33fa231c38a8a50c680($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f3cb4be977f05616300fd1301c564b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block_with_controls';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block_with_controls';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e692aac7b8190fe966aa30db3fe2059(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-label="{{arialabel}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-label="';
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb6cc2c50e86377a4b196696cba482ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-labelledby="instance-{{blockinstanceid}}-header"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e0035b3a9a1ffadd8a6c44714da4732(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h4 id="instance-{{blockinstanceid}}-header" class="block-header" title="{{{title}}} block">{{{title}}}</h4>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h4 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header" class="block-header" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' block">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF871ca39d298c3bb3ddca09798c5e98f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex flex-gap-1d5 controls-wrapper">
                {{{livecustomizationbtn}}}
                <div class="block-controls header">
                    {{{controls}}}
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex flex-gap-1d5 controls-wrapper">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('livecustomizationbtn'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="block-controls header">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
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

    private function sectionFf35dc3204b596595581ef37955e5043(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span id="sb-{{skipid}}"></span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<span id="sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
