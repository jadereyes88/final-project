--create table
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT,
);

-- Insert some dummy data
INSERT INTO contacts (name, email, subject, message) VALUES 
('John Doe', 'john.doe@example.com', 'Inquiry', 'Hello, I have a question about your services.'),
('Jane Smith', 'jane.smith@example.com', 'Feedback', 'Your website is fantastic!'),
('Alice Johnson', 'alice.johnson@example.com', 'Support', 'I need help with my account.');

-- Check the content of the table
SELECT * FROM contacts;
