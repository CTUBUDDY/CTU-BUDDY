# CTU-Buddy

CTU-Buddy Educational System
CTU-Buddy is an educational platform designed to enhance the academic experience for students at City Technical University (CTU). The system includes features such as timetable management, resource sharing, discussion forums, and contact forms to support students in their academic journey.

Table of Contents
Features
Installation
Usage
Folder Structure
Contributing
License
Features
Home Page:

Central hub with multimedia content (images, videos, animations).
Navigation footer available on all pages.
Timetable Page:

Interactive and responsive timetable for weekly schedules.
Discussion Page:

Threaded discussions and user profiles for collaborative learning.
Moderation tools for managing discussions.
Share Resources Page:

Upload and share educational resources (PDF format).
Categorization and search functionality for easy access.
About Us Page:

Information about the platform's purpose, vision, mission, and team members.
Contact Us Page:

Contact form and embedded map showing CTU's campus location.
Installation
Prerequisites
Node.js (v14.0.0 or higher)
NPM (v6.0.0 or higher)
Git
Steps to Install
Clone the Repository:

bash
Copy code
git clone https://github.com/yourusername/ctu-buddy.git
cd ctu-buddy
Install Dependencies:

bash
Copy code
npm install
Start the Development Server:

bash
Copy code
npm start
Access the Application:

The app will be accessible at http://localhost:3000 in your web browser.
Deployment
For deployment to a live server, refer to the instructions in the DEPLOYMENT.md file.

Usage
Timetable Management: Add or modify your weekly schedule on the Timetable page.
Discussions: Engage in academic discussions by posting and responding to questions.
Resource Sharing: Upload and download educational materials on the Share Resources page.
Contact: Use the Contact Us page to submit feedback or inquiries.
Folder Structure
graphql
Copy code
ctu-buddy/
│
├── public/               # Static files (HTML, images, etc.)
│   ├── index.html
│   └── ...
│
├── src/                  # Source files
│   ├── components/       # React components
│   ├── pages/            # Individual pages (Home, Timetable, etc.)
│   ├── assets/           # Images, icons, etc.
│   ├── styles/           # CSS files
│   └── App.js            # Main app component
│
├── README.md             # Project documentation
├── package.json          # NPM dependencies and scripts
├── .gitignore            # Files and directories to be ignored by Git
└── ...
Contributing
Contributions are welcome! To contribute:

Fork the repository.
Create a new branch for your feature or bug fix:
bash
Copy code
git checkout -b feature-name
Make your changes and commit them:
bash
Copy code
git commit -m "Add new feature"
Push to your fork:
bash
Copy code
git push origin feature-name
Submit a Pull Request detailing your changes.
Please refer to the CONTRIBUTING.md file for more details on our contribution process.

License
This project is licensed under the MIT License - see the LICENSE.md file for details.
