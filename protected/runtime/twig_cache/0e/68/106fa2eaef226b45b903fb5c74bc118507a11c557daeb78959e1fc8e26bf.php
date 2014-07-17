<?php

/* default/main.html */
class __TwigTemplate_0e68106fa2eaef226b45b903fb5c74bc118507a11c557daeb78959e1fc8e26bf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"language\" content=\"en\" />

\t<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageTitle")), "method"), "html", null, true);
        echo "</title>

\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "bootstrap"), "register", array(), "method"), "html", null, true);
        echo "

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\" /assets/e3ecaab1/css/bootstrap.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\" /assets/e3ecaab1/css/bootstrap-responsive.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\" /assets/e3ecaab1/css/yii.css\" />
    <script type=\"text/javascript\" src=\" /assets/f768c3e2/jquery.js\"></script>
    <script type=\"text/javascript\" src=\" /assets/e3ecaab1/js/bootstrap.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "theme"), "baseUrl"), "html", null, true);
        echo "/css/styles.css\" />

</head>

<body>

    ";
        // line 24
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "bootstrap.widgets.TbNavbar", 1 => array("items" => array(0 => array("class" => "bootstrap.widgets.TbMenu", "items" => array(0 => array("label" => "Список журналов", "url" => array(0 => "journals/index")), 1 => array("label" => "Регистрация", "url" => array(0 => "site/registration"), "visible" => $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "isGuest")), 2 => array("label" => "Авторизация", "url" => array(0 => "/site/login"), "visible" => $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "isGuest")), 3 => array("label" => (("Выход (" . $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "name")) . ")"), "url" => array(0 => "/site/logout"), "visible" => (!$this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "isGuest"))))))), 2 => true), "method");
        // line 38
        echo "

<div class=\"container\" id=\"page\">

    ";
        // line 42
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "bootstrap.widgets.TbBreadcrumbs", 1 => array("links" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "breadcrumbs")), 2 => true), "method");
        // line 44
        echo "

\t";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
</div>

</body>
</html>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "        Default content
    ";
    }

    public function getTemplateName()
    {
        return "default/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 47,  79 => 46,  70 => 49,  68 => 46,  64 => 44,  62 => 42,  56 => 38,  54 => 24,  45 => 18,  33 => 9,  28 => 7,  20 => 1,);
    }
}
