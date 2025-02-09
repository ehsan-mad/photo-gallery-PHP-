Database Setup:
Create a MySQL database named photo_gallery.

Create a table named photos with the following structure:
id (INT, AUTO_INCREMENT, Primary Key)
title (VARCHAR, 255, NOT NULL)
image_path (VARCHAR, 255, NOT NULL)
created_at (TIMESTAMP, DEFAULT CURRENT_TIMESTAMP)

updated_at (TIMESTAMP, DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)

Directory Structure:
Organize your project as follows:

photo-gallery/
├── index.php       (Main page displaying the gallery)
├── upload.php      (Handles file uploads)
├── delete.php      (Handles file deletions)
├── db.php          (Database connection file)
├── uploads/        (Directory for storing uploaded files)

Application Features:


CSS is Optional. It won't add you extra mark but you can you use pure CSS or any CSS Framework.

No need to do OOP style coding.


File Upload:
Provide a form for users to upload files.
Accept images (.jpg, .jpeg, .png, .gif).
Save uploaded files in the uploads/ directory.
Save file metadata (title, file path, timestamp) in the database.

Gallery Display:
Fetch and display all uploaded files from the database on the main page.
Display file titles and thumbnails for images.
If there is no images then show No photos uploaded yet.

Delete Functionality:
Allow users to delete files from the gallery.
Remove both the file from the server and its metadata from the database.
