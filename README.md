# Laravelazier

A lightweight Laravel package for generating Excel and PDF files with minimal setup. Supports multiple Laravel versions and requires no additional configuration out of the box.

---

## Features

- Generate PDF documents from Blade views or raw HTML
- Export data to Excel (`.xlsx`) with custom column mapping
- Flash message helpers for quick UI feedback
- Blade directives for cleaner templates
- Zero config — works immediately after installation

---

## Requirements

- PHP `^8.0 | ^8.1 | ^8.2 | ^8.3`
- Laravel `^9.0 | ^10.0 | ^11.0 | ^12.0 | ^13.0`

---

## Installation

```bash
composer require laravelazier/laravelazier
```

The service provider is auto-discovered. No need to publish anything or run any extra commands.

---

## Usage

### PDF Generation

```php
use Laravelazier\Facades\Laz;

// From a Blade view
$pdf = Laz::pdf()->view('invoices.show', ['invoice' => $invoice]);
return $pdf->download('invoice.pdf');

// From raw HTML
$pdf = Laz::pdf()->html('<h1>Hello</h1>');
return $pdf->stream();
```

### Excel Export

```php
use Laravelazier\Facades\Laz;

$data = [
    ['Name', 'Email', 'Registered'],
    ['John Doe', 'john@example.com', '2024-01-15'],
    ['Jane Smith', 'jane@example.com', '2024-03-22'],
];

return Laz::excel()->export($data, 'users.xlsx');
```

### Flash Messages

```php
// In a controller
laz_flash('Record saved successfully.', 'success');
laz_flash('Something went wrong.', 'error');
```

```blade
{{-- In your Blade layout --}}
@lazFlash
```

### Other Helpers

```php
laz_env('APP_NAME');           // safe env() wrapper
laz_now('d/m/Y');              // formatted current datetime
```

---

## Changelog

### v1.2.2
- Bug fixes and UI improvements

### v1.2.0
- Bug fixes and UI improvements

### v1.1.0
- Improved internal architecture and stability
- Updated dompdf dependency to `^3.1.6` (security fixes)
- Compatibility improvements for Laravel 12, Laravel 13 and PHP 8.3

### v1.0.0
- Initial release
- PDF and Excel generation
- Flash message helpers
- `@lazFlash` Blade directive

---

## License

MIT © Laravelazier
