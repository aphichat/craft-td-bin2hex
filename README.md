### TD bin2hex plugin for Craft CMS

A plugin for encode and decode variables within [Craft CMS](http://buildwithcraft.com) templates.

**Installation**

1. Unzip file 
2. Place `td_bin2hex` directory into your `craft/plugins` directory
3. Install plugin in the Craft Control Panel under Settings > Plugins

###Encode

  {{ craft.td_bin2hex.encode('test') }}

###Decode

  {{ craft.td_bin2hex.decode('74657374') }}
