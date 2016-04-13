# Base_64_Converter

Encode and Decode images to Base64

### Author :

Themer MABROUK <br>
themer.mabrouk@proxym-it.com

### Installation :

#### Via Composer :

	$composer require base64/images-converter "dev-master"

#### Enable the bundle in the kernel:

	<?php
	// app/AppKernel.php

	public function registerBundles()
    	{
        	$bundles = array(
         	// ...
        	new images\base64ConverterBundle\imagesbase64ConverterBundle(),
         	// ...
    	);
		}
       
### Usage :

	 public function indexAction(Request $request)
   		 {
	
			//...
            
        	$base64_converter=$this->container->get('base64_converter');

        	//Encode Image to base64  
        	$encoded_img=$base64_converter->imageToBase64('path');
        
        	//Decode Image and make a file 
        	$base64_converter->Base64ToImage($encoded_img,'path/newFile');
    		
            //...
       
    	  }
