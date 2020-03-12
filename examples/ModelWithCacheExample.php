<?
/**
 * Example demonstration of we can use the $usesCache property to autocache rows returned for ->getRows() method
 */
class ModelWithCacheExample extends Model
{
    use \Sushi\Sushi;

    protected $usesCache = true;
    
    public function getRows()
    {
        return [
            ['id' => 1, 'label' => 'admin'],
            ['id' => 2, 'label' => 'manager'],
            ['id' => 3, 'label' => 'user'],
        ];
    }
}