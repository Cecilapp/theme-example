# Example theme

The _Example_ theme for [Cecil](https://cecil.app) is a minimal skeleton to start creating your own theme.

## Features

- Base layout with overridable blocks (`head_css`, `header`, `content`, `footer`, `scripts`)
- List layout with pagination
- Main menu navigation
- Built-in Cecil partials (`metatags`, `paginator`)
- Estimated reading time of pages, provided by the theme [plugin](#extensions)
- Translatable (French translation included)

## Requirements

Cecil 9.25 or later (plugins support).

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
  color: ''          # accent CSS color (e.g.: `#268bd2`)
  reading_time: true # displays the estimated reading time of pages
```

### Internationalization

The theme is translated in French. You can add your own translations in `translations/messages.<locale>.yml`.

## Extensions

A theme can ship PHP [extensions](https://cecil.app/documentation/developers/extend/), registered by a single [plugin](https://cecil.app/documentation/developers/extend/#plugins) declared in its `config.yml`:

```yaml
extensions:
  plugins:
    ThemeExample: ThemeExample\Plugin
```

| Class                         | Role                                                               |
|-------------------------------|--------------------------------------------------------------------|
| `ThemeExample\Plugin`         | Registers the extensions of the theme                              |
| `ThemeExample\Twig\Extension` | `example_reading_time` filter (estimated reading time, in minutes) |

Classes live in `extensions/ThemeExample/`: the file path matches the namespace. Use your own namespace (e.g.: the name of your theme), not `Cecil\` (reserved).

To ship more extensions (pages generators, output post-processors, build events subscribers…), see the [plugin example](https://github.com/Cecilapp/plugin-example).

## License

_Example_ is a free software distributed under the terms of the MIT license.
