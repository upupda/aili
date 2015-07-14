<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>
  <head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Enriqueta:400,700' rel='stylesheet' type='text/css'>
    <?php print $styles; ?>
    <script src="//www.parsecdn.com/js/parse-1.2.19.min.js"></script>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <?php print $scripts; ?>
    <script type="text/javascript">
      Parse.initialize("txbGxYg2RHojX1e1An0dKU3jlgZlGfQGTlvwQLID", "6iWohNXWkDl7cvEbmRFpzRDmm2PULqYbYhXvR4cO");
      var PageVisit = Parse.Object.extend("PageVisit");
      var pv = new PageVisit();
      pv.save({type: "body"});
      Parse.Analytics.track('read', {analytics: "body"});
    </script>

  </body>
</html>
