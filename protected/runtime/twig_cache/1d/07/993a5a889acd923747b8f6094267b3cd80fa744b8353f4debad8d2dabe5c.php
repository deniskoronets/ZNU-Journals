<?php

/* journalsThemes/default/journals/view.html */
class __TwigTemplate_1d07993a5a889acd923747b8f6094267b3cd80fa744b8353f4debad8d2dabe5c extends Twig_Template
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
        echo "<div class='block'>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "name"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "journalsThemes/default/journals/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
