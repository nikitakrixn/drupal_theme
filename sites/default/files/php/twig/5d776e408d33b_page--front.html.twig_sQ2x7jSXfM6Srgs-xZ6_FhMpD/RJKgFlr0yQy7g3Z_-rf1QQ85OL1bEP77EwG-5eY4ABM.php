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

/* themes/custom/laveg/templates/page--front.html.twig */
class __TwigTemplate_6650f01a6e4256d39cdbb28c9c17b1fd351e33d69b58c59bd9ccdb71670fe3d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 7, "date" => 186];
        $functions = ["active_theme_path" => 51];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                ['active_theme_path']
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

      ";
        // line 47
        if (($context["is_front"] ?? null)) {
            // line 48
            echo "      <div class=\"alert\">
        <div class=\"alert-header\">
          <div class=\"alert-header-title\">
            <img src=\"";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
            echo "/images/aler.png\" alt=\"\">
            <p>Jeder zweite Bußgeldbescheid ist fehlerhaft.</p>
          </div>
          <div class=\"alert-header-desc\">
            <p>Akzeptieren Sie niemals einen Bußgeldbescheid ungeprüft. Sprechen Sie zuerst mit uns!</p>
          </div>
        </div>
        <div class=\"alert-line\"></div>
        <div class=\"alert-body\">
          <p>Fragen kostet nichts. Schildern Sie uns Ihren Fall völlig unverbindlich. Bitte füllen Sie folgendes Formular aus:</p>
          <div class=\"alert-block\">
            <div class=\"alert-block-1\">1</div>
            <div class=\"alert-block-line\"></div>
            <div class=\"alert-block-2\">2</div>
          </div>
          <div class=\"alert-form\">
            <h4>1. Was wird Ihnen vorgeworfen?</h4>
            <form action=\"\">
              <p><input type=\"radio\" name=\"form\"> Geschwindigkeitsverstoß</p>
              <p><input type=\"radio\" name=\"form\"> Rotlichtverstoß</p>
              <p><input type=\"radio\" name=\"form\"> Abstandsverstoß</p>
              <p><input type=\"radio\" name=\"form\"> Alkohol- / Drogenverstoß</p>
              <p><input type=\"radio\" name=\"form\"> Parkverstoß</p>
              <p><input type=\"radio\" name=\"form\"> anderer Tatvorwurf</p>
              <div class=\"aleft-form-button\">
                <button>Weiter</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      ";
        }
        // line 83
        echo "    </div>
  </div>

    <div class=\"banner\"></div>

</section>

";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "welcome_area", [])) {
            // line 91
            echo "<section class=\"second-section\">
  <div class=\"page-welcome\">
    <div class=\"container\">
      ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "welcome_area", [])), "html", null, true);
            echo "
    </div>
  </div>
</section>
";
        }
        // line 99
        echo "
<section class=\"third-section\">
  <div class=\"page-grid\">
    <div class=\"container\">
      ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>

<section class=\"fourth-section\">
  <div class=\"page-services\">
    <div class=\"container\">
      ";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 112
            echo "          <div class=\"services-block\">
              ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 116
        echo "    </div>
  </div>
</section>

<section class=\"fifth-section\">
  <div class=\"page-about\">
    <div class=\"container\">
      <div class=\"about-block\">
        ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "info_page", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>

<section class=\"six-section\">
  <div class=\"page-slogan\">
    <p>
    ";
        // line 133
        if (($context["site_slogan"] ?? null)) {
            // line 134
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
    ";
        } else {
            // line 136
            echo "      \"SLOGAN AREA HERE\"
    ";
        }
        // line 138
        echo "    <p>
  </div>
</section>

";
        // line 142
        if (($context["show_contacts"] ?? null)) {
            // line 143
            echo "<section class=\"seven-section\">
  <div class=\"contacts\">
    <div class=\"container\">
      ";
            // line 146
            if (($context["address"] ?? null)) {
                // line 147
                echo "      <div class=\"contacts-block\">
        <img src=\"/";
                // line 148
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
                echo "/images/map.png\" alt=\"\">
        <p>";
                // line 149
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null)), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 152
            echo "
      ";
            // line 153
            if (($context["phone"] ?? null)) {
                // line 154
                echo "      <div class=\"contacts-block\">
        <img src=\"/";
                // line 155
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
                echo "/images/tel.png\" alt=\"\">
        <p>Phone: <a href=\"tel:";
                // line 156
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 159
            echo "
      ";
            // line 160
            if (($context["mobile_phone"] ?? null)) {
                // line 161
                echo "      <div class=\"contacts-block\">
        <img src=\"/";
                // line 162
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
                echo "/images/mobile.png\" alt=\"\">
        <p>Mobile: <a href=\"tel:";
                // line 163
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mobile_phone"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mobile_phone"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 166
            echo "
      ";
            // line 167
            if (($context["email"] ?? null)) {
                // line 168
                echo "      <div class=\"contacts-block\">
        <img src=\"/";
                // line 169
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
                echo "/images/email.png\" alt=\"\">
        <p>E-mail: <a href=\"mailto: ";
                // line 170
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 173
            echo "    </div>
  </div>
</section>
";
        }
        // line 177
        echo "
<div class=\"footer\">
  <div class=\"container\">
    <div class=\"footer-block\">
      ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 182
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
      ";
        } else {
            // line 184
            echo "        <a href=\"/\">LOGO HERE</a>
      ";
        }
        // line 186
        echo "      <p class=\"copyright\">©";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo " | All Right Reserved</p>
    </div>
    <div class=\"footer-block\">
      ";
        // line 189
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/laveg/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 189,  367 => 186,  363 => 184,  357 => 182,  355 => 181,  349 => 177,  343 => 173,  335 => 170,  331 => 169,  328 => 168,  326 => 167,  323 => 166,  315 => 163,  311 => 162,  308 => 161,  306 => 160,  303 => 159,  295 => 156,  291 => 155,  288 => 154,  286 => 153,  283 => 152,  277 => 149,  273 => 148,  270 => 147,  268 => 146,  263 => 143,  261 => 142,  255 => 138,  251 => 136,  245 => 134,  243 => 133,  231 => 124,  221 => 116,  215 => 113,  212 => 112,  210 => 111,  199 => 103,  193 => 99,  185 => 94,  180 => 91,  178 => 90,  169 => 83,  134 => 51,  129 => 48,  127 => 47,  122 => 45,  109 => 35,  101 => 30,  93 => 25,  82 => 17,  74 => 11,  70 => 9,  64 => 7,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/laveg/templates/page--front.html.twig", "/app/themes/custom/laveg/templates/page--front.html.twig");
    }
}
