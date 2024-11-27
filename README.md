# WHMCS Custom Hooks

## Overview

This repository contains two custom WHMCS hooks that enhance the functionality of domain pricing display and invoice numbering.

## Hooks Included

### 1. Domain Pricing Hook

#### Purpose
Retrieves domain pricing information for display in the client area domain names template.

#### Features
- Fetches TLD pricing using WHMCS's local API
- Works with the domain-names template
- Allows easy display of domain prices in templates

#### Usage in Template
In your `domain-names.tpl` template, you can display domain prices like this:
```php
{$domainpricing.pricing.com.register[1]}{$domainpricing.currency.prefix}
```

#### Configuration
- Hooks into the `ClientAreaPage` event
- Uses `currencyid` 1 (adjust as needed for your setup)

### 2. Custom Invoice Number Generator Hook

#### Purpose
Generates custom invoice numbers with a prefix (e.g., "FH-") followed by the invoice ID.

#### Features
- Automatically modifies invoice numbers when an invoice is created
- Prepends a custom prefix to the invoice number
- Uses Laravel's Capsule for database interactions

#### Example
- Invoice ID: 123
- Custom Invoice Number: FH-123

## Installation

1. Place these hooks in your WHMCS installation directory:
   - Typically in `/includes/hooks/`

2. Ensure you have the necessary WHMCS version and dependencies

## Requirements
- WHMCS Version: 7.x or 8.x
- PHP 7.2+

## Customization

### Domain Pricing Hook
- Modify `$postData['currencyid']` to match your primary currency
- Adjust the template display logic as needed

### Invoice Number Hook
- Change the prefix "FH-" to your desired prefix
- Add additional error handling in the catch block if required

## Troubleshooting
- Verify hook file permissions
- Check WHMCS error logs if hooks do not work as expected
- Ensure you're using a compatible WHMCS version

**Note:** Always backup your WHMCS installation before adding custom hooks.
