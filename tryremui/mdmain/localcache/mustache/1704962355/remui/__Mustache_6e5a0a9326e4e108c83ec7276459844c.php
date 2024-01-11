<?php

class __Mustache_6e5a0a9326e4e108c83ec7276459844c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="editprofile" class="panel-body px-0  edit-profile-details-wrapper d-none">
';
        $buffer .= $indent . '  <div class="summary-errors alert alert-success alert-dismissible slide-bottom" id="error-message"
';
        $buffer .= $indent . '  style="display:none;margin-top:10px">
';
        $buffer .= $indent . '  <p></p>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '    <form class="form-horizontal fv-form fv-form-bootstrap4" id="exampleStandardForm" autocomplete="off"
';
        $buffer .= $indent . '      novalidate="novalidate">
';
        $buffer .= $indent . '      <div class="profile-about-me-edit-wrapper">
';
        $buffer .= $indent . '        <div class=" profile-item-row">
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionEea27924eda0effa86b28a33761616a5($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="text" class="form-control" id=\'first_name\' name="first_name" data-fv-field="first_name"
';
        $buffer .= $indent . '                value="';
        $value = $this->resolveValue($context->find('firstname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('field_lock_firstname');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionA6110afa8bbddb36bae57265c717c810($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="text" class="form-control" id=\'surname\' name="surname" data-fv-field="surname"
';
        $buffer .= $indent . '                value="';
        $value = $this->resolveValue($context->find('lastname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('field_lock_lastname');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section5a84fe53ce69a3f2b53fe55b474c1002($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="email" class="form-control" id=\'standard_email\' name="standard_email"
';
        $buffer .= $indent . '                data-fv-field="standard_email" value="';
        $value = $this->resolveValue($context->find('editmodeemail'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" disabled>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionDf991e3371c1e6680630c45da99d4b63($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="text" class="form-control" id=\'phone_number\' name="phone_number"
';
        $buffer .= $indent . '                data-fv-field="phone_number" value="';
        $value = $context->find('phone1');
        $buffer .= $this->sectionD89babd57d732ff88bed7a303762416a($context, $indent, $value);
        $value = $context->find('phone1');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section04180ea552f2345d07bcee3e6f0e50cd($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="text" class="form-control" id=\'department\' name="department" data-fv-field="department"
';
        $buffer .= $indent . '                value="';
        $value = $context->find('department');
        $buffer .= $this->sectionA18d5f226d15514d15723195e7214de8($context, $indent, $value);
        $value = $context->find('department');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper ">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->sectionAd0805970fdebed9f3f62f57b21a593c($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <div class="d-flex flex-wrap flex-gap-2 interest-field-disabled"> ';
        $value = $context->find('hasinterests');
        $buffer .= $this->section3b6fd3ae5b9ecee81c7fe7bbab9d671e($context, $indent, $value);
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '              <div>
';
        $buffer .= $indent . '                <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section377529cb46f9564a390094c75c88f48b($context, $indent, $value);
        $buffer .= ' <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/user/editadvanced.php#id_moodle_interests">';
        $value = $context->find('str');
        $buffer .= $this->section35125de7bb3e8f7cff1363d9bef1df19($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section7c6105c3642fd87d854505522c7f7953($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <select class="form-control" id="country" name="country" required="" data-fv-field="country"
';
        $buffer .= $indent . '                ';
        $value = $context->find('field_lock_country');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('countries');
        $buffer .= $this->section4a077a4100a4c19aaea38f31ae82edad($context, $indent, $value);
        $buffer .= $indent . '              </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section976e9d40515cafa7ab5be5affd0acb22($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <input type="text" class="form-control" id=\'city\' name="city" data-fv-field="city"
';
        $buffer .= $indent . '                value="';
        $value = $this->resolveValue($context->find('editmodecity'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" ';
        $value = $context->find('field_lock_city');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class=" profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section0bbe1b8d09a4bf36a1966be553fc2d02($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <textarea class="form-control" id=\'description\' name="description" rows="3"
';
        $buffer .= $indent . '                data-fv-field="description">';
        $value = $this->resolveValue($context->find('editmodedescription'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</textarea>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="profile-item-col">
';
        $buffer .= $indent . '            <div class="profile-info-item-wrapper">
';
        $buffer .= $indent . '              <p class="m-0 info-label text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section9577cafc2184099529d937ca27ba22d7($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              <textarea class="form-control" id=\'address\' name="address" rows="3" data-fv-field="description">';
        $value = $context->find('address');
        $buffer .= $this->section2f3fec986dd284aa793d0545a4ec2ab3($context, $indent, $value);
        $value = $context->find('address');
        if (empty($value)) {
            
            $buffer .= '-';
        }
        $buffer .= '</textarea>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '      <div class="text-right buttons-wrapper p-p-6">
';
        $buffer .= $indent . '        <button type="button" class="btn btn-primary" id="btn-save-changes">';
        $value = $context->find('str');
        $buffer .= $this->section7dc7d111ea38bb48083ab9bdfa0de7b2($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '    <!--<div class="alert alert-danger" id="error-message" style="display:none;margin-top:10px"></div>-->
';
        $buffer .= $indent . '  </div>
';

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

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
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

    private function sectionA18d5f226d15514d15723195e7214de8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ department }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('department'), $context);
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

    private function sectionBf3d4fcdf61ca0b79e24fbe2802329e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{{config.wwwroot}}}/tag/index.php?id={{id}}" class="badge badge-primary" disabled>{{rawname}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/tag/index.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="badge badge-primary" disabled>';
                $value = $this->resolveValue($context->find('rawname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b6fd3ae5b9ecee81c7fe7bbab9d671e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{# interests }}
                <a href="{{{config.wwwroot}}}/tag/index.php?id={{id}}" class="badge badge-primary" disabled>{{rawname}}</a>
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
                $buffer .= $this->sectionBf3d4fcdf61ca0b79e24fbe2802329e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section377529cb46f9564a390094c75c88f48b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' profileinterestinfo, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' profileinterestinfo, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35125de7bb3e8f7cff1363d9bef1df19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' profileinterest, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' profileinterest, theme_remui ';
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

    private function section4a077a4100a4c19aaea38f31ae82edad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{ keyName }}">{{ valName }}</option>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('keyName'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('valName'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section976e9d40515cafa7ab5be5affd0acb22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' citytowntext, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' citytowntext, theme_remui ';
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

    private function section2f3fec986dd284aa793d0545a4ec2ab3(Mustache_Context $context, $indent, $value)
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
                $buffer .= $indent . '                            ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dc7d111ea38bb48083ab9bdfa0de7b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' save, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
