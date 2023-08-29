<?php

/*
|--------------------------------------------------------------------------
| Disclaimer
|--------------------------------------------------------------------------
|
| Some of the dummy data for this project were generated using ChatGPT, an AI developed by OpenAI.
| Some of the images associated with this project were created using Midjourney. 
| Please note that these are used for demonstration and testing purposes only.
|
*/

$data = array(
    "1" => array(
        "personal_info" => array(
            "name" => "Will Alger",
            "job_title" => "Full Stack Developer",
            "email" => "algerw@icloud.com",
            "phone_number" => "502-758-4615",
            "summary" => "Adaptable CS undergraduate graduating in December 2023 with full-stack experience seeking full-time opportunity. Committed to continuous learning and growth in a dynamic and problem-solving environment.",
            "img" => "assets/images/profile.jpg"
        ),
        "links" => array(
            "linked_in" => "linkedin.com/in/williamalger/",
            "github" => "github.com/will-alger"
        ),
        "education" => array(
            array(
                "university" => "Northern Kentucky University",
                "university_timeline" => "2020 - 2023",
                "degree" => "BS in Computer Science"
            ),
            // ... more degrees
        ),
        "skills" => array(
            "main" => array(
                "JavaScript" => "75%",
                "Node.js" => "50%",
                "Java" => "75%",
                "C++" => "75%",
                "Python" => "80%",
                "HTML/CSS" => "80%",
                "jQuery" => "95%",
                "SQL" => "60%",
            ),
            "other" => array("Docker", "Git", "Jira", "Azure", "Postman"),
        ),
        "awards" => array(
            array(
                "title" => "Governors School for Entrepreneurs Scholarship",
                "desc" => "Tuition award for completing GSE summer workshop program"
            ),
            array(
                "title" => "Nightscout Foundation Scholarship",
                "desc" => "Academic award towards students in STEM with diabetes"
            )
            // ... more awards
        ),
        "languages" => array(
            "English", "Spanish (some)"
        ),
        "interests" => array(
            "Running", "Cycling", "Lifting weights", "Cooking"
        ),
        "projects" => array(
            array(
                "title" => "Search Engine for Full-Stack Wiki Application",
                "desc" => "
					- Implemented an inverted-index based search engine for a full-stack wiki app utilizing Python, Flask, 
					and SQLite with real-time indexing to ensure up to date search results.",
                "img" => "assets\images\search.jpg",
                "link" => "",
            ),
            array(
                "title" => "Linear Feedback Shift Register: Visual Tool ",
                "desc" => "
					- Developed a dynamic LFSR visualizer on GitHub Pages using JavaScript, jQuery, Bootstrap, HTML & CSS
					- Empowers cryptology students to deepen understanding of digital encryption.
					- Visualizes a core concept in action for better learning experience.
				",
                "img" => "assets\images\LFSR.png",
                "link" => "https://github.com/Will-Alger/LFSR",
            )
            // ... more projects
        ),
        "resume_items" => array(
            array(
                'position' => 'Software Engineer (intern)',
                'company' => 'Kroger Technology',
                'time' => 'May 2023 - Present',
                'desc' => 'Developing and maintaining Node.js applications as part of an authentication and authorization team.',
                'achievements' => array(),
                'technologies' => array(
                    'JavaScript', 'Node.js', 'jQuery', 'HTML/SASS', 'Azure AD B2C'
                ),
            ),
            array(
                'position' => 'Undergraduate Teaching Assistant',
                'company' => 'Northern Kentucky University',
                'time' => 'Aug 2022 -  Dec 2022',
                'desc' => 'Teaching assistant for CSC 425 Advanced Programming Methods class',
                'achievements' => array(
                    'Supported 30+ students in an upper-level computer science course in C++.',
                    'Developed and led interactive class workshops and live coding sessions, breaking down complex programming concepts in C++ into simplified, digestible explanations.',
                ),
                'technologies' => array(
                    'C++'
                ),
            ),
            array(
                'position' => 'Software Engineer (intern)',
                'company' => 'Kroger Technology',
                'time' => 'May 2022 - Aug 2022',
                'desc' => 'Front-End developement of dashboards and associate technology',
                'achievements' => array(
                    'Implemented a gamification leaderboard widget in Typescript, React, and Redux aimed at boosting employee productivity (piloted in multiple Kroger stores).',
                ),
                'technologies' => array(
                    'React/Redux', 'TypeScript',  'React', 'HTML/SASS'
                ),
            )
            // ... more resume items
        )
    ),
    "2" => array(
        "personal_info" => array(
            "name" => "Billy Bob",
            "job_title" => "Senior Software Engineer",
            "email" => "billybob@hillbillycode.com",
            "phone_number" => "+1 800 555 1234",
            "summary" => "Born and raised in the Appalachian mountains, I found my passion for coding while trying to automate my moonshine production. Specialized in PHP, JavaScript, and Python, with a knack for solving complex problems and a love for clean, efficient code. Y'all won't find a more dedicated programmer!",
            "img" => "assets/images/profile2.png"
        ),
        "links" => array(
            "linked_in" => "https://www.linkedin.com/in/billybob",
            "github" => "https://github.com/BillyBobTheCoder"
        ),
        "education" => array(
            array(
                "university" => "Appalachian State University",
                "university_timeline" => "2020 - 2024",
                "degree" => "BS in Computer Science",
            ),
        ),
        "skills" => array(
            "main" => array(
                "JavaScript" => "85%",
                "Tractor Programming" => "95%",
                "Chickens/Roosters Logistics" => "90%",
                "Squirrel++" => "80%",
                "Python Wrangling" => "75%",
                "HTML/CSS (Hay Tossing/Mule Cart Steering)" => "70%",
                "jQuery (not confused with Dairy Queen)" => "65%",
                "SQL (Squirrel Query Language)" => "60%",
            ),
            "other" => array("Moonshine Brewing - 100%", "Fiddle Playing - 90%", "Mud Sports - 85%", "Yodeling - 80%", "Barbecue Grilling - 75%"),
        ),
        "awards" => array(
            array(
                "title" => "Best Hay Bale Stack Overflow Solution",
                "desc" => "Awarded for an innovative algorithm that optimized hay bale stackage, surprisingly using JavaScript's event loop."
            ),
            array(
                "title" => "Fastest Tractor-Driven Coding Sprint",
                "desc" => "Held the record for most lines of C++ code written while driving a tractor in an open field."
            )
        ),
        "languages" => array(
            "English",
        ),
        "interests" => array(
            "Squirrel Hunting", "Mud Racing", "Barefoot Coding", "Whittling Keyboards"
        ),
        "projects" => array(
            array(
                "title" => "Hillbilly E-Commerce",
                "desc" => "A revolutionary e-commerce platform that caters specifically to the hillbilly market. Built entirely with twigs and HTML.",
                "img" => "assets\images\hillbilly_ecommerce.png",
                "link" => "https://hillbilly-ecommerce.com",
            ),
            array(
                "title" => "Squirrelly Social Media",
                "desc" => "A social media network designed for squirrels and their adoring fans. It's nuts!",
                "img" => "assets\images\squirrelly_social.png",
                "link" => "https://squirrelly-social.com",
            )
        ),
        "resume_items" => array(
            array(
                'position' => 'Lead Troubleshooting Extraordinaire',
                'company' => 'HillBilly\'s Software Shack',
                'time' => '2015 - Present',
                'desc' => 'Responsible for keeping the peace between humans and machines.',
                'achievements' => array(
                    'Pioneered the use of duck tape in software repair.',
                    'Turned coffee into code on a daily basis.',
                    'Managed to keep all my hair despite numerous coding frustrations.'
                ),
                'technologies' => array(
                    'Java', 'PHP', 'MySql', 'Node.js', 'Python'
                ),
            ),
            array(
                'position' => 'Junior Code Wrangler',
                'company' => 'Bobby Joe\'s Programming Palace',
                'time' => '2013 - 2015',
                'desc' => 'Wrestled bugs and wrangled code into submission.',
                'achievements' => array(
                    'Won the annual "Fastest Coder in the South" competition.',
                    'Never once spilled BBQ sauce on a keyboard (a noteworthy achievement in these parts).'
                ),
                'technologies' => array(
                    'Python'
                ),
            ),
            array(
                'position' => 'Intern',
                'company' => 'Cousin Jim\'s Javascript Jamboree',
                'time' => '2012 - 2013',
                'desc' => 'Learned the ropes and fetched a lot of coffee.',
                'achievements' => array(
                    'Successfully revived a dead computer with nothing but a can of soda and sheer determination.',
                ),
                'technologies' => array(
                    'HTML',  'CSS', 'JavaScript', 'jQuery'
                ),
            )
        )
    ),
    "3" => array(
        "personal_info" => array(
            "name" => "Ogg",
            "job_title" => "Caveman Software Engineer",
            "email" => "ogg@cave.io",
            "phone_number" => "+1234567890",
            "summary" => "Innovative Caveman Software Engineer with over 100,000 years of experience in software development. Specializes in rock-based programming and fire-driven technologies.",
            "img" => "assets/images/profile3.png"
        ),
        "links" => array(
            "linked_in" => "linkedin.com/in/ogg",
            "github" => "github.com/ogg"
        ),
        "education" => array(
            array(
                "university" => "Stonehenge University",
                "university_timeline" => "99,990 BC - 99,980 BC",
                "degree" => "Bachelor of Rock Science",
            ),
            array(
                "university" => "Pangea Institute of Technology",
                "university_timeline" => "99,979 BC - 99,975 BC",
                "degree" => "Ph.D. in Flintknapping Computer Science",
            ),
        ),
        "skills" => array(
            "main" => array(
                "JavaScript" => "100%",
                "Node.js" => "95%",
                "Java" => "85%",
                "C++" => "90%",
                "Python" => "95%",
                "HTML/CSS" => "100%",
                "jQuery" => "80%",
                "SQL" => "90%"
            ),
            "other" => array("Firebug", "Webpack", "MongoDB", "AWS", "Docker"),
        ),
        "awards" => array(
            array(
                "title" => "Best Rock App of 99,980 BC",
                "desc" => "Developed a rock app that dramatically improved efficiency in hunting"
            ),
            array(
                "title" => "Most Innovative Use of Fire",
                "desc" => "Optimized the use of fire in our everyday tasks"
            )
        ),
        "languages" => array(
            "Caveman speak", "English"
        ),
        "interests" => array(
            "Rock collection", "Fire making", "Cave painting", "Hunting"
        ),
        "projects" => array(
            array(
                "title" => "RockFolio",
                "desc" => "A portfolio tracker for all your rock investments",
                "img" => "assets/images/rockfolio.png",
                "link" => "cave.io/rockfolio",
            ),
            array(
                "title" => "FireHub",
                "desc" => "A social network connecting all fire enthusiasts",
                "img" => "assets/images/firehub.png",
                "link" => "cave.io/firehub",
            )
        ),
        "resume_items" => array(
            array(
                'position' => 'Senior Rock Developer',
                'company' => 'Cave Innovations',
                'time' => '99,995 BC - Present',
                'desc' => 'Develop innovative rock solutions for modern cave problems',
                'achievements' => array('Spearheaded a project to optimize rock usage', 'Improved rock-tool conversion rate by 30%'),
                'technologies' => array(
                    'JavaScript', 'Python', 'Node.js', 'Java', 'C++'
                ),
            ),
            array(
                'position' => 'Junior Fire Engineer',
                'company' => 'FireTech',
                'time' => '99,998 BC - 99,995 BC',
                'desc' => 'Maintained and optimized fire technology',
                'achievements' => array(
                    'Developed a new way to start fires that decreased fire-starting time by 50%',
                    'Invented a method to keep fires burning longer with less fuel',
                    'Awarded Most Innovative Use of Fire in 99,996 BC'
                ),
                'technologies' => array(
                    'FireScript'
                ),
            ),
            array(
                'position' => 'Intern',
                'company' => 'Stone Tools Corporation',
                'time' => '99,999 BC - 99,998 BC',
                'desc' => 'Assisted in production and optimization of stone tools',
                'achievements' => array(
                    'Recommended improvements in tool design that increased efficiency by 20%',
                ),
                'technologies' => array(
                    'RockML',  'Chisel.js', 'Sledgehammer++', 'PebbleDB'
                ),
            )
        )
    ),
    // ... other people
);

/* 
    TEMPLATE for person:

        "1" => array(
            "personal_info" => array(
                "name" => "",
                "job_title" => "",
                "email" => "",
                "phone_number" => "",
                "summary" => "",
                "img" => ""
            ),
            "links" => array(
                "linked_in" => "",
                "github" => ""
            ),
            "education" => array(
                array(
                    "university" => "",
                    "university_timeline" => "",
                    "degree" => ""
                )
                // ... more degrees
            ),
            "skills" => array(
                "main" => array(
                    "JavaScript" => "",
                    "Node.js" => "",
                    ...
                    
                ),
                "other" => array(),
            ),
            "awards" => array(
                array(
                    "title" => "",
                    "desc" => ""
                )
            ),
            "languages" => array(),
            "interests" => array(),
            "projects" => array(
                array(
                    "title" => "",
                    "desc" => "",
                    "img" => "",
                    "link" => "",
                )
            ),
            "resume_items" => array(
                array(
                    'position' => '',
                    'company' => '',
                    'time' => '',
                    'desc' => '',
                    'achievements' => array(),
                    'technologies' => array(),
                )
            )
        )








*/