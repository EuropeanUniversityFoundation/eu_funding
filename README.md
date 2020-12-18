# EU funding blocks

Drupal module providing EU funding banner and disclaimer blocks

See the [Erasmus+: Visual identity and logos](https://eacea.ec.europa.eu/about-eacea/visual-identity-and-logos-eacea/erasmus-visual-identity-and-logos_en) for more information.

## Installation

Include the repository in your project's `composer.json` file:

    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/EuropeanUniversityFoundation/eu_funding"
        }
    ],

Then you can require the package as usual:

    composer require euf/eu_funding

Finally, install the module:

    drush en eu_funding

## Usage

The new blocks with the text disclaimer and the image banner can be placed normally in the *Block layout* page.

### Accessibility

In case the image banner is placed over a dark background, the block can be configured as *High contrast* to use the same image banner with white letters for proper readability.

The image banner includes the same words as alt text in the `img` element.

### Theming

The text disclaimer font family is set to *Arial*, in line with the visual identity. See the `css/block.css` file for the styles to be overridden in a custom theme.

## NOTICE

Including this module in your site will **NOT** provide actual EU funding to your project.
