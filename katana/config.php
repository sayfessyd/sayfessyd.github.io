<?php

return [
    /**
     * --------------------------------------------------------------------------
     * Site base URL
     * --------------------------------------------------------------------------
     *
     * This base URL will be used to generate links for the @url blade
     * directive, it should always start with a forward slash.
     *
     */

    'base_url' => '/',

    /**
     * --------------------------------------------------------------------------
     * Enabling the blog generator
     * --------------------------------------------------------------------------
     *
     * When the blog generator is enabled, blade views in "content/_blog" will
     * be parsed to get blog posts data and generate blog pagination views.
     *
     * Disable this option if you don't need  a blog for your website to
     * get a performance boost.
     *
     */

    'enableBlog' => false,

    /**
     * --------------------------------------------------------------------------
     * The number of posts in a page
     * --------------------------------------------------------------------------
     *
     * The number of posts to appear on every page in the blog pages.
     *
     */
    'postsPerPage' => 3,

    /**
     * --------------------------------------------------------------------------
     * The view used to display blog paginated pages
     * --------------------------------------------------------------------------
     *
     * This blade view will be used to generate the paginated list of
     * posts for the blog.
     *
     */

    'postsListView' => 'blog',

    /**
     * --------------------------------------------------------------------------
     * Custom variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the custom variables you'd like to be present in
     * the blade views.
     *
     */

    'siteName' => 'sayfessyd',

    'siteDescription' => 'Yet another awesome site.',

    'name' => 'Sayf Essyd',
    'email' => 'mail.sayf@yahoo.com',
    'website' => 'sayfessyd.com',
    'linkedIn' => 'linkedin.com/in/saifeddine-essid-539a32a4',
    'github' => 'github.com/sayfessyd',
    'twitter' => 'sayfessyd',
    'youtube' => 'sayfmusic',

    'projects_A' => [
        ['title' => 'Pharma', 'description' => "Pharma is a web application that allows the stock management of a pharmacy. Technologies : Laravel 4.2 - AngularJS 1.2 - jQuery 2.1 - Font Awesome 4.2", 'job' => 'Frontend / Backend Developer', 'period' => 'November 2014 – January 2015', 'url' => "https://github.com/sayfessyd/pharma"],
        ['title' => 'loadwave', 'description' => "It’s a kind of video sharing website based on youtube that implements timed comments. Technologies : PHP5 (PSR-4 standard) - AngularJS 1.3 - jQuery 2.1 - Zurb Foundation 5 - Font Awesome 4.3", 'job' => 'Frontend / Backend Developer', 'period' => 'February 2015 – April 2015', 'url' => "https://github.com/sayfessyd/loadwave"],
        ['title' => 'Effectshop [ 10K-50K Downloads | 3,6 Stars ]', 'description' => "Effectshop is the perfect image editing app for quick and straight forward editing. Technologies : Cordova 4 - AngularJS 1.4 - jQuery 2.1 - Font Awesome 4.4", 'job' => 'Frontend Developer', 'period' => 'July 2015 – September 2015', 'url' => "https://play.google.com/store/apps/details?id=net.specialapp.effectshop"],
        ['title' => 'Lollipop (Premium Software / jQuery plugin)', 'description' => "Lollipop is the perfect image editing HTML5 app for quick and straight forward editing. Technologies : HTML5 - CSS3 - JavaScript (ES5)", 'job' => 'Frontend Developer', 'period' => 'September 2015 – October 2015', 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420"],
        ['title' => 'Promissory Notes Manager', 'description' => "Java EE web application that allows the management of promissory notes. Technologies : Spring Framework 4.3 - Hibernate ORM 5.2 - JavaServer Faces (JSF) 2.2 - PrimeFaces 5.3 - JasperReports 6.3", 'job' => 'Frontend / Backend Developer', 'period' => 'February 2016 – May 2016', 'url' => "https://github.com/sayfessyd/promissory-notes-manager"],
        ['title' => 'Lollipop 2.0 (Premium Software / jQuery plugin) [ +140 Sales | 5 Stars ]', 'description' => "Lollipop is the perfect image editing HTML5 app for quick and straight forward editing. Technologies : Yarn - Gulp - Webpack - ES2015 - jQuery - Pug - Sass", 'job' => 'Frontend Developer', 'period' => 'Juin 2017 – July 2017', 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420"],
    ],

    'projects_B' => [
        ['title' => 'MVC Wrapper', 'description' => "It's a simple MVC wrapper for PHP using PSR-0 standard. All the MVC structure is done, you just need to create your models, views and controllers.", 'job' => 'Backend Developer', 'period' => 'August 2014 – September 2014', 'url' => "https://github.com/sayfessyd/MVC-wrapper"],
        ['title' => 'DAO and Service layer', 'description' => "It's a simple DAO and Service layer for JEE Platform. All structure is done, you just need to create your models, services and daos.", 'job' => 'Backend Developer', 'period' => 'November 2015 – December 2015', 'url' => "https://github.com/sayfessyd/DAO-and-Service-layer"],
        ['title' => 'Akinator Clone', 'description' => "Akinator, the Web Genie is an internet game and mobile app based on Twenty Questions that attempts to determine which character the player is thinking. Technologies: ES2015", 'job' => 'Frontend Developer', 'period' => 'Decembre 2015 – January 2016', 'url' => "https://github.com/sayfessyd/akinator-clone"],
        ['title' => 'Prestashop Booster', 'description' => "Turn prestashop based websites much faster by deleting worthless data.. Technologies : PHP5 - Smarty - jQuery", 'job' => 'Frontend / Backend Developer', 'period' => 'July 2017 – August 2017', 'url' => "#"],
        ['title' => 'webapp-chart', 'description' => "The chart that describes possibilities of web technologies that i have tried after 4 years. [2014-2018]", 'job' => 'Web Developer', 'period' => 'December 2017', 'url' => "https://github.com/sayfessyd/webapp-chart"],
        ['title' => 'qpc-version-bootstrap4', 'description' => "Questions pour un champion is a french game show produced under license from the company Fremantle Media, broadcast on FR3 and France 3 since November 7, 1988 and rebroadcast on TV5 Monde. Technologies: Yarn - Express.js - Socket.io - Pug - Bootstrap 4 - Fontawesome - jQuery", 'job' => 'Frontend / Backend Developer', 'period' => 'December 2017 – January 2018', 'url' => "https://github.com/sayfessyd/qpc-version-bootstrap4"]
    ],

    'languages' => [
        ['name' => 'Arabic', 'n/p' => 'Native'],
        ['name' => 'French', 'n/p' => 'Professional'],
        ['name' => 'English', 'n/p' => 'Professional']
    ],

    'education' => [
        ['title' => "Engineer's Degree", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2019'],
        ['title' => "Bachelor's Degree", 'university' => 'Natural Sciences', 'period' => '2013']
    ],

    'interests' => [
        'Music'
    ],

    'skills' => [
        ['title' => 'PHP7 & Laravel 5.x &    Lumen 5.x', 'level' => '90%'],
        ['title' => 'ES2015 & Vue.js 2.x & Nuxt.js 1.x', 'level' => '80%'],
        ['title' => 'HTML5 & CSS3 & CSSnext', 'level' => '70%'],
        ['title' => 'Bootstrap 4 & Foundation 5 & PrimeFaces 5 & Bulma 0.x & TailwindCSS 0.x', 'level' => '70%'],
        ['title' => 'Yarn & Gulp & Webpack', 'level' => '70%'],
        ['title' => 'Pug (Jade) & Stylus & Sass', 'level' => '70%'],
        ['title' => 'Spring MVC & Spring Security & Hibernate & JSF 2.0', 'level' => '70%'],
        ['title' => 'ASP.NET Web API & ASP.NET Razor', 'level' => '60%'],
        ['title' => 'Express.js & Socket.io', 'level' => '60%'],
        ['title' => 'ES5 & jQuery (+Mobile) & AngularJS 1.x', 'level' => '90%'],
        ['title' => 'Apache Cordova 5.x', 'level' => '70%'],
        ['title' => 'Ableton Live 9.x & Kontakt 5.x', 'level' => '70%'],
        ['title' => 'Adobe Photoshop & After Effects CS6', 'level' => '60%']
    ]


];
