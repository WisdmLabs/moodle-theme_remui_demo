<?php

class __Mustache_90fcdf5dd2310a9ebdaab5b54308bb6d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('blog');
        $buffer .= $this->section7f9df7291b2a2b2d86c6aecdbb6b0dd8($context, $indent, $value);

        return $buffer;
    }

    private function section020aef79048e5e6364d34c660ee4ec85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blog, blog';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blog, blog';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1883bde29bb477233a56f2ad6615710(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="recent-item blog-item h-100">
                <div class="card card-transparent h-100">
                    <div class="card-body">
                        <div class="card-content">
                        <h4 class="card-title mt-2"><a href="{{ link }}" class="font-weight-400 font-size-18">{{ subject }}</a></h4>
                        <p class="card-text">
                            <small>By {{ firstname }} {{ lastname }}, on {{ createdat }}</small>
                        </p>
                        <p class="card-text">{{ summary }}</p>
                        </div>
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
                
                $buffer .= $indent . '            <div class="recent-item blog-item h-100">
';
                $buffer .= $indent . '                <div class="card card-transparent h-100">
';
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <div class="card-content">
';
                $buffer .= $indent . '                        <h4 class="card-title mt-2"><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="font-weight-400 font-size-18">';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                        <p class="card-text">
';
                $buffer .= $indent . '                            <small>By ';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', on ';
                $value = $this->resolveValue($context->find('createdat'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</small>
';
                $buffer .= $indent . '                        </p>
';
                $buffer .= $indent . '                        <p class="card-text">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                        </div>
';
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

    private function section7f9df7291b2a2b2d86c6aecdbb6b0dd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<section id="edwiser-blogs" class="bg-transparent" role="main">
    <div class="container r-py-16 {{aboutus_layout}}">
        <div class="heading d-flex flex-column align-items-center p-py-14">
            <h4 class="title h-semibold-3">{{#str}}blog, blog{{/str}}</h4>
        </div>
        <div class="blogs">
            {{# blogs }}
            <div class="recent-item blog-item h-100">
                <div class="card card-transparent h-100">
                    <div class="card-body">
                        <div class="card-content">
                        <h4 class="card-title mt-2"><a href="{{ link }}" class="font-weight-400 font-size-18">{{ subject }}</a></h4>
                        <p class="card-text">
                            <small>By {{ firstname }} {{ lastname }}, on {{ createdat }}</small>
                        </p>
                        <p class="card-text">{{ summary }}</p>
                        </div>
                    </div>
                </div>
            </div>
            {{/ blogs }}
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<section id="edwiser-blogs" class="bg-transparent" role="main">
';
                $buffer .= $indent . '    <div class="container r-py-16 ';
                $value = $this->resolveValue($context->find('aboutus_layout'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="heading d-flex flex-column align-items-center p-py-14">
';
                $buffer .= $indent . '            <h4 class="title h-semibold-3">';
                $value = $context->find('str');
                $buffer .= $this->section020aef79048e5e6364d34c660ee4ec85($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="blogs">
';
                $value = $context->find('blogs');
                $buffer .= $this->sectionA1883bde29bb477233a56f2ad6615710($context, $indent, $value);
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
