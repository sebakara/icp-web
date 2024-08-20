<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <ul>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="#staff">Staff</a></li>
                <li><a href="#icp-services">ICP Services</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#customer-support">Customer Support</a></li>
                <li><a href="#certificates">Certificates</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </nav>

        <div class="main-content">
            <header>
                <h1>Admin Dashboard</h1>
            </header>

            <!-- Staff Management Section -->
            <section id="staff">
                <h2>Manage Staff</h2>

                <!-- Form to Add New Staff -->
                <form id="create-staff-form">
                    <h3>Create New Staff</h3>
                    <input type="text" name="Full_name" placeholder="Full name" required>
                    <input type="text" name="Position" placeholder="Position" required>
                    <textarea name="Biography_description" placeholder="Biography" required></textarea>
                    <h5>Profile Picture: </h5><input type="file" name="Profile_image" required>
                    <button type="submit">Create Staff</button>
                </form>

                <!-- Display All Staff -->
                <div id="staff-list">
                    <h3>All Staff Members</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Profile Picture</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Biography</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="staff-tbody">
                            <!-- Staff members will be populated here using JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- ICP Services Management Section -->
            <section id="icp-services">
                <h2>Manage ICP Services</h2>

                <!-- Form to Add New ICP Service -->
                <form id="create-icp-form">
                    <h3>Create New ICP Service</h3>
                    <input type="text" name="Service_title" placeholder="Service Name" required>
                    <textarea name="Service_description" placeholder="Service Description" required></textarea>
                    <h4>Icon: </h4><input type="file" name="Icon" required>
                    <button type="submit">Create ICP Service</button>
                </form>

                <!-- Form to Edit Existing ICP Service -->
                <form id="edit-icp-form" style="display: none;">
                    <h3>Edit ICP Service</h3>
                    <input type="hidden" name="Service_id" id="edit-service-id">
                    <input type="text" name="Service_title" id="edit-service-title" placeholder="Service Name" required>
                    <textarea name="Service_description" id="edit-service-description" placeholder="Service Description" required></textarea>
                    <button type="submit">Update ICP Service</button>
                    <button type="button" id="cancel-edit">Cancel</button>
                </form>

                <!-- Display All ICP Services -->
                <div id="icp-list">
                    <h3>All ICP Services</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="icp-tbody">
                            <!-- ICP services will be populated here using JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Gallery Management Section -->
            <section id="gallery">
                <h2>Manage Gallery</h2>

                <!-- Form to Add New Picture -->
                <form id="create-picture-form" enctype="multipart/form-data">
                    <h3>Upload New Picture</h3>
                    <input type="file" name="picture" required>
                    <textarea name="description" placeholder="Picture Description" required></textarea>
                    <button type="submit">Upload Picture</button>
                </form>

                <!-- Display All Pictures -->
                <div id="picture-list">
                    <h3>All Pictures</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Picture</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="picture-tbody">
                            <!-- Gallery pictures will be populated here using JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Customer Support Management Section -->
            <section id="customer-support">
                <h2>Manage Customer Support</h2>

                <!-- Form to Add New Message -->
                <form id="create-message-form">
                    <h3>Send New Message</h3>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>

                <!-- Display All Messages -->
                <div id="message-list">
                    <h3>All Messages</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="message-tbody">
                            <!-- Messages will be populated here using JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Certificate Management Section -->
            <section id="certificates">
                <h2>Manage Certificates</h2>

                <!-- Form to Generate New Certificate -->
                <form id="create-certificate-form">
                    <h3>Generate New Certificate</h3>
                    <input type="text" name="name" placeholder="Recipient Name" required>
                    <input type="text" name="program" placeholder="Program" required>
                    <input type="date" name="date" placeholder="Date" required>
                    <button type="submit">Generate Certificate</button>
                </form>

                <!-- Display All Certificates -->
                <div id="certificate-list">
                    <h3>All Certificates</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="certificate-tbody">
                            <!-- Certificates will be populated here using JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>

    <script src="{{ asset('assets/js/mains.js') }}"></script>
</body>

</html>