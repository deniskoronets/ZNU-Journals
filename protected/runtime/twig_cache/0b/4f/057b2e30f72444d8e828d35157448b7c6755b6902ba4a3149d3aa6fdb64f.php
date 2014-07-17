<?php

/* default/articles/view.html */
class __TwigTemplate_0b4f057b2e30f72444d8e828d35157448b7c6755b6902ba4a3149d3aa6fdb64f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "issue"), "name"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name"), "html", null, true);
        echo "</small></h1>

    <div style='margin: 20px 0;'>
        <script type=\"text/javascript\" src=\"//yandex.st/share/share.js\"
        charset=\"utf-8\"></script>
        <div class=\"yashare-auto-init\" data-yashareL10n=\"ru\"
         data-yashareQuickServices=\"yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,gplus\" data-yashareTheme=\"counter\"
        ></div>
    </div>

    --тут нужно вывести статейку --<br>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getFilePathForHtml", array(), "method"), "html", null, true);
        echo "

    <hr>

    <a href='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getFilePathForHtml", array(), "method"), "html", null, true);
        echo "'>&raquo; Скачать статью</a>

    <hr>

    <!-- комментарии -->
    <div id=\"disqus_thread\"></div>
    <script type=\"text/javascript\">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'znu'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    <!-- / комментарии -->

    <hr>
";
    }

    public function getTemplateName()
    {
        return "default/articles/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  50 => 18,  34 => 7,  31 => 6,  28 => 5,);
    }
}
