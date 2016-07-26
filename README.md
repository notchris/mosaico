# Backend for saving Mosaico Templates

Note: You must still build Mosaico normally.

- Save template data to MySQL Database
- Edit Template names on creation / manage templates
- Uses PHPMailer to send emails
- Migrated Export / Testing away from localStorage

This is a modified version of Mosaico that migrates template data to be saved to MySQL using the Medoo Library. You will need to setup a MySQL database, I've provided a screenshot of the setup I'm using for this example.

https://i.imgur.com/6eV1c1d.png

For more information about Medoo check out: http://medoo.in/

# Other notes

Additional Files: list.php, save.php, update.php, data.php

Edited Files: index.html, editor.html

Be sure to update: list.php, save.php, update.php, data.php with your Database information AND the AJAX requests in editor.html, index.html with your paths to the PHP files. I will consolidate these files and the requests to them soon.

# Contact me

If you have questions, feel free to message me and I will get back to you ASAP. I also hang out in ##frontend on IRC under the handle 'notchris'.


