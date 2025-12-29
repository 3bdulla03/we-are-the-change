<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Are The Change - Civic Engagement Platform</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap">
</head>
<body>
    <!-- Vertical Control Panel - Right Side -->
    <div class="vertical-controls">
        <button id="darkModeToggle" class="control-btn" title="Toggle Dark Mode">
            <i class="fas fa-moon"></i>
        </button>
        <button class="control-btn" onclick="toggleChatbot()" title="Chat Assistant">
            <i class="fas fa-robot"></i>
        </button>
        <a href="#download" class="control-btn highlight" title="Go to App Section">
            <i class="fas fa-mobile-alt"></i>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">
                <img src="images/logo.jpeg" alt="We Are The Change Logo">
                <span>We Are The Change</span>
            </a>
            
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#introduction" class="nav-link">Introduction</a></li>
                <li><a href="#platform" class="nav-link">Platform</a></li>
                <li><a href="#elevator" class="nav-link">Demo</a></li>
                <li><a href="#technology" class="nav-link">Technology</a></li>
                <li><a href="#team" class="nav-link">Team</a></li>
                <li><a href="#download" class="nav-link">Download</a></li>
                <li><a href="#documents" class="nav-link">Documents</a></li>
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title animate-fade-up">We Are The Change</h1>
            <h2 class="hero-subtitle animate-fade-up-delay">A Secure Civic Engagement Platform for Community Reporting and Volunteering</h2>
            <p class="hero-description animate-fade-up-delay-2">
                Empowering Bahraini residents to report local issues and participate in volunteer activities through a secure, modern platform.
            </p>
        </div>
        <div class="hero-animation">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section id="introduction" class="section">
        <div class="container">
            <h2 class="section-title">Project Introduction</h2>
            <div class="intro-grid">
                <div class="intro-card">
                    <div class="intro-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>"We Are The Change" is a secure mobile civic engagement platform that enables Bahraini residents to report local community issues and participate in volunteer activities.</p>
                </div>
                
                <div class="intro-card">
                    <div class="intro-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Abstract</h3>
                    <p>This project presents the design and development of "We Are The Change," a civic engagement platform that enables citizens to report local issues and participate in community volunteering through a mobile application.</p>
                </div>
                
                <div class="intro-card">
                    <div class="intro-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Problem Statement</h3>
                    <div class="problem-statement">
                        <p>The current community reporting system faces several challenges:</p>
                        <div class="problem-points">
                            <div class="problem-item">
                                <i class="fas fa-times"></i>
                                <span>Fragmented reporting via email/WhatsApp/Tawasul</span>
                            </div>
                            <div class="problem-item">
                                <i class="fas fa-times"></i>
                                <span>No structured volunteer coordination</span>
                            </div>
                            <div class="problem-item">
                                <i class="fas fa-times"></i>
                                <span>Security risks in data handling</span>
                            </div>
                            <div class="problem-item">
                                <i class="fas fa-times"></i>
                                <span>Limited municipal follow-up</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Screens Section -->
    <section id="platform" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Platform Screens</h2>
            <p class="section-subtitle">Interactive interface showcasing the mobile application features</p>
            
            <div class="screens-grid">
                <div class="screen-card">
                    <div class="screen-frame">
                        <img src="images/admin-dashboard.png" alt="Admin Dashboard Screen">
                    </div>
                    <h3>Admin Dashboard</h3>
                    <p>Comprehensive management system</p>
                </div>
                
                <div class="screen-card">
                    <div class="screen-frame">
                        <img src="images/report-case.png" alt="Report Case Screen">
                    </div>
                    <h3>Issue Reporting</h3>
                    <p>Report community issues</p>
                </div>
                
                <div class="screen-card">
                    <div class="screen-frame">
                        <img src="images/volunteer.png" alt="Volunteer Management Screen">
                    </div>
                    <h3>Volunteer Management</h3>
                    <p>Browse volunteer opportunities</p>
                </div>
                
                <div class="screen-card">
                    <div class="screen-frame">
                        <img src="images/login.png" alt="Secure Login Screen">
                    </div>
                    <h3>Secure Login</h3>
                    <p>Authentication with OTP</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Elevator Pitch Section -->
    <section id="elevator" class="section">
        <div class="container">
            <h2 class="section-title">Elevator Pitch</h2>
            <p class="section-subtitle">Watch our platform introduction in both languages</p>
            
            <div class="pitch-grid">
                <div class="pitch-card">
                    <div class="pitch-header">
                        <i class="fas fa-language"></i>
                        <h3>English Version</h3>
                    </div>
                    <div class="video-container">
                        <div class="video-wrapper" data-video="https://youtube.com/shorts/ZRzlGaPvA2U">
                            <img src="https://img.youtube.com/shorts/ZRzlGaPvA2U.jpg" alt="English Demo">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <a href="https://youtube.com/shorts/ZRzlGaPvA2U" target="_blank" class="pitch-link">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
                
                <div class="pitch-card">
                    <div class="pitch-header">
                        <i class="fas fa-language"></i>
                        <h3>Arabic Version</h3>
                    </div>
                    <div class="video-container">
                        <div class="video-wrapper" data-video="https://youtube.com/shorts/ZaGMd8U2KFY">
                            <img src="https://img.youtube.com/shorts/ZaGMd8U2KFY.jpg" alt="Arabic Demo">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <a href="https://youtube.com/shorts/ZaGMd8U2KFY" target="_blank" class="pitch-link">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section id="technology" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Technology Stack</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Frontend</h3>
                    <p>FlutterFlow</p>
                    <span class="tech-tag">Cross-platform</span>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend</h3>
                    <p>Firebase</p>
                    <span class="tech-tag">Real-time DB</span>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Security</h3>
                    <p>SQUARE & STRIDE</p>
                    <span class="tech-tag">Methodology</span>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3>Authentication</h3>
                    <p>OTP Verification</p>
                    <span class="tech-tag">Multi-factor</span>
                </div>
            </div>
            
            <!-- Results Section -->
            <div class="results-section">
                <div class="results-grid">
                    <div class="results-card">
                        <h3><i class="fas fa-check-circle"></i> Achieved Results</h3>
                        <ul class="results-list">
                            <li><i class="fas fa-check"></i> Working cross-platform prototype</li>
                            <li><i class="fas fa-check"></i> Secure authentication flow</li>
                            <li><i class="fas fa-check"></i> End-to-end workflows</li>
                            <li><i class="fas fa-check"></i> Threat mitigation</li>
                        </ul>
                    </div>
                    
                    <div class="results-card future">
                        <h3><i class="fas fa-road"></i> Future Work</h3>
                        <ul class="future-list">
                            <li><i class="fas fa-project-diagram"></i> Municipal API integration</li>
                            <li><i class="fas fa-brain"></i> AI-powered triage</li>
                            <li><i class="fas fa-bell"></i> Real-time notifications</li>
                            <li><i class="fas fa-chart-bar"></i> Analytics dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="section">
        <div class="container">
            <h2 class="section-title">Download & Live Demo</h2>
            <div class="download-grid">
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fab fa-android"></i>
                    </div>
                    <h3>Android APK</h3>
                    <p>Download the app to your Android device</p>
                    <a href="app/WeAreTheChange.APK" class="btn-download" download>
                        <i class="fas fa-download"></i> Download APK
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                    <h3>Live Demo</h3>
                    <p>Try the platform in your browser</p>
                    <a href="https://change.flutterflow.app" target="_blank" class="btn-demo">
                        <i class="fas fa-rocket"></i> Launch Live Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section id="documents" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Project Documents</h2>
            <p class="section-subtitle">Access our complete project documentation</p>
            
            <div class="documents-grid">
                <div class="document-card">
                    <div class="doc-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3>Report</h3>
                    <p>Complete project documentation</p>
                    <a href="documents.php?doc=report" class="btn-view">
                        <i class="fas fa-eye"></i> View
                    </a>
                </div>
                
                <div class="document-card">
                    <div class="doc-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3>Poster</h3>
                    <p>Visual summary presentation</p>
                    <a href="documents.php?doc=poster" class="btn-view">
                        <i class="fas fa-eye"></i> View
                    </a>
                </div>
                
                <div class="document-card">
                    <div class="doc-icon">
                        <i class="fas fa-file-powerpoint"></i>
                    </div>
                    <h3>Presentation</h3>
                    <p>Slide deck presentation</p>
                    <a href="documents.php?doc=powerpoint" class="btn-view">
                        <i class="fas fa-eye"></i> View
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section">
        <div class="container">
            <h2 class="section-title">Our Team</h2>
            <div class="team-grid">
                <!-- Salman Mohamed -->
                <div class="team-card">
                    <div class="team-img">
                        <img src="images/salman.jpg" alt="Salman Mohamed">
                    </div>
                    <h3>Salman Mohamed</h3>
                    <p class="team-id">202102525</p>
                    <p class="team-email">202102525@stu.uob.edu.bh</p>
                    
                    <div class="team-cv">
                        <h4>CV</h4>
                        <div class="cv-qr">
                            <img src="images/SalmanQR.jpg" alt="Salman CV QR Code">
                        </div>
                    </div>
                    
                    <div class="team-links">
                        <a href="https://www.linkedin.com/in/salman-altal-896973334/" target="_blank" class="linkedin-btn">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>
                
                <!-- Abdulla Khamis -->
                <div class="team-card">
                    <div class="team-img">
                        <img src="images/abdulla.jpg" alt="Abdulla Khamis">
                    </div>
                    <h3>Abdulla Khamis</h3>
                    <p class="team-id">202102256</p>
                    <p class="team-email">202102256@stu.uob.edu.bh</p>
                    
                    <div class="team-cv">
                        <h4>CV</h4>
                        <div class="cv-qr">
                            <img src="images/AbdullaQR.png" alt="Abdulla CV QR Code">
                        </div>
                    </div>
                    
                    <div class="team-links">
                        <a href="https://www.linkedin.com/in/abdullakhamis/" target="_blank" class="linkedin-btn">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>
                
                <!-- Hussain Sahwan -->
                <div class="team-card">
                    <div class="team-img">
                        <img src="images/hussain.jpg" alt="Hussain Sahwan">
                    </div>
                    <h3>Hussain Sahwan</h3>
                    <p class="team-id">202102620</p>
                    <p class="team-email">202102620@stu.uob.edu.bh</p>
                    
                    <div class="team-cv">
                        <h4>CV</h4>
                        <div class="cv-qr">
                            <img src="images/HussainQR.png" alt="Hussain CV QR Code">
                        </div>
                    </div>
                    
                    <div class="team-links">
                        <a href="https://www.linkedin.com/in/hussain-sahwan-1376592a8/" target="_blank" class="linkedin-btn">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chat Bot Window -->
    <div id="chatbotWindow" class="chatbot-window">
        <div class="chatbot-header">
            <h3><i class="fas fa-robot"></i> Assistant</h3>
            <button class="close-chat" onclick="toggleChatbot()">×</button>
        </div>
        <div class="chatbot-body">
            <div class="chat-message bot">
                <p>Hello! I'm your WeAreTheChange assistant. What would you like to know?</p>
            </div>
            <div class="quick-options">
                <button onclick="quickAnswer('features')">Features</button>
                <button onclick="quickAnswer('download')">Download</button>
                <button onclick="quickAnswer('team')">Team</button>
                <button onclick="quickAnswer('security')">Security</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images/logo.jpeg" alt="Logo">
                    <h3>We Are The Change</h3>
                    <p>A Secure Civic Engagement Platform</p>
                    <div class="footer-email">
                        <a href="mailto:info@wearechange.com">
                            <i class="fas fa-envelope"></i>
                            info@wearechange.com
                        </a>
                    </div>
                </div>
                <div class="footer-info">
                    <p class="project-tag">
                        <i class="fas fa-graduation-cap"></i>
                        Senior Project 2025
                    </p>
                    <p>University of Bahrain</p>
                    
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>
            <p class="copyright">© 2025 We Are The Change. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>