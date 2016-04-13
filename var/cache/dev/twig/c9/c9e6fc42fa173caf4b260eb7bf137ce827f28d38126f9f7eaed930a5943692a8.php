<?php

/* base.html.twig */
class __TwigTemplate_7b8d1424d7354a55db196c71f1545ab08ea51680c02530cd1f0e339e5f332d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fab78476607197fd91cc1e57302caa99712097f99d9128b72b3a0bf14c12dc1 = $this->env->getExtension("native_profiler");
        $__internal_2fab78476607197fd91cc1e57302caa99712097f99d9128b72b3a0bf14c12dc1->enter($__internal_2fab78476607197fd91cc1e57302caa99712097f99d9128b72b3a0bf14c12dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">NHL</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Home</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Articles <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"/nhl/articles\">Show Articles</a></li>
                        <li><a href=\"/nhl/create\">Add Article</a></li>

                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            <script type=\"text/javascript\">

                <!--//
                function resizeText(multiplier) {
                    if (document.body.style.fontSize == \"\") {
                        document.body.style.fontSize = \"1.0em\";
                    }
                    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + \"em\";
                }

                function grey()

                {

                    document.body.style.backgroundColor=\"grey\";
                    document.getElementById('p').style.fontSize = '1.2em';


                }

                //-->
                function white()

                {

                    document.body.style.backgroundColor=\"white\";


                }


            </script>





            ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "            <a href=\"#\" class=\"btn btn-success\" onclick=\"grey()\">click for grey BG </a>
            <a href=\"#\" class=\"btn btn-primary\" onclick=\"white()\">click for white BG </a>
            <a href=\"#\" class=\"btn btn-danger\" alt=\"Increase text size\" onclick=\"resizeText(1)\">Text size +</a>
            <a href=\"#\" class=\"btn btn-default\" alt=\"Increase text size\" onclick=\"resizeText(-1)\">Text size -</a>
        </div>

    </div>

</div><!-- /.container -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
</body>
</html>
";
        
        $__internal_2fab78476607197fd91cc1e57302caa99712097f99d9128b72b3a0bf14c12dc1->leave($__internal_2fab78476607197fd91cc1e57302caa99712097f99d9128b72b3a0bf14c12dc1_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f922bf3f5706d19a470c44fe12f3b3eae032b947fcf93fd1ad5c665b1d3963d1 = $this->env->getExtension("native_profiler");
        $__internal_f922bf3f5706d19a470c44fe12f3b3eae032b947fcf93fd1ad5c665b1d3963d1->enter($__internal_f922bf3f5706d19a470c44fe12f3b3eae032b947fcf93fd1ad5c665b1d3963d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f922bf3f5706d19a470c44fe12f3b3eae032b947fcf93fd1ad5c665b1d3963d1->leave($__internal_f922bf3f5706d19a470c44fe12f3b3eae032b947fcf93fd1ad5c665b1d3963d1_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca2df1189b0c21c8d1c6b5d87875f71f3288bbcc6920dbc220ffc20a4c111848 = $this->env->getExtension("native_profiler");
        $__internal_ca2df1189b0c21c8d1c6b5d87875f71f3288bbcc6920dbc220ffc20a4c111848->enter($__internal_ca2df1189b0c21c8d1c6b5d87875f71f3288bbcc6920dbc220ffc20a4c111848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca2df1189b0c21c8d1c6b5d87875f71f3288bbcc6920dbc220ffc20a4c111848->leave($__internal_ca2df1189b0c21c8d1c6b5d87875f71f3288bbcc6920dbc220ffc20a4c111848_prof);

    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d6daaf60756fdca91b9f5e35a2018402e04860042a66266d373afb11b82497 = $this->env->getExtension("native_profiler");
        $__internal_f9d6daaf60756fdca91b9f5e35a2018402e04860042a66266d373afb11b82497->enter($__internal_f9d6daaf60756fdca91b9f5e35a2018402e04860042a66266d373afb11b82497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9d6daaf60756fdca91b9f5e35a2018402e04860042a66266d373afb11b82497->leave($__internal_f9d6daaf60756fdca91b9f5e35a2018402e04860042a66266d373afb11b82497_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e707571237373f34252e90d0b7e1733653fced4301d9bf39df365776150b035 = $this->env->getExtension("native_profiler");
        $__internal_4e707571237373f34252e90d0b7e1733653fced4301d9bf39df365776150b035->enter($__internal_4e707571237373f34252e90d0b7e1733653fced4301d9bf39df365776150b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e707571237373f34252e90d0b7e1733653fced4301d9bf39df365776150b035->leave($__internal_4e707571237373f34252e90d0b7e1733653fced4301d9bf39df365776150b035_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 112,  209 => 100,  198 => 17,  186 => 12,  176 => 113,  174 => 112,  161 => 101,  159 => 100,  120 => 63,  111 => 61,  107 => 60,  104 => 59,  95 => 57,  91 => 56,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">NHL</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="/">Home</a></li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="/nhl/articles">Show Articles</a></li>*/
/*                         <li><a href="/nhl/create">Add Article</a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% for flash_message in app.session.flashbag.get('notice')%}*/
/*                 <div class="alert alert-success">{{ flash_message }}</div>*/
/*             {% endfor %}*/
/* */
/*             {% for flash_message in app.session.flashbag.get('error')%}*/
/*                 <div class="alert alert-danger">{{ flash_message }}</div>*/
/*             {% endfor %}*/
/*             <script type="text/javascript">*/
/* */
/*                 <!--//*/
/*                 function resizeText(multiplier) {*/
/*                     if (document.body.style.fontSize == "") {*/
/*                         document.body.style.fontSize = "1.0em";*/
/*                     }*/
/*                     document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";*/
/*                 }*/
/* */
/*                 function grey()*/
/* */
/*                 {*/
/* */
/*                     document.body.style.backgroundColor="grey";*/
/*                     document.getElementById('p').style.fontSize = '1.2em';*/
/* */
/* */
/*                 }*/
/* */
/*                 //-->*/
/*                 function white()*/
/* */
/*                 {*/
/* */
/*                     document.body.style.backgroundColor="white";*/
/* */
/* */
/*                 }*/
/* */
/* */
/*             </script>*/
/* */
/* */
/* */
/* */
/* */
/*             {% block body %}{% endblock %}*/
/*             <a href="#" class="btn btn-success" onclick="grey()">click for grey BG </a>*/
/*             <a href="#" class="btn btn-primary" onclick="white()">click for white BG </a>*/
/*             <a href="#" class="btn btn-danger" alt="Increase text size" onclick="resizeText(1)">Text size +</a>*/
/*             <a href="#" class="btn btn-default" alt="Increase text size" onclick="resizeText(-1)">Text size -</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div><!-- /.container -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
