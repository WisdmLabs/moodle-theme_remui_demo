<?php

class __Mustache_0a8f83697d3b4e9e82cc01b1236c262a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('edw_navbar');
        $buffer .= $this->section57c0da064b6231b72bd890425d7555d1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="searchinput-navbar-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="simplesearchform d-sm-none">
';
        $buffer .= $indent . '    <div class="collapse" id="searchform-navbar">
';
        $buffer .= $indent . '        <form autocomplete="off" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="get" accept-charset="utf-8" class="mform form-inline searchform-navbar">
';
        $value = $context->find('hiddenfields');
        $buffer .= $this->section04b8ae4b53b0a507223620372a841e3e($context, $indent, $value);
        $buffer .= $indent . '            <div class="input-group">
';
        $buffer .= $indent . '                <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                <div class="input-group-prepend">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-submit" data-action="submit">
';
        $buffer .= $indent . '                        <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <input type="text" id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-control withclear navigation-text" placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" data-region="input" autocomplete="off" >
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <a class="btn btn-close" data-action="closesearch" data-toggle="collapse" href="#searchform-navbar" role="button" >
';
        $buffer .= $indent . '                <span class="edw-icon edw-icon-Cancel"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section256776dc607cdebe9d890b0efd29b5ba($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <a
';
        $buffer .= $indent . '        class="btn btn-open rounded-0 nav-link"
';
        $buffer .= $indent . '        data-toggle="collapse"
';
        $buffer .= $indent . '        data-action="opensearch"
';
        $buffer .= $indent . '        href="#searchform-navbar"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="searchform-navbar"
';
        $buffer .= $indent . '        title="';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span class="edw-icon edw-icon-Search"></span>
';
        $buffer .= $indent . '        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionEf182a623a7e3d255977cee5b4aa1302($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionA81dd799000f8202e6b292154d307518($context, $indent, $value);

        return $buffer;
    }

    private function sectionAf0d507395d8436b1439c6b1ad1a6278(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="hidden" name="{{ name }}" value="{{ value }}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57c0da064b6231b72bd890425d7555d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="simplesearchform d-none d-sm-block">
    <form autocomplete="off" action="{{{ action }}}" method="get" accept-charset="utf-8" class="mform form-inline searchform-navbar">
        {{#hiddenfields}}
            <input type="hidden" name="{{ name }}" value="{{ value }}">
        {{/hiddenfields}}

        <div class="input-group">
            <label for="searchinput-{{uniqid}}">
                <span class="sr-only">{{{ searchstring }}}</span>
            </label>
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-submit" data-action="submit">
                    <span class="edw-icon edw-icon-Search"></span>
                    <span class="sr-only">{{{ searchstring }}}</span>
                </button>
            </div>
            <input type="text" id="searchinput-{{uniqid}}" class="form-control withclear navigation-text" placeholder="{{{ searchstring }}}" aria-label="{{{ searchstring }}}" name="{{{ inputname }}}" data-region="input" autocomplete="off"  title="{{{ searchstring }}}"/>
        </div>
    </form>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="simplesearchform d-none d-sm-block">
';
                $buffer .= $indent . '    <form autocomplete="off" action="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" method="get" accept-charset="utf-8" class="mform form-inline searchform-navbar">
';
                $value = $context->find('hiddenfields');
                $buffer .= $this->sectionAf0d507395d8436b1439c6b1ad1a6278($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="input-group">
';
                $buffer .= $indent . '            <label for="searchinput-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="sr-only">';
                $value = $this->resolveValue($context->find('searchstring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <div class="input-group-prepend">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-submit" data-action="submit">
';
                $buffer .= $indent . '                    <span class="edw-icon edw-icon-Search"></span>
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('searchstring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <input type="text" id="searchinput-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-control withclear navigation-text" placeholder="';
                $value = $this->resolveValue($context->find('searchstring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->find('searchstring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" name="';
                $value = $this->resolveValue($context->find('inputname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-region="input" autocomplete="off"  title="';
                $value = $this->resolveValue($context->find('searchstring'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"/>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04b8ae4b53b0a507223620372a841e3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <input type="hidden" name="{{ name }}" value="{{ value }}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section256776dc607cdebe9d890b0efd29b5ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closebuttontitle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' closebuttontitle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf182a623a7e3d255977cee5b4aa1302(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglesearch ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglesearch ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA81dd799000f8202e6b292154d307518(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
],
function(
    $
) {
    var uniqid = "{{uniqid}}";
    var container = $(\'#searchinput-navbar-\' + uniqid);
    var opensearch = container.find(\'[data-action="opensearch"]\');
    var input = container.find(\'[data-region="input"]\');
    var submit = container.find(\'[data-action="submit"]\');

    submit.on(\'click\', function(e) {
        if (input.val() === \'\') {
            e.preventDefault();
        }
    });
    container.on(\'hidden.bs.collapse\', function() {
        opensearch.removeClass(\'d-none\');
        input.val(\'\');
    });
    container.on(\'show.bs.collapse\', function() {
        opensearch.addClass(\'d-none\');
    });
    container.on(\'shown.bs.collapse\', function() {
        input.focus();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var uniqid = "';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '";
';
                $buffer .= $indent . '    var container = $(\'#searchinput-navbar-\' + uniqid);
';
                $buffer .= $indent . '    var opensearch = container.find(\'[data-action="opensearch"]\');
';
                $buffer .= $indent . '    var input = container.find(\'[data-region="input"]\');
';
                $buffer .= $indent . '    var submit = container.find(\'[data-action="submit"]\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    submit.on(\'click\', function(e) {
';
                $buffer .= $indent . '        if (input.val() === \'\') {
';
                $buffer .= $indent . '            e.preventDefault();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'hidden.bs.collapse\', function() {
';
                $buffer .= $indent . '        opensearch.removeClass(\'d-none\');
';
                $buffer .= $indent . '        input.val(\'\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'show.bs.collapse\', function() {
';
                $buffer .= $indent . '        opensearch.addClass(\'d-none\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    container.on(\'shown.bs.collapse\', function() {
';
                $buffer .= $indent . '        input.focus();
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
