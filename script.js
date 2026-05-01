document.addEventListener('DOMContentLoaded', function() {
    initAnimations();
    initFormHandling();
    initScrollEffects();
    initMobileMenu();
    initCounterAnimations();
    initContactForm();
    initBookingForm();
    initPhoneCall();
});

function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
}

function initBookingForm() {
    const form = document.getElementById('bookingForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        
        if (!validateBookingForm(data)) {
            return;
        }
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="loading"></span> Slanje zahtjeva...';
        submitBtn.disabled = true;
        fetch('send_email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                showMessage('Hvala na zahtjevu! Vaš zahtjev je uspešno poslat. Kontaktirat ćemo vas uskoro.', 'success');
                form.reset();
            } else {
                showMessage('Greška pri slanju zahtjeva: ' + result.message + '. Podaci su sačuvani u backup fajl.', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('Greška pri slanju zahtjeva. Podaci su sačuvani u backup fajl. Kontaktirajte nas telefonom.', 'error');
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });
}

function validateBookingForm(data) {
    const errors = [];
    
    if (!data.name || data.name.trim().length < 2) {
        errors.push('Ime mora imati najmanje 2 karaktera');
    }
    
    if (!data.meters || data.meters < 1) {
        errors.push('Unesite količinu u metrima');
    }
    
    if (!data.phone || data.phone.trim().length < 9) {
        errors.push('Unesite validan broj telefona');
    }
    
    if (!data.date) {
        errors.push('Izaberite datum');
    }
    
    // Check if date is in the past
    const selectedDate = new Date(data.date);
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    
    if (selectedDate < today) {
        errors.push('Datum ne može biti u prošlosti');
    }
    
    if (errors.length > 0) {
        showMessage(errors.join('<br>'), 'error');
        return false;
    }
    
    return true;
}

function sendBookingEmail(data) {
    console.log('Email sending is now handled by PHP backend');
}

function openBookingForm() {
    const form = document.getElementById('bookingForm');
    if (form) {
        form.scrollIntoView({ behavior: 'smooth' });
        form.querySelector('input[name="name"]').focus();
    }
}

function initPhoneCall() {
    document.querySelectorAll('a[href^="tel:"]').forEach(link => {
        link.addEventListener('click', function(e) {
            console.log('Phone call initiated:', this.href);
        });
    });
}

function initFormHandling() {
    const form = document.querySelector('form');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        
        if (!validateForm(data)) {
            return;
        }
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="loading"></span> Slanje...';
        submitBtn.disabled = true;
        setTimeout(() => {
            showMessage('Hvala na poruci! Kontaktiraću vas uskoro.', 'success');
            form.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
}

function validateForm(data) {
    const errors = [];
    
    if (!data.name || data.name.trim().length < 2) {
        errors.push('Ime mora imati najmanje 2 karaktera');
    }
    
    if (!data.email || !isValidEmail(data.email)) {
        errors.push('Unesite validnu email adresu');
    }
    
    if (!data.message || data.message.trim().length < 10) {
        errors.push('Poruka mora imati najmanje 10 karaktera');
    }
    
    if (errors.length > 0) {
        showMessage(errors.join('<br>'), 'error');
        return false;
    }
    
    return true;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showMessage(message, type) {
    const existingMessage = document.querySelector('.message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${type}`;
    messageDiv.innerHTML = `
        <div class="message-content" style="display: flex; align-items: center; gap: 12px;">
            <div class="message-icon" style="font-size: 20px; flex-shrink: 0;">
                ${type === 'success' ? '✅' : type === 'error' ? '❌' : 'ℹ️'}
            </div>
            <div class="message-text" style="flex: 1; line-height: 1.4;">${message}</div>
        </div>
    `;
    
    messageDiv.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 8px;
        color: white;
        font-weight: 500;
        z-index: 10000;
        max-width: 400px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transform: translateX(100%);
        transition: transform 0.3s ease;
        ${type === 'success' ? 'background: linear-gradient(135deg, #28a745, #20c997);' : 
          type === 'error' ? 'background: linear-gradient(135deg, #dc3545, #e74c3c);' : 
          'background: linear-gradient(135deg, #17a2b8, #6f42c1);'}
    `;
    
    document.body.appendChild(messageDiv);
    
    setTimeout(() => {
        messageDiv.style.transform = 'translateX(0)';
    }, 100);
    setTimeout(() => {
        messageDiv.style.transform = 'translateX(100%)';
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 300);
    }, 5000);
}

function initScrollEffects() {
    let ticking = false;
    
    function updateNavbar() {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 100) {
            navbar.classList.add('bg-wood/95', 'backdrop-blur-sm');
        } else {
            navbar.classList.remove('bg-wood/95', 'backdrop-blur-sm');
        }
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
}

function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (!mobileMenuBtn || !mobileMenu) return;
    
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        
        const icon = this.querySelector('i');
        if (mobileMenu.classList.contains('hidden')) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        } else {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    });
    
    mobileMenu.addEventListener('click', function(e) {
        if (e.target.tagName === 'A') {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
}

// Counter animations
function initCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.textContent);
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

// Animate counter
function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
        current += increment;
        element.textContent = Math.floor(current);
        
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        }
    }, 20);
}

// Contact form enhancements
function initContactForm() {
    const inputs = document.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
        // Add focus effects
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('ring-2', 'ring-leaf');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('ring-2', 'ring-leaf');
        });
        
        // Add floating label effect
        input.addEventListener('input', function() {
            if (this.value) {
                this.classList.add('has-value');
            } else {
                this.classList.remove('has-value');
            }
        });
    });
}

// Smooth scrolling for navigation links
document.addEventListener('click', function(e) {
    if (e.target.matches('a[href^="#"]')) {
        e.preventDefault();
        const target = document.querySelector(e.target.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    }
});

// Add service card hover effects
document.querySelectorAll('.card-hover').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

// Add icon animations
document.querySelectorAll('.fas, .fab').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.1)';
    });
    
    icon.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
});

// Add wood-themed animations
document.querySelectorAll('.fa-saw, .fa-tree').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        this.classList.add('icon-bounce');
    });
    
    icon.addEventListener('mouseleave', function() {
        this.classList.remove('icon-bounce');
    });
});

// Add leaf-themed animations
document.querySelectorAll('.fa-leaf, .fa-seedling').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        this.classList.add('icon-leaf');
    });
    
    icon.addEventListener('mouseleave', function() {
        this.classList.remove('icon-leaf');
    });
});

// Price card interactions
document.querySelectorAll('.price-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

// FAQ interactions
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', function() {
        // Add expand/collapse functionality if needed
        this.classList.toggle('expanded');
    });
});

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
initLazyLoading();

// Add keyboard navigation support
document.addEventListener('keydown', function(e) {
    // Escape key closes mobile menu
    if (e.key === 'Escape') {
        const mobileMenu = document.querySelector('.mobile-menu');
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    }
});

// Add touch support for mobile
if ('ontouchstart' in window) {
    document.body.classList.add('touch-device');
}

// Performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Optimize scroll events
const optimizedScrollHandler = debounce(function() {
    // Scroll-based animations can go here
}, 16);

window.addEventListener('scroll', optimizedScrollHandler);

// Add wood texture effects
function addWoodTextures() {
    const woodElements = document.querySelectorAll('.wood-texture');
    woodElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.opacity = '0.3';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.opacity = '0.2';
        });
    });
}

// Initialize wood textures
addWoodTextures();

// Add booking form enhancements
function enhanceBookingForm() {
    const dateInput = document.querySelector('input[name="date"]');
    const timeSelect = document.querySelector('select[name="time"]');
    
    if (dateInput) {
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;
        
        // Update available times based on selected date
        dateInput.addEventListener('change', function() {
            updateAvailableTimes(this.value);
        });
    }
    
    if (timeSelect) {
        // Update available times on page load
        updateAvailableTimes(dateInput ? dateInput.value : today);
    }
}

// Update available times based on date
function updateAvailableTimes(selectedDate) {
    const timeSelect = document.querySelector('select[name="time"]');
    if (!timeSelect) return;
    
    const today = new Date().toISOString().split('T')[0];
    const selected = new Date(selectedDate);
    const isToday = selectedDate === today;
    
    // Clear existing options
    timeSelect.innerHTML = '<option value="">Izaberite vrijeme</option>';
    
    // Define available times
    const times = [
        '08:00', '09:00', '10:00', '11:00', '12:00',
        '13:00', '14:00', '15:00', '16:00', '17:00'
    ];
    
    // Filter times based on current time if today
    const currentHour = new Date().getHours();
    const availableTimes = isToday ? 
        times.filter(time => parseInt(time.split(':')[0]) > currentHour + 1) : 
        times;
    
    // Add available times
    availableTimes.forEach(time => {
        const option = document.createElement('option');
        option.value = time;
        option.textContent = time;
        timeSelect.appendChild(option);
    });
}

// Initialize booking form enhancements
enhanceBookingForm();


} 