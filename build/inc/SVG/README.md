# SVG Component
The SVG component is intended to ease the handling of SVG images in the WordPress
enviroment. It provides two exposed plugin functions, that read, parse and output
the SVG code in the desired manner.

## Relative Paths
The paths passed to the functions are relative paths based on the active theme or
current plugin. The component first looks into the theme folder to find the file
and then in the plugin folder.


## Functions

### get_svg( (sting) $path, (array) $arguments )
The `get_svg` returns the SVG DOM for the file in the given path.

* `(string) $path` - The given path relative to the current theme or plugin.
* `(array) $arguments` - An array of arguments to modify the behavior of the function.
  - `(array) $attributes` - An array of HTML attributes applied to the returned SVG tag. Valid array keys are 'class', 'id', 'width', 'height', 'fill'.
  - `(string) $return_type` - The desired return type for the SVG DOM. Valid inputs are 'tag' and 'base64'. Defaults to 'tag'.

### get_admin_menu_icon( (string) $path )
A wrapper for the `get_svg` function that provides the fitting arguments to use
SVGs in admin menu items.

* `(string) $path` - The given path relative to the current theme or plugin.
