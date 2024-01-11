<?php

class __Mustache_70766df81e5a3cabf5005b451aa13462 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<section>
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-12 px-0">
';
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= $indent . '                <li class="list-group-item border-0">
';
            $buffer .= $indent . '                    <div class="media">
';
            $buffer .= $indent . '                        <div class="media-body">
';
            $buffer .= $indent . '                            ';
            $value = $context->find('str');
            $buffer .= $this->sectionC4d90285e066c6afbd98148491b597ad($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </li>
';
        }
        $value = $context->find('hascourses');
        $buffer .= $this->section28be885bf3ae01fb24b9be2b842f1ca2($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</section>
';

        return $buffer;
    }

    private function sectionC4d90285e066c6afbd98148491b597ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notenrolledanycourse, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notenrolledanycourse, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa3fac5d18896ea4a2503216f41cc753(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span
                                            class="small-info-semibold instructorscount d-flex align-items-center justify-content-center">+{{instructorcount}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span
';
                $buffer .= $indent . '                                            class="small-info-semibold instructorscount d-flex align-items-center justify-content-center">+';
                $value = $this->resolveValue($context->find('instructorcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section445674feb23e2a9d87e95fcd14892f79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-row flex-gap-0d5">
                                        <div class="d-flex flex-row instructor-info-wrapper">
                                            <a href="{{ url }}" class="d-flex align-items-center flex-gap-d5 instructor-img {{ imgStyle }}"
                                                aria-label="Instructor for {{coursename}} is - {{name}}" title="{{{name}}}">
                                                <img src="{{ picture }}" class="rounded-circle" alt="{{ name }}" loading="lazy"/>
                                                <h6 class="h-regular-6 course-instructors m-0" title="{{{name}}}">{{{name}}}</h6>
                                            </a>
                                        </div>
                                        {{#instructorcount}}<span
                                            class="small-info-semibold instructorscount d-flex align-items-center justify-content-center">+{{instructorcount}}</span>{{/instructorcount}}
                                    </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="d-flex flex-row flex-gap-0d5">
';
                $buffer .= $indent . '                                        <div class="d-flex flex-row instructor-info-wrapper">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="d-flex align-items-center flex-gap-d5 instructor-img ';
                $value = $this->resolveValue($context->find('imgStyle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                                aria-label="Instructor for ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' is - ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                <img src="';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rounded-circle" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" loading="lazy"/>
';
                $buffer .= $indent . '                                                <h6 class="h-regular-6 course-instructors m-0" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('instructorcount');
                $buffer .= $this->sectionAa3fac5d18896ea4a2503216f41cc753($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfbe3a6bd120da259a06cb87e3561bc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:coursesummary,
                                                    block_myoverview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:coursesummary,
';
                $buffer .= $indent . '                                                    block_myoverview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd41e95c5c63d5c9c32c6665be70d771(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="edw-card-design-bd">
                                            <div class="summary ellipsis ellipsis-3">
                                                <span class="sr-only">{{#str}}aria:coursesummary,
                                                    block_myoverview{{/str}}</span>
                                                {{{summary}}}
                                            </div>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="edw-card-design-bd">
';
                $buffer .= $indent . '                                            <div class="summary ellipsis ellipsis-3">
';
                $buffer .= $indent . '                                                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionFfbe3a6bd120da259a06cb87e3561bc2($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5f08ee3e60b4226a3db55034e7a2eb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#summary}}
                                        <div class="edw-card-design-bd">
                                            <div class="summary ellipsis ellipsis-3">
                                                <span class="sr-only">{{#str}}aria:coursesummary,
                                                    block_myoverview{{/str}}</span>
                                                {{{summary}}}
                                            </div>
                                        </div>
                                    {{/summary}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('summary');
                $buffer .= $this->sectionCd41e95c5c63d5c9c32c6665be70d771($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e61033734c998ec2d3d1fb3bdf48066(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completepercent, theme_remui,{{progress}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completepercent, theme_remui,';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCff81c690607c54d3c8bd8ea8027553c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{progress}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section046d354798caf787a40f767a6feb24bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completepercent, theme_remui, <span
                                            class="h-semibold-6 m-0">{{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completepercent, theme_remui, <span
';
                $buffer .= $indent . '                                            class="h-semibold-6 m-0">';
                $value = $context->find('progress');
                $buffer .= $this->sectionCff81c690607c54d3c8bd8ea8027553c($context, $indent, $value);
                $value = $context->find('progress');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f0b0b1b2bfd98bb1a4f38a05a2b8a97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <span class="small-info-regular m-0" title="{{activitydata}}">{{activitydata}}</span>
                                    <div class="progress"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        <div class="progress-bar" role="progressbar" style="width: {{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}%"
                                            aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="progress-text h-semibold-6"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        {{#str}}completepercent, theme_remui, <span
                                            class="h-semibold-6 m-0">{{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}</span>{{/str}}
                                    </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <span class="small-info-regular m-0" title="';
                $value = $this->resolveValue($context->find('activitydata'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('activitydata'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    <div class="progress"
';
                $buffer .= $indent . '                                        title="';
                $value = $context->find('str');
                $buffer .= $this->section3e61033734c998ec2d3d1fb3bdf48066($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="progress-bar" role="progressbar" style="width: ';
                $value = $context->find('progress');
                $buffer .= $this->sectionCff81c690607c54d3c8bd8ea8027553c($context, $indent, $value);
                $value = $context->find('progress');
                if (empty($value)) {
                    
                    $buffer .= '0';
                }
                $buffer .= '%"
';
                $buffer .= $indent . '                                            aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-valuemin="0" aria-valuemax="100">
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="progress-text h-semibold-6"
';
                $buffer .= $indent . '                                        title="';
                $value = $context->find('str');
                $buffer .= $this->section3e61033734c998ec2d3d1fb3bdf48066($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('str');
                $buffer .= $this->section046d354798caf787a40f767a6feb24bc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3930b2e5a00f5426e5ac664ffea7382(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'continue,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'continue,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10e004cd739b15cd35ab2d838e7b2d74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewcourse,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewcourse,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26c67878d732526be19f56c76ffdc9d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="course-card hor-1 list-group-item course-listitem  d-flex edw-course-list "
                        id="course-{{ id }}">
                        <div class="edw-course-img-wrapper">
                            <div class="summaryimage card-img dashboard-list-img  p-p-4"
                                style="background-image: url({{{ courseimage }}});">
                                <a href="{{ link }} " class="view-course-url"></a>
                            </div>
                        </div>
                        <div class="edw-list-body w-100 d-flex flex-column justify-content-between flex-gap-3">
                            <div class="d-flex flex-column flex-gap-3">
                                <div class="edw-card-design-hd d-flex flex-column flex-gap-3">
                                    <div class="d-flex flex-wrap">
                                        <div class="d-flex flex-column flex-gap-0d5">
                                            <span class="categoryname text-truncate small-info-semibold ellipsis ellipsis-1" title="{{{categoryname}}}">
                                                {{{categoryname}}}
                                            </span>
                                            <div class="w-100 ">
                                                <a href="{{ link }}" class="coursename text-decoration-none ellipsis ellipsis-2 h-semibold-6 m-0" title="{{{fullname}}}">
                                                    {{{ fullname }}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{#instructor}}
                                    <div class="d-flex flex-row flex-gap-0d5">
                                        <div class="d-flex flex-row instructor-info-wrapper">
                                            <a href="{{ url }}" class="d-flex align-items-center flex-gap-d5 instructor-img {{ imgStyle }}"
                                                aria-label="Instructor for {{coursename}} is - {{name}}" title="{{{name}}}">
                                                <img src="{{ picture }}" class="rounded-circle" alt="{{ name }}" loading="lazy"/>
                                                <h6 class="h-regular-6 course-instructors m-0" title="{{{name}}}">{{{name}}}</h6>
                                            </a>
                                        </div>
                                        {{#instructorcount}}<span
                                            class="small-info-semibold instructorscount d-flex align-items-center justify-content-center">+{{instructorcount}}</span>{{/instructorcount}}
                                    </div>
                                    {{/instructor}}
                                </div>
                                {{! below summary block is commented now }}
                                {{#comment}}
                                    {{#summary}}
                                        <div class="edw-card-design-bd">
                                            <div class="summary ellipsis ellipsis-3">
                                                <span class="sr-only">{{#str}}aria:coursesummary,
                                                    block_myoverview{{/str}}</span>
                                                {{{summary}}}
                                            </div>
                                        </div>
                                    {{/summary}}
                                {{/comment}}
                            </div>
                            <div class="edw-card-design-ft d-flex justify-content-between flex-gap-4">
                                <div class="d-flex flex-column flex-gap-0d5 progress-data-wrapper ">
                                    {{# enablecompletion }}
                                    <span class="small-info-regular m-0" title="{{activitydata}}">{{activitydata}}</span>
                                    <div class="progress"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        <div class="progress-bar" role="progressbar" style="width: {{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}%"
                                            aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="progress-text h-semibold-6"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        {{#str}}completepercent, theme_remui, <span
                                            class="h-semibold-6 m-0">{{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}</span>{{/str}}
                                    </div>
                                    {{/enablecompletion }}
                                </div>
                                <a class="btn btn-secondary btn-sm ml-auto view-course-btn align-self-end" href="{{ link }}"
                                    title="{{#str}}continue,theme_remui{{/str}}">{{#str}}viewcourse,theme_remui{{/str}}</a>
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
                
                $buffer .= $indent . '                    <div class="course-card hor-1 list-group-item course-listitem  d-flex edw-course-list "
';
                $buffer .= $indent . '                        id="course-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="edw-course-img-wrapper">
';
                $buffer .= $indent . '                            <div class="summaryimage card-img dashboard-list-img  p-p-4"
';
                $buffer .= $indent . '                                style="background-image: url(';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' " class="view-course-url"></a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="edw-list-body w-100 d-flex flex-column justify-content-between flex-gap-3">
';
                $buffer .= $indent . '                            <div class="d-flex flex-column flex-gap-3">
';
                $buffer .= $indent . '                                <div class="edw-card-design-hd d-flex flex-column flex-gap-3">
';
                $buffer .= $indent . '                                    <div class="d-flex flex-wrap">
';
                $buffer .= $indent . '                                        <div class="d-flex flex-column flex-gap-0d5">
';
                $buffer .= $indent . '                                            <span class="categoryname text-truncate small-info-semibold ellipsis ellipsis-1" title="';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </span>
';
                $buffer .= $indent . '                                            <div class="w-100 ">
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="coursename text-decoration-none ellipsis ellipsis-2 h-semibold-6 m-0" title="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $value = $context->find('instructor');
                $buffer .= $this->section445674feb23e2a9d87e95fcd14892f79($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $value = $context->find('comment');
                $buffer .= $this->sectionE5f08ee3e60b4226a3db55034e7a2eb7($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="edw-card-design-ft d-flex justify-content-between flex-gap-4">
';
                $buffer .= $indent . '                                <div class="d-flex flex-column flex-gap-0d5 progress-data-wrapper ">
';
                $value = $context->find('enablecompletion');
                $buffer .= $this->section7f0b0b1b2bfd98bb1a4f38a05a2b8a97($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <a class="btn btn-secondary btn-sm ml-auto view-course-btn align-self-end" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionA3930b2e5a00f5426e5ac664ffea7382($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section10e004cd739b15cd35ab2d838e7b2d74($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28be885bf3ae01fb24b9be2b842f1ca2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="profile-cards-wrapper edw-course-list-container d-flex flex-column">
                    {{# courses }}
                    <div class="course-card hor-1 list-group-item course-listitem  d-flex edw-course-list "
                        id="course-{{ id }}">
                        <div class="edw-course-img-wrapper">
                            <div class="summaryimage card-img dashboard-list-img  p-p-4"
                                style="background-image: url({{{ courseimage }}});">
                                <a href="{{ link }} " class="view-course-url"></a>
                            </div>
                        </div>
                        <div class="edw-list-body w-100 d-flex flex-column justify-content-between flex-gap-3">
                            <div class="d-flex flex-column flex-gap-3">
                                <div class="edw-card-design-hd d-flex flex-column flex-gap-3">
                                    <div class="d-flex flex-wrap">
                                        <div class="d-flex flex-column flex-gap-0d5">
                                            <span class="categoryname text-truncate small-info-semibold ellipsis ellipsis-1" title="{{{categoryname}}}">
                                                {{{categoryname}}}
                                            </span>
                                            <div class="w-100 ">
                                                <a href="{{ link }}" class="coursename text-decoration-none ellipsis ellipsis-2 h-semibold-6 m-0" title="{{{fullname}}}">
                                                    {{{ fullname }}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{#instructor}}
                                    <div class="d-flex flex-row flex-gap-0d5">
                                        <div class="d-flex flex-row instructor-info-wrapper">
                                            <a href="{{ url }}" class="d-flex align-items-center flex-gap-d5 instructor-img {{ imgStyle }}"
                                                aria-label="Instructor for {{coursename}} is - {{name}}" title="{{{name}}}">
                                                <img src="{{ picture }}" class="rounded-circle" alt="{{ name }}" loading="lazy"/>
                                                <h6 class="h-regular-6 course-instructors m-0" title="{{{name}}}">{{{name}}}</h6>
                                            </a>
                                        </div>
                                        {{#instructorcount}}<span
                                            class="small-info-semibold instructorscount d-flex align-items-center justify-content-center">+{{instructorcount}}</span>{{/instructorcount}}
                                    </div>
                                    {{/instructor}}
                                </div>
                                {{! below summary block is commented now }}
                                {{#comment}}
                                    {{#summary}}
                                        <div class="edw-card-design-bd">
                                            <div class="summary ellipsis ellipsis-3">
                                                <span class="sr-only">{{#str}}aria:coursesummary,
                                                    block_myoverview{{/str}}</span>
                                                {{{summary}}}
                                            </div>
                                        </div>
                                    {{/summary}}
                                {{/comment}}
                            </div>
                            <div class="edw-card-design-ft d-flex justify-content-between flex-gap-4">
                                <div class="d-flex flex-column flex-gap-0d5 progress-data-wrapper ">
                                    {{# enablecompletion }}
                                    <span class="small-info-regular m-0" title="{{activitydata}}">{{activitydata}}</span>
                                    <div class="progress"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        <div class="progress-bar" role="progressbar" style="width: {{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}%"
                                            aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="progress-text h-semibold-6"
                                        title="{{#str}}completepercent, theme_remui,{{progress}}{{/str}}">
                                        {{#str}}completepercent, theme_remui, <span
                                            class="h-semibold-6 m-0">{{#progress}}{{progress}}{{/progress}}{{^progress}}0{{/progress}}</span>{{/str}}
                                    </div>
                                    {{/enablecompletion }}
                                </div>
                                <a class="btn btn-secondary btn-sm ml-auto view-course-btn align-self-end" href="{{ link }}"
                                    title="{{#str}}continue,theme_remui{{/str}}">{{#str}}viewcourse,theme_remui{{/str}}</a>
                            </div>
                        </div>
                    </div>
                    {{/ courses }}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="profile-cards-wrapper edw-course-list-container d-flex flex-column">
';
                $value = $context->find('courses');
                $buffer .= $this->section26c67878d732526be19f56c76ffdc9d9($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
