<?php

$styles = $_REQUEST['styles'] ?? ['base-style', 'alternate-style'];
$stylesJson = json_encode($styles);
?>
const STYLES = <?php echo $stylesJson; ?>;
console.debug('styles', STYLES);

class Toggler {
  constructor(styles) {
    this.styles = styles;
    this.currentIndex = 0;
    this.linkElements = [];
    this.init();
  }

  init() {
    for (const style of this.styles) {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = `./${style}.css`;
      link.disabled = true;
      document.head.appendChild(link);
      this.linkElements.push(link);
    }
    if (this.linkElements.length > 0) {
      this.linkElements[0].disabled = false; // Enable the first style by default
      console.log('Initialized with style:', this.styles[0]);
    }
    
    this.drawToggler();
  }

  toggle() {
    if (this.linkElements.length === 0) return;
    this.linkElements[this.currentIndex].disabled = true;
    this.currentIndex = (this.currentIndex + 1) % this.linkElements.length;
    this.linkElements[this.currentIndex].disabled = false;
    console.log('Toggled to style:', this.styles[this.currentIndex]);
  }

  drawToggler() {
    const toggle = document.createElement('button');
    toggle.innerHTML = `
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5"/>
  <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192"/>
</svg>
`;

    toggle.addEventListener('click', () => {
      this.toggle();
    })
    
    toggle.style.position = 'fixed';
    toggle.style.bottom = '10px';
    toggle.style.right = '10px';
    toggle.style.zIndex = '1000';
    toggle.style.backgroundColor = '#fff';
    toggle.style.border = '1px solid #ccc';
    toggle.style.borderRadius = '4px';
    toggle.style.boxShadow = '0 2px 6px rgba(0,0,0,0.2)';
    toggle.style.padding = '5px';
    toggle.style.display = 'flex';
    document.body.appendChild(toggle);
  }
}

toggler = new Toggler(STYLES);
