<?php

class __Mustache_cbedf0fc8f165c2d780d7788958f472b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="filemanager-';
        $value = $this->resolveValue($context->find('client_id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="filemanager w-100 fm-loading">
';
        $buffer .= $indent . '    <div class="fp-navbar bg-faded card mb-0">
';
        $buffer .= $indent . '        <div class="filemanager-toolbar icon-no-spacing d-flex justify-content-between">
';
        $buffer .= $indent . '            <div class="fp-toolbar d-flex align-items-center flex-gap-4">
';
        $buffer .= $indent . '                <div class="fp-pathbar">
';
        $buffer .= $indent . '                    <span class="fp-path-folder d-flex align-items-center flex-gap-1">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-Folder"></span>
';
        $buffer .= $indent . '                        <a class="fp-path-folder-name aalink" href="#"></a>
';
        $buffer .= $indent . '                    </span>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-btn-add  d-flex align-items-center flex-gap-1">
';
        $buffer .= $indent . '                    <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section2199cd8f36d25b2b56c614f17a73e7ef($context, $indent, $value);
        $buffer .= '" href="#">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-File_Activity"></span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <span class="btn-label h-regular-6">';
        $value = $context->find('str');
        $buffer .= $this->section2199cd8f36d25b2b56c614f17a73e7ef($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-btn-mkdir">
';
        $buffer .= $indent . '                    <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section9099f5cbeac660faacb4383ade7124ac($context, $indent, $value);
        $buffer .= '" href="#">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->section0089a9949872637959d90c745fedc472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-btn-download">
';
        $buffer .= $indent . '                    <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section291e454e0bb653a31e73daf4b9470a20($context, $indent, $value);
        $buffer .= '" href="#">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-Download"></span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-btn-delete">
';
        $buffer .= $indent . '                    <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
        $buffer .= '" href="#">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-Delete-Course"></span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <span class="fp-img-downloading">
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2d03965ea53b60ac982e741c28cc2332($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="fp-viewbar btn-group float-sm-right flex-gap-4">
';
        $buffer .= $indent . '                <a title="';
        $value = $context->find('str');
        $buffer .= $this->section8d897e2029e0713d9863f86d172c49e7($context, $indent, $value);
        $buffer .= '" class="fp-vb-icons" href="#">
';
        $buffer .= $indent . '                    <span class="edw-icon edw-icon-Card-View"></span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <a title="';
        $value = $context->find('str');
        $buffer .= $this->section913e83f954c7f484e98975f529e8af70($context, $indent, $value);
        $buffer .= '" class="fp-vb-details" href="#">
';
        $buffer .= $indent . '                    <span class="edw-icon edw-icon-List-View-08"></span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <a title="';
        $value = $context->find('str');
        $buffer .= $this->section90ef4b20fa82eba65cbf016de97c3b30($context, $indent, $value);
        $buffer .= '" class="fp-vb-tree" href="#">
';
        $buffer .= $indent . '                    <span class="edw-icon edw-icon-Folder"></span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="filemanager-loading mdl-align">';
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '<span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2d03965ea53b60ac982e741c28cc2332($context, $indent, $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '    <div class="filemanager-container card p-p-4" >
';
        $buffer .= $indent . '        <div class="fm-content-wrapper">
';
        $buffer .= $indent . '            <div class="fp-content"></div>
';
        $buffer .= $indent . '            <div class="fm-empty-container">
';
        $buffer .= $indent . '                <div class="dndupload-message">';
        $value = $context->find('str');
        $buffer .= $this->section82e1630d35fb2f54f03106f301cc9794($context, $indent, $value);
        $buffer .= '<br/>
';
        $buffer .= $indent . '                    <div class="dndupload-arrow d-flex">
';
        $buffer .= $indent . '                        <i class="fa fa-arrow-circle-o-down fa-3x m-auto"></i>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="dndupload-target">';
        $value = $context->find('str');
        $buffer .= $this->section817ed8a776cf9616bf285ae687c42aba($context, $indent, $value);
        $buffer .= '<br/>
';
        $buffer .= $indent . '                <div class="dndupload-arrow d-flex">
';
        $buffer .= $indent . '                    <i class="fa fa-arrow-circle-o-down fa-3x m-auto"></i>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="dndupload-progressbars"></div>
';
        $buffer .= $indent . '            <div class="dndupload-uploadinprogress">';
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '<span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2d03965ea53b60ac982e741c28cc2332($context, $indent, $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="filemanager-updating">';
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '<span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2d03965ea53b60ac982e741c28cc2332($context, $indent, $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="fp-restrictions p-mt-4 text-paragraph">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('restrictions'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="dnduploadnotsupported-message"> - ';
        $value = $context->find('str');
        $buffer .= $this->section7335a6ebf55b03b6dc095f5c592b75d1($context, $indent, $value);
        $value = $this->resolveValue($context->find('helpicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2199cd8f36d25b2b56c614f17a73e7ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addfile, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addfile, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9099f5cbeac660faacb4383ade7124ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'makeafolder';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'makeafolder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0089a9949872637959d90c745fedc472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/create_folder';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/create_folder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section291e454e0bb653a31e73daf4b9470a20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'download, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'download, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d03965ea53b60ac982e741c28cc2332(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loadinghelp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loadinghelp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17dced043cf1f9973e8ce8dcb3301054(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/loading_small';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/loading_small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d897e2029e0713d9863f86d172c49e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displayicons, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displayicons, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section913e83f954c7f484e98975f529e8af70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displaydetails, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displaydetails, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90ef4b20fa82eba65cbf016de97c3b30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displaytree, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displaytree, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82e1630d35fb2f54f03106f301cc9794(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dndenabled_inbox';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dndenabled_inbox';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section817ed8a776cf9616bf285ae687c42aba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'droptoupload';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'droptoupload';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7335a6ebf55b03b6dc095f5c592b75d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dndnotsupported_insentence';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dndnotsupported_insentence';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
