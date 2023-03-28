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

/* themes/theme__100203/templates/page--node--11.html.twig */
class __TwigTemplate_8296b3a523239831ec9e84f80d3f0bee extends \Twig\Template
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
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 48
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 48);
        // line 49
        if ((($context["type"] ?? null) == "page")) {
            // line 50
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 52
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 54
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 55
        if (($context["breadcrumb"] ?? null)) {
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 56, $this->source), "html", null, true);
            echo "
";
        }
        // line 58
        echo "<div style=\"clear:both;\">
</div>
";
        // line 60
        if (($context["tabs"] ?? null)) {
            // line 61
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 61, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
";
        // line 65
        if (($context["action_links"] ?? null)) {
            // line 66
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 66, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
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
        // line 88
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 88) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 88)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 88)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 88))) {
            // line 90
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 92
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 92);
            // line 93
            if (($context["showcolumn"] ?? null)) {
                // line 94
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 100
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 104
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 105
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 105);
            // line 106
            if (($context["showcolumn"] ?? null)) {
                // line 107
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 113
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 117
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 118
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 118);
            // line 119
            if (($context["showcolumn"] ?? null)) {
                // line 120
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 126
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 130
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 131
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 131);
            // line 132
            if (($context["showcolumn"] ?? null)) {
                // line 133
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 139
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-3 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 143
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 149
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 151
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 151) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 151)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 151))) {
            // line 152
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 154
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 154)) {
                // line 155
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 156
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 160
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 165)) {
                // line 166
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 171
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 176
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 176)) {
                // line 177
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 182
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 187
            echo "</div>
";
        }
        // line 189
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\"> Drupal Theme </a>
<span id=\"ttr_footer_designed_by\"> Designed With TemplateToaster </span>
</div>
";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 199, $this->source), "html", null, true);
        echo "
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"https://plus.google.com/+TemplateToaster\" class=\"ttr_footer_instagram \" target=\"_self\" >
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
        return "themes/theme__100203/templates/page--node--11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 199,  343 => 189,  339 => 187,  332 => 182,  325 => 178,  322 => 177,  320 => 176,  313 => 171,  306 => 167,  303 => 166,  301 => 165,  294 => 160,  287 => 156,  284 => 155,  282 => 154,  278 => 152,  276 => 151,  272 => 149,  264 => 143,  258 => 139,  251 => 135,  247 => 133,  245 => 132,  243 => 131,  240 => 130,  234 => 126,  227 => 122,  223 => 120,  221 => 119,  219 => 118,  216 => 117,  210 => 113,  203 => 109,  199 => 107,  197 => 106,  195 => 105,  192 => 104,  186 => 100,  179 => 96,  175 => 94,  173 => 93,  171 => 92,  167 => 90,  165 => 88,  142 => 67,  137 => 66,  135 => 65,  131 => 64,  127 => 63,  121 => 61,  119 => 60,  115 => 58,  110 => 56,  108 => 55,  105 => 54,  101 => 52,  97 => 50,  95 => 49,  93 => 48,  75 => 33,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100203/templates/page--node--11.html.twig", "C:\\xampp\\htdocs\\Dr\\themes\\theme__100203\\templates\\page--node--11.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 49);
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
