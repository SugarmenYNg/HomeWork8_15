<?php
declare(strict_type = 1);

class Worker
{
    private $name;
    private $age;
    private $salary;

    /**
     * Worker constructor.
     * @param string $name
     * @param int $age
     * @param float $salary
     */
    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
        $this->salary = $salary;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $age
     * @return $this
     */
    public function setAge(int $age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param float $salary
     * @return $this
     */
    public function setSalary(float $salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param int $age
     * @return bool
     */
    private function checkAge(int $age): bool
    {
        $result = false;
        if ($age >=1 && $age <= 100) {
          $result = true;
        }
        
        return $result;
    }
}
