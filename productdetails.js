document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const panels = document.querySelectorAll('.tab-panel');
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.querySelector('.main-image img');

    // Tab switching functionality
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active')); // Remove active class from all tabs
            tab.classList.add('active'); // Add active class to clicked tab

            panels.forEach(panel => panel.classList.add('hidden')); // Hide all panels
            const panelId = tab.getAttribute('data-tab'); // Get the tab panel id
            document.getElementById(panelId).classList.remove('hidden'); // Show the corresponding panel
        });
    });

    // Thumbnail switching functionality
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            thumbnails.forEach(thumbnail => thumbnail.classList.remove('selected')); // Remove 'selected' from all thumbnails
            this.classList.add('selected'); // Add 'selected' to clicked thumbnail

            // Change main image to clicked thumbnail's image
            mainImage.src = this.querySelector('img').src;
        });
    });
});
