<?php
######################################
# Application cache configuration file 
######################################
return [

	#################################
	# Option to enable cache or not #
	#################################
	'enabled' => 1,

	#################################
	# Cache driver namespace 		#
	#################################	
	'namespace' => 'Cache\\Driver\\',

	#################################
	# Cache driver 					#
	#################################
	'driver' => \Package\Cache\Drivers\File::class,

	#################################
	# Cache driver interface 		#
	#################################
	'driver_interface' => \Package\Cache\Interfaces\DriverInterface::class,

	#################################
	# Cache duration period(in seconds)#
	#################################
	'duration' => 60,

	#################################
	# Cache storage location 		#
	#################################
	'storage' => 'storage/cache/'

];