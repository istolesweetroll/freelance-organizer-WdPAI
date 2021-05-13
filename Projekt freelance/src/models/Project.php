<?php


class Project
{
    private $projecttitle;
    private $projectdescription;
    private $projectstartdate;
    private $projectdeadline;

    /**
     * Project constructor.
     * @param $projecttitle
     * @param $projectdescription
     * @param $projectstartdate
     * @param $projectdeadline
     */
    public function __construct($projecttitle, $projectdescription, $projectstartdate, $projectdeadline)
    {
        $this->projecttitle = $projecttitle;
        $this->projectdescription = $projectdescription;
        $this->projectstartdate = $projectstartdate;
        $this->projectdeadline = $projectdeadline;
    }

    /**
     * @return mixed
     */
    public function getProjecttitle()
    {
        return $this->projecttitle;
    }

    /**
     * @param mixed $projecttitle
     */
    public function setProjecttitle($projecttitle): void
    {
        $this->projecttitle = $projecttitle;
    }

    /**
     * @return mixed
     */
    public function getProjectdescription()
    {
        return $this->projectdescription;
    }

    /**
     * @param mixed $projectdescription
     */
    public function setProjectdescription($projectdescription): void
    {
        $this->projectdescription = $projectdescription;
    }

    /**
     * @return mixed
     */
    public function getProjectstartdate()
    {
        return $this->projectstartdate;
    }

    /**
     * @param mixed $projectstartdate
     */
    public function setProjectstartdate($projectstartdate): void
    {
        $this->projectstartdate = $projectstartdate;
    }

    /**
     * @return mixed
     */
    public function getProjectdeadline()
    {
        return $this->projectdeadline;
    }

    /**
     * @param mixed $projectdeadline
     */
    public function setProjectdeadline($projectdeadline): void
    {
        $this->projectdeadline = $projectdeadline;
    }


}