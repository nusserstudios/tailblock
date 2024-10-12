import('preline');

// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

// Submenu toggle
window.addEventListener('load', function () {
      // Hide all submenus initially
      let allSubmenus = document.querySelectorAll('#primary-menu ul.sub-menu');
      allSubmenus.forEach(submenu => {
          submenu.classList.add('hidden');
      });
  
      // Toggle submenu visibility when its parent menu item is clicked
      let menuItemsWithSubmenu = document.querySelectorAll('#primary-menu li:has(ul.sub-menu) > a');
      menuItemsWithSubmenu.forEach(menuItem => {
          menuItem.addEventListener('click', function (e) {
              e.preventDefault();
  
              // Optional: Hide other open submenus
              allSubmenus.forEach(submenu => {
                  if (submenu !== menuItem.nextElementSibling) {
                      submenu.classList.add('hidden');
                  }
              });
  
              let submenu = menuItem.nextElementSibling;
              submenu.classList.toggle('hidden');
          });
      });
  });
  

const HSThemeAppearance = {
      init() {
            const defaultTheme = 'default'
            let theme = localStorage.getItem('hs_theme') || defaultTheme

            if (document.querySelector('html').classList.contains('dark')) return
            this.setAppearance(theme)
      },
      _resetStylesOnLoad() {
            const $resetStyles = document.createElement('style')
            $resetStyles.innerText = `*{transition: unset !important;}`
            $resetStyles.setAttribute('data-hs-appearance-onload-styles', '')
            document.head.appendChild($resetStyles)
            return $resetStyles
      },
      setAppearance(theme, saveInStore = true, dispatchEvent = true) {
            const $resetStylesEl = this._resetStylesOnLoad()

            if (saveInStore) {
                  localStorage.setItem('hs_theme', theme)
            }

            if (theme === 'auto') {
                  theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default'
            }

            document.querySelector('html').classList.remove('dark')
            document.querySelector('html').classList.remove('default')
            document.querySelector('html').classList.remove('auto')

            document.querySelector('html').classList.add(this.getOriginalAppearance())

            setTimeout(() => {
                  $resetStylesEl.remove()
            })

            if (dispatchEvent) {
                  window.dispatchEvent(new CustomEvent('on-hs-appearance-change', { detail: theme }))
            }
      },
      getAppearance() {
            let theme = this.getOriginalAppearance()
            if (theme === 'auto') {
                  theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default'
            }
            return theme
      },
      getOriginalAppearance() {
            const defaultTheme = 'default'
            return localStorage.getItem('hs_theme') || defaultTheme
      }
}
HSThemeAppearance.init()

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
      if (HSThemeAppearance.getOriginalAppearance() === 'auto') {
            HSThemeAppearance.setAppearance('auto', false)
      }
})

window.addEventListener('load', () => {
      const $clickableThemes = document.querySelectorAll('[data-hs-theme-click-value]')
      const $switchableThemes = document.querySelectorAll('[data-hs-theme-switch]')

      $clickableThemes.forEach($item => {
            $item.addEventListener('click', () => HSThemeAppearance.setAppearance($item.getAttribute('data-hs-theme-click-value'), true, $item))
      })

      $switchableThemes.forEach($item => {
            $item.addEventListener('change', (e) => {
                  HSThemeAppearance.setAppearance(e.target.checked ? 'dark' : 'default')
            })

            $item.checked = HSThemeAppearance.getAppearance() === 'dark'
      })

      window.addEventListener('on-hs-appearance-change', e => {
            $switchableThemes.forEach($item => {
                  $item.checked = e.detail === 'dark'
            })
      })
})

  