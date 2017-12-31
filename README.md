# TtskchBs4FormThemeAdjusterBundle

[![Latest Stable Version](https://poser.pugx.org/ttskch/bs4-form-theme-adjuster-bundle/v/stable)](https://packagist.org/packages/ttskch/bs4-form-theme-adjuster-bundle)
[![Total Downloads](https://poser.pugx.org/ttskch/bs4-form-theme-adjuster-bundle/downloads)](https://packagist.org/packages/ttskch/bs4-form-theme-adjuster-bundle)

| | Before | After |
| --- | --- | --- |
| **Vertical layout** | ![image](https://user-images.githubusercontent.com/4360663/34511770-44b318d8-f0a1-11e7-92aa-e49a70d968ac.png) | ![image](https://user-images.githubusercontent.com/4360663/34511793-6dd2c5ba-f0a1-11e7-8b97-8d84f2bb1725.png) |
| **Horizontal layout** | ![image](https://user-images.githubusercontent.com/4360663/34511756-29962662-f0a1-11e7-8777-cfc1b318d804.png) | ![image](https://user-images.githubusercontent.com/4360663/34511720-e0633732-f0a0-11e7-8981-b1b8ed07754b.png) |

## Features

* Automatic insertion of required sign (`*`)
* Appropriate margin for checkbox has `checkbox-inline` class and radio button has `radio-inline` class
* Muted placeholder of `<select>`
* More beautiful submit button

## Requirement

* Symfony ^3.3|^4.0

## Instalation

### 1. composer require

```bash
$ composer require ttskch/bs4-form-theme-adjuster-bundle:@dev
```

### 2. Register with symfony

```php
// config/bundles.php
return [
    // ...
    Ttskch\Bs4FormThemeAdjusterBundle\Bs4FormThemeAdjusterBundle:class => ['all' => true],
];
```

### 3. Configure

```yaml
# config/packages/twig.yaml
twig:
    form_themes:
        - 'ttskch_bootstrap_4_layout.html.twig'
        - 'ttskch_bootstrap_4_horizontal_layout.html.twig'  # to be the default theme
```

### 4. Install assets

```bash
$ bin/console assets:install --symlink public
```

### 5. Add loading assets into your layout

```twig
<script src="{{ asset('bundles/ttskchbs4formthemeadjuster/js/form.js') }}"></script>
<link href="{{ asset('bundles/ttskchbs4formthemeadjuster/css/form.css') }}" rel="stylesheet">
```

If you use webpack (e.g. via [symfony/webpack-encore](https://github.com/symfony/webpack-encore)) you can add assets to your app like below.

```diff
Encore
    // ...
    .createSharedEntry('vendors', [
        'jquery',
        'bootstrap',
        'popper.js',
+       './public/bundles/ttskchbs4formthemeadjuster/js/form.js',
+       './public/bundles/ttskchbs4formthemeadjuster/scss/form.scss',
    ])
    // ...
;
```

## Getting involved

1. Modify following resources
    * `Resources/views/Form/*.twig`
    * `Resources/public/js/form.js`
    * `Resources/public/scss/form.scss`
1. Build scss with `npm run build`
