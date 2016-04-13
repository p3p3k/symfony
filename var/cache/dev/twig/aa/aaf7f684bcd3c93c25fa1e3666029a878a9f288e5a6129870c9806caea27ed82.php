<?php

/* nhl/edit.html.twig */
class __TwigTemplate_2672246ab782c902d15d55884f38c6ba853d917230e73e709c2b4f213bbd0fe4 extends Twig_Template
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
        $__internal_bef8236d662d19db27054cc067817894f1e0ef60df6ee8a344a470aac0207d81 = $this->env->getExtension("native_profiler");
        $__internal_bef8236d662d19db27054cc067817894f1e0ef60df6ee8a344a470aac0207d81->enter($__internal_bef8236d662d19db27054cc067817894f1e0ef60df6ee8a344a470aac0207d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef8236d662d19db27054cc067817894f1e0ef60df6ee8a344a470aac0207d81->leave($__internal_bef8236d662d19db27054cc067817894f1e0ef60df6ee8a344a470aac0207d81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a7a4e0713ba2f7de42588838ba5e6493540dd57164dfa9ff671fed9a3be070 = $this->env->getExtension("native_profiler");
        $__internal_51a7a4e0713ba2f7de42588838ba5e6493540dd57164dfa9ff671fed9a3be070->enter($__internal_51a7a4e0713ba2f7de42588838ba5e6493540dd57164dfa9ff671fed9a3be070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51a7a4e0713ba2f7de42588838ba5e6493540dd57164dfa9ff671fed9a3be070->leave($__internal_51a7a4e0713ba2f7de42588838ba5e6493540dd57164dfa9ff671fed9a3be070_prof);

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
