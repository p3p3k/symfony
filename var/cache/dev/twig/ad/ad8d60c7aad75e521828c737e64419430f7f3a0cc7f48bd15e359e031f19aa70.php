<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ba3d4e253daa3ead0abf1caed09cd6c76fd49f00b571704eb2d110659a351cb2 extends Twig_Template
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
        $__internal_396ffb000212f8e9ea366433c9e1f577c45418e419d2fe394237b07b625011d8 = $this->env->getExtension("native_profiler");
        $__internal_396ffb000212f8e9ea366433c9e1f577c45418e419d2fe394237b07b625011d8->enter($__internal_396ffb000212f8e9ea366433c9e1f577c45418e419d2fe394237b07b625011d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_396ffb000212f8e9ea366433c9e1f577c45418e419d2fe394237b07b625011d8->leave($__internal_396ffb000212f8e9ea366433c9e1f577c45418e419d2fe394237b07b625011d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f9f199dc76f3c47425ca9ae0f25f28957097229294c7dda3e90b4d928d524fb = $this->env->getExtension("native_profiler");
        $__internal_0f9f199dc76f3c47425ca9ae0f25f28957097229294c7dda3e90b4d928d524fb->enter($__internal_0f9f199dc76f3c47425ca9ae0f25f28957097229294c7dda3e90b4d928d524fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f9f199dc76f3c47425ca9ae0f25f28957097229294c7dda3e90b4d928d524fb->leave($__internal_0f9f199dc76f3c47425ca9ae0f25f28957097229294c7dda3e90b4d928d524fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f0a4926e95546239339dc240ed971ecfcf8dcd2663f313264bc5edcc6d28297 = $this->env->getExtension("native_profiler");
        $__internal_5f0a4926e95546239339dc240ed971ecfcf8dcd2663f313264bc5edcc6d28297->enter($__internal_5f0a4926e95546239339dc240ed971ecfcf8dcd2663f313264bc5edcc6d28297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f0a4926e95546239339dc240ed971ecfcf8dcd2663f313264bc5edcc6d28297->leave($__internal_5f0a4926e95546239339dc240ed971ecfcf8dcd2663f313264bc5edcc6d28297_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_abbcd8a42bd4e38d293d1c3b96ad0520c9796ff924aa98b4bc0a11e450bba666 = $this->env->getExtension("native_profiler");
        $__internal_abbcd8a42bd4e38d293d1c3b96ad0520c9796ff924aa98b4bc0a11e450bba666->enter($__internal_abbcd8a42bd4e38d293d1c3b96ad0520c9796ff924aa98b4bc0a11e450bba666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_abbcd8a42bd4e38d293d1c3b96ad0520c9796ff924aa98b4bc0a11e450bba666->leave($__internal_abbcd8a42bd4e38d293d1c3b96ad0520c9796ff924aa98b4bc0a11e450bba666_prof);

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
