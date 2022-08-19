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

/* forumlist_body.html */
class __TwigTemplate_1455a9a7a7409fad77351bbdb12b9ec6b767ba039bf87c5e67634cb7b2ef7574 extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 3)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 3))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t\t<hr>
\t";
            }
            // line 10
            echo "
\t";
            // line 11
            // line 12
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 12) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 12)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 12))) {
                // line 13
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 17
                // line 18
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 19)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 19);
                    echo "</a>";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 24
                // line 25
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 29
            echo "\t";
            // line 30
            echo "
\t";
            // line 31
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t\t";
                // line 33
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 34
                // line 35
                echo "\t\t\t<dl class=\"row-item ";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 35);
                echo "\">
\t\t\t\t<dt title=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 36);
                echo "\">
\t\t\t\t\t";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 37)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 37);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 38
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 39
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 41
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 41);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 41);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 42
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 42);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    // line 48
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 48);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 49
                    // line 50
                    echo "\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 51);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 51);
                echo "</a>
\t\t\t\t\t\t";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 52)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 52);
                }
                // line 53
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 54);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 54);
                    echo "
\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 56)) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "\t\t\t\t\t\t\t";
                    // line 58
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 58);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 60);
                        echo "\" class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 60)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 60)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 61
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 61)) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 61)) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 61);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 61)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t\t\t\t";
                    // line 64
                    echo "\t\t\t\t\t\t";
                }
                // line 65
                echo "
\t\t\t\t\t\t";
                // line 66
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 67
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 69);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !twig_get_attribute($this->env, $this->source,                     // line 70
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 70) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 70))) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 71);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 78);
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 79
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 80);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 81);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 85);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 86
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 88
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 89);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 90
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 95
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 95)) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 97);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 97);
                            echo "\" class=\"lastsubject\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 97);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 99);
                        // line 100
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 101);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 102
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 105
                        echo "\t\t\t\t\t\t\t\t<br /><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 105);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 105);
                        echo "</time>
\t\t\t\t\t\t\t";
                    } else {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 107)) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 108));
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 112
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 118
                echo "\t\t\t</dl>
\t\t\t
\t\t\t";
                // line 120
                // line 121
                echo "\t\t</li>
\t\t";
                // line 122
                // line 123
                echo "\t";
            }
            // line 124
            echo "
\t";
            // line 125
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 125)) {
                // line 126
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 130
                // line 131
                echo "\t";
            }
            // line 132
            echo "\t
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 136
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 136,  464 => 134,  458 => 132,  455 => 131,  454 => 130,  448 => 126,  446 => 125,  443 => 124,  440 => 123,  439 => 122,  436 => 121,  435 => 120,  431 => 118,  427 => 116,  422 => 113,  419 => 112,  413 => 110,  407 => 108,  404 => 107,  396 => 105,  390 => 102,  383 => 101,  380 => 100,  375 => 99,  365 => 97,  363 => 96,  361 => 95,  356 => 94,  353 => 93,  347 => 90,  340 => 89,  338 => 88,  333 => 86,  326 => 85,  324 => 84,  316 => 81,  309 => 80,  307 => 79,  299 => 78,  297 => 77,  293 => 75,  289 => 73,  280 => 71,  278 => 70,  270 => 69,  268 => 68,  265 => 67,  263 => 66,  260 => 65,  257 => 64,  255 => 63,  249 => 62,  231 => 61,  213 => 60,  209 => 59,  203 => 58,  201 => 57,  198 => 56,  189 => 54,  186 => 53,  181 => 52,  174 => 51,  171 => 50,  170 => 49,  165 => 48,  163 => 47,  160 => 46,  151 => 42,  141 => 41,  138 => 40,  136 => 39,  133 => 38,  127 => 37,  123 => 36,  118 => 35,  117 => 34,  114 => 33,  112 => 32,  110 => 31,  107 => 30,  105 => 29,  99 => 25,  98 => 24,  93 => 22,  89 => 21,  85 => 20,  73 => 19,  70 => 18,  69 => 17,  63 => 13,  60 => 12,  59 => 11,  56 => 10,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
