# Example theme

The _Example_ theme for [Cecil](https://cecil.app) is a minimal skeleton to start creating your own theme.

## Features

- Base layout with overridable blocks (`head_css`, `header`, `content`, `footer`, `scripts`)
- List layout with pagination
- Main menu navigation
- Built-in Cecil partials (`metatags`, `paginator`)
- Translatable (French translation included)

## Installation

```bash
composer require cecil/theme-example
```

> Or [download the latest archive](https://github.com/Cecilapp/theme-example/releases/latest/) and uncompress its content in `themes/example`.

## Usage

Add `example` in the `theme` section of your `config.yml`:

```yaml
theme:
  - example
```

### Configuration

Default values:

```yaml
example:
  color: '' # accent CSS color (e.g.: `#268bd2`)
```

### Internationalization

The theme is translated in French. You can add your own translations in `translations/messages.<locale>.yml`.

## License

_Example_ is a free software distributed under the terms of the MIT license.
