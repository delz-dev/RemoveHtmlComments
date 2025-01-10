# Remove HTML Comments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/diffrentdigital/remove-html-comments.svg?style=flat-square)](https://packagist.org/packages/diffrentdigital/remove-html-comments)
[![Total Downloads](https://img.shields.io/packagist/dt/diffrentdigital/remove-html-comments.svg?style=flat-square)](https://packagist.org/packages/diffrentdigital/remove-html-comments)
[![License](https://img.shields.io/packagist/l/diffrentdigital/remove-html-comments.svg?style=flat-square)](LICENSE)

This Statamic add-on removes HTML comments (`<!-- ... -->`) from responses before they are sent to the browser, optimizing your website's output.

---

## Features

- Automatically strips all HTML comments from `text/html` responses.
- Lightweight middleware with minimal performance overhead.
- Seamlessly integrates with Statamic.

---

## Installation

You can install the package via Composer:

```bash
composer require diffrentdigital/remove-html-comments
```

---

## Usage

Once installed, the add-on is automatically registered in your Statamic application. It runs as middleware for all routes in the `web` middleware group.

### How It Works

- The middleware processes all HTML responses.
- It identifies HTML comments using a regex pattern and removes them.

No additional configuration is required. 🎉

---

## Performance Considerations

This add-on is designed to have minimal impact on performance. It only processes responses with the `Content-Type` header set to `text/html`.

### Profiling

If you experience any performance concerns, you can use Laravel Debugbar or other profiling tools to measure middleware execution time.

---

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

---

## Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/delz-dev/remove-html-comments/issues).

### To Contribute:

1. Fork the repository.
2. Make your changes in a feature branch.
3. Submit a pull request.

---

## Acknowledgments

This add-on was created by [delz-dev](https://github.com/delz-dev).

---

## Functionality

This add-on removes HTML comments from responses, but only when the application is running in the production environment.

## Support

If you find this add-on useful, please consider starring the repository on GitHub or sharing it with others. 😊
