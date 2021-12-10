---
**NOTE:** For php <=7.1 see v1.0
___

# ObjectGuid to base64 encode 
This package only provides a function to encode an Object Guid to base64.

# Problem 
Microsoft azure immutable id is an encoding of the Object Guid to base64. but if you tray to `encode` the object guid directly it will preduse a not acceptable value or incorrect to the immutable id in microsoft azure. see example below

```php
echo base64_encode("7ea2e22f-31cb-4c97-89eb-1b4501aafe40"); 
// output is "N2VhMmUyMmYtMzFjYi00Yzk3LTg5ZWItMWI0NTAxYWFmZTQw"
```
So this packge solves the problem.

# Installation

```sh
composer require abublihi/guid-to-base64
```

# Usage

```php
use Abublihi\Guid\ToBase64;

$toBase64 = new ToBase64("7ea2e22f-31cb-4c97-89eb-1b4501aafe40");
echo $toBase64->getBase64(); // output "L+Kifssxl0yJ6xtFAar+QA=="
```

```php
use Abublihi\Guid\ToBase64;

echo ToBase64::encode("748b2d72-706b-42f8-8b25-82fd8733860f"); // output "ci2LdGtw+EKLJYL9hzOGDw=="
```

# Requirements

This package deeply depends on `ramsey/uuid` package.

# References

[Azure AD Connect: Design concepts](https://docs.microsoft.com/en-us/azure/active-directory/hybrid/plan-connect-design-concepts)

# Credits

- Thanks to [`Martijn Pieters`](https://github.com/mjpieters) for the discussion in [discuss.python.org](https://discuss.python.org/t/azuread-uid-to-immutable-id/2637/15).
- [@almodhfer](https://github.com/almodhfer) Thank for helping me.
