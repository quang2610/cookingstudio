<?php

/* journal2/template/journal2/blog/post.twig */
class __TwigTemplate_092112a617402ac80a7dc6ba917412199ba0f11e0bdf31c24e87e249851f2fb2 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  <div id=\"content\" class=\"blog-post\">
    <h1 class=\"heading-title\">";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "

    <div class=\"post-stats comment-date\">
      ";
        // line 13
        if ((isset($context["post_author"]) ? $context["post_author"] : null)) {
            // line 14
            echo "        <span class=\"p-posted\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_posted_by_text", 1 => "Posted by"), "method");
            echo "</span>
        <span class=\"p-author\">";
            // line 15
            echo (isset($context["post_author"]) ? $context["post_author"] : null);
            echo "</span>
      ";
        }
        // line 17
        echo "      <span class=\"p-date\">";
        echo twig_date_format_filter($this->env, (isset($context["post_date"]) ? $context["post_date"] : null), (isset($context["date_format_short"]) ? $context["date_format_short"] : null));
        echo "</span>
      <span class=\"p-comment\">";
        // line 18
        echo twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null));
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_comment_text", 1 => "Comment(s)"), "method");
        echo "</span>
      ";
        // line 19
        if ((isset($context["post_categories"]) ? $context["post_categories"] : null)) {
            // line 20
            echo "        <span class=\"p-category\">
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_categories"]) ? $context["post_categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "            <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a><span>,</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </span>
      ";
        }
        // line 26
        echo "    </div>

    <div class=\"post-details\">
      ";
        // line 29
        echo (isset($context["post_content"]) ? $context["post_content"] : null);
        echo "

      ";
        // line 31
        if ((isset($context["post_tags"]) ? $context["post_tags"] : null)) {
            // line 32
            echo "        <div class=\"tags\">
          <b>";
            // line 33
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</b>

          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_tags"]) ? $context["post_tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 36
                echo "            <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "name", array());
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </div>
      ";
        }
        // line 40
        echo "
      ";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_blog_settings.share_this"), "method") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 42
            echo "        <div class=\"social share-this\">
          <div class=\"social-loaded\">
            <script type=\"text/javascript\">var switchTo5x = true;</script>
            <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
            <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 46
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "              <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          </div>
        </div>
      ";
        }
        // line 53
        echo "    </div>

    ";
        // line 55
        if ((isset($context["allow_comments"]) ? $context["allow_comments"] : null)) {
            // line 56
            echo "      <div class=\"comments\">
        ";
            // line 57
            if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null)) > 0)) {
                // line 58
                echo "          <h3>";
                echo twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null));
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_comment_text", 1 => "Comment(s)"), "method");
                echo "</h3>
        ";
            }
            // line 60
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 61
                echo "          <div class=\"comment\" data-comment-id=\"";
                echo $this->getAttribute($context["comment"], "comment_id", array());
                echo "\" data-has-form=\"false\">
            <a name=\"c";
                // line 62
                echo $this->getAttribute($context["comment"], "comment_id", array());
                echo "\"></a>
            ";
                // line 63
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "gravatar", array(0 => $this->getAttribute($context["comment"], "email", array()), 1 => (isset($context["default_author_image"]) ? $context["default_author_image"] : null), 2 => 70, 3 => "")));
                echo "

            <div class=\"main-comment\">
              <div class=\"user-name\">";
                // line 66
                echo $this->getAttribute($context["comment"], "name", array());
                echo ":</div>
              <div class=\"user-date\">";
                // line 67
                echo twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), (isset($context["date_format_short"]) ? $context["date_format_short"] : null));
                echo ", <span class=\"user-time\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), (isset($context["time_format"]) ? $context["time_format"] : null));
                if ($this->getAttribute($context["comment"], "website", array())) {
                    echo ", <span class=\"user-site\"><a href=\"";
                    echo $this->getAttribute($context["comment"], "website", array());
                    echo "\" target=\"_blank\" rel=\"nofollow\">";
                    echo $this->getAttribute($context["comment"], "website", array());
                    echo "</a></span>";
                }
                echo "</div>
              <a class=\"button reply-btn\">";
                // line 68
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_reply_button", 1 => "Reply"), "method");
                echo "</a>
              <p>";
                // line 69
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
            </div>

            ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "replies", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 73
                    echo "              <div class=\"reply\">
                ";
                    // line 74
                    echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "gravatar", array(0 => $this->getAttribute($context["reply"], "email", array()), 1 => (isset($context["default_author_image"]) ? $context["default_author_image"] : null), 2 => 70, 3 => "")));
                    echo "

                <div class=\"comment\">
                  <div class=\"user-name\">";
                    // line 77
                    echo $this->getAttribute($context["reply"], "name", array());
                    echo ":</div>
                  <div class=\"user-date\">";
                    // line 78
                    echo twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), (isset($context["date_format_short"]) ? $context["date_format_short"] : null));
                    echo ", <span class=\"user-time\">";
                    echo twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), (isset($context["time_format"]) ? $context["time_format"] : null));
                    echo "</span></div>
                  <p>";
                    // line 79
                    echo $this->getAttribute($context["reply"], "comment", array());
                    echo "</p>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
        <div class=\"post-comment\">
          <h3>";
            // line 87
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_leave_comment_text", 1 => "Leave a Comment"), "method");
            echo "</h3>
          <div class=\"comment-form\">
            <form>
              <div>
                <input type=\"text\" name=\"name\" placeholder=\"";
            // line 91
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_form_name", 1 => "Name"), "method");
            echo "\" value=\"";
            echo (isset($context["default_name"]) ? $context["default_name"] : null);
            echo "\"/>
                <input type=\"text\" name=\"email\" placeholder=\"";
            // line 92
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_form_email", 1 => "Email"), "method");
            echo "\" value=\"";
            echo (isset($context["default_email"]) ? $context["default_email"] : null);
            echo "\"/>
                <input type=\"text\" name=\"website\" placeholder=\"";
            // line 93
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_form_website", 1 => "Website"), "method");
            echo "\"/>
              </div>
              <div>
                <textarea name=\"comment\" placeholder=\"";
            // line 96
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_form_comment", 1 => "Comment"), "method");
            echo "\"></textarea>
              </div>
              <a class=\"button comment-submit\">";
            // line 98
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_form_submit", 1 => "Submit"), "method");
            echo "</a>
            </form>
          </div>
        </div>
      </div>
    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ((isset($context["related_products"]) ? $context["related_products"] : null)) {
            // line 106
            echo "      <div class=\"box related-products ";
            if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                echo " journal-carousel ";
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") == "top")) {
                    echo " arrows-top ";
                }
                echo " ";
            }
            echo "\">
        <div>
          <div class=\"box-heading\">";
            // line 108
            echo (isset($context["tab_related"]) ? $context["tab_related"] : null);
            echo "</div>
          <div class=\"box-content\">
            ";
            // line 110
            if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                // line 111
                echo "            <div class=\"swiper\">
              <div class=\"swiper-container\" ";
                // line 112
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                <div class=\"swiper-wrapper\">
                  ";
            }
            // line 115
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related_products"]) ? $context["related_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 116
                echo "                    <div class=\"product-grid-item ";
                echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                echo " ";
                if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                    echo " swiper-slide ";
                }
                echo " display-";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                echo "\">
                      <div class=\"product-thumb product-wrapper ";
                // line 117
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                        <div class=\"image ";
                // line 118
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                          <a href=\"";
                // line 119
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                            <img class=\"lazy first-image\" width=\"";
                // line 120
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                          </a>
                          ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 123
                    echo "                            <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                          ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 126
                    echo "                            <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                            <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 127
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                          ";
                }
                // line 129
                echo "                        </div>
                        <div class=\"product-details\">
                          <div class=\"caption\">
                            <h4 class=\"name\"><a href=\"";
                // line 132
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                            <p class=\"description\">";
                // line 133
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                            ";
                // line 134
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 135
                    echo "                              <div class=\"price\">
                                ";
                    // line 136
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 137
                        echo "                                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                                ";
                    } else {
                        // line 139
                        echo "                                  <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                ";
                    }
                    // line 141
                    echo "                              </div>
                            ";
                }
                // line 143
                echo "                            ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 144
                    echo "                              <div class=\"rating\">
                                ";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 146
                        echo "                                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 147
                            echo "                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                  ";
                        } else {
                            // line 149
                            echo "                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                  ";
                        }
                        // line 151
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                              </div>
                            ";
                }
                // line 154
                echo "                          </div>
                          <div class=\"button-group\">
                            ";
                // line 156
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 157
                    echo "                              <div class=\"cart enquiry-button\">
                                <a href=\"javascript:Journal.openPopup('";
                    // line 158
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                              </div>
                            ";
                } else {
                    // line 161
                    echo "                              <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                                <a onclick=\"addToCart('";
                    // line 162
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                              </div>
                            ";
                }
                // line 165
                echo "                            <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                            <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 166
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                  ";
            if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                // line 173
                echo "                </div>
              </div>
              ";
                // line 175
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none"))) {
                    // line 176
                    echo "                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
              ";
                }
                // line 179
                echo "              ";
            }
            // line 180
            echo "            </div>
            ";
            // line 181
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method"))) {
                // line 182
                echo "              <div class=\"swiper-pagination\"></div>
            ";
            }
            // line 184
            echo "          </div>
        </div>
      </div>
    ";
        }
        // line 188
        echo "    ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
  </div>
  ";
        // line 190
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 191
            echo "    ";
            $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_blog_settings.related_products_per_row.value"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count", 1 => 0), "method"))));
            // line 192
            echo "    ";
            $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(            // line 193
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(            // line 194
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(            // line 195
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(            // line 196
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(            // line 197
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
            // line 199
            echo "    <script>
      (function () {
        var grid = \$.parseJSON('";
            // line 201
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
          spaceBetween: parseInt('";
            // line 226
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "15"), "method");
            echo "', 10),
          pagination: ";
            // line 227
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method")) {
                echo " \$('.related-products .swiper-pagination') ";
            } else {
                echo " false ";
            }
            echo ",
          paginationClickable: true,
          nextButton: ";
            // line 229
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                echo " \$('.related-products .swiper-button-next') ";
            } else {
                echo " false ";
            }
            echo ",
          prevButton: ";
            // line 230
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                echo " \$('.related-products .swiper-button-prev') ";
            } else {
                echo " false ";
            }
            echo ",
          autoplay: ";
            // line 231
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_autoplay"), "method") > 0)) ? (4000) : ("false"));
            echo ",
          autoplayStopOnHover: ";
            // line 232
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_pause_on_hover"), "method")) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
          speed: 400,
          touchEventsTarget: ";
            // line 234
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_touchdrag"), "method")) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 235
            echo "        };

        \$('.related-products .swiper-container').swiper(opts);
      })();
    </script>
  ";
        }
        // line 241
        echo "  <script>
    function generateComment(\$form, cls, \$appendTo, callback) {
      \$form.find('.has-error').removeClass('has-error');
      \$.post('index.php?route=journal2/blog/comment&post_id=";
        // line 244
        echo (isset($context["post_id"]) ? $context["post_id"] : null);
        echo "', \$form.serializeArray(), function (response) {
        if (response.status === 'success') {

          if (response.data) {
            var html = '';
            html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.data.comment_id + '\" data-has-form=\"false\">';
            html += response.data.avatar;
            html += '<div class=\"main-comment\">';
            html += '<div class=\"user-name\">' + response.data.name + ':</div>';
            html += '<div class=\"user-date\">' + response.data.date + ', <span class=\"user-time\">' + response.data.time + '</span>';
            if (response.data.website) {
              html += ', <span class=\"user-site\"><a href=\"' + response.data.href + '\" target=\"_blank\">' + response.data.website + '</a></span>';
            }
            html += '</div>';
            html += '<a class=\"button reply-btn\">";
        // line 258
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_reply_button", 1 => "Reply"), "method");
        echo "</a>';
            html += '<p>' + response.data.comment + '</p>';
            html += '</div>';

            \$appendTo.before(html);
          }

          callback && callback(response.message);
        }

        if (response.status === 'error') {
          \$.each(response.errors, function (i, field) {
            \$form.find('[name=\"' + field + '\"]').addClass('has-error');
          });
        }
      }, 'json');
    }

    \$('.reply-btn').live('click', function () {
      var \$comment = \$(this).closest('.comment');
      if (\$comment.attr('data-has-form') === 'false') {
        var \$form = \$('.post-comment form').clone();
        \$form.find('.has-error').removeClass('has-error');
        \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
        \$form.find('a').removeClass('comment-submit').addClass('reply-submit');
        \$comment.append('<div class=\"reply-form\"><h3>";
        // line 283
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "blog_leave_reply_text", 1 => "Leave a Reply"), "method");
        echo "</h3><div class=\"comment-form\"><div><form>' + \$form.html() + '</form></div></div></div>');
        \$comment.attr('data-has-form', 'true');
      } else {
        \$comment.find('.reply-form').remove();
        \$comment.attr('data-has-form', 'false');
      }
    });


    \$('form .comment-submit').live('click', function () {
      var \$form = \$(this).closest('form');
      var \$comment_form = \$('.post-comment');
      generateComment(\$form, 'comment', \$comment_form, function (message) {
        \$comment_form.before('<div class=\"success\">' + message + '</div>');
        setTimeout(function () {
          \$('.comments .success').fadeOut(400);
        }, 2000);
        \$form[0].reset();
      });
    });

    \$('form .reply-submit').live('click', function () {
      var \$form = \$(this).closest('form');
      var \$reply_form = \$(this).closest('.comment').find('.reply-form');
      generateComment(\$form, 'reply', \$reply_form, function (message) {
        \$reply_form.before('<div class=\"success\">' + message + '</div>');
        setTimeout(function () {
          \$('.comments .success').fadeOut(400);
        }, 2000);
        \$form.closest('.comment').attr('data-has-form', 'false');
        \$reply_form.remove();
      });
    });
  </script>
</div>
";
        // line 318
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/blog/post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 318,  783 => 283,  755 => 258,  738 => 244,  733 => 241,  725 => 235,  719 => 234,  710 => 232,  706 => 231,  698 => 230,  690 => 229,  681 => 227,  677 => 226,  649 => 201,  645 => 199,  643 => 197,  642 => 196,  641 => 195,  640 => 194,  639 => 193,  637 => 192,  634 => 191,  632 => 190,  626 => 188,  620 => 184,  616 => 182,  614 => 181,  611 => 180,  608 => 179,  603 => 176,  601 => 175,  597 => 173,  594 => 172,  578 => 166,  569 => 165,  557 => 162,  550 => 161,  534 => 158,  531 => 157,  529 => 156,  525 => 154,  521 => 152,  515 => 151,  511 => 149,  507 => 147,  504 => 146,  500 => 145,  497 => 144,  494 => 143,  490 => 141,  482 => 139,  476 => 137,  474 => 136,  471 => 135,  469 => 134,  465 => 133,  459 => 132,  454 => 129,  445 => 127,  436 => 126,  433 => 125,  422 => 123,  418 => 122,  403 => 120,  393 => 119,  387 => 118,  381 => 117,  368 => 116,  363 => 115,  355 => 112,  352 => 111,  350 => 110,  345 => 108,  333 => 106,  331 => 105,  328 => 104,  319 => 98,  314 => 96,  308 => 93,  302 => 92,  296 => 91,  289 => 87,  285 => 85,  278 => 83,  268 => 79,  262 => 78,  258 => 77,  252 => 74,  249 => 73,  245 => 72,  239 => 69,  235 => 68,  222 => 67,  218 => 66,  212 => 63,  208 => 62,  203 => 61,  198 => 60,  190 => 58,  188 => 57,  185 => 56,  183 => 55,  179 => 53,  174 => 50,  162 => 48,  158 => 47,  154 => 46,  148 => 42,  146 => 41,  143 => 40,  139 => 38,  128 => 36,  124 => 35,  119 => 33,  116 => 32,  114 => 31,  109 => 29,  104 => 26,  100 => 24,  89 => 22,  85 => 21,  82 => 20,  80 => 19,  74 => 18,  69 => 17,  64 => 15,  59 => 14,  57 => 13,  49 => 10,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {{ column_left }}{{ column_right }}*/
/*   <div id="content" class="blog-post">*/
/*     <h1 class="heading-title">{{ heading_title }}</h1>{{ content_top }}*/
/* */
/*     <div class="post-stats comment-date">*/
/*       {% if post_author %}*/
/*         <span class="p-posted">{{ journal2.settings.get('blog_posted_by_text', 'Posted by') }}</span>*/
/*         <span class="p-author">{{ post_author }}</span>*/
/*       {% endif %}*/
/*       <span class="p-date">{{ post_date | date(date_format_short) }}</span>*/
/*       <span class="p-comment">{{ comments|length }} {{ journal2.settings.get('blog_comment_text', 'Comment(s)') }}</span>*/
/*       {% if post_categories %}*/
/*         <span class="p-category">*/
/*           {% for category in post_categories %}*/
/*             <a href="{{ category.href }}">{{ category.name }}</a><span>,</span>*/
/*           {% endfor %}*/
/*         </span>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="post-details">*/
/*       {{ post_content }}*/
/* */
/*       {% if post_tags %}*/
/*         <div class="tags">*/
/*           <b>{{ text_tags }}</b>*/
/* */
/*           {% for tag in post_tags %}*/
/*             <a href="{{ tag.href }}">{{ tag.name }}</a>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('config_blog_settings.share_this') and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*         <div class="social share-this">*/
/*           <div class="social-loaded">*/
/*             <script type="text/javascript">var switchTo5x = true;</script>*/
/*             <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*             <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*             {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*               <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     {% if allow_comments %}*/
/*       <div class="comments">*/
/*         {% if comments | length > 0 %}*/
/*           <h3>{{ comments | length }} {{ journal2.settings.get('blog_comment_text', 'Comment(s)') }}</h3>*/
/*         {% endif %}*/
/*         {% for comment in comments %}*/
/*           <div class="comment" data-comment-id="{{ comment.comment_id }}" data-has-form="false">*/
/*             <a name="c{{ comment.comment_id }}"></a>*/
/*             {{ staticCall('Journal2Utils', 'gravatar', [comment.email, default_author_image, 70, '']) }}*/
/* */
/*             <div class="main-comment">*/
/*               <div class="user-name">{{ comment.name }}:</div>*/
/*               <div class="user-date">{{ comment.date | date(date_format_short) }}, <span class="user-time">{{ comment.date | date(time_format) }}{% if comment.website %}, <span class="user-site"><a href="{{ comment.website }}" target="_blank" rel="nofollow">{{ comment.website }}</a></span>{% endif %}</div>*/
/*               <a class="button reply-btn">{{ journal2.settings.get('blog_reply_button', 'Reply') }}</a>*/
/*               <p>{{ comment.comment }}</p>*/
/*             </div>*/
/* */
/*             {% for reply in comment.replies %}*/
/*               <div class="reply">*/
/*                 {{ staticCall('Journal2Utils', 'gravatar', [reply.email, default_author_image, 70, '']) }}*/
/* */
/*                 <div class="comment">*/
/*                   <div class="user-name">{{ reply.name }}:</div>*/
/*                   <div class="user-date">{{ reply.date | date(date_format_short) }}, <span class="user-time">{{ reply.date | date(time_format) }}</span></div>*/
/*                   <p>{{ reply.comment }}</p>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="post-comment">*/
/*           <h3>{{ journal2.settings.get('blog_leave_comment_text', 'Leave a Comment') }}</h3>*/
/*           <div class="comment-form">*/
/*             <form>*/
/*               <div>*/
/*                 <input type="text" name="name" placeholder="{{ journal2.settings.get('blog_form_name', 'Name') }}" value="{{ default_name }}"/>*/
/*                 <input type="text" name="email" placeholder="{{ journal2.settings.get('blog_form_email', 'Email') }}" value="{{ default_email }}"/>*/
/*                 <input type="text" name="website" placeholder="{{ journal2.settings.get('blog_form_website', 'Website') }}"/>*/
/*               </div>*/
/*               <div>*/
/*                 <textarea name="comment" placeholder="{{ journal2.settings.get('blog_form_comment', 'Comment') }}"></textarea>*/
/*               </div>*/
/*               <a class="button comment-submit">{{ journal2.settings.get('blog_form_submit', 'Submit') }}</a>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if related_products %}*/
/*       <div class="box related-products {% if carousel %} journal-carousel {% if journal2.settings.get('related_products_carousel_arrows') == 'top' %} arrows-top {% endif %} {% endif %}">*/
/*         <div>*/
/*           <div class="box-heading">{{ tab_related }}</div>*/
/*           <div class="box-content">*/
/*             {% if carousel %}*/
/*             <div class="swiper">*/
/*               <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% endif %}*/
/*                   {% for product in related_products %}*/
/*                     <div class="product-grid-item {{ grid_classes }} {% if carousel %} swiper-slide {% endif %} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                       <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                         <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                           <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                             <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                           </a>*/
/*                           {% for label, name in product.labels %}*/
/*                             <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                           {% endfor %}*/
/*                           {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                             <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                             <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <div class="product-details">*/
/*                           <div class="caption">*/
/*                             <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                             <p class="description">{{ product.description }}</p>*/
/*                             {% if product.price %}*/
/*                               <div class="price">*/
/*                                 {% if not product.special %}*/
/*                                   {{ product.price }}*/
/*                                 {% else %}*/
/*                                   <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                                 {% endif %}*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if product.rating %}*/
/*                               <div class="rating">*/
/*                                 {% for i in 1..5 %}*/
/*                                   {% if product.rating < i %}*/
/*                                     <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                   {% else %}*/
/*                                     <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                   {% endif %}*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="button-group">*/
/*                             {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                               <div class="cart enquiry-button">*/
/*                                 <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                               </div>*/
/*                             {% else %}*/
/*                               <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                 <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                             <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                   {% if carousel %}*/
/*                 </div>*/
/*               </div>*/
/*               {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_arrows') != 'none' %}*/
/*                 <div class="swiper-button-next"></div>*/
/*                 <div class="swiper-button-prev"></div>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_bullets') %}*/
/*               <div class="swiper-pagination"></div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {{ content_bottom }}*/
/*   </div>*/
/*   {% if carousel %}*/
/*     {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('config_blog_settings.related_products_per_row.value'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count', 0)]) %}*/
/*     {% set grid = [*/
/*     [0, grid.xs],*/
/*     [470, grid.sm],*/
/*     [760, grid.md],*/
/*     [980, grid.lg],*/
/*     [1100, grid.xl],*/
/*     ] %}*/
/*     <script>*/
/*       (function () {*/
/*         var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*         var breakpoints = {*/
/*           470: {*/
/*             slidesPerView: grid[0][1],*/
/*             slidesPerGroup: grid[0][1]*/
/*           },*/
/*           760: {*/
/*             slidesPerView: grid[1][1],*/
/*             slidesPerGroup: grid[1][1]*/
/*           },*/
/*           980: {*/
/*             slidesPerView: grid[2][1],*/
/*             slidesPerGroup: grid[2][1]*/
/*           },*/
/*           1220: {*/
/*             slidesPerView: grid[3][1],*/
/*             slidesPerGroup: grid[3][1]*/
/*           }*/
/*         };*/
/* */
/*         var opts = {*/
/*           slidesPerView: grid[4][1],*/
/*           slidesPerGroup: grid[4][1],*/
/*           breakpoints: breakpoints,*/
/*           spaceBetween: parseInt('{{ journal2.settings.get('product_grid_item_spacing', '15') }}', 10),*/
/*           pagination: {% if journal2.settings.get('related_products_carousel_bullets') %} $('.related-products .swiper-pagination') {% else %} false {% endif %},*/
/*           paginationClickable: true,*/
/*           nextButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-next') {% else %} false {% endif %},*/
/*           prevButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-prev') {% else %} false {% endif %},*/
/*           autoplay: {{ journal2.settings.get('related_products_carousel_autoplay') > 0 ? 4000 : 'false' }},*/
/*           autoplayStopOnHover: {% if journal2.settings.get('related_products_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*           speed: 400,*/
/*           touchEventsTarget: {% if journal2.settings.get('related_products_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*         };*/
/* */
/*         $('.related-products .swiper-container').swiper(opts);*/
/*       })();*/
/*     </script>*/
/*   {% endif %}*/
/*   <script>*/
/*     function generateComment($form, cls, $appendTo, callback) {*/
/*       $form.find('.has-error').removeClass('has-error');*/
/*       $.post('index.php?route=journal2/blog/comment&post_id={{ post_id }}', $form.serializeArray(), function (response) {*/
/*         if (response.status === 'success') {*/
/* */
/*           if (response.data) {*/
/*             var html = '';*/
/*             html += '<div class="' + cls + '" data-comment-id="' + response.data.comment_id + '" data-has-form="false">';*/
/*             html += response.data.avatar;*/
/*             html += '<div class="main-comment">';*/
/*             html += '<div class="user-name">' + response.data.name + ':</div>';*/
/*             html += '<div class="user-date">' + response.data.date + ', <span class="user-time">' + response.data.time + '</span>';*/
/*             if (response.data.website) {*/
/*               html += ', <span class="user-site"><a href="' + response.data.href + '" target="_blank">' + response.data.website + '</a></span>';*/
/*             }*/
/*             html += '</div>';*/
/*             html += '<a class="button reply-btn">{{ journal2.settings.get('blog_reply_button', 'Reply') }}</a>';*/
/*             html += '<p>' + response.data.comment + '</p>';*/
/*             html += '</div>';*/
/* */
/*             $appendTo.before(html);*/
/*           }*/
/* */
/*           callback && callback(response.message);*/
/*         }*/
/* */
/*         if (response.status === 'error') {*/
/*           $.each(response.errors, function (i, field) {*/
/*             $form.find('[name="' + field + '"]').addClass('has-error');*/
/*           });*/
/*         }*/
/*       }, 'json');*/
/*     }*/
/* */
/*     $('.reply-btn').live('click', function () {*/
/*       var $comment = $(this).closest('.comment');*/
/*       if ($comment.attr('data-has-form') === 'false') {*/
/*         var $form = $('.post-comment form').clone();*/
/*         $form.find('.has-error').removeClass('has-error');*/
/*         $form.append('<input type="hidden" name="parent_id" value="' + $comment.attr('data-comment-id') + '" />');*/
/*         $form.find('a').removeClass('comment-submit').addClass('reply-submit');*/
/*         $comment.append('<div class="reply-form"><h3>{{ journal2.settings.get('blog_leave_reply_text', 'Leave a Reply') }}</h3><div class="comment-form"><div><form>' + $form.html() + '</form></div></div></div>');*/
/*         $comment.attr('data-has-form', 'true');*/
/*       } else {*/
/*         $comment.find('.reply-form').remove();*/
/*         $comment.attr('data-has-form', 'false');*/
/*       }*/
/*     });*/
/* */
/* */
/*     $('form .comment-submit').live('click', function () {*/
/*       var $form = $(this).closest('form');*/
/*       var $comment_form = $('.post-comment');*/
/*       generateComment($form, 'comment', $comment_form, function (message) {*/
/*         $comment_form.before('<div class="success">' + message + '</div>');*/
/*         setTimeout(function () {*/
/*           $('.comments .success').fadeOut(400);*/
/*         }, 2000);*/
/*         $form[0].reset();*/
/*       });*/
/*     });*/
/* */
/*     $('form .reply-submit').live('click', function () {*/
/*       var $form = $(this).closest('form');*/
/*       var $reply_form = $(this).closest('.comment').find('.reply-form');*/
/*       generateComment($form, 'reply', $reply_form, function (message) {*/
/*         $reply_form.before('<div class="success">' + message + '</div>');*/
/*         setTimeout(function () {*/
/*           $('.comments .success').fadeOut(400);*/
/*         }, 2000);*/
/*         $form.closest('.comment').attr('data-has-form', 'false');*/
/*         $reply_form.remove();*/
/*       });*/
/*     });*/
/*   </script>*/
/* </div>*/
/* {{ footer }}*/
/* */
