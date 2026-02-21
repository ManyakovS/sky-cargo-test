export default function initBurgerMenu() {
    const trigger = document.querySelector('.js-burger-trigger');
    const panel = document.querySelector('.js-burger-panel');
    const backdrop = document.querySelector('.js-burger-backdrop');
    const body = document.body;

    if (!trigger || !panel || !backdrop) return;

    const toggleMenu = () => {
        const isOpen = panel.classList.toggle('is-open');
        trigger.classList.toggle('is-active');
        backdrop.classList.toggle('is-active');
        body.classList.toggle('menu-open');
    };

    const closeMenu = () => {
        panel.classList.remove('is-open');
        trigger.classList.remove('is-active');
        backdrop.classList.remove('is-active');
        body.classList.remove('menu-open');
    };

    trigger.addEventListener('click', toggleMenu);

    backdrop.addEventListener('click', closeMenu);

    const parentItems = panel.querySelectorAll('.menu-item-has-children > a');
    
    parentItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const parent = item.parentElement;
            const subMenu = parent.querySelector('.sub-menu');
            
            parent.classList.toggle('is-expanded');
            
            if (subMenu.style.display === 'flex') {
                subMenu.style.display = 'none';
            } else {
                subMenu.style.display = 'flex';
            }
        });
    });
};