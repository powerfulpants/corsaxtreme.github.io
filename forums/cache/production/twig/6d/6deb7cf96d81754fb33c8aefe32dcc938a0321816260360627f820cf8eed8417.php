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

/* ucp_pm_viewmessage.html */
class __TwigTemplate_183fd03a96cd2649a3b4c3b25b00570bff237886d2ee03ede6b4f8f37b5b9f1f extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if ((($context["S_DISPLAY_HISTORY"] ?? null) && (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null) || ($context["U_VIEW_NEXT_HISTORY"] ?? null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null)) {
                // line 12
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_PREVIOUS_HISTORY"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 13
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 16
            echo "\t\t";
            if (($context["U_VIEW_NEXT_HISTORY"] ?? null)) {
                // line 17
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_NEXT_HISTORY"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 18
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 21
            echo "\t</fieldset>
";
        }
        // line 23
        echo "

<div id=\"post-";
        // line 25
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\" class=\"post pm has-profile";
        if ((($context["S_POST_UNAPPROVED"] ?? null) || ($context["S_POST_REPORTED"] ?? null))) {
            echo " reported";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 28
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\">
\t\t<dt class=\"";
        // line 29
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " ";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t<div class=\"avatar-container\">
\t\t\t\t";
        // line 31
        // line 32
        echo "\t\t\t\t";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_MESSAGE_AUTHOR"] ?? null);
            echo "\" class=\"avatar\">";
            echo ($context["AUTHOR_AVATAR"] ?? null);
            echo "</a>";
        }
        // line 33
        echo "\t\t\t\t";
        // line 34
        echo "\t\t\t</div>
\t\t\t";
        // line 35
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t</dt>

\t\t";
        // line 38
        // line 39
        echo "\t\t";
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "<dd class=\"profile-rank\">";
            echo ($context["RANK_TITLE"] ?? null);
            if ((($context["RANK_TITLE"] ?? null) && ($context["RANK_IMG"] ?? null))) {
                echo "<br />";
            }
            echo ($context["RANK_IMG"] ?? null);
            echo "</dd>";
        }
        // line 40
        echo "\t\t";
        // line 41
        echo "\t\t
\t\t";
        // line 42
        if (($context["S_ONLINE"] ?? null)) {
            echo "<dd class=\"online\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
            echo "</dd>";
        }
        // line 43
        echo "\t\t<dd class=\"profile-posts\"><strong>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        if ((($context["U_AUTHOR_POSTS"] ?? null) != "")) {
            echo "<a href=\"";
            echo ($context["U_AUTHOR_POSTS"] ?? null);
            echo "\">";
            echo ($context["AUTHOR_POSTS"] ?? null);
            echo "</a>";
        } else {
            echo ($context["AUTHOR_POSTS"] ?? null);
        }
        echo "</dd>
\t\t";
        // line 44
        if (($context["AUTHOR_JOINED"] ?? null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["AUTHOR_JOINED"] ?? null);
            echo "</dd>";
        }
        // line 45
        echo "
\t\t";
        // line 46
        // line 47
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 48
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 49);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 49);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 49);
                echo "</dd>
\t\t\t";
            }
            // line 51
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t";
        // line 53
        echo "
\t\t";
        // line 54
        // line 55
        echo "\t\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 55))) {
            // line 56
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"  title=\"";
            // line 59
            echo ($context["CONTACT_USER"] ?? null);
            echo "\"><i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["CONTACT_USER"] ?? null);
            echo "</span></a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 64
                echo "\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 64) % 4);
                // line 65
                echo "\t\t\t\t\t\t\t\t";
                $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 65) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 65) < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 66
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["REMAINDER"] ?? null) == 0)) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 69)) {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 69);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_PROFILE_AUTHOR", [], "any", false, false, false, 69);
                }
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 69);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 69)) {
                    echo " class=\"last-cell\"";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 69) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 70);
                echo "-icon\">";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 70);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 72
                if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 72))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
        }
        // line 81
        echo "\t\t";
        // line 82
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 85
        echo ($context["SUBJECT"] ?? null);
        echo "</h3>

\t\t";
        // line 87
        $value = (((($context["U_EDIT"] ?? null) || ($context["U_DELETE"] ?? null)) || ($context["U_REPORT"] ?? null)) || ($context["U_QUOTE"] ?? null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 88
        echo "\t\t";
        // line 89
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PM_POST_BUTTONS", [], "any", false, false, false, 89)) {
            // line 90
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 91
            // line 92
            echo "\t\t\t";
            if (($context["U_EDIT"] ?? null)) {
                // line 93
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 94
                echo ($context["U_EDIT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_EDIT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 95
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 99
            echo "\t\t\t";
            if (($context["U_DELETE"] ?? null)) {
                // line 100
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 101
                echo ($context["U_DELETE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MESSAGE");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 102
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 106
            echo "\t\t\t";
            if (($context["U_REPORT"] ?? null)) {
                // line 107
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 108
                echo ($context["U_REPORT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 113
            echo "\t\t\t";
            if (($context["U_QUOTE"] ?? null)) {
                // line 114
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 115
                echo ($context["U_QUOTE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_QUOTE_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 116
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 120
            echo "\t\t\t";
            // line 121
            echo "\t\t</ul>
\t\t";
        }
        // line 123
        echo "\t\t";
        // line 124
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 126
        echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["SENT_DATE"] ?? null);
        echo "
\t\t\t<br /><strong>";
        // line 127
        echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t\t";
        // line 128
        if (($context["S_TO_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 128)) {
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 128);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 128);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 128)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 128);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 128);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 129
        echo "\t\t\t";
        if (($context["S_BCC_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 129)) {
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 129);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 129);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 129)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 129);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 129);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 130
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 133
        echo ($context["MESSAGE"] ?? null);
        echo "</div>

\t\t";
        // line 135
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 136
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 138
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 141
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 141);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t\t</dl>
\t\t";
        }
        // line 145
        echo "
\t\t";
        // line 146
        if (($context["S_DISPLAY_NOTICE"] ?? null)) {
            // line 147
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 149
        echo "
\t\t";
        // line 150
        if ((($context["EDITED_MESSAGE"] ?? null) || ($context["EDIT_REASON"] ?? null))) {
            // line 151
            echo "\t\t<div class=\"notice\">";
            echo ($context["EDITED_MESSAGE"] ?? null);
            echo "
\t\t\t";
            // line 152
            if (($context["EDIT_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["EDIT_REASON"] ?? null);
                echo "</em>";
            }
            // line 153
            echo "\t\t</div>
\t\t";
        }
        // line 155
        echo "
\t\t";
        // line 156
        if (($context["SIGNATURE"] ?? null)) {
            // line 157
            echo "\t\t\t<div id=\"sig";
            echo ($context["MESSAGE_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 159
        echo "\t</div>

\t<div class=\"back2top\">
\t\t<a href=\"#top\" class=\"top\" title=\"";
        // line 162
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "\">
\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"sr-only\">";
        // line 164
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "</span>
\t\t</a>
\t</div>

\t</div>
</div>

";
        // line 171
        // line 172
        if (($context["S_VIEW_MESSAGE"] ?? null)) {
            // line 173
            echo "<fieldset class=\"display-options\">

\t";
            // line 175
            if (($context["S_MARK_OPTIONS"] ?? null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 176
            echo "\t";
            if (($context["U_PREVIOUS_PM"] ?? null)) {
                // line 177
                echo "\t\t<a href=\"";
                echo ($context["U_PREVIOUS_PM"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 178
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 181
            echo "\t";
            if (($context["U_NEXT_PM"] ?? null)) {
                // line 182
                echo "\t\t<a href=\"";
                echo ($context["U_NEXT_PM"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 183
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 186
            echo "\t";
            if (( !($context["S_UNREAD"] ?? null) &&  !($context["S_SPECIAL_FOLDER"] ?? null))) {
                echo "<label for=\"dest_folder\">";
                if (($context["S_VIEW_MESSAGE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_TO_FOLDER");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo ($context["S_TO_FOLDER_OPTIONS"] ?? null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 187
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 188
            echo ($context["CUR_FOLDER_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 189
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
</fieldset>
";
        }
        // line 192
        echo "
";
        // line 193
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 193)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 194
        echo "
";
        // line 195
        if (($context["S_DISPLAY_HISTORY"] ?? null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 195)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 196
        echo "
";
        // line 197
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 197)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 197,  742 => 196,  728 => 195,  725 => 194,  713 => 193,  710 => 192,  704 => 189,  700 => 188,  695 => 187,  678 => 186,  670 => 183,  663 => 182,  660 => 181,  652 => 178,  645 => 177,  642 => 176,  634 => 175,  630 => 173,  628 => 172,  627 => 171,  617 => 164,  612 => 162,  607 => 159,  599 => 157,  597 => 156,  594 => 155,  590 => 153,  581 => 152,  576 => 151,  574 => 150,  571 => 149,  565 => 147,  563 => 146,  560 => 145,  556 => 143,  547 => 141,  543 => 140,  538 => 138,  534 => 136,  532 => 135,  527 => 133,  522 => 130,  491 => 129,  461 => 128,  454 => 127,  447 => 126,  443 => 124,  441 => 123,  437 => 121,  435 => 120,  428 => 116,  422 => 115,  419 => 114,  416 => 113,  409 => 109,  403 => 108,  400 => 107,  397 => 106,  390 => 102,  384 => 101,  381 => 100,  378 => 99,  371 => 95,  365 => 94,  362 => 93,  359 => 92,  358 => 91,  355 => 90,  352 => 89,  350 => 88,  347 => 87,  342 => 85,  337 => 82,  335 => 81,  328 => 76,  322 => 75,  318 => 73,  316 => 72,  309 => 70,  291 => 69,  287 => 67,  284 => 66,  280 => 65,  277 => 64,  273 => 63,  264 => 59,  258 => 57,  255 => 56,  252 => 55,  251 => 54,  248 => 53,  246 => 52,  240 => 51,  229 => 49,  226 => 48,  221 => 47,  220 => 46,  217 => 45,  208 => 44,  192 => 43,  186 => 42,  183 => 41,  181 => 40,  170 => 39,  169 => 38,  163 => 35,  160 => 34,  158 => 33,  149 => 32,  148 => 31,  133 => 29,  129 => 28,  119 => 25,  115 => 23,  111 => 21,  103 => 18,  96 => 17,  93 => 16,  85 => 13,  78 => 12,  76 => 11,  73 => 10,  71 => 9,  64 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_viewmessage.html", "");
    }
}
