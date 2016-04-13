<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e02788957e0d5633341b22942d022e2afadc1b0c0afe3ba2100dfcbcf84bedf1 extends Twig_Template
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
        $__internal_864c40a235108c476c19eaf760863e2f67faaef95f2cdd77dc1792e373c8df06 = $this->env->getExtension("native_profiler");
        $__internal_864c40a235108c476c19eaf760863e2f67faaef95f2cdd77dc1792e373c8df06->enter($__internal_864c40a235108c476c19eaf760863e2f67faaef95f2cdd77dc1792e373c8df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_864c40a235108c476c19eaf760863e2f67faaef95f2cdd77dc1792e373c8df06->leave($__internal_864c40a235108c476c19eaf760863e2f67faaef95f2cdd77dc1792e373c8df06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c0cbfcfe84ffeb2dad79df02ea75667e3b088dbb5a3d7eddb61017e883db318 = $this->env->getExtension("native_profiler");
        $__internal_6c0cbfcfe84ffeb2dad79df02ea75667e3b088dbb5a3d7eddb61017e883db318->enter($__internal_6c0cbfcfe84ffeb2dad79df02ea75667e3b088dbb5a3d7eddb61017e883db318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c0cbfcfe84ffeb2dad79df02ea75667e3b088dbb5a3d7eddb61017e883db318->leave($__internal_6c0cbfcfe84ffeb2dad79df02ea75667e3b088dbb5a3d7eddb61017e883db318_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_346947a528de7d879e230bca6247b2d43139bbea26039a6d1c397b20ab4b7ecc = $this->env->getExtension("native_profiler");
        $__internal_346947a528de7d879e230bca6247b2d43139bbea26039a6d1c397b20ab4b7ecc->enter($__internal_346947a528de7d879e230bca6247b2d43139bbea26039a6d1c397b20ab4b7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_346947a528de7d879e230bca6247b2d43139bbea26039a6d1c397b20ab4b7ecc->leave($__internal_346947a528de7d879e230bca6247b2d43139bbea26039a6d1c397b20ab4b7ecc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebe5199fb2f73ce28ec798857828c39c89241cff6baa485880f068a4f79d0196 = $this->env->getExtension("native_profiler");
        $__internal_ebe5199fb2f73ce28ec798857828c39c89241cff6baa485880f068a4f79d0196->enter($__internal_ebe5199fb2f73ce28ec798857828c39c89241cff6baa485880f068a4f79d0196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebe5199fb2f73ce28ec798857828c39c89241cff6baa485880f068a4f79d0196->leave($__internal_ebe5199fb2f73ce28ec798857828c39c89241cff6baa485880f068a4f79d0196_prof);

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
