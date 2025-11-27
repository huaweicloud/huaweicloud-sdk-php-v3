<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExportTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExportTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportTasks  导出任务列表。
    * page  page
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportTasks' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ExportTask[]',
            'page' => '\HuaweiCloud\SDK\IoTDA\V5\Model\Page'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportTasks  导出任务列表。
    * page  page
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportTasks' => null,
        'page' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * exportTasks  导出任务列表。
    * page  page
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportTasks' => 'export_tasks',
            'page' => 'page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportTasks  导出任务列表。
    * page  page
    *
    * @var string[]
    */
    protected static $setters = [
            'exportTasks' => 'setExportTasks',
            'page' => 'setPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportTasks  导出任务列表。
    * page  page
    *
    * @var string[]
    */
    protected static $getters = [
            'exportTasks' => 'getExportTasks',
            'page' => 'getPage'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['exportTasks'] = isset($data['exportTasks']) ? $data['exportTasks'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets exportTasks
    *  导出任务列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ExportTask[]|null
    */
    public function getExportTasks()
    {
        return $this->container['exportTasks'];
    }

    /**
    * Sets exportTasks
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ExportTask[]|null $exportTasks 导出任务列表。
    *
    * @return $this
    */
    public function setExportTasks($exportTasks)
    {
        $this->container['exportTasks'] = $exportTasks;
        return $this;
    }

    /**
    * Gets page
    *  page
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\Page|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\Page|null $page page
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

