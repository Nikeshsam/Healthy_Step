/*
  Consider using these polyfills to broaden browser support:
    — https://www.npmjs.com/package/classlist-polyfill
    — https://www.npmjs.com/package/nodelist-foreach-polyfill
*/

$(function () {
  buildMoreMenu();

  function buildMoreMenu() {
    const containers = document.querySelectorAll('.horizontal-menu-adapting');
    containers.forEach((container) => {
      if (!$(container).hasClass('installed')) {
        container.classList.add('installed');
        const primary = container.querySelector('.-primary');
        const primaryItems = container.querySelectorAll('.-primary > li:not(.-more)');
        container.classList.add('--jsfied');
        
        // Insert "more" button and duplicate the list
        primary.insertAdjacentHTML('beforeend', `
          <li class="-more">
            <button type="button" aria-haspopup="true" aria-expanded="false">
              More <span></span>
            </button>
            <ul class="-secondary">
              ${primary.innerHTML}
            </ul>
          </li>
        `);
        
        const secondary = container.querySelector('.-secondary');
        const secondaryItems = secondary.querySelectorAll('li');
        const allItems = container.querySelectorAll('li');
        const moreLi = primary.querySelector('.-more');
        const moreBtn = moreLi.querySelector('button');
        
        moreBtn.addEventListener('click', (e) => {
          e.preventDefault();
          container.classList.toggle('--show-secondary');
          moreBtn.setAttribute('aria-expanded', container.classList.contains('--show-secondary'));
        });

        // Adapt tabs
        const doAdapt = () => {
          // Reveal all items for the calculation
          allItems.forEach((item) => {
            item.classList.remove('--hidden');
          });

          // Hide items that won't fit in the Primary
          let stopWidth = moreBtn.offsetWidth;
          let hiddenItems = [];
          const primaryWidth = primary.offsetWidth;
          primaryItems.forEach((item, i) => {
            if (primaryWidth >= stopWidth + item.offsetWidth) {
              stopWidth += item.offsetWidth;
            } else {
              item.classList.add('--hidden');
              hiddenItems.push(i);
            }
          });

          // Toggle the visibility of More button and items in Secondary
          if (!hiddenItems.length) {
            moreLi.classList.add('--hidden');
            container.classList.remove('--show-secondary');
            moreBtn.setAttribute('aria-expanded', false);
          } else {
            secondaryItems.forEach((item, i) => {
              if (!hiddenItems.includes(i)) {
                item.classList.add('--hidden');
              }
            });
          }
        };

        doAdapt(); // Adapt immediately on load
        window.addEventListener('resize', doAdapt); // Adapt on window resize

        // Hide Secondary on the outside click
        document.addEventListener('click', (e) => {
          let el = e.target;
          while (el) {
            if (el === secondary || el === moreBtn) {
              return;
            }
            el = el.parentNode;
          }
          container.classList.remove('--show-secondary');
          moreBtn.setAttribute('aria-expanded', false);
        });

        // Manage the active class on .nav-link
        const navLinks = container.querySelectorAll('.nav-link');
        navLinks.forEach(navLink => {
          navLink.addEventListener('click', (e) => {
            e.preventDefault();
            navLinks.forEach(link => link.classList.remove('active'));
            navLink.classList.add('active');
            container.classList.remove('--show-secondary'); // Optionally close the secondary menu
          });
        });
      }
    });
  }
});
