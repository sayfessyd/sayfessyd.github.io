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
    'siteName' => 'Sayf Essyd',
    'siteDescription' => 'A personal static website.',
    'firstname' => 'sayf',
    'lastname' => 'Essyd',
    'email' => 'mail.sayf@yahoo.com',
    'location' => 'Ariana, TN',
    'header' => "Software Engineer",
    'website' => 'www.sayfessyd.com',
    'about' => "I'm <a href='https://twitter.com/sayfessyd'>@sayfessyd</a>, an independent software engineer. </br></br> I share about making software products through my articles; you can follow me on <a href='https://twitter.com/sayfessyd'>Twitter</a>, <a href='https://medium.com/@sayfessyd'>Medium</a>, and <a href='https://dev.to/sayfessyd'>DEV</a> for up-to-date content and updates about my progress. </br></br> In October 2015, I released my first <a href='https://www.producthunt.com/posts/lollipop-2-0'>baby</a> (i.e., product) which is a paid software for editing images. Today, I'm working on creating Frontend/DevOps paid stuff. </br></br> Outside of developing software, I enjoy playing the piano.",

    'experiences' => [
        ['title' => 'Software Engineer', 'time' => "2014 - Present", 'company' => 'Independent', 'details' => 'Worked on several software projects since June 2014 as a self-employed full stack developer. Creating frontend/backend software products and developing DevOps scripts for deployment purposes.', 'location' => 'Ariana, TN'],
        ['title' => 'Software Engineer', 'time' => "2019 - Present", 'company' => 'Be-softilys', 'details' => 'Developed a system that allows logs management with Blockchain technology. Working on a software product using Spring Boot and Angular technologies. Developing DevOps scripts for deployment purposes.', 'location' => 'Lac 3, TN'],
        ['title' => 'Software Engineer', 'time' => "2019 - Present", 'company' => 'Widgetic', 'details' => 'Work on embed interactive widgets for potential customers. Create applications for the no-code community available on a software marketplace for non-coders.', 'location' => 'Remote, WLD'],
    ],

    'expertise' => [
        ['name' => 'Frontend', 'details' => 'Responsible for implementing visual and interactive elements. Use Vue.js, Angular, and Svelte as front-end frameworks in recent projects.'],
        ['name' => 'DevOps', 'details' => 'Use Docker and Ansible to create DevOps scripts for deploying third-party applications. Use Gitlab CI, Travis CI as continuous integration tools.'],
        ['name' => 'Backend', 'details' => 'Responsible for implementing server-side application logic. Use Spring Boot, Laravel and Express.js as backend frameworks in recent projects.'],
        ['name' => 'Testing', 'details' => 'Responsible for creating unit and integration tests. Use JUnit, Karma, and Nightwatch for testing backend and frontend applications.'],
        ['name' => 'Mobile', 'details' => 'Responsible for creating mobile interfaces and modeling backend services. Create mobile applications using the hybrid, cross-platform, or native approach.'],
        ['name' => 'Blockchain', 'details' => 'Responsible for developing and maintaining decentralized applications. Use BigchainDB, Tendermint, MongoDB as high-level modules to implement Blockchain systems.'],
        ['name' => 'Machine Learning', 'details' => 'Responsible for designing and developing machine learning and deep learning systems. Use Tensorflow.js as a high-level framework for training models.'],
        ['name' => 'Architecture', 'details' => 'Make high-level design choices and tries to enforce technical standards, including software coding standards, tools, and platforms.']
    ],

    'worldwide' => [
        ['href' => 'https://www.ieee.org', 'title' => 'IEEE Member', 'time' => "2016", 'company' => 'IEEE Tunisia Section', 'details' => "A member of the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.", 'location'=>'Ariana']
    ],

    'organizations' => [
        ['href' => 'https://github.com/specialappdev', 'company' => 'SpecialApp', 'details' => "Build awesome software products."],
        ['href' => 'https://github.com/assmajs', 'company' => 'Assma', 'details' => "A progressive JavaScript framework for building efficient and scalable JAMstack apps on the web."],
    ],

    'projects' => [
        ['title' => 'Message.Me', 'description' => "MessageMe is a social media script, the ONLY ONE of its kind based on anonymous messages and built on top of Laravel 5.4 with all possible features.", 'url' => "https://codecanyon.net/item/messageme-laravel-anonymous-social-media-script/22280893", 'image' => 'messageme.jpg'],
        ['title' => 'Lollipop 2.0 (Premium Software / JavaScript plugin)', 'description' => "Lollipop 2.0 is built using the latest HTML5, CSS3, and JavaScript techniques/tools.", 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420", 'image' => 'lollipop.jpg'],
    ],

    'education' => [
        ['title' => "Engineer's Degree in Software Engineering", 'university' => 'Higher Institute Of Computer Science', 'period' => '2016 - 2019', 'location' => 'Ariana, TN', 'details' => "Took courses in programming language theory, information theory, complexity theory, probability, computer architecture, distributed computing, computer networks, artificial intelligence, operating systems, software design, software development."],
        ['title' => "Licentiate's Degree in Computer Systems", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2016', 'location' => 'Ariana, TN', 'details' => "Took courses in algorithm design, operating systems, introduction to software engineering, programming on the web, introduction to databases, introduction to computer networks."],
        ['title' => "School Baccalaureate's Degree in Natural Sciences", 'university' => 'Ibn Rochd High School', 'period' => '2012 - 2013', 'location' => 'Menzel Bourguiba, TN', 'details' => "Took courses in natural sciences, mathematics, physics, chemistry, literature."]
    ],

    'profiles' => [
        'linkedin' => 'https://www.linkedin.com/in/saifeddine-essid-539a32a4',
        'github' => 'https://github.com/sayfessyd',
        'twitter' => 'https://twitter.com/sayfessyd',
        'youtube' => 'https://www.youtube.com/channel/UCvmjmfm4aU82WvtPnfwNLCg',
        'facebook' => 'https://www.facebook.com/sayf.music',
        'codecanyon' => 'https://codecanyon.net/user/specialapp/portfolio',
        'play' => 'https://play.google.com/store/apps/developer?id=SpecialAppDev',
        'instagram' => 'https://www.instagram.com/sayfessyd',
        'soundcloud' => 'https://soundcloud.com/sayfessyd',
        'medium' => 'https://medium.com/@sayfessyd',
        'blog' => 'https://codebase.sayfessyd.com'
    ],

    'skills' => [
        ['title' => 'Vue.js & Angular & Svelte', 'level' => '90', 'count' => '3'],
        ['title' => 'Java & Spring Boot', 'level' => '80', 'count' => '2'],
        ['title' => 'JavaScript & jQuery', 'level' => '80', 'count' => '2'],
        ['title' => 'PHP & Laravel', 'level' => '80', 'count' => '2'],
        ['title' => 'AngularJS & Ember.js', 'level' => '70', 'count' => '2'],
        ['title' => 'HTML & Pug & Nunjucks', 'level' => '70', 'count' => '3'],
        ['title' => 'Bootstrap & PrimeFaces', 'level' => '70', 'count' => '2'],
        ['title' => 'CSS & Sass & Stylus', 'level' => '70', 'count' => '3'],
        ['title' => 'Wordpress & Woocommerce', 'level' => '70', 'count' => '2'],
        ['title' => 'Node.js & Express.js & Socket.io', 'level' => '60', 'count' => '3'],
        ['title' => 'BigchainDB & Tensorflow.js', 'level' => '60', 'count' => '3'],
        ['title' => 'Android & Apache Cordova', 'level' => '60', 'count' => '2'],
        ['title' => 'VB & ASP.NET', 'level' => '60', 'count' => '2'],
    ],

];
