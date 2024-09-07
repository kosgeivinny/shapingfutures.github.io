document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('nav a');
  const pages = document.querySelectorAll('.page');
  const viewPhotosBtns = document.querySelectorAll('.view-photos-btn');
  const allProgramContents = document.querySelectorAll('.program-content');

  // Function to show the selected page and hide others
  function showPage(targetId) {
    pages.forEach(page => {
      page.classList.toggle('active', page.id === targetId);
    });
  }

  // Event listener for navigation links
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('data-target');
      showPage(targetId);
    });
  });

  // Show the home page by default
  showPage('home');

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
});