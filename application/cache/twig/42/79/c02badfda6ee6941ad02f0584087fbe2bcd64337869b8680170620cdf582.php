<?php

/* header.tpl.html */
class __TwigTemplate_4279c02badfda6ee6941ad02f0584087fbe2bcd64337869b8680170620cdf582 extends Twig_Template
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
<html lang=\"en\">
<head>
    <title>DEMO</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keyword\" content=\"DEMO\">
    <meta name=\"description\" content=\"DEMO\">
    <meta name=\"author\" content=\"\">
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!--<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">-->
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    
    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" >
    <!--<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/css/custom.css\">-->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/css/jQuery-Validation-Engine-master/css/validationEngine.jquery.css\">
    
    
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <!--<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/js/index.js\"></script>-->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/js/jquery.easing.1.3.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "assets/css/nav-bar.css\">
</head>

<body>";
    }

    public function getTemplateName()
    {
        return "header.tpl.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  61 => 29,  57 => 28,  48 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }
}
