<?php

class __Mustache_56c99142040fa108d394d154e37ef8be extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="edw-quick-menu" class="floating-widget flex justify-between inner-content ';
        $value = $context->find('collapsed');
        $buffer .= $this->section7df0e231697f3a9dfdd1138e1b79a2b0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '	<a href="#" class="close-quick-menu d-flex">
';
        $buffer .= $indent . '		<span class="left edw-icon edw-icon-Square-Arrow_left large" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionAb43945829f259c71f987a34da32808a($context, $indent, $value);
        $buffer .= '"></span>
';
        $buffer .= $indent . '		<span class="right edw-icon edw-icon-Square-Arrow_Right large" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionFad731735176d2ead0153ce82a433ad3($context, $indent, $value);
        $buffer .= '"></span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '	<nav class="quick-menu-nav d-flex flex-gap-1">
';
        $value = $context->find('menus');
        $buffer .= $this->section4e8935865bf78573c1a7ace3b5c46383($context, $indent, $value);
        $buffer .= $indent . '	</nav>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section6f4c8dc0bbef83e0a2b67fd85544549b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section7df0e231697f3a9dfdd1138e1b79a2b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb43945829f259c71f987a34da32808a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closequickmenu,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closequickmenu,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFad731735176d2ead0153ce82a433ad3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'openquickmenu,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'openquickmenu,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e8935865bf78573c1a7ace3b5c46383(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<a class="menu-item" href="{{url}}" title="{{title}}">
			<span class="{{iconclass}} large"></span>
		</a>
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '		<a class="menu-item" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '			<span class="';
                $value = $this->resolveValue($context->find('iconclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' large"></span>
';
                $buffer .= $indent . '		</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB564561703adcf569aa9a4908750f35a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'local_edwiserpagebuilder/custompages\'], function(EDWPAGES){
	EDWPAGES.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'local_edwiserpagebuilder/custompages\'], function(EDWPAGES){
';
                $buffer .= $indent . '	EDWPAGES.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f4c8dc0bbef83e0a2b67fd85544549b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($){
	$(document).ready(function(){
		$(\'#edw-quick-menu .close-quick-menu\').click(function(e){
			e.preventDefault();
			var edw_quickmenu_pref = true;
			if ($(\'#edw-quick-menu\').hasClass("collapsed")) {
				edw_quickmenu_pref = false;
			}
			$(\'#edw-quick-menu\').toggleClass("collapsed");
			M.util.set_user_preference(\'edw-quick-menu\', edw_quickmenu_pref);
		});
	});
});

{{#cancreatepages}}
require([\'local_edwiserpagebuilder/custompages\'], function(EDWPAGES){
	EDWPAGES.init();
});
{{/cancreatepages}}

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($){
';
                $buffer .= $indent . '	$(document).ready(function(){
';
                $buffer .= $indent . '		$(\'#edw-quick-menu .close-quick-menu\').click(function(e){
';
                $buffer .= $indent . '			e.preventDefault();
';
                $buffer .= $indent . '			var edw_quickmenu_pref = true;
';
                $buffer .= $indent . '			if ($(\'#edw-quick-menu\').hasClass("collapsed")) {
';
                $buffer .= $indent . '				edw_quickmenu_pref = false;
';
                $buffer .= $indent . '			}
';
                $buffer .= $indent . '			$(\'#edw-quick-menu\').toggleClass("collapsed");
';
                $buffer .= $indent . '			M.util.set_user_preference(\'edw-quick-menu\', edw_quickmenu_pref);
';
                $buffer .= $indent . '		});
';
                $buffer .= $indent . '	});
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $value = $context->find('cancreatepages');
                $buffer .= $this->sectionB564561703adcf569aa9a4908750f35a($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
