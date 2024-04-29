<?php
class JsonFileManager
{
    private $filePath;

    public function __construct($filePath)
    {   
        $this->filePath = $filePath;
    }

    /**
     * Read data from the JSON file.
     *
     * @return mixed
     */
    public function read()
    {
        if (file_exists($this->filePath)) {
            $data = file_get_contents($this->filePath);
            return json_decode($data);
        }
        return [];
    }

    /**
     * Write data to the JSON file.
     *
     * @param array $data
     * @return bool
     */
    // public function write(array $data)
    // {
    //     $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    //     $result = file_put_contents($this->filePath, $jsonData);

    //     return $result !== false;
    // }
}