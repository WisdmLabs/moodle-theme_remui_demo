<?php

class __Mustache_be859c61904fa4db130c7cf998ff1314 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('aboutus');
        $buffer .= $this->sectionD7194447cdb5b8c35bc7c9a30f1a9925($context, $indent, $value);

        return $buffer;
    }

    private function sectionFd3702d11bd96b452d2626f7d927531a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="desc para-regular-2">{{{ aboutus_desc }}}</span> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="desc para-regular-2">';
                $value = $this->resolveValue($context->find('aboutus_desc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ace4e4bd720ec6e1cb73fb55b145821(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="background: url({{ image }}) center/cover;" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="background: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ') center/cover;" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b5089164d6717f5a590702c460b2b3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h3 class="feature-box__heading">{{{ heading }}}</h3>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h3 class="feature-box__heading">';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3571f8e9db3a72f231f9acdd7a7b0b06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="feature-box__text">
                    {{ description }}
                </p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p class="feature-box__text">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc09f7edf2c29ee880cb7c8cf5579a57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="feature-box__link d-flex align-item-center flex-gap-1" href="{{ link }}">{{ button }} <span class="edw-icon edw-icon-Right-Arrow large"></span></a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="feature-box__link d-flex align-item-center flex-gap-1" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' <span class="edw-icon edw-icon-Right-Arrow large"></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93aab28496e88eaf7b72620ec257a14f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="feature-box {{^ image }} bg-white {{/ image }}" {{# image }} style="background: url({{ image }}) center/cover;" {{/ image }}>
                <i class="feature-box__icon fa fa-{{ icon }}"></i>
                {{# heading }}
                <h3 class="feature-box__heading">{{{ heading }}}</h3>
                {{/ heading }}

                {{# description }}
                <p class="feature-box__text">
                    {{ description }}
                </p>
                {{/ description }}

                {{# button }}
                <a class="feature-box__link d-flex align-item-center flex-gap-1" href="{{ link }}">{{ button }} <span class="edw-icon edw-icon-Right-Arrow large"></span></a>
                {{/ button }}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="feature-box ';
                $value = $context->find('image');
                if (empty($value)) {
                    
                    $buffer .= ' bg-white ';
                }
                $buffer .= '" ';
                $value = $context->find('image');
                $buffer .= $this->section8ace4e4bd720ec6e1cb73fb55b145821($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <i class="feature-box__icon fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $value = $context->find('heading');
                $buffer .= $this->section2b5089164d6717f5a590702c460b2b3d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('description');
                $buffer .= $this->section3571f8e9db3a72f231f9acdd7a7b0b06($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('button');
                $buffer .= $this->sectionEc09f7edf2c29ee880cb7c8cf5579a57($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7194447cdb5b8c35bc7c9a30f1a9925(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="edwiser-aboutus" class="bg-transparent" role="main">
    <div class="container r-py-16 {{aboutus_layout}}">
        <div class="heading d-flex flex-column align-items-center p-py-14">
            <h4 class="title h-semibold-3">{{{ aboutus_heading }}}</h4>
           {{# aboutus_desc }}<span class="desc para-regular-2">{{{ aboutus_desc }}}</span> {{/ aboutus_desc }}
        </div>
        <div class="cards-deck  p-py-14">
            {{# aboutus_spots }}
            <div class="feature-box {{^ image }} bg-white {{/ image }}" {{# image }} style="background: url({{ image }}) center/cover;" {{/ image }}>
                <i class="feature-box__icon fa fa-{{ icon }}"></i>
                {{# heading }}
                <h3 class="feature-box__heading">{{{ heading }}}</h3>
                {{/ heading }}

                {{# description }}
                <p class="feature-box__text">
                    {{ description }}
                </p>
                {{/ description }}

                {{# button }}
                <a class="feature-box__link d-flex align-item-center flex-gap-1" href="{{ link }}">{{ button }} <span class="edw-icon edw-icon-Right-Arrow large"></span></a>
                {{/ button }}
            </div>
            {{/ aboutus_spots }}
        </div>
    </div>
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="edwiser-aboutus" class="bg-transparent" role="main">
';
                $buffer .= $indent . '    <div class="container r-py-16 ';
                $value = $this->resolveValue($context->find('aboutus_layout'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="heading d-flex flex-column align-items-center p-py-14">
';
                $buffer .= $indent . '            <h4 class="title h-semibold-3">';
                $value = $this->resolveValue($context->find('aboutus_heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '           ';
                $value = $context->find('aboutus_desc');
                $buffer .= $this->sectionFd3702d11bd96b452d2626f7d927531a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="cards-deck  p-py-14">
';
                $value = $context->find('aboutus_spots');
                $buffer .= $this->section93aab28496e88eaf7b72620ec257a14f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
