# Login Authentication System

A complete Login, Sign Up and Sign In Authentication System developed using Frontend and Backend technologies.

## Project Information

**Prepared By:** Sounak Karmakar  
**College:** Marwari's College Ranchi  
**Course:** B.Sc (IT)  
**Session:** 2023–2026

## Technologies Used

### Frontend
- HTML
- CSS
- JavaScript

### Backend
- PHP

### Database
- MySQL

### Software Required
- XAMPP Server
- VS Code
- Web Browser

## Project Features

✅ User Registration  
✅ User Login  
✅ Secure Authentication  
✅ Dashboard Access  
✅ Logout Functionality  
✅ Database Storage  
✅ Responsive Design

## Project Structure

```
login-authentication-system/
├── index.html           # Login page
├── signup.html          # Sign up page
├── dashboard.php        # Dashboard after login
├── login.php            # Login backend
├── signup.php           # Registration backend
├── logout.php           # Logout functionality
├── style.css            # CSS styling
├── script.js            # JavaScript validation
├── db.php               # Database connection
├── database.sql         # Database schema
└── README.md            # Project documentation
```

## Installation & Setup

### Step 1: Install XAMPP Server
Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/)

### Step 2: Clone the Repository
```bash
git clone https://github.com/sonukrkarmakar2615/login-authentication-system.git
```

### Step 3: Move to XAMPP Directory
Copy the project folder to: `C:\xampp\htdocs\`

### Step 4: Start XAMPP Services
- Open XAMPP Control Panel
- Start **Apache** and **MySQL**

### Step 5: Create Database
- Open phpMyAdmin: `http://localhost/phpmyadmin`
- Create a new database named `login_system`
- Import `database.sql` file

### Step 6: Run the Project
Open your browser and navigate to:
```
http://localhost/login-authentication-system/
```

## Database Setup

The `database.sql` file creates a users table with the following structure:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);
```

## Usage

1. **Sign Up:** Create a new account with full name, email, and password
2. **Login:** Log in with your email and password
3. **Dashboard:** Access the dashboard after successful login
4. **Logout:** Click logout to exit the application

## Advantages

✨ Easy to use  
✨ Fast authentication  
✨ Secure data storage  
✨ User-friendly interface  
✨ Simple database management

## Limitations

⚠️ Basic security implementation  
⚠️ No email verification  
⚠️ No password recovery feature  
⚠️ Passwords stored in plain text (not recommended for production)

## Future Enhancements

🔒 OTP Verification  
📧 Email Authentication  
🔐 Password Encryption (bcrypt/hashing)  
👨‍💼 Admin Panel  
📱 Mobile Application Support  
🔑 Password Recovery Feature  
🛡️ SQL Injection Protection  
🔐 Session Management Improvements

## Security Recommendations

⚠️ **Important:** This project is for educational purposes. For production use:

1. **Hash Passwords:** Use `password_hash()` instead of storing plain text
   ```php
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   ```

2. **Prevent SQL Injection:** Use prepared statements
   ```php
   $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
   $stmt->bind_param("s", $email);
   ```

3. **Add Email Verification:** Send verification emails after signup

4. **Implement HTTPS:** Always use secure connections

5. **Add CSRF Protection:** Implement token validation

## Contributing

Contributions are welcome! Feel free to fork this repository and submit pull requests.

## License

This project is open source and available for educational purposes.

## Author

**Sounak Karmakar**  
B.Sc (IT) - Marwari's College Ranchi

---

**Note:** This is an educational project. For production environments, implement additional security measures including password hashing, prepared statements, and proper error handling.