<?php

/* journal2/template/journal2/headers/center.twig */
class __TwigTemplate_da9aa020aa40b9e3592daf9b5509930d66fa2c4030f7a7dd11d37028b9f30f18 extends Twig_Template
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
        echo "<header class=\"journal-header-center\">
  <div class=\"header\">
    <div class=\"journal-top-header j-min z-1\"></div>
    <div class=\"journal-menu-bg z-0\"></div>
    <div class=\"journal-center-bg j-100 z-0\"></div>
    <div id=\"header\" class=\"journal-header z-2\">
      <div class=\"header-assets top-bar\">
        <div class=\"journal-links j-min xs-100 sm-100 md-50 lg-50 xl-50\">
          <div class=\"links\">
            <ul class=\"top-menu\">
              ";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_primary_menu"), "method");
        echo "
            </ul>
          </div>
        </div>
        ";
        // line 15
        if ((isset($context["language"]) ? $context["language"] : null)) {
            // line 16
            echo "          <div class=\"journal-language j-min\">
            ";
            // line 17
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
          </div>
        ";
        }
        // line 20
        echo "        ";
        if ((isset($context["currency"]) ? $context["currency"] : null)) {
            // line 21
            echo "          <div class=\"journal-currency j-min\">
            ";
            // line 22
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
          </div>
        ";
        }
        // line 25
        echo "        <div class=\"journal-secondary j-min xs-100 sm-100 md-50 lg-50 xl-50\">
          <div class=\"links\">
            <ul class=\"top-menu\">
              ";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_secondary_menu"), "method");
        echo "
            </ul>
          </div>
        </div>
      </div>
      <div class=\"header-assets\">
        <div class=\"journal-search j-min xs-100 sm-50 md-25 lg-25 xl-25\">
          ";
        // line 35
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>
        <div class=\"journal-logo j-100 xs-100 sm-100 md-50 lg-50 xl-50\">
          ";
        // line 38
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 39
            echo "            <div id=\"logo\">
              <a href=\"";
            // line 40
            echo twig_replace_filter((isset($context["home"]) ? $context["home"] : null), "index.php?route=common/home", "");
            echo "\">
                ";
            // line 41
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getLogo", array(0 => (isset($context["config"]) ? $context["config"] : null))));
            echo "
              </a>
            </div>
          ";
        }
        // line 45
        echo "        </div>
        <div class=\"journal-cart j-min xs-100 sm-50 md-25 lg-25 xl-25\">
          ";
        // line 47
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
        </div>
      </div>
      <div class=\"journal-menu j-min xs-100 sm-100 md-100 lg-100 xl-100\">
        ";
        // line 51
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_mega_menu"), "method");
        echo "
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/headers/center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  102 => 47,  98 => 45,  91 => 41,  87 => 40,  84 => 39,  82 => 38,  76 => 35,  66 => 28,  61 => 25,  55 => 22,  52 => 21,  49 => 20,  43 => 17,  40 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }
}
/* <header class="journal-header-center">*/
/*   <div class="header">*/
/*     <div class="journal-top-header j-min z-1"></div>*/
/*     <div class="journal-menu-bg z-0"></div>*/
/*     <div class="journal-center-bg j-100 z-0"></div>*/
/*     <div id="header" class="journal-header z-2">*/
/*       <div class="header-assets top-bar">*/
/*         <div class="journal-links j-min xs-100 sm-100 md-50 lg-50 xl-50">*/
/*           <div class="links">*/
/*             <ul class="top-menu">*/
/*               {{ journal2.settings.get('config_primary_menu') }}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         {% if language %}*/
/*           <div class="journal-language j-min">*/
/*             {{ language }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if currency %}*/
/*           <div class="journal-currency j-min">*/
/*             {{ currency }}*/
/*           </div>*/
/*         {% endif %}*/
/*         <div class="journal-secondary j-min xs-100 sm-100 md-50 lg-50 xl-50">*/
/*           <div class="links">*/
/*             <ul class="top-menu">*/
/*               {{ journal2.settings.get('config_secondary_menu') }}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="header-assets">*/
/*         <div class="journal-search j-min xs-100 sm-50 md-25 lg-25 xl-25">*/
/*           {{ search }}*/
/*         </div>*/
/*         <div class="journal-logo j-100 xs-100 sm-100 md-50 lg-50 xl-50">*/
/*           {% if logo %}*/
/*             <div id="logo">*/
/*               <a href="{{ home | replace('index.php?route=common/home', '') }}">*/
/*                 {{ staticCall('Journal2Utils', 'getLogo', [config]) }}*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="journal-cart j-min xs-100 sm-50 md-25 lg-25 xl-25">*/
/*           {{ cart }}*/
/*         </div>*/
/*       </div>*/
/*       <div class="journal-menu j-min xs-100 sm-100 md-100 lg-100 xl-100">*/
/*         {{ journal2.settings.get('config_mega_menu') }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
