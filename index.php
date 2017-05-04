//This file tricks Heroku into hosting a static site. The PHP redirects to index.html

<?php header( 'Location: /index.html' ) ;  ?>