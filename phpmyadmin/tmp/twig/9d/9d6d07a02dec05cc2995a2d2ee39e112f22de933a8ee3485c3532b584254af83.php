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

/* console/bookmark_content.twig */
class __TwigTemplate_8cb2ce55c46f82276332d0950094c53ff9a1d005833828feb64eb4537a200137 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"message welcome\">
    <span>";
        // line 2
        echo twig_escape_filter($this->env, ($context["welcome_message"] ?? null), "html", null, true);
        echo "</span>
</div>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bookmarks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
            // line 5
            echo "    <div class=\"message collapsed bookmark\" bookmarkid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "getId", [], "method"), "html", null, true);
            echo "\"
        targetdb=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "getDatabase", [], "method"), "html", null, true);
            echo "\">
        ";
            // line 7
            $this->loadTemplate("console/query_action.twig", "console/bookmark_content.twig", 7)->display(twig_to_array(["parent_div_classes" => "action_content", "content_array" => [0 => [0 => "action collapse", 1 => _gettext("Collapse")], 1 => [0 => "action expand", 1 => _gettext("Expand")], 2 => [0 => "action requery", 1 => _gettext("Requery")], 3 => [0 => "action edit_bookmark", 1 => _gettext("Edit")], 4 => [0 => "action delete_bookmark", 1 => _gettext("Delete")], 5 => [0 => "text targetdb", 1 => _gettext("Database"), "extraSpan" => $this->getAttribute(            // line 15
$context["bookmark"], "getDatabase", [], "method")]]]));
            // line 18
            echo "        <span class=\"bookmark_label";
            echo ((twig_test_empty($this->getAttribute($context["bookmark"], "getUser", [], "method"))) ? (" shared") : (""));
            echo "\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "getLabel", [], "method"), "html", null, true);
            echo "
        </span>
        <span class=\"query\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "getQuery", [], "method"), "html", null, true);
            echo "
        </span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "console/bookmark_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 19,  54 => 18,  52 => 15,  51 => 7,  47 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "console/bookmark_content.twig", "C:\\Users\\Descom\\Music\\USBWebServer\\phpmyadmin\\templates\\console\\bookmark_content.twig");
    }
}
