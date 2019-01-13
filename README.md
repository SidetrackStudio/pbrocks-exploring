# PBrocks Exploring

Exploring the Blocks API creates a basic WP Block and uses PHP to deliver a shortcode with properties.

* Fork this repo
* Clone a copy to your plugins folder
* Activate the plugin
* Edit the code as you like and check how things change.

## Branches show different configurations

	* Master has the full code
	* Shortcode can be used with the 3 values defined
	* Result is same as when editor is used
	* Branches show different configurations

### Step 1

	* Shows one input area
	* Text is editable in the editor

### Step 2

	* Shows one input area
	* Text is editable in the sidebar (inspector)

### Step 3

	* Shows 3 input areas
	* Text is editable in the sidebar (inspector)

### Wont Work

	* Throws an error in the editor
	* Won't pass JS validation
	* Shortcode still works because it is PHP only
	* Problem is with the shortcode echoing, not returning, its data

