# Calculator — PHP

An arithmetic calculator that submits an HTML form to the server and returns the
result. The whole point is that nothing is computed in the browser: the form
posts, PHP does the work, the page comes back with the answer.

## Files

| File | Role |
|---|---|
| `index.html` | The form: two numbers and an operation. |
| `operaciones.php` | Reads the POST, validates, computes, reports. |
| `suma.php` | Addition on its own, kept as the simplest case. |

## Running it

Serve the directory with any PHP-capable server:

```sh
php -S localhost:8000
```

Then open `http://localhost:8000/index.html`.

## What it handles

Input is coerced with `floatval`, so a non-numeric field becomes `0` rather than
an error. Division checks for a zero divisor before dividing and returns a
message instead of a warning. State survives the round trip through the session,
which is why `session_start()` is the first call in `operaciones.php`.
