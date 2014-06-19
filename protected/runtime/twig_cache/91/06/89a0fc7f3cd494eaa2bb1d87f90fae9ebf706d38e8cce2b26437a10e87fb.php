<?php

/* journalsThemes/default/journals/main.html */
class __TwigTemplate_910689a0fc7f3cd494eaa2bb1d87f90fae9ebf706d38e8cce2b26437a10e87fb extends Twig_Template
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
        <title>asd</title>
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
        return "journalsThemes/default/journals/main.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  30 => 9,  20 => 1,  34 => 5,  31 => 4,  28 => 7,);
    }
}
