<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a79fa62d6e35c46ad1edf50d5999e4aa103c960296b0797173370bfff210f9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db47ea205ecdcacca3b5d2a77284ee9e24e27cc586dd87f734d0ce44018015f = $this->env->getExtension("native_profiler");
        $__internal_5db47ea205ecdcacca3b5d2a77284ee9e24e27cc586dd87f734d0ce44018015f->enter($__internal_5db47ea205ecdcacca3b5d2a77284ee9e24e27cc586dd87f734d0ce44018015f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db47ea205ecdcacca3b5d2a77284ee9e24e27cc586dd87f734d0ce44018015f->leave($__internal_5db47ea205ecdcacca3b5d2a77284ee9e24e27cc586dd87f734d0ce44018015f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0109a2bd2f11eae7b7905937d59dbe3a4c4c92970791311d630fa4bbe0e9dd2e = $this->env->getExtension("native_profiler");
        $__internal_0109a2bd2f11eae7b7905937d59dbe3a4c4c92970791311d630fa4bbe0e9dd2e->enter($__internal_0109a2bd2f11eae7b7905937d59dbe3a4c4c92970791311d630fa4bbe0e9dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0109a2bd2f11eae7b7905937d59dbe3a4c4c92970791311d630fa4bbe0e9dd2e->leave($__internal_0109a2bd2f11eae7b7905937d59dbe3a4c4c92970791311d630fa4bbe0e9dd2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_caab19b3ba29cd9bbc83c4573d496310ac3e75cfca6ccdf6a300c05f65e33db6 = $this->env->getExtension("native_profiler");
        $__internal_caab19b3ba29cd9bbc83c4573d496310ac3e75cfca6ccdf6a300c05f65e33db6->enter($__internal_caab19b3ba29cd9bbc83c4573d496310ac3e75cfca6ccdf6a300c05f65e33db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_caab19b3ba29cd9bbc83c4573d496310ac3e75cfca6ccdf6a300c05f65e33db6->leave($__internal_caab19b3ba29cd9bbc83c4573d496310ac3e75cfca6ccdf6a300c05f65e33db6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_01eb43ed0cbf3aae2025d456be54b413b58ee612d0014a2836d95d348882de99 = $this->env->getExtension("native_profiler");
        $__internal_01eb43ed0cbf3aae2025d456be54b413b58ee612d0014a2836d95d348882de99->enter($__internal_01eb43ed0cbf3aae2025d456be54b413b58ee612d0014a2836d95d348882de99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_01eb43ed0cbf3aae2025d456be54b413b58ee612d0014a2836d95d348882de99->leave($__internal_01eb43ed0cbf3aae2025d456be54b413b58ee612d0014a2836d95d348882de99_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
