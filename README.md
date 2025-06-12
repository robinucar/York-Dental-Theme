# York Dental Theme

A custom WordPress theme built for **The York Dental Suite** as part of a Full Stack Developer technical challenge.

## 🛠 Tech Stack

- PHP (WordPress Theme Development)
- HTML5 / SCSS
- Custom theme (from scratch)
- LocalWP (local WordPress environment)
- Git & GitHub for version control

## ✅ Features (WIP)

- [x] Custom theme initialization
- [x] Responsive header
- [ ] Hero section
- [ ] Footer with social icons
- [ ] Form section
- [ ] One additional custom section
- [ ] ACF (Advanced Custom Fields) for dynamic content
- [ ] WCAG 2.1 AA accessibility compliance

## 🚀 Local Development Setup

> This theme runs inside a WordPress installation. I recommend using [LocalWP](https://localwp.com/) for local setup.

### Steps:

1. Install LocalWP and create a new site (e.g., "York Dental")
2. Open the site folder → `app/public/wp-content/themes/`
3. Clone or copy this theme folder into the `themes/` directory:
   ```bash
   git clone https://github.com/robinucar/York-Dental-Theme.git
   ```

## 🧶 Sass Setup

I use Sass for styling with a modular structure.

### Structure

- `main.scss`: Main entry point
- `_header.scss`: Partial for header styles

### Compile Sass

To compile manually:

```
npx sass assets/scss/main.scss assets/css/main.css
```

✍️ Author
Robin Winters
