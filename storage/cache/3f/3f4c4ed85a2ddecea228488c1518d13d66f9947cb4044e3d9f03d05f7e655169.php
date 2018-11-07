<?php

/* journal2/template/journal2/module/blog_posts.twig */
class __TwigTemplate_fd3ba5b7dd0494c6d27212fdaee93f3960027332da047133072c88796c3f9aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"journal-blog-posts-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-blog-posts-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box post-module ";
        if ( !(isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            echo " no-heading ";
        }
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            echo " journal-carousel ";
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                echo " bullets-on ";
            }
            echo " ";
            if (((isset($context["arrows"]) ? $context["arrows"] : null) == "top")) {
                echo " arrows-top ";
            }
            echo " ";
        }
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div>
    ";
        // line 3
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 4
            echo "      <div class=\"box-heading\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
    ";
        }
        // line 6
        echo "    <div class=\"box-post box-content posts ";
        if (((isset($context["display"]) ? $context["display"] : null) == "list")) {
            echo " blog-list-view ";
        }
        echo "\">
      ";
        // line 7
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 8
            echo "        <div class=\"swiper\">
          <div class=\"swiper-container\" ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                echo " dir=\"rtl\" ";
            }
            echo ">
            <div class=\"swiper-wrapper\">
              ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 12
                echo "                <div class=\"post-item ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo " swiper-slide\">
                  <div class=\"post-wrapper\">
                    ";
                // line 14
                if ($this->getAttribute($context["post"], "image", array())) {
                    // line 15
                    echo "                      <a class=\"post-image\" href=\"";
                    echo $this->getAttribute($context["post"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["post"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["post"], "name", array());
                    echo "\"/></a>
                    ";
                }
                // line 17
                echo "                    <div class=\"post-item-details post-content-align";
                echo (isset($context["content_align"]) ? $context["content_align"] : null);
                echo "\">
                      <h2><a href=\"";
                // line 18
                echo $this->getAttribute($context["post"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["post"], "name", array());
                echo "</a></h2>
                      <div class=\"comment-date\">
                        <span class=\"p-author\">";
                // line 20
                echo $this->getAttribute($context["post"], "author", array());
                echo "</span>
                        <span class=\"p-date\">";
                // line 21
                echo $this->getAttribute($context["post"], "date", array());
                echo "</span>
                        <span class=\"p-comment\">";
                // line 22
                echo $this->getAttribute($context["post"], "comments", array());
                echo "</span>
                      </div>
                      ";
                // line 24
                if ($this->getAttribute($context["post"], "description", array())) {
                    // line 25
                    echo "                        <div class=\"post-text\"><span>";
                    echo $this->getAttribute($context["post"], "description", array());
                    echo "</span></div>
                      ";
                }
                // line 27
                echo "                      <div class=\"post-button\">
                        <a class=\"post-view-more button\" href=\"";
                // line 28
                echo $this->getAttribute($context["post"], "href", array());
                echo "\"><i class=\"post-button-left-icon\"></i>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_button_read_more", 1 => "Read More"), "method");
                echo "<i class=\"post-button-right-icon\"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </div>
          </div>
          ";
            // line 36
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                // line 37
                echo "            <div class=\"swiper-button-next\"></div>
            <div class=\"swiper-button-prev\"></div>
          ";
            }
            // line 40
            echo "        </div>
        ";
            // line 41
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                // line 42
                echo "          <div class=\"swiper-pagination\"></div>
        ";
            }
            // line 44
            echo "      ";
        } else {
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 46
                echo "          <div class=\"post-item ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo "\">
            <div class=\"post-wrapper\">
              ";
                // line 48
                if ($this->getAttribute($context["post"], "image", array())) {
                    // line 49
                    echo "                <a class=\"post-image\" href=\"";
                    echo $this->getAttribute($context["post"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["post"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["post"], "name", array());
                    echo "\"/></a>
              ";
                }
                // line 51
                echo "              <div class=\"post-item-details\" style=\"text-align:";
                echo (isset($context["content_align"]) ? $context["content_align"] : null);
                echo "\">
                <h2><a href=\"";
                // line 52
                echo $this->getAttribute($context["post"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["post"], "name", array());
                echo "</a></h2>
                <div class=\"comment-date\">
                  <span class=\"p-author\">";
                // line 54
                echo $this->getAttribute($context["post"], "author", array());
                echo "</span>
                  <span class=\"p-date\">";
                // line 55
                echo $this->getAttribute($context["post"], "date", array());
                echo "</span>
                  <span class=\"p-comment\">";
                // line 56
                echo $this->getAttribute($context["post"], "comments", array());
                echo "</span>
                </div>
                ";
                // line 58
                if ($this->getAttribute($context["post"], "description", array())) {
                    // line 59
                    echo "                  <div class=\"post-text\"><span>";
                    echo $this->getAttribute($context["post"], "description", array());
                    echo "</span></div>
                ";
                }
                // line 61
                echo "                <div class=\"post-button\">
                  <a class=\"post-view-more button\" href=\"";
                // line 62
                echo $this->getAttribute($context["post"], "href", array());
                echo "\"><i class=\"post-button-left-icon\"></i>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_button_read_more", 1 => "Read More"), "method");
                echo "<i class=\"post-button-right-icon\"></i></a>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      ";
        }
        // line 69
        echo "    </div>
  </div>
</div>
<script>
  ";
        // line 73
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 74
            echo "  (function () {
    var grid = \$.parseJSON('";
            // line 75
            echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
            echo "');

    var breakpoints = {
      470: {
        slidesPerView: grid[0][1],
        slidesPerGroup: grid[0][1]
      },
      760: {
        slidesPerView: grid[1][1],
        slidesPerGroup: grid[1][1]
      },
      980: {
        slidesPerView: grid[2][1],
        slidesPerGroup: grid[2][1]
      },
      1220: {
        slidesPerView: grid[3][1],
        slidesPerGroup: grid[3][1]
      }
    };

    var opts = {
      slidesPerView: grid[4][1],
      slidesPerGroup: grid[4][1],
      breakpoints: breakpoints,
      spaceBetween: 20,
      pagination: ";
            // line 101
            if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                echo " \$('#journal-blog-posts-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-pagination') ";
            } else {
                echo " false ";
            }
            echo ",
      paginationClickable: true,
      nextButton: ";
            // line 103
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#journal-blog-posts-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-next') ";
            } else {
                echo " false ";
            }
            echo ",
      prevButton: ";
            // line 104
            if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                echo " \$('#journal-blog-posts-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .swiper-button-prev') ";
            } else {
                echo " false ";
            }
            echo ",
      autoplay: ";
            // line 105
            echo (((isset($context["autoplay"]) ? $context["autoplay"] : null)) ? ((isset($context["autoplay"]) ? $context["autoplay"] : null)) : (0));
            echo ",
      speed: ";
            // line 106
            echo (isset($context["slide_speed"]) ? $context["slide_speed"] : null);
            echo ",
      touchEventsTarget: ";
            // line 107
            if ((isset($context["touch_drag"]) ? $context["touch_drag"] : null)) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 108
            echo "    };

    \$('#journal-blog-posts-";
            // line 110
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .swiper-container').swiper(opts);
  })();
  ";
        }
        // line 113
        echo "  if (!Journal.isFlexboxSupported) {
    Journal.equalHeight(\$('#journal-blog-posts-";
        // line 114
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .post-wrapper'), '.post-item-details h2 a');
    ";
        // line 115
        if ((isset($context["show_description"]) ? $context["show_description"] : null)) {
            // line 116
            echo "    Journal.equalHeight(\$('#journal-blog-posts-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .post-wrapper'), '.post-text span');
    ";
        }
        // line 118
        echo "  }
</script>

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/blog_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 118,  351 => 116,  349 => 115,  345 => 114,  342 => 113,  336 => 110,  332 => 108,  326 => 107,  322 => 106,  318 => 105,  308 => 104,  298 => 103,  287 => 101,  258 => 75,  255 => 74,  253 => 73,  247 => 69,  244 => 68,  230 => 62,  227 => 61,  221 => 59,  219 => 58,  214 => 56,  210 => 55,  206 => 54,  199 => 52,  194 => 51,  184 => 49,  182 => 48,  176 => 46,  171 => 45,  168 => 44,  164 => 42,  162 => 41,  159 => 40,  154 => 37,  152 => 36,  148 => 34,  134 => 28,  131 => 27,  125 => 25,  123 => 24,  118 => 22,  114 => 21,  110 => 20,  103 => 18,  98 => 17,  88 => 15,  86 => 14,  80 => 12,  76 => 11,  69 => 9,  66 => 8,  64 => 7,  57 => 6,  51 => 4,  49 => 3,  19 => 1,);
    }
}
/* <div id="journal-blog-posts-{{ module }}" class="journal-blog-posts-{{ module_id }} box post-module {% if not heading_title %} no-heading {% endif %} {{ disable_on_classes | join(' ') }} {% if carousel %} journal-carousel {% if bullets %} bullets-on {% endif %} {% if arrows == 'top' %} arrows-top {% endif %} {% endif %} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <div>*/
/*     {% if heading_title %}*/
/*       <div class="box-heading">{{ heading_title }}</div>*/
/*     {% endif %}*/
/*     <div class="box-post box-content posts {% if display == 'list' %} blog-list-view {% endif %}">*/
/*       {% if carousel %}*/
/*         <div class="swiper">*/
/*           <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*             <div class="swiper-wrapper">*/
/*               {% for post in posts %}*/
/*                 <div class="post-item {{ grid_classes }} swiper-slide">*/
/*                   <div class="post-wrapper">*/
/*                     {% if post.image %}*/
/*                       <a class="post-image" href="{{ post.href }}"><img src="{{ post.image }}" alt="{{ post.name }}"/></a>*/
/*                     {% endif %}*/
/*                     <div class="post-item-details post-content-align{{ content_align }}">*/
/*                       <h2><a href="{{ post.href }}">{{ post.name }}</a></h2>*/
/*                       <div class="comment-date">*/
/*                         <span class="p-author">{{ post.author }}</span>*/
/*                         <span class="p-date">{{ post.date }}</span>*/
/*                         <span class="p-comment">{{ post.comments }}</span>*/
/*                       </div>*/
/*                       {% if post.description %}*/
/*                         <div class="post-text"><span>{{ post.description }}</span></div>*/
/*                       {% endif %}*/
/*                       <div class="post-button">*/
/*                         <a class="post-view-more button" href="{{ post.href }}"><i class="post-button-left-icon"></i>{{ journal2.settings.get('blog_button_read_more', 'Read More') }}<i class="post-button-right-icon"></i></a>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*           {% if arrows != 'none' %}*/
/*             <div class="swiper-button-next"></div>*/
/*             <div class="swiper-button-prev"></div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% if bullets %}*/
/*           <div class="swiper-pagination"></div>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         {% for post in posts %}*/
/*           <div class="post-item {{ grid_classes }}">*/
/*             <div class="post-wrapper">*/
/*               {% if post.image %}*/
/*                 <a class="post-image" href="{{ post.href }}"><img src="{{ post.image }}" alt="{{ post.name }}"/></a>*/
/*               {% endif %}*/
/*               <div class="post-item-details" style="text-align:{{ content_align }}">*/
/*                 <h2><a href="{{ post.href }}">{{ post.name }}</a></h2>*/
/*                 <div class="comment-date">*/
/*                   <span class="p-author">{{ post.author }}</span>*/
/*                   <span class="p-date">{{ post.date }}</span>*/
/*                   <span class="p-comment">{{ post.comments }}</span>*/
/*                 </div>*/
/*                 {% if post.description %}*/
/*                   <div class="post-text"><span>{{ post.description }}</span></div>*/
/*                 {% endif %}*/
/*                 <div class="post-button">*/
/*                   <a class="post-view-more button" href="{{ post.href }}"><i class="post-button-left-icon"></i>{{ journal2.settings.get('blog_button_read_more', 'Read More') }}<i class="post-button-right-icon"></i></a>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   {% if carousel %}*/
/*   (function () {*/
/*     var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*     var breakpoints = {*/
/*       470: {*/
/*         slidesPerView: grid[0][1],*/
/*         slidesPerGroup: grid[0][1]*/
/*       },*/
/*       760: {*/
/*         slidesPerView: grid[1][1],*/
/*         slidesPerGroup: grid[1][1]*/
/*       },*/
/*       980: {*/
/*         slidesPerView: grid[2][1],*/
/*         slidesPerGroup: grid[2][1]*/
/*       },*/
/*       1220: {*/
/*         slidesPerView: grid[3][1],*/
/*         slidesPerGroup: grid[3][1]*/
/*       }*/
/*     };*/
/* */
/*     var opts = {*/
/*       slidesPerView: grid[4][1],*/
/*       slidesPerGroup: grid[4][1],*/
/*       breakpoints: breakpoints,*/
/*       spaceBetween: 20,*/
/*       pagination: {% if bullets %} $('#journal-blog-posts-{{ module }} .swiper-pagination') {% else %} false {% endif %},*/
/*       paginationClickable: true,*/
/*       nextButton: {% if arrows != 'none' %} $('#journal-blog-posts-{{ module }} .swiper-button-next') {% else %} false {% endif %},*/
/*       prevButton: {% if arrows != 'none' %} $('#journal-blog-posts-{{ module }} .swiper-button-prev') {% else %} false {% endif %},*/
/*       autoplay: {{ autoplay ? autoplay : 0 }},*/
/*       speed: {{ slide_speed }},*/
/*       touchEventsTarget: {% if touch_drag %} 'container' {% else %} false {% endif %}*/
/*     };*/
/* */
/*     $('#journal-blog-posts-{{ module }} .swiper-container').swiper(opts);*/
/*   })();*/
/*   {% endif %}*/
/*   if (!Journal.isFlexboxSupported) {*/
/*     Journal.equalHeight($('#journal-blog-posts-{{ module }} .post-wrapper'), '.post-item-details h2 a');*/
/*     {% if show_description %}*/
/*     Journal.equalHeight($('#journal-blog-posts-{{ module }} .post-wrapper'), '.post-text span');*/
/*     {% endif %}*/
/*   }*/
/* </script>*/
/* */
/* */
