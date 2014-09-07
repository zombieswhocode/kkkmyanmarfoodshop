<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Blank Page</title>

    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}" type="image/x-icon">

    <!--Basic Styles-->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/weather-icons.min.css') }}

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" 
          rel="stylesheet" type="text/css">
    <!--Beyond styles-->
    {{ HTML::style('assets/css/beyond.min.css') }}
    {{ HTML::style('assets/css/demo.min.css') }}
    {{ HTML::style('assets/css/typicons.min.css') }}
    {{ HTML::style('assets/css/animate.min.css') }}
     {{ HTML::style('assets/css/skins/orange.min.css') }}


    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    {{HTML::script('assets/js/skins.min.js')}}
    

</head>
<!-- /Head -->
