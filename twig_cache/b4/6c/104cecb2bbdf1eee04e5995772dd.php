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
\t\t<fieldset data-role=\"controlgroup\" id=\"fieldTechList\">
";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "fieldTechs"));
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
        echo "\t\t</fieldset>
\t</div>
\t
\t<div data-role=\"collapsible\">
\t<h3>Ticket Type</h3>
\t\t<fieldset data-role=\"controlgroup\" id=\"ticketTypeList\">
\t\t\t<input type=\"radio\" name=\"ticketType\" id=\"typeFailure\" value=\"typeFailure\" checked=\"checked\">
\t\t\t<label for=\"typeFailure\">Failure</label>

\t\t\t<input type=\"radio\" name=\"ticketType\" id=\"typeRequest\" value=\"typeRequest\">
\t\t\t<label for=\"typeRequest\">Request</label>
\t\t</fieldset>
\t</div>
\t
\t<div data-role=\"collapsible\">
\t<h3>Service</h3>
\t<fieldset data-role=\"controlgroup\" id=\"serviceList\">
";
        // line 51
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "services"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 52
            echo "\t";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context["serviceId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_service_, "name")), array(" " => "."));
            // line 53
            echo "\t\t<input type=\"radio\" name=\"service\" id=\"service_";
            if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
            echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_service_, "id"), "html", null, true);
            echo "\">
\t\t<label for=\"service_";
            // line 54
            if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
            echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
            echo "\">";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_service_, "name"), "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t\t</fieldset>

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
        return array (  123 => 56,  111 => 54,  102 => 53,  98 => 52,  93 => 51,  74 => 34,  62 => 32,  53 => 31,  48 => 30,  17 => 1,);
    }
}
