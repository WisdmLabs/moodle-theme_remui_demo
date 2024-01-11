<?php

class __Mustache_dd8bc82b1976250c9c55f04dcb24f57e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-content" class="pb-3 d-print-block">
';
        $buffer .= $indent . '    <div id="region-main-box">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section1575b5b225bb2f0e5a86a9a6ea2982c2($context, $indent, $value);
        $buffer .= $indent . '        <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section98dc8d5cb621946c6745b44b94a9b8a7($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section040c6d0a7d93aee16cc40d13dd04270f($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->section5d8fffe618394a03a835ee1d17738c27($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </section>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('homepagetransparentheader');
        $buffer .= $this->section7a0ff94656a2f9a4dc8aa67c516565e4($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionE51d7f0db93115dab03200fcde3bcd0b($context, $indent, $value);

        return $buffer;
    }

    private function section1575b5b225bb2f0e5a86a9a6ea2982c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="region-main-settings-menu" class="d-print-none">
            <div> {{{ regionmainsettingsmenu }}} </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '            <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98dc8d5cb621946c6745b44b94a9b8a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="region_main_settings_menu_proxy"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section040c6d0a7d93aee16cc40d13dd04270f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/activity_header }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d8fffe618394a03a835ee1d17738c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="container-fluid tertiary-navigation">
                    <div class="navitem">
                        {{> core/url_select}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                    <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a0ff94656a2f9a4dc8aa67c516565e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<style>
body#page-site-index.transparent-header:not(.drawer-open-left) .navbar-options #toggleFullscreen svg,
body#page-site-index.transparent-header:not(.drawer-open-left) .navbar-options .menu-toggle .fa,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-brand-logo i,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .nav-link,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-brand-logo i,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .nav-link,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .icon,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .dropdown-toggle {
    color: {{frontpageheadercolor}} !important;
}
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger .hamburger-bar,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger:after,
body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger:before {
    background: {{frontpageheadercolor}};
}
</style>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .navbar-options #toggleFullscreen svg,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .navbar-options .menu-toggle .fa,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-brand-logo i,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .nav-link,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-brand-logo i,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .nav-link,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .icon,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .dropdown-toggle {
';
                $buffer .= $indent . '    color: ';
                $value = $this->resolveValue($context->find('frontpageheadercolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' !important;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger .hamburger-bar,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger:after,
';
                $buffer .= $indent . 'body#page-site-index.transparent-header:not(.drawer-open-left) .fixed-top.navbar.trasnparent-home-nav .navbar-container .hamburger:before {
';
                $buffer .= $indent . '    background: ';
                $value = $this->resolveValue($context->find('frontpageheadercolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '</style>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE51d7f0db93115dab03200fcde3bcd0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_remui/slick\'], function ($) {
$(document).ready(function(){
    $(\'.slick-slide-container\').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 500,
        prevArrow: $(".available-courses.button-container .btn-prev"),
        nextArrow: $(".available-courses.button-container .btn-next"),
        rtl: ($("html").attr("dir") == "rtl") ? true : false,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          }, {
            breakpoint: 821,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }, {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      })
      .on(\'setPosition\', function (event, slick) {
        slick.$slides.css(\'height\', slick.$slideTrack.height() + \'px\');
        $(\'.slick-slide > div\').css(\'height\', \'100%\');
      });
      $(\'.slick-slide-container.slick-slider.d-none\').removeClass(\'d-none\');
});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/slick\'], function ($) {
';
                $buffer .= $indent . '$(document).ready(function(){
';
                $buffer .= $indent . '    $(\'.slick-slide-container\').slick({
';
                $buffer .= $indent . '        dots: false,
';
                $buffer .= $indent . '        arrows: true,
';
                $buffer .= $indent . '        infinite: false,
';
                $buffer .= $indent . '        speed: 500,
';
                $buffer .= $indent . '        prevArrow: $(".available-courses.button-container .btn-prev"),
';
                $buffer .= $indent . '        nextArrow: $(".available-courses.button-container .btn-next"),
';
                $buffer .= $indent . '        rtl: ($("html").attr("dir") == "rtl") ? true : false,
';
                $buffer .= $indent . '        slidesToShow: 4,
';
                $buffer .= $indent . '        slidesToScroll: 4,
';
                $buffer .= $indent . '        responsive: [{
';
                $buffer .= $indent . '            breakpoint: 1024,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '              slidesToShow: 3,
';
                $buffer .= $indent . '              slidesToScroll: 3
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '          }, {
';
                $buffer .= $indent . '            breakpoint: 821,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '              slidesToShow: 2,
';
                $buffer .= $indent . '              slidesToScroll: 2
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '          }, {
';
                $buffer .= $indent . '            breakpoint: 480,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '              slidesToShow: 1,
';
                $buffer .= $indent . '              slidesToScroll: 1
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '        ]
';
                $buffer .= $indent . '      })
';
                $buffer .= $indent . '      .on(\'setPosition\', function (event, slick) {
';
                $buffer .= $indent . '        slick.$slides.css(\'height\', slick.$slideTrack.height() + \'px\');
';
                $buffer .= $indent . '        $(\'.slick-slide > div\').css(\'height\', \'100%\');
';
                $buffer .= $indent . '      });
';
                $buffer .= $indent . '      $(\'.slick-slide-container.slick-slider.d-none\').removeClass(\'d-none\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
