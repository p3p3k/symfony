<?php

/* nhl/articles.html.twig */
class __TwigTemplate_29029e86af5fd7e5d9dbac914a66a3b2a86b93de19358c60bead54b26982532b extends Twig_Template
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
        $__internal_e92f228be9b3c43b5860f304c82336ac689ca7dcba813726d2dd770116dbeff9 = $this->env->getExtension("native_profiler");
        $__internal_e92f228be9b3c43b5860f304c82336ac689ca7dcba813726d2dd770116dbeff9->enter($__internal_e92f228be9b3c43b5860f304c82336ac689ca7dcba813726d2dd770116dbeff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92f228be9b3c43b5860f304c82336ac689ca7dcba813726d2dd770116dbeff9->leave($__internal_e92f228be9b3c43b5860f304c82336ac689ca7dcba813726d2dd770116dbeff9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ccc7c6e27ff01e54f069bc9fc44cb95841da62e4582114e9b365467c2ff6ca = $this->env->getExtension("native_profiler");
        $__internal_04ccc7c6e27ff01e54f069bc9fc44cb95841da62e4582114e9b365467c2ff6ca->enter($__internal_04ccc7c6e27ff01e54f069bc9fc44cb95841da62e4582114e9b365467c2ff6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04ccc7c6e27ff01e54f069bc9fc44cb95841da62e4582114e9b365467c2ff6ca->leave($__internal_04ccc7c6e27ff01e54f069bc9fc44cb95841da62e4582114e9b365467c2ff6ca_prof);

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
/* */
/* */
/* */
/* */
/* {% endblock %}*/
