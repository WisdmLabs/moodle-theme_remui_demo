<?php

class __Mustache_3c8609648bd645994807dde86f13f20e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('haspages');
        $buffer .= $this->sectionCd23b8452f9997cf5e3be27a54fee5aa($context, $indent, $value);

        return $buffer;
    }

    private function sectionE9a00af7c4b29b9d868539d61654b870(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' previouspage, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' previouspage, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645524493d529813a1222916ebeb2ac7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previouspage, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previouspage, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8d4b31dd8f79589509080f77bacf63c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link" aria-label="{{# str }} previouspage, moodle {{/ str }}">
                        <span aria-hidden="true" class="edw-icon edw-icon-Left-Arrow"></span>
                        <span class="sr-only">{{#str}}previouspage, moodle{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionE9a00af7c4b29b9d868539d61654b870($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span aria-hidden="true" class="edw-icon edw-icon-Left-Arrow"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section645524493d529813a1222916ebeb2ac7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section612b981f144bdfa4e3f19d611137e184(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item disabled" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</span>
';
                $buffer .= $indent . '                </li>
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

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ebd0299549bf1ad70236485de4fae2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'currentinparentheses, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'currentinparentheses, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12bdb15dde7e8d35da04ce484f831fa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section8ebd0299549bf1ad70236485de4fae2d($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB00d7553abcd63eb22d104e3211c8e5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item {{#active}}active{{/active}}" data-page-number="{{page}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
                        {{/active}}
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $context->find('url');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $value = $context->find('active');
                $buffer .= $this->section12bdb15dde7e8d35da04ce484f831fa0($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section674e7b66632bb469ca0edb703f233b84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item disabled" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</span>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3424471d1ec6b96c27dfbf19096f3169(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nextpage, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nextpage, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD30ff9b9dd5fef1da6e8aab09ea5dfed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextpage, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nextpage, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c112182432f784ff425a2da1c0502f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link" aria-label="{{# str }} nextpage, moodle {{/ str }}">
                        <span aria-hidden="true" class="edw-icon edw-icon-Right-Arrow"></span>
                        <span class="sr-only">{{#str}}nextpage, moodle{{/str}}</span>
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="page-item" data-page-number="';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section3424471d1ec6b96c27dfbf19096f3169($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span aria-hidden="true" class="edw-icon edw-icon-Right-Arrow"></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionD30ff9b9dd5fef1da6e8aab09ea5dfed($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd23b8452f9997cf5e3be27a54fee5aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{label}}" class="pagination pagination-centered justify-content-end">
        <ul class="pagination " data-page-size="{{pagesize}}">
            {{#previous}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link" aria-label="{{# str }} previouspage, moodle {{/ str }}">
                        <span aria-hidden="true" class="edw-icon edw-icon-Left-Arrow"></span>
                        <span class="sr-only">{{#str}}previouspage, moodle{{/str}}</span>
                    </a>
                </li>
            {{/previous}}
            {{#first}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
            {{/first}}
            {{#pages}}
                <li class="page-item {{#active}}active{{/active}}" data-page-number="{{page}}">
                    <a href="{{#url}}{{.}}{{/url}}{{^url}}#{{/url}}" class="page-link">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
                        {{/active}}
                    </a>
                </li>
            {{/pages}}
            {{#last}}
                <li class="page-item disabled" data-page-number="{{page}}">
                    <span class="page-link">&hellip;</span>
                </li>
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
            {{/last}}
            {{#next}}
                <li class="page-item" data-page-number="{{page}}">
                    <a href="{{url}}" class="page-link" aria-label="{{# str }} nextpage, moodle {{/ str }}">
                        <span aria-hidden="true" class="edw-icon edw-icon-Right-Arrow"></span>
                        <span class="sr-only">{{#str}}nextpage, moodle{{/str}}</span>
                    </a>
                </li>
            {{/next}}
        </ul>
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="pagination pagination-centered justify-content-end">
';
                $buffer .= $indent . '        <ul class="pagination " data-page-size="';
                $value = $this->resolveValue($context->find('pagesize'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('previous');
                $buffer .= $this->sectionE8d4b31dd8f79589509080f77bacf63c($context, $indent, $value);
                $value = $context->find('first');
                $buffer .= $this->section612b981f144bdfa4e3f19d611137e184($context, $indent, $value);
                $value = $context->find('pages');
                $buffer .= $this->sectionB00d7553abcd63eb22d104e3211c8e5a($context, $indent, $value);
                $value = $context->find('last');
                $buffer .= $this->section674e7b66632bb469ca0edb703f233b84($context, $indent, $value);
                $value = $context->find('next');
                $buffer .= $this->section4c112182432f784ff425a2da1c0502f0($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
