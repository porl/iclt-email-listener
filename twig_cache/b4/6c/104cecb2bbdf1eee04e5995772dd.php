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

<div data-role=\"page\" data-theme=\"c\" data-content-theme=\"c\">

\t<div data-role=\"header\" data-position=\"fixed\">
\t\t<h1>ICLT Email Listener</h1>
\t</div><!-- /header -->


\t<div data-role=\"collapsible-set\">

\t\t<div id=\"fieldTechCollapsible\" data-role=\"collapsible\" data-collapsed=\"false\" data-iconpos=\"right\">
\t\t\t<h3>Field Technician</h3>
\t\t\t<fieldset data-role=\"controlgroup\" id=\"fieldTechList\">
";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "fieldTechs"));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldTech"]) {
            // line 31
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            $context["fieldTechId"] = strtr($this->getAttribute($_fieldTech_, "id"), array(" " => "."));
            echo " ";
            // line 32
            echo "\t\t\t\t<input type=\"radio\" name=\"fieldTech\" id=\"fieldTech_";
            if (isset($context["fieldTechId"])) { $_fieldTechId_ = $context["fieldTechId"]; } else { $_fieldTechId_ = null; }
            echo twig_escape_filter($this->env, $_fieldTechId_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\" class=\"sectionOption fieldTechs\">
\t\t\t\t\t<label for=\"fieldTech_";
            // line 33
            if (isset($context["fieldTechId"])) { $_fieldTechId_ = $context["fieldTechId"]; } else { $_fieldTechId_ = null; }
            echo twig_escape_filter($this->env, $_fieldTechId_, "html", null, true);
            echo "\">";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "name"), "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldTech'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "\t\t\t</fieldset>
\t\t</div><!-- /collapsible -->
\t
\t\t<div id=\"ticketTypeCollapsible\" data-role=\"collapsible\" data-iconpos=\"right\">
\t\t\t<h3>Ticket Type</h3>
\t\t\t<fieldset data-role=\"controlgroup\" id=\"ticketTypeList\">
";
        // line 41
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "types"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 42
            echo "\t\t\t\t<input type=\"radio\" name=\"ticketType\" id=\"type";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\" class=\"sectionOption types\">
\t\t\t\t\t<label for=\"type";
            // line 43
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "\t\t\t</fieldset>
\t\t</div><!-- /collapsible -->
\t
\t\t<div id=\"serviceCollapsible\" data-role=\"collapsible\" data-iconpos=\"right\">
\t\t\t<h3>Service</h3>
\t\t\t<fieldset data-role=\"controlgroup\" id=\"serviceList\">
";
        // line 51
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "services"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 52
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context["serviceId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_service_, "name")), array(" " => "."));
            // line 53
            echo "\t\t\t\t<input type=\"radio\" name=\"service\" id=\"service_";
            if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
            echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_service_, "name"), "html", null, true);
            echo "\" class=\"sectionOption services\">
\t\t\t\t\t<label for=\"service_";
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
        echo "\t\t\t</fieldset>
\t\t</div><!-- /collapsible -->
\t
\t\t<div id=\"categoryCollapsible\" data-role=\"collapsible\" data-iconpos=\"right\">
\t\t\t<h3>Category</h3>
\t\t\t<fieldset data-role=\"controlgroup\" id=\"categoryList\">
";
        // line 62
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "services"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 63
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context["serviceId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_service_, "name")), array(" " => ""));
            // line 64
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($_service_, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 65
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $context["categoryId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_category_, "name")), array(" " => ""));
                // line 66
                echo "\t\t\t\t<input type=\"radio\" name=\"category\" id=\"category_";
                if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
                echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
                echo "_";
                if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                echo twig_escape_filter($this->env, $_categoryId_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
                echo "\" class=\"sectionOption categories\">
\t\t\t\t\t<label for=\"category_";
                // line 67
                if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
                echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
                echo "_";
                if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                echo twig_escape_filter($this->env, $_categoryId_, "html", null, true);
                echo "\">";
                if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_service_, "name"), "html", null, true);
                echo " - ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
                echo "</label>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "\t\t\t</fieldset>
\t\t</div><!-- /collapsible -->
\t
\t</div><!-- /collapsible-set -->

\t<div data-role=\"footer\" id=\"footer\" data-position=\"fixed\" data-theme=\"c\">
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
        return array (  207 => 70,  185 => 67,  173 => 66,  170 => 65,  165 => 64,  162 => 63,  157 => 62,  149 => 56,  137 => 54,  128 => 53,  125 => 52,  120 => 51,  112 => 45,  100 => 43,  91 => 42,  86 => 41,  78 => 35,  66 => 33,  57 => 32,  53 => 31,  48 => 30,  17 => 1,);
    }
}
