document.addEventListener('DOMContentLoaded', () => {
    // Gallery Functionality
    const imagesPerPage = 10;
    let currentPage = 1;
    const totalImages = 108;

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    function loadImages(page) {
        const galleryGrid = document.getElementById('gallery-grid');
        galleryGrid.innerHTML = '';

        const imageIndices = Array.from({ length: totalImages }, (_, index) => index + 1);
        const shuffledIndices = shuffleArray(imageIndices);

        const start = (page - 1) * imagesPerPage;
        const end = Math.min(start + imagesPerPage, totalImages);

        for (let i = start; i < end; i++) {
            const img = document.createElement('img');
            img.src = `imagess/${shuffledIndices[i]}.jpg`; // Ensure the path is correct
            img.alt = `Gallery Image ${shuffledIndices[i]}`;

            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.appendChild(img);
            galleryGrid.appendChild(galleryItem);
        }

        updatePagination(page);
    }

    function updatePagination(page) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

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

    // Modal Functionality
    const donateBtn = document.getElementById('donate-btn'); // Ensure this matches the button that opens the modal
    const modal = document.getElementById('donation-modal');
    
    if (donateBtn && modal) {
        const closeBtn = modal.querySelector('.close');

        donateBtn.addEventListener('click', (event) => {
            event.preventDefault();
            modal.style.display = 'block';
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
});
