document.addEventListener('DOMContentLoaded', () => {
    const dashboardLink = document.getElementById("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/home.html");
    const viewUsersLink = document.getElementById("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/view-users.html");
    const mainContent = document.getElementById('main-content');

    // Event listener for the "Dashboard" link
    dashboardLink.addEventListener('click', (event) => {
        event.preventDefault("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/home.html"); // Prevent default link behavior

        // Fetch and load the "dashboard.html" content into the main content area
        loadContent("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/home.html");
    });

    // Event listener for the "View Users" link
    viewUsersLink.addEventListener('click', (event) => {
        event.preventDefault("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/view-users.html"); // Prevent default link behavior

        // Fetch and load the "view-users.html" content into the main content area
        loadContent("file:///C:/Users/Rusiru%20pramod/Desktop/node/WEB/view-users.html");
    });

    // Function to load HTML content from a file
    function loadContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(html => {
                mainContent.innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading content:', error);
            });
    }
});
