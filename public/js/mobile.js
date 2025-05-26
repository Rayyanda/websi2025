    // Mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  menuBtn.addEventListener('click', () => {
    const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
    menuBtn.setAttribute('aria-expanded', String(!isExpanded));
    menu.classList.toggle('hidden');
  });
  // Mobile dropdown toggle
  document.querySelectorAll('.dropdown-btn').forEach(button => {
  const targetId = button.getAttribute('data-target');
  const menu = document.getElementById(targetId);

  button.addEventListener('click', () => {
    const isExpanded = button.getAttribute('aria-expanded') === 'true';
    button.setAttribute('aria-expanded', String(!isExpanded));
    menu.classList.toggle('hidden');
  });
});
//   const mobileDropdownBtn = document.getElementById('mobileDropdownBtn');
//   const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
//   mobileDropdownBtn.addEventListener('click', () => {
//     const isExpanded = mobileDropdownBtn.getAttribute('aria-expanded') === 'true';
//     mobileDropdownBtn.setAttribute('aria-expanded', String(!isExpanded));
//     mobileDropdownMenu.classList.toggle('hidden');
//   });
