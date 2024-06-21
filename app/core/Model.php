<?

namespace app\core;

use app\core\Db;

abstract class Model
{
  protected $db;
  public function __construct()
  {
    $this->db = new Db();
  }
}
