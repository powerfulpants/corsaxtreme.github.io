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

/* overall_footer.html */
class __TwigTemplate_8d6ad4f9cc906674acff3fcb923276ec7c7ee77060d45ee59f2f70ff60c5f5ba extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t
\t";
        // line 8
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
\t<div class=\"copyright\">
\t
\t\t";
        // line 12
        if (($context["U_CONTACT_US"] ?? null)) {
            // line 13
            echo "\t\t\t<p class=\"footer-row contact-us\">
\t\t\t\t<a href=\"";
            // line 14
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_US");
            echo "
\t\t\t\t</a>
\t\t\t</p>
\t\t\t<br>
\t\t";
        }
        // line 20
        echo "\t
\t\t<span class=\"footer-logo number1\"></span>
\t\t<a href=\"https://www.phpbb.com/\"><span class=\"footer-logo flaming\"></span></a>
\t\t<span class=\"footer-logo browser\"></span>
\t
\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">1996 style by <a href=\"http://phpbbstyles.oo.gd/\">Ian Bradley</a></span>
\t\t</p>
\t\t";
        // line 28
        // line 29
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 30
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t</p>
\t\t";
        // line 32
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 33
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 34
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 37
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('threedi_dae', '__main__'));
        $this->env->loadTemplate('@threedi_dae/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 38
        echo "\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 39
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 43
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 47
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 48
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 49
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 52
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 53
            echo "\t\t<p class=\"footer-row\">
\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 54
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a>
\t\t</p>
\t\t";
        }
        // line 57
        echo "\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 59
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 63
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 81
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 82
        echo "</div>

<script src=\"";
        // line 84
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 85
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 86
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 87
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 88
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 89
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 90
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 95
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 102
        echo "
";
        // line 103
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 104
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 122
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 129
        echo "
";
        // line 130
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 131
        echo "
";
        // line 132
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 132)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 133
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 133);
        echo "

";
        // line 135
        $asset_file = "jquery.marquee.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 136
        echo "
<script>
\t\$('.marquee').marquee({
\t\t//speed in milliseconds of the marquee
\t\tduration: 10000,
\t\t//gap in pixels between the tickers
\t\tgap: 0,
\t\t//time in milliseconds before the marquee will start animating
\t\tdelayBeforeStart: 0,
\t\t//'left' or 'right'
\t\tdirection: 'left',
\t\t//true or false - should the marquee be duplicated to show an effect of continues flow
\t\tduplicated: false
\t});
</script>

<script>
\tfunction arrayMe(string) {
\t\t\$(string).each(function() {
\t\t\tvar myStr = \$(this).html();
\t\t\tmyStr = myStr.split(\"\");
\t\t\tvar myContents = \"\";
\t\t\tfor (var i = 0, len = myStr.length; i < len; i++) {
\t\t\t\tmyContents += '<span class=\"counter-style char-' + i + '\">' + myStr[i] + '</span>';
\t\t\t}
\t\t\t\$(this).html(myContents);
\t\t});
\t}

\t// Calling arrayMe on page load, on class
\t\$('document').ready(function() {
\t\tvar myStringType = \$('.statistics .stats strong');
\t\tarrayMe(myStringType);
\t});
</script>

";
        // line 172
        // line 173
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 173,  417 => 172,  379 => 136,  365 => 135,  360 => 133,  346 => 132,  343 => 131,  338 => 130,  335 => 129,  325 => 122,  321 => 121,  317 => 120,  313 => 119,  292 => 104,  290 => 103,  287 => 102,  277 => 95,  270 => 90,  268 => 89,  254 => 88,  240 => 87,  233 => 86,  225 => 85,  221 => 84,  217 => 82,  213 => 81,  190 => 63,  175 => 59,  171 => 57,  163 => 54,  160 => 53,  157 => 52,  151 => 49,  148 => 48,  146 => 47,  140 => 44,  134 => 43,  128 => 40,  122 => 39,  119 => 38,  113 => 37,  107 => 34,  104 => 33,  102 => 32,  97 => 30,  94 => 29,  93 => 28,  83 => 20,  75 => 15,  71 => 14,  68 => 13,  66 => 12,  61 => 9,  49 => 8,  44 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
