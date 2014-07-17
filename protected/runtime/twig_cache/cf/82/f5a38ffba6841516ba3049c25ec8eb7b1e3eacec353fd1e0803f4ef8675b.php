<?php

/* journalsThemes/default/journals/index.html */
class __TwigTemplate_cf82f5a38ffba6841516ba3049c25ec8eb7b1e3eacec353fd1e0803f4ef8675b extends Twig_Template
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
<h1>Журналы</h1>

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["journals"]) ? $context["journals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["journal"]) {
            // line 8
            echo "    <div class='journal'>
        <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "name"), "html", null, true);
            echo "</h2>
        <ul>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "issues"));
            foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : null), "name"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "journalsThemes/default/journals/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  61 => 14,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
