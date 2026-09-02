# Make Section & Column Clickable Elementor

[![WordPress](https://img.shields.io/badge/WordPress-5.2%2B-blue.svg)](https://wordpress.org/)
[![Elementor](https://img.shields.io/badge/Elementor-Compatible-orange.svg)](https://elementor.com/)
[![License](https://img.shields.io/badge/License-GPLv2%2B-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

**Make Section & Column Clickable Elementor** is a WordPress plugin that allows you to make entire **Elementor sections, columns, and containers clickable** by adding a custom URL.

Instead of requiring visitors to click on an individual button, image, heading, or other element, they can click anywhere within the configured section or column.

## ✨ Features

* ✅ Make an entire Elementor column clickable
* ✅ Make an entire Elementor section clickable
* ✅ Add a custom URL to sections and columns
* ✅ Support opening links in a new browser tab
* ✅ Support Elementor containers
* ✅ Lightweight and easy to use
* ✅ No complicated configuration required
* ✅ Secure frontend click handling
* ✅ Sanitized and escaped user-provided URLs and attributes
* ✅ CSP-friendly implementation
* ✅ Compatible with WordPress Multisite security restrictions

## 📋 Requirements

* **WordPress:** 5.2 or higher
* **Elementor:** Compatible version
* **PHP:** Compatible with your WordPress/Elementor installation

## 🚀 Installation

### Method 1: WordPress Dashboard

1. Download the plugin ZIP file.
2. Go to **WordPress Dashboard → Plugins → Add New → Upload Plugin**.
3. Upload the plugin ZIP file.
4. Click **Install Now**.
5. Activate **Make Section & Column Clickable Elementor**.

### Method 2: Manual Installation

1. Download or clone this repository.
2. Upload the plugin folder to:

```text
/wp-content/plugins/
```

3. Go to **WordPress Dashboard → Plugins**.
4. Activate **Make Section & Column Clickable Elementor**.

## ⚙️ How to Use

After installing and activating the plugin:

1. Open a page or post with the **Elementor Editor**.
2. Select the **Section, Column, or Container** you want to make clickable.
3. Open the **Layout** settings.
4. Find the **Wrapper Link** option.
5. Enter your desired URL.
6. Configure the **Open in New Tab** option if required.
7. Update/publish the page.

The entire configured section, column, or container will then act as a clickable link.

### Example

Instead of having only a button clickable:

```text
┌──────────────────────────────┐
│                              │
│       Your Content           │
│                              │
│        [ Learn More ]        │
│                              │
└──────────────────────────────┘
```

You can make the entire area clickable:

```text
┌──────────────────────────────┐
│                              │
│       Your Content           │
│                              │
│       CLICK ANYWHERE         │
│                              │
└──────────────────────────────┘
```

## 🔗 Wrapper Link

The plugin adds a **Wrapper Link** option to the Elementor layout settings.

You can use it to:

* Add an internal page URL
* Add an external website URL
* Link to a product
* Link to a landing page
* Link to any valid destination URL

## 🔐 Security

Security has been improved in recent versions of the plugin.

### Version 2.4.1 Security Improvements

* Fixed a stored XSS vulnerability related to inline JavaScript usage.
* Removed inline `onclick` handlers from frontend rendering.
* Implemented secure click handling using external JavaScript.
* Sanitized and escaped user-provided URLs and attributes.
* Improved compatibility with WordPress Multisite security restrictions.
* Improved overall frontend security hardening.
* Added a more CSP-friendly implementation.

## 🔒 Privacy Policy

**Make Section & Column Clickable Elementor** uses the [Appsero](https://appsero.com) SDK to collect telemetry data **only after the user provides confirmation**.

Appsero SDK does **not** gather data by default.

The SDK only starts collecting basic telemetry data when a user explicitly allows it through the WordPress admin notice.

The collected telemetry helps us:

* Troubleshoot problems faster
* Understand plugin usage
* Improve compatibility
* Improve the overall user experience

Integrating the Appsero SDK does **not** immediately start collecting data without user confirmation.

Learn more about Appsero's data practices:

[Appsero Privacy Policy](https://appsero.com/privacy-policy/)

## ❓ Frequently Asked Questions

### How does this plugin work?

The plugin adds a custom **Wrapper Link** field to Elementor sections, columns, and supported containers.

When you enter a URL, the selected area becomes clickable.

### Can I make an entire Elementor column clickable?

Yes. Select the column in Elementor and add your URL through the **Wrapper Link** option under the Layout settings.

### Can I make an entire Elementor section clickable?

Yes. The plugin supports clickable Elementor sections.

### Can I make an Elementor container clickable?

Yes. Container support is included.

### Can links open in a new tab?

Yes. You can enable the **Open in New Tab** option in the wrapper link settings.

### Can I use this with other plugins?

Yes. The plugin is designed to work alongside other WordPress plugins.

### What should I do if I find a bug?

If you find a bug or compatibility issue, please open an issue in this GitHub repository or use the WordPress.org support forum.

## 🤝 Contributing

Contributions are welcome!

If you find a bug, want to improve the plugin, or have an idea for a new feature, feel free to contribute.

### Contribution Process

1. Fork the repository.
2. Create a new branch:

```bash
git checkout -b feature/my-new-feature
```

3. Make your changes.
4. Commit your changes:

```bash
git commit -m "Add new feature"
```

5. Push your branch:

```bash
git push origin feature/my-new-feature
```

6. Open a Pull Request.

## ⭐ Support the Project

If you find **Make Section & Column Clickable Elementor** useful, please consider leaving a positive review on WordPress.org.

[⭐ Leave a Review on WordPress.org](https://wordpress.org/support/plugin/make-section-column-clickable-elementor/reviews/)

You can also support the project:

[☕ Buy Me a Coffee](https://www.buymeacoffee.com/riyadh1734)

## 👨‍💻 Contributors

* [saju4wordpress](https://profiles.wordpress.org/saju4wordpress/)
* **wecodexwp**

## 🔗 Links

* **WordPress Plugin:** https://wordpress.org/plugins/make-section-column-clickable-elementor/
* **WordPress Support:** https://wordpress.org/support/plugin/make-section-column-clickable-elementor/
* **Plugin Reviews:** https://wordpress.org/support/plugin/make-section-column-clickable-elementor/reviews/
* **Author Website:** http://sajuahmed.epizy.com/
* **Buy Me a Coffee:** https://www.buymeacoffee.com/riyadh1734
* **Appsero:** https://appsero.com/

## 📄 License

Make Section & Column Clickable Elementor is free software licensed under the **GNU General Public License v2.0 or later**.

See the [GPLv2 License](https://www.gnu.org/licenses/gpl-2.0.html) for more information.

## 📝 Changelog

### 2.4.5

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 2.4.1

#### 🔐 Security

* Fixed a stored XSS vulnerability caused by inline JavaScript usage.
* Removed inline `onclick` handlers from frontend rendering.
* Implemented secure click handling using external JavaScript.
* Sanitized and escaped all user-provided URLs and attributes.
* Improved compatibility with WordPress Multisite security restrictions.

#### 🛠️ Improvements

* Cleaner frontend markup.
* CSP-friendly implementation.
* Improved long-term security hardening.
* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 2.4

* Updated WordPress compatibility.

### 2.3

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 2.2

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 2.1

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 2.0

* Updated WordPress compatibility.
* Updated Elementor compatibility.
* Added Appsero SDK.

### 1.9

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.8

* Fixed PHP warning: `Trying to access array offset on value of type null`.
* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.7

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.6

* Added a new tab option in the wrapper settings menu.
* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.5

* Added automatic new-tab opening for wrapper links.
* Added wrapper links within Elementor containers.
* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.4

* Updated WordPress compatibility.
* Updated Elementor compatibility.

### 1.3

* Added GitHub contribution link.
* Added donation link for project support.
* Updated Elementor compatibility.

### 1.2

* Fixed/updated Elementor compatibility.

### 1.1

* Updated WordPress compatibility.

### 1.0

* Initial release.

## 📦 Plugin Information

| Information        | Details                                   |
| ------------------ | ----------------------------------------- |
| Plugin Name        | Make Section & Column Clickable Elementor |
| Stable Version     | 2.4.5                                     |
| Requires WordPress | 5.2+                                      |
| Tested WordPress   | 7.1                                       |
| Tested Elementor   | 4.2.3                                     |
| License            | GPLv2 or later                            |
| Contributors       | saju4wordpress, wecodexwp                 |

---

**Make Section & Column Clickable Elementor** — Make your entire Elementor sections, columns, and containers clickable with a simple wrapper link.
