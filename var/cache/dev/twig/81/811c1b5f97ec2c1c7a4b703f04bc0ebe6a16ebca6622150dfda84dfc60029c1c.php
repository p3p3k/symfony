<?php

/* nhl/create.html.twig */
class __TwigTemplate_0a7e6438c2ff7817489466dad7acb8177eb61c66a230b1e9a056915bf7c303f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9da992481ca19c2eb7c4461c8c02125970bec4971deaaa18d98f0cd58912d81 = $this->env->getExtension("native_profiler");
        $__internal_e9da992481ca19c2eb7c4461c8c02125970bec4971deaaa18d98f0cd58912d81->enter($__internal_e9da992481ca19c2eb7c4461c8c02125970bec4971deaaa18d98f0cd58912d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9da992481ca19c2eb7c4461c8c02125970bec4971deaaa18d98f0cd58912d81->leave($__internal_e9da992481ca19c2eb7c4461c8c02125970bec4971deaaa18d98f0cd58912d81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_536d624449109535b9f98965ba63cb0d123f0a0e7bb79da18b06e014d565e3a3 = $this->env->getExtension("native_profiler");
        $__internal_536d624449109535b9f98965ba63cb0d123f0a0e7bb79da18b06e014d565e3a3->enter($__internal_536d624449109535b9f98965ba63cb0d123f0a0e7bb79da18b06e014d565e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add article</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_536d624449109535b9f98965ba63cb0d123f0a0e7bb79da18b06e014d565e3a3->leave($__internal_536d624449109535b9f98965ba63cb0d123f0a0e7bb79da18b06e014d565e3a3_prof);

    }

    public function getTemplateName()
    {
        return "nhl/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Add article</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
