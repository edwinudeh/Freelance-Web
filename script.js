// Existing sample projects
const sampleProjects = [
  { title: 'Redesign company website', description: 'Looking for a front-end developer with design skills.', budget: '$750', button: 'Apply' },
  { title: 'Build mobile app', description: 'React Native or Flutter experience required.', budget: '$1200', button: 'Apply' },
  { title: 'Redesign website', description: 'Looking for a UI/UX designer.', budget: '$800', button: 'Apply' },
  { title: 'Create a landing page', description: 'Simple HTML/CSS project.', budget: '$300', button: 'Apply' },
  { title: 'E-commerce website', description: 'Full-stack developer needed.', budget: '$5000', button: 'Apply' },
  { title: 'SEO optimization', description: 'Looking for an SEO expert.', budget: '$400', button: 'Apply' },
  { title: 'Social media marketing', description: 'Need a social media manager.', budget: '$600', button: 'Apply' },
  { title: 'Content writing', description: 'Looking for a content writer.', budget: '$200', button: 'Apply' },
  { title: 'Logo design', description: 'Need a graphic designer.', budget: '$150', button: 'Apply' },
];

// Function to display projects
const listContainer = document.getElementById('project-list');

function displayProject(project) {
  const div = document.createElement('div');
  div.className = 'project';
  div.innerHTML = `
    <h4>${project.title}</h4>
    <p>${project.description}</p>
    <p><strong>Budget:</strong> ${project.budget}</p>
    <button class="apply-button">${project.button || 'Apply'}</button>
  `;

  div.querySelector('.apply-button').addEventListener('click', function () {
    localStorage.setItem('jobTitle', project.title);
    localStorage.setItem('jobDescription', project.description);
    localStorage.setItem('jobBudget', project.budget);
    window.location.href = 'apply.html';
  });

  listContainer.append(div);

const applyBtn = div.querySelector('.apply-button');
applyBtn.addEventListener('click', function () {
  const projectDiv = this.closest('.project');
  const title = projectDiv.querySelector('h4').innerText;
  const description = projectDiv.querySelectorAll('p')[0].innerText;
  const budget = projectDiv.querySelectorAll('p')[1].innerText;

  localStorage.setItem('jobTitle', title);
  localStorage.setItem('jobDescription', description);
  localStorage.setItem('jobBudget', budget);

  window.location.href = 'apply.html';
});

}


// Load initial sample projects
sampleProjects.forEach(displayProject);

// Handle form submission
const postForm = document.getElementById('postProjectForm');
postForm.addEventListener('submit', function (e) {
  e.preventDefault();

  const title = document.getElementById('title').value.trim();
  const description = document.getElementById('description').value.trim();
  const budget = document.getElementById('budget').value.trim();

  if (title && description && budget) {
    const newProject = {
      title,
      description,
      budget,
      button: 'Apply'
    };
    displayProject(newProject);

    postForm.reset(); // Clear the form
    // alert('Project posted successfully!');
  }
});

// Load job info from localStorage
window.addEventListener('DOMContentLoaded', () => {
  const description = localStorage.getItem('jobDescription');
  const title = localStorage.getItem('jobTitle');

  // if (description && title) {
  //   document.querySelector('h2').innerText = `Apply for: ${title}`;
  //   document.getElementById('jobDescription').innerText = description;
  // }
});









