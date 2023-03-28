<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/theme__100281/templates/page--node--12.html.twig */
class __TwigTemplate_f48b21f3e6e34226da82018d7d36d33b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 2
        $context["theme_path1"] = ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/content");
        // line 3
        echo "<div class=\"ttr_banner_menu\">
</div>
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
<a href=\"\" class=\"menuforeground0 \" target=\"_self\">
</a>
</div>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
</div>
<div class=\"ttr_images_container\">
</div>
</div>
</div>
</div>
</nav>
</div>
<div class=\"ttr_banner_menu\">
</div>
<div class=\"ttr_banner_header\">
</div>
<header id=\"ttr_header\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_header_inner\">
<div class=\"ttr_header_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
</div>
";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo " 
<div class=\"ttr_images_container\">
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape30", [], "any", false, false, true, 56)) {
            // line 58
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape30", [], "any", false, false, true, 58);
            // line 59
            if (($context["showcolumn"] ?? null)) {
                // line 60
                echo "<div class=\"ttr_headershape01\">
";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape30", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 65
        echo "<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_header_facebook \" target=\"_self\">
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_header_linkedin \" target=\"_self\">
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_header_twitter \" target=\"_self\">
</a>
<a href=\"https://www.instagram.com/templatetoaster/\" class=\"ttr_header_instagram \" target=\"https://www.instagram.com/templatetoaster/\">
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_header_youtube \" target=\"https://www.youtube.com/templatetoaster\">
</a>
</div>
</div>
</header>
<div class=\"ttr_banner_header\">
</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 84
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 84);
        // line 85
        if ((($context["type"] ?? null) == "page")) {
            // line 86
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 88
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 90
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 91
        if (($context["breadcrumb"] ?? null)) {
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 92, $this->source), "html", null, true);
            echo "
";
        }
        // line 94
        echo "<div style=\"clear:both;\">
</div>
";
        // line 96
        if (($context["tabs"] ?? null)) {
            // line 97
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 97, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
";
        // line 101
        if (($context["action_links"] ?? null)) {
            // line 102
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 102, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
<div class=\"margin_collapsetop\"></div>
</div> 
</div> 
<div style=\"clear:both;\">
</div>
</div>
</div>
<div class=\"footer-widget-area\">
<div class=\"footer-widget-area_left_border_image\">
<div class=\"footer-widget-area_right_border_image\">
<div class=\"footer-widget-area_inner\">
</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 124
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 124) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 124)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 124)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 124))) {
            // line 126
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 128
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 128);
            // line 129
            if (($context["showcolumn"] ?? null)) {
                // line 130
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 136
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 140
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 141
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 141);
            // line 142
            if (($context["showcolumn"] ?? null)) {
                // line 143
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 149
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 153
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 154
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 154);
            // line 155
            if (($context["showcolumn"] ?? null)) {
                // line 156
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 158
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 162
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 166
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 167
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 167);
            // line 168
            if (($context["showcolumn"] ?? null)) {
                // line 169
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 175
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 179
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 185
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 187
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 187) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 187)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 187))) {
            // line 188
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 190
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 190)) {
                // line 191
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 192
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 196
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 201
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 201)) {
                // line 202
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 203
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 207
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 212
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 212)) {
                // line 213
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 214
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 218
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 223
            echo "</div>
";
        }
        // line 225
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
";
        // line 231
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 231, $this->source), "html", null, true);
        echo "
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"https://www.instagram.com/templatetoaster/\" class=\"ttr_footer_instagram \" target=\"_self\" >
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_footer_youtube \" target=\"_self\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100281/templates/page--node--12.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 231,  390 => 225,  386 => 223,  379 => 218,  372 => 214,  369 => 213,  367 => 212,  360 => 207,  353 => 203,  350 => 202,  348 => 201,  341 => 196,  334 => 192,  331 => 191,  329 => 190,  325 => 188,  323 => 187,  319 => 185,  311 => 179,  305 => 175,  298 => 171,  294 => 169,  292 => 168,  290 => 167,  287 => 166,  281 => 162,  274 => 158,  270 => 156,  268 => 155,  266 => 154,  263 => 153,  257 => 149,  250 => 145,  246 => 143,  244 => 142,  242 => 141,  239 => 140,  233 => 136,  226 => 132,  222 => 130,  220 => 129,  218 => 128,  214 => 126,  212 => 124,  189 => 103,  184 => 102,  182 => 101,  178 => 100,  174 => 99,  168 => 97,  166 => 96,  162 => 94,  157 => 92,  155 => 91,  152 => 90,  148 => 88,  144 => 86,  142 => 85,  140 => 84,  119 => 65,  112 => 61,  109 => 60,  107 => 59,  105 => 58,  103 => 56,  98 => 53,  75 => 33,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100281/templates/page--node--12.html.twig", "C:\\xampp\\htdocs\\Dr\\themes\\theme__100281\\templates\\page--node--12.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 56);
        static $filters = array("escape" => 33);
        static $functions = array("active_theme_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
