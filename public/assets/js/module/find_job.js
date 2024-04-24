function filterJobs() {
  const searchInput = document.getElementById("search-input");
  if (searchInput) {
    const jobSections = Array.from(document.querySelectorAll(".A"));
    const searchTerm = searchInput.value.toLowerCase();

    jobSections.forEach((section) => {
      const jobLinks = Array.from(section.getElementsByTagName("a"));

      jobLinks.forEach((link) => {
        const jobText = link.textContent.toLowerCase();
        const isMatch = jobText.includes(searchTerm);
        link.style.display = isMatch ? "block" : "none";
      });
    });
  } else {
    console.error("The searchInput element is not found.");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const searchButton = document.getElementById("searching");
  if (searchButton) {
    searchButton.addEventListener("click", filterJobs);
  } else {
    console.error("The searching button is not found.");
  }
});
