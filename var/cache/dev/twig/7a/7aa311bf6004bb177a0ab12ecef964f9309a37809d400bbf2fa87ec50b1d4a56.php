<?php

/* nhl/details.html.twig */
class __TwigTemplate_f4f4a9d30fd892af7da0b99a9b85b06f84934367ed895f342c8b363f26336abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nhl/details.html.twig", 1);
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
        $__internal_c6e20533a2fa909a0a12933e43f88f8843552bb9aed649f7b9229cc0c5e876e3 = $this->env->getExtension("native_profiler");
        $__internal_c6e20533a2fa909a0a12933e43f88f8843552bb9aed649f7b9229cc0c5e876e3->enter($__internal_c6e20533a2fa909a0a12933e43f88f8843552bb9aed649f7b9229cc0c5e876e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nhl/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e20533a2fa909a0a12933e43f88f8843552bb9aed649f7b9229cc0c5e876e3->leave($__internal_c6e20533a2fa909a0a12933e43f88f8843552bb9aed649f7b9229cc0c5e876e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3195592d3391236491b8c5e2b26b895f27db35da289954c7f83a090a5aa84099 = $this->env->getExtension("native_profiler");
        $__internal_3195592d3391236491b8c5e2b26b895f27db35da289954c7f83a090a5aa84099->enter($__internal_3195592d3391236491b8c5e2b26b895f27db35da289954c7f83a090a5aa84099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/nhl/articles\">Back To Articles</a>
    <a href=\"/nhl/details/";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) + 1), "html", null, true);
        echo "\" class=\"btn btn-success\">Next</a>
    <a href=\"/nhl/details/";
        // line 6
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) - 1), "html", null, true);
        echo "\" class=\"btn btn-primary\">Previous</a>

    <hr>
    <h2 class=\"page-header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "ArticleName", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Author name: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Author email: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "AuthorEmail", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Created at:<strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "DueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong> </li>
    </ul>
    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "description", array()), "html", null, true);
        echo "
    </p>

    ";
        // line 20
        if (($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) > 1)) {
            // line 21
            echo "        <ul class=\"pagination pagination-sm\">
        ";
            // line 23
            echo "        <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
            <a href=\"/nhl/details/";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) - 1), "html", null, true);
            echo "\" class=\"btn btn-primary\">«</a>
        </li>

            ";
            // line 28
            echo "            <li ";
            echo ((($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) == 7)) ? ("class=\"disabled\"") : (""));
            echo ">
                <a href=\"/nhl/details/";
            // line 29
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["nhl"]) ? $context["nhl"] : $this->getContext($context, "nhl")), "id", array()) + 1), "html", null, true);
            echo "\" class=\"btn btn-success\">»</a>
            </li>
        </ul>
    ";
        }
        // line 33
        echo "


";
        
        $__internal_3195592d3391236491b8c5e2b26b895f27db35da289954c7f83a090a5aa84099->leave($__internal_3195592d3391236491b8c5e2b26b895f27db35da289954c7f83a090a5aa84099_prof);

    }

    public function getTemplateName()
    {
        return "nhl/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  103 => 29,  98 => 28,  92 => 24,  87 => 23,  84 => 21,  82 => 20,  76 => 17,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/nhl/articles">Back To Articles</a>*/
/*     <a href="/nhl/details/{{ nhl.id+1 }}" class="btn btn-success">Next</a>*/
/*     <a href="/nhl/details/{{ nhl.id-1 }}" class="btn btn-primary">Previous</a>*/
/* */
/*     <hr>*/
/*     <h2 class="page-header">{{ nhl.ArticleName }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ nhl.category }}</li>*/
/*         <li class="list-group-item">Author name: {{ nhl.name }}</li>*/
/*         <li class="list-group-item">Author email: {{ nhl.AuthorEmail }}</li>*/
/*         <li class="list-group-item">Created at:<strong>{{ nhl.DueDate|date('F j, Y, g:i a') }}</strong> </li>*/
/*     </ul>*/
/*     <p>*/
/*         {{ nhl.description }}*/
/*     </p>*/
/* */
/*     {% if nhl.id > 1 %}*/
/*         <ul class="pagination pagination-sm">*/
/*         {# `«` arrow  #}*/
/*         <li {{ nhl.id == 1 ? 'class="disabled"' }}>*/
/*             <a href="/nhl/details/{{ nhl.id-1 }}" class="btn btn-primary">«</a>*/
/*         </li>*/
/* */
/*             {# `»` arrow #}*/
/*             <li {{ nhl.id == 7 ? 'class="disabled"' }}>*/
/*                 <a href="/nhl/details/{{ nhl.id+1 }}" class="btn btn-success">»</a>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {% endblock %}*/
