<?php
require_once "db.php";

$name = "ILOIZA JHANE C. CANTOS";
$title = "3rd Year | BS Computer Science";
$location = "Tabangao Dao, Batangas City, Batangas";

$about = "I am a 3rd-year Computer Science student with a strong focus on SQL, database
management, and data analysis. Passionate about continuous learning, I aim to further
develop my skills in data science, analytics, and emerging technologies to solve real-world
challenges through data-driven solutions.";

$education = [
    "Tertiary" => [
        "school" => "Batangas State University – Alangilan Campus (2023 – Present)",
        "degree" => "Bachelor of Science in Computer Science"
    ],
    "Secondary" => [
        "school" => "Pinamukan Integrated School (2023)",
        "degree" => ""
    ],
    "Primary" => [
        "school" => "Dao Elementary School (2017)",
        "degree" => ""
    ]
];

$skills = [
    "Technical Skills" => [
        "Programming:" => " C++, Java (OOP, GUI basics), SQL",
        "Database Management:" => " MySQL fundamentals, SQL Queries",
        "Data Science & Analytics:" => " Beginner AI Concepts",
        "Cybersecurity:" => " Awareness & Basic Security Practices",
        "Productivity Tools:" => " MS Excel"
    ],
    "Soft Skills" => [
        "Creative Writing",
        "Basic Image & Video Editing",
        "Resourcefulness",
        "Time Management",
        "Attention to Detail & Adaptability"
    ]
];

$projects = [
    "BitHub (2023, C++ - Collaborator)" => "Console-based e-commerce system with admin, seller, and buyer roles. Showcases OOP, file handling, and basic marketplace functions.",
    "Nimbus Airways (2024, C++ - Collaborator)" => "Airline reservation system with booking features and error handling using data structures.",
    "Rooted (2024, Java - Sole Developer)" => "Digital logbook for farmers, helping manage crop growth, reminders, and seasonal planting. Supports SDG 2 & 12."
];

$certifications = [
    "Querying Fundamentals with MySQL Essentials (2024)" => "Data Analytics Philippines",
    "Techcellence: Pioneering Innovations (2024)" => "CURSOR",
    "Introduction of Java GUI (2025)" => "Ethel Programming",
    "Amplify Language Learning (2025)" => "EduVerse",
    "Data Science & Analytics (2025)" => "HP LIFE",
    "AI for Beginners (2025)" => "HP LIFE",
    "Introduction to Cybersecurity Awareness (2025)" => "HP LIFE",
    "Introduction to Excel (2025)" => "Virtual Mentors",
    "Data Manipulation in SQL (2025)" => "DataCamp",
    "Introduction to SQL (2025)" => "DataCamp",
    "Intermediate SQL (2025)" => "DataCamp",
    "Joining Data in SQL (2025)" => "DataCamp"
];

$organizations = [
    "ACCESS" => "Member (2023-Present)",
    "JPCS" => "Member (2023-Present)",
    "CICS Bits & Byte" => "Creative Writer (2024-Present)"
];

$contact = [
    "Phone" => "+63 908-359-7001",
    "Email" => "cantosiloizajhane@gmail.com"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section -->
<header id="home">
    <div class="container">
        <div class="header-content">
            <img src="2X2 ID_ILOIZA.png" alt="<?php echo $name; ?>" class="profile-img">
            <div class="header-text">
                <h1><?php echo $name; ?></h1>
                <p><?php echo $title; ?></p>
                <p><?php echo $location; ?></p>
                <div class="contact-info">
                    <div class="contact-item">
                        <span>📱</span>
                        <span><?php echo $contact["Phone"]; ?></span>
                    </div>
                    <div class="contact-item">
                        <span✉️</span>
                        <a href="mailto:<?php echo $contact['Email']; ?>">
                            <?php echo $contact["Email"]; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 🔹 Logout Button -->
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</header>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#certifications">Certifications</a></li>
                <li><a href="#organizations">Organizations</a></li>
            </ul>
        </div>
    </nav>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>Professional Summary</h2>
            </div>
            <div class="about-content">
                <p><?php echo $about; ?></p>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education">
        <div class="container">
            <div class="section-title">
                <h2>Education</h2>
            </div>
            <div class="timeline">
                <?php foreach($education as $level => $detail): ?>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3><?php echo $level; ?> Education</h3>
                            <p><?php echo $detail["school"]; ?></p>
                            <?php if (!empty($detail["degree"])): ?>
                                <p class="degree"><em><?php echo $detail["degree"]; ?></em></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
            </div>
            <div class="skills-container">
                <?php foreach($skills as $type => $list): ?>
                    <div class="skill-category">
                        <h3><?php echo $type; ?></h3>
                        <ul class="skill-list">
                            <?php foreach($list as $label => $desc): ?>
                                <?php if(is_string($label)): ?>
                                    <li><strong><?php echo $label; ?></strong><?php echo $desc; ?></li>
                                <?php else: ?>
                                    <li><?php echo $desc; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Projects</h2>
            </div>
            <div class="projects-grid">
                <?php foreach($projects as $project => $desc): ?>
                    <div class="project-card">
                        <div class="project-info">
                            <h3><?php echo $project; ?></h3>
                            <p><?php echo $desc; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications">
        <div class="container">
            <div class="section-title">
                <h2>Certifications & Training</h2>
            </div>
            <div class="certifications-list">
                <?php foreach($certifications as $cert => $org): ?>
                    <div class="cert-item">
                        <span class="cert-name"><?php echo $cert; ?></span>
                        <span class="cert-org"><?php echo $org; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Organizations Section -->
    <section id="organizations">
        <div class="container">
            <div class="section-title">
                <h2>Organizations</h2>
            </div>
            <div class="orgs-list">
                <?php foreach($organizations as $org => $role): ?>
                    <div class="org-item">
                        <span><?php echo $org; ?></span>
                        <span><?php echo $role; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 <?php echo $name; ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>