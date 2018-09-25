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

    'firstname' => 'sayf',
    'lastname' => 'Essyd',
    'email' => 'mail.sayf@yahoo.com',
    'location' => 'Ariana, TN',
    'header' => "Self-Employed Software Engineer",
    'website' => 'sayfessyd.com',

    'about' => "I have worked on several projects since June 2014 as a self-employed full stack developer trying to enhance my own skills and discover many technologies, especially the web's ecosystem which still growing day by day until now. I am the author of an image editor called Lollipop that has reached over 175 sales on CodeCanyon as a 5-star product, and also many open source projects on Github. I plan to integrate big companies in the world as a software engineer after graduating.",
    'tel' => "+216.50.465.281",

    'experiences' => [
        ['title' => 'Full Stack Developer', 'time' => "2014 - Present", 'company' => 'Self-Employed', 'details' => 'I have worked as a self-employed full stack developer in parallel of my studies since June 2014.', 'location'=>'Ariana, TN'],
        ['title' => 'Full Stack Developer', 'time' => "2016", 'company' => 'BNA Bank', 'details' => 'I integrated BNA Bank (a local bank in Tunisia) team as a full stack developer to work on a Java EE web application that allows the management of promissory notes. It was in the frame of an internship mission.', 'location'=>'Tunis, TN'],
    ],

    'expertise' => [
        ['name' => 'PHP', 'details' => 'I have 4 years of experience in PHP with almost 4 projects. Two of them were built with Laravel and the rest with native PHP.'],
        ['name' => 'Javascript', 'details' => 'I have 4 years of experience in Javascript. I have done much work using many Javascript libraries.'],
        ['name' => 'Java EE', 'details' => 'I have 2 years of experience on Java EE platform with almost 2 projects. One of them was built with Spring Framework and the rest with native Java.'],
        ['name' => 'Node.js', 'details' => 'I have a small experience in Node.js with almost 1 small project built with Express.js.'],
        ['name' => 'ASP.NET', 'details' => 'I have a small experience on ASP.NET platform with almost 5 small projects.'],
        ['name' => 'Android', 'details' => 'I have a small experience in Android development with almost 1 small project.']
    ],

    'organisations' => [
        ['title' => 'IEEE Member', 'time' => "2016", 'company' => 'IEEE Tunisia Section', 'details' => "A member of the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.", 'location'=>'Ariana'],
    ],

    'projects' => [
        ['title' => 'Message.Me', 'description' => "MessageMe is a social media script, the ONLY ONE of its kind based on anonymous messages and built on top of Laravel 5.4 with all possible features.", 'url' => "https://codecanyon.net/item/messageme-laravel-anonymous-social-media-script/22280893", 'image' => 'messageme.jpg'],
        ['title' => 'Lollipop 2.0 (Premium Software / jQuery plugin)', 'description' => "Lollipop 2.0 is built using the latest HTML5, CSS3 and JavaScript techniques and tools.", 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420", 'image' => 'lollipop2.jpg'],
    ],

    'education' => [
        ['title' => "Engineer's Degree in Software Engineering", 'university' => 'Higher Institute Of Computer Science', 'period' => '2016 - 2019', 'location' => 'Ariana, TN', 'details' => "After getting my licentiate degree, I have chosen to continue my studies in software engineering to obtain my engineer degree."],
        ['title' => "Licentiate's Degree in Computer Systems", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2016', 'location' => 'Ariana, TN', 'details' => "In 2016, I got my licentiate degree in computer systems from the Higher Institute Of Computer Science."],
        ['title' => "Bachelor's Degree in Natural Sciences", 'university' => 'Ibn Rochd High School', 'period' => '2012 - 2013', 'location' => 'Menzel Bourguiba, TN', 'details' => "In 2013, I got my bachelor degree (School Baccalaureate) in natural sciences."]
    ],

    'profiles' => [
        'linkedin' => 'https://www.linkedin.com/in/saifeddine-essid-539a32a4',
        'github' => 'https://github.com/sayfessyd',
        'twitter' => 'https://twitter.com/sayfessyd',
        'youtube' => 'https://www.youtube.com/channel/UCvmjmfm4aU82WvtPnfwNLCg',
        'facebook' => 'https://www.facebook.com/sayf.music',
        'codecanyon' => 'https://codecanyon.net/user/specialapp/portfolio',
        'play' => 'https://play.google.com/store/apps/developer?id=SpecialAppDev',
        'instagram' => 'https://www.instagram.com/sayfessyd'
    ],


    'skills' => [
        ['title' => 'PHP7 & Laravel', 'level' => '90', 'count' => '2'],
        ['title' => 'ES6 & Vue.js', 'level' => '80', 'count' => '2'],
        ['title' => 'ES5 & jQuery & AngularJS', 'level' => '80', 'count' => '3'],
        ['title' => 'HTML5 & CSS3 & PostCSS', 'level' => '70', 'count' => '3'],
        ['title' => 'Yarn & Gulp & Webpack', 'level' => '70', 'count' => '3'],
        ['title' => 'Bootstrap & Foundation & PrimeFaces & Bulma & TailwindCSS', 'level' => '70', 'count' => '5'],
        ['title' => 'Pug & Stylus & Sass', 'level' => '70', 'count' => '3'],
        ['title' => 'Spring & Hibernate & JSF & Struts', 'level' => '70', 'count' => '4'],
        ['title' => 'Express.js & Socket.io', 'level' => '60', 'count' => '2'],
        ['title' => 'ASP.NET MVC & Web API & Web Forms', 'level' => '60', 'count' => '3'],
        ['title' => 'Prestashop', 'level' => '60', 'count' => '1'],
        ['title' => 'Android Studio', 'level' => '60', 'count' => '1'],
        ['title' => 'Adobe Photoshop & After Effects', 'level' => '60', 'count' => '2'],
        ['title' => 'Apache Cordova & OnsenUI', 'level' => '60', 'count' => '2'],
        ['title' => 'Ableton Live & Kontakt', 'level' => '60', 'count' => '2'],
    ],

];
