<?php

/* journalsThemes/default/pages/view.html */
class __TwigTemplate_a1ff9814379369708b2f6dcb35e0671db018165724d85bc0f7487cda17413b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("journalsThemes/default/main.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "journalsThemes/default/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
        echo "</h1>

";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["pageContent"]) ? $context["pageContent"] : null), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "journalsThemes/default/pages/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
