<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorLists implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorLists';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * master  master节点支持的规格列表
    * core  core节点支持的规格列表
    * task  task节点支持的规格列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'master' => 'string[]',
            'core' => 'string[]',
            'task' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * master  master节点支持的规格列表
    * core  core节点支持的规格列表
    * task  task节点支持的规格列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'master' => null,
        'core' => null,
        'task' => null
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
    * master  master节点支持的规格列表
    * core  core节点支持的规格列表
    * task  task节点支持的规格列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'master' => 'master',
            'core' => 'core',
            'task' => 'task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * master  master节点支持的规格列表
    * core  core节点支持的规格列表
    * task  task节点支持的规格列表
    *
    * @var string[]
    */
    protected static $setters = [
            'master' => 'setMaster',
            'core' => 'setCore',
            'task' => 'setTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * master  master节点支持的规格列表
    * core  core节点支持的规格列表
    * task  task节点支持的规格列表
    *
    * @var string[]
    */
    protected static $getters = [
            'master' => 'getMaster',
            'core' => 'getCore',
            'task' => 'getTask'
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
        $this->container['master'] = isset($data['master']) ? $data['master'] : null;
        $this->container['core'] = isset($data['core']) ? $data['core'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
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
    * Gets master
    *  master节点支持的规格列表
    *
    * @return string[]|null
    */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
    * Sets master
    *
    * @param string[]|null $master master节点支持的规格列表
    *
    * @return $this
    */
    public function setMaster($master)
    {
        $this->container['master'] = $master;
        return $this;
    }

    /**
    * Gets core
    *  core节点支持的规格列表
    *
    * @return string[]|null
    */
    public function getCore()
    {
        return $this->container['core'];
    }

    /**
    * Sets core
    *
    * @param string[]|null $core core节点支持的规格列表
    *
    * @return $this
    */
    public function setCore($core)
    {
        $this->container['core'] = $core;
        return $this;
    }

    /**
    * Gets task
    *  task节点支持的规格列表
    *
    * @return string[]|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param string[]|null $task task节点支持的规格列表
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
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

