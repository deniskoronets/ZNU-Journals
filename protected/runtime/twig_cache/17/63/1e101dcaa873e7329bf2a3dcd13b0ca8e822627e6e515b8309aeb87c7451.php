<?php

/* default/journals/view.html */
class __TwigTemplate_17631e101dcaa873e7329bf2a3dcd13b0ca8e822627e6e515b8309aeb87c7451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/main.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "name"), "html", null, true);
        echo "</h1>

    <style>
        .issues {
            clear: both;
        }

        .issue {
            border: 1px solid #eee;
            width: 50%;
            margin: 0 -1px;
            float: left;
        }

        .issue .cont {
            padding: 10px;
        }

        .issue h3 {
            margin: 0;
        }

        .speedlinks {
            padding: 10px;
            border: 1px solid #eee;
            margin-bottom: 5px;
        }

    </style>

    <form action='' method='POST' role='form' class='form'>
        <h3>Поиск</h3>
        <div class='form-group'>
            <label>Год</label>
            <select name='year' class='form-control'>
                <option value=''>Выберите...</option>
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) ? $context["years"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 44
            echo "                <option ";
            if (((isset($context["searchedYear"]) ? $context["searchedYear"] : null) == (isset($context["year"]) ? $context["year"] : null))) {
                echo "SELECTED";
            }
            echo " value='";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo " год.</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </select>
        </div>
        <div class='form-group'>
            <label>Текст поиска</label>
            <input type='text' name='search' class='form-control' value='";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["searchedText"]) ? $context["searchedText"] : null), "html", null, true);
        echo "'>
        </div>
        <div class='form-group'>
            <input type='submit' name='searchButton' value='Найти' class='btn btn-success'>
            <a class='btn btn-success' href='";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "createUrl", array(0 => "", 1 => array("journalId" => $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "journal_id"))), "method"), "html", null, true);
        echo "'>Сброс</a>
        </div>
    </form>

    <div class='speedlinks'>
        <b>Статические страницы:</b>
        <ul>
        ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "static_pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 62
            echo "            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "is_visible")) {
                // line 63
                echo "                <li><a href='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "createUrl", array(0 => "pages/view", 1 => array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "static_page_id"))), "method"), "html", null, true);
                echo "'>
                    ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "
                </a></li>
            ";
            }
            // line 67
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </ul>

        <b>Дополнительные страницы:</b>
        <ul>
        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialPages"]) ? $context["specialPages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["specialPage"]) {
            // line 73
            echo "            <li><a href='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["specialPage"]) ? $context["specialPage"] : null), "url"), "html", null, true);
            echo "'>
                ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["specialPage"]) ? $context["specialPage"] : null), "name"), "html", null, true);
            echo "
            </a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </ul>
    </div>

    <div class='issues'>

        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issues"]) ? $context["issues"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
            // line 83
            echo "        <div class='issue'>
            <div class='cont'>
                <h3><a href='";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "createUrl", array(0 => "issues/view", 1 => array("id" => $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "issue_id"))), "method"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "name"), "html", null, true);
            echo "</a></h3>
                ";
            // line 86
            echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "image", array(0 => (("/resources/thumbs/journals_covers/" . $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "image")) . "_120x180px.png"), 1 => true), "method");
            echo "
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            Выпуски не найдены!
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
        <div style='clear: both;'></div>
    </div>

    <div style='margin-top: 20px;'></div>
    ";
        // line 97
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "CLinkPager", 1 => array("pages" => (isset($context["issuesNumPages"]) ? $context["issuesNumPages"] : null)), 2 => true), "method");
        // line 99
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/journals/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 99,  208 => 97,  201 => 92,  194 => 90,  185 => 86,  179 => 85,  175 => 83,  170 => 82,  163 => 77,  154 => 74,  149 => 73,  145 => 72,  139 => 68,  133 => 67,  127 => 64,  122 => 63,  119 => 62,  115 => 61,  105 => 54,  98 => 50,  92 => 46,  77 => 44,  73 => 43,  34 => 7,  31 => 6,  28 => 5,);
    }
}
