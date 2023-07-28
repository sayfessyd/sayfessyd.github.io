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
    'about' => "As a frontend-focus software engineer, I possess a strong passion for creating intuitive and visually stunning web applications that deliver an exceptional user experience. With expertise in HTML, CSS, JavaScript, and a range of front-end frameworks, I have the ability to craft responsive and scalable user interfaces that seamlessly integrate with backend technologies. I enjoy working on challenging projects and tackling technical tasks that push me to think creatively with a passion for understanding how technologies can be leveraged to optimize development processes and streamline workflows.",

    'experiences' => [
        ['title' => 'Frontend Engineer', 'time' => "2023 - Present", 'company' => 'Proxify', 'details' => '', 'location' => 'Remote'],
        ['title' => 'Software Engineer', 'time' => "2019 - Present", 'company' => 'be ys Software', 'details' => 'As a software engineer, I worked on a software product for securing documents based on Spring Boot and Angular. I built an authentication system that enabled users to access web applications and services with secure ease. Moreover, I created an innovative log management solution that utilized blockchain technology to provide an immutable record of system events.', 'location' => 'Tunisia'],
        ['title' => 'Author', 'time' => "2021 - Present", 'company' => 'Educative, Inc.', 'details' => 'As a course author for an e-learning platform, I created engaging and informative courses for professional software developers and engineers. I took on the challenge of writing a course on building a front-end framework, providing learners with valuable insights into the development process. Through my experience, I have demonstrated my ability to communicate complex technical concepts in an accessible and engaging manner and to provide valuable educational resources.', 'location' => 'Remote'],
        ['title' => 'Software Developer', 'time' => "2015 - 2018", 'company' => 'Envato Author Community', 'details' => 'As a software developer, I proved my ability to develop innovative and effective solutions that meet the needs of the software marketplace. I have built client-side plugins and social media platforms exclusively sold on Envato, reflecting my expertise in cutting-edge web technologies. Some of my most notable creations are a social media platform for anonymous messaging and an image editor based on web technologies.', 'location' => 'Remote'],
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
        
        // ['url' => 'https://www.facebook.com/sayf.music', 'icon' => 'fab fa-facebook-f'],
        // ['url' => 'https://www.instagram.com/sayfessyd', 'icon' => 'fab fa-instagram'],
        // ['url' => 'https://www.tiktok.com/@sayfessyd1', 'icon' => 'fab fa-tiktok'],
        // ['url' => 'https://www.youtube.com/@SayfEssyd', 'icon' => 'fab fa-youtube'],
        // ['url' => 'https://soundcloud.com/sayfessyd', 'icon' => 'fab fa-soundcloud'],
        ['url' => 'https://codebase.sayfessyd.com', 'icon' => 'fas fa-blog'],
        ['url' => 'https://www.reddit.com/user/sayf_essyd', 'icon' => 'fab fa-reddit-alien'],
        ['url' => 'https://indieweb.social/@sayfessyd', 'icon' => 'fab fa-mastodon'],
        ['url' => 'https://twitter.com/sayfessyd', 'icon' => 'fab fa-twitter'],
        ['url' => 'https://medium.com/@sayfessyd', 'icon' => 'fab fa-medium-m'],
        // ['url' => 'https://www.patreon.com/sayfessyd', 'icon' => 'fab fa-patreon'],
        ['url' => 'https://www.linkedin.com/in/saifeddine-essid-539a32a4', 'icon' => 'fab fa-linkedin-in'],
        ['url' => 'https://github.com/sayfessyd', 'icon' => 'fab fa-github'],
        
    ],

    'skills' => [
        ['title' => '', 'level' => '90', 'count' => '1'],
    ],

];
