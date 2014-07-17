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
        echo "
<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "name"), "html", null, true);
        echo "</h1>

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

<div class='speedlinks'>
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "static_pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 37
            echo "         <?php if (\$staticPage->is_visible) { \$v++; ?>
                        <li><a href='<?php echo \$this->createUrl('pages/view', array('pageId' => \$staticPage->static_page_id)); ?>'>
                            <?php echo \$staticPage->name; ?>
                        </a></li>
                        <?php } }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>

<div class='issues'>

    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "issues"));
        foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
            // line 48
            echo "    <div class='issue'>
        <div class='cont'>
            <h3><a href='";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "createUrl", array(0 => "issues/view", 1 => array("issueId" => $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "issue_id"))), "method"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "name"), "html", null, true);
            echo "</a></h3>
            <img src='";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "image"), "html", null, true);
            echo "' style='width: 200px;'>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    <div style='clear: both;'></div>
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
        return array (  113 => 55,  103 => 51,  97 => 50,  93 => 48,  89 => 47,  83 => 43,  72 => 37,  68 => 36,  34 => 5,  31 => 4,  28 => 3,);
    }
}
