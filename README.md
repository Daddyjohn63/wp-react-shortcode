**This was tricky to get working. I had to use the classic runtime for Babel because the `wp-react-jsx-runtime` package was not working.**

**When I ran build, jsx-runtime was added to index.js. However, in the console, I could see that it was not working. So, I had to remove the jsx-runtime and add the classic runtime to the .babelrc file.**
