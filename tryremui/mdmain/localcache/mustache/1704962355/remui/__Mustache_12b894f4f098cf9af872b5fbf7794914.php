<?php

class __Mustache_12b894f4f098cf9af872b5fbf7794914 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('isdashboardstatsshow');
        $buffer .= $this->section60806341442a20cb0439a7742b447ed6($context, $indent, $value);

        return $buffer;
    }

    private function section8afc72098e06941814cee937b1c270cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursesenrolled, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursesenrolled, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86bfa321e6ca011a3ce88df3f2c59e8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursescompleted, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursescompleted, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7679574c2d0c156e9c57dc0ce575b9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activitiescompleted, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activitiescompleted, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section216b6b300e5cbeaff9d6a6ab8d6a3a4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activitiesdue, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activitiesdue, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfd05d5011e3d3b9db3cb3d4e8303c12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	require([\'jquery\', \'core/ajax\'], function($, Ajax) {
		$(document).ready(function(){
			let service_name = \'theme_remui_get_dashboard_stats\';
			let cstats = Ajax.call([
			    {
			        methodname: service_name,
			        args: {}
			    }
			]);
			cstats[0].done(function(response) {
			    // When course stats block is ready then render the respose value.
			    $(\'.stats\').ready(function() {
			        $.each(response, function(index, value) {
			            var statsDiv = \'#wdm_dashboard-stats .dashboard-stats-\' + index;
			            $(statsDiv).text(value);
			        })
			    });
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
                
                $buffer .= $indent . '	require([\'jquery\', \'core/ajax\'], function($, Ajax) {
';
                $buffer .= $indent . '		$(document).ready(function(){
';
                $buffer .= $indent . '			let service_name = \'theme_remui_get_dashboard_stats\';
';
                $buffer .= $indent . '			let cstats = Ajax.call([
';
                $buffer .= $indent . '			    {
';
                $buffer .= $indent . '			        methodname: service_name,
';
                $buffer .= $indent . '			        args: {}
';
                $buffer .= $indent . '			    }
';
                $buffer .= $indent . '			]);
';
                $buffer .= $indent . '			cstats[0].done(function(response) {
';
                $buffer .= $indent . '			    // When course stats block is ready then render the respose value.
';
                $buffer .= $indent . '			    $(\'.stats\').ready(function() {
';
                $buffer .= $indent . '			        $.each(response, function(index, value) {
';
                $buffer .= $indent . '			            var statsDiv = \'#wdm_dashboard-stats .dashboard-stats-\' + index;
';
                $buffer .= $indent . '			            $(statsDiv).text(value);
';
                $buffer .= $indent . '			        })
';
                $buffer .= $indent . '			    });
';
                $buffer .= $indent . '			});
';
                $buffer .= $indent . '		});
';
                $buffer .= $indent . '	});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60806341442a20cb0439a7742b447ed6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div id="wdm_dashboard-stats" class="edw-stats-wrapper">
	<div class="stat-block">
		<div class="inner">
			<div class="icon-container">
				<span class="edw-icon edw-icon-Course-enrolled_24"></span>
			</div>
			<div class="info-container d-flex flex-column p-mb-d5">
				<span class="h-exbold-2 dashboard-stats-coursesenrolled"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
				<span class="h-semibold-6" title="{{#str}}coursesenrolled, theme_remui{{/str}}">{{#str}}coursesenrolled, theme_remui{{/str}}</span>
			</div>
		</div>
	</div>
	<div class="stat-block">
		<div class="inner">
			<div class="icon-container">
				<span class="edw-icon edw-icon-Completed-course"></span>
			</div>
			<div class="info-container d-flex flex-column p-mb-d5">
				<span class="h-exbold-2 dashboard-stats-coursescompleted"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
				<span class="h-semibold-6" title="{{#str}}coursescompleted, theme_remui{{/str}}">{{#str}}coursescompleted, theme_remui{{/str}}</span>
			</div>
		</div>
	</div>
	<div class="stat-block">
		<div class="inner">
			<div class="icon-container">
				<span class="edw-icon edw-icon-Activity-completed"></span>
			</div>
			<div class="info-container d-flex flex-column p-mb-d5">
				<span class="h-exbold-2 dashboard-stats-activitiescompleted"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
				<span class="h-semibold-6" title="{{#str}}activitiescompleted, theme_remui{{/str}}">{{#str}}activitiescompleted, theme_remui{{/str}}</span>
			</div>
		</div>
	</div>
	<div class="stat-block">
		<div class="inner">
			<div class="icon-container">
				<span class="edw-icon edw-icon-Due-acitvities"></span>
			</div>
			<div class="info-container d-flex flex-column p-mb-d5">
				<span class="h-exbold-2 dashboard-stats-activitiesdue"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
				<span class="h-semibold-6" title="{{#str}}activitiesdue, theme_remui{{/str}}">{{#str}}activitiesdue, theme_remui{{/str}}</span>
			</div>
		</div>
	</div>

	<div class="stats-mb-devices">
		<div class="stat-block">
			<div class="inner">
				<div class="icon-container">
					<span class="edw-icon edw-icon-Course-enrolled_24"></span>
				</div>
				<div class="info-container d-flex flex-column p-mb-d5">
					<span class="h-exbold-2 dashboard-stats-coursesenrolled"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
					<span class="h-semibold-6" title="{{#str}}coursesenrolled, theme_remui{{/str}}">{{#str}}coursesenrolled, theme_remui{{/str}}</span>
				</div>
			</div>
		</div>
		<div class="stat-block">
			<div class="inner">
				<div class="icon-container">
					<span class="edw-icon edw-icon-Activity-completed"></span>
				</div>
				<div class="info-container d-flex flex-column p-mb-d5">
					<span class="h-exbold-2 dashboard-stats-activitiescompleted"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
					<span class="h-semibold-6" title="{{#str}}activitiescompleted, theme_remui{{/str}}">{{#str}}activitiescompleted, theme_remui{{/str}}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="stats-mb-devices">
		<div class="stat-block">
			<div class="inner">
				<div class="icon-container">
					<span class="edw-icon edw-icon-Completed-course"></span>
				</div>
				<div class="info-container d-flex flex-column p-mb-d5">
					<span class="h-exbold-2 dashboard-stats-coursescompleted">0</span>
					<span class="h-semibold-6" title="{{#str}}coursescompleted, theme_remui{{/str}}">{{#str}}coursescompleted, theme_remui{{/str}}</span>
				</div>
			</div>
		</div>
		<div class="stat-block">
			<div class="inner">
				<div class="icon-container">
					<span class="edw-icon edw-icon-Due-acitvities"></span>
				</div>
				<div class="info-container d-flex flex-column p-mb-d5">
					<span class="h-exbold-2 dashboard-stats-activitiesdue"><img src="{{statloader}}" alt="loader image"  height="35" width="35"></span>
					<span class="h-semibold-6" title="{{#str}}activitiesdue, theme_remui{{/str}}">{{#str}}activitiesdue, theme_remui{{/str}}</span>
				</div>
			</div>
		</div>
	</div>
</div>

{{#js}}
	require([\'jquery\', \'core/ajax\'], function($, Ajax) {
		$(document).ready(function(){
			let service_name = \'theme_remui_get_dashboard_stats\';
			let cstats = Ajax.call([
			    {
			        methodname: service_name,
			        args: {}
			    }
			]);
			cstats[0].done(function(response) {
			    // When course stats block is ready then render the respose value.
			    $(\'.stats\').ready(function() {
			        $.each(response, function(index, value) {
			            var statsDiv = \'#wdm_dashboard-stats .dashboard-stats-\' + index;
			            $(statsDiv).text(value);
			        })
			    });
			});
		});
	});
{{/js}}

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div id="wdm_dashboard-stats" class="edw-stats-wrapper">
';
                $buffer .= $indent . '	<div class="stat-block">
';
                $buffer .= $indent . '		<div class="inner">
';
                $buffer .= $indent . '			<div class="icon-container">
';
                $buffer .= $indent . '				<span class="edw-icon edw-icon-Course-enrolled_24"></span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '				<span class="h-exbold-2 dashboard-stats-coursesenrolled"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '				<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section8afc72098e06941814cee937b1c270cf($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section8afc72098e06941814cee937b1c270cf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<div class="stat-block">
';
                $buffer .= $indent . '		<div class="inner">
';
                $buffer .= $indent . '			<div class="icon-container">
';
                $buffer .= $indent . '				<span class="edw-icon edw-icon-Completed-course"></span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '				<span class="h-exbold-2 dashboard-stats-coursescompleted"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '				<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section86bfa321e6ca011a3ce88df3f2c59e8d($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section86bfa321e6ca011a3ce88df3f2c59e8d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<div class="stat-block">
';
                $buffer .= $indent . '		<div class="inner">
';
                $buffer .= $indent . '			<div class="icon-container">
';
                $buffer .= $indent . '				<span class="edw-icon edw-icon-Activity-completed"></span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '				<span class="h-exbold-2 dashboard-stats-activitiescompleted"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '				<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionA7679574c2d0c156e9c57dc0ce575b9f($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionA7679574c2d0c156e9c57dc0ce575b9f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<div class="stat-block">
';
                $buffer .= $indent . '		<div class="inner">
';
                $buffer .= $indent . '			<div class="icon-container">
';
                $buffer .= $indent . '				<span class="edw-icon edw-icon-Due-acitvities"></span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '			<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '				<span class="h-exbold-2 dashboard-stats-activitiesdue"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '				<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section216b6b300e5cbeaff9d6a6ab8d6a3a4d($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section216b6b300e5cbeaff9d6a6ab8d6a3a4d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	<div class="stats-mb-devices">
';
                $buffer .= $indent . '		<div class="stat-block">
';
                $buffer .= $indent . '			<div class="inner">
';
                $buffer .= $indent . '				<div class="icon-container">
';
                $buffer .= $indent . '					<span class="edw-icon edw-icon-Course-enrolled_24"></span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '					<span class="h-exbold-2 dashboard-stats-coursesenrolled"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '					<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section8afc72098e06941814cee937b1c270cf($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section8afc72098e06941814cee937b1c270cf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<div class="stat-block">
';
                $buffer .= $indent . '			<div class="inner">
';
                $buffer .= $indent . '				<div class="icon-container">
';
                $buffer .= $indent . '					<span class="edw-icon edw-icon-Activity-completed"></span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '					<span class="h-exbold-2 dashboard-stats-activitiescompleted"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '					<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionA7679574c2d0c156e9c57dc0ce575b9f($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionA7679574c2d0c156e9c57dc0ce575b9f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	<div class="stats-mb-devices">
';
                $buffer .= $indent . '		<div class="stat-block">
';
                $buffer .= $indent . '			<div class="inner">
';
                $buffer .= $indent . '				<div class="icon-container">
';
                $buffer .= $indent . '					<span class="edw-icon edw-icon-Completed-course"></span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '					<span class="h-exbold-2 dashboard-stats-coursescompleted">0</span>
';
                $buffer .= $indent . '					<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section86bfa321e6ca011a3ce88df3f2c59e8d($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section86bfa321e6ca011a3ce88df3f2c59e8d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<div class="stat-block">
';
                $buffer .= $indent . '			<div class="inner">
';
                $buffer .= $indent . '				<div class="icon-container">
';
                $buffer .= $indent . '					<span class="edw-icon edw-icon-Due-acitvities"></span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '				<div class="info-container d-flex flex-column p-mb-d5">
';
                $buffer .= $indent . '					<span class="h-exbold-2 dashboard-stats-activitiesdue"><img src="';
                $value = $this->resolveValue($context->find('statloader'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="loader image"  height="35" width="35"></span>
';
                $buffer .= $indent . '					<span class="h-semibold-6" title="';
                $value = $context->find('str');
                $buffer .= $this->section216b6b300e5cbeaff9d6a6ab8d6a3a4d($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section216b6b300e5cbeaff9d6a6ab8d6a3a4d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '				</div>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $value = $context->find('js');
                $buffer .= $this->sectionBfd05d5011e3d3b9db3cb3d4e8303c12($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
