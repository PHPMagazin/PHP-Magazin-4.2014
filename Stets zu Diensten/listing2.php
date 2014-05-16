namespace Shop\Entity\Wheel;

class Wheel extendsimplements WheelInterface
{
    protected $name = null;

    protected $size = null;

    function __construct($name = null, $size = null)
    {
        $this->setName($name);
        $this->setSize($name);
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
} 

interface WheelInterface
{
    public function setName($name);
    public function getName();
    public function setSize($size);
    public function getSize();
}
