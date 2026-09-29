# R7 repository context: FinalPHP

This is the 2017 Retnuh Co. clothing catalog site. `index.php` builds the landing page; `products.php`, `tshirts.php`, and `sweatshirts.php` build catalog views. The pages use shared PHP fragments under `inc/` for navigation, product markup, footer, and script/style links. `lib/css/` holds site styling, `lib/js/` page interactions, `lib/slick/` the included Slick carousel, and `lib/images/` product and slideshow assets.

The product names, prices, and image paths are written into the PHP fragments, especially `inc/allproducts.php`, `inc/alltshirts.php`, and `inc/allsweatshirts.php`. No database or checkout flow is established by the files inspected. `products.php` links to `hoodies.php` and `shoes.php`, which are absent from this revision.

See [decisions.md](decisions.md) for code-backed structure and [changes/2017-09.md](changes/2017-09.md) for the recorded commit. Coverage: the sole default-branch commit, `16739f5ef6b64916c2cc3dc106f5f69d8ce593c8`.
