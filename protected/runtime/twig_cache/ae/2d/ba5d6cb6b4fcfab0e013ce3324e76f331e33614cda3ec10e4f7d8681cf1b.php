<?php

/* default/journals/registration.html */
class __TwigTemplate_ae2dba5d6cb6b4fcfab0e013ce3324e76f331e33614cda3ec10e4f7d8681cf1b extends Twig_Template
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
    <h1>Регистрация в журнале \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "name"), "html", null, true);
        echo "\"</h1>

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

    <div class='issues'>

        <form action='' method='post'>
            azazaaza, тут будет форма регистрации в журнале
        </form>

        <div style='clear: both;'></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/journals/registration.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  31 => 6,  28 => 5,);
    }
}
