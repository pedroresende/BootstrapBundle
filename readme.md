## Bootstrap Bundle

### Install

To install this bundle, please run

````
$ composer require "pedroresende/bootstrapbundle": "3.2.2"
````

Then run

````
$ composer update
````

Add to AppKernel.php

````
new PedroResende\BootstrapBundle\BootstrapBundle(),
````

Finally to routing.yml file

````
bootstrap_public:
    resource: "@BootstrapBundle/Resources/config/routing.yml"
    prefix:   /
````

Install assets

````
$ php app/console assets:install --symlink
````

Assetic dump

````
$ php app/console assetic:dump
````

To use in your templates

#### CSS

````
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{% stylesheets output='css/bootstrap.min.css'
    '@bootstrap_css' filter='cssrewrite' %}
    <link rel="stylesheet" href="{{ asset_url }}" type="text/css"/>
{% endstylesheets %}
````

#### JS

````
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{% javascripts output='js/bootstrap.min.js'
    '@bootstrap_js'
%}
    <script src="{{ asset_url }}"></script>
{% endjavascripts %}
````

You can always simply extend the existing template by using

````
{% extends 'BootstrapBundle::layout.html.twig' %}

{% block body %}
    <div class="container">
        {% block container %}{% endblock %}
    </div>
{% endblock %}

````