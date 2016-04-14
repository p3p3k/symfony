<?php

/* nhl/edit.html.twig */
class __TwigTemplate_71d0c44151b0e9c764cdfe8757f0bbff8b1a6ae40b87098b51e0b40eb916a610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/edit.html.twig", 1);
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
        $__internal_1071d5bfd026ade528a74c101d6bf6ed4694079f7cd6f04f770575f0d668b185 = $this->env->getExtension("native_profiler");
        $__internal_1071d5bfd026ade528a74c101d6bf6ed4694079f7cd6f04f770575f0d668b185->enter($__internal_1071d5bfd026ade528a74c101d6bf6ed4694079f7cd6f04f770575f0d668b185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1071d5bfd026ade528a74c101d6bf6ed4694079f7cd6f04f770575f0d668b185->leave($__internal_1071d5bfd026ade528a74c101d6bf6ed4694079f7cd6f04f770575f0d668b185_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fb7a220ebf5e166b2f65d64708ed8067ea89ec617844dcced845bc0cf0d7017 = $this->env->getExtension("native_profiler");
        $__internal_5fb7a220ebf5e166b2f65d64708ed8067ea89ec617844dcced845bc0cf0d7017->enter($__internal_5fb7a220ebf5e166b2f65d64708ed8067ea89ec617844dcced845bc0cf0d7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit article</h2>
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
        
        $__internal_5fb7a220ebf5e166b2f65d64708ed8067ea89ec617844dcced845bc0cf0d7017->leave($__internal_5fb7a220ebf5e166b2f65d64708ed8067ea89ec617844dcced845bc0cf0d7017_prof);

    }

    public function getTemplateName()
    {
        return "nhl/edit.html.twig";
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
/*     <h2 class="page-header">Edit article</h2>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
