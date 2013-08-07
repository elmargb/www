<?PHP
#
# Prints out the DICOM tags in a file specified on the command line
#

require_once('../class_dicom.php');

$file = '31074716';

if(!file_exists($file)) {
  print "$file: does not exist\n";
  exit;
}

$d = new dicom_tag;
$d->file = $file;
print "TEST: " . $d->load_tags();

print "<pre>";

print_r($d->tags);

$name = $d->get_tag('0010', '0010');
print "Name: $name\n";

?>