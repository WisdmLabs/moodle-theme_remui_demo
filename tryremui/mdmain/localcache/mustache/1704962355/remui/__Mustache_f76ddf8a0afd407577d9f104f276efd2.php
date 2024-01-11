<?php

class __Mustache_f76ddf8a0afd407577d9f104f276efd2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('focusdata');
        $buffer .= $this->section519fb6a870cd1fb63c75573bc48ebc09($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionCc7218324cc7018e91880af987a1257a($context, $indent, $value);

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

    private function section17dafe1c388a195c00347b5dbc04e530(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{courseurl}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44b87baf053a51971c1970c6c11a21b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex align-items-center">
                    <div class="progress mr-1" style="height: 10px;width: 200px;" >
                        <div class="progress-bar" role="progressbar" style="width: {{progress}}%;" aria-valuenow="{{progress}}" tabindex="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="progress-text">{{progress}}%</span>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex align-items-center">
';
                $buffer .= $indent . '                    <div class="progress mr-1" style="height: 10px;width: 200px;" >
';
                $buffer .= $indent . '                        <div class="progress-bar" role="progressbar" style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%;" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" tabindex="0" aria-valuemin="0" aria-valuemax="100"></div>
';
                $buffer .= $indent . '                    </div><span class="progress-text">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%</span>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b1f04d157fb8ef03521108e411ac3ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{previous}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('previous'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d60bf6920fc4c0f361787de162accb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prev, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'prev, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c7ccd0f54a2ca031429f47669d944f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{active}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65b0107ec6bbc347ccc7e819a6e0e84b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursedata, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursedata, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section407f17098239254699944ecdd6b88154(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="fa fa-angle-down rotate-icon"></i>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<i class="fa fa-angle-down rotate-icon"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0892f5ef1255167364f210c56ade33e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="card  ">
                                <!-- Card header -->
                                <div class="card-header d-flex activity-item" role="tab">
                                  <a href="{{url}}" class="w-100 d-inline-flex justify-content-left align-items-center">
                                    <img src="{{icon}}" class="iconlarge activityicon mr-2" alt="" role="presentation" aria-hidden="true">
                                    <h5 class="mb-0">
                                      {{name}}
                                    </h5>
                                  </a>
                                </div>
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="card  ">
';
                $buffer .= $indent . '                                <!-- Card header -->
';
                $buffer .= $indent . '                                <div class="card-header d-flex activity-item" role="tab">
';
                $buffer .= $indent . '                                  <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="w-100 d-inline-flex justify-content-left align-items-center">
';
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="iconlarge activityicon mr-2" alt="" role="presentation" aria-hidden="true">
';
                $buffer .= $indent . '                                    <h5 class="mb-0">
';
                $buffer .= $indent . '                                      ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                    </h5>
';
                $buffer .= $indent . '                                  </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31c9c22a07354a50ae4fe6bdaaf86612(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <!-- Card body -->
                        <div id="collapse{{sectionid}}" class="collapse {{active}}" role="tabpanel" aria-labelledby="heading{{sectionid}}"
                          data-parent="#accordionEx1">
                          <div class="card-body m-0 p-0">
                            {{#activities}}
                            <div class="card  ">
                                <!-- Card header -->
                                <div class="card-header d-flex activity-item" role="tab">
                                  <a href="{{url}}" class="w-100 d-inline-flex justify-content-left align-items-center">
                                    <img src="{{icon}}" class="iconlarge activityicon mr-2" alt="" role="presentation" aria-hidden="true">
                                    <h5 class="mb-0">
                                      {{name}}
                                    </h5>
                                  </a>
                                </div>
                            </div>
                            {{/activities}}
                          </div>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <!-- Card body -->
';
                $buffer .= $indent . '                        <div id="collapse';
                $value = $this->resolveValue($context->find('sectionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="collapse ';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="tabpanel" aria-labelledby="heading';
                $value = $this->resolveValue($context->find('sectionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                          data-parent="#accordionEx1">
';
                $buffer .= $indent . '                          <div class="card-body m-0 p-0">
';
                $value = $context->find('activities');
                $buffer .= $this->section0892f5ef1255167364f210c56ade33e2($context, $indent, $value);
                $buffer .= $indent . '                          </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2204f30f019e796a305f62b943166da1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <!-- Accordion card -->
                      <div class="card border-bottom">
                        <!-- Card header -->
                        <div class="card-header p-p-4" role="tab" id="heading{{sectionid}}">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse{{sectionid}}"
                            aria-expanded="false" aria-controls="collapse{{sectionid}}">
                            <h5 class="mb-0 d-flex justify-content-between">
                              {{{name}}} {{#hasactivites}}<i class="fa fa-angle-down rotate-icon"></i>{{/hasactivites}}
                            </h5>
                          </a>
                        </div>
                        {{#hasactivites}}
                        <!-- Card body -->
                        <div id="collapse{{sectionid}}" class="collapse {{active}}" role="tabpanel" aria-labelledby="heading{{sectionid}}"
                          data-parent="#accordionEx1">
                          <div class="card-body m-0 p-0">
                            {{#activities}}
                            <div class="card  ">
                                <!-- Card header -->
                                <div class="card-header d-flex activity-item" role="tab">
                                  <a href="{{url}}" class="w-100 d-inline-flex justify-content-left align-items-center">
                                    <img src="{{icon}}" class="iconlarge activityicon mr-2" alt="" role="presentation" aria-hidden="true">
                                    <h5 class="mb-0">
                                      {{name}}
                                    </h5>
                                  </a>
                                </div>
                            </div>
                            {{/activities}}
                          </div>
                        </div>
                        {{/hasactivites}}
                      </div>
                      <!-- Accordion card -->
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <!-- Accordion card -->
';
                $buffer .= $indent . '                      <div class="card border-bottom">
';
                $buffer .= $indent . '                        <!-- Card header -->
';
                $buffer .= $indent . '                        <div class="card-header p-p-4" role="tab" id="heading';
                $value = $this->resolveValue($context->find('sectionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse';
                $value = $this->resolveValue($context->find('sectionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                            aria-expanded="false" aria-controls="collapse';
                $value = $this->resolveValue($context->find('sectionid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            <h5 class="mb-0 d-flex justify-content-between">
';
                $buffer .= $indent . '                              ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $context->find('hasactivites');
                $buffer .= $this->section407f17098239254699944ecdd6b88154($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </h5>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </div>
';
                $value = $context->find('hasactivites');
                $buffer .= $this->section31c9c22a07354a50ae4fe6bdaaf86612($context, $indent, $value);
                $buffer .= $indent . '                      </div>
';
                $buffer .= $indent . '                      <!-- Accordion card -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2438a6470f0d12e7e9d61d474332903f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{next}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('next'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9a23a01e7fdf15e91689638ffc8ed5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section519fb6a870cd1fb63c75573bc48ebc09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<nav class="fm-navbar fixed-top navbar navbar-light navbar-expand moodle-has-zindex greedy justify-content-between" aria-label="{{#str}}sitemenubar, admin{{/str}}">
    <a href="{{{ config.homeurl }}}" class="navbar-brand d-none d-md-flex align-items-center m-0  aabtn" aria-label="{{ sitename }} - {{#str}}brandname, theme_remui{{/str}}">
        {{#output.get_branding_context}}
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
        {{/output.get_branding_context}}
    </a>
    <div class="sub-nav courseheaderbar bg-white">
    <ul class="navbar-nav h-100 m-0 p-0" id="wdm-courseheader">
        <li class="nav-item w-100">
            <div class="nav-link d-block m-0 p-0">
                <h5 class="title m-0" aria-label="Course - {{coursename}}"><a href="{{#courseurl}}{{courseurl}}{{/courseurl}} {{^courseurl}}javascript:void(0){{/courseurl}}">{{{coursename}}}</a></h5>
                {{#progress}}
                <div class="d-flex align-items-center">
                    <div class="progress mr-1" style="height: 10px;width: 200px;" >
                        <div class="progress-bar" role="progressbar" style="width: {{progress}}%;" aria-valuenow="{{progress}}" tabindex="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="progress-text">{{progress}}%</span>
                </div>
                {{/progress}}

                {{^progress}}
                <div class="d-flex align-items-center">
                    <div class="progress mr-1" style="height: 10px;width: 200px;">
                        <div class="progress-bar" tabindex="0" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span class="progress-text">0%</span>
                </div>
                {{/progress}}
            </div>
        </li>
    </ul>
    <ul class="nav navbar-nav h-100 activity-navigation justify-content-between m-0 p-0" aria-label="Activity Navigation">
        <li class="nav-item m-0 p-0" id="coursePrevious">
            <a class="nav-link px-2 w-100 h-100 d-flex align-items-center justify-content-center {{^previous}}disabled{{/previous}}" href="{{#previous}}{{previous}}{{/previous}}{{^previous}}javascript:void(0){{/previous}}" {{^previous}}aria-disabled=\'true\'{{/previous}}>
            <i class="fa fa-angle-left mr-2"></i><span class="navigation-text d-md-none d-lg-block" aria-label="Previous Activity" >{{#str}}prev, theme_remui {{/str}}</span></a>
        </li>
        <li class="nav-item m-0 p-0 focus-dropdown" id="courseActivities">
            <a class="nav-link px-2 w-100 justify-content-center dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="false" aria-haspopup="listbox" role="button" aria-labelledby="accordionEx1" aria-label="Activity List">
            <span>{{#active}}{{{active}}}{{/active}}{{^active}}{{#str}}coursedata, theme_remui{{/str}}{{/active}}</span>
            </a>
            <div class="focus-dropdown-menu dropdown-menu-right" role="menu">
                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-label="Activity List" aria-multiselectable="true">
                    {{#sections}}
                    <!-- Accordion card -->
                      <div class="card border-bottom">
                        <!-- Card header -->
                        <div class="card-header p-p-4" role="tab" id="heading{{sectionid}}">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse{{sectionid}}"
                            aria-expanded="false" aria-controls="collapse{{sectionid}}">
                            <h5 class="mb-0 d-flex justify-content-between">
                              {{{name}}} {{#hasactivites}}<i class="fa fa-angle-down rotate-icon"></i>{{/hasactivites}}
                            </h5>
                          </a>
                        </div>
                        {{#hasactivites}}
                        <!-- Card body -->
                        <div id="collapse{{sectionid}}" class="collapse {{active}}" role="tabpanel" aria-labelledby="heading{{sectionid}}"
                          data-parent="#accordionEx1">
                          <div class="card-body m-0 p-0">
                            {{#activities}}
                            <div class="card  ">
                                <!-- Card header -->
                                <div class="card-header d-flex activity-item" role="tab">
                                  <a href="{{url}}" class="w-100 d-inline-flex justify-content-left align-items-center">
                                    <img src="{{icon}}" class="iconlarge activityicon mr-2" alt="" role="presentation" aria-hidden="true">
                                    <h5 class="mb-0">
                                      {{name}}
                                    </h5>
                                  </a>
                                </div>
                            </div>
                            {{/activities}}
                          </div>
                        </div>
                        {{/hasactivites}}
                      </div>
                      <!-- Accordion card -->
                    {{/sections}}
                </div>
            </div>
        </li>
        <li class="nav-item m-0 p-0" id="courseNext" {{^next}}aria-disabled="true"{{/next}}>
            <a class="nav-link px-2 w-100 h-100 d-flex align-items-center justify-content-center {{^next}}disabled{{/next}}"
            href="{{#next}}{{next}}{{/next}}{{^next}}javascript:void(0){{/next}}"
            aria-label="Next Activity" role="button"
            ><span class="navigation-text d-md-none d-lg-block" >{{#str}}next, theme_remui {{/str}}</span><i class="fa fa-angle-right ml-2"></i></a>
        </li>
    </ul>
    </div>
</nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<nav class="fm-navbar fixed-top navbar navbar-light navbar-expand moodle-has-zindex greedy justify-content-between" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="navbar-brand d-none d-md-flex align-items-center m-0  aabtn" aria-label="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' - ';
                $value = $context->find('str');
                $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->findDot('output.get_branding_context');
                $buffer .= $this->section957265b38e1a07d19a39f78383718662($context, $indent, $value);
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div class="sub-nav courseheaderbar bg-white">
';
                $buffer .= $indent . '    <ul class="navbar-nav h-100 m-0 p-0" id="wdm-courseheader">
';
                $buffer .= $indent . '        <li class="nav-item w-100">
';
                $buffer .= $indent . '            <div class="nav-link d-block m-0 p-0">
';
                $buffer .= $indent . '                <h5 class="title m-0" aria-label="Course - ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><a href="';
                $value = $context->find('courseurl');
                $buffer .= $this->section17dafe1c388a195c00347b5dbc04e530($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('courseurl');
                if (empty($value)) {
                    
                    $buffer .= 'javascript:void(0)';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h5>
';
                $value = $context->find('progress');
                $buffer .= $this->section44b87baf053a51971c1970c6c11a21b0($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('progress');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div class="d-flex align-items-center">
';
                    $buffer .= $indent . '                    <div class="progress mr-1" style="height: 10px;width: 200px;">
';
                    $buffer .= $indent . '                        <div class="progress-bar" tabindex="0" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
';
                    $buffer .= $indent . '                    </div><span class="progress-text">0%</span>
';
                    $buffer .= $indent . '                </div>
';
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    <ul class="nav navbar-nav h-100 activity-navigation justify-content-between m-0 p-0" aria-label="Activity Navigation">
';
                $buffer .= $indent . '        <li class="nav-item m-0 p-0" id="coursePrevious">
';
                $buffer .= $indent . '            <a class="nav-link px-2 w-100 h-100 d-flex align-items-center justify-content-center ';
                $value = $context->find('previous');
                if (empty($value)) {
                    
                    $buffer .= 'disabled';
                }
                $buffer .= '" href="';
                $value = $context->find('previous');
                $buffer .= $this->section2b1f04d157fb8ef03521108e411ac3ec($context, $indent, $value);
                $value = $context->find('previous');
                if (empty($value)) {
                    
                    $buffer .= 'javascript:void(0)';
                }
                $buffer .= '" ';
                $value = $context->find('previous');
                if (empty($value)) {
                    
                    $buffer .= 'aria-disabled=\'true\'';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            <i class="fa fa-angle-left mr-2"></i><span class="navigation-text d-md-none d-lg-block" aria-label="Previous Activity" >';
                $value = $context->find('str');
                $buffer .= $this->section6d60bf6920fc4c0f361787de162accb0($context, $indent, $value);
                $buffer .= '</span></a>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="nav-item m-0 p-0 focus-dropdown" id="courseActivities">
';
                $buffer .= $indent . '            <a class="nav-link px-2 w-100 justify-content-center dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="false" aria-haspopup="listbox" role="button" aria-labelledby="accordionEx1" aria-label="Activity List">
';
                $buffer .= $indent . '            <span>';
                $value = $context->find('active');
                $buffer .= $this->section9c7ccd0f54a2ca031429f47669d944f4($context, $indent, $value);
                $value = $context->find('active');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section65b0107ec6bbc347ccc7e819a6e0e84b($context, $indent, $value);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <div class="focus-dropdown-menu dropdown-menu-right" role="menu">
';
                $buffer .= $indent . '                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-label="Activity List" aria-multiselectable="true">
';
                $value = $context->find('sections');
                $buffer .= $this->section2204f30f019e796a305f62b943166da1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="nav-item m-0 p-0" id="courseNext" ';
                $value = $context->find('next');
                if (empty($value)) {
                    
                    $buffer .= 'aria-disabled="true"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            <a class="nav-link px-2 w-100 h-100 d-flex align-items-center justify-content-center ';
                $value = $context->find('next');
                if (empty($value)) {
                    
                    $buffer .= 'disabled';
                }
                $buffer .= '"
';
                $buffer .= $indent . '            href="';
                $value = $context->find('next');
                $buffer .= $this->section2438a6470f0d12e7e9d61d474332903f($context, $indent, $value);
                $value = $context->find('next');
                if (empty($value)) {
                    
                    $buffer .= 'javascript:void(0)';
                }
                $buffer .= '"
';
                $buffer .= $indent . '            aria-label="Next Activity" role="button"
';
                $buffer .= $indent . '            ><span class="navigation-text d-md-none d-lg-block" >';
                $value = $context->find('str');
                $buffer .= $this->sectionE9a23a01e7fdf15e91689638ffc8ed5e($context, $indent, $value);
                $buffer .= '</span><i class="fa fa-angle-right ml-2"></i></a>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc7218324cc7018e91880af987a1257a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    var scrolled = false;
    $(\'#courseActivities .dropdown-toggle\').click(function() {
        var menu = $(this).parent().find(\'.focus-dropdown-menu\');
        menu.slideToggle(200, \'linear\', function() {
            if (!$(this).is(\':hidden\') && !scrolled) {
                scrolled = true;
                if (menu.find(\'.collapse.show\').length != 0) {
                    menu.scrollTop(menu.scrollTop() + menu.find(\'.collapse.show\').parent().position().top);
                }
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    var scrolled = false;
';
                $buffer .= $indent . '    $(\'#courseActivities .dropdown-toggle\').click(function() {
';
                $buffer .= $indent . '        var menu = $(this).parent().find(\'.focus-dropdown-menu\');
';
                $buffer .= $indent . '        menu.slideToggle(200, \'linear\', function() {
';
                $buffer .= $indent . '            if (!$(this).is(\':hidden\') && !scrolled) {
';
                $buffer .= $indent . '                scrolled = true;
';
                $buffer .= $indent . '                if (menu.find(\'.collapse.show\').length != 0) {
';
                $buffer .= $indent . '                    menu.scrollTop(menu.scrollTop() + menu.find(\'.collapse.show\').parent().position().top);
';
                $buffer .= $indent . '                }
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

}
