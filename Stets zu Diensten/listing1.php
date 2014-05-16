namespace Shop\Entity\Bell;

class PinkPrincessBell implements BellInterface
{
    protected $name = 'princess';

    protected $colour = 'pink';

    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    public function getColour()
    {
        return $this->colour;
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

interface BellInterface
{
    public function setColour($colour);
    public function getColour();
    public function setName($name);
    public function getName();
} 
