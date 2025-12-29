// DOM Elements
const darkModeToggle = document.getElementById('darkModeToggle');
const navLinks = document.querySelectorAll('.nav-link');
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

// Dark Mode Toggle
darkModeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const icon = darkModeToggle.querySelector('i');
    if (document.body.classList.contains('dark-mode')) {
        icon.className = 'fas fa-sun';
        darkModeToggle.title = 'Toggle Light Mode';
    } else {
        icon.className = 'fas fa-moon';
        darkModeToggle.title = 'Toggle Dark Mode';
    }
    
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
});

// Initialize Dark Mode
if (localStorage.getItem('darkMode') === 'true') {
    document.body.classList.add('dark-mode');
    darkModeToggle.querySelector('i').className = 'fas fa-sun';
    darkModeToggle.title = 'Toggle Light Mode';
}

// Mobile Navigation
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        
        // Update active link
        navLinks.forEach(navLink => navLink.classList.remove('active'));
        link.classList.add('active');
    });
});

// Navigation Highlight on Scroll
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const scrollPos = window.scrollY + 100;
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const sectionId = section.getAttribute('id');
        
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
            current = sectionId;
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Video Player Functionality
document.querySelectorAll('.video-wrapper').forEach(wrapper => {
    wrapper.addEventListener('click', function() {
        const videoUrl = this.dataset.video;
        const iframe = document.createElement('iframe');
        
        iframe.src = `${videoUrl}?autoplay=1&rel=0`;
        iframe.width = '100%';
        iframe.height = '100%';
        iframe.frameBorder = '0';
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        
        this.innerHTML = '';
        this.appendChild(iframe);
    });
});

// Chat Bot Functions
function toggleChatbot() {
    const chatbot = document.getElementById('chatbotWindow');
    chatbot.classList.toggle('active');
}

function quickAnswer(type) {
    const chatBody = document.querySelector('.chatbot-body');
    
    const answers = {
        'features': 'Our platform features: Admin Dashboard, Issue Reporting, Volunteer Management, and Secure Login with OTP verification.',
        'download': 'Download options: Android APK from our website or try the live demo at https://change.flutterflow.app',
        'team': 'Our team: Salman Mohamed (202102525), Abdulla Khamis (202102256), Hussain Sahwan (202102620).',
        'security': 'Security features: Firebase Authentication, SQUARE methodology, STRIDE threat modeling, OTP verification.'
    };
    
    const message = document.createElement('div');
    message.className = 'chat-message bot';
    message.innerHTML = `<p>${answers[type]}</p>`;
    
    chatBody.appendChild(message);
    chatBody.scrollTop = chatBody.scrollHeight;
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        if (this.getAttribute('href').startsWith('#') && this.getAttribute('href').length > 1) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Initialize floating shapes animation
function initFloatingShapes() {
    const shapes = document.querySelectorAll('.floating-shape');
    shapes.forEach((shape, index) => {
        shape.style.animationDelay = `${index * 2}s`;
    });
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    // Set initial active nav link
    if (window.location.hash) {
        const hash = window.location.hash.substring(1);
        document.querySelector(`a[href="#${hash}"]`)?.classList.add('active');
    } else {
        document.querySelector('a[href="#home"]')?.classList.add('active');
    }
    
    // Initialize floating shapes
    initFloatingShapes();
    
    // Add scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.intro-card, .screen-card, .tech-card, .team-card, .download-card, .document-card, .pitch-card').forEach(el => {
        observer.observe(el);
    });
});