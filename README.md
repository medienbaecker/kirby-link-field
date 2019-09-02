# Link field for Kirby 3

This is a link field for Kirby 3. You can conveniently insert external URLs, page links or email addresses with it.

### Preview

![Preview](https://user-images.githubusercontent.com/7975568/64112439-b3109c00-cd87-11e9-8229-0b710e2fa4cc.gif)

### Blueprint
```yaml
fields:
  link: fields/link
```

### Template example

There's a convenient `->toHref()` method you can use to automatically return the correct href:

```php
<?= $page->link()->toHref() ?>
```

Email address: `mailto:mail@medienbaecker.com`
Page link: `https://www.example.com/products/lorem-ipsum`

## Installation

Put the `kirby-link-field` folder into your `site/plugins` folder.
