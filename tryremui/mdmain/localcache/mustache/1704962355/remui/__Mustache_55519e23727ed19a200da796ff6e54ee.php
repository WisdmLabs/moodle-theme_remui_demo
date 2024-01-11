<?php

class __Mustache_55519e23727ed19a200da796ff6e54ee extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' class="calendarwrapper"';
        $value = $context->find('courseid');
        $buffer .= $this->section4f3e547ac50707b30ffc2cec5e028045($context, $indent, $value);
        $value = $context->find('categoryid');
        $buffer .= $this->sectionA00eaaaf78214a10bae0a4f10432dae0($context, $indent, $value);
        $buffer .= ' data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-view="';
        $value = $this->resolveValue($context->find('view'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/month_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="table-wrapper">
';
        $buffer .= $indent . '        <table id="month-detailed-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="calendarmonth calendartable mb-0">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $value = $context->find('daynames');
        $buffer .= $this->section7841faeae31edc48e5c5fa1f10286d01($context, $indent, $value);
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '            <tbody>
';
        $value = $context->find('weeks');
        $buffer .= $this->section25549c44d65a2930473dc56b36c34d0c($context, $indent, $value);
        $buffer .= $indent . '            </tbody>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB56e1972cadb534bbb2d637a549766db($context, $indent, $value);

        return $buffer;
    }

    private function section4f3e547ac50707b30ffc2cec5e028045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-courseid="{{courseid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA00eaaaf78214a10bae0a4f10432dae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-categoryid="{{categoryid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7841faeae31edc48e5c5fa1f10286d01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <th class="header text-xs-center">
                        <span class="sr-only">{{fullname}}</span>
                        <span aria-hidden="true" class="h-semibold-5">{{shortname}}</span>
                    </th>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <th class="header text-xs-center">
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                        <span aria-hidden="true" class="h-semibold-5">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86baf0d2bd47f5d94c6cd5235199b2d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td class="dayblank">&nbsp;</td>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <td class="dayblank">&nbsp;</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCce61e3fee851e8b66112494c048a58a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' today';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84f949a8191b4daaac38d5ac1997cd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' weekend';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' weekend';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa9feca8669cbbfdc6a37548f193ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duration';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC090550ce065bf0ee1844d93a2f5c5bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration_{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duration_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7cafb8496be54e32a81ab964df17ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clickable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clickable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE28f621eb042f18284779ecc71990758(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasevent';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hasevent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4b17465b30f8e7b0573e098b81f0e55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' today, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0376e0cfa88d71c021de2af759f6b3da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{#str}} today, core_calendar {{/str}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' title="';
                $value = $context->find('str');
                $buffer .= $this->sectionA4b17465b30f8e7b0573e098b81f0e55($context, $indent, $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section319181b8b4154e3dfe673ffd2a6e2de2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-title="{{viewdaylinktitle}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-title="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section336cb6f4f186925a3756e5f0a882c117(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}">
                                        <span class="day-number-circle">
                                            <span class="day-number">{{mday}}</span>
                                        </span></a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-year="';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-month="';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <span class="day-number-circle">
';
                $buffer .= $indent . '                                            <span class="day-number">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cc9854a34496f9c568c187000695e91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="events-underway">[{{{name}}}]</li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li class="events-underway">[';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ']</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3476ef026a286bd43e6a8bddb688f41e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                            data-min-day-timestamp="{{.}}"
                                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                            data-min-day-timestamp="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3af67439c7a8bbad412f401f29a377d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                            data-min-day-error="{{.}}"
                                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                            data-min-day-error="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71184a994d5b1b85f0917157c89c6ab0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                            data-max-day-timestamp="{{.}}"
                                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                            data-max-day-timestamp="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3761a58cc221428a8b76fc424b7fe95d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                            data-max-day-error="{{.}}"
                                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                            data-max-day-error="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85b3b70d9858ce0fe4338c7080e2f4ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        draggable="true"
                                                        data-drag-type="move"
                                                        {{#mindaytimestamp}}
                                                            data-min-day-timestamp="{{.}}"
                                                        {{/mindaytimestamp}}
                                                        {{#mindayerror}}
                                                            data-min-day-error="{{.}}"
                                                        {{/mindayerror}}
                                                        {{#maxdaytimestamp}}
                                                            data-max-day-timestamp="{{.}}"
                                                        {{/maxdaytimestamp}}
                                                        {{#maxdayerror}}
                                                            data-max-day-error="{{.}}"
                                                        {{/maxdayerror}}
                                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                        draggable="true"
';
                $buffer .= $indent . '                                                        data-drag-type="move"
';
                $value = $context->find('mindaytimestamp');
                $buffer .= $this->section3476ef026a286bd43e6a8bddb688f41e($context, $indent, $value);
                $value = $context->find('mindayerror');
                $buffer .= $this->sectionB3af67439c7a8bbad412f401f29a377d($context, $indent, $value);
                $value = $context->find('maxdaytimestamp');
                $buffer .= $this->section71184a994d5b1b85f0917157c89c6ab0($context, $indent, $value);
                $value = $context->find('maxdayerror');
                $buffer .= $this->section3761a58cc221428a8b76fc424b7fe95d($context, $indent, $value);
                $buffer .= $indent . '                                                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01b18f2f3fdc7a1bf6e3758db78faeb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#underway}}
                                                <li class="events-underway">[{{{name}}}]</li>
                                            {{/underway}}
                                            {{^underway}}
                                                <li data-region="event-item"
                                                    data-event-component="{{component}}"
                                                    data-event-eventtype="{{eventtype}}"
                                                    data-event-folded="false"
                                                    data-eventtype-{{normalisedeventtype}}="1"
                                                    {{#draggable}}
                                                        draggable="true"
                                                        data-drag-type="move"
                                                        {{#mindaytimestamp}}
                                                            data-min-day-timestamp="{{.}}"
                                                        {{/mindaytimestamp}}
                                                        {{#mindayerror}}
                                                            data-min-day-error="{{.}}"
                                                        {{/mindayerror}}
                                                        {{#maxdaytimestamp}}
                                                            data-max-day-timestamp="{{.}}"
                                                        {{/maxdaytimestamp}}
                                                        {{#maxdayerror}}
                                                            data-max-day-error="{{.}}"
                                                        {{/maxdayerror}}
                                                    {{/draggable}}>

                                                    <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                        <span class="calendar-circle calendar_event_{{normalisedeventtype}} edw-icon edw-icon-calendar_event_{{normalisedeventtype}} ">
                                                        </span>
                                                        <span class="eventname mr-1">{{{name}}}</span>
                                                    </a>
                                                </li>
                                            {{/underway}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('underway');
                $buffer .= $this->section0cc9854a34496f9c568c187000695e91($context, $indent, $value);
                $value = $context->find('underway');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <li data-region="event-item"
';
                    $buffer .= $indent . '                                                    data-event-component="';
                    $value = $this->resolveValue($context->find('component'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                    data-event-eventtype="';
                    $value = $this->resolveValue($context->find('eventtype'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                    data-event-folded="false"
';
                    $buffer .= $indent . '                                                    data-eventtype-';
                    $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '="1"
';
                    $value = $context->find('draggable');
                    $buffer .= $this->section85b3b70d9858ce0fe4338c7080e2f4ee($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                                                    <a data-action="view-event" data-event-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" title="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                                                        <span class="calendar-circle calendar_event_';
                    $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' edw-icon edw-icon-calendar_event_';
                    $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' ">
';
                    $buffer .= $indent . '                                                        </span>
';
                    $buffer .= $indent . '                                                        <span class="eventname mr-1">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                                    </a>
';
                    $buffer .= $indent . '                                                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52bc13cb08d8b11281e5355488a15bad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' moreevents, calendar, {{hasmoreevents}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' moreevents, calendar, ';
                $value = $this->resolveValue($context->find('hasmoreevents'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf27779ddea9dbe64a8a5d0200420bba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                                    {{> core_calendar/event_icon}}
                                                    {{{name}}}
                                                </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <div data-popover-eventtype-';
                $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="1">
';
                if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section529f750f1a5e28a9f294e4c207b9ed68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div data-region="day-content">
                                        <ul class="d-flex flex-gap-d5">
                                            {{#events}}
                                            {{#underway}}
                                                <li class="events-underway">[{{{name}}}]</li>
                                            {{/underway}}
                                            {{^underway}}
                                                <li data-region="event-item"
                                                    data-event-component="{{component}}"
                                                    data-event-eventtype="{{eventtype}}"
                                                    data-event-folded="false"
                                                    data-eventtype-{{normalisedeventtype}}="1"
                                                    {{#draggable}}
                                                        draggable="true"
                                                        data-drag-type="move"
                                                        {{#mindaytimestamp}}
                                                            data-min-day-timestamp="{{.}}"
                                                        {{/mindaytimestamp}}
                                                        {{#mindayerror}}
                                                            data-min-day-error="{{.}}"
                                                        {{/mindayerror}}
                                                        {{#maxdaytimestamp}}
                                                            data-max-day-timestamp="{{.}}"
                                                        {{/maxdaytimestamp}}
                                                        {{#maxdayerror}}
                                                            data-max-day-error="{{.}}"
                                                        {{/maxdayerror}}
                                                    {{/draggable}}>

                                                    <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                        <span class="calendar-circle calendar_event_{{normalisedeventtype}} edw-icon edw-icon-calendar_event_{{normalisedeventtype}} ">
                                                        </span>
                                                        <span class="eventname mr-1">{{{name}}}</span>
                                                    </a>
                                                </li>
                                            {{/underway}}
                                            {{/events}}
                                            <li data-action="view-more-events" style="display: none">
                                                <strong>
                                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                                       data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                                       data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                                       data-timestamp="{{timestamp}}">
                                                       {{#str}} moreevents, calendar, {{hasmoreevents}} {{/str}}
                                                    </a>
                                                </strong>
                                            </li>
                                        </ul>
                                        <div class="hidden">
                                            {{#events}}
                                                <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                                    {{> core_calendar/event_icon}}
                                                    {{{name}}}
                                                </div>
                                            {{/events}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div data-region="day-content">
';
                $buffer .= $indent . '                                        <ul class="d-flex flex-gap-d5">
';
                $value = $context->find('events');
                $buffer .= $this->section01b18f2f3fdc7a1bf6e3758db78faeb2($context, $indent, $value);
                $buffer .= $indent . '                                            <li data-action="view-more-events" style="display: none">
';
                $buffer .= $indent . '                                                <strong>
';
                $buffer .= $indent . '                                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                                       data-year="';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-month="';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                                       data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                                       data-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                                       ';
                $value = $context->find('str');
                $buffer .= $this->section52bc13cb08d8b11281e5355488a15bad($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </strong>
';
                $buffer .= $indent . '                                            </li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                        <div class="hidden">
';
                $value = $context->find('events');
                $buffer .= $this->sectionCf27779ddea9dbe64a8a5d0200420bba($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa60cad049435e8ea50bc0386e7640a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a data-action="view-day-link" href="#" class="day aalink" aria-label="';
                $value = $this->resolveValue($context->find('viewdaylinktitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-year="';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-month="';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                        data-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span class="day-number-circle"><span class="day-number">';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></span></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBde93ae293a1adad248f388c0a773c51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td class="day text-sm-center text-md-left{{!
                                }}{{#istoday}} today{{/istoday}}{{!
                                }}{{#isweekend}} weekend{{/isweekend}}{{!
                                }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                                }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                                }}{{#defaulteventcontext}} clickable{{/defaulteventcontext}}{{!
                                }}{{#hasevents}} hasevent{{/hasevents}}{{!
                            }}"
                            data-day="{{mday}}"
                            data-day-timestamp="{{timestamp}}"
                            data-drop-zone="month-view-day"
                            data-region="day"
                            data-new-event-timestamp="{{neweventtimestamp}}"{{#istoday}} title="{{#str}} today, core_calendar {{/str}}"{{/istoday}}
                            {{#hasevents}} data-title="{{viewdaylinktitle}}"{{/hasevents}}>
                            <div class="d-none d-md-flex flex-column justify-content-between hidden-phone text-xs-center">
                                <span class="sr-only">{{daytitle}}</span>
                                {{#hasevents}}
                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}">
                                        <span class="day-number-circle">
                                            <span class="day-number">{{mday}}</span>
                                        </span></a>
                                {{/hasevents}}
                                {{^hasevents}}
                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></span>
                                {{/hasevents}}
                                {{#hasevents}}
                                    <div data-region="day-content">
                                        <ul class="d-flex flex-gap-d5">
                                            {{#events}}
                                            {{#underway}}
                                                <li class="events-underway">[{{{name}}}]</li>
                                            {{/underway}}
                                            {{^underway}}
                                                <li data-region="event-item"
                                                    data-event-component="{{component}}"
                                                    data-event-eventtype="{{eventtype}}"
                                                    data-event-folded="false"
                                                    data-eventtype-{{normalisedeventtype}}="1"
                                                    {{#draggable}}
                                                        draggable="true"
                                                        data-drag-type="move"
                                                        {{#mindaytimestamp}}
                                                            data-min-day-timestamp="{{.}}"
                                                        {{/mindaytimestamp}}
                                                        {{#mindayerror}}
                                                            data-min-day-error="{{.}}"
                                                        {{/mindayerror}}
                                                        {{#maxdaytimestamp}}
                                                            data-max-day-timestamp="{{.}}"
                                                        {{/maxdaytimestamp}}
                                                        {{#maxdayerror}}
                                                            data-max-day-error="{{.}}"
                                                        {{/maxdayerror}}
                                                    {{/draggable}}>

                                                    <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                        <span class="calendar-circle calendar_event_{{normalisedeventtype}} edw-icon edw-icon-calendar_event_{{normalisedeventtype}} ">
                                                        </span>
                                                        <span class="eventname mr-1">{{{name}}}</span>
                                                    </a>
                                                </li>
                                            {{/underway}}
                                            {{/events}}
                                            <li data-action="view-more-events" style="display: none">
                                                <strong>
                                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                                       data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                                       data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                                       data-timestamp="{{timestamp}}">
                                                       {{#str}} moreevents, calendar, {{hasmoreevents}} {{/str}}
                                                    </a>
                                                </strong>
                                            </li>
                                        </ul>
                                        <div class="hidden">
                                            {{#events}}
                                                <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                                    {{> core_calendar/event_icon}}
                                                    {{{name}}}
                                                </div>
                                            {{/events}}
                                        </div>
                                    </div>
                                {{/hasevents}}
                            </div>
                            <div class="d-md-none hidden-desktop hidden-tablet">
                                <span class="sr-only">{{daytitle}}</span>
                                {{#hasevents}}
                                    <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></a>
                                {{/hasevents}}
                                {{^hasevents}}
                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></span>
                                {{/hasevents}}
                            </div>
                        </td>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <td class="day text-sm-center text-md-left';
                $value = $context->find('istoday');
                $buffer .= $this->sectionCce61e3fee851e8b66112494c048a58a($context, $indent, $value);
                $value = $context->find('isweekend');
                $buffer .= $this->section84f949a8191b4daaac38d5ac1997cd7a($context, $indent, $value);
                $value = $context->findDot('durationevents.0');
                $buffer .= $this->section8aa9feca8669cbbfdc6a37548f193ebe($context, $indent, $value);
                $value = $context->find('durationevents');
                $buffer .= $this->sectionC090550ce065bf0ee1844d93a2f5c5bc($context, $indent, $value);
                $value = $context->find('defaulteventcontext');
                $buffer .= $this->sectionA7cafb8496be54e32a81ab964df17ff2($context, $indent, $value);
                $value = $context->find('hasevents');
                $buffer .= $this->sectionE28f621eb042f18284779ecc71990758($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            data-day="';
                $value = $this->resolveValue($context->find('mday'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                            data-day-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                            data-drop-zone="month-view-day"
';
                $buffer .= $indent . '                            data-region="day"
';
                $buffer .= $indent . '                            data-new-event-timestamp="';
                $value = $this->resolveValue($context->find('neweventtimestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('istoday');
                $buffer .= $this->section0376e0cfa88d71c021de2af759f6b3da($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('hasevents');
                $buffer .= $this->section319181b8b4154e3dfe673ffd2a6e2de2($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                            <div class="d-none d-md-flex flex-column justify-content-between hidden-phone text-xs-center">
';
                $buffer .= $indent . '                                <span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->find('hasevents');
                $buffer .= $this->section336cb6f4f186925a3756e5f0a882c117($context, $indent, $value);
                $value = $context->find('hasevents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span></span></span>
';
                }
                $value = $context->find('hasevents');
                $buffer .= $this->section529f750f1a5e28a9f294e4c207b9ed68($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="d-md-none hidden-desktop hidden-tablet">
';
                $buffer .= $indent . '                                <span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->find('hasevents');
                $buffer .= $this->sectionEa60cad049435e8ea50bc0386e7640a3($context, $indent, $value);
                $value = $context->find('hasevents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span></span></span>
';
                }
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25549c44d65a2930473dc56b36c34d0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr data-region="month-view-week">
                    {{#prepadding}}
                        <td class="dayblank">&nbsp;</td>
                    {{/prepadding}}
                    {{#days}}
                        <td class="day text-sm-center text-md-left{{!
                                }}{{#istoday}} today{{/istoday}}{{!
                                }}{{#isweekend}} weekend{{/isweekend}}{{!
                                }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                                }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                                }}{{#defaulteventcontext}} clickable{{/defaulteventcontext}}{{!
                                }}{{#hasevents}} hasevent{{/hasevents}}{{!
                            }}"
                            data-day="{{mday}}"
                            data-day-timestamp="{{timestamp}}"
                            data-drop-zone="month-view-day"
                            data-region="day"
                            data-new-event-timestamp="{{neweventtimestamp}}"{{#istoday}} title="{{#str}} today, core_calendar {{/str}}"{{/istoday}}
                            {{#hasevents}} data-title="{{viewdaylinktitle}}"{{/hasevents}}>
                            <div class="d-none d-md-flex flex-column justify-content-between hidden-phone text-xs-center">
                                <span class="sr-only">{{daytitle}}</span>
                                {{#hasevents}}
                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}">
                                        <span class="day-number-circle">
                                            <span class="day-number">{{mday}}</span>
                                        </span></a>
                                {{/hasevents}}
                                {{^hasevents}}
                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></span>
                                {{/hasevents}}
                                {{#hasevents}}
                                    <div data-region="day-content">
                                        <ul class="d-flex flex-gap-d5">
                                            {{#events}}
                                            {{#underway}}
                                                <li class="events-underway">[{{{name}}}]</li>
                                            {{/underway}}
                                            {{^underway}}
                                                <li data-region="event-item"
                                                    data-event-component="{{component}}"
                                                    data-event-eventtype="{{eventtype}}"
                                                    data-event-folded="false"
                                                    data-eventtype-{{normalisedeventtype}}="1"
                                                    {{#draggable}}
                                                        draggable="true"
                                                        data-drag-type="move"
                                                        {{#mindaytimestamp}}
                                                            data-min-day-timestamp="{{.}}"
                                                        {{/mindaytimestamp}}
                                                        {{#mindayerror}}
                                                            data-min-day-error="{{.}}"
                                                        {{/mindayerror}}
                                                        {{#maxdaytimestamp}}
                                                            data-max-day-timestamp="{{.}}"
                                                        {{/maxdaytimestamp}}
                                                        {{#maxdayerror}}
                                                            data-max-day-error="{{.}}"
                                                        {{/maxdayerror}}
                                                    {{/draggable}}>

                                                    <a data-action="view-event" data-event-id="{{id}}" href="{{url}}" title="{{name}}">
                                                        <span class="calendar-circle calendar_event_{{normalisedeventtype}} edw-icon edw-icon-calendar_event_{{normalisedeventtype}} ">
                                                        </span>
                                                        <span class="eventname mr-1">{{{name}}}</span>
                                                    </a>
                                                </li>
                                            {{/underway}}
                                            {{/events}}
                                            <li data-action="view-more-events" style="display: none">
                                                <strong>
                                                    <a data-action="view-day-link" href="#" class="aalink day" aria-label="{{viewdaylinktitle}}"
                                                       data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                                       data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                                       data-timestamp="{{timestamp}}">
                                                       {{#str}} moreevents, calendar, {{hasmoreevents}} {{/str}}
                                                    </a>
                                                </strong>
                                            </li>
                                        </ul>
                                        <div class="hidden">
                                            {{#events}}
                                                <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                                    {{> core_calendar/event_icon}}
                                                    {{{name}}}
                                                </div>
                                            {{/events}}
                                        </div>
                                    </div>
                                {{/hasevents}}
                            </div>
                            <div class="d-md-none hidden-desktop hidden-tablet">
                                <span class="sr-only">{{daytitle}}</span>
                                {{#hasevents}}
                                    <a data-action="view-day-link" href="#" class="day aalink" aria-label="{{viewdaylinktitle}}"
                                        data-year="{{date.year}}" data-month="{{date.mon}}" data-day="{{mday}}"
                                        data-courseid="{{courseid}}" data-categoryid="{{categoryid}}"
                                        data-timestamp="{{timestamp}}"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></a>
                                {{/hasevents}}
                                {{^hasevents}}
                                    <span aria-hidden="true"><span class="day-number-circle"><span class="day-number">{{mday}}</span></span></span>
                                {{/hasevents}}
                            </div>
                        </td>
                    {{/days}}
                    {{#postpadding}}
                        <td class="dayblank">&nbsp;</td>
                    {{/postpadding}}
                </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <tr data-region="month-view-week">
';
                $value = $context->find('prepadding');
                $buffer .= $this->section86baf0d2bd47f5d94c6cd5235199b2d1($context, $indent, $value);
                $value = $context->find('days');
                $buffer .= $this->sectionBde93ae293a1adad248f388c0a773c51($context, $indent, $value);
                $value = $context->find('postpadding');
                $buffer .= $this->section86baf0d2bd47f5d94c6cd5235199b2d1($context, $indent, $value);
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB56e1972cadb534bbb2d637a549766db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/month_view_drag_drop\'
], function(
    $,
    DragDrop
) {
    var root = $(\'#month-detailed-{{uniqid}}-{{calendarinstanceid}}\');
    DragDrop.init(root);
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/month_view_drag_drop\'
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    DragDrop
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#month-detailed-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    DragDrop.init(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
