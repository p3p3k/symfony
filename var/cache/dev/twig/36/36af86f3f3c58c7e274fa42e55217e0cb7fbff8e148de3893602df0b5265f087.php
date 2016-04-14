<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d8a11d240f834facc43f2043a892efe3d93a79386662c66178d5a9311d3ac58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701b92bd1ee63d50bed9f14dcf2a272972e198468f3c31bc031c2bf4a724be42 = $this->env->getExtension("native_profiler");
        $__internal_701b92bd1ee63d50bed9f14dcf2a272972e198468f3c31bc031c2bf4a724be42->enter($__internal_701b92bd1ee63d50bed9f14dcf2a272972e198468f3c31bc031c2bf4a724be42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701b92bd1ee63d50bed9f14dcf2a272972e198468f3c31bc031c2bf4a724be42->leave($__internal_701b92bd1ee63d50bed9f14dcf2a272972e198468f3c31bc031c2bf4a724be42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa1fff0eeecff798e11308d0228e9eca313327feed77cc334bd998372a58f728 = $this->env->getExtension("native_profiler");
        $__internal_aa1fff0eeecff798e11308d0228e9eca313327feed77cc334bd998372a58f728->enter($__internal_aa1fff0eeecff798e11308d0228e9eca313327feed77cc334bd998372a58f728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa1fff0eeecff798e11308d0228e9eca313327feed77cc334bd998372a58f728->leave($__internal_aa1fff0eeecff798e11308d0228e9eca313327feed77cc334bd998372a58f728_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b40ed7f3c2ae6556b4f3faea1012a5f9bec0720cbb5c829d341847b3f481d4f5 = $this->env->getExtension("native_profiler");
        $__internal_b40ed7f3c2ae6556b4f3faea1012a5f9bec0720cbb5c829d341847b3f481d4f5->enter($__internal_b40ed7f3c2ae6556b4f3faea1012a5f9bec0720cbb5c829d341847b3f481d4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b40ed7f3c2ae6556b4f3faea1012a5f9bec0720cbb5c829d341847b3f481d4f5->leave($__internal_b40ed7f3c2ae6556b4f3faea1012a5f9bec0720cbb5c829d341847b3f481d4f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ced1c70b54c8839b150bf4791b795cadcd0382cdceb6f4f4726a713efc1976a = $this->env->getExtension("native_profiler");
        $__internal_0ced1c70b54c8839b150bf4791b795cadcd0382cdceb6f4f4726a713efc1976a->enter($__internal_0ced1c70b54c8839b150bf4791b795cadcd0382cdceb6f4f4726a713efc1976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ced1c70b54c8839b150bf4791b795cadcd0382cdceb6f4f4726a713efc1976a->leave($__internal_0ced1c70b54c8839b150bf4791b795cadcd0382cdceb6f4f4726a713efc1976a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
