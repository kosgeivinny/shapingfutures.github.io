document.addEventListener('DOMContentLoaded', () => {

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
});

