<?php

/* index.html */
class __TwigTemplate_025de194e9dd76927c1ecbb24ff487bd8be6d9cd8e9a559900c95ad96503a939 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Welcome to Phire Framework!</title>

    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">

    <style type=\"text/css\">

        html, body {
            height:100vh;
        }
        #intro {
            transform: translateY(-50%);
            position: absolute;
            top: 50%;
            width:100%;
        }
        #intro .container {
            padding-top:auto;
        }

    </style>
</head>
<body>

    <section id=\"intro\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title text-center\">Welcome to Phire Framework</h3>
                        </div>
                        <div class=\"panel-body\">

                            <p>Welcome to Phire! The lightweight PHP framework, implementing Symfony2 and Twig.</p>

                            <p>To edit this page, go to <code>resources/views/index.html</code>.</p>

                            <p>If you're a developer, I'd recommend switching off caching in <code>.env</code>.</p>

                            <p>Anything you're looking is most likely located in <code>app/</code>, including <code>Controllers/</code> and <code>Models/</code>.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Users/myke/www/phire/resources/views/index.html");
    }
}
