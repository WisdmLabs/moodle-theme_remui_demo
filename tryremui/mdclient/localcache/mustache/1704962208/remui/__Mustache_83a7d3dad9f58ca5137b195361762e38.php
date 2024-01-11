<?php

class __Mustache_83a7d3dad9f58ca5137b195361762e38 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section15c968329c7d358a414a8dc6a7e8dcfe($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section6a3efc50576024eb46a96dc4baecc5d1($context, $indent, $value);

        return $buffer;
    }

    private function section15c968329c7d358a414a8dc6a7e8dcfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
$(document).ready(function(){
    require([\'jquery\'], function($) {
        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=DM+Serif+Display:ital@0;1&display=swap\'));
    });

    require([\'jquery\'], function($) {
        $(\'.custom-slider-section\').carousel({
            interval: 5000,
            pause: false,
            ride: \'carousel\'
        });
    });



    require([\'jquery\', \'theme_remui/slick\'], function($) {
        // return;
        $(\'.custom-teacher-section .slicker .teacher-item\').removeClass(\'col-12 col-md-6 col-lg-3\');
        $(\'.custom-teacher-section .slicker\').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            autoplay: true,
            dots: true,
            autoplaySpeed: 5000,
            centerMode: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });


    require([\'jquery\', \'theme_remui/slick\'], function($) {
        $(\'.custom-testimonial-section .slicker .col-12.col-lg-4.px-4\').removeClass(\'col-12 col-lg-4 px-4\');
        let slick = $(\'.custom-testimonial-section .slicker\').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            prevArrow: $(\'.custom-testimonial-section .slicker-actions .testimonial-prev\'),
            nextArrow: $(\'.custom-testimonial-section .slicker-actions .testimonial-next\'),
            autoplay: true,
            dots: false,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
        $(\'body\').on(\'click\', \'.custom-testimonial-section .slicker-actions .testimonial-prev\', function() {
            slick.get(0).slick.prev();
        });
        $(\'body\').on(\'click\', \'.custom-testimonial-section .slicker-actions .testimonial-next\', function() {
            slick.get(0).slick.next();
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
                
                $buffer .= $indent . '$(document).ready(function(){
';
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
';
                $buffer .= $indent . '        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
';
                $buffer .= $indent . '        $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=DM+Serif+Display:ital@0;1&display=swap\'));
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(\'.custom-slider-section\').carousel({
';
                $buffer .= $indent . '            interval: 5000,
';
                $buffer .= $indent . '            pause: false,
';
                $buffer .= $indent . '            ride: \'carousel\'
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    require([\'jquery\', \'theme_remui/slick\'], function($) {
';
                $buffer .= $indent . '        // return;
';
                $buffer .= $indent . '        $(\'.custom-teacher-section .slicker .teacher-item\').removeClass(\'col-12 col-md-6 col-lg-3\');
';
                $buffer .= $indent . '        $(\'.custom-teacher-section .slicker\').slick({
';
                $buffer .= $indent . '            infinite: true,
';
                $buffer .= $indent . '            slidesToShow: 4,
';
                $buffer .= $indent . '            slidesToScroll: 4,
';
                $buffer .= $indent . '            arrows: false,
';
                $buffer .= $indent . '            autoplay: true,
';
                $buffer .= $indent . '            dots: true,
';
                $buffer .= $indent . '            autoplaySpeed: 5000,
';
                $buffer .= $indent . '            centerMode: true,
';
                $buffer .= $indent . '            responsive: [{
';
                $buffer .= $indent . '                breakpoint: 1024,
';
                $buffer .= $indent . '                settings: {
';
                $buffer .= $indent . '                    slidesToShow: 3,
';
                $buffer .= $indent . '                    slidesToScroll: 3,
';
                $buffer .= $indent . '                    infinite: true
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }, {
';
                $buffer .= $indent . '                breakpoint: 768,
';
                $buffer .= $indent . '                settings: {
';
                $buffer .= $indent . '                    slidesToShow: 2,
';
                $buffer .= $indent . '                    slidesToScroll: 2
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }, {
';
                $buffer .= $indent . '                breakpoint: 576,
';
                $buffer .= $indent . '                settings: {
';
                $buffer .= $indent . '                    slidesToShow: 1,
';
                $buffer .= $indent . '                    slidesToScroll: 1
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }]
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    require([\'jquery\', \'theme_remui/slick\'], function($) {
';
                $buffer .= $indent . '        $(\'.custom-testimonial-section .slicker .col-12.col-lg-4.px-4\').removeClass(\'col-12 col-lg-4 px-4\');
';
                $buffer .= $indent . '        let slick = $(\'.custom-testimonial-section .slicker\').slick({
';
                $buffer .= $indent . '            infinite: true,
';
                $buffer .= $indent . '            slidesToShow: 3,
';
                $buffer .= $indent . '            slidesToScroll: 3,
';
                $buffer .= $indent . '            arrows: true,
';
                $buffer .= $indent . '            prevArrow: $(\'.custom-testimonial-section .slicker-actions .testimonial-prev\'),
';
                $buffer .= $indent . '            nextArrow: $(\'.custom-testimonial-section .slicker-actions .testimonial-next\'),
';
                $buffer .= $indent . '            autoplay: true,
';
                $buffer .= $indent . '            dots: false,
';
                $buffer .= $indent . '            autoplaySpeed: 5000,
';
                $buffer .= $indent . '            responsive: [{
';
                $buffer .= $indent . '                breakpoint: 1024,
';
                $buffer .= $indent . '                settings: {
';
                $buffer .= $indent . '                    slidesToShow: 1,
';
                $buffer .= $indent . '                    slidesToScroll: 1,
';
                $buffer .= $indent . '                    infinite: true,
';
                $buffer .= $indent . '                    dots: true
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }]
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        $(\'body\').on(\'click\', \'.custom-testimonial-section .slicker-actions .testimonial-prev\', function() {
';
                $buffer .= $indent . '            slick.get(0).slick.prev();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        $(\'body\').on(\'click\', \'.custom-testimonial-section .slicker-actions .testimonial-next\', function() {
';
                $buffer .= $indent . '            slick.get(0).slick.next();
';
                $buffer .= $indent . '        });
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

    private function section6a3efc50576024eb46a96dc4baecc5d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

require([\'jquery\', \'theme_remui/slick\'], function($) {
    // return;
    $(\'.custom-teacher-section .slicker .teacher-item\').removeClass(\'col-12 col-md-6 col-lg-3\');
    $(\'.campus-life-section .content-cards\').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        autoplay: true,
        dots: true,
        autoplaySpeed: 5000,
        centerMode: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});

require([\'jquery\'], function($) {
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Sora&display=swap\'));
});


require([\'jquery\'], function($) {
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Sora&display=swap\'));
});

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/slick\'], function($) {
';
                $buffer .= $indent . '    // return;
';
                $buffer .= $indent . '    $(\'.custom-teacher-section .slicker .teacher-item\').removeClass(\'col-12 col-md-6 col-lg-3\');
';
                $buffer .= $indent . '    $(\'.campus-life-section .content-cards\').slick({
';
                $buffer .= $indent . '        infinite: true,
';
                $buffer .= $indent . '        slidesToShow: 3,
';
                $buffer .= $indent . '        slidesToScroll: 3,
';
                $buffer .= $indent . '        arrows: false,
';
                $buffer .= $indent . '        autoplay: true,
';
                $buffer .= $indent . '        dots: true,
';
                $buffer .= $indent . '        autoplaySpeed: 5000,
';
                $buffer .= $indent . '        centerMode: true,
';
                $buffer .= $indent . '        responsive: [{
';
                $buffer .= $indent . '            breakpoint: 768,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '                slidesToShow: 2,
';
                $buffer .= $indent . '                slidesToScroll: 2
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }, {
';
                $buffer .= $indent . '            breakpoint: 576,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '                slidesToShow: 1,
';
                $buffer .= $indent . '                slidesToScroll: 1
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }]
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Sora&display=swap\'));
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.googleapis.com\'));
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'preconnect\').attr(\'href\', \'https://fonts.gstatic.com\').prop(\'crossorigin\', true));
';
                $buffer .= $indent . '    $(\'body\').append($(document.createElement(\'link\')).attr(\'rel\', \'stylesheet\').attr(\'href\', \'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Sora&display=swap\'));
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
