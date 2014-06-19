<?php

/* journalsThemes/default/main.html */
class __TwigTemplate_c5997eb3a68497bc7ff41fb223fad9b6147cfcaa7745ebbfb6c2d47c4b7b25ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "title"), "html", null, true);
        echo "</title>
        <meta charset='utf-8'>
    </head>
    <body>
        ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "    </body>
</html>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    public function getTemplateName()
    {
        return "journalsThemes/default/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  33 => 9,  31 => 7,  24 => 3,  20 => 1,);
    }
}
