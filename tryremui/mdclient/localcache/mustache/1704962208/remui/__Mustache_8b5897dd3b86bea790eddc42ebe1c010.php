<?php

class __Mustache_8b5897dd3b86bea790eddc42ebe1c010 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('slider');
        $buffer .= $this->section9b55a46957bfb2c5c4f93394e4bcafaf($context, $indent, $value);

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

    private function sectionF99facd55254e9e230c7b09f4e594dfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li data-slide-to="{{count}}" data-target="#edwiser-carousel-old" class="{{#active}}active{{/active}}"></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li data-slide-to="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-target="#edwiser-carousel-old" class="';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e5f400a512a6fdbfe4ea19126426bc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-2">{{{ btn_txt }}}</a></p>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <p><a href="';
                $value = $this->resolveValue($context->find('btn_link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary mt-2">';
                $value = $this->resolveValue($context->find('btn_txt'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2a4e6c15424fad8d1bb89f4bb99b556(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
                    <div class="carousel-caption">
                        {{{ img_txt }}}
                        {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-2">{{{ btn_txt }}}</a></p>
                        {{/ btn_txt }}
                    </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="carousel-item align-items-center ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div id="banner-img-slider" class="col-12" style="background-image:url(';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
';
                $buffer .= $indent . '                    <div class="carousel-caption">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('img_txt'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('btn_txt');
                $buffer .= $this->section3e5f400a512a6fdbfe4ea19126426bc7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section065187b3f1103c517bc52fb330432df5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <!-- slider -->
        <div class="carousel slide" id="edwiser-carousel-old" data-interval="{{ slideinterval }}" data-ride="carousel">
            <ol class="carousel-indicators">
                {{# slides }}
                    <li data-slide-to="{{count}}" data-target="#edwiser-carousel-old" class="{{#active}}active{{/active}}"></li>
                {{/ slides}}
            </ol>

            <div class="carousel-inner" role="listbox">
                {{# slides }}
                    <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
                    <div class="carousel-caption">
                        {{{ img_txt }}}
                        {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-2">{{{ btn_txt }}}</a></p>
                        {{/ btn_txt }}
                    </div>
                    </div>
                {{/ slides }}

                <a class="carousel-control-prev" href="#edwiser-carousel-old" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon edw-icon edw-icon-Left-Arrow" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#edwiser-carousel-old" role="button" data-slide="next">
                    <span class="carousel-control-next-icon edw-icon edw-icon-Right-Arrow" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- slider ends -->
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <!-- slider -->
';
                $buffer .= $indent . '        <div class="carousel slide" id="edwiser-carousel-old" data-interval="';
                $value = $this->resolveValue($context->find('slideinterval'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-ride="carousel">
';
                $buffer .= $indent . '            <ol class="carousel-indicators">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionF99facd55254e9e230c7b09f4e594dfd($context, $indent, $value);
                $buffer .= $indent . '            </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="carousel-inner" role="listbox">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionA2a4e6c15424fad8d1bb89f4bb99b556($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <a class="carousel-control-prev" href="#edwiser-carousel-old" role="button" data-slide="prev">
';
                $buffer .= $indent . '                    <span class="carousel-control-prev-icon edw-icon edw-icon-Left-Arrow" aria-hidden="true"></span>
';
                $buffer .= $indent . '                    <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <a class="carousel-control-next" href="#edwiser-carousel-old" role="button" data-slide="next">
';
                $buffer .= $indent . '                    <span class="carousel-control-next-icon edw-icon edw-icon-Right-Arrow" aria-hidden="true"></span>
';
                $buffer .= $indent . '                    <span class="sr-only">Next</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <!-- slider ends -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e7cad868d74dcf7538ac55a979ccaa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="cover card card-inverse rem-staticimage border-0">
            <div id="banner-img-slider" class="col-12" style="background-image:url({{ staticimage }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
            <div class="carousel-caption cover-background centered card-img-overlay white">
            {{{addtxt}}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="cover card card-inverse rem-staticimage border-0">
';
                $buffer .= $indent . '            <div id="banner-img-slider" class="col-12" style="background-image:url(';
                $value = $this->resolveValue($context->find('staticimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
';
                $buffer .= $indent . '            <div class="carousel-caption cover-background centered card-img-overlay white">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addtxt'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD05442085f57a154341a183b4d4b28a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="w-100 wdm-home-video">
                <iframe class="h-100 w-100 border-0" src="{{ video }}?rel=0" allowfullscreen></iframe>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="w-100 wdm-home-video">
';
                $buffer .= $indent . '                <iframe class="h-100 w-100 border-0" src="';
                $value = $this->resolveValue($context->find('video'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?rel=0" allowfullscreen></iframe>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b55a46957bfb2c5c4f93394e4bcafaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="edwiser-slider">
        {{# isslider }}
        <!-- slider -->
        <div class="carousel slide" id="edwiser-carousel-old" data-interval="{{ slideinterval }}" data-ride="carousel">
            <ol class="carousel-indicators">
                {{# slides }}
                    <li data-slide-to="{{count}}" data-target="#edwiser-carousel-old" class="{{#active}}active{{/active}}"></li>
                {{/ slides}}
            </ol>

            <div class="carousel-inner" role="listbox">
                {{# slides }}
                    <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
                    <div class="carousel-caption">
                        {{{ img_txt }}}
                        {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-2">{{{ btn_txt }}}</a></p>
                        {{/ btn_txt }}
                    </div>
                    </div>
                {{/ slides }}

                <a class="carousel-control-prev" href="#edwiser-carousel-old" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon edw-icon edw-icon-Left-Arrow" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#edwiser-carousel-old" role="button" data-slide="next">
                    <span class="carousel-control-next-icon edw-icon edw-icon-Right-Arrow" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- slider ends -->
        {{/ isslider }}

        {{# isimage }}
        <div class="cover card card-inverse rem-staticimage border-0">
            <div id="banner-img-slider" class="col-12" style="background-image:url({{ staticimage }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div>
            <div class="carousel-caption cover-background centered card-img-overlay white">
            {{{addtxt}}}
            </div>
        </div>
        {{/ isimage }}

        {{# isvideo }}
            <div class="w-100 wdm-home-video">
                <iframe class="h-100 w-100 border-0" src="{{ video }}?rel=0" allowfullscreen></iframe>
            </div>
        {{/ isvideo }}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="edwiser-slider">
';
                $value = $context->find('isslider');
                $buffer .= $this->section065187b3f1103c517bc52fb330432df5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('isimage');
                $buffer .= $this->section2e7cad868d74dcf7538ac55a979ccaa2($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('isvideo');
                $buffer .= $this->sectionD05442085f57a154341a183b4d4b28a1($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
