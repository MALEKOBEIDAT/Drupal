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

/* themes/theme__100281/templates/page--node.html.twig */
class __TwigTemplate_d1f124771512a76e14bbd9a0bb3f6736 extends \Twig\Template
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
        echo "<div class=\"ttr_banner_slideshow\">
";
        // line 5
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 5))) {
            // line 7
            echo "<div class=\"ttr_banner_slideshow_inner_above_widget_container\">
<div class=\"ttr_banner_slideshow_inner_above0 container row\">
";
            // line 9
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 9);
            // line 10
            if (($context["showcolumn"] ?? null)) {
                // line 11
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn1\">
";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 17
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 21
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 22
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 22);
            // line 23
            if (($context["showcolumn"] ?? null)) {
                // line 24
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn2\">
";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 30
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 34
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 35
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 35);
            // line 36
            if (($context["showcolumn"] ?? null)) {
                // line 37
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn3\">
";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 43
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 47
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 48
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 48);
            // line 49
            if (($context["showcolumn"] ?? null)) {
                // line 50
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn4\">
";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 56
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 60
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 66
        echo "</div>
<div class=\"ttr_slideshow\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_slideshow_inner\">
<ul>
<li id=\"Slide0\" class=\"ttr_slide\" data-slideEffect=\"None\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"None\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
</div>
</li>
<li id=\"Slide1\" class=\"ttr_slide\" data-slideEffect=\"None\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"None\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
</div>
</li>
</ul>
</div>
<div class=\"ttr_slideshow_in\">
<div class=\"margin_collapsetop\"></div>
<div class=\"innermenu\"><div id=\"ttr_menu\"> 
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
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
</div>
<div class=\"ttr_images_container\">
</div>
</div>
</div>
</div>
</nav>
</div>

</div>
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\">
<div class=\"ttr_stickyslideshowshape1\">
<div class=\"html_content\"><p style=\"text-align:Right; display:block; line-height:5.75em;\"><span style=\"font-family:'Montserrat','Arial';font-weight:900;font-size:4em;color:rgba(255,255,255,1);\">Best Medical Clinic</span></p><p style=\"text-align:Right; display:block; line-height:3.11em;\"><span style=\"font-family:'Raleway','Arial';font-size:2.143em;color:rgba(255,255,255,1);\">Bringing Health To Life For The Whole Family...</span></p><p style=\"margin:20px 0px 5px 0px;text-align:Right; display:block; line-height:1.9em;\"><span><br style=\"color:rgba(0,0,0,1);\" /><a href=\"https://templatetoaster.com\" target=\"_self\" class=\"btn btn-md btn-default\">Get Appointments</a></span></p></div>
</div>
</div>
<div class=\"left-button\">
</div>
<div id=\"nav\"></div>
<div class=\"ttr_slideshow_logo\">
</div>
<div class=\"right-button\">
</div>
</div>
</div>
</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 144
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 144) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 144)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 144)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 144))) {
            // line 146
            echo "<div class=\"ttr_banner_slideshow_inner_below_widget_container\">
<div class=\"ttr_banner_slideshow_inner_below0 container row\">
";
            // line 148
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 148);
            // line 149
            if (($context["showcolumn"] ?? null)) {
                // line 150
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn1\">
";
                // line 152
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 156
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 160
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 161
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 161);
            // line 162
            if (($context["showcolumn"] ?? null)) {
                // line 163
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn2\">
";
                // line 165
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 169
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 173
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 174
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 174);
            // line 175
            if (($context["showcolumn"] ?? null)) {
                // line 176
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn3\">
";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 182
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 186
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 187
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 187);
            // line 188
            if (($context["showcolumn"] ?? null)) {
                // line 189
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn4\">
";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 195
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 199
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 205
        echo "</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 210
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 210);
        // line 211
        if ((($context["type"] ?? null) == "page")) {
            // line 212
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 214
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 216
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 217
        if (($context["breadcrumb"] ?? null)) {
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 218, $this->source), "html", null, true);
            echo "
";
        }
        // line 221
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 221) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 221)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 221)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 221))) {
            // line 223
            echo "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 225
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 225);
            // line 226
            if (($context["showcolumn"] ?? null)) {
                // line 227
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 229
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 233
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 237
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 238
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 238);
            // line 239
            if (($context["showcolumn"] ?? null)) {
                // line 240
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 246
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 250
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 251
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 251);
            // line 252
            if (($context["showcolumn"] ?? null)) {
                // line 253
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 255
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 259
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 263
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 264
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 264);
            // line 265
            if (($context["showcolumn"] ?? null)) {
                // line 266
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 272
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 276
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 282
        echo "<div style=\"clear:both;\">
</div>
";
        // line 284
        if (($context["tabs"] ?? null)) {
            // line 285
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 285, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 287
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
        echo "
";
        // line 288
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
        echo "
";
        // line 289
        if (($context["action_links"] ?? null)) {
            // line 290
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 290, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 291
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        echo "
";
        // line 293
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 293) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 293)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 293)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 293))) {
            // line 295
            echo "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 297
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 297);
            // line 298
            if (($context["showcolumn"] ?? null)) {
                // line 299
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 305
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 309
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 310
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 310);
            // line 311
            if (($context["showcolumn"] ?? null)) {
                // line 312
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 314
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 318
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 322
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 323
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 323);
            // line 324
            if (($context["showcolumn"] ?? null)) {
                // line 325
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 327
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 331
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 335
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 336
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 336);
            // line 337
            if (($context["showcolumn"] ?? null)) {
                // line 338
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 340
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 344
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 348
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 354
        echo "<div class=\"margin_collapsetop\"></div>
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
";
        // line 366
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 366) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 366)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 366)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 366))) {
            // line 368
            echo "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 370
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 370);
            // line 371
            if (($context["showcolumn"] ?? null)) {
                // line 372
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 374
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 374), 374, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 378
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 382
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 383
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 383);
            // line 384
            if (($context["showcolumn"] ?? null)) {
                // line 385
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 387
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 387), 387, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 391
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 395
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 396
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 396);
            // line 397
            if (($context["showcolumn"] ?? null)) {
                // line 398
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 400
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 400), 400, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 404
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 408
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 409
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 409);
            // line 410
            if (($context["showcolumn"] ?? null)) {
                // line 411
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 417
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 421
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 427
        echo "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 436
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 436) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 436)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 436)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 436))) {
            // line 438
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 440
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 440);
            // line 441
            if (($context["showcolumn"] ?? null)) {
                // line 442
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 444
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 448
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 452
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 453
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 453);
            // line 454
            if (($context["showcolumn"] ?? null)) {
                // line 455
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 457
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 457), 457, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 461
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 465
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 466
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 466);
            // line 467
            if (($context["showcolumn"] ?? null)) {
                // line 468
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 470
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 470), 470, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 474
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 478
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 479
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 479);
            // line 480
            if (($context["showcolumn"] ?? null)) {
                // line 481
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 483
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 483), 483, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 487
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 491
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 497
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 499
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 499) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 499)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 499))) {
            // line 500
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 502
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 502)) {
                // line 503
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 504
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 508
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 513
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 513)) {
                // line 514
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 515
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 515), 515, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 519
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 524
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 524)) {
                // line 525
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 526
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 530
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 535
            echo "</div>
";
        }
        // line 537
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
";
        // line 543
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 543, $this->source), "html", null, true);
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
";
        // line 561
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 561) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 561)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 561)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 561))) {
            // line 563
            echo "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 565
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 565);
            // line 566
            if (($context["showcolumn"] ?? null)) {
                // line 567
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 569
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 569), 569, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 573
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 577
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 578
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 578);
            // line 579
            if (($context["showcolumn"] ?? null)) {
                // line 580
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 582
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 582), 582, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 586
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 590
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 591
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 591);
            // line 592
            if (($context["showcolumn"] ?? null)) {
                // line 593
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 595
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 595), 595, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 599
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 603
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 604
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 604);
            // line 605
            if (($context["showcolumn"] ?? null)) {
                // line 606
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 608
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 608), 608, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 612
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 616
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 622
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100281/templates/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1059 => 622,  1051 => 616,  1045 => 612,  1038 => 608,  1034 => 606,  1032 => 605,  1030 => 604,  1027 => 603,  1021 => 599,  1014 => 595,  1010 => 593,  1008 => 592,  1006 => 591,  1003 => 590,  997 => 586,  990 => 582,  986 => 580,  984 => 579,  982 => 578,  979 => 577,  973 => 573,  966 => 569,  962 => 567,  960 => 566,  958 => 565,  954 => 563,  952 => 561,  932 => 543,  924 => 537,  920 => 535,  913 => 530,  906 => 526,  903 => 525,  901 => 524,  894 => 519,  887 => 515,  884 => 514,  882 => 513,  875 => 508,  868 => 504,  865 => 503,  863 => 502,  859 => 500,  857 => 499,  853 => 497,  845 => 491,  839 => 487,  832 => 483,  828 => 481,  826 => 480,  824 => 479,  821 => 478,  815 => 474,  808 => 470,  804 => 468,  802 => 467,  800 => 466,  797 => 465,  791 => 461,  784 => 457,  780 => 455,  778 => 454,  776 => 453,  773 => 452,  767 => 448,  760 => 444,  756 => 442,  754 => 441,  752 => 440,  748 => 438,  746 => 436,  736 => 427,  728 => 421,  722 => 417,  715 => 413,  711 => 411,  709 => 410,  707 => 409,  704 => 408,  698 => 404,  691 => 400,  687 => 398,  685 => 397,  683 => 396,  680 => 395,  674 => 391,  667 => 387,  663 => 385,  661 => 384,  659 => 383,  656 => 382,  650 => 378,  643 => 374,  639 => 372,  637 => 371,  635 => 370,  631 => 368,  629 => 366,  616 => 354,  608 => 348,  602 => 344,  595 => 340,  591 => 338,  589 => 337,  587 => 336,  584 => 335,  578 => 331,  571 => 327,  567 => 325,  565 => 324,  563 => 323,  560 => 322,  554 => 318,  547 => 314,  543 => 312,  541 => 311,  539 => 310,  536 => 309,  530 => 305,  523 => 301,  519 => 299,  517 => 298,  515 => 297,  511 => 295,  509 => 293,  505 => 291,  500 => 290,  498 => 289,  494 => 288,  490 => 287,  484 => 285,  482 => 284,  478 => 282,  470 => 276,  464 => 272,  457 => 268,  453 => 266,  451 => 265,  449 => 264,  446 => 263,  440 => 259,  433 => 255,  429 => 253,  427 => 252,  425 => 251,  422 => 250,  416 => 246,  409 => 242,  405 => 240,  403 => 239,  401 => 238,  398 => 237,  392 => 233,  385 => 229,  381 => 227,  379 => 226,  377 => 225,  373 => 223,  371 => 221,  366 => 218,  364 => 217,  361 => 216,  357 => 214,  353 => 212,  351 => 211,  349 => 210,  342 => 205,  334 => 199,  328 => 195,  321 => 191,  317 => 189,  315 => 188,  313 => 187,  310 => 186,  304 => 182,  297 => 178,  293 => 176,  291 => 175,  289 => 174,  286 => 173,  280 => 169,  273 => 165,  269 => 163,  267 => 162,  265 => 161,  262 => 160,  256 => 156,  249 => 152,  245 => 150,  243 => 149,  241 => 148,  237 => 146,  235 => 144,  204 => 115,  153 => 66,  145 => 60,  139 => 56,  132 => 52,  128 => 50,  126 => 49,  124 => 48,  121 => 47,  115 => 43,  108 => 39,  104 => 37,  102 => 36,  100 => 35,  97 => 34,  91 => 30,  84 => 26,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  67 => 17,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  48 => 7,  46 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100281/templates/page--node.html.twig", "C:\\xampp\\htdocs\\Dr\\themes\\theme__100281\\templates\\page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 13);
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
