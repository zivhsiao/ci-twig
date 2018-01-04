<?php

/* footer.tpl.html */
class __TwigTemplate_ee40a741a983badd0422286e3f575b9476e99217d38f6798e928d226695b837b extends Twig_Template
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
        echo "<div class=\"footer\">
  
  <div class=\"bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\"><small>© Pantone LLC, 2017. All rights reserved.</small></div>
        <script src=\"/assets/js/js/prcontent.js\"></script>
      </div>
    </div>
  </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.tpl.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
