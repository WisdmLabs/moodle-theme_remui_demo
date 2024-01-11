<?php

class __Mustache_3e7068fe16e1ac8c051b5909835c7e19 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="usermenu">
';
        $value = $context->find('unauthenticateduser');
        $buffer .= $this->sectionF07a1d7863aa987fd11d17c2450c470e($context, $indent, $value);
        $value = $context->find('unauthenticateduser');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="dropdown show">
';
            $buffer .= $indent . '            <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section4e1672c73dd70427ed6b223d1fa8d13b($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '               aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle" title="';
            $value = $context->find('str');
            $buffer .= $this->section4e1672c73dd70427ed6b223d1fa8d13b($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                <span class="userbutton">
';
            if ($partial = $this->mustache->loadPartial('core/user_menu_metadata')) {
                $buffer .= $partial->renderInternal($context, $indent . '                    ');
            }
            $buffer .= $indent . '                </span>
';
            $buffer .= $indent . '            </a>
';
            $buffer .= $indent . '            <div id="user-action-menu" class="dropdown-menu dropdown-menu-right">
';
            $buffer .= $indent . '                <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
';
            $buffer .= $indent . '                    <div class="carousel-inner">
';
            $buffer .= $indent . '                        <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->sectionC9f8116799aecab2a637bf9b97e3b17a($context, $indent, $value);
            $buffer .= '">
';
            if ($partial = $this->mustache->loadPartial('core/user_action_menu_items')) {
                $buffer .= $partial->renderInternal($context, $indent . '                            ');
            }
            $buffer .= $indent . '                        </div>
';
            $value = $context->find('submenus');
            $buffer .= $this->section6349a4290745c396515cbf6e588cbb8a($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section9fabd883c42f661de9048a32b433b843($context, $indent, $value);

        return $buffer;
    }

    private function section372dada88a87ec5a5336cd0b597b76c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loggedinasguest, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loggedinasguest, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD182cc626edac9168314bb67933bb372(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section372dada88a87ec5a5336cd0b597b76c0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="divider border-left h-75 align-self-center mx-2"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section709c7103df2192436d0891976f85ca16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' login, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd69bbef7e7b9e9a4517306133eac6d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section709c7103df2192436d0891976f85ca16($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e1672c73dd70427ed6b223d1fa8d13b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usermenu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usermenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017705f8f43550b2ff24417966371360(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#str}} usernameemail {{/str}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08a8a7cdccfd89c264ddc9717efdcc58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotaccount, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotaccount, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4e22d588aae5ebcca97846da8e3d254(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' potentialidps, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dd861a0df9a2d98963a9ebe59f6c3bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img src="{{iconurl}}" alt="" width="24" height="24" loading="lazy"/>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24" loading="lazy"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7686522ac376259667e2b8ffd62eae6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a class="login-identityprovider-btn border-0" href="{{{url}}}" title="{{name}}">
                            {{#iconurl}}
                                <img src="{{iconurl}}" alt="" width="24" height="24" loading="lazy"/>
                            {{/iconurl}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a class="login-identityprovider-btn border-0" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('iconurl');
                $buffer .= $this->section6dd861a0df9a2d98963a9ebe59f6c3bc($context, $indent, $value);
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section057a2c117795b3cb3e0dae575e86bbf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-identityproviders d-flex flex-column flex-gap-6">
                    <h2 class="login-heading text-align-middle h-semibold-6 m-0">{{#str}} potentialidps, theme_remui {{/str}}</h2>

                    <div class="login-identityprovider-btn-wrapper d-flex flex-gap-6 justify-content-center">
                    {{#authmethods}}
                        <a class="login-identityprovider-btn border-0" href="{{{url}}}" title="{{name}}">
                            {{#iconurl}}
                                <img src="{{iconurl}}" alt="" width="24" height="24" loading="lazy"/>
                            {{/iconurl}}
                        </a>
                    {{/authmethods}}
                    </div>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-identityproviders d-flex flex-column flex-gap-6">
';
                $buffer .= $indent . '                    <h2 class="login-heading text-align-middle h-semibold-6 m-0">';
                $value = $context->find('str');
                $buffer .= $this->sectionA4e22d588aae5ebcca97846da8e3d254($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="login-identityprovider-btn-wrapper d-flex flex-gap-6 justify-content-center">
';
                $value = $context->find('authmethods');
                $buffer .= $this->sectionC7686522ac376259667e2b8ffd62eae6($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b9fb09adf301d485be72a91f7759d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="dropdown">
                <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="{{#str}}usermenu{{/str}}" aria-haspopup="true" aria-controls="user-action-menu" class="nav-link p-0" title="Login {{#str}}usermenu{{/str}}">
                    <div class="remuiicon">
                        <i class="icon fa fa-user"></i>
                    </div>
                    {{#str}} login, core {{/str}}
                </a>

                <div class="dropdown-menu dropdown-menu-right loginddown p-p-6" role="menu" data-region="popover-region-container">
                    <div class="d-flex flex-column flex-gap-8">
                    <form class="login-form" action="{{loginurl}}" method="post" id="login">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <div class="login-form-username form-group">
                            <label for="username" class="sr-only">
                                {{^canloginbyemail}}
                                    {{#str}} username {{/str}}
                                {{/canloginbyemail}}
                                {{#canloginbyemail}}
                                    {{#str}} usernameemail {{/str}}
                                {{/canloginbyemail}}
                            </label>
                            <label class="text-link-semibold " tabindex="-1">
                                {{^canloginbyemail}}
                                    {{#str}} username {{/str}}
                                {{/canloginbyemail}}
                                {{#canloginbyemail}}
                                    {{#str}} usernameemail {{/str}}
                                {{/canloginbyemail}}
                            </label>
                            <input type="text" name="username" id="username" {{!
                                !}}class="form-control form-control-lg" {{!
                                !}}value="{{username}}" {{!
                                !}}placeholder="{{^canloginbyemail}}{{#cleanstr}}username{{/cleanstr}}{{/canloginbyemail}}{{!
                                !}}{{#canloginbyemail}}{{#cleanstr}}usernameemail{{/cleanstr}}{{/canloginbyemail}}" {{!
                                !}}autocomplete="username">
                        </div>
                        <div class="login-form-password form-group">
                            <label for="password" class="sr-only">{{#str}} password {{/str}}</label>
                            <label class="text-link-semibold form-label-color" tabindex="-1">
                                {{#str}} password {{/str}}
                            </label>
                            <div class="position-relative password-field-eye">
                                <input type="password" name="password" id="password" value="" {{!
                                    !}}class="form-control form-control-lg" {{!
                                    !}}placeholder="{{#cleanstr}}password{{/cleanstr}}" {{!
                                    !}}autocomplete="current-password">
                                <span class="edw-icon edw-icon-Show show-password-icon"></span>
                            </div>
                        </div>
                        <div class="login-form-forgotpassword form-group text-right small-info-semibold">
                            <a href="{{forgotpasswordurl}}">{{#str}}forgotaccount, theme_remui{{/str}}</a>
                        </div>
                        <div class="login-form-submit form-group">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="loginbtn">{{#str}}login{{/str}}</button>
                        </div>
                    </form>
                    {{#hasauthmethods}}
                    <div class="login-identityproviders d-flex flex-column flex-gap-6">
                    <h2 class="login-heading text-align-middle h-semibold-6 m-0">{{#str}} potentialidps, theme_remui {{/str}}</h2>

                    <div class="login-identityprovider-btn-wrapper d-flex flex-gap-6 justify-content-center">
                    {{#authmethods}}
                        <a class="login-identityprovider-btn border-0" href="{{{url}}}" title="{{name}}">
                            {{#iconurl}}
                                <img src="{{iconurl}}" alt="" width="24" height="24" loading="lazy"/>
                            {{/iconurl}}
                        </a>
                    {{/authmethods}}
                    </div>
                    </div>
                    {{/hasauthmethods}}
                    </div>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="dropdown">
';
                $buffer .= $indent . '                <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section4e1672c73dd70427ed6b223d1fa8d13b($context, $indent, $value);
                $buffer .= '" aria-haspopup="true" aria-controls="user-action-menu" class="nav-link p-0" title="Login ';
                $value = $context->find('str');
                $buffer .= $this->section4e1672c73dd70427ed6b223d1fa8d13b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="remuiicon">
';
                $buffer .= $indent . '                        <i class="icon fa fa-user"></i>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section709c7103df2192436d0891976f85ca16($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="dropdown-menu dropdown-menu-right loginddown p-p-6" role="menu" data-region="popover-region-container">
';
                $buffer .= $indent . '                    <div class="d-flex flex-column flex-gap-8">
';
                $buffer .= $indent . '                    <form class="login-form" action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="login">
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="login-form-username form-group">
';
                $buffer .= $indent . '                            <label for="username" class="sr-only">
';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('str');
                    $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section017705f8f43550b2ff24417966371360($context, $indent, $value);
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <label class="text-link-semibold " tabindex="-1">
';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('str');
                    $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section017705f8f43550b2ff24417966371360($context, $indent, $value);
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <input type="text" name="username" id="username" ';
                $buffer .= 'class="form-control form-control-lg" ';
                $buffer .= 'value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $buffer .= 'placeholder="';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $value = $context->find('cleanstr');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
                $buffer .= '" ';
                $buffer .= 'autocomplete="username">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="login-form-password form-group">
';
                $buffer .= $indent . '                            <label for="password" class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            <label class="text-link-semibold form-label-color" tabindex="-1">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <div class="position-relative password-field-eye">
';
                $buffer .= $indent . '                                <input type="password" name="password" id="password" value="" ';
                $buffer .= 'class="form-control form-control-lg" ';
                $buffer .= 'placeholder="';
                $value = $context->find('cleanstr');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '" ';
                $buffer .= 'autocomplete="current-password">
';
                $buffer .= $indent . '                                <span class="edw-icon edw-icon-Show show-password-icon"></span>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="login-form-forgotpassword form-group text-right small-info-semibold">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section08a8a7cdccfd89c264ddc9717efdcc58($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="login-form-submit form-group">
';
                $buffer .= $indent . '                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="loginbtn">';
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </form>
';
                $value = $context->find('hasauthmethods');
                $buffer .= $this->section057a2c117795b3cb3e0dae575e86bbf9($context, $indent, $value);
                $buffer .= $indent . '                    </div>
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

    private function sectionF07a1d7863aa987fd11d17c2450c470e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="login">
            {{#guest}}
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
            {{/guest}}
            {{#url}}
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
            {{/url}}

            {{#loginpopup}}
            <div class="dropdown">
                <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="{{#str}}usermenu{{/str}}" aria-haspopup="true" aria-controls="user-action-menu" class="nav-link p-0" title="Login {{#str}}usermenu{{/str}}">
                    <div class="remuiicon">
                        <i class="icon fa fa-user"></i>
                    </div>
                    {{#str}} login, core {{/str}}
                </a>

                <div class="dropdown-menu dropdown-menu-right loginddown p-p-6" role="menu" data-region="popover-region-container">
                    <div class="d-flex flex-column flex-gap-8">
                    <form class="login-form" action="{{loginurl}}" method="post" id="login">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <div class="login-form-username form-group">
                            <label for="username" class="sr-only">
                                {{^canloginbyemail}}
                                    {{#str}} username {{/str}}
                                {{/canloginbyemail}}
                                {{#canloginbyemail}}
                                    {{#str}} usernameemail {{/str}}
                                {{/canloginbyemail}}
                            </label>
                            <label class="text-link-semibold " tabindex="-1">
                                {{^canloginbyemail}}
                                    {{#str}} username {{/str}}
                                {{/canloginbyemail}}
                                {{#canloginbyemail}}
                                    {{#str}} usernameemail {{/str}}
                                {{/canloginbyemail}}
                            </label>
                            <input type="text" name="username" id="username" {{!
                                !}}class="form-control form-control-lg" {{!
                                !}}value="{{username}}" {{!
                                !}}placeholder="{{^canloginbyemail}}{{#cleanstr}}username{{/cleanstr}}{{/canloginbyemail}}{{!
                                !}}{{#canloginbyemail}}{{#cleanstr}}usernameemail{{/cleanstr}}{{/canloginbyemail}}" {{!
                                !}}autocomplete="username">
                        </div>
                        <div class="login-form-password form-group">
                            <label for="password" class="sr-only">{{#str}} password {{/str}}</label>
                            <label class="text-link-semibold form-label-color" tabindex="-1">
                                {{#str}} password {{/str}}
                            </label>
                            <div class="position-relative password-field-eye">
                                <input type="password" name="password" id="password" value="" {{!
                                    !}}class="form-control form-control-lg" {{!
                                    !}}placeholder="{{#cleanstr}}password{{/cleanstr}}" {{!
                                    !}}autocomplete="current-password">
                                <span class="edw-icon edw-icon-Show show-password-icon"></span>
                            </div>
                        </div>
                        <div class="login-form-forgotpassword form-group text-right small-info-semibold">
                            <a href="{{forgotpasswordurl}}">{{#str}}forgotaccount, theme_remui{{/str}}</a>
                        </div>
                        <div class="login-form-submit form-group">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="loginbtn">{{#str}}login{{/str}}</button>
                        </div>
                    </form>
                    {{#hasauthmethods}}
                    <div class="login-identityproviders d-flex flex-column flex-gap-6">
                    <h2 class="login-heading text-align-middle h-semibold-6 m-0">{{#str}} potentialidps, theme_remui {{/str}}</h2>

                    <div class="login-identityprovider-btn-wrapper d-flex flex-gap-6 justify-content-center">
                    {{#authmethods}}
                        <a class="login-identityprovider-btn border-0" href="{{{url}}}" title="{{name}}">
                            {{#iconurl}}
                                <img src="{{iconurl}}" alt="" width="24" height="24" loading="lazy"/>
                            {{/iconurl}}
                        </a>
                    {{/authmethods}}
                    </div>
                    </div>
                    {{/hasauthmethods}}
                    </div>
                </div>
            </div>
            {{/loginpopup}}
        </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="login">
';
                $value = $context->find('guest');
                $buffer .= $this->sectionD182cc626edac9168314bb67933bb372($context, $indent, $value);
                $value = $context->find('url');
                $buffer .= $this->sectionFd69bbef7e7b9e9a4517306133eac6d3($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('loginpopup');
                $buffer .= $this->section3b9fb09adf301d485be72a91f7759d3e($context, $indent, $value);
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9f8116799aecab2a637bf9b97e3b17a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'user';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f5fb4563075558fe19532db49b843db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usermenugoback';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usermenugoback';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ae1ec3288c57cc16cf11024cfaa8d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/arrow-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/arrow-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fb306b309973c917530dde4229e8877(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/arrow-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/arrow-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6349a4290745c396515cbf6e588cbb8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div id="carousel-item-{{id}}" class="carousel-item submenu" tabindex="-1" aria-label="{{title}}">
                                <div class="d-flex flex-column h-100">
                                    <div class="header">
                                        <button type="button" class="btn btn-icon carousel-navigation-link text-decoration-none text-body" data-carousel-target-id="carousel-item-main" aria-label="{{#str}}usermenugoback{{/str}}">
                                            <span class="dir-rtl-hide">{{#pix}}i/arrow-left{{/pix}}</span>
                                            <span class="dir-ltr-hide">{{#pix}}i/arrow-right{{/pix}}</span>
                                        </button>
                                        <span class="pl-2" id="carousel-item-title-{{id}}">{{title}}</span>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="items h-100 overflow-auto" role="menu" aria-labelledby="carousel-item-title-{{id}}">
                                        {{> core/user_action_menu_submenu_items }}
                                    </div>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div id="carousel-item-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="carousel-item submenu" tabindex="-1" aria-label="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="d-flex flex-column h-100">
';
                $buffer .= $indent . '                                    <div class="header">
';
                $buffer .= $indent . '                                        <button type="button" class="btn btn-icon carousel-navigation-link text-decoration-none text-body" data-carousel-target-id="carousel-item-main" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section9f5fb4563075558fe19532db49b843db($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section1ae1ec3288c57cc16cf11024cfaa8d4e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section3fb306b309973c917530dde4229e8877($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                        <span class="pl-2" id="carousel-item-title-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="dropdown-divider"></div>
';
                $buffer .= $indent . '                                    <div class="items h-100 overflow-auto" role="menu" aria-labelledby="carousel-item-title-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core/user_action_menu_submenu_items')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $buffer .= $indent . '                                    </div>
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

    private function section9fabd883c42f661de9048a32b433b843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/usermenu\'], function(UserMenu) {
        UserMenu.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/usermenu\'], function(UserMenu) {
';
                $buffer .= $indent . '        UserMenu.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
