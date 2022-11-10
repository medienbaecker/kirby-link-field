# Link field for Kirby 3

This is a link field for Kirby 3. You can conveniently insert external URLs, page links or email addresses with it.

### Preview

![Preview](https://user-images.githubusercontent.com/7975568/201041984-6d8ce3a4-9d86-4340-96d4-637aec99f816.gif)

### Blueprint
```yaml
fields:
  link: fields/link
```

### Template example

There's a convenient `->toHref()` method you can use to automatically return the correct href:

```php
<?php if($linkObject = $page->link()->toObject()): ?>
  <a href="<?= $page->link()->toHref() ?>"><?= $linkObject->label() ?></a>
<?php endif ?>
```

Email address: `mailto:mail@example.com`
Page link: `https://www.example.com/products/lorem-ipsum`
Url: `https://www.example.com`

## Installation

Put the `kirby-link-field` folder into your `site/plugins` folder.
