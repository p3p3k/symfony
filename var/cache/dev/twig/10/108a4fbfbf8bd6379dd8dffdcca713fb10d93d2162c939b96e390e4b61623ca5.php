<?php

/* nhl/articles.html.twig */
class __TwigTemplate_5421b99a271686f68403f673331e04cd8e59db9ff27295ab1d1041b2ba4a66a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/articles.html.twig", 1);
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
        $__internal_2467956d3e99b894b2972b7785b6ca53f80ee1a0366e2fa19f4bfb67f5a6c6d8 = $this->env->getExtension("native_profiler");
        $__internal_2467956d3e99b894b2972b7785b6ca53f80ee1a0366e2fa19f4bfb67f5a6c6d8->enter($__internal_2467956d3e99b894b2972b7785b6ca53f80ee1a0366e2fa19f4bfb67f5a6c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2467956d3e99b894b2972b7785b6ca53f80ee1a0366e2fa19f4bfb67f5a6c6d8->leave($__internal_2467956d3e99b894b2972b7785b6ca53f80ee1a0366e2fa19f4bfb67f5a6c6d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e24a82b6fe2435771e9201a25a300bf99a60e120ffab6db13d4aa63b938438ee = $this->env->getExtension("native_profiler");
        $__internal_e24a82b6fe2435771e9201a25a300bf99a60e120ffab6db13d4aa63b938438ee->enter($__internal_e24a82b6fe2435771e9201a25a300bf99a60e120ffab6db13d4aa63b938438ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Articles</h2>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>#</th>
            <th>Article Name</th>
            <th>Author Name</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
        </thead>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["nhl"]);
        foreach ($context['_seq'] as $context["_key"] => $context["nhl"]) {
            // line 16
            echo "        <tbody>
        <tr>
            <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "articleName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "name", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["nhl"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "
            </td>
            <td>
                <a href=\"/nhl/details/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View </a>
                <a href=\"/nhl/edit/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit </a>
                <a href=\"/nhl/delete/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["nhl"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete </a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nhl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

";
        
        $__internal_e24a82b6fe2435771e9201a25a300bf99a60e120ffab6db13d4aa63b938438ee->leave($__internal_e24a82b6fe2435771e9201a25a300bf99a60e120ffab6db13d4aa63b938438ee_prof);

    }

    public function getTemplateName()
    {
        return "nhl/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  88 => 27,  84 => 26,  80 => 25,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Articles</h2>*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Article Name</th>*/
/*             <th>Author Name</th>*/
/*             <th>Create Date</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         {% for nhl in nhl %}*/
/*         <tbody>*/
/*         <tr>*/
/*             <th scope="row">{{ nhl.id }}</th>*/
/*             <td>{{ nhl.articleName }}</td>*/
/*             <td>{{ nhl.name }}</td>*/
/*             <td>*/
/*                 {{ nhl.createDate|date('F j, Y, g:i a') }}*/
/*             </td>*/
/*             <td>*/
/*                 <a href="/nhl/details/{{ nhl.id }}" class="btn btn-success">View </a>*/
/*                 <a href="/nhl/edit/{{ nhl.id }}" class="btn btn-primary">Edit </a>*/
/*                 <a href="/nhl/delete/{{ nhl.id }}" class="btn btn-danger">Delete </a>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
