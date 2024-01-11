<?php

class __Mustache_f3426e3d1fbb18293e12485197af7fd0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('testimoniallist');
        $buffer .= $this->section97776d1e3f96755544e08921ee8ff243($context, $indent, $value);

        return $buffer;
    }

    private function section91d5eabf019f40a5afc8d753ca103442(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="desc para-regular-2">{{{ aboutus_desc }}}</span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="desc para-regular-2">';
                $value = $this->resolveValue($context->find('aboutus_desc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1eb16a7866e3084d547563594a349f19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li data-target="#testimonialCarousel" data-slide-to="{{count}}" class="{{#active}}active{{/active}}"></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li data-target="#testimonialCarousel" data-slide-to="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section246b2cba6a084979539dda44e9c793fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="avatar current" style="background-image:url({{ image }});">
                            </span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span class="avatar current" style="background-image:url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');">
';
                $buffer .= $indent . '                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06fd266e3bad992395f3ef45fa2a1013(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="font-size-20 text-dark">{{ name }}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="font-size-20 text-dark">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2732371c6619534c68a34818e9a7257(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="font-size-14 text-muted">{{ designation }}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="font-size-14 text-muted">';
                $value = $this->resolveValue($context->find('designation'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9554e97600c900de67a75fe412cf135(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 250, {{{ text }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 250, ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section019de70e8e974ed9f879f2872a01fbc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="font-size-14 text-muted text-center">
                                {{#shortentext}} 250, {{{ text }}} {{/shortentext}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="font-size-14 text-muted text-center">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionB9554e97600c900de67a75fe412cf135($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section710e5c820a943f70caf1bd4a733920f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item {{#active}}active{{/active}}">
                    <div class="carousel-item-wrapper d-flex flex-column flex-gap-6">
                        <div >
                            {{# image }}
                            <span class="avatar current" style="background-image:url({{ image }});">
                            </span>
                            {{/ image }}
                            {{# name }}
                                <div class="font-size-20 text-dark">{{ name }}</div>
                            {{/ name }}
                            {{# designation }}
                                <div class="font-size-14 text-muted">{{ designation }}</div>
                            {{/ designation }}
                        </div>
                        {{# text }}
                            <div class="font-size-14 text-muted text-center">
                                {{#shortentext}} 250, {{{ text }}} {{/shortentext}}
                            </div>
                        {{/ text }}
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="carousel-item-wrapper d-flex flex-column flex-gap-6">
';
                $buffer .= $indent . '                        <div >
';
                $value = $context->find('image');
                $buffer .= $this->section246b2cba6a084979539dda44e9c793fe($context, $indent, $value);
                $value = $context->find('name');
                $buffer .= $this->section06fd266e3bad992395f3ef45fa2a1013($context, $indent, $value);
                $value = $context->find('designation');
                $buffer .= $this->sectionD2732371c6619534c68a34818e9a7257($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $value = $context->find('text');
                $buffer .= $this->section019de70e8e974ed9f879f2872a01fbc0($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97776d1e3f96755544e08921ee8ff243(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="edwiser-testimonials" role="main">
    <div class="container r-py-16 {{aboutus_layout}}">
        <div class="heading d-flex flex-column align-items-center p-py-14">
            <h4 class="title h-semibold-3">{{{ aboutus_heading }}}</h4>
            {{# aboutus_desc }}
            <span class="desc para-regular-2">{{{ aboutus_desc }}}</span>
            {{/ aboutus_desc }}
        </div>
        <div class="testimonials p-py-14">
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
              <ol class="carousel-indicators">
                {{# testimonials }}
                    <li data-target="#testimonialCarousel" data-slide-to="{{count}}" class="{{#active}}active{{/active}}"></li>
                {{/ testimonials }}
              </ol>
              <div class="carousel-inner">
                {{# testimonials }}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <div class="carousel-item-wrapper d-flex flex-column flex-gap-6">
                        <div >
                            {{# image }}
                            <span class="avatar current" style="background-image:url({{ image }});">
                            </span>
                            {{/ image }}
                            {{# name }}
                                <div class="font-size-20 text-dark">{{ name }}</div>
                            {{/ name }}
                            {{# designation }}
                                <div class="font-size-14 text-muted">{{ designation }}</div>
                            {{/ designation }}
                        </div>
                        {{# text }}
                            <div class="font-size-14 text-muted text-center">
                                {{#shortentext}} 250, {{{ text }}} {{/shortentext}}
                            </div>
                        {{/ text }}
                    </div>
                </div>
                {{/ testimonials }}
              </div>
              <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon edw-icon edw-icon-Left-Arrow" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon edw-icon edw-icon-Right-Arrow" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
            </div>
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
                
                $buffer .= $indent . '<section id="edwiser-testimonials" role="main">
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
                $value = $context->find('aboutus_desc');
                $buffer .= $this->section91d5eabf019f40a5afc8d753ca103442($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="testimonials p-py-14">
';
                $buffer .= $indent . '            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
';
                $buffer .= $indent . '              <ol class="carousel-indicators">
';
                $value = $context->find('testimonials');
                $buffer .= $this->section1eb16a7866e3084d547563594a349f19($context, $indent, $value);
                $buffer .= $indent . '              </ol>
';
                $buffer .= $indent . '              <div class="carousel-inner">
';
                $value = $context->find('testimonials');
                $buffer .= $this->section710e5c820a943f70caf1bd4a733920f1($context, $indent, $value);
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
';
                $buffer .= $indent . '                  <span class="carousel-control-prev-icon edw-icon edw-icon-Left-Arrow" aria-hidden="true"></span>
';
                $buffer .= $indent . '                  <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '              </a>
';
                $buffer .= $indent . '              <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
';
                $buffer .= $indent . '                  <span class="carousel-control-next-icon edw-icon edw-icon-Right-Arrow" aria-hidden="true"></span>
';
                $buffer .= $indent . '                  <span class="sr-only">Next</span>
';
                $buffer .= $indent . '              </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
