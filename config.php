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
    'location' => 'Tunisia',
    'header' => "Software Engineer",
    'website' => 'sayfessyd.com',
    'about' => "A frontend-focus software engineer. I share about making software products through my articles; you can follow me on <a href='https://indieweb.social/web/@sayfessyd'>Mastodon</a>, <a href='https://medium.com/@sayfessyd'>Medium</a>, and <a href='https://dev.to/sayfessyd'>DEV</a> for up-to-date content and updates about my progress. In October 2015, I released my first <a href='https://www.producthunt.com/posts/lollipop-2-0'>baby</a> (i.e., product) which is a paid software for editing images. Outside of developing software, I enjoy playing the piano.",

    'experiences' => [
        ['title' => 'Technical Referent', 'time' => "2019 - Present", 'company' => 'be ys Software', 'details' => 'Responsible for developing an authentication system based on OAuth standards. Working on a software product using Spring Boot and Angular technologies. Developing DevOps scripts for deployment purposes. Developed a system that allows logs management with Blockchain technology.', 'location' => 'Tunisia'],
        ['title' => 'Author', 'time' => "2021 - Present", 'company' => 'Educative, Inc.', 'details' => 'Authoring courses on a fast-growing e-learning platform for professional software developers and engineers.', 'location' => 'Remote'],
        ['title' => 'Technical Writer', 'time' => "2021 - Present", 'company' => 'In Plain English', 'details' => 'Writing a series of articles about JavaScript behind the scenes, to one of the top Medium publications.', 'location' => 'Remote'],
        ['title' => 'Author', 'time' => "2019 - 2020", 'company' => 'Widgetic', 'details' => 'Create applications for the no-code community available on a software marketplace for non-coders.', 'location' => 'Remote'],
        ['title' => 'Software Developer', 'time' => "2015 - 2018", 'company' => 'Envato Author Community', 'details' => 'Developed client-side plugins and social media platforms that have been sold exclusively on Envato.', 'location' => 'Remote'],
    ],

    'expertise' => [
        ['name' => '', 'details' => ''],
    ],

    'organizations' => [
        ['href' => '', 'title' => '', 'time' => '', 'company' => '', 'details' => '', 'location' => '']
    ],

    'projects' => [
        ['title' => 'Message.Me', 'description' => "MessageMe is a social media platform, based on anonymous messages and built on top of Laravel with all possible features.", 'url' => "https://codecanyon.net/item/messageme-laravel-anonymous-social-media-script/22280893", 'image' => 'messageme.jpg'],
        ['title' => 'Lollipop', 'description' => "Lollipop is an image editor built using the latest HTML, CSS, and JavaScript techniques/tools.", 'url' => "https://codecanyon.net/item/lollipop-image-editor/12957420", 'image' => 'lollipop.jpg'],
    ],

    'education' => [
        ['title' => "Engineer's Degree in Software Engineering", 'university' => 'Higher Institute Of Computer Science', 'period' => '2016 - 2019', 'location' => 'Tunisia', 'details' => "Took courses in programming language theory, information theory, complexity theory, probability, computer architecture, distributed computing, computer networks, artificial intelligence, operating systems, software design, software development."],
        ['title' => "Licentiate's Degree in Computer Systems", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2016', 'location' => 'Tunisia', 'details' => "Took courses in algorithm design, operating systems, introduction to software engineering, programming on the web, introduction to databases, introduction to computer networks."],
        ['title' => "School Baccalaureate's Degree in Natural Sciences", 'university' => 'Ibn Rochd High School', 'period' => '2009 - 2013', 'location' => 'Tunisia', 'details' => "Took courses in natural sciences, mathematics, physics, chemistry, literature."]
    ],

    'profiles' => [
        'linkedin' => 'https://www.linkedin.com/in/saifeddine-essid-539a32a4',
        'github' => 'https://github.com/sayfessyd',
        'twitter' => 'https://twitter.com/sayfessyd',
        'codecanyon' => 'https://codecanyon.net/user/specialapp/portfolio',
        'play' => 'https://play.google.com/store/apps/developer?id=SpecialAppDev',
        'medium' => 'https://medium.com/@sayfessyd',
        'blog' => 'https://codebase.sayfessyd.com'
    ],

    'skills' => [
        ['title' => '', 'level' => '90', 'count' => '1'],
    ],

];
