<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Video Blog Free Template</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="/assets/css/style6.css" />
    <![endif]-->
    <!--[if IE 7]>
    <link href="/assets/css/style7.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <style type="text/css">
        /* Design by Studio7designs.com */
        /*
          USAGE:
          Copy and paste this one line into your site's CSS stylesheet.
          Add comma-separated CSS selectors / element names that have transparent PNGs.
          The path to the HTC is relative to the HTML file that includes it.
          See below for another method of activating the script without adding CSS here.
       */

        img, div, input { behavior: url("iepngfix.htc") }
    </style>
    <script type="text/javascript">
        //<![CDATA[
        // If you don't want to put nonstandard properties in your stylesheet, here's yet
        // another means of activating the script. This assumes that you have at least one
        // stylesheet included already in the document above this script.
        // To activate, delete the CSS rules above and uncomment below (remove /* and */ ).
        /*
       if (document.all && /MSIE (5\.5|6)/.test(navigator.userAgent) &&
          document.styleSheets && document.styleSheets[0] && document.styleSheets[0].addRule)
       {
          document.styleSheets[0].addRule('*', 'behavior: url(iepngfix.htc)');
          // Feel free to add rules for specific elements only, as above.
          // You have to call this once for each selector, like so:
          //document.styleSheets[0].addRule('img', 'behavior: url(iepngfix.htc)');
          //document.styleSheets[0].addRule('div', 'behavior: url(iepngfix.htc)');
       }
       */
        // Here's another script that disables all PNGs in IE when the page is printed.
        /*
        if (window.attachEvent	&& /MSIE (5\.5|6)/.test(navigator.userAgent))
        {
           function printPNGFix(disable) {
            for (var	i = 0; i < document.all.length; i++)
            {
               var e = document.all[i];
               if (e.filters['DXImageTransform.Microsoft.AlphaImageLoader'] || e._png_print)
               {
                if (disable)
                {e._png_print = e.style.filter; e.style.filter = '';}
                else {e.style.filter = e._png_print;e._png_print = '';}
               }
            }};
           window.attachEvent('onbeforeprint',	function() { printPNGFix(1) }); window.attachEvent('onafterprint',	function() { printPNGFix(0) });
        }
        */
        //]]>
    </script>
</head>
<body>
<div id="wrapper">
    <div id="container">
        <div id="ltcontent">
            <div id="hdlogo" align="center"><img src="/assets/images/topbanner.jpg" alt=""/></div>

            <div class="ltgap"></div>
            <div id="mostpop">
                <div class="lthead"><span>Популярные посты</span></div>
                <div class="ltposts">
                    <ul>
                        <li><a href="#">Vero</a></li>
                        <li><a href="#">Harum</a></li>
                        <li><a href="#">Expedia</a></li>
                        <li><a href="#">Omnis</a></li>
                        <li><a href="#">Voluptatum</a></li>
                    </ul>
                </div>
                <div class="rtposts">
                    <ul>
                        <li><a href="#">Nauts</a></li>
                        <li><a href="#">Video 3</a></li>
                        <li><a href="#">Adipisci</a></li>
                        <li><a href="#">Numquam</a></li>
                        <li><a href="#">Vel Illium</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div id="rtcontent">
            <div class="publish">Published by Alexander</div>
            <div class="head">Мой Блог</div>

            <div id="menulinks">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/blog/1">Блог</a></li>
                    <li><a href="/contact">Связь</a></li>

                </ul>
            </div>
            <div class="clear"></div>