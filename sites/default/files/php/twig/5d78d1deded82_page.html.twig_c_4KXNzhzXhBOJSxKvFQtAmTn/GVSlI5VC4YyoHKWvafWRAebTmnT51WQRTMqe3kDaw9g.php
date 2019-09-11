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

/* themes/custom/metasonic/templates/page.html.twig */
class __TwigTemplate_b154ca0fb981315c3c84c50d28235ba2973189df6c9fe0188099bf8f29c4b6a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<div class=\"layout-container\">

  <header class=\"header\" aria-label=\"Heading\">
    <div class=\"container\">
      <div class=\"header-logo\">
        <a href=\"/\"><img src=\"/";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/logo.png\" alt=\"\"></a>
      </div>
      <div class=\"header-right\">
        <a href=\"\" class=\"header-right__link\">Login</a>
        <form class=\"search-form\">
          <input class=\"search-form__input\" placeholder=\"Search...\">
          <button class=\"search-form__button\"><img src=\"\" alt=\"\"></button>
        </form>
      </div>
      <div class=\"header-menu\">
        <nav class=\"header-nav\">
          ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        </nav>
      </div>
    </div>
  </header>

  <section class=\"banner\">
    <div class=\"banner-bg-img\"></div>
    <div class=\"container\">
      <div class=\"banner-content\">

      </div>
    </div>
  </section>


</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/metasonic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/metasonic/templates/page.html.twig", "/app/themes/custom/metasonic/templates/page.html.twig");
    }
}
