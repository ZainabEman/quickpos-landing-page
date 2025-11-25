# QuickPOS Landing Page

A modern, responsive landing page for the **QuickPOS** point-of-sale (POS) system, built in PHP.

## Tech Stack

- PHP (for contact form processing)
- HTML5, CSS3
- Vanilla JS (optional for smooth scrolling / minor interactions)

## Project Structure

- `index.php` – Main landing page
- `process_contact.php` – Handles contact form submission & validation
- `thank-you.html` – Simple success page
- `assets/css/styles.css` – Main styles
- `assets/img/` – Image assets

## Branching Strategy (GitFlow-Light)

- `main` – always stable, release-ready
- `develop` – integration branch
- `feature/*` – new features
- `bugfix/*` – bug fixes

## Team Roles

- **Zainab** – Tech Lead & Lead Developer (GitHub owner)
- **Imama** – Product Owner & PM/QA (Jira, testing, reviews)

## Prerequisites

Before running the project, ensure you have the following installed:

- **PHP 7.4 or higher** (PHP 8.x recommended)
  - Check your PHP version: `php -v`
  - Download PHP: [https://www.php.net/downloads.php](https://www.php.net/downloads.php)

## Setup Instructions

### Step 1: Clone the Repository

```bash
git clone https://github.com/ZainabEman/quickpos-landing-page.git
```

### Step 2: Navigate to Project Directory

```bash
cd quickpos-landing-page
```

### Step 3: Verify PHP Installation

```bash
php -v
```

You should see your PHP version information. If not, install PHP first.

## Running on Localhost

### Method 1: PHP Built-in Server (Recommended)

The easiest way to run the project locally is using PHP's built-in development server.

#### Start the Server

```bash
php -S localhost:8000
```

Or specify a different port:

```bash
php -S localhost:3000
```

#### Access the Site

Once the server is running, open your web browser and navigate to:

- **Main Page**: [http://localhost:8000](http://localhost:8000)
- **Main Page (index.php)**: [http://localhost:8000/index.php](http://localhost:8000/index.php)

The server will continue running until you stop it (press `Ctrl+C` in the terminal).

### Method 2: Using XAMPP (Windows/Mac/Linux)

1. **Download and Install XAMPP**
   - Download from: [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Install XAMPP following the installation wizard

2. **Copy Project Files**
   ```bash
   # Copy the project folder to XAMPP's htdocs directory
   # Windows: C:\xampp\htdocs\
   # Mac/Linux: /Applications/XAMPP/htdocs/ or /opt/lampp/htdocs/
   ```

3. **Start Apache Server**
   - Open XAMPP Control Panel
   - Click "Start" next to Apache

4. **Access the Site**
   - Open browser and go to: [http://localhost/quickpos-landing-page](http://localhost/quickpos-landing-page)

### Method 3: Using WAMP (Windows Only)

1. **Download and Install WAMP**
   - Download from: [https://www.wampserver.com/](https://www.wampserver.com/)

2. **Copy Project Files**
   ```bash
   # Copy project to: C:\wamp64\www\quickpos-landing-page\
   ```

3. **Start WAMP Services**
   - Launch WAMP Server
   - Ensure Apache is running (green icon)

4. **Access the Site**
   - Open browser and go to: [http://localhost/quickpos-landing-page](http://localhost/quickpos-landing-page)

### Method 4: Using MAMP (Mac/Windows)

1. **Download and Install MAMP**
   - Download from: [https://www.mamp.info/](https://www.mamp.info/)

2. **Copy Project Files**
   ```bash
   # Mac: /Applications/MAMP/htdocs/quickpos-landing-page/
   # Windows: C:\MAMP\htdocs\quickpos-landing-page\
   ```

3. **Start MAMP**
   - Launch MAMP application
   - Click "Start Servers"

4. **Access the Site**
   - Open browser and go to: [http://localhost:8888/quickpos-landing-page](http://localhost:8888/quickpos-landing-page)

## Quick Preview Commands

### Start Development Server

```bash
# Default port 8000
php -S localhost:8000

# Custom port (e.g., 3000)
php -S localhost:3000

# With specific document root (if needed)
php -S localhost:8000 -t .
```

### Stop the Server

Press `Ctrl+C` in the terminal where the server is running.

### Check if Port is Available

```bash
# Windows PowerShell
netstat -ano | findstr :8000

# Mac/Linux
lsof -i :8000
```

## Testing the Contact Form

1. Start the PHP server using one of the methods above
2. Navigate to the contact section on the landing page
3. Fill out the contact form
4. Submit the form to test the PHP processing
5. You should be redirected to `thank-you.html` upon successful submission

## Troubleshooting

### Port Already in Use

If you get an error that the port is already in use:

```bash
# Use a different port
php -S localhost:8080
```

### PHP Not Found

If `php` command is not recognized:

- **Windows**: Add PHP to your system PATH or use the full path: `C:\php\php.exe -S localhost:8000`
- **Mac**: Install PHP via Homebrew: `brew install php`
- **Linux**: Install PHP: `sudo apt-get install php` (Ubuntu/Debian) or `sudo yum install php` (CentOS/RHEL)

### Form Not Working

- Ensure PHP server is running (not just opening the HTML file)
- Check that `process_contact.php` is in the same directory as `index.php`
- Verify PHP is properly installed and configured
