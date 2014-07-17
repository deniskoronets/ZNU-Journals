<?php

/* journalsThemes/default/issues/view.html */
class __TwigTemplate_995ab8614c0d212e4702cdcca66a0008b56dd37d3cdb7b7e96b10b2b3c0e3aca extends Twig_Template
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
asd

";
    }

    public function getTemplateName()
    {
        return "journalsThemes/default/issues/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
