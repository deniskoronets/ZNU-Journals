<?php

/* default/pages/view.html */
class __TwigTemplate_eed694988d3cdf8108ba6b48aab83b9094010670be21810da403b4e2d0c2019d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["pageContent"]) ? $context["pageContent"] : null), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/pages/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  31 => 6,  28 => 5,);
    }
}
