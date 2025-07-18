#  what are Wordpress Hooks
### Hooks allow your code to connect into WordPress at specific points without editing core files. They're categorized into two types: Actions and Filters. 
*NOTE “Filters require returning a value, actions do not.”* 
*ACTION is used when something we need add or create And FILTER is used when beed to do changes in existing thing in website*

# Action hook
### An Action is a hook point in WordPress where you can run custom code at specific moments during execution—like when a post is published or when the footer is output

### item  Behavior: Your callback function performs tasks (e.g., echo HTML, run database operations), but does not return a value.


```
function mysite_add_footer_message() {
  echo '<p>Thanks for visiting my site!</p>';
}
add_action( 'wp_footer', 'mysite_add_footer_message' );
```

 ### When to use: Use when you want to do something—like adding scripts, enqueuing styles, logging data, sending emails, or inserting content.

#  Filter Hook 
### A Filter is a hook that gives you the power to modify data (strings, arrays, etc.) as it passes through WordPress—before it’s saved or displayed
### Behavior: Your callback must return a value—it takes in something (like post content), changes it (or not), and returns the (possibly modified) version 

```
function my_excerpt_length( $length ) {
  return 20; // show only 20 words
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

```
### Use whenever you need to alter data—like modifying excerpts, titles, content, or CSS class arrays.

# Summary
### “Action is 1‑way … no outcomes. Filter is 2‑ways, send and return the outcomes.” 
* Use Action Hooks when you want to execute something but don’t need to alter return data.
* Use Filter Hooks when you want to intercept and modify data, returning the final version.


