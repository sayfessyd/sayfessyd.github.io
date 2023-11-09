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
    'siteDescription' => 'My personal static website',
    'firstname' => 'sayf',
    'lastname' => 'Essyd',
    'email' => 'mail.sayf@yahoo.com',
    'location' => 'Tunisia',
    'header' => "Software Engineer",
    'website' => 'sayfessyd.com',
    'about' => "Frontend-focus Software Engineer with over seven years of successful experience in Angular, Vue.js and Vanilla JavaScript. Recognized consistently for performance excellence and contributions to success in front-end development, collaborated on software projects in various industries and business domains.",

    'experiences' => [
        ['title' => 'Frontend Engineer', 'time' => "2023 - Present", 'company' => 'Proxify', 'details' => 'A Swedish-based growing network of talented developers. It matches remote IT professionals with companies in Sweden and abroad.', 'location' => 'Remote'],
        ['title' => 'Software Engineer', 'time' => "2019 - Present", 'company' => 'be ys Software', 'details' => 'Well-established company with over twenty years of experience. It provides expertise in managing digital identities, handling sensitive data, and ensuring the secure flow of personal information.', 'location' => 'Tunisia'],
        ['title' => 'Author', 'time' => "2021 - Present", 'company' => 'Educative, Inc.', 'details' => 'Rapidly growing e-learning platform for professional software developers and engineers. It offers interactive courses and currently serves over one million users.', 'location' => 'Remote'],
        ['title' => 'Software Developer', 'time' => "2015 - 2018", 'company' => 'Envato Author Community', 'details' => 'Online community for creative assets, tools, and talent. With over two million customers annually, it is a world-leading platform in its industry.', 'location' => 'Remote'],
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
        ['title' => "Engineer's Degree in Software Engineering", 'university' => 'Higher Institute Of Computer Science', 'period' => '2016 - 2019', 'location' => 'Tunisia', 'details' => "Took courses in programming language theory, information theory, complexity theory, probability, computer architecture, distributed computing, computer networks, artificial intelligence, operating systems, software design, and software development."],
        ['title' => "Licentiate's Degree in Computer Systems", 'university' => 'Higher Institute Of Computer Science', 'period' => '2013 - 2016', 'location' => 'Tunisia', 'details' => "Took courses in algorithm design, operating systems, introduction to software engineering, programming on the web, introduction to databases, and introduction to computer networks."],
        ['title' => "School Baccalaureate's Degree in Experimental Science", 'university' => 'Ibn Rushd High School', 'period' => '2009 - 2013', 'location' => 'Tunisia', 'details' => "Took courses in natural sciences, mathematics, physics, chemistry, and literature."]
    ],

    'profiles' => [
        ['url' => 'https://www.reddit.com/user/sayf_essyd', 'icon' => 'fab fa-reddit-alien'],
        ['url' => 'https://indieweb.social/@sayfessyd', 'icon' => 'fab fa-mastodon'],
        ['url' => 'https://twitter.com/sayfessyd', 'icon' => 'fab fa-x-twitter'],
        ['url' => 'https://medium.com/@sayfessyd', 'icon' => 'fab fa-medium-m'],
        ['url' => 'https://www.linkedin.com/in/saifeddine-essid-539a32a4', 'icon' => 'fab fa-linkedin-in'],
        ['url' => 'https://github.com/sayfessyd', 'icon' => 'fab fa-github'],
    ],

    'skills' => [
        ['title' => '', 'level' => '90', 'count' => '1'],
    ],

];
