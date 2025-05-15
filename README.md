# U Kyaw Battery

U Kyaw Battery is a template built using Plain PHP, Tailwind CSS with Flowbite, and the Bramus Router for simple routing.

## ⚠️ Known Issue (Development Mode)

In resources/app.js, the flowbite library is dynamically imported for the website's performance. and the compiled JS file is comes as
project.test/public/js which will get 404 in NgineX server.

```bash
const DOC = document;
DOC.addEventListener('DOMContentLoaded', async function () {
    // Dynamically import flowbite
    import('flowbite').catch(err => console.warn('Flowbite failed to load:', err));
});
```

To fix this issue, we have to import flowbite directly.

```bash
import 'flowbite'; // Use direct import for development
const DOC = document;
DOC.addEventListener('DOMContentLoaded', async function () {
    // Dynamically import flowbite
    // import('flowbite').catch(err => console.warn('Flowbite failed to load:', err));
});
```

## 🚀 Installation

Follow these steps to get your local development environment set up:

### 1. Clone the repository

```bash
git clone https://github.com/22HMM/U-Kyaw-Battery.git
cd u-kyaw-battery
```

### 2. Install dependencies

```bash
npm install
composer install
```

### 3. Run Development Environment & Build Production

```bash
npm run dev    # For development (live reload)
npm run build  # For production build
```
