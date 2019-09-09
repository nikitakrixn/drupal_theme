<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/background_image/templates/background_image.css.twig */
class __TwigTemplate_4b3e60c8cadec401c4481e2644dd405de28926946fb999579d87b73302ad454c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 45, "for" => 104];
        $filters = ["escape" => 4, "default" => 90];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "/* Background Image Styles (https://www.drupal.org/project/background_image). */

";
        // line 4
        echo ".";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-wrapper {
  position: relative;
}

.";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-full-viewport .";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-wrapper::after {
  content: '';
  display: block;
  position: relative;
  height: 100vh;
  width: 100vw;
  z-index: -1;
}

";
        // line 18
        echo ".";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-inner {
  bottom: 0;
  left: 0;
  overflow: hidden;
  position: fixed;
  right: 0;
  top: 0;
  transform: translate3d(0, 0, 0);
  z-index: -1;
}

.";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo ",
.";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "::before,
.";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "::after {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  bottom: -40px;
  display: block;
  left: -40px;
  position: absolute;
  right: -40px;
  top: -40px;
  transform: translate3d(0,0,0) translateZ(0);
}

";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "blur", []), "type", []) == 2)) {
            // line 46
            echo "body:not(.";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
            echo "-full-viewport) .";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
            echo " {
  filter: blur(";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "blur", []), "radius", [])), "html", null, true);
            echo "px);
}
";
        }
        // line 50
        echo "
";
        // line 52
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "blur", []), "type", []) == 3)) {
            // line 53
            echo ".";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
            echo " {
  filter: blur(";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "blur", []), "radius", [])), "html", null, true);
            echo "px);
}
";
        }
        // line 57
        echo "
.";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "::before,
.";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "::after {
  content: '';
}

.";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-overlay {
  bottom: 0;
  height: 100vh;
  left: 0;
  position: absolute;
  right: 0;
  transform: translate3d(0,0,0) translateZ(0);
}

body:not(.";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-full-viewport) .";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-overlay {
  display: none;
}

";
        // line 77
        echo ".";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-full-viewport .";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-text {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
}

.";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_class"] ?? null)), "html", null, true);
        echo "-text {
  width: 100%;
}

";
        // line 89
        echo ".";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image_class"] ?? null)), "html", null, true);
        echo "::before {
  background-color: ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", [], "any", false, true), "background_color", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", [], "any", false, true), "background_color", [])), "transparent")) : ("transparent")), "html", null, true);
        echo ";
  background-image: url(\"";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preload_url"] ?? null)), "html", null, true);
        echo "\");
  ";
        // line 94
        echo "-webkit-filter: blur(40px);
  filter: blur(40px);
}

";
        // line 99
        echo ".";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image_class"] ?? null)), "html", null, true);
        echo "::after {
  background-image: url(\"";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fallback_url"] ?? null)), "html", null, true);
        echo "\");
}

";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["media_queries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 105
            echo "@media ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["media"], "query", [])), "html", null, true);
            echo " {
  .";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image_class"] ?? null)), "html", null, true);
            echo "::after {
    background-image: url(\"";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["media"], "url", [])), "html", null, true);
            echo "\");
  }
}
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/contrib/background_image/templates/background_image.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 107,  245 => 106,  240 => 105,  236 => 104,  230 => 100,  225 => 99,  219 => 94,  215 => 91,  211 => 90,  206 => 89,  199 => 84,  186 => 77,  177 => 72,  165 => 63,  158 => 59,  154 => 58,  151 => 57,  145 => 54,  140 => 53,  138 => 52,  135 => 50,  129 => 47,  122 => 46,  120 => 45,  104 => 31,  100 => 30,  96 => 29,  81 => 18,  67 => 8,  59 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/background_image/templates/background_image.css.twig", "/app/modules/contrib/background_image/templates/background_image.css.twig");
    }
}
