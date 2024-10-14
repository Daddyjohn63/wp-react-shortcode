**This was tricky to get working. I had to use the classic runtime for Babel because the `wp-react-jsx-runtime` package was not working.**

**When I ran build, jsx-runtime was added to index.js. However, in the console, I could see that it was not working. So, I had to remove the jsx-runtime and add the classic runtime to the .babelrc file.**

**Have since found this**
https://make.wordpress.org/core/2024/06/06/jsx-in-wordpress-6-6/

**I have since learnt that @wordpress/scripts is really meant for creating Gutenberg blocks.**

**Since this app, does not involve blocks but stands alone, rendering react directly via a shortcode, then importing React and ReactDOM would have been acceptable.**

**I may refactor this in the future accordingly**

**I would welcome any feedback on this.**
