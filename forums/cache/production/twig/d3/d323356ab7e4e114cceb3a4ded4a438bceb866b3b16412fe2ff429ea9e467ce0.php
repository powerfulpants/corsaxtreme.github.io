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

/* sidebar.html */
class __TwigTemplate_1aaec5ce08037b18be75c517d9bfaf690022d866bf6f6f07357663c08fe8e4cb extends \Twig\Template
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
        echo "<h2>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</h2>

<ul class=\"ib-quicklinks\" role=\"menu\">

\t";
        // line 5
        if ((($context["U_MARK_FORUMS"] ?? null) || ($context["U_MARK_TOPICS"] ?? null))) {
            // line 6
            echo "\t\t<li class=\"separator\"></li>
\t";
        }
        // line 8
        echo "\t
\t";
        // line 9
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 10
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 11
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            if ((($context["S_FORUM_ID"] ?? null) != 0)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_SUBFORUMS_READ");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            }
            echo "</a>
\t\t</li>
\t";
        }
        // line 14
        echo "\t
\t";
        // line 15
        if ((($context["U_MARK_TOPICS"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 15)))) {
            // line 16
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 17
            echo ($context["U_MARK_TOPICS"] ?? null);
            echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
            echo "</a>
\t\t</li>
\t";
        }
        // line 20
        echo "\t
\t<li class=\"separator\"></li>

\t";
        // line 23
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 24
            echo "\t
\t\t";
            // line 25
            // line 26
            echo "
\t\t";
            // line 27
            // line 28
            echo "\t\t
\t\t";
            // line 29
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 30
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 31
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t<span>";
                // line 32
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 36
            echo "
\t\t";
            // line 37
            // line 38
            echo "
\t\t<li>
\t\t\t<a href=\"";
            // line 40
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t<span>";
            // line 41
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 44
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 45
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 46
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 47
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 51
            echo "
\t\t";
            // line 52
            // line 53
            echo "
\t\t<li class=\"separator\"></li>
\t\t
\t\t<li>
\t\t\t<a href=\"";
            // line 57
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<span>";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t
\t\t<li class=\"separator\"></li>
\t\t
\t\t";
            // line 64
            // line 65
            echo "\t\t\t\t\t\t
\t\t
\t\t";
            // line 67
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 68
                echo "\t\t\t<li data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 69
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 74
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 75
                echo "\t\t\t<li data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 76
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\">
\t\t\t\t\t<span>";
                // line 77
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t\t";
                // line 79
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "sidebar.html", 79)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 80
                echo "\t\t\t</li>
\t\t";
            }
            // line 82
            echo "\t\t";
            // line 83
            echo "\t\t
\t";
        } else {
            // line 85
            echo "\t
\t\t<li  data-skip-responsive=\"true\">
\t\t\t<a href=\"";
            // line 87
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<span>";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 91
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 92
                echo "\t\t\t<li data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 93
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 94
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 98
            echo "\t\t";
            // line 99
            echo "\t";
        }
        // line 100
        echo "
\t";
        // line 101
        // line 102
        echo "
\t";
        // line 103
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 104
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 105
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 106
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 107
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 108
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 112
            echo "\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 113
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 114
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 115
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 119
            echo "\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 120
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 121
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 122
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 126
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 127
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
            // line 128
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 132
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
            // line 133
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"separator\"></li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 138
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
            // line 139
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t";
        }
        // line 143
        echo "
\t";
        // line 144
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 145
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 146
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 147
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 148
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 149
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 153
            echo "\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 154
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 155
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<span>";
                // line 156
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 160
            echo "\t";
        }
        // line 161
        echo "\t
\t<li class=\"separator\"></li>

\t";
        // line 164
        // line 165
        echo "\t
\t";
        // line 166
        // line 167
        echo "\t
\t<li ";
        // line 168
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t<a href=\"";
        // line 169
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t<span>";
        // line 170
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t</a>
\t</li>
\t";
        // line 173
        // line 174
        echo "\t";
        if (($context["U_ACP"] ?? null)) {
            // line 175
            echo "\t\t<li data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 176
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t<span>";
            // line 177
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 181
        echo "\t";
        if (($context["U_MCP"] ?? null)) {
            // line 182
            echo "\t\t<li data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 183
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t<span>";
            // line 184
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 188
        echo "
\t<li class=\"separator\"></li>
\t
</ul>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 188,  499 => 184,  493 => 183,  490 => 182,  487 => 181,  480 => 177,  474 => 176,  471 => 175,  468 => 174,  467 => 173,  461 => 170,  455 => 169,  447 => 168,  444 => 167,  443 => 166,  440 => 165,  439 => 164,  434 => 161,  431 => 160,  424 => 156,  420 => 155,  417 => 154,  414 => 153,  407 => 149,  403 => 148,  400 => 147,  398 => 146,  395 => 145,  393 => 144,  390 => 143,  383 => 139,  379 => 138,  371 => 133,  367 => 132,  360 => 128,  356 => 127,  353 => 126,  346 => 122,  342 => 121,  339 => 120,  336 => 119,  329 => 115,  325 => 114,  322 => 113,  319 => 112,  312 => 108,  308 => 107,  305 => 106,  303 => 105,  300 => 104,  298 => 103,  295 => 102,  294 => 101,  291 => 100,  288 => 99,  286 => 98,  279 => 94,  275 => 93,  272 => 92,  270 => 91,  264 => 88,  258 => 87,  254 => 85,  250 => 83,  248 => 82,  244 => 80,  232 => 79,  221 => 77,  217 => 76,  214 => 75,  211 => 74,  198 => 70,  194 => 69,  191 => 68,  189 => 67,  185 => 65,  184 => 64,  175 => 58,  169 => 57,  163 => 53,  162 => 52,  159 => 51,  152 => 47,  146 => 46,  143 => 45,  141 => 44,  135 => 41,  129 => 40,  125 => 38,  124 => 37,  121 => 36,  114 => 32,  110 => 31,  107 => 30,  105 => 29,  102 => 28,  101 => 27,  98 => 26,  97 => 25,  94 => 24,  92 => 23,  87 => 20,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html", "");
    }
}
