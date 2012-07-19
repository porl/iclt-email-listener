<?php

/* layout.html */
class __TwigTemplate_b46c104cecb2bbdf1eee04e5995772dd extends Twig_Template
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

<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css\">
<script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
<script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
<meta name=\"viewport\" content=\"target-densitydpi=medium-dpi, initial-scale=1, maximum-scale=1\">

<link rel=\"stylesheet\" href=\"css/iclt.css\">
<script src=\"js/iclt.js\"></script>

</head>
<body>

<div data-role=\"page\">

\t<div data-role=\"header\">
\t\t<h1>ICLT Email Listener</h1>
\t</div><!-- /header -->


<div data-role=\"collapsible-set\">

\t<div data-role=\"collapsible\" data-collapsed=\"false\">
\t\t<h3>Field Technician</h3>
\t\t<div id=\"fieldTechList\">
";
        // line 30
        if (isset($context["fieldTechs"])) { $_fieldTechs_ = $context["fieldTechs"]; } else { $_fieldTechs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldTechs_);
        foreach ($context['_seq'] as $context["_key"] => $context["fieldTech"]) {
            // line 31
            echo "\t\t\t<input type=\"radio\" name=\"fieldTech\" id=\"fieldTech_";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\">
\t\t\t<label for=\"fieldTech_";
            // line 32
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "name"), "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldTech'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "\t\t</div>
\t</div>
\t
\t<div data-role=\"collapsible\">
\t<h3>Ticket Type</h3>
\t\t\t<input type=\"radio\" name=\"type\" id=\"typeFailure\" value=\"typeFailure\" checked=\"checked\">
\t\t\t<label for=\"typeFailure\">Failure</label>

\t\t\t<input type=\"radio\" name=\"type\" id=\"typeRequest\" value=\"typeRequest\">
\t\t\t<label for=\"typeRequest\">Request</label>
\t</div>
\t
\t<div data-role=\"collapsible\">
\t<h3>Service</h3>


\t</div>
\t
</div>






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
        return array (  74 => 34,  62 => 32,  53 => 31,  48 => 30,  17 => 1,);
    }
}
