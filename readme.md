Sooner than later, you will find the need to create custom form elements in order to process your data more efficiently.
This module shows a full working example of adapting a slider control (http://jqueryui.com/slider/) as a zend form element.
This allows easy validation and value retention between submits.

How to Install
--------------
+ Copy the folder "MnsFormSlider" to your vendor/module subdirectories
+ Activate the module in "application.config.php" by adding "MnsFormSlider" to the list of modules
+ Remember to install doctrine-common if you want to use the /form/annotation route
        Add the line "doctrine/common" : ">=2.1"  at the end of composer.json and run "php composer.phar update"

Examples
--------
Two test controllers have been provided so you can visualize the control right after installation:

1. /form : Uses regular ZF2 forms and input filters to render the slider element

2. /form/annotation : Uses ZF2 form annotations to render the slider element


As you begin to use the component you will realize that the effort required to setup the form infrastructure
is easily offset by level of automation that is achieved. This is especially true if you need to reuse the 
control various times in your project.

Credit where it is due:
-----------------------
This module has been largely inspired by Jurian Sluiman's detailed post on stackoverflow.com:
http://stackoverflow.com/questions/13776458/how-to-create-custom-form-element-in-zend-framework-2

Thank you!