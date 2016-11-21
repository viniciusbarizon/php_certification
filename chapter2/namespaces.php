<?php
namespace zce { } // Valid.
//namespace 1zce; // Invalid.
namespace _zce_ { } // Valid.

// Not recommended use more than one namespace per file.

namespace Zce
{
	class Hello {}

	class Connection
	{
		public function getConnection ()
		{
			$dsn = 'mysql:dbname=zce;host=localhost';
			$user = 'user';
			$password = '123456';

			return new \PDO ( $dsn, $user, $password );
		}
	}
}

namespace Zce\Namespace2
{
	class Hello {}
}
?>