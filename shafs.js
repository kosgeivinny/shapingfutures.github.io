document.addEventListener('DOMContentLoaded', () => {
    // Gallery Pagination Functionality
    const imagesPerPage = 9; // Number of images per page
    let currentPage = 1;
    const totalImages = 108; // Total number of images in your folder

    function loadImages(page) {
        const galleryGrid = document.getElementById('gallery-grid');
        galleryGrid.innerHTML = ''; // Clear previous images

        const start = (page - 1) * imagesPerPage;
        const end = Math.min(start + imagesPerPage, totalImages);

        for (let i = start; i < end; i++) {
            const img = document.createElement('img');
            img.src = `imagess/${i + 1}.jpg`; // Adjust based on your image naming convention
            img.alt = `Gallery Image ${i + 1}`;

            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.appendChild(img);

            galleryGrid.appendChild(galleryItem);
        }

        updatePagination(page);
    }

    function updatePagination(page) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = ''; // Clear previous pagination buttons

        const totalPages = Math.ceil(totalImages / imagesPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.textContent = i;
            button.disabled = i === page;
            button.addEventListener('click', () => loadImages(i));

            pagination.appendChild(button);
        }
    }

    loadImages(currentPage); // Load initial page

    // Existing Code for Program Content Toggling
    const viewPhotosBtns = document.querySelectorAll('.view-photos-btn');
    const allProgramContents = document.querySelectorAll('.program-content');

    viewPhotosBtns.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);

            // Hide all program contents and toggle the target content
            allProgramContents.forEach(content => content.classList.remove('active'));
            targetContent.classList.toggle('active');
        });
    });

    // Existing Code for Modal Functionality
    const donateBtn = document.querySelector('.don'); // Ensure this matches the button that should open the modal
    const modal = document.getElementById('donation-modal');
    const closeBtn = modal.querySelector('.close');

    // Open the modal when the donate button is clicked
    donateBtn.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default anchor behavior
        modal.style.display = 'block';
    });

    // Close the modal when the close button is clicked
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Close the modal when clicking outside the modal content
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
