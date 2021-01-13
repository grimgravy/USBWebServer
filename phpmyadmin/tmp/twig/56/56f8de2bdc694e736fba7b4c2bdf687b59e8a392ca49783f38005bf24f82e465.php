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

/* server/databases/databases_footer.twig */
class __TwigTemplate_4e4bac2fd075ae738877b674f737e7dcb73d752aa10919a153976e53633f5553 extends \Twig\Template
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
        echo "<tfoot>
    <tr>
        ";
        // line 3
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 4
            echo "            <th></th>
        ";
        }
        // line 6
        echo "        <th>
            ";
        // line 7
        echo _gettext("Total");
        echo ": <span id=\"filter-rows-count\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["database_count"] ?? null), "html", null, true);
        // line 9
        echo "</span>
        </th>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 12
            echo "            ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 13
                echo "                ";
                if (($this->getAttribute($context["stat"], "format", [], "array") === "byte")) {
                    // line 14
                    echo "                    ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute($context["stat"], "footer", [], "array"), 3, 1);
                    // line 15
                    echo "                    ";
                    $context["value"] = $this->getAttribute(($context["byte_format"] ?? null), 0, [], "array");
                    // line 16
                    echo "                    ";
                    $context["unit"] = $this->getAttribute(($context["byte_format"] ?? null), 1, [], "array");
                    // line 17
                    echo "                ";
                } elseif (($this->getAttribute($context["stat"], "format", [], "array") === "number")) {
                    // line 18
                    echo "                    ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber($this->getAttribute($context["stat"], "footer", [], "array"), 0);
                    // line 19
                    echo "                ";
                } else {
                    // line 20
                    echo "                    ";
                    $context["value"] = htmlentities($this->getAttribute($context["stat"], "footer", [], "array"), 0);
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "
                <th class=\"value\">
                    ";
                // line 24
                if ($this->getAttribute($context["stat"], "description_function", [], "array", true, true)) {
                    // line 25
                    echo "                        <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($this->getAttribute($context["stat"], "footer", [], "array")), "html", null, true);
                    echo "\">
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                        </dfn>
                    ";
                } else {
                    // line 29
                    echo "                        ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    ";
                }
                // line 31
                echo "                </th>
                ";
                // line 32
                if (($this->getAttribute($context["stat"], "format", [], "array") === "byte")) {
                    // line 33
                    echo "                    <th class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</th>
                ";
                }
                // line 35
                echo "            ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        if (($context["master_replication"] ?? null)) {
            // line 38
            echo "            <th></th>
        ";
        }
        // line 40
        echo "        ";
        if (($context["slave_replication"] ?? null)) {
            // line 41
            echo "            <th></th>
        ";
        }
        // line 43
        echo "        <th></th>
    </tr>
</tfoot>
</table>
</div>

";
        // line 50
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 51
            echo "    ";
            $this->loadTemplate("select_all.twig", "server/databases/databases_footer.twig", 51)->display(twig_to_array(["pma_theme_image" =>             // line 52
($context["pma_theme_image"] ?? null), "text_dir" =>             // line 53
($context["text_dir"] ?? null), "form_name" => "dbStatsForm"]));
            // line 56
            echo "
    ";
            // line 57
            echo PhpMyAdmin\Util::getButtonOrImage("", "mult_submit ajax", _gettext("Drop"), "b_deltbl");
            // line 62
            echo "
";
        }
        // line 64
        echo "
";
        // line 66
        if (twig_test_empty(($context["dbstats"] ?? null))) {
            // line 67
            echo "    ";
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), [_gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.")]);
            echo "
    <ul>
        <li class=\"li_switch_dbstats\">
            <a href=\"server_databases.php\" data-post=\"";
            // line 70
            echo PhpMyAdmin\Url::getCommon(["dbstats" => "1"], "");
            echo "\" title=\"";
            echo _gettext("Enable statistics");
            echo "\">
                <strong>";
            // line 71
            echo _gettext("Enable statistics");
            echo "</strong>
            </a>
        </li>
    </ul>
";
        }
        // line 76
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/databases/databases_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 76,  185 => 71,  179 => 70,  172 => 67,  170 => 66,  167 => 64,  163 => 62,  161 => 57,  158 => 56,  156 => 53,  155 => 52,  153 => 51,  151 => 50,  143 => 43,  139 => 41,  136 => 40,  132 => 38,  129 => 37,  123 => 36,  120 => 35,  114 => 33,  112 => 32,  109 => 31,  103 => 29,  97 => 26,  92 => 25,  90 => 24,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/databases_footer.twig", "C:\\Users\\Descom\\Music\\USBWebServer\\phpmyadmin\\templates\\server\\databases\\databases_footer.twig");
    }
}
