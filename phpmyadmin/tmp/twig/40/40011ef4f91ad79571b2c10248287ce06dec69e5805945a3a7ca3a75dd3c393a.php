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

/* server/databases/table_row.twig */
class __TwigTemplate_b458adde902113d6b01b9c21fbac34c727eff437c1f37530a7c34b230e4610cd extends \Twig\Template
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
        echo "<tr";
        if (($context["tr_class"] ?? null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["tr_class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array")), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 3
            echo "        <td class=\"tool\">
            <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"), "html", null, true);
            echo "\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"), "html", null, true);
            echo "\"";
            // line 7
            if (($context["is_system_schema"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " />
        </td>
    ";
        }
        // line 10
        echo "    <td class=\"name\">
        <a href=\"";
        // line 11
        echo PhpMyAdmin\Util::getScriptNameForOption(($context["default_tab_database"] ?? null), "database");
        // line 12
        echo PhpMyAdmin\Url::getCommon(["db" => $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array")]);
        echo "\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, sprintf(_gettext("Jump to database '%s'"), twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"))), "html", null, true);
        echo "\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"), "html", null, true);
        echo "
        </a>
    </td>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 18
            echo "        ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["current"] ?? null)))) {
                // line 19
                echo "            ";
                if (($this->getAttribute($context["stat"], "format", [], "array") === "byte")) {
                    // line 20
                    echo "                ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(($context["current"] ?? null), $context["stat_name"], [], "array"), 3, 1);
                    // line 21
                    echo "                ";
                    $context["value"] = $this->getAttribute(($context["byte_format"] ?? null), 0, [], "array");
                    // line 22
                    echo "                ";
                    $context["unit"] = $this->getAttribute(($context["byte_format"] ?? null), 1, [], "array");
                    // line 23
                    echo "            ";
                } elseif (($this->getAttribute($context["stat"], "format", [], "array") === "number")) {
                    // line 24
                    echo "                ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber($this->getAttribute(($context["current"] ?? null), $context["stat_name"], [], "array"), 0);
                    // line 25
                    echo "            ";
                } else {
                    // line 26
                    echo "                ";
                    $context["value"] = htmlentities($this->getAttribute(($context["current"] ?? null), $context["stat_name"], [], "array"), 0);
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "
            <td class=\"value\">
                ";
                // line 30
                if ($this->getAttribute($context["stat"], "description_function", [], "array", true, true)) {
                    // line 31
                    echo "                    <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($this->getAttribute(($context["current"] ?? null), $context["stat_name"], [], "array")), "html", null, true);
                    echo "\">
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    </dfn>
                ";
                } else {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                ";
                }
                // line 37
                echo "            </td>
            ";
                // line 38
                if (($this->getAttribute($context["stat"], "format", [], "array") === "byte")) {
                    // line 39
                    echo "                <td class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</td>
            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    ";
        // line 44
        if (($context["master_replication_status"] ?? null)) {
            // line 45
            echo "        <td class=\"tool center\">
            ";
            // line 46
            echo ($context["master_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (($context["slave_replication_status"] ?? null)) {
            // line 51
            echo "        <td class=\"tool center\">
            ";
            // line 52
            echo ($context["slave_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 55
        echo "
    <td class=\"tool\">
        <a class=\"server_databases\" data=\"";
        // line 58
        echo PhpMyAdmin\Sanitize::jsFormat($this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"));
        echo "\" href=\"server_privileges.php";
        // line 59
        echo PhpMyAdmin\Url::getCommon(["db" => $this->getAttribute(        // line 60
($context["current"] ?? null), "SCHEMA_NAME", [], "array"), "checkprivsdb" => $this->getAttribute(        // line 61
($context["current"] ?? null), "SCHEMA_NAME", [], "array")]);
        // line 62
        echo "\" title=\"";
        // line 63
        echo twig_escape_filter($this->env, sprintf(_gettext("Check privileges for database \"%s\"."), twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", [], "array"))), "html", null, true);
        echo "\">
            ";
        // line 64
        echo PhpMyAdmin\Util::getIcon("s_rights", _gettext("Check privileges"));
        echo "
        </a>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  196 => 63,  194 => 62,  192 => 61,  191 => 60,  190 => 59,  187 => 58,  183 => 55,  177 => 52,  174 => 51,  172 => 50,  169 => 49,  163 => 46,  160 => 45,  158 => 44,  155 => 43,  149 => 42,  146 => 41,  140 => 39,  138 => 38,  135 => 37,  129 => 35,  123 => 32,  118 => 31,  116 => 30,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  52 => 7,  49 => 6,  46 => 5,  43 => 3,  41 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/table_row.twig", "C:\\Users\\Descom\\Music\\USBWebServer\\phpmyadmin\\templates\\server\\databases\\table_row.twig");
    }
}
