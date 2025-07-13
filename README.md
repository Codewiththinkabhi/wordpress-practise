# Wordpress Hooks
### Hooks allow your code to connect into WordPress at specific points without editing core files. They're categorized into two types: Actions and Filters. 

# Action 
### An Action is a hook point in WordPress where you can run custom code at specific moments during execution—like when a post is published or when the footer is output

### item  Behavior: Your callback function performs tasks (e.g., echo HTML, run database operations), but does not return a value.


```
function my_custom_action() {
  // Example: send an email or output something
}
add_action( 'init', 'my_custom_action' )<br>
```

 ### When to use: Use when you want to do something—like adding scripts, enqueuing styles, logging data, sending emails, or inserting content.
