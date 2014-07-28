# Zurb's Foundation Icons

This package provides a method to generate marukp that uses [Zurb's Foundation Icon Font](http://zurb.com/playground/foundation-icon-fonts-3). This was developed with Laravel in mind. If you find any bugs, please let me know via [issue report on GitHub](https://github.com/luckydevshop/foundicons/issues).

## Installation

To install through Composer, add this to your project's `composer.json` file:

    "require": {
        "luckydevshop": "1.*"
    }

After you have added this to your composer file, run a composer update in your project's root directory:

    composer update

Once that is complete you may  add two lines to your application's configuration. This will alias the term Icon to this package.

In the provider's array add this line:

    'LuckyDevShop\Foundicons\FoundiconsServiceProvider'

And in the alias array:

    'Icon' => 'LuckyDevShop\Foundicons\Icon'

## Usage

To create the markup for an icon, use the following example in your blade file:

    {{ Icon::cloud() }}

Which will produce:

    <i class="fi-cloud"></i>

If you did not use the aliases as previously mentioned, you will have to use the full namespace in your blade template:

    {{ LuckyDevShop\Foundicons\Icon::cloud() }}

### Hyphenated classes

If there is a icon class that uses a hyphen, e.g. `play-video`, you would create the markup using an underscore:

    {{ Icon::play_video() }}

Which will produce:

    <i class="fi-play-video"></i>

### Additional classes

If you need to pass additional classes to be put on the `<i>` element:

    {{ Icon::wrench('foo', 'bar') }}

Which will produce:

    <i class="fi-wrench foo bar"></i>


