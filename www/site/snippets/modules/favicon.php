<?php foreach($site->images()->template('favicon') as $favicon){echo $favicon->resize($size)->url();}
