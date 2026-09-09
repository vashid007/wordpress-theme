# My Simple Theme - Custom WordPress Theme

A custom, lightweight, and responsive WordPress theme structured for easy development, PHP IntelliSense support, and automated Git deployment to live hosting servers.

---

## 📁 Theme Directory Structure

```text
vashid-theme/
├── .github/
│   └── workflows/
│       └── deploy.yml         # GitHub Actions automated FTP/SFTP deploy workflow
├── .vscode/
│   ├── extensions.json        # Recommended IDE extensions for PHP & WordPress
│   └── settings.json          # Workspace settings for PHP IntelliSense & WP stubs
├── 404.php                    # 404 Error page template
├── archive.php                # Categories & tags archive template
├── footer.php                 # Theme footer & wp_footer() hook
├── functions.php              # Theme setup, assets enqueueing & features
├── header.php                 # Theme header, dynamic navigation & wp_head()
├── index.php                  # Main fallback blog loop template
├── page.php                   # Static page template
├── search.php                 # Search results template
├── single.php                 # Single blog post template
├── style.css                  # Main stylesheet & theme header metadata
├── screenshot.png             # WP Dashboard theme preview image
├── .gitignore                 # Git ignore file
└── README.md                  # Project documentation
```

---

## 🛠️ Step 1: Install Required Extensions for PHP & WordPress

To enable PHP syntax highlighting, autocomplete, code formatting, and WordPress functions IntelliSense, open VS Code / IDE and install the following recommended extensions:

1. **PHP Intelephense** (`bmewburn.vscode-intelephense-client`)
   - Provides code completion for standard PHP and core WordPress functions (`get_header()`, `wp_enqueue_script()`, etc.).
2. **PHP Debug** (`xdebug.php-debug`)
   - Allows step-by-step debugging using Xdebug.
3. **WordPress Snippets & Tooling** (`johnillionis.vscode-wordpress-snippets` / `wordpresstools.wordpress-toolbox`)
   - Provides handy code snippets for common WordPress template tags.

> **Tip:** When opening this workspace, VS Code will prompt: *"Do you want to install the recommended extensions for this repository?"* Click **Install All**.

### Running PHP / WordPress Locally
- **LocalWP (Recommended):** Download [LocalWP](https://localwp.com/). Drag and drop this folder into `app/public/wp-content/themes/` to test live.
- **XAMPP / Laragon:** Place this theme folder inside your WordPress installation at `wp-content/themes/vashid-theme/`.

---

## 🐙 Step 2: Connect Git to Remote Repository (GitHub / GitLab)

Your local Git repository is already initialized. Follow these steps to connect to your GitHub repository:

1. Create a new empty repository on [GitHub](https://github.com/new) named `vashid-theme`.
2. Open your terminal in this directory and run:

```bash
git add .
git commit -m "Initial commit: Complete WordPress theme setup"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/vashid-theme.git
git push -u origin main
```

---

## 🚀 Step 3: Connect Git Repository to Live Hosting Server

There are two easy methods to automatically push your Git code to your live hosting server:

### Method A: Automated Deployment via GitHub Actions (Recommended)
This repo includes `.github/workflows/deploy.yml`. Every time you run `git push origin main`, GitHub will automatically upload updated theme files to your live hosting server.

1. Go to your GitHub repository **Settings** > **Secrets and variables** > **Actions**.
2. Add the following secrets:
   - `FTP_SERVER`: Your live server host (e.g. `ftp.yourdomain.com` or server IP).
   - `FTP_USERNAME`: Your cPanel / FTP username.
   - `FTP_PASSWORD`: Your FTP password.
   - `SERVER_THEME_DIR`: The path to theme directory on server (e.g. `public_html/wp-content/themes/vashid-theme/`).

Now, every code change pushed to GitHub will instantly update your live server!

---

### Method B: cPanel Git™ Version Control (Direct Server Connection)
If your hosting uses cPanel:
1. Log into **cPanel** > **Git™ Version Control**.
2. Click **Create**, enter your GitHub clone URL (`https://github.com/YOUR-USERNAME/vashid-theme.git`).
3. Set the repository path to `public_html/wp-content/themes/vashid-theme`.
4. Click **Create**. You can deploy changes with a single click or automatically via cPanel post-receive hooks.

---

## 🎨 Customization & Theme Development

- Edit `style.css` to update visual styles and layout colors.
- Edit `functions.php` to register custom post types, menus, or sidebars.
- Create new templates (e.g. `front-page.php`, `taxonomy.php`) as your project grows.
