<?php

/* /views/site/index.html */
class __TwigTemplate_815ca3509da9ebf215d9a0145c7310733adada0744f2660b887f6e4118883c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "asd ";
        echo twig_escape_filter($this->env, (isset($context["some"]) ? $context["some"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/views/site/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
