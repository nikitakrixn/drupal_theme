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
class __TwigTemplate_eb9b6cea6ddd75753a066638a104c0773f7f6c8db9fe252f46f3242f9df96458 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 7, "raw" => 131, "date" => 207];
        $functions = ["active_theme_path" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'date'],
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
          <img src=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/call.png\" alt=\"\">
        </div>

        <hr class=\"style-one\">

        <div class=\"header-info\">
          <div class=\"header__time\">
            <p>Mo-Fr von 8-20 Uhr</p>
            <img src=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/time.png\" alt=\"\">
          </div>

          <div class=\"header__consultation\">
            <p>Kostenlose Erstberatung</p>
            <img src=\"";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/consultation.png\" alt=\"\">
          </div>

          <div class=\"header__nation\">
            <p>Bundesweit tätig</p>
            <img src=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
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

      <div class=\"alert\">
        <div class=\"alert-header\">
          <div class=\"alert-header-title\">
            <img src=\"";
        // line 50
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
    </div>
  </div>

  <div class=\"banner\">
    ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "background", [])), "html", null, true);
        echo "
  </div>
</section>

<section class=\"second-section\">
  <div class=\"page-welcome\">
    <div class=\"container\">
      <h2>Welcome area</h2>
    </div>
  </div>
</section>

<section class=\"third-section\">
  <div class=\"page-grid\">
    <div class=\"container\">

      <div class=\"grid-item\">
        <div class=\"grid-icon grid-icon-1\"></div>
        <h3>Driver's Licence</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed don eiusmod tempor incididunt.</p>
        <a href=\"\">More</a>
      </div>

      <div class=\"grid-item\">
        <div class=\"grid-icon grid-icon-3\"></div>
        <h3>Laws & Law</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed don eiusmod tempor incididunt.</p>
        <a href=\"\">More</a>
      </div>

      <div class=\"grid-item\">
        <div class=\"grid-icon grid-icon-2\"></div>
        <h3>Legal Services</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed don eiusmod tempor incididunt.</p>
        <a href=\"\">More</a>
      </div>
    </div>
  </div>
</section>

<section class=\"fourth-section\">
  <div class=\"page-services\">
    <div class=\"container\">
      <h2>Services</h2>
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 130
            echo "          <div class=\"services-block\">
              ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])));
            echo "
          </div>
      ";
        }
        // line 134
        echo "
    </div>
  </div>
</section>

<section class=\"fifth-section\">
  <div class=\"page-about\">
    <div class=\"container\">
      <div class=\"about-block\">
        <h1>Laveg.de work system</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <a href=\"\">More Page</a>
      </div>
    </div>
  </div>
</section>

<section class=\"six-section\">
  <div class=\"page-slogan\">
    <p>
    ";
        // line 154
        if ($this->getAttribute(($context["page"] ?? null), "slogan", [])) {
            // line 155
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slogan", [])), "html", null, true);
            echo "
    ";
        } else {
            // line 157
            echo "      \"SLOGAN AREA HERE\"
    ";
        }
        // line 159
        echo "    <p>
  </div>
</section>

";
        // line 163
        if (($context["show_contacts"] ?? null)) {
            // line 164
            echo "<section class=\"seven-section\">
  <div class=\"contacts\">
    <div class=\"container\">
      ";
            // line 167
            if (($context["address"] ?? null)) {
                // line 168
                echo "      <div class=\"contacts-block\">
        <img src=\"";
                // line 169
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
                echo "/images/map.png\" alt=\"\">
        <p>";
                // line 170
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null)), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 173
            echo "
      ";
            // line 174
            if (($context["phone"] ?? null)) {
                // line 175
                echo "      <div class=\"contacts-block\">
        <img src=\"";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
                echo "/images/tel.png\" alt=\"\">
        <p>Phone: <a href=\"tel:";
                // line 177
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 180
            echo "
      ";
            // line 181
            if (($context["mobile_phone"] ?? null)) {
                // line 182
                echo "      <div class=\"contacts-block\">
        <img src=\"";
                // line 183
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
                echo "/images/mobile.png\" alt=\"\">
        <p>Mobile: <a href=\"tel:";
                // line 184
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mobile_phone"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mobile_phone"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 187
            echo "
      ";
            // line 188
            if (($context["email"] ?? null)) {
                // line 189
                echo "      <div class=\"contacts-block\">
        <img src=\"";
                // line 190
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
                echo "/images/email.png\" alt=\"\">
        <p>E-mail: <a href=\"mailto: ";
                // line 191
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
                echo "</a></p>
      </div>
      ";
            }
            // line 194
            echo "    </div>
  </div>
</section>
";
        }
        // line 198
        echo "
<div class=\"footer\">
  <div class=\"container\">
    <div class=\"footer-block\">
      ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 203
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
      ";
        } else {
            // line 205
            echo "        <a href=\"/\">LOGO HERE</a>
      ";
        }
        // line 207
        echo "      <p class=\"copyright\">©";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Laveg.de | All Right Reserved</p>
    </div>
    <div class=\"footer-block\">
      ";
        // line 210
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
        return array (  379 => 210,  372 => 207,  368 => 205,  362 => 203,  360 => 202,  354 => 198,  348 => 194,  340 => 191,  336 => 190,  333 => 189,  331 => 188,  328 => 187,  320 => 184,  316 => 183,  313 => 182,  311 => 181,  308 => 180,  300 => 177,  296 => 176,  293 => 175,  291 => 174,  288 => 173,  282 => 170,  278 => 169,  275 => 168,  273 => 167,  268 => 164,  266 => 163,  260 => 159,  256 => 157,  250 => 155,  248 => 154,  226 => 134,  220 => 131,  217 => 130,  215 => 129,  168 => 85,  130 => 50,  122 => 45,  109 => 35,  101 => 30,  93 => 25,  82 => 17,  74 => 11,  70 => 9,  64 => 7,  62 => 6,  55 => 1,);
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
