document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.sidebar ul li a');

    links.forEach(link => {
        link.addEventListener('click', function () {
            // Add active class to clicked link
            links.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            // Scroll to the corresponding section
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({ behavior: 'smooth' });
        });
    });
});


// this is for staff

document.addEventListener('DOMContentLoaded', function () {
    const staffList = document.getElementById('staff-tbody');
    const createStaffForm = document.getElementById('create-staff-form');

     // Handle delete staff
     window.deleteStaff = function (id) {
        fetch(`http://127.0.0.1:8000/api/delete/staff`, { // Adjust this URL based on your routes
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ id: id }),
        })
            .then(response => response.json())
            .then(data => {
                fetchStaff(); // Refresh the staff list
            });
    };

    // Fetch all staff members and display them
    function fetchStaff() {
        fetch('http://127.0.0.1:8000/staff/all') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                staffList.innerHTML = '';
                data.forEach(staff => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td><img src="${staff.Profile_image}" alt="${staff.Full_name}'s Profile" class="small-image"></td>
                        <td>${staff.Full_name}</td>
                        <td>${staff.Position}</td>
                        <td>${staff.Biography_description}</td>
                        <td>
                            <button onclick="editStaff(${staff.id})">Edit</button>
                            <button onclick="deleteStaff(${staff.id})">Delete</button>
                        </td>
                    `;
                    staffList.appendChild(row);
                });
            });
    }

    // Initial fetch of staff members
    fetchStaff();

    // Handle create staff
    createStaffForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createStaffForm);

        fetch('http://127.0.0.1:8000/create/staff', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchStaff(); // Refresh the staff list
            });
    });

    // Handle edit staff (implementation can be added)
    window.editStaff = function (id) {
        // Implement the edit logic
    };

   

    
});

// this is for ICP Services

document.addEventListener('DOMContentLoaded', function () {
    // const icpList = document.getElementById('icp-tbody');
    const createICPForm = document.getElementById('create-icp-form');

    const createICPFormButton = document.getElementById('hahaha');

    // Fetch all ICP services and display them
    const icpList = document.getElementById('icp-tbody');

    // for edit form
    const editICPForm = document.getElementById('edit-icp-form');

     // Handle delete ICP service
     window.deleteICP = function (id) {
        fetch(`http://127.0.0.1:8000/api/delete/service`, { // Adjust this URL based on your routes
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ id: id }),
        })
            .then(response => response.json())
            .then(data => {
                fetchICP(); // Refresh the ICP services list
            });
    };

    // Fetch all ICP services and display them
    function fetchICP() {
        fetch('http://127.0.0.1:8000/icp-services/all') // Adjust this URL based on your API routes
            .then(response => response.json())
            .then(data => {
                icpList.innerHTML = ''; // Clear existing content
                data.forEach(icp => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                            <td>${icp.Service_title}</td>
                            <td>${icp.Service_description}</td>
                            <td>
                                <button onclick="editICP(${icp.id})">Edit</button>
                                <button onclick="deleteICP(${icp.id})">Delete</button>
                            </td>
                        `;
                    icpList.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching ICP services:', error));
    }

    // Call fetchICP once to populate the table on page load
    fetchICP();



    // Call the fetchICP function when the page loads
    document.addEventListener('DOMContentLoaded', fetchICP);


    // Handle create ICP service
    createICPFormButton.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createICPFormButton);

        fetch('http://127.0.0.1:8000/icp-services/create', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchICP(); // Refresh the ICP services list
            });
    });

    // Handle edit ICP service
    window.editICP = function (id, title, description) {
        document.getElementById('edit-service-id').value = id;
        document.getElementById('edit-service-title').value = title;
        document.getElementById('edit-service-description').value = description;
        editICPForm.style.display = 'block';
    };

    // Handle update ICP service
    editICPForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const id = document.getElementById('edit-service-id').value;
        const title = document.getElementById('edit-service-title').value;
        const description = document.getElementById('edit-service-description').value;

        fetch('http://127.0.0.1:8000/api/update/service', {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                Service_id: id,
                Service_title: title,
                Service_description: description,
            }),
        })
            .then(response => response.json())
            .then(data => {
                editICPForm.style.display = 'none';
                fetchICP(); // Refresh the ICP services list
            });
    });

    // Cancel editing
    document.getElementById('cancel-edit').addEventListener('click', function () {
        editICPForm.style.display = 'none';
    });

   

    // Initial fetch of ICP services
    fetchICP();
});

// This is for Gallery

document.addEventListener('DOMContentLoaded', function () {
    const pictureList = document.getElementById('picture-tbody');
    const createPictureForm = document.getElementById('create-picture-form');
    const createGalleryFormButton = document.getElementById('hahaha');

    // Fetch all pictures and display them
    function fetchPictures() {
        fetch('') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                pictureList.innerHTML = '';
                data.forEach(picture => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td><img src="${picture.url}" alt="${picture.description}" width="100"></td>
                        <td>${picture.description}</td>
                        <td>
                            <button onclick="editPicture(${picture.id})">Edit</button>
                            <button onclick="deletePicture(${picture.id})">Delete</button>
                        </td>
                    `;
                    pictureList.appendChild(row);
                });
            });
    }

    // Handle create picture
    createGalleryFormButton.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createGalleryFormButton);

        fetch('http://127.0.0.1:8000/gallery', { 
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchPictures(); // Refresh the pictures list
            });
    });

    // Handle edit picture (implementation can be added)
    window.editPicture = function (id) {
        // Implement the edit logic
    };

    // Handle delete picture
    window.deletePicture = function (id) {
        fetch(`/gallery/delete/${id}`, { // Adjust this URL based on your routes
            method: 'DELETE',
        })
            .then(response => response.json())
            .then(data => {
                fetchPictures(); // Refresh the pictures list
            });
    };

    // Initial fetch of pictures
    fetchPictures();
});


// This is for Gallery on Backend

document.addEventListener('DOMContentLoaded', function () {
    const tabList = document.getElementById('myTab');
    const tabContent = document.getElementById('myTabContent');
    const allTabContent = document.getElementById('all'); // The "All" tab content

    function fetchPictures() {
        fetch('http://127.0.0.1:8000/api/all/gallery') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                tabList.innerHTML = ''; // Clear existing tabs, except "All"
                tabContent.innerHTML = ''; // Clear existing content, except "All"

                let allImages = []; // Array to hold all images across categories

                // Create the "All" tab manually since it's the first tab
                const allTab = document.createElement('li');
                allTab.classList.add('nav-item');
                allTab.role = 'presentation';
                allTab.innerHTML = `
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>`;
                tabList.appendChild(allTab);

                // Add content to the "All" tab (Initially empty, will populate with images later)
                const allContent = document.createElement('div');
                allContent.classList.add('tab-pane', 'fade', 'show', 'active');
                allContent.id = 'all';
                allContent.role = 'tabpanel';
                allContent.ariaLabelledby = 'all-tab';
                tabContent.appendChild(allContent);

                // Loop through each category
                Object.keys(data).forEach((category, index) => {
                    // Add to allImages array
                    allImages = allImages.concat(data[category]);

                    // Create tab for each category
                    const tab = document.createElement('li');
                    tab.classList.add('nav-item');
                    tab.role = 'presentation';
                    tab.innerHTML = `
                        <button class="nav-link" id="${category}-tab" data-bs-toggle="tab" data-bs-target="#${category}" type="button" role="tab" aria-controls="${category}" aria-selected="false">
                            ${category}
                        </button>`;
                    tabList.appendChild(tab);

                    // Create tab content for each category
                    const content = document.createElement('div');
                    content.classList.add('tab-pane', 'fade');
                    content.id = category;
                    content.role = 'tabpanel';
                    content.ariaLabelledby = `${category}-tab`;

                    data[category].forEach(picture => {
                        const img = document.createElement('img');
                        img.src = `/${picture.Image}`;
                        img.alt = picture.Image_category;
                        img.classList.add('img-fluid', 'm-2');
                        content.appendChild(img);
                    });

                    tabContent.appendChild(content);
                });

                // Populate the "All" tab with all images
                allImages.forEach(picture => {
                    const img = document.createElement('img');
                    img.src = `/${picture.Image}`;
                    img.alt = picture.Image_category;
                    img.classList.add('img-fluid', 'm-2');
                    allTabContent.appendChild(img);
                });
            })
            .catch(error => console.error('Error fetching pictures:', error));
    }

    // Fetch pictures on page load
    fetchPictures();
});





// This is for Customer Support

document.addEventListener('DOMContentLoaded', function () {
    const messageList = document.getElementById('message-tbody');
    const createMessageForm = document.getElementById('create-message-form');

    // Fetch all messages and display them
    function fetchMessages() {
        fetch('/customer-support') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                messageList.innerHTML = '';
                data.forEach(message => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${message.subject}</td>
                        <td>${message.message}</td>
                        <td>
                            <button onclick="editMessage(${message.id})">Edit</button>
                            <button onclick="deleteMessage(${message.id})">Delete</button>
                        </td>
                    `;
                    messageList.appendChild(row);
                });
            });
    }

    // Handle create message
    createMessageForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createMessageForm);

        fetch('/customer-support/create', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchMessages(); // Refresh the messages list
            });
    });

    // Handle edit message (implementation can be added)
    window.editMessage = function (id) {
        // Implement the edit logic
    };

    // Handle delete message
    window.deleteMessage = function (id) {
        fetch(`/customer-support/delete/${id}`, { // Adjust this URL based on your routes
            method: 'DELETE',
        })
            .then(response => response.json())
            .then(data => {
                fetchMessages(); // Refresh the messages list
            });
    };

    // Initial fetch of messages
    fetchMessages();
});

// This is for Certificate

document.addEventListener('DOMContentLoaded', function () {
    const certificateList = document.getElementById('certificate-tbody');
    const createCertificateForm = document.getElementById('create-certificate-form');

    // Fetch all certificates and display them
    function fetchCertificates() {
        fetch('/certificates') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                certificateList.innerHTML = '';
                data.forEach(certificate => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${certificate.name}</td>
                        <td>${certificate.program}</td>
                        <td>${certificate.date}</td>
                        <td>
                            <button onclick="editCertificate(${certificate.id})">Edit</button>
                            <button onclick="deleteCertificate(${certificate.id})">Delete</button>
                        </td>
                    `;
                    certificateList.appendChild(row);
                });
            });
    }

    // Handle create certificate
    createCertificateForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createCertificateForm);

        fetch('/certificates/generate', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchCertificates(); // Refresh the certificates list
            });
    });

    // Handle edit certificate (implementation can be added)
    window.editCertificate = function (id) {
        // Implement the edit logic
    };

    // Handle delete certificate
    window.deleteCertificate = function (id) {
        fetch(`/certificates/delete/${id}`, { // Adjust this URL based on your routes
            method: 'DELETE',
        })
            .then(response => response.json())
            .then(data => {
                fetchCertificates(); // Refresh the certificates list
            });
    };

    // Initial fetch of certificates
    fetchCertificates();
});