<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobEntities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobEntities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  镜像ID
    * currentTask  当前任务名称
    * imageName  镜像名称
    * processPercent  任务执行进度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'currentTask' => 'string',
            'imageName' => 'string',
            'processPercent' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  镜像ID
    * currentTask  当前任务名称
    * imageName  镜像名称
    * processPercent  任务执行进度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'currentTask' => null,
        'imageName' => null,
        'processPercent' => 'double'
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
    * imageId  镜像ID
    * currentTask  当前任务名称
    * imageName  镜像名称
    * processPercent  任务执行进度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'currentTask' => 'current_task',
            'imageName' => 'image_name',
            'processPercent' => 'process_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  镜像ID
    * currentTask  当前任务名称
    * imageName  镜像名称
    * processPercent  任务执行进度
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'currentTask' => 'setCurrentTask',
            'imageName' => 'setImageName',
            'processPercent' => 'setProcessPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  镜像ID
    * currentTask  当前任务名称
    * imageName  镜像名称
    * processPercent  任务执行进度
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'currentTask' => 'getCurrentTask',
            'imageName' => 'getImageName',
            'processPercent' => 'getProcessPercent'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['currentTask'] = isset($data['currentTask']) ? $data['currentTask'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['processPercent'] = isset($data['processPercent']) ? $data['processPercent'] : null;
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
    * Gets imageId
    *  镜像ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets currentTask
    *  当前任务名称
    *
    * @return string|null
    */
    public function getCurrentTask()
    {
        return $this->container['currentTask'];
    }

    /**
    * Sets currentTask
    *
    * @param string|null $currentTask 当前任务名称
    *
    * @return $this
    */
    public function setCurrentTask($currentTask)
    {
        $this->container['currentTask'] = $currentTask;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets processPercent
    *  任务执行进度
    *
    * @return double|null
    */
    public function getProcessPercent()
    {
        return $this->container['processPercent'];
    }

    /**
    * Sets processPercent
    *
    * @param double|null $processPercent 任务执行进度
    *
    * @return $this
    */
    public function setProcessPercent($processPercent)
    {
        $this->container['processPercent'] = $processPercent;
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

