<?php

class __Mustache_966c40a48ffcf9a5cad63072a56fcc9b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="filters-wrapper d-flex" aria-label="Course Archive Page Filters">
';
        $buffer .= $indent . '    <div class="course-counter h-semibold-5 m-0">
';
        $buffer .= $indent . '        <span class="course-number h-bold-5 m-0">0</span>&nbsp;<span>';
        $value = $context->find('str');
        $buffer .= $this->sectionAd4fe1caa74d3cbd994a47529a9b654c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex  all-filters-wrapper">
';
        $buffer .= $indent . '        <div class="w-100" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionD28ab733af4465f7f803106e7d4587c4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('searchhtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="dropdown categoryfiltermenu">
';
        $buffer .= $indent . '            <button class="btn dropdown-toggle categoryfilter form-control bg-transparent" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
        $buffer .= $indent . '               <span class="filter-option pull-left">';
        $value = $context->find('str');
        $buffer .= $this->sectionD88f2d38c71db2f707c6d70812a2529b($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('caegoryfilterhtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <select id="categoryfilter" class="selectpicker categoryfiltermenu d-none" aria-haspopup="true" aria-expanded="false"
';
        $buffer .= $indent . '            data-live-search="true" data-style="categoryfilter form-control bg-transparent">
';
        $buffer .= $indent . '            <option value=\'all\'>';
        $value = $context->find('str');
        $buffer .= $this->sectionD88f2d38c71db2f707c6d70812a2529b($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('categories');
        $buffer .= $this->section6a2b5b8edcb70bbca9426102b2bf8b52($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <select id="sortfilter" class="selectpicker" data-style="sortfilter form-control bg-transparent">
';
        $buffer .= $indent . '            <option value=\'default\'>';
        $value = $context->find('str');
        $buffer .= $this->sectionA834a1a1327e810c33afcec2624a0ebb($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option value=\'ASC\'>';
        $value = $context->find('str');
        $buffer .= $this->section671061cb6a745bd82990110eb6539ddd($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option value=\'DESC\'>';
        $value = $context->find('str');
        $buffer .= $this->section0c71eea8c9ac0747819fd1b6cb6fbe29($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('coursearchivefiltermenumorebutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('latest_card');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class=" btn-group view-buttons" data-toggle="buttons">
';
            $value = $context->find('viewoptions');
            $buffer .= $this->section14d9f473eecc7d4b8fdea34f27755273($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="category-description-container d-none p-mt-2">
';
        $buffer .= $indent . '        <div class="category-description-wrapper p-mb-5">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('categorydesciption'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <a id="readmorebtn" class="d-none  readbtn text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section3584e523fcc571485c6fa2ccfc3ed208($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        <a id="readlessbtn" class="d-none  readbtn text-link-semibold">';
        $value = $context->find('str');
        $buffer .= $this->section13ac172d98023c6c52354459a6c3287c($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAd4fe1caa74d3cbd994a47529a9b654c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' archivecoursecounttext, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' archivecoursecounttext, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD28ab733af4465f7f803106e7d4587c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search,core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search,core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD88f2d38c71db2f707c6d70812a2529b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allcategories , theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' allcategories , theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a2b5b8edcb70bbca9426102b2bf8b52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value=\'{{ id }}\' class="selectoptions">{{{ title }}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value=\'';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' class="selectoptions">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA834a1a1327e810c33afcec2624a0ebb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortdefault, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortdefault, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section671061cb6a745bd82990110eb6539ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortascending, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortascending, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c71eea8c9ac0747819fd1b6cb6fbe29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sortdescending, theme_remui ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sortdescending, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD366d9d3e8815af64c5d720247a7a391(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active btn-primary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' active btn-primary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fc26969ddd918e0a280a1daa10d7757(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' d-none ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' d-none ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5877f6078c66acca333d504c666c1c40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gridview,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gridview,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ff0ecfd6c88c701a3a02d37908af54f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="grid_btn btn togglebtn {{#viewactivebtn}} active btn-primary {{/viewactivebtn}} {{#hideavailableview}} d-none {{/hideavailableview}}" title="{{#str}}gridview,theme_remui{{/str}}"
                data-view="grid" tabindex="0" role="button">
                <span class="edw-icon edw-icon-Card-View" aria-hidden="true"></span>
            </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="grid_btn btn togglebtn ';
                $value = $context->find('viewactivebtn');
                $buffer .= $this->sectionD366d9d3e8815af64c5d720247a7a391($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('hideavailableview');
                $buffer .= $this->section4fc26969ddd918e0a280a1daa10d7757($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section5877f6078c66acca333d504c666c1c40($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-view="grid" tabindex="0" role="button">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Card-View" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2846f4eaeea77390e682ecbabc53bc4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'listview,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'listview,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section036df8fc189672e4a0b6f356d234d4b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="list_btn btn togglebtn {{#hideavailableview}} d-none {{/hideavailableview}}" title="{{#str}}listview,theme_remui{{/str}}" data-view="list" tabindex="0"
                role="button">
                <span class="edw-icon edw-icon-List-View-08" aria-hidden="true"></span>
            </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="list_btn btn togglebtn ';
                $value = $context->find('hideavailableview');
                $buffer .= $this->section4fc26969ddd918e0a280a1daa10d7757($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section2846f4eaeea77390e682ecbabc53bc4e($context, $indent, $value);
                $buffer .= '" data-view="list" tabindex="0"
';
                $buffer .= $indent . '                role="button">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-List-View-08" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB41f9fd909a0b705eeb8f603ddd82d78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' d-none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' d-none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3ad0a212decdee2f391776d10f41985(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summaryview,theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summaryview,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section549036d33ad14b465118c847bb2e9a24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="summary_btn btn togglebtn {{#hideavailableview}} d-none{{/hideavailableview}}" title="{{#str}}summaryview,theme_remui{{/str}}" data-view="summary"
                tabindex="0" role="button">
                <span class="edw-icon edw-icon-Topic-View" aria-hidden="true"></span>
            </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="summary_btn btn togglebtn ';
                $value = $context->find('hideavailableview');
                $buffer .= $this->sectionB41f9fd909a0b705eeb8f603ddd82d78($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionC3ad0a212decdee2f391776d10f41985($context, $indent, $value);
                $buffer .= '" data-view="summary"
';
                $buffer .= $indent . '                tabindex="0" role="button">
';
                $buffer .= $indent . '                <span class="edw-icon edw-icon-Topic-View" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14d9f473eecc7d4b8fdea34f27755273(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#card}}
            <a class="grid_btn btn togglebtn {{#viewactivebtn}} active btn-primary {{/viewactivebtn}} {{#hideavailableview}} d-none {{/hideavailableview}}" title="{{#str}}gridview,theme_remui{{/str}}"
                data-view="grid" tabindex="0" role="button">
                <span class="edw-icon edw-icon-Card-View" aria-hidden="true"></span>
            </a>
            {{/card}}
            {{#list}}
            <a class="list_btn btn togglebtn {{#hideavailableview}} d-none {{/hideavailableview}}" title="{{#str}}listview,theme_remui{{/str}}" data-view="list" tabindex="0"
                role="button">
                <span class="edw-icon edw-icon-List-View-08" aria-hidden="true"></span>
            </a>
            {{/list}}
            {{#summary}}
            <a class="summary_btn btn togglebtn {{#hideavailableview}} d-none{{/hideavailableview}}" title="{{#str}}summaryview,theme_remui{{/str}}" data-view="summary"
                tabindex="0" role="button">
                <span class="edw-icon edw-icon-Topic-View" aria-hidden="true"></span>
            </a>
            {{/summary}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('card');
                $buffer .= $this->section2ff0ecfd6c88c701a3a02d37908af54f($context, $indent, $value);
                $value = $context->find('list');
                $buffer .= $this->section036df8fc189672e4a0b6f356d234d4b0($context, $indent, $value);
                $value = $context->find('summary');
                $buffer .= $this->section549036d33ad14b465118c847bb2e9a24($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3584e523fcc571485c6fa2ccfc3ed208(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showmore, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showmore, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13ac172d98023c6c52354459a6c3287c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showless, theme_remui';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showless, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
