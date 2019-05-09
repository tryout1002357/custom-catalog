<?php

namespace Tryout\CustomCatalog\Model;


class ProcessQueueMsg 
{
	
		public function process($data)
		{
			echo "resopnse from RabbitMQ : - " . json_encode($data). PHP_EOL;
		}
}


?>