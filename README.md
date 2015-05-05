# Generic WordPress Child Theme
A generic WordPress child theme for use with any WordPress theme.  


## What is a child theme?

You use a child theme when you want to make modifications to your theme so that any updates won't overwrite your changes.


## Prerequisites

 - You should have a working WordPress installation.  If you don't, please follow the steps to install WordPress in https://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install
 - You can use the default twenty theme like twentyfifteen or you can use any theme you like.  


## Installation

 - Download the code.
  - Download the source code for Generic WordPress Child Theme to your local computer by clicking the button that says "Download ZIP".
  - Unzip the file to your desktop.
 
 - Edit the files.
  - Open the file style.css in a text editor like Notepad.  Simply replace the word twentyfifteen (beside Template) with the name of your parent theme name.
  - Open the file functions.php and replace the word "twentyfifteen" with the name of your parent theme.
 (Depending on your parent theme, if you have additional css files, you might have to enqueue each additional css file separately.   Please read https://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme to find out how to do that.)
 
 - Upload the files.
  - Upload the folder to your web server via FTP or command line.  The files should be placed in the WordPress directory under wp-content/themes.

 - Activate the child theme.
  - Login to your WordPress admin dashboard.  
  - Go to Appearance > Themes.
  - Find your child theme.  (If you are using WordPress multisite, you need to go to the network admin dashboard to enable the theme there first.)
  - Click Activate.
 

## How to Use

 - Add your custom CSS styles to the style.css file.
 - To override a file from the parent theme, just create a file with the same name in your child theme.  See documentation for more details.
 
 
## Documentation

For more documentation on how to use a child theme, please see the official WordPress documentation:

https://codex.wordpress.org/Child_Themes
https://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme


## License

This is released under the GPL license so feel free to use!


## Help and Support

For questions, comments or suggestions, please contact me at:

 - honeysilvas@gmail.com.
 - http://www.silverhoneymedia.com
 - @honeysilvas
