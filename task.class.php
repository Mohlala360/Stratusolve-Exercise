<?php
/**
 * This class handles the modification of a task object
 */
class Task
{
    public $TaskId;
    public $TaskName;
    public $TaskDescription;
    public function __construct($Id = null)
    {
        if ($Id) {
            // This is an existing task
            $this->LoadFromId($Id);
        } else {
            // This is a new task
            $this->Create();
        }
    }
    protected function Create()
    {
        // This function needs to generate a new unique ID for the task
        // Assignment: Generate unique id for the new task
        $this->TaskId = rand(1, 1000);
        $this->TaskName = '';
        $this->TaskDescription = '';
    }
    protected function LoadFromId($Id = null)
    {
        if ($Id) {
            // Assignment: Code to load details here...
        } else {
            return null;
        }
    }

    public function Save()
    {
        //Assignment: Code to save task here
        $current_data = file_get_contents('Task_Data.txt');
        $array_data = json_decode($current_data,true);
        $extra = array (
           'TaskId' => $this->TaskId,
           'TaskName' => $this->TaskName,
           'TaskDescription' => $this->TaskDescription
        );
        $array_data[] = $extra;
        $encode = json_encode($array_data);

        file_put_contents('Task_Data.txt', $encode );
    }
    public function Delete()
    {
        //Assignment: Code to delete task here
    }
}
