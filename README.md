# 📰 DispatchDaily - News Portal Website

**DispatchDaily** is a dynamic web-based platform designed to provide users with a centralized and efficient way to access and engage with news content from various sources. This PHP-MySQL based news portal allows authors to write and manage news articles, while viewers can browse, read, and bookmark news across multiple categories.

---

## 🚀 Features

- 📰 **Categorized News**: Browse articles by category:
  - Business
  - Education
  - Entertainment
  - Food
  - Health
  - Politics
  - Sports
  - Technology

- 🔍 **Advanced Search**: Quickly find articles using the search functionality.

- 🔖 **Bookmarks**: Save your favorite articles to read later.

- 🧭 **User-Friendly Interface**: Clean and intuitive design for smooth navigation.

- ✍️ **Admin Panel**: Secure area for authors/admins to post, edit, and delete news articles.

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (`news-portal`)
- **Web Server**: Apache (XAMPP / WAMP / LAMP recommended)


---

## 🧑‍💻 How to Run the Project

### ✅ Prerequisites

- Install **XAMPP**, **WAMP**, or **LAMP** stack.
- Make sure **Apache** and **MySQL** services are running.

### 📝 Setup Instructions

1. **Clone or Download the Repository**


2. **Move Project Folder**
Place the project folder (`DispatchDaily/`) inside your local server directory:
- For XAMPP: `C:\xampp\htdocs\`
- For WAMP: `C:\wamp\www\`

3. **Import the Database**
- Open **phpMyAdmin**: `http://localhost/phpmyadmin`
- Create a new database named `news-portal`
- Import the `news-portal.sql` file located in the project root.

4. **Configure Database Connection**
- Open `includes/db.php` (or wherever your DB config is).
- Make sure your DB credentials match:
  ```php
  $conn = new mysqli("localhost", "root", "", "news-portal");
  ```

5. **Run the Project**
- Open your browser and go to:
  ```
  http://localhost/DispatchDaily/
  ```

---

## 🙌 Credits

Developed by [Your Name]  
Special thanks to open-source communities for resources and support.

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).



