<?php

/* layout.html */
class __TwigTemplate_b24cd20dee92e092c95a6b7c24d2a107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta lang=\"en\">
<title>ICLT Email Listener</title>

<link rel=\"stylesheet\" href=\"css/themes/iclt/iclt.min.css\">
<link rel=\"stylesheet\" href=\"css/iclt.css\">
<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css\">
<script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
<script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
<meta name=\"viewport\" content=\"target-densitydpi=medium-dpi, initial-scale=1, maximum-scale=1\">

</head>
<body>

<div data-role=\"page\">

\t<div data-role=\"header\">
\t\t<h1>ICLT Email Listener</h1>
\t</div><!-- /header -->

\t<div data-role=\"content\">\t
\t\t<p>Hello world</p>\t\t
\t</div><!-- /content -->

\t<select>
\t\t";
        // line 28
        if (isset($context["fieldTechs"])) { $_fieldTechs_ = $context["fieldTechs"]; } else { $_fieldTechs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldTechs_);
        foreach ($context['_seq'] as $context["_key"] => $context["fieldTech"]) {
            // line 29
            echo "\t\t<option value=\"";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "name"), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldTech'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "\t</select>

\t
\t<div id=\"footer\">
\t\t<p>&copy; Paul Sheean 2012</p>
\t</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  51 => 29,  46 => 28,  17 => 1,);
    }
}
