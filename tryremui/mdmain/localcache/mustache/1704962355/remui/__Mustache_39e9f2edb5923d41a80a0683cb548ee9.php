<?php

class __Mustache_39e9f2edb5923d41a80a0683cb548ee9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="profile-general-info-wrapper">
';
        $buffer .= $indent . '    <div class="">
';
        $buffer .= $indent . '        <div class="profile-general-body-wrapper">
';
        $buffer .= $indent . '            <div class="profile-pic-wrapper text-center">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('profilepicture'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="profile-general-content-wrapper w-100">
';
        $buffer .= $indent . '                <div class="d-flex heading-content-wrapper">
';
        $buffer .= $indent . '                    <div class="d-flex flex-column flex-gap-d5">
';
        $buffer .= $indent . '                        <h4 class="m-0 username h-semibold-2 profile-user">';
        $value = $this->resolveValue($context->find('firstname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('lastname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $value = $context->find('usercanmanage');
        $buffer .= $this->sectionF237791c848ee116b60481f89868741f($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="d-flex extra-buttons-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex flex-column  user-desc-lastseen-wrapper">
';
        $value = $context->find('description');
        $buffer .= $this->section4023cd628263e2bda481aef62d7568d6($context, $indent, $value);
        $value = $context->find('lastuseraccessdate');
        $buffer .= $this->sectionD87369273aab65baad8b88f297930210($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $value = $context->find('url');
        $buffer .= $this->section54f9fa443e8fd062343cc2103dc74cca($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="profile-general-footer-wrapper">
';
        $buffer .= $indent . '            <div class="profile-stats-wrapper text-center">
';
        $buffer .= $indent . '                <div class="d-flex profile-stat-item">
';
        $buffer .= $indent . '                    <div class="d-flex flex-column ">
';
        $buffer .= $indent . '                        <strong class="profile-stat-count h-exbold-2 m-0">';
        $value = $this->resolveValue($context->find('contactscount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</strong>
';
        $buffer .= $indent . '                        <a href="#" class="stat-desc-text h-semibold-6 text-decoration-none usercontactsurl">';
        $value = $context->find('str');
        $buffer .= $this->section6bbda7740b7494cdd7b6fb2c5517855f($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex profile-stat-item">
';
        $buffer .= $indent . '                    <div class="d-flex flex-column ">
';
        $buffer .= $indent . '                        <strong class="profile-stat-count h-exbold-2 m-0">';
        $value = $this->resolveValue($context->find('forumpostcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</strong>
';
        $buffer .= $indent . '                        <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/mod/forum/user.php?id=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="stat-desc-text h-semibold-6 text-decoration-none" target="_blank">';
        $value = $context->find('str');
        $buffer .= $this->section2d0d8eb043dde03f58715b485a049ee7($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('notcurrentuser');
        if (empty($value)) {
            
            $value = $context->find('hascertificate');
            $buffer .= $this->section98f10e73002fe235d6e79425bcd917eb($context, $indent, $value);
        }
        $value = $context->find('blogsettingstatus');
        $buffer .= $this->section1224fcb87f669616b4665b8226059d46($context, $indent, $value);
        $value = $context->find('badgedsettingstatus');
        $buffer .= $this->section0b773cfbe2b87663c51bf9a74920b814($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC9a9e23934810b835fedb59873e9478a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' administrator, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' administrator, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF237791c848ee116b60481f89868741f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^ notcurrentuser }}
                        <p class="profile-job m-0 h-regular-5">{{# str }} administrator, theme_remui {{/ str }}</p>
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
                    
                    $buffer .= $indent . '                        <p class="profile-job m-0 h-regular-5">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionC9a9e23934810b835fedb59873e9478a($context, $indent, $value);
                    $buffer .= '</p>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81207077575c98d7d8e9650f8736386c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' readmore,
                                theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' readmore,
';
                $buffer .= $indent . '                                theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fbbadea21dfb5726e8ef74c0ed3f22f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' readless,
                                theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' readless,
';
                $buffer .= $indent . '                                theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4023cd628263e2bda481aef62d7568d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="user-desc-target">
                            <p id="user-description" class="user-desc  m-0 para-regular-2">{{description}}</p>
                            <a href="#" id="readmorebtn"
                                class="d-none text-decoration-none text-primary text-link-semibold"> {{# str }} readmore,
                                theme_remui {{/ str }}</a>
                            <a href="#" id="readlessbtn"
                                class="d-none text-decoration-none text-primary   text-link-semibold">{{# str }} readless,
                                theme_remui {{/ str }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="user-desc-target">
';
                $buffer .= $indent . '                            <p id="user-description" class="user-desc  m-0 para-regular-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                            <a href="#" id="readmorebtn"
';
                $buffer .= $indent . '                                class="d-none text-decoration-none text-primary text-link-semibold"> ';
                $value = $context->find('str');
                $buffer .= $this->section81207077575c98d7d8e9650f8736386c($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            <a href="#" id="readlessbtn"
';
                $buffer .= $indent . '                                class="d-none text-decoration-none text-primary   text-link-semibold">';
                $value = $context->find('str');
                $buffer .= $this->section4fbbadea21dfb5726e8ef74c0ed3f22f($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC357cc0c155938b0fe1024c184f683a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccess, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastaccess, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD87369273aab65baad8b88f297930210(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>
                        <span class="lastaccesstext small-info-semibold">{{# str }} lastaccess, theme_remui {{/str}}</span>
                        <span class="lastaccessdate small-info-regular">{{{lastuseraccessdate}}}</span>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        <span class="lastaccesstext small-info-semibold">';
                $value = $context->find('str');
                $buffer .= $this->sectionC357cc0c155938b0fe1024c184f683a7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <span class="lastaccessdate small-info-regular">';
                $value = $this->resolveValue($context->find('lastuseraccessdate'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section439530f96bb6264a1c61b569cc219abd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' webpage, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' webpage, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54f9fa443e8fd062343cc2103dc74cca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a role="button" href="{{ url }}" target="_blank" class="btn btn-primary">
                    {{# str }} webpage, theme_remui {{/ str }}
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a role="button" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="btn btn-primary">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section439530f96bb6264a1c61b569cc219abd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bbda7740b7494cdd7b6fb2c5517855f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contacts, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d0d8eb043dde03f58715b485a049ee7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' discussions, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' discussions, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF46ad7c41448a5615adeaa66bd732c50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' certificate, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' certificate, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98f10e73002fe235d6e79425bcd917eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex profile-stat-item">
                    <div class="d-flex flex-column ">
                        <strong class="profile-stat-count h-exbold-2 m-0">{{ certificatecountdata }}</strong>
                        <a href="{{{config.wwwroot}}}/mod/customcert/my_certificates.php?userid={{id}}" class="stat-desc-text h-semibold-6 text-decoration-none" target="_blank">{{# str }} certificate, theme_remui {{/ str }}</a>
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex profile-stat-item">
';
                $buffer .= $indent . '                    <div class="d-flex flex-column ">
';
                $buffer .= $indent . '                        <strong class="profile-stat-count h-exbold-2 m-0">';
                $value = $this->resolveValue($context->find('certificatecountdata'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/mod/customcert/my_certificates.php?userid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="stat-desc-text h-semibold-6 text-decoration-none" target="_blank">';
                $value = $context->find('str');
                $buffer .= $this->sectionF46ad7c41448a5615adeaa66bd732c50($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section442aae21ae8f97e78ea47581808df932(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' blogentries, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' blogentries, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1224fcb87f669616b4665b8226059d46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex profile-stat-item">
                    <div class="d-flex flex-column ">
                        <strong class="profile-stat-count h-exbold-2 m-0">{{ blogpostcount }}</strong>
                        <a  href="{{{config.wwwroot}}}/blog/index.php?userid={{id}}" class="stat-desc-text h-semibold-6 text-decoration-none" target="_blank">{{# str }} blogentries, theme_remui {{/ str }}</a>
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex profile-stat-item">
';
                $buffer .= $indent . '                    <div class="d-flex flex-column ">
';
                $buffer .= $indent . '                        <strong class="profile-stat-count h-exbold-2 m-0">';
                $value = $this->resolveValue($context->find('blogpostcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>
';
                $buffer .= $indent . '                        <a  href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/blog/index.php?userid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="stat-desc-text h-semibold-6 text-decoration-none" target="_blank">';
                $value = $context->find('str');
                $buffer .= $this->section442aae21ae8f97e78ea47581808df932($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e38e3728617c70cb247dca840e4144b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userbadgelink ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userbadgelink ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section073f07d57fca1a4ab84ec2e404077589(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' badge, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' badge, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b773cfbe2b87663c51bf9a74920b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex profile-stat-item">
                    <div class="d-flex flex-column ">
                        <strong class="profile-stat-count h-exbold-2 m-0">{{ badgedcount }}</strong>
                        <a href="#user-badges" class="stat-desc-text h-semibold-6 text-decoration-none {{#hasbadges}}userbadgelink {{/hasbadges}}">{{# str }} badge, theme_remui {{/ str }}</a>
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex profile-stat-item">
';
                $buffer .= $indent . '                    <div class="d-flex flex-column ">
';
                $buffer .= $indent . '                        <strong class="profile-stat-count h-exbold-2 m-0">';
                $value = $this->resolveValue($context->find('badgedcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>
';
                $buffer .= $indent . '                        <a href="#user-badges" class="stat-desc-text h-semibold-6 text-decoration-none ';
                $value = $context->find('hasbadges');
                $buffer .= $this->section5e38e3728617c70cb247dca840e4144b($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section073f07d57fca1a4ab84ec2e404077589($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
