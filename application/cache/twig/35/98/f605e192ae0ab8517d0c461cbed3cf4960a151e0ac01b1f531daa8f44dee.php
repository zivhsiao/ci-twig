<?php

/* pages/err404.html */
class __TwigTemplate_3598f605e192ae0ab8517d0c461cbed3cf4960a151e0ac01b1f531daa8f44dee extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>404页面自动跳转</title>
<style>
*{margin:0;padding:0;outline:none;font-family:\\5FAE\\8F6F\\96C5\\9ED1,宋体;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-khtml-user-select:none;user-select:none;cursor:default;font-weight:lighter;}
.center{margin:0 auto;}
.whole{width:100%;height:100%;line-height:100%;position:fixed;bottom:0;left:0;z-index:-1000;overflow:hidden;}
.whole img{width:100%;height:100%;}
.mask{width:100%;height:100%;position:absolute;top:0;left:0;background:#000;opacity:0.6;filter:alpha(opacity=60);}
.b{width:100%;text-align:center;height:400px;position:absolute;top:50%;margin-top:-230px}.a{width:150px;height:50px;margin-top:30px}.a a{display:block;float:left;width:150px;height:50px;background:#fff;text-align:center;line-height:50px;font-size:18px;border-radius:25px;color:#333}.a a:hover{color:#000;box-shadow:#fff 0 0 20px}
p{color:#fff;margin-top:40px;font-size:24px;}
#num{margin:0 5px;font-weight:bold;}
</style>
<script type=\"text/javascript\">
\tvar num=6;
\tfunction redirect(){
\t\tnum--;
\t\tdocument.getElementById(\"num\").innerHTML=num;
\t\tif(num<1){
\t\t\tdocument.getElementById(\"num\").innerHTML=1;
\t\t\tlocation.href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
\t\t\t}
\t\t}
\tsetInterval(\"redirect()\", 1000);
</script>
</head>

<body onLoad=\"redirect();\">
<div class=\"whole\">
\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/back.jpg\" />
    <div class=\"mask\"></div>
</div>
<div class=\"b\">
\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/404.png\" class=\"center\"/>
\t\t<p>
\t\t\t暫時未能查找到您的頁面<br>
\t\t\t可能輸入的網站錯誤或此頁面不存在<br>
            <span id=\"num\"></span>秒後自動回主頁
\t\t</p>
\t</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "pages/err404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 36,  55 => 32,  43 => 23,  19 => 1,);
    }
}
