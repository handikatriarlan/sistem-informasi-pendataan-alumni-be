// Mock alumni data
const ALUMNI_DATA = [
    { id: 1, name: 'John Doe', class: 'Science', batch: '2020' },
    { id: 2, name: 'Jane Smith', class: 'Commerce', batch: '2019' },
    { id: 3, name: 'Mike Johnson', class: 'Arts', batch: '2021' },
];

// Create alumni card HTML
function createAlumniCard(alumni) {
    return `
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <div class="aspect-square bg-gray-200 flex items-center justify-center">
          <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
          </svg>
        </div>
        <div class="p-4">
          <h3 class="font-semibold text-lg">${alumni.name}</h3>
          <p class="text-gray-600">Class: ${alumni.class}</p>
          <p class="text-gray-600">Batch: ${alumni.batch}</p>
        </div>
      </div>
    `;
}

// Initialize the alumni list
function initAlumniList() {
    const alumniGrid = document.getElementById('alumni-grid');
    const searchInput = document.getElementById('search-alumni');

    // Render all alumni initially
    function renderAlumni(alumniList) {
        alumniGrid.innerHTML = alumniList.map(alumni => createAlumniCard(alumni)).join('');
    }

    // Handle search
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const filteredAlumni = ALUMNI_DATA.filter(alumni =>
            alumni.name.toLowerCase().includes(searchTerm) ||
            alumni.class.toLowerCase().includes(searchTerm) ||
            alumni.batch.includes(searchTerm)
        );
        renderAlumni(filteredAlumni);
    });

    // Initial render
    renderAlumni(ALUMNI_DATA);

    // Update copyright year
    document.getElementById('current-year').textContent = new Date().getFullYear();
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initAlumniList);