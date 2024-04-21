-- create contacts table
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message VARCHAR(1000)  
);

-- insert dummy data into contacts table
INSERT INTO contacts (name, email, subject, message) VALUES 
('Brad Pitt', 'brad.pitt@example.com', 'Inquiry', 'Hello, I have a question about your services.'),
('Jessica Alba', 'jessica.alba@example.com', 'Feedback', 'Great service! Thank you.'),
('Margot Robbie', 'margot.robbie@example.com', 'Support', 'Can we get some help?');

--- create projects table 
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(255) NOT NULL,
    camera_type VARCHAR(1000),  
    image_url VARCHAR(100) 
);

-- insert dummy data into projects table
INSERT INTO projects project_name, camera_type, image_url) VALUES 
('Roses', 'Canon EOS 541', 'http://random_url.com'),
('Running', 'Canon EOS 541', 'http://random_url.com'),
('Batman', 'Canon EOS 541', 'http://random_url.com');;

