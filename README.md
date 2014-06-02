WP Tabs
=======

version **0.0.1**

WordPress plugin for creating tabbed content using shortcodes.

**EXAMPLE USAGE**
```
[tabs]
[tab title="Brad Pitt"]
Donec eget odio eget leo egestas feugiat. Etiam vel ipsum nec dolor rhoncus bibendum. Fusce at
mattis nibh. Nam vestibulum ut nulla at euismod.Nullam egestas placerat turpis ut tristique.
Maecenas eget velit nec nisi fermentum ornare. Phasellus vehicula mauris vel eros dapibus, non
varius lorem lacinia. Praesent in elit erat.
[/tab]

[tab title="Angelina Jolie"]
Curabitur varius rhoncus sodales. Integer posuere magna at congue tincidunt. Cras interdum, lorem
at tincidunt sagittis, diam lacus faucibus enim, nec tristique elit velit at mauris. Duis metus neque,
luctus ut tortor non, lacinia luctus sapien. Nunc sit amet lorem eros. Curabitur sed fringilla massa.
Pellentesque et mauris diam. Sed ac bibendum sem, id pulvinar augue. Vivamus id sem dignissim, ornare
ante vitae, pharetra lectus.
[/tab]
[/tabs]
```

### Required Parameters

`title` : specifies the title of the tab for the content.

### Optional Parameters

`show_title`: boolean value, if set to `"true"` the title you specify will display in an `<h3>` element before your tab content with the class `tab-title`. Default is set to `"false"`.   
Example: `[tab title="George Clooney" show_title="true"]`

## History

**0.0.1** 

* Original Release *6/2/2014*
* Bare bones plugin with grunt development environment

## License

[GNU General Public License](https://github.com/cmaseattle/wp-tabs/blob/master/LICENSE.txt)

