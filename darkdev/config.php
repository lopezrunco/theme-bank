<?php
$aboutnfo = [
    ['iconClass' => 'fas fa-flag icon', 'text' => 'Birthplace: Miami, Florida'],
    ['iconClass' => 'fas fa-map-marker-alt icon', 'text' => 'Actual location: London, UK']
];

$languages = [
    ['iconClass' => 'fas fa-globe-americas icon', 'text' => 'English (Advanced)'],
    ['iconClass' => 'fas fa-globe-americas icon', 'text' => 'German (Native)']
];

$hobbies = [
    ['iconClass' => 'fas fa-drum icon', 'text' => 'Play drums'],
    ['iconClass' => 'fas fa-book-open icon', 'text' => 'Read and write'],
    ['iconClass' => 'fas fa-biking icon', 'text' => 'Mountain bike']
];

$contactInfo = [
    ['iconClass' => 'fas fa-envelope icon', 'link' => 'mailto:lopezrunco@gmail.com', 'text' => 'lopezrunco@gmail.com', 'title' => 'Email me'],
    ['iconClass' => 'fab fa-github icon', 'link' => 'https://github.com/lopezrunco', 'text' => 'lopezRunco', 'title' => 'View my Github profile'],
    ['iconClass' => 'fab fa-linkedin icon', 'link' => 'https://www.linkedin.com/in/damian-lopez-fullstack-developer', 'text' => 'Damian Lopez', 'title' => 'View my Linkedin profile']
];

$languageSkills = [
    ['imgSrc' => 'img/fullstack-developer-javascript.png', 'imgAlt' => 'Javascript logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'JavaScript'],
    ['imgSrc' => 'img/fullstack-developer-html.png', 'imgAlt' => 'Html logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Semantic HTML'],
    ['imgSrc' => 'img/fullstack-developer-css.png', 'imgAlt' => 'Css logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Responsive CSS'],
    ['imgSrc' => 'img/fullstack-developer-bootstrap.png', 'imgAlt' => 'Bootstrap logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Bootstrap']
];

$techSkillsOne = [
    ['imgSrc' => 'img/fullstack-developer-react.png', 'imgAlt' => 'React logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'React.js'],
    ['imgSrc' => 'img/fullstack-developer-nodejs.png', 'imgAlt' => 'Nodejs logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Node.js'],
    ['imgSrc' => 'img/fullstack-developer-mongodb.png', 'imgAlt' => 'MongoDB logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Mongo DB'],
    ['imgSrc' => 'img/fullstack-developer-express-js.png', 'imgAlt' => 'Express js logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Express.js']
];

$techSkillsTwo = [
    ['imgSrc' => 'img/fullstack-developer-next-js.png', 'imgAlt' => 'Next js logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Next.js'],
    ['imgSrc' => 'img/fullstack-developer-sass.png', 'imgAlt' => 'SASS logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Sass'],
    ['imgSrc' => 'img/fullstack-developer-sql.png', 'imgAlt' => 'SQL logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'SQL'],
    ['imgSrc' => 'img/fullstack-developer-git.png', 'imgAlt' => 'Git logo', 'iconClass' => 'fas fa-chevron-right d-md-none', 'text' => 'Git']
];

$projects = [
    [
        'type' => 'Game',
        'title' => 'Lorem ipsum dolor',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ligula velit, mollis ut pretium sit amet, mollis et quam. Sed turpis nulla, volutpat eu euismod ac, pharetra quis urna. Mauris vehicula dui elit, sit amet ullamcorper velit dictum ac.',
        'tags' => ['MongoDB', 'Express', 'React', 'NodeJS', 'Mongoose', 'Styled components', 'SASS', 'Netlify', 'Heroku', 'Figma'],
        'links' => [
            ['url' => '#', 'icon' => 'fab fa-figma', 'title' => 'Ui Mobile'],
            ['url' => '#', 'icon' => 'fab fa-figma', 'title' => 'UI Desktop'],
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View Front-end code'],
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View API code']
        ],
        'icon' => 'fas fa-layer-group'
    ],
    [
        'type' => 'Blog',
        'title' => 'Mauris fringilla orci sodales',
        'description' => 'Sed sed nisi ut sem sodales consectetur a sit amet justo. Suspendisse ultrices erat sed ligula rhoncus pulvinar. Vestibulum eu libero nec nunc pulvinar ullamcorper nec elementum mi. Donec pretium ante non nunc bibendum, ut lacinia augue egestas. Vivamus eleifend tellus a lectus tempor, eu euismod mauris egestas.',
        'tags' => ['MongoDB', 'Express', 'React', 'NodeJS', 'Mongoose', 'Styled components', 'SASS', 'Netlify', 'Heroku', 'Photoshop'],
        'links' => [
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View Front-end code'],
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View API code']
        ],
        'icon' => 'fab fa-js-square'
    ],
    [
        'type' => 'Corporative web',
        'title' => 'Donec pretium ante non nunc',
        'description' => 'Cras dictum eros eget ex dignissim, vel scelerisque lectus dignissim. Maecenas pretium eros dolor, pellentesque consequat nisi tempor ut. In in nibh vel erat efficitur ornare. Praesent augue dui, semper sit amet cursus a, tristique vitae lacus. Suspendisse finibus justo nec dolor congue vulputate.',
        'tags' => ['JavaScript', 'NextJS', 'CSS Modules', 'Photoshop'],
        'links' => [
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View code']
        ],
        'icon' => 'fab fa-js-square'
    ],
    [
        'type' => 'NodeJS',
        'title' => 'Nam nec pellentesque tellus',
        'description' => ' Praesent sit amet hendrerit nisi. Maecenas pellentesque dui bibendum lectus posuere hendrerit. Proin ut mi condimentum quam dictum pharetra quis eget risus. Integer tincidunt augue est, a dignissim ipsum pellentesque sit amet. In hac habitasse platea dictumst. Integer augue elit, fermentum in rutrum sed, consectetur a ligula. Sed vehicula nibh posuere lorem condimentum mattis. Praesent tempus, neque fermentum facilisis maximus, elit velit semper diam, vitae imperdiet metus lorem nec purus.',
        'tags' => ['JavaScript', 'NodeJS'],
        'links' => [
            ['url' => '#', 'icon' => 'fab fa-github', 'title' => 'View code']
        ],
        'icon' => 'fab fa-node-js'
    ]
];

$workExperience = [
    [
        'position' => 'Full Stack Developer',
        'company' => 'Creative mind',
        'companyLink' => '#',
        'companyTitle' => 'Go to Creative mind Web',
        'date' => '2015 - Today',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ligula velit, mollis ut pretium sit amet, mollis et quam. Sed turpis nulla, volutpat eu euismod ac.",
        'tags' => ['React', 'Node', 'MongoDB', 'Express', 'Next', 'HTML', 'SASS'],
        'size' => 'col-lg-6'
    ],
    [
        'position' => 'Web Developer',
        'company' => 'Mandrake studio',
        'companyLink' => 'Mandrake studio',
        'companyTitle' => 'Go to Mandrake studio web',
        'date' => '2021',
        'description' => "Cras dictum eros eget ex dignissim, vel scelerisque lectus dignissim. Maecenas pretium eros dolor, pellentesque consequat nisi tempor ut.",
        'tags' => ['HTML', 'CSS', 'JavaScript', 'Wordpress', 'Photoshop', 'Figma'],
        'size' => 'col-lg-6'
    ],
    [
        'position' => 'Web Designer',
        'company' => 'Fusion',
        'companyLink' => '#',
        'companyTitle' => 'Go to Fusion Web',
        'date' => '2017-2021',
        'description' => "Nam ut lectus eget dui placerat tempor. Nam nec pellentesque tellus. Praesent sit amet hendrerit nisi. Maecenas pellentesque dui bibendum lectus posuere hendrerit.",
        'projects' => [
            ['name' => 'APL', 'link' => '#'],
            ['name' => 'Suitver', 'link' => '#'],
            ['name' => 'BW planes', 'link' => '#'],
            ['name' => 'PS', 'link' => '#']
        ],
        'tags' => ['HTML', 'CSS', 'Wordpress', 'Joomla', 'cPanel', 'Adobe CC', 'GIMP'],
        'size' => 'col-lg-12'
    ]
];

$education = [
    [
        'position' => 'Full Stack Developer',
        'institution' => 'IT school',
        'institutionLink' => '',
        'institutionTitle' => 'Go to web',
        'date' => '2010-2015',
        'description' => "Proin ut mi condimentum quam dictum pharetra quis eget risus. Integer tincidunt augue est, a dignissim ipsum pellentesque sit amet. In hac habitasse platea dictumst. Integer augue elit, fermentum in rutrum sed, consectetur a ligula. Sed vehicula nibh posuere lorem condimentum mattis. Praesent tempus, neque fermentum facilisis maximus, elit velit semper diam, vitae imperdiet metus lorem nec purus.",
        'tags' => ['Javascript', 'Mongo DB', 'Express', 'React', 'Node', 'SQL', 'Git', 'UX/UI', 'Figma', 'Angular & TypeScript (Currently)'],
        'size' => 'col-lg-8'
    ],
    [
        'position' => 'Web Designer',
        'institution' => 'FUSTA school',
        'institutionLink' => '#',
        'institutionTitle' => 'Go to FUSTA web',
        'date' => '2018',
        'description' => "Praesent non dignissim augue. Curabitur vitae felis sem. Pellentesque lobortis pretium nisi, quis egestas arcu commodo id. Praesent lorem lacus, aliquet at tincidunt eget, semper id turpis.",
        'tags' => ['HTML', 'CSS', 'UI', 'SASS', 'SEO', 'Bootstrap', 'Photoshop'],
        'size' => 'col-lg-4'
    ]
];

$certifications = [
    [
        'courseName' => 'SEO and positioning in Google',
        'institution' => 'Aula',
        'institutionLink' => '#',
        'institutionTitle' => 'Go to Aula web',
        'date' => '2017',
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ligula velit, mollis ut pretium sit amet, mollis et quam. Sed turpis nulla, volutpat eu euismod ac, pharetra quis urna.",
        'size' => 'col-lg-6'
    ],
    [
        'courseName' => 'Adobe Photoshop',
        'institution' => 'MIKI school',
        'institutionLink' => '#',
        'institutionTitle' => 'Go to ;IKI web',
        'date' => '2014',
        'description' => "Maecenas pretium eros dolor, pellentesque consequat nisi tempor ut. In in nibh vel erat efficitur ornare.",
        'size' => 'col-lg-6'
    ],
];
