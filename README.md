# Eduford Org — Education Website

A responsive, multi-page educational institution website built with pure HTML, CSS, and vanilla JavaScript. Hosted on GitHub Pages.

🌐 **Live Demo:** [dhavalantala.github.io/education_website](https://dhavalantala.github.io/education_website/)

---

## 📸 Preview

The site features a clean, modern design with a hero section, course listings, global campus highlights, facilities showcase, and student testimonials.

---

## 📁 Project Structure

```
education_website/
├── index.html        # Home page — hero, courses, campus, facilities, testimonials
├── about.html        # About page — institution overview
├── course.html       # Courses page — program listings & facilities
├── blog.html         # Blog page — articles and updates
├── contact.html      # Contact page — inquiry form
├── file-handler.php  # PHP backend — handles contact form submissions
├── style.css         # Global stylesheet
└── images/           # All image assets (logo, campus photos, facility icons, etc.)
```

---

## 🚀 Features

- **Responsive Navigation** — mobile hamburger menu with JavaScript toggle
- **Multi-page Layout** — Home, About, Course, Blog, and Contact pages
- **Course Listings** — Intermediate, Degree, and Post Graduation programs
- **Global Campus Section** — London, New York, and Washington campuses
- **Facilities Showcase** — Library, Playground, and Cafeteria highlights
- **Student Testimonials** — carousel-style testimonial section
- **Contact Form** — PHP-powered form submission via `file-handler.php`
- **Social Links** — Facebook, WhatsApp, Instagram, Twitter, LinkedIn in footer

---

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Page structure and content |
| CSS3 | Styling and responsive layout |
| JavaScript (Vanilla) | Mobile menu toggle |
| PHP | Contact form backend |
| Google Fonts (Poppins) | Typography |
| Bootstrap Icons | Icon library |

---

## 🏃 Getting Started

### View Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/dhavalantala/education_website.git
   cd education_website
   ```

2. Open `index.html` directly in your browser for a static preview.

3. For the contact form to work, serve the project through a PHP-enabled web server (e.g., XAMPP, WAMP, or PHP built-in server):
   ```bash
   php -S localhost:8000
   ```
   Then visit `http://localhost:8000` in your browser.

### Deploy to GitHub Pages

The site is already configured for GitHub Pages. Push to the `main` branch and enable GitHub Pages in your repository settings under **Settings → Pages → Source: main branch**.

---

## 📄 Pages Overview

### `index.html` — Home
The landing page with a full-screen hero section, course overview cards, a global campus gallery (London, New York, Washington), facilities section, and student testimonials.

### `about.html` — About Us
An overview of the institution with a two-column layout featuring descriptive text and a supporting image.

### `course.html` — Courses
Detailed listing of all offered programs (Intermediate, Degree, Post Graduation) plus the full facilities section.

### `blog.html` — Blog
Articles and news from the institution.

### `contact.html` — Contact
A contact form that submits to `file-handler.php` for server-side processing.

---

## 🤝 Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request.

1. Fork the repository
2. Create a new branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m "Add your feature"`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a Pull Request

---

## 👨‍💻 Author

**Dhaval Antala**
- GitHub: [@dhavalantala](https://github.com/dhavalantala)

---

## 📜 License

This project is open source and available under the [MIT License](LICENSE).
