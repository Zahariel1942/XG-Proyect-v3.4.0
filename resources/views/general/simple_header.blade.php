<!DOCTYPE html>
<html>
    <head>
        <title>{{ $game_title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="generator" content="XG Proyect {{ $version }}" />
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="{{ $css_path }}tailwind.css">
        <link rel="stylesheet" type="text/css" href="{{ $css_path }}default.css">
        <link rel="stylesheet" type="text/css" href="{{ $css_path }}redesign.css">
        <link rel="stylesheet" type="text/css" href="{{ $css_path }}formate.css">
        <link rel="stylesheet" type="text/css" href="{{ $skin_path }}formate.css">
        <script type="text/javascript" src="{{ $js_path }}overlib-min.js"></script>
        <script type="text/javascript" src="{{ $js_path }}general.js"></script>
        <script type="importmap">{"imports": {"lit": "{{ $js_path }}lit-core.min.js"}}</script>
        {!! $meta_tags !!}
    </head>
    <body>