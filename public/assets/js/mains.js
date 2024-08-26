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
        fetch('http://127.0.0.1:8000/gallery/all') // Adjust this URL based on your routes
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
                fetchMessages(); // Refresh the messages list
            });
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
                            
                            <button onclick="deleteMessage(${message.id})">Delete</button>
                        </td>
                    `;
                    messageList.appendChild(row);
                });
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
        fetch(`http://127.0.0.1:8000/courses/delete`, { // Adjust this URL based on your routes
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
                fetchCourses(); // Refresh the course list
            });
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
                            <button onclick="editCourse(${course.id}, '${course.name}', '${course.description}')">Edit</button>
                            <button onclick="deleteCourse(${course.id})">Delete</button>
                        </td>
                    `;
                    courseList.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching courses:', error));
    }

    // Call fetchCourses once to populate the table on page load
    fetchCourses();

    // Handle create course
    createCourseFormButton.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createCourseForm);

        fetch('http://127.0.0.1:8000/create/course', { // Adjust this URL based on your routes
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchCourses(); // Refresh the course list
                createCourseForm.reset(); // Clear the form after submission
            });
    });

    // Handle edit course
    window.editCourse = function (id, name, description) {
        document.getElementById('edit-course-id').value = id;
        document.getElementById('edit-course-name').value = name;
        document.getElementById('edit-course-description').value = description;
        editCourseForm.style.display = 'block';
    };

    // Handle update course
    editCourseForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const id = document.getElementById('edit-course-id').value;
        const name = document.getElementById('edit-course-name').value;
        const description = document.getElementById('edit-course-description').value;

        fetch('http://127.0.0.1:8000/courses/update', {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                id: id,
                name: name,
                description: description,
            }),
        })
            .then(response => response.json())
            .then(data => {
                editCourseForm.style.display = 'none';
                fetchCourses(); // Refresh the course list
            });
    });

    // Cancel editing
    document.getElementById('cancel-edit').addEventListener('click', function () {
        editCourseForm.style.display = 'none';
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
    function fetchStudents() {
        fetch('http://127.0.0.1:8000/all/students') // Adjust this URL based on your routes
            .then(response => response.json())
            .then(data => {
                const studentList = document.getElementById('student-tbody');
                studentList.innerHTML = ''; // Clear existing content
                data.forEach(student => {
                    const row = document.createElement('tr');

                    // Combine course names into a single string
                    const courses = student.courses.map(course => course.name).join('. ');

                    row.innerHTML = `
                    <td>${student.full_name}</td>
                    <td>${student.email}</td>
                    <td>${student.biography_description}</td>
                    <td>${courses}</td>
                    <td>
                        <button onclick="editStudent(${student.id})">Edit</button>
                        <button onclick="deleteStudent(${student.id})">Delete</button>
                        <button onclick="generateCertificate(${student.id}, '${student.full_name}', '${courses}')">Generate Certificate</button>
                    </td>
                `;
                    studentList.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching students:', error));
    }

    // Call fetchStudents to populate the table on page load
    fetchStudents();

    window.generateCertificate = function (studentId, studentName, studentProgram) {
        // Prepare data for the certificate
        const data = {
            id: studentId,
            name: studentName,
            program: studentProgram,
            date: new Date().toISOString().split('T')[0], // Today's date in YYYY-MM-DD format
        };

        // Send a POST request to generate the certificate
        fetch(`/certificates/create`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then( errData =>{
                        console.error('Server error:', errData);
                        throw new Error('Failed to generate certificate');
                    }); // Return the certificate PDF as a blob
                } 
                return response.blob();
            })
            .then(blob => {
                // Create a URL for the PDF blob and open it in a new tab
                const url = window.URL.createObjectURL(blob);
                window.open(url);
            })
            .catch(error => console.error('Error generating certificate:', error));
    }



    // Handle delete student
    window.deleteStudent = function (id) {
        fetch(`http://127.0.0.1:8000/students/delete`, {
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
                fetchStudents(); // Refresh the student list
            });
    };

    // Handle create student
    createCourseFormButton.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(createCourseFormButton);

        fetch('http://127.0.0.1:8000/create/student', { // Adjust this URL based on your routes
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                fetchStudents(); // Refresh the student list
                createStudentForm.reset(); // Reset the form
            });
    });

    // Handle edit student
    window.editStudent = function (id, name, email, course_id) {
        document.getElementById('edit-student-id').value = id;
        document.getElementById('edit-student-name').value = name;
        document.getElementById('edit-student-email').value = email;
        document.getElementById('edit-course-select').value = course_id;
        editStudentForm.style.display = 'block';
    };

    // Handle update student
    editStudentForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const id = document.getElementById('edit-student-id').value;
        const name = document.getElementById('edit-student-name').value;
        const email = document.getElementById('edit-student-email').value;
        const course_id = document.getElementById('edit-course-select').value;

        fetch('http://127.0.0.1:8000/students/update', {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                id: id,
                name: name,
                email: email,
                course_id: course_id,
            }),
        })
            .then(response => response.json())
            .then(data => {
                editStudentForm.style.display = 'none';
                fetchStudents(); // Refresh the student list
            });
    });

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
    function generateCertificate(studentId, studentName, studentProgram) {

        // Prepare data for the certificate
        const data = {
            name: studentName,
            program: studentProgram,
            date: new Date().toISOString().split('T')[0], // Today's date in YYYY-MM-DD format
        };

        fetch('/certificates/generate', { // Adjust this URL based on your routes
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
    }
});

