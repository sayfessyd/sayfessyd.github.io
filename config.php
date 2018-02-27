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

    'info' => "Creator of Lollipop - Image Editor 🍭 Student at the HI of Computer Science (Engineer's degree) 🎓 Pianist and Composer in my spare time ! 🎹 😉",
    'contact' => "Hi! I'm Saifeddine Essid, find me as @sayfessyd on twitter and github. I'm currently working as a freelance on weekdays and practice piano on weekends. ",
    'tel' => "sayfessyd",

    'experiences' => [
        ['title' => 'Full Stack Developer', 'time' => "February 2016 - May 2016", 'company' => 'BNA Bank', 'details' => 'Develop a Java EE web application that allows the management of promissory notes.', 'annexe' => 'https://github.com/sayfessyd/promissory-notes-manager', 'location'=>'Tunis'],
    ],

    'organisations' => [
        ['title' => 'IEEE Member', 'time' => "December 2016 - Present", 'company' => 'IEEE Tunisia Section', 'details' => "A member of the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.", 'annexe' => 'Certificate%20of%20Participation%20-%20IEEEXtreme%2011.0%20-%20Saifeddine%20Essid.pdf', 'location'=>'Ariana'],
    ],

    'projects_A' => [
        ['title' => 'Pharma', 'description' => "Pharma is a web application that allows the stock management of a pharmacy. [CRUD Operations]", 'technologies' => 'Laravel 4.2 - AngularJS 1.2 - jQuery 2.1 - Font Awesome 4.2', 'job' => 'Frontend / Backend Developer', 'period' => 'November 2014 – January 2015', 'url' => "https://github.com/sayfessyd/pharma", 'image' => 'pharma.png', 'type' => 'frontend backend'],
        ['title' => 'loadwave', 'description' => "loadwave is a video sharing webapp based on youtube, with the possibility to make Timed Comments.", 'technologies' => 'PHP5 (PSR-4 standard) - AngularJS 1.3 - jQuery 2.1 - Zurb Foundation 5 - Font Awesome 4.3', 'job' => 'Frontend / Backend Developer', 'period' => 'February 2015 – April 2015', 'url' => "https://github.com/sayfessyd/loadwave", 'image' => 'loadwave.png', 'type' => 'frontend backend'],
        ['title' => 'Effectshop [ 10K-50K Downloads | 3,6 Stars ]', 'description' => "Effectshop is the perfect image editing app for quick and straight forward editing.", 'technologies' => 'Cordova 4 - AngularJS 1.4 - jQuery 2.1 - Font Awesome 4.4', 'job' => 'Frontend Developer', 'period' => 'July 2015 – September 2015', 'url' => "https://play.google.com/store/apps/details?id=net.specialapp.effectshop", 'image' => 'effectshop.png', 'type' => 'frontend'],
        ['title' => 'Lollipop (Premium Software / jQuery plugin)', 'description' => "Lollipop is the perfect image editing HTML5 app for quick and straight forward editing.", 'technologies' => 'HTML5 - CSS3 - JavaScript (ES5)', 'job' => 'Frontend Developer', 'period' => 'September 2015 – October 2015', 'url' => "https://jqueryplugins.net/lollipop-html5-image-editor-app/", 'image' => 'lollipop.jpg', 'type' => 'frontend'],
        ['title' => 'Promissory Notes Manager', 'description' => "Java EE web application that allows the management of promissory notes. [CRUD Operations]", 'technologies' => 'Spring Framework 4.3 - Hibernate ORM 5.2 - JavaServer Faces (JSF) 2.2 - PrimeFaces 5.3 - JasperReports 6.3', 'job' => 'Frontend / Backend Developer', 'period' => 'February 2016 – May 2016', 'url' => "https://github.com/sayfessyd/promissory-notes-manager", 'image' => 'source-code.jpg', 'type' => 'frontend backend'],
        ['title' => 'Lollipop 2.0 (Premium Software / jQuery plugin) [ +150 Sales | 5 Stars ]', 'description' => "Lollipop 2.0 is build using the latest HTML5, CSS3 and JavaScript techniques and tools.", 'technologies' => 'Yarn - Gulp - Webpack - ES2015 - jQuery - Pug - Sass', 'job' => 'Frontend Developer', 'period' => 'Juin 2017 – July 2017', 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420", 'image' => 'lollipop2.png', 'type' => 'frontend'],
    ],

    'projects_B' => [
        ['title' => 'MVC Wrapper', 'description' => "It's a simple MVC wrapper for PHP using PSR-0 standard. All the MVC structure is done, you just need to create your models, views and controllers.", 'technologies' => 'PHP5 (PSR-0 standard)', 'job' => 'Backend Developer', 'period' => 'August 2014 – September 2014', 'url' => "https://github.com/sayfessyd/MVC-wrapper", 'image' => 'source-code.jpg', 'type' => 'backend'],
        ['title' => 'DAO and Service layer', 'description' => "It's a simple DAO and Service layer for JEE Platform. All structure is done, you just need to create your models, services and daos.", 'technologies' => 'Java JEE','job' => 'Backend Developer', 'period' => 'November 2015 – December 2015', 'url' => "https://github.com/sayfessyd/JAVA-projects/tree/master/event_manager", 'image' => 'source-code.jpg', 'type' => 'backend'],
        ['title' => 'Akinator Clone', 'description' => "Akinator, the Web Genie is an internet game and mobile app based on Twenty Questions that attempts to determine which character the player is thinking.", 'technologies' => 'ES2015', 'job' => 'Frontend Developer', 'period' => 'Decembre 2015 – January 2016', 'url' => "https://github.com/sayfessyd/WEB-projects/tree/master/akinator_clone", 'image' => 'akinator.png', 'type' => 'frontend'],
        ['title' => 'Prestashop Booster', 'description' => "A module that turns prestashop based websites much faster by deleting worthless data, optimizes the store and raise performance.", 'technologies' => 'PHP5 - Smarty - jQuery', 'job' => 'Frontend / Backend Developer', 'period' => 'July 2017 – August 2017', 'url' => "#", 'image' => 'prestashop.png', 'type' => 'frontend'],
        ['title' => 'Webapp Chart', 'description' => "The chart that describes possibilities of web technologies that i have tried during 4 years. [2014-2018]", 'technologies' => 'Draw.io', 'job' => 'Web Developer', 'period' => 'December 2017', 'url' => "https://github.com/sayfessyd/webapp-chart", 'image' => 'webapp.png', 'type' => 'frontend backend'],
        ['title' => 'Questions pour un champion', 'description' => "Questions pour un champion is a french game show produced under license from the company Fremantle Media.", 'technologies' => 'Yarn - Express.js - Socket.io - Pug - Bootstrap 4 - Fontawesome - jQuery', 'job' => 'Frontend / Backend Developer', 'period' => 'December 2017 – January 2018', 'url' => "https://github.com/sayfessyd/qpc-version-bootstrap4", 'image' => 'qpc.png', 'type' => 'frontend']
    ],

    'languages' => [
        ['name' => 'Arabic', 'n/p' => 'Native'],
        ['name' => 'French', 'n/p' => 'Professional'],
        ['name' => 'English', 'n/p' => 'Professional']
    ],

    'education' => [
        ['title' => "Engineer's Degree in Software Engineering", 'university' => 'Higher Institute Of Computer Science', 'period' => '2016 - 2019'],
        ['title' => "Licence's Degree in Computer Systems", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2016'],
        ['title' => "Bachelor's Degree in Natural Sciences", 'university' => 'Ibn Rochd High School', 'period' => '2012 - 2013']
    ],

    'interests' => [
        'Music'
    ],

    'top_skills' => [
        ['title' => 'PHP7 & Laravel 5.x (+Lumen)', 'level' => '90%', 'count' => '3',  'description' => 'PHP is a server-side scripting language designed for web development. Laravel is a web application framework with expressive, elegant syntax. Lumen is the stunningly fast PHP micro-framework by Laravel.'],
        ['title' => 'ES6 & Vue.js 2.x (+Nuxt.js)', 'level' => '80%', 'count' => '3', 'description' => ' ES6, also known as ES2015, is the latest version of the ECMAScript standard. Vue.js is an open-source progressive JavaScript framework for building user interfaces. Nuxt.js is a framework for server-rendered Vue applications.'],
        ['title' => 'ES5 & jQuery (+Mobile) & AngularJS 1.x', 'level' => '80%', 'count' => '4', 'description' => 'jQuery is a JavaScript library designed to simplify the client-side scripting of HTML. AngularJS is a JavaScript-based front-end web application framework mainly maintained by Google.'],
    ],

    'skills' => [
        ['title' => 'HTML5 & CSS3 & CSSnext', 'level' => '70%', 'count' => '3', 'description' => 'HTML is a markup language used for structuring and presenting content on the World Wide Web. CSS is a style sheet language used for describing the presentation of a document written in a markup language.'],
        ['title' => 'Bootstrap 4 & Foundation 5 & PrimeFaces 5 & Bulma 0.x & TailwindCSS 0.x', 'level' => '70%', 'count' => '5', 'description' => 'Top 5 Most Popular CSS and UI Frameworks. A CSS framework is a pre-prepared software framework to allow easier and more standards-compliant web design using the CSS language.'],
        ['title' => 'Yarn & Gulp & Webpack', 'level' => '70%', 'count' => '3', 'description' => 'Yarn is a fast, reliable, and secure dependency management. Gulp is a toolkit to automate time-consuming tasks in the development workflow. Webpack is a module bundler.'],
        ['title' => 'Pug (Jade) & Stylus & Sass', 'level' => '70%', 'count' => '3', 'description' => 'Pug is a high-performance template engine heavily influenced by Haml. Stylus is a revolutionary new language, providing an efficient, dynamic, and expressive way to generate CSS. Sass is a scripting language that is interpreted or compiled into CSS.'],
        ['title' => 'Spring Framework & Hibernate ORM & JSF 2.0', 'level' => '70%', 'count' => '3', 'description' => 'Spring is an application framework and inversion of control container for the Java platform. Hibernate ORM is an object-relational mapping tool. JSF is a Java specification for building component-based user interfaces for web applications.'],
        ['title' => 'ASP.NET Web API & Razor & Web Forms', 'level' => '60%', 'count' => '3', 'description' => 'ASP.NET is an open-source server-side web application framework designed for web development to produce dynamic web pages. Razor is an ASP.NET programming syntax used to create dynamic web pages.'],
        ['title' => 'Express.js & Socket.io', 'level' => '60%', 'count' => '2', 'description' => 'Express.js, or simply Express, is a web application framework for Node.js. Socket.IO is a JavaScript library for realtime web applications,  it enables bi-directional communication.'],
        ['title' => 'Prestashop 1.7', 'level' => '60%', 'count' => '1', 'description' => 'Prestashop is an open source e-commerce solution, it is written in the PHP programming language with support for the MySQL database management system.'],
        ['title' => 'Apache Cordova 5.x', 'level' => '60%', 'count' => '1', 'description' => 'Apache Cordova (PhoneGap) is a mobile application development framework, it enables software programmers to build applications for mobile devices using web technologies.'],
        ['title' => 'Ableton Live 9.x & Kontakt 5.x', 'level' => '60%', 'count' => '2', 'description' => 'Ableton Live is a software music sequencer and digital audio workstation for macOS and Windows. Kontakt is the world’s leading software sampler, a playground for working creatively with samples.'],
        ['title' => 'Adobe Photoshop & After Effects CS6', 'level' => '60%', 'count' => '2', 'description' => 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for macOS and Windows. Adobe After Effects is a digital visual effects, and compositing application.']
        
    ],

    'other_skills' => [
        'Windows', 'PowerShell', 'Linux', 'Ubuntu', 'Bash', 'Apache', 'C', 'C++',  'JAVA', 'Python', 'Node.js', 'XML', 'XHTML', 'JSON', 'Oracle', 'PostgreSQL', 'MySQL', 'MariaDB', 'Redis', 'SOAP', 'REST', 'Git'
    ]

];
