<?php

/* default/issues/view.html */
class __TwigTemplate_d48e89da7888bd2deeca1364fd73658117a4a204177b8b60f51ef25f4f4ddb3e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "journal"), "name"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "name"), "html", null, true);
        echo "</small></h1>

    <hr>

    ";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "image", array(0 => (("/resources/thumbs/journals_covers/" . $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "image")) . "_480x640px.png"), 1 => true), "method");
        echo "

    <hr>

    <style>
        .articles {
            margin: 0;
        }

        .articles li {
            border: 1px solid gray;
            list-style: none;
            margin: 5px;
            padding: 10px;
        }
    </style>

    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrics"]) ? $context["rubrics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rubric"]) {
            // line 29
            echo "        <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rubric"]) ? $context["rubric"] : null), "info"), "name"), "html", null, true);
            echo "</b>
        <ul class='articles'>
            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["rubric"]) ? $context["rubric"] : null), "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 32
                echo "            <li>
                <p><a href='";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "createUrl", array(0 => "articles/view", 1 => array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "article_id"))), "method"), "html", null, true);
                echo "'>
                    <b>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name"), "html", null, true);
                echo "</b>
                </a></p>
                <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "annotation"), "html", null, true);
                echo "</p>
                <p><i>Авторы: ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "authors"), "html", null, true);
                echo "</p>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/issues/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  102 => 40,  93 => 37,  89 => 36,  84 => 34,  80 => 33,  77 => 32,  73 => 31,  67 => 29,  63 => 28,  43 => 11,  34 => 7,  31 => 6,  28 => 5,);
    }
}
