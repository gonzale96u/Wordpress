/*
Theme Name: Envo eCommerce
Theme URI: https://envothemes.com/free-envo-ecommerce/
Author: EnvoThemes
Author URI: https://envothemes.com/
Description: Envo eCommerce is a fast, clean and modern-looking responsive free WooCommerce theme for WordPress. This theme supports popular page builders like Elementor, KingComposer, Beaver Builder, SiteOrigin, Thrive Architect, Divi, Brizy, Visual Composer, etc. The theme is responsive, super fast, SEO friendly, WPML and RTL ready. Documentation: https://envothemes.com/docs/docs/envo-ecommerce/ Theme demo ready to import: https://envothemes.com/envo-ecommerce/
Version: 1.0.13
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl.html
Tags: one-column, two-columns, full-width-template, right-sidebar, custom-background, custom-menu, custom-header, editor-style, featured-images, translation-ready, custom-logo, threaded-comments, footer-widgets, rtl-language-support, blog, e-commerce
Text Domain: envo-ecommerce
*/


/* WordPress Core */
.gallery-caption {
    font-weight: bold;
}
.alignnone {
    margin: 5px 20px 20px 0;
}
.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}
.alignright {
    float: right;
    margin: 5px 0 20px 20px;
}
.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}
.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}
a img.alignright {
    float: right;
    margin: 5px 0 20px 20px;
}
a img.alignnone {
    margin: 5px 20px 20px 0;
}
a img.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}
a img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.wp-caption {
    background: #fff;
    border: 1px solid #f0f0f0;
    max-width: 96%;
    padding: 5px 3px 10px;
    text-align: center;
}
img.alignnone {
    max-width: 96%;
    height: auto;
    width: auto;
}
.wp-caption.alignnone {
    margin: 5px 20px 20px 0;
}
.wp-caption.alignleft {
    margin: 5px 20px 20px 0;
}
.wp-caption.alignright {
    margin: 5px 0 20px 20px;
}
.wp-caption img {
    border: 0 none;
    height: auto;
    margin: 0;
    max-width: 98.5%;
    padding: 0;
    width: auto;
}
.wp-caption p.wp-caption-text {
    font-size: 13px;
    line-height: 17px;
    margin: 0;
    padding: 10px 0 0 0;
    color: #000;
}
.size-auto,
.size-full,
.size-large,
.size-medium,
.size-thumbnail {
    max-width: 100%;
    height: auto;
}
iframe,
embed {
    max-width: 100%;
}
img {
    max-width: 100%;
    height: auto;
}
.sticky,
.bypostauthor {}
table { 
    width: 100%; 
    border-collapse: collapse; 
}
th { 
    font-weight: bold; 
}
td, th { 
    padding: 6px; 
}
.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    clip-path: polygon(0px 0px, 0px 0px,0px 0px, 0px 0px);
    position: absolute !important;
    white-space: nowrap;
    height: 1px;
    width: 1px;
    overflow: hidden;
}
html {
    -ms-overflow-x: hidden;
    overflow-x: hidden;
    overflow-y: scroll;
}
body {
    font-family: 'Open Sans Condensed', "Helvetica Neue", helvetica, arial, sans-serif;
    padding: 0;
    color: #404040;
    font-weight: 300;
    line-height: 1.6;
    font-size: 18px;
    word-wrap: break-word;
}
a, a:active, a:hover, a:focus {
    text-decoration: none;
    color: #fdb907;
}
h1, h2, h3, h4, h5, h6 {
    word-wrap: break-word;
    font-weight: 700;
    letter-spacing: -.02em;
}
.page-header a {
    border-bottom: 0;
    color: #000;
}
a:active {
    border-bottom: none;
}
.main-container {
    background-color: #fff;
}
.navbar-nav li.fa {
    display: block;
    position: relative;
}
.menu-description {
    font-size: 9px;
    padding: 2px 4px;
    margin: 0 3px;
    line-height: 10px;
    left: calc(100% - 25px);
    background: #FFC107;
    color: #000;
    position: absolute;
    border-radius: 1px;
    line-height: normal;
    top: 5px;
    margin: 0 3px;
    font-weight: 700;
    display: inline-table;
    word-break: keep-all;
    overflow-wrap: unset;
    width: max-content;
    z-index: 9;
}
.menu-description:after {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    border-left: 0px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #ffc107;
    left: 3px;
    bottom: -4px;
}
.dropdown-menu .menu-description {
    position: relative;
    display: inline;
    left: 0;
    top: -2px;
    margin: 5px;
}
.dropdown-menu .menu-description:after {
    display: none;
}
@keyframes showup {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
@media (min-width: 600px) and (max-width: 782px) {
    .admin-bar #my-menu {
        top: 46px;
    }
}
@media (min-width: 768px) {
    li.menu-item-has-children>a:before {
        font-family: "FontAwesome";
        content: "\f107";
        margin-left: 10px;
        font-size: 15px;
        right: 2px;
        position: absolute;
    }
    li.menu-item-has-children>a.dropdown-item:before {
        right: 6px;
    }
    li li ul.dropdown-menu {
        left: 100%;
        top: 0;
    }
    .navbar-right li li ul.dropdown-menu {
        left: auto;
        right: 100%;
    }
    .navbar-nav > li > a {
        padding-top: 20px;
        padding-bottom: 20px;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
    }
    .open > .dropdown-menu {
        height: auto;
        visibility: visible;
        opacity: 1;
    }
    .dropdown-menu {
        display: block;
        opacity: 0;
        visibility: hidden;
    }
    .navbar-nav li:hover > .dropdown-menu{
        visibility:visible;
        border-radius: 0;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        opacity: 1;
    }
    #site-navigation .container{
        padding-left: 0;
        padding-right: 0;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus,
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        background-color: transparent;
    }
    .menu-container {
        width: 100%;
    }
    .menu-item-has-children li.fa:before {
        top: 6px !important;
    }
    .navbar-center {
        width: 100%;
        text-align: center;
    }
    .navbar-center > li {
        float: none;
        display: inline-block;
    }
    .header-cart.float-cart {
        position: fixed;
        top: 15%;
        right: 6px;
        z-index: 998;
        animation: showup 1s;
        padding-right: 0;
    }
    .header-cart.float-cart a.cart-contents {
        padding: 20px 5px 8px 5px;
        width: 86px;
        height: 86px;
        float: none;
        background: rgba(255, 255, 255, 1);
        position: relative;
        text-align: center;
        color: #252424 !important;
        border: 1px solid #ededed;
        border-radius: 5px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.17);
        display: block;
    }
    .header-cart.float-cart a.cart-contents i {
        color: #252424;
    }
    .float-cart .header-cart-block:hover ul.site-header-cart {
        right: 0px;
        top: 55px;
    }
    .float-cart .amount-cart {
        display: block;
        background: transparent;
        margin: 0;
        font-size: 11px;
        line-height: 14px;
        margin-top: 5px;
    }
    .float-cart .amount-cart:before {
        display: none;
    }
    .header-my-account.float-login a {
        position: fixed;
        top: 20%;
        right: 6px;
        z-index: 997;
        animation: showup 1s;
        left: auto;
        margin-top: 60px;
        float: none;
        padding: 8px;
        background: rgba(255, 255, 255, 1);
        text-align: center;
        color: #252424 !important;
        border: 1px solid #ededed;
        border-radius: 5px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.17);
        width: 86px;
        height: 86px;
        line-height: 66px;
    }
    .dropdown-menu {
        display: block;
        opacity: 0;
    }
    .site-branding-logo, .site-branding-text {
        float: left;
        margin-right: 10px;
    }
}
@media (min-width: 600px) {
    .admin-bar #site-navigation.shrink {
        top: 32px;
    }
}

@media (max-width: 767px) {
    .menu-item .menu-description {
        left: inherit;
        top: -3px;
        font-size: 9px;
        padding: 2px 4px;
        margin: 0 3px;
        line-height: 10px;
        background: #FFC107;
        color: #000;
        display: inline;
        border-radius: 1px;
        line-height: normal;
        margin: 0 5px;
        font-weight: 700;
    }
    .menu-item .menu-description:after {
        display: none;
    }
    .heading-row {
        flex-wrap: wrap;
    }
    .site-branding-text {
        text-align: center;
        margin-bottom: 15px;
    }
    div#my-menu {
        z-index: 99999;
        overflow: hidden;
    }
    .mm {
        opacity: 0;
        visibility: hidden;
    }
    .mm.mm--open {
        opacity: 1;
        visibility: visible;
    }
    #my-menu .navbar-nav > li > a {
        display: block;
        max-height: 60px;
        padding: 15px 20px;
    }
    #my-menu .dropdown-menu > li > a {
        padding: 15px 20px;
    }
    #my-menu .dropdown-menu {
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: 0;
        visibility: hidden;
    }
    #my-menu .dropdown-menu.mm--open {
        opacity: 1;
        visibility: visible;
    }
    .open-panel {
        width: 32px;
        height: 32px;
        position: absolute;
        top: 10px;
        right: 20px;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .5s ease-in-out;
        -moz-transition: .5s ease-in-out;
        -o-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        cursor: pointer;
    }
    .brand-absolute {
        position: relative;
        right: 20px;
        padding: 0;
        bottom: -30px;
        font-size: 11px;
        float: right;
        display: inline-block;
        height: auto;
        width: 32px;
        text-align: center;
        line-height: 13px;
        margin-top: 5px
    }
    .mobile-canvas {
        float: left;
    }
    .open-panel span {
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        background: #000;
        opacity: 1;
        left: 0;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .25s ease-in-out;
        -moz-transition: .25s ease-in-out;
        -o-transition: .25s ease-in-out;
        transition: .25s ease-in-out;
    }
    .open-panel span:nth-child(1) {
        top: 0px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }
    .open-panel span:nth-child(2) {
        top: 9px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }
    .open-panel span:nth-child(3) {
        top: 18px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }
    .open-panel.open span:nth-child(1) {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        top: -2px;
        left: 3px;
    }
    .open-panel.open span:nth-child(2) {
        width: 0%;
        opacity: 0;
    }
    .open-panel.open span:nth-child(3) {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        top: 21px;
        left: 3px;
    }
    .mobile-cart .header-cart,
    .mobile-account .header-my-account {
        position: relative;
        float: right;
        display: block;
        top: 0;
        left: auto;
        margin-top: 0;
        padding: 15px 5px;
        margin-right: 0;
        right: 30px;
        line-height: initial;
    }
    .top-bar-section .widget {
        text-align: center !important;
    }
}
.dropdown-menu > li > a {
    border-bottom: 0;
    padding: 5px 20px 5px 10px;
}
#site-navigation {
    min-height: 60px;
}
.navbar-collapse {
    padding-left: 0;
    padding-right: 0;
}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
    background-color: #fdb907;
}
.navbar-toggle {
    border: 1px solid #ccc;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #ccc;
}
.navbar-nav > li > a {
    border-bottom: 0;
    text-transform: uppercase;
    vertical-align: middle;
    display: inline-block;
    max-height: 60px;
}
.nav > li.active > a:after, .current-page-parent:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #fdb907;
}
.top-bar-section {
    background-color: #222;
    color: #fff;
    padding: 5px 0;
    font-size: 14px;
}
.top-bar-section .widget, .top-bar-section p {
    margin-bottom: 0;
}
.top-bar-section .widget:nth-child(3n-1){
    text-align: center;
}
.top-bar-section .widget:nth-child(3n) {
    text-align: right;
}
article {
    clear: both;
    float: left;
    margin-bottom: 10px;
    width: 100%;
}
.archive-page-header h1 {
    margin: 0;
    padding-bottom: 25px;
}
.updated:not(.published) {
    display: none;
}
.space-right {
    margin-right: 10px;
}
.main-content {
    float: left;
    width: 100%;
}
.page-header {
    width: 100%;
    margin: 20px 0;
    text-align: center;
}
.page h1.single-title {
    margin-bottom: 15px;
}
h1.single-title {
    margin: 0;
}
.single-head {
    clear: both;
    margin-bottom: 10px;
}
.single-entry-summary, .entry-footer {
    margin-top: 15px;
    width: 100%;
    clear: both;
}
.single-content.row {
    margin-bottom: 60px;
}
.tagcloud a {
    font-size: 15px !important;
    padding: 0px 6px;
    border: 1px solid;
    display: inline-block;
    margin-bottom: 5px;
}
input, textarea {
    background-color: #fff;
    padding: 8px;
    color: #464a4c;
    border-radius: 0;
}
input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea {
    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
    border: 1px solid #bbb;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    display: block;
    width: 100%;
}
.radio, .checkbox {
    display: inline-block;
}
.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
    position: relative;
    margin-left: 0;
}
select {
    max-width: 100%;
    padding: 5px;
    color: #000;
}
#respond .comment-form-url,
#respond input {
    width: 100%;
    float: left;
}
#respond .comment-form-author,
#respond .comment-form-email {
    width: 50%;
    float: left;
}
#respond .comment-form-author {
    padding-right: 5%;
}
#sidebar {
    display: inline-block;
    max-width: 100%;
}
.page-area {
    padding-top: 15px;
}
.widget {
    word-wrap: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
    margin-bottom: 20px;
    position: relative;
}
.homepage-area .widget {
    margin: 0;
    padding: 0;
}
.widget ul {
    padding-left: 0;
    list-style-type: none;
}
.widget li > ul {
    padding-left: 15px;
}
.widget ul li {
    margin: 4px 0px 0px;
    padding: 0px 0px 4px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}
.widget ul li:last-child {
    border-bottom: none;
}
.widget-title {
    font-size: 18px;
    position: relative;
    width: 100%;
    clear: both;
    margin-top: 10px;
    margin-bottom: 10px;
    text-transform: uppercase;
    display: block;
    text-align: center;
}
title:before, .widget-title:after {
    content: "";
    position: absolute;
    top: 50%;
    height: 1px;
    background-color: #e2e2e2;
    left: 0;
    right: 0;
}
.widget-title h3 {
    font-size: 18px;
    position: relative;
    color: #404040;
    padding: 10px 20px;
    margin: 0;
    line-height: 18px;
    display: inline-block;
    background-color: #fff;
    z-index: 1;
    font-weight: 300;
    border: 1px solid;
    border-color: transparent;
    -webkit-transition: border-color 0.7s ease;
    transition: border-color 0.7s ease;
}
.widget:hover .widget-title h3 {
    border-color: #e2e2e2;
}
h1.site-title, .site-title {
    margin: 0;
    padding: 0;
    font-size: 28px;
    line-height: 32px;
    word-wrap: break-word;
    font-weight: 700;
    color: #000;
    letter-spacing: -.02em;
}
.site-description {
    font-size: 15px;
    line-height: 22px;
    margin: 0;
    position: relative;
    display: inline-block;
}
.site-branding-logo a {
    border: none;
    z-index: 99;
    position: relative;
}
.site-branding-logo img {
    width: auto;
}
.site-branding-text {
    z-index: 99;
    position: relative;
}
.site-heading {
    padding-left: 15px;
    padding-right: 15px;
}
.site-heading-sidebar p {
    margin-bottom: 0;
}
.site-heading-sidebar .widget {
    margin-bottom: 8px;
    font-size: 80%;
}
.navbar {
    margin-bottom: 0;
}
.main-menu {
    position: relative;
}

#site-navigation.shrink {
    min-height: 50px;
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
    background-color: #ffffff;
    -webkit-box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    border: none;
}
#site-navigation {
    background-color: #ffffff;
    border-top: 1px solid #e2e2e2; 
    border-bottom: 1px solid #e2e2e2;
    border-left: none;
    border-right: none;
}
#site-navigation, nav a {
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    color: #000;
    border-radius: 0;
}
#site-navigation .container {
    position: relative;
}
.featured-thumbnail {
    width: 100%;
    position: relative;
}
.featured-thumbnail img {
    width: 100%;
    text-align: center;
}
.single-page-header {
    color: #fff;
    font-size: 44px;
    font-weight: 700;
}
nav.navigation.pagination {
    text-align: center;
    width: 100%;
    clear: both;
    margin: 20px 0;
}
nav.navigation.pagination .nav-links a, nav.navigation.pagination .current {
    padding: 5px 10px;
    border: none;
    border-radius: 0;
    position: relative;
    z-index: 1;
    border: 1px solid #b5b5b5;
}

nav.navigation.pagination .current {
    color: #fff;
    background-color: transparent;
}

#content-footer-section {
    background-color: #1e1e1e;
    color: #ffffff;
    padding: 15px;
    clear: both;
}
#content-footer-section .news-item h2 a {
    color: #fff;
    font-weight: 300;
}
#content-footer-section .widget-title h3 {
    background-color: #1e1e1e;
    color: #fff;
}
#content-footer-section .posted-date, 
#content-footer-section .comments-meta, 
#content-footer-section .comments-meta a {
    position: relative;
    color: #cacaca;
    font-size: 14px;
    font-weight: 300;
    font-style: italic;
}
.footer-credits {
    background-color: #1e1e1e;
    clear: both;
}
.footer-credits-text {
    padding: 20px 0;
    color: #fff;
}
.site-header {
    padding: 30px 0;
    background-color: #fff;
}

.taxonomy-description {
    margin-bottom: 20px;
}
.single-footer.row {
    clear: both;
}
/* Search styling */
.header-search-form {
    position: relative;
    display: inline-block;
    width: 100%;
    border: 1px solid;
    border-radius: 3px;
    border-color: #d9d9d9;
    height: 42px;
    background-color: #fff;
}
select.header-search-select {
    width: 35%;
    display: inline-block;
    border: none;
    float: left;
    border-right: 1px solid;
    border-radius: 0;
    border-color: #d9d9d9;
    height: 40px;
    background-color: #fff;
}
input.header-search-input {
    width: 65%;
    display: inline-block;
    border: none;
    float: left;
    height: 40px;
    border-radius: 0;
    right: 0px;
    position: relative;
}
button.header-search-button {
    border: none;
    color: inherit;
    position: absolute;
    right: 0;
    padding: 0 15px;
    font-size: 15px;
    line-height: 40px;
    top: 0;
    border-left: 1px solid;
    border-color: #d9d9d9;
    height: 40px;
    border-radius: 0;
}
form.search-form label {
    width: 100%;
    display: block;
}
button.dgwt-wcas-search-submit, button.dgwt-wcas-search-submit:hover {
    background: initial;
}
form.search-form, form.woocommerce-product-search {
    position: relative;
}
.search-submit, .woocommerce-product-search button {
    position: absolute;
    top: 2px;
    right: 2px;
    bottom: 2px;
    line-height: 18px;
}
.search-field {
    width: 100%;
    padding-right: 90px;
    border: 1px solid #e2e2e2;
    border-radius: 3px;
}
input[type="search"].search-field::-webkit-input-placeholder {
    color: #d7d7d7;
}
input[type="search"].search-field:focus::-webkit-input-placeholder {
    color: #f1f1f1;
    padding: 20px 0 0 0;
}
fieldset {
    border: 2px solid #e5e5e5;
    margin: 5px 2px 15px 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal;
    width: auto;
    border-bottom: 0;
    padding-left: 5px;
    padding-right: 5px;
}
/* Comments */
.comment-form #comment {
    width: 100%;
}
cite.fn {
    font-weight: bold;
}
a.comment-reply-link {
    border: 1px solid #ccc;
    padding: 10px 20px;
}
.reply {
    margin: 20px 0;
}
.comment-meta.commentmetadata {
    margin: 10px 0;
    font-size: 12px;
    font-style: italic;
}
.comment-body {
    margin-bottom: 40px;
}
.commentlist li {
    list-style-type: none;
}
.error-template {
    padding-bottom: 60px;
}
.btn-default, input[type="submit"], input#submit, button, a.comment-reply-link, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt { 
    box-shadow: none;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    border: 1px solid;
    border-radius: 3px;
    padding: 10px 20px;
    color: #fdb907;
    background-color: transparent;
    font-weight: 400;
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
    background-color: transparent;
    color: #fdb907;
}
.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    outline: 0;
    line-height: normal;
    background: #fafafa;
    padding: 7px 12px;
    color: #444;
    border: 2px solid #e5e5e5;
    border-radius: 3px;
}
button#place_order {
    float: none;
    margin: 0 auto;
    display: inline-block;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 15px;
    font-size: 19px;
    border-radius: 5px;
}
.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3 {
    font-weight: 400;
}
.woocommerce ul.products li {
    border-bottom: 0;
}
.woocommerce ul.products li.product.product-category {
    padding-bottom: 0;
}
.woocommerce ul.products li.product.product-category a img {
    margin: 0;
}
.woocommerce ul.products li.product.product-category {
    padding: 0;
}
.woocommerce-cart-form .coupon #coupon_code {
    width: 50%;
    max-width: 50%;
}
.inner-wrapper {
    display: block;
    margin-bottom: 15px;
}
.content-date-comments {
    display: inline-block;
}
.cat-links, .tags-links {
    display: inline-block;
    margin-bottom: 5px;
    width: 100%;
}
.posted-date, .comments-meta {
    margin-right: 15px;
}
.posted-date,
.cat-links a,
.cat-links span,
.tags-links span {
    position: relative;
    color: #404040;
    font-size: 14px;
    font-weight: 300;
    font-style: italic;
}
.comments-meta {
    position: relative;
    z-index: 5;
    color: #404040;
    padding: 0 8px;
    font-size: 12px;
    font-weight: 300;
    font-style: italic;
    display: inline-block;
}
.comments-meta a {
    color: #404040;
}
span.comments-meta i {
    margin-left: 5px;
}
.tags-links a {
    position: relative;
    color: #404040;
    font-style: italic;
    opacity: 0.8;
    font-size: 14px;
    margin-right: 8px;
}
.news-item {
    margin-bottom: 10px;
}
.news-item h2 {
    font-size: 26px;
    margin-top: 0;
    margin-bottom: 5px;
    font-weight: 700;
}
.news-item.layout-two h2 {
    font-size: 18px;
}
.one-news-section .news-item h2 {
    margin-top: 10px;
    font-size: 28px;
}
.news-item h2 a {
    color: #404040;
    font-weight: 300;
    font-size: 40px;
}
.news-thumb {
    margin-bottom: 10px;
}
.news-thumb img {
    width: 100%;
}
.post-excerpt {
    font-style: italic;
    font-weight: 300;
    display: block;
    clear: both;
}
.author-meta-by {
    font-style: italic;
    opacity: 0.7;
    position: relative;
    font-size: 14px;
    font-weight: 300;
}
.author-meta a {
    color: #000;
    text-transform: uppercase;
    font-size: 14px;
    margin-left: 4px;
    margin-right: 15px;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
    color: #000;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    background: transparent;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active::after,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active::before {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
    text-align: center;
    border: 1px solid;
    padding: 8px;
    border-radius: 5px;
    border-color: #d9d9d9;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 15px !important;
}
.woocommerce ul.products li.product a img {
    -webkit-box-shadow: 0px 11px 23px -15px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 10px 20px -15px rgba(0,0,0,0.75);
    box-shadow: 0px 10px 20px -15px rgba(0,0,0,0.75);
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    border: 1px solid;
    border-radius: 5px;
    border-color: #d9d9d9;
    margin-top: -20px;
    margin-bottom: 15px;
}
.woocommerce ul.products li.product:hover a img {
    -webkit-box-shadow: 0px 11px 23px -15px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 10px 25px -10px rgba(0,0,0,0.75);
    box-shadow: 0px 10px 25px -10px rgba(0,0,0,0.75);
    border: 1px solid;
    border-radius: 5px;
    border-color: #d9d9d9;
    margin-top: -25px;
    margin-bottom: 20px;
}
.woocommerce ul.products li.product .star-rating {
    margin: 0 auto;
}
.woocommerce mark, .woocommerce .mark {
    background-color: transparent;
    color: inherit;
}
.woocommerce #reviews #comments ol.commentlist {
    padding: 0;
}
.woocommerce-MyAccount-navigation li {
    list-style-type: none;
    border: 1px solid #e4e4e4;
    margin-bottom: -1px;
    padding: 5px 15px;
}
.woocommerce-MyAccount-navigation ul {
    padding: 0;
}
.woocommerce-MyAccount-navigation li.is-active {
    background-color: rgba(0, 0, 0, 0.1);
    font-weight: bold;
}
.woocommerce .select2-container--default .select2-selection--single {
    border: 2px solid #e5e5e5;
}
.woocommerce .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 38px;
}
.woocommerce .select2-container .select2-selection--single, 
.woocommerce .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 42px;
}
.heading-row {
    display: flex;
    float: none;
    align-items: center;
    justify-content: space-between;
    position: relative;
}
.header-right {
    min-width: 150px;
    padding-left: 0;
}
.header-right .fa, .mobile-cart .fa, .mobile-account .fa {
    font-family: "fontawesome" !important;
    font-weight: initial !important;
}
.header-cart, .header-my-account {
    float: right;
    display: block;
}
.header-my-account {
    padding-right: 15px;
}
a.cart-contents i, .header-my-account a {
    color: #000000;
    font-size: 22px;
    line-height: 22px;
    position: relative;
}
.amount-cart {
    color: #000;
    background: #fdb907;
    position: relative;
    font-size: 12px;
    padding: 2px 5px;
    border-radius: 3px;
    margin-left: 10px;
    bottom: 3px;
    font-weight: 700;
    display: inline-block;
    line-height: 1.5;
}
.amount-cart:before {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    border-bottom: 5px solid transparent;
    border-top: 5px solid transparent;
    border-right: 7px solid #fdb907;
    top: calc(50% - 5px);
    right: 100%;
}
.cart-contents span.count {
    font-size: 10px;
    padding: 0px;
    color: #000;
    font-weight: 700;
    background-color: #fdb907;
    border-radius: 15px;
    line-height: 18px;
    margin: 0;
    position: absolute;
    top: -10px;
    right: -11px;
    font-style: initial;
    height: 20px;
    min-width: 20px;
    text-align: center;
    font-family: 'Open Sans Condensed', "Helvetica Neue", helvetica, arial, sans-serif;
    border: 1px solid transparent;
}
ul.site-header-cart {
    opacity: 0;
    display: none;
    position: absolute;
    z-index: 50;
}
.woocommerce-cart ul.site-header-cart,
.woocommerce-checkout ul.site-header-cart {
    display: none !important;
}
.header-cart-block:hover ul.site-header-cart, .product-added-to-cart .header-cart-block ul.site-header-cart {
    display: block;
    opacity: 1;
    right: -10px;
    min-width: 320px;
    background-color: #fff;
    border: 1px solid #e2e2e2;
    border-radius: 5px;
    padding: 10px;
    z-index: 9999;
    animation: showup 0.5s;
    -webkit-box-shadow: 3px 3px 10px 0px rgba(0,0,0,0.18);
    -moz-box-shadow: 3px 3px 10px 0px rgba(0,0,0,0.18);
    box-shadow: 3px 3px 10px 0px rgba(0,0,0,0.18);
}
.added_to_cart {
    display: block;
}
.woocommerce ul.products li {
    border-bottom: 0;
}
.woocommerce div.product .woocommerce-tabs ul.tabs {
    padding: 0;
}
.woocommerce div.product .woocommerce-tabs ul.tabs:before,
.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li {
    border: none;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li:after, .woocommerce div.product .woocommerce-tabs ul.tabs li:before {
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li {
    background-color: transparent;
    padding: 0 30px 0 0;
    margin: 0;
}
.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li:hover a {
    border-bottom: 2px solid #fdb907;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a {
    padding: 10px 20px;
    font-weight: 300;
    min-width: 100px;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    text-align: center;
    color: #fdb907;
    border-radius: 0;
}
.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a {
    border-bottom: 2px solid #fdb907;
    color: #fdb907;
}
.single-product div.product form.cart .plus,
.single-product div.product form.cart .minus {
    float: left;
    margin: 0;
    display: inline-block;
    padding: 5px 10px;
    color: #e2e2e2;
    border-radius: 0;
    height: 40px;
    line-height: 1.6;
    font-size: 18px;
}
.single-product div.product form.cart .plus {
    margin-right: 10px;
}
.woocommerce div.product form.cart table div.quantity {
    float: left;
    margin: 0 -1px;
}
.woocommerce div.product form.cart div.quantity {
    margin: 0 -1px;
}
.woocommerce div.product form.cart .group_table td:first-child {
    width: 135px;
}
.woocommerce .quantity .qty {
    border: 1px solid #e2e2e2;
    padding: 5px;
    height: 40px;
    line-height: 1.6;
    font-size: 18px;
    border-radius: 0;
    width: 2.7em;
}
.woocommerce div.product .woocommerce-tabs h2:first-child {
    display: none;
}
.product_meta {
    clear: both;
    font-size: 14px;
    border-bottom: 1px solid #eaeaea;
    margin-top: -1px;
    padding: 20px 0;
    margin-top: 0;
}
.woocommerce div.product form.cart {
    padding: 20px 0;
    border-top: 1px solid;
    border-bottom: 1px solid;
    margin-top: 20px;
    border-color: #eaeaea;
    margin-bottom: 0;
}
.woocommerce div.product .product_title {
    clear: none;
    padding: 0 0 20px;
    margin: 0 0 15px;
    border-bottom: 1px solid #eaeaea;
}
section.related.products, .up-sells.upsells.products {
    clear: both;
}
section.related.products ul.products, .up-sells.upsells.products ul.products {
    margin-top: 30px;
}
.woocommerce span.onsale {
    background-color: #fdb907;
    color: #000;
    line-height: 1.7;
    min-height: 1.7em;
    border-radius: 3px;
}
.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price {
    color: #777;
}
.woocommerce ul.products li.product .button {
    margin-top: 5px;
    margin-bottom: 15px;
}
p.woocommerce-mini-cart__buttons.buttons {
    text-align: center;
}
.woocommerce div.product form.cart .variations select {
    min-width: 70%;
}

.woocommerce ul.products li.product .woocommerce-loop-category__title {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.77);
    margin: 0 0 1em;
}
.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img {
    width: 60px;
    border: 1px solid #d9d9d9;
    border-radius: 5px;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range, 
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
    background-color: #fdb907;
}
.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range {
    top: 2px;
    height: 4px;
}
.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
    background-color: transparent;
    border: 1px solid;
    height: 10px;
}
.woocommerce .widget ul.woocommerce-widget-layered-nav-list li,
.woocommerce .widget_layered_nav_filters ul li {
    border: 0;
}
#add_payment_method #payment, .woocommerce-cart #payment, .woocommerce-checkout #payment {
    background: rgba(235, 233, 235, 0.46);
}
.woocommerce-error, .woocommerce-info, .woocommerce-message {
    background-color: rgba(247, 246, 247, 0.1);
    color: inherit;
}

nav.navigation.post-navigation {
    clear: both;
    width: 100%;
}
.post-navigation .nav-previous {
    float: left;
    width: 50%;
}
.post-navigation .nav-next {
    float: right;
    text-align: right;
    width: 50%;
}
.nav-subtitle {
    background: transparent;
    opacity: 0.8;
    color: initial;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
}
.nav-links {
    width: 100%;
    display: block;
    float: left;
    clear: both;
    margin-bottom: 15px;
}
.nav-links .nav-title {
    position: relative;
}
.nav-previous .fa {
    margin-right: 5px;
}
.nav-next .fa {
    margin-left: 5px;
}
