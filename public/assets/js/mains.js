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
        fetch(`http://127.0.0.1:8000/staff/delete`, { // Adjust this URL based on your routes
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchStaff()

            })
            .finally(() => {
                // Hide the spinner
                spinner.style.display = 'none';
            });
    };

    // Handle edit staff (implementation can be added)
    window.editStaff = function (id) {
        // Fetch the staff data based on the id
        fetch(`http://127.0.0.1:8000/staff/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                // Populate the form fields with the fetched staff data
                document.querySelector('input[name="Full_name"]').value = data.Full_name;
                document.querySelector('input[name="Position"]').value = data.Position;
                document.querySelector('textarea[name="Biography_description"]').value = data.Biography_description;

                // If there is an image, set it up in the form
                if (data.Profile_image) {
                    document.querySelector('#formFile').src = data.Profile_image;
                }

                // Set the form action to update the staff
                document.querySelector('#edit-staff-form').action = `http://127.0.0.1:8000/staff/${id}/update`;

                // Open the modal
                $('#editStaffModal').modal('show');
            });
    };

    // Fetch all staff members and display them
    function fetchStaff() {

        const spinner = document.getElementById('spinner2');

        spinner.style.display = 'block';

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
                        <td style="width: 120px;">
                            <button class="btn btn-info btn-sm"  onclick="editStaff(${staff.id})"><i class="bi bi-pen"></i> </button> 
                            <button  class="btn btn-danger btn-sm" onclick="deleteStaff(${staff.id})"> <i class="bi bi-trash"></i> </button>
                        </td>
                    `;
                    staffList.appendChild(row);
                });
            })
            .finally(() => {
                // Hide the spinner
                spinner.style.display = 'none';
            });
    }

    // Initial fetch of staff members
    fetchStaff();


});

// this is for ICP Services

document.addEventListener('DOMContentLoaded', function () {
    // const icpList = document.getElementById('icp-tbody');
    const createICPForm = document.getElementById('create-icp-form');

    const createICPFormButton = document.getElementById('hahaha');

    // Fetch all ICP services and display them
    const icpList = document.getElementById('icp-tbody');

    // Handle delete ICP service
    window.deleteICP = function (id) {
        fetch(`http://127.0.0.1:8000/icp-services/delete`, { // Adjust this URL based on your routes
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchICP()

            })
    };

    // Handle edit Service 
    window.editService = function (id) {
        // Fetch the staff data based on the id
        fetch(`http://127.0.0.1:8000/service/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                // Populate the form fields with the fetched service data
                document.querySelector('input[name="Service_title"]').value = data.Service_title;
                document.querySelector('textarea[name="Service_description"]').value = data.Service_description;

                // If there is an image, set it up in the form
                if (data.Icon) {
                    document.querySelector('#formFile').src = data.Icon;
                }

                // Set the form action to update the staff
                document.querySelector('#edit-serive-form').action = `http://127.0.0.1:8000/icp-services/${id}/update`;

                // Open the modal
                $('#editServiceModal').modal('show');
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
                            <td><img src="${icp.Icon}" alt="${icp.Service_title}'s Profile" class="small-image"></td>
                            <td>${icp.Service_title}</td>
                            <td>${icp.Service_description}</td>
                            <td style="width: 120px;">
                                <button class="btn btn-info btn-sm"  onclick="editService(${icp.id})"><i class="bi bi-pen"></i></button> 
                                <button class="btn btn-danger btn-sm"  onclick="deleteICP(${icp.id})"><i class="bi bi-trash"></i></button>
                            </td>
                        `;
                    icpList.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching ICP services:', error))
            .finally(() => {
                // Hide the spinner
                spinner.style.display = 'none';
            });
    }

    // Call fetchICP once to populate the table on page load
    fetchICP();



    // Call the fetchICP function when the page loads
    document.addEventListener('DOMContentLoaded', fetchICP);


    // Handle create ICP service
    createICPForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createICPForm);

        fetch('/icp-services/create', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Create and display the success alert
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success bg-success text-light border-0 alert-dismissible fade show';
                    alert.role = 'alert';
                    alert.innerHTML = `
                        ${data.success}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    `;

                    // Append the alert to the alert container
                    document.getElementById('alert-container').appendChild(alert);

                    createICPForm.reset();

                    // Optionally, refresh the ICP services list
                    fetchICP();
                }
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

        fetch('http://127.0.0.1:8000/icp-services/update', {
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
                            <button style="margin: 5px;" onclick="editPicture(${picture.id})">Edit</button> <br>
                            <button style="margin: 5px;" onclick="deletePicture(${picture.id})">Delete</button>
                        </td>
                    `;
                    pictureList.appendChild(row);
                });
            });
    }



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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchPictures()

            })
    };

    // Initial fetch of pictures
    fetchPictures();
});


// Gallery on Frontend

document.addEventListener('DOMContentLoaded', function () {
    let portfolioFilters = document.querySelectorAll('#portfolio-flters li');
    let portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioFilters.forEach(filter => {
        filter.addEventListener('click', function () {
            let selectedFilter = this.getAttribute('data-filter');

            // Remove 'filter-active' class from all filters
            portfolioFilters.forEach(filter => filter.classList.remove('filter-active'));

            // Add 'filter-active' class to the clicked filter
            this.classList.add('filter-active');

            // Show or hide portfolio items based on the selected filter
            portfolioItems.forEach(item => {
                if (selectedFilter === '*' || item.classList.contains(selectedFilter.substring(1))) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});


// Add filtering logic for sub-events
document.addEventListener('DOMContentLoaded', function () {
    let portfolioFilters = document.querySelectorAll('#portfolio-flters li');
    let portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioFilters.forEach(filter => {
        filter.addEventListener('click', function () {
            let selectedFilter = this.getAttribute('data-filter');

            // Remove 'filter-active' class from all filters
            portfolioFilters.forEach(filter => filter.classList.remove('filter-active'));

            // Add 'filter-active' class to the clicked filter
            this.classList.add('filter-active');

            // Show or hide portfolio items based on the selected filter
            portfolioItems.forEach(item => {
                if (selectedFilter === '*' || item.classList.contains(selectedFilter.substring(1))) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});



// This is for Gallery on Backend

document.addEventListener('DOMContentLoaded', function () {
    const tabList = document.getElementById('myTab');
    const tabContent = document.getElementById('myTabContent');
    const allTabContent = document.getElementById('all'); // The "All" tab content
    const modalImage = document.getElementById('modalImage');
    const editButton = document.getElementById('editButton');
    const deleteButton = document.getElementById('deleteButton');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let selectedPictureId;

    deleteButton.addEventListener('click', function () {
        if (confirm("Are you sure you want to delete this image?")) {
            fetch(`/gallery/${selectedPictureId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.success);
                    fetchPictures(); // Refresh the pictures after deletion
                    const modal = bootstrap.Modal.getInstance(document.getElementById('imageModal'));
                    modal.hide(); // Hide the modal
                })
                .catch(error => console.error('Error deleting image:', error));
        }
    });

    function fetchPictures() {
        fetch('http://127.0.0.1:8000/gallery/all')
            .then(response => response.json())
            .then(data => {
                // Clear existing tabs and content
                tabList.innerHTML = '';
                tabContent.innerHTML = '';

                let allImages = [];

                // Create "All" tab
                const allTab = document.createElement('li');
                allTab.classList.add('nav-item');
                allTab.role = 'presentation';
                allTab.innerHTML = `<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>`;
                tabList.appendChild(allTab);

                const allContent = document.createElement('div');
                allContent.classList.add('tab-pane', 'fade', 'show', 'active');
                allContent.id = 'all';
                allContent.role = 'tabpanel';
                allContent.ariaLabelledby = 'all-tab';
                tabContent.appendChild(allContent);

                // Loop through each category
                Object.keys(data).forEach(category => {
                    allImages = allImages.concat(data[category]);

                    const tab = document.createElement('li');
                    tab.classList.add('nav-item');
                    tab.role = 'presentation';
                    tab.innerHTML = `<button class="nav-link" id="${category}-tab" data-bs-toggle="tab" data-bs-target="#${category}" type="button" role="tab" aria-controls="${category}" aria-selected="false">${category}</button>`;
                    tabList.appendChild(tab);

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
                        img.dataset.id = picture.id; // Store the picture ID
                        img.addEventListener('click', () => openImageModal(picture)); // Event listener for modal
                        content.appendChild(img);
                    });

                    tabContent.appendChild(content);
                });

                allImages.forEach(picture => {
                    const img = document.createElement('img');
                    img.src = `/${picture.Image}`;
                    img.alt = picture.Image_category;
                    img.classList.add('img-fluid', 'm-2');
                    img.dataset.id = picture.id; // Store the picture ID
                    img.addEventListener('click', () => openImageModal(picture)); // Event listener for modal
                    allContent.appendChild(img);
                });
            })
            .catch(error => console.error('Error fetching pictures:', error));
    }

    fetchPictures();

    function openImageModal(picture) {
        modalImage.src = `/${picture.Image}`;
        selectedPictureId = picture.id; // Set the selected picture ID

        // Show the modal
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();
    }

    // Event listener for the Save Changes button
    document.getElementById('saveButton').addEventListener('click', function () {
        console.log("Save button clicked"); // Log when button is clicked
        const formData = new FormData();
        const fileInput = document.getElementById('formFile');

        // Check if a file is selected
        if (fileInput.files.length > 0) {
            formData.append('Image', fileInput.files[0]);
            console.log("Image file appended:", fileInput.files[0]); // Append the new image file
        } else {
            alert("Please select an image to upload.");
            return; // Exit if no file is selected
        }

        console.log(`/gallery/${selectedPictureId}`);


        // Make the PUT request to update the image
        fetch(`/gallery/${selectedPictureId}`, {
            method: 'PUT',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken // Ensure CSRF token is included
            }
        })
            .then(response => {
                if (!response.ok) {
                    return response.text().then(text => { throw new Error(text); });
                }
                return response.json();
            })
            .then(data => {
                alert(data.success);
                fetchPictures(); // Refresh the pictures after the update
                const modal = bootstrap.Modal.getInstance(document.getElementById('imageModal'));
                modal.hide(); // Hide the modal
            })
            .catch(error => console.error('Error saving changes:', error));
    });

});



// This is for Customer Support

document.addEventListener('DOMContentLoaded', function () {
    const messageList = document.getElementById('message-tbody');
    const createMessageForm = document.getElementById('create-message-form');

    // Handle delete message
    window.deleteMessage = function (id) {
        fetch(`http://127.0.0.1:8000/customer-support/delete`, { // Adjust this URL based on your routes
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchMessages()

            })
    };

    // Fetch all messages and display them
    function fetchMessages() {
        fetch('http://127.0.0.1:8000/customer/support') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                messageList.innerHTML = '';
                data.forEach(message => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${message.Full_name}</td>
                        <td>${message.Email}</td>
                        <td>${message.Subject}</td>
                        <td>${message.Message}</td>
                        <td>
                            <button class="btn btn-danger btn-sm"  onclick="deleteMessage(${message.id})"><i class="bi bi-trash"></i></button>
                        </td>
                    `;
                    messageList.appendChild(row);
                });
            })
            .finally(() => {
                // Hide the spinner
                spinner.style.display = 'none';
            });
    }

    fetchMessages();

    // Handle create message
    createMessageForm.addEventListener('submit', function (event) {
        // event.preventDefault();

        // alert("hgdgjs")

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

    // Initial fetch of messages
    fetchMessages();
});

// This for Courses

document.addEventListener('DOMContentLoaded', function () {
    // Select elements
    const createCourseForm = document.getElementById('create-course-form');
    const courseList = document.getElementById('course-tbody'); // Adjust this ID based on your table's body
    const editCourseForm = document.getElementById('edit-course-form');
    const createCourseFormButton = document.getElementById('hahaha');

    // Handle delete course
    window.deleteCourse = function (id) {
        fetch(`http://127.0.0.1:8000/courses/delete/${id}`, { // Adjust this URL based on you routes
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchCourses()

            })
    };

    // Fetch all courses and display them
    function fetchCourses() {
        fetch('http://127.0.0.1:8000/courses/all') // Adjust this URL based on your API routes
            .then(response => response.json())
            .then(data => {
                courseList.innerHTML = ''; // Clear existing content
                data.forEach(course => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${course.name}</td>
                        <td>${course.description}</td>
                        <td>
                            <button class="btn btn-info btn-sm"  onclick="editCourse(${course.id}, '${course.name}', '${course.description}')"><i class="bi bi-pen"></i></button> 
                            <button class="btn btn-danger btn-sm"  onclick="deleteCourse(${course.id})"><i class="bi bi-trash"></i></button>
                        </td>
                    `;
                    courseList.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching courses:', error));
    }

    // Call fetchCourses once to populate the table on page load
    fetchCourses();


    // Handle edit Course
    window.editCourse = function (id) {
        // Fetch the course data based on the id
        fetch(`http://127.0.0.1:8000/courses/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                // Populate the form fields with the fetched course data
                document.querySelector('input[name="name"]').value = data.name;
                document.querySelector('textarea[name="description"]').value = data.description;

                // Set the form action to update the course
                document.querySelector('#edit-course-form').action = `http://127.0.0.1:8000/courses/${id}/update`;

                // Open the modal
                $('#editCourseModal').modal('show');
            })
            .catch(error => {
                console.error('Error fetching course data:', error);
                alert('There was an error fetching course data. Please try again later.');
            });
    };

    // Handle course form submission
    document.querySelector('#edit-course-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(this); // Gather the form data

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
            .then(response => {
                if (response.ok) {
                    return response.json(); // Return the JSON response
                }
                throw new Error('Network response was not ok.'); // Handle network errors
            })
            .then(data => {
                // Close the modal
                $('#editCourseModal').modal('hide');

                // Optionally, you can display a success message or notification here
                alert('Course updated successfully!');

                // Refresh the page or redirect
                window.location.reload(); // This will refresh the current page
                // Alternatively, you could redirect to a specific page like:
                // window.location.href = '/courses'; // Redirect to courses page
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                alert('There was an error updating the course. Please try again later.');
            });
    });


});


// This is for Student

document.addEventListener('DOMContentLoaded', function () {
    // References to DOM elements
    const createStudentForm = document.getElementById('create-student-form');
    const studentList = document.getElementById('student-tbody');
    const editStudentForm = document.getElementById('edit-student-form');
    const courseSelect = document.getElementById('course-select');
    const createCourseFormButton = document.getElementById('hahaha');




    window.generateCertificate = function (studentId, studentName, studentProgram, studentEmail) {

        const spinnerButton = document.getElementById('spinner');

        spinnerButton.style.display = 'inline-block';

        const data = {
            id: studentId,
            name: studentName,
            program: studentProgram,
            email: studentEmail, // Add email field
            date: new Date().toISOString().split('T')[0], // Today's date in YYYY-MM-DD format
        };

        // Send a POST request to generate the certificate
        fetch(`/certificates/participation/create`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errData => {
                        console.error('Server error:', errData);
                        throw new Error('Failed to generate certificate');
                    });
                }
                return response.blob(); // Get the certificate PDF as a blob
            })
            .then(blob => {
                // Create a URL for the PDF blob and open it in a new tab
                const url = window.URL.createObjectURL(blob);
                window.open(url);

                // Optionally, show a success message for the email sending
                alert(`The certificate has been generated and sent to ${studentEmail}`);
            })
            .catch(error => console.error('Error generating certificate:', error))
            .finally(() => {
                // Hide the spinner after the request is complete
                spinnerButton.style.display = 'none';
            });
    }



    // Fetch all courses and populate the dropdown
    function fetchCourses() {
        fetch('http://127.0.0.1:8000/courses/all') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                courseSelect.innerHTML = ''; // Clear existing options
                data.forEach(course => {
                    const option = document.createElement('option');
                    option.value = course.id;
                    option.text = course.name;
                    courseSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching courses:', error));
    }

    // Fetch all students and display them
    window.fetchStudents = function (page = 1) { // Attach fetchStudents to the window object
        const spinner = document.getElementById('spinner1');
        spinner.style.display = 'block';

        // Fetch students with pagination
        fetch(`http://127.0.0.1:8000/all/students?page=${page}`) // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                const studentList = document.getElementById('student-tbody');
                studentList.innerHTML = ''; // Clear existing content

                data.data.forEach(student => {
                    const row = document.createElement('tr');

                    // Combine course names into a single string
                    const courses = student.courses.map(course => course.name).join('. ');

                    row.innerHTML = `
                <td>${student.full_name}</td>
                <td>${student.email}</td>
                <td>${student.biography_description}</td>
                <td>${courses}</td>
                <td style="width:150px;">
                    <button class="btn btn-info btn-sm"  onclick="editStudent(${student.id})"><i class="bi bi-pen"></i></button> 
                    <button class="btn btn-danger btn-sm"   onclick="deleteStudent(${student.id})"><i class="bi bi-trash"></i></button> 
                    <button class="btn btn-success btn-sm" onclick="generateCertificate(${student.id}, '${student.full_name}', '${courses}', '${student.email}')"><i class="bi bi-arrow-down-circle"></i></button>
                </td>
                `;
                    studentList.appendChild(row);
                });

                // Create pagination links
                createPagination(data);
            })
            .catch(error => console.error('Error fetching students:', error))
            .finally(() => {
                spinner.style.display = 'none';
            });
    };

    // Call fetchStudents to populate the table on page load
    fetchStudents();

    // Create pagination for next and previous pages
    function createPagination(data) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = ''; // Clear existing pagination

        // Previous Page Button
        if (data.prev_page_url) {
            pagination.innerHTML += `<button class="btn btn-light" onclick="fetchStudents(${data.current_page - 1})">Previous</button>`;
        }

        // Page Numbers (Display only a few around the current page, e.g., 5 pages max)
        let startPage = Math.max(data.current_page - 2, 1);
        let endPage = Math.min(data.current_page + 2, data.last_page);

        for (let i = startPage; i <= endPage; i++) {
            if (i === data.current_page) {
                // Highlight current page
                pagination.innerHTML += `<button class="btn btn-success">${i}</button>`;
            } else {
                pagination.innerHTML += `<button class="btn btn-light" onclick="fetchStudents(${i})">${i}</button>`;
            }
        }

        // Next Page Button
        if (data.next_page_url) {
            pagination.innerHTML += `<button class="btn btn-light" onclick="fetchStudents(${data.current_page + 1})">Next</button>`;
        }
    }


    // Handle delete student
    window.deleteStudent = function (id) {
        fetch(`http://127.0.0.1:8000/student/delete/${id}`, {
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchStudents()

            })
    };


    // Function to open modal and populate the form with student data
    window.editStudent = function (id) {
        // Fetch the student data based on the id
        fetch(`/students/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                // Populate the form fields with the fetched student data
                document.querySelector('input[name="full_name"]').value = data.full_name;
                document.querySelector('input[name="email"]').value = data.email;
                document.querySelector('textarea[name="biography_description"]').value = data.biography_description;

                // Populate the courses select field
                fetch('/courses/all')
                    .then(response => response.json())
                    .then(courses => {
                        let coursesSelect = document.querySelector('#courses');
                        coursesSelect.innerHTML = ''; // Clear existing options
                        courses.forEach(course => {
                            let option = document.createElement('option');
                            option.value = course.id;
                            option.text = course.name;

                            // Check if the student is already enrolled in the course
                            if (data.courses.includes(course.id)) {
                                option.selected = true;
                            }

                            coursesSelect.appendChild(option);
                        });
                    });

                // Set the form action to update the student
                document.querySelector('#edit-student-form').action = `/students/${id}/update`;

                // Open the modal
                $('#editStudentModal').modal('show');
            });
    };



    // Cancel editing
    document.getElementById('cancel-edit').addEventListener('click', function () {
        editStudentForm.style.display = 'none';
    });

    // Initial fetches
    fetchCourses();
    fetchStudents();
});


// This is for Certificate

document.addEventListener('DOMContentLoaded', function () {
    const certificateList = document.getElementById('certificate-tbody');
    const createCertificateForm = document.getElementById('create-certificate-form');


    // Handle delete Certificate
    window.deleteCertificate = function (id) {
        fetch(`http://127.0.0.1:8000/certificates/delete/${id}`, {
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
                const alertContainer = document.createElement('div');
                alertContainer.className = 'alert alert-danger bg-danger text-light border-0 alert-dismissible fade show';
                alertContainer.role = 'alert';
                alertContainer.innerHTML = `
                              ${data.success}
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                          `;

                document.querySelector('.section').prepend(alertContainer);

                fetchCertificates()

            })
    };

    // Fetch all certificates and display them
    function fetchCertificates() {
        fetch('/certificates') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                const certificateList = document.getElementById('certificate-tbody');
                certificateList.innerHTML = '';
                data.forEach(certificate => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${certificate.name}</td>
                        <td>${certificate.program}</td>
                        <td>${certificate.date}</td>
                        <td>
                            <a href="${certificate.file_url}" target="_blank">Open certificate</a>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteCertificate(${certificate.id})"><i class="bi bi-trash"></i></button> 
                        </td>
                    `;
                    certificateList.appendChild(row);
                });
            });
    }



    // Call fetchCertificates() to load data on page load
    fetchCertificates();

    // Handle create certificate
    function generateCertificate(studentId, studentName, studentProgram, studentEmail) {
        // Prepare data for the certificate
        const data = {
            name: studentName,
            program: studentProgram,
            email: studentEmail, // Add email
            date: new Date().toISOString().split('T')[0], // Today's date in YYYY-MM-DD format

        };

        fetch('/certificates/generate', { // Adjust this URL based on your routes
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
            .then(response => {
                if (response.ok) {
                    return response.blob(); // Return the certificate PDF as a blob
                } else {
                    throw new Error('Failed to generate certificate');
                }
            })
            .then(blob => {
                // Create a URL for the PDF blob and open it in a new tab
                const url = window.URL.createObjectURL(blob);
                window.open(url);
            })
            .catch(error => console.error('Error generating certificate:', error));
    }

});


// This is for closing modal form

document.addEventListener('DOMContentLoaded', function () {
    // Add the submit event listener for the edit staff form
    document.querySelector('#edit-staff-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST', // Use POST method
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // Indicate that this is an AJAX request
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // CSRF token for security
            }
        })
            .then(response => response.json())
            .then(data => {
                // Handle successful response
                if (data.success) {
                    $('#editStaffModal').modal('hide'); // Hide the modal
                    // Optionally, refresh the data or update the UI
                }
            })
            .catch(error => console.error('Error:', error));
    });
});


