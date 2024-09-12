document.addEventListener('DOMContentLoaded', () => {

  // Existing code for program content
  const viewPhotosBtns = document.querySelectorAll('.view-photos-btn');
  const allProgramContents = document.querySelectorAll('.program-content');

  // Event listener for view photos buttons
  viewPhotosBtns.forEach(button => {
    button.addEventListener('click', () => {
      const targetId = button.getAttribute('data-target');
      const targetContent = document.getElementById(targetId);

      // Hide all program contents and toggle the target content
      allProgramContents.forEach(content => content.classList.remove('active'));
      targetContent.classList.toggle('active');
    });
  });

  // Modal functionality
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
