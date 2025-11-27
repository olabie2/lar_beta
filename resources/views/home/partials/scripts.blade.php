<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));

        // Create floating particles
        const container = document.querySelector('.relative.bg-gradient-to-br');
        if (container) {
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'fixed w-1 h-1 bg-indigo-400/20 rounded-full pointer-events-none';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = '100vh';
                particle.style.zIndex = '0';
                
                const duration = 15 + Math.random() * 15;
                const delay = Math.random() * 10;
                
                particle.animate([
                    { 
                        transform: 'translateY(0) translateX(0) rotate(0deg)', 
                        opacity: 0 
                    },
                    { 
                        transform: `translateY(-100vh) translateX(${Math.random() * 200 - 100}px) rotate(360deg)`, 
                        opacity: 1,
                        offset: 0.1
                    },
                    { 
                        transform: `translateY(-200vh) translateX(${Math.random() * 200 - 100}px) rotate(720deg)`, 
                        opacity: 0 
                    }
                ], {
                    duration: duration * 1000,
                    delay: delay * 1000,
                    iterations: Infinity,
                    easing: 'linear'
                });
                
                container.appendChild(particle);
            }
        }
    });
</script>
