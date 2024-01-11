<?php

class __Mustache_faca5db254f3b92892fa13979f413cc9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<section>
';
        $buffer .= $indent . '  <div class="bg-white about-me-edit-icon-wrapper">
';
        $buffer .= $indent . '    <div class="edit-profile-icon-wrapper">
';
        $value = $context->find('haseditpermission');
        $buffer .= $this->section7935c426f3ecd269e4cab45dac7f778a($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="profile-about-me-wrapper">
';
        $buffer .= $indent . '      <div class="profile-item-row">
';
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionEea27924eda0effa86b28a33761616a5($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p class=" m-0 profile-user-info text-link-regular prof-user-firstname">';
        $value = $this->resolveValue($context->find('firstname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionA6110afa8bbddb36bae57265c717c810($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p class=" m-0 profile-user-info text-link-regular prof-user-lastname">';
        $value = $this->resolveValue($context->find('lastname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('email');
        $buffer .= $this->sectionAae1ccdf22ab2ed620d36443e445bd86($context, $indent, $value);
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionDf991e3371c1e6680630c45da99d4b63($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p class=" m-0 profile-user-info text-link-regular prof-user-phone">';
        $value = $context->find('phone1');
        $buffer .= $this->sectionD89babd57d732ff88bed7a303762416a($context, $indent, $value);
        $value = $context->find('phone1');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section04180ea552f2345d07bcee3e6f0e50cd($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p class=" m-0 profile-user-info text-link-regular prof-user-department">';
        $value = $context->find('department');
        $buffer .= $this->sectionE1e866867d69b95d4e801313a2974687($context, $indent, $value);
        $value = $context->find('department');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '</p>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionAd0805970fdebed9f3f62f57b21a593c($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap flex-gap-2 flex-wrap"> ';
        $value = $context->find('hasinterests');
        $buffer .= $this->sectionE4afc1219dd33621860817f0f4ed5f17($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('countryname');
        $buffer .= $this->section9a92b564cdad33215262a202c181f946($context, $indent, $value);
        $value = $context->find('city');
        $buffer .= $this->section37495b81ec0402143da69ed44a4e28ba($context, $indent, $value);
        $value = $context->find('description');
        $buffer .= $this->section8eb5c0016ab2dc10608d983e55acc014($context, $indent, $value);
        $buffer .= $indent . '        <div class="profile-item-col">
';
        $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section9577cafc2184099529d937ca27ba22d7($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <p class=" mb-0 profile-user-info text-link-regular prof-user-address">';
        $value = $context->find('address');
        $buffer .= $this->section69ca362f706e364bacd193dcf659f5fd($context, $indent, $value);
        $value = $context->find('address');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '</p>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/profile_edit_profile')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '  </div>
';
        $value = $context->find('hasbadges');
        $buffer .= $this->section28194bc8c76cd2210f1a7646c2c0f637($context, $indent, $value);
        $buffer .= $indent . '</section>
';

        return $buffer;
    }

    private function section7935c426f3ecd269e4cab45dac7f778a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{^ notcurrentuser }}
      <span class="edw-icon edw-icon-Edit"></span>
      <span class="edw-icon edw-icon-Cancel d-none" id="btn-canel-changes"></span>
      {{/ notcurrentuser }}
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('notcurrentuser');
                if (empty($value)) {
                    
                    $buffer .= $indent . '      <span class="edw-icon edw-icon-Edit"></span>
';
                    $buffer .= $indent . '      <span class="edw-icon edw-icon-Cancel d-none" id="btn-canel-changes"></span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEea27924eda0effa86b28a33761616a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firstname, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' firstname, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6110afa8bbddb36bae57265c717c810(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastname, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastname, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a84fe53ce69a3f2b53fe55b474c1002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' email, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' email, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAae1ccdf22ab2ed620d36443e445bd86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="profile-item-col">
            <div class="profile-info-item-wrapper">
              <p class="m-0 info-label text-link-semibold">{{# str }} email, moodle {{/ str }}</p>
              <p class=" m-0 profile-user-info text-link-regular prof-user-email">{{email}}</p>
            </div>
          </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="profile-item-col">
';
                $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
                $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
                $value = $context->find('str');
                $buffer .= $this->section5a84fe53ce69a3f2b53fe55b474c1002($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '              <p class=" m-0 profile-user-info text-link-regular prof-user-email">';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf991e3371c1e6680630c45da99d4b63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sitephone, core_hub ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sitephone, core_hub ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD89babd57d732ff88bed7a303762416a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{phone1}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('phone1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04180ea552f2345d07bcee3e6f0e50cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' department, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' department, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1e866867d69b95d4e801313a2974687(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ department }}, {{ institution
              }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('department'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('institution'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd0805970fdebed9f3f62f57b21a593c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' interests, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' interests, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25a35af2ea69474bf38a2d1c2f948397(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <a href="{{{config.wwwroot}}}/tag/index.php?id={{id}}" class="badge badge-primary">{{ rawname }}
              </a>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/tag/index.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="badge badge-primary">';
                $value = $this->resolveValue($context->find('rawname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '              </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4afc1219dd33621860817f0f4ed5f17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{# interests }}
              <a href="{{{config.wwwroot}}}/tag/index.php?id={{id}}" class="badge badge-primary">{{ rawname }}
              </a>
              {{/ interests }}
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $value = $context->find('interests');
                $buffer .= $this->section25a35af2ea69474bf38a2d1c2f948397($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c6105c3642fd87d854505522c7f7953(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' country, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' country, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a92b564cdad33215262a202c181f946(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="profile-item-col">
            <div class="profile-info-item-wrapper">
              <p class="m-0 info-label text-link-semibold">{{# str }} country, moodle {{/ str }}</p>
              <p class="m-0 profile-user-info text-link-regular prof-user-country">{{countryname}}</p>
            </div>
          </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="profile-item-col">
';
                $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
                $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
                $value = $context->find('str');
                $buffer .= $this->section7c6105c3642fd87d854505522c7f7953($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '              <p class="m-0 profile-user-info text-link-regular prof-user-country">';
                $value = $this->resolveValue($context->find('countryname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37495b81ec0402143da69ed44a4e28ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="profile-item-col">
            <div class="profile-info-item-wrapper">
              <p class="m-0 info-label text-link-semibold">City/Town</p>
              <p class="m-0 profile-user-info text-link-regular prof-user-city">{{city}}</p>
            </div>
          </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="profile-item-col">
';
                $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
                $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">City/Town</p>
';
                $buffer .= $indent . '              <p class="m-0 profile-user-info text-link-regular prof-user-city">';
                $value = $this->resolveValue($context->find('city'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bbe1b8d09a4bf36a1966be553fc2d02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb5c0016ab2dc10608d983e55acc014(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="profile-item-col">
          <div class="profile-info-item-wrapper">
            <p class="m-0 info-label text-link-semibold">{{# str }} description, theme_remui {{/ str }}</p>
            <p  class="m-0 profile-user-info text-link-regular ellipsis ellipsis-2 prof-user-desc">{{description}}</p>
          </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="profile-item-col">
';
                $buffer .= $indent . '          <div class="profile-info-item-wrapper">
';
                $buffer .= $indent . '            <p class="m-0 info-label text-link-semibold">';
                $value = $context->find('str');
                $buffer .= $this->section0bbe1b8d09a4bf36a1966be553fc2d02($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p  class="m-0 profile-user-info text-link-regular ellipsis ellipsis-2 prof-user-desc">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9577cafc2184099529d937ca27ba22d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' address, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' address, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69ca362f706e364bacd193dcf659f5fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '              ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4d4d3f2d4e9407886212097203a2ab3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' badgefrom, theme_remui,{{sitename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' badgefrom, theme_remui,';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87d9f35b87a9c779798e8d5bca7e368c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <li >
        <a href="{{ link }}" class="badge-item text-decoration-none">
          <img src="{{ imageurl }}" alt="{{ name }}" loading="lazy"/>
          <h6 class="m-0 h-semibold-6 ellipsis ellipsis-2 text-center" title="{{name}}">
            {{name }}
          </h6>
        </a>
      </li>

      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <li >
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="badge-item text-decoration-none">
';
                $buffer .= $indent . '          <img src="';
                $value = $this->resolveValue($context->find('imageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" loading="lazy"/>
';
                $buffer .= $indent . '          <h6 class="m-0 h-semibold-6 ellipsis ellipsis-2 text-center" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '          </h6>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '      </li>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28194bc8c76cd2210f1a7646c2c0f637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div id="user-badges" class="badges-container bg-white">
    <p class="m-0 p-p-6 badges-container-heading h-semibold-4">{{# str }} badgefrom, theme_remui,{{sitename}} {{/ str }}
    </p>
    <ul class="m-0 badge-grid">
      {{# badges}}
      <li >
        <a href="{{ link }}" class="badge-item text-decoration-none">
          <img src="{{ imageurl }}" alt="{{ name }}" loading="lazy"/>
          <h6 class="m-0 h-semibold-6 ellipsis ellipsis-2 text-center" title="{{name}}">
            {{name }}
          </h6>
        </a>
      </li>

      {{/ badges}}
    </ul>
  </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <div id="user-badges" class="badges-container bg-white">
';
                $buffer .= $indent . '    <p class="m-0 p-p-6 badges-container-heading h-semibold-4">';
                $value = $context->find('str');
                $buffer .= $this->sectionC4d4d3f2d4e9407886212097203a2ab3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </p>
';
                $buffer .= $indent . '    <ul class="m-0 badge-grid">
';
                $value = $context->find('badges');
                $buffer .= $this->section87d9f35b87a9c779798e8d5bca7e368c($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
