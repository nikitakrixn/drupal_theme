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

/* themes/custom/laveg/templates/page.html.twig */
class __TwigTemplate_a04737c7c2dfecd4c606457bd89985439b7d81d589744c9e19502b203c673d6c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 7, "date" => 70];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
        echo "<section class=\"first-section\">
  <div class=\"header\">
    <div class=\"container\">
      <div class=\"header-left\">
        <div class=\"header__logo\">
          ";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
          ";
        } else {
            // line 9
            echo "            <a href=\"/\">LOGO HERE</a>
          ";
        }
        // line 11
        echo "        </div>
      </div>

      <div class=\"header-right\">
        <div class=\"header__call\">
          <a href=\"tel:03222355753\">0322 235 57 53</a>
          <img src=\"/";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/call.png\" alt=\"\">
        </div>

        <hr class=\"style-one\">

        <div class=\"header-info\">
          <div class=\"header__time\">
            <p>Mo-Fr von 8-20 Uhr</p>
            <img src=\"/";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/time.png\" alt=\"\">
          </div>

          <div class=\"header__consultation\">
            <p>Kostenlose Erstberatung</p>
            <img src=\"/";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/consultation.png\" alt=\"\">
          </div>

          <div class=\"header__nation\">
            <p>Bundesweit tätig</p>
            <img src=\"/";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/nation.png\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"navbar\">
    <div class=\"container\">

      ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "

    </div>
  </div>

</section>

<section class=\"second-section\">
";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "main_content", [])) {
            // line 54
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content", [])), "html", null, true);
            echo "
  ";
        } else {
            // line 56
            echo "  <div class=\"page-slogan\">
    <p>PAGE NOT FOUND<p>
  </div>
  ";
        }
        // line 60
        echo "</section>

<div class=\"footer\">
  <div class=\"container\">
    <div class=\"footer-block\">
      ";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 66
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
      ";
        } else {
            // line 68
            echo "        <a href=\"/\">LOGO HERE</a>
      ";
        }
        // line 70
        echo "      <p class=\"copyright\">©";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " | All Right Reserved</p>
    </div>
    <div class=\"footer-block\">
      ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/laveg/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  166 => 70,  162 => 68,  156 => 66,  154 => 65,  147 => 60,  141 => 56,  135 => 54,  133 => 53,  122 => 45,  109 => 35,  101 => 30,  93 => 25,  82 => 17,  74 => 11,  70 => 9,  64 => 7,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/laveg/templates/page.html.twig", "/app/themes/custom/laveg/templates/page.html.twig");
    }
}
