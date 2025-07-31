<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperPrivilegedProcessRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperPrivilegedProcessRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privilegedProcessPathList  特权进程路径集合
    * privilegedChildStatus  特权进程子进程可信状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privilegedProcessPathList' => 'string[]',
            'privilegedChildStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privilegedProcessPathList  特权进程路径集合
    * privilegedChildStatus  特权进程子进程可信状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privilegedProcessPathList' => null,
        'privilegedChildStatus' => null
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
    * privilegedProcessPathList  特权进程路径集合
    * privilegedChildStatus  特权进程子进程可信状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privilegedProcessPathList' => 'privileged_process_path_list',
            'privilegedChildStatus' => 'privileged_child_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privilegedProcessPathList  特权进程路径集合
    * privilegedChildStatus  特权进程子进程可信状态
    *
    * @var string[]
    */
    protected static $setters = [
            'privilegedProcessPathList' => 'setPrivilegedProcessPathList',
            'privilegedChildStatus' => 'setPrivilegedChildStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privilegedProcessPathList  特权进程路径集合
    * privilegedChildStatus  特权进程子进程可信状态
    *
    * @var string[]
    */
    protected static $getters = [
            'privilegedProcessPathList' => 'getPrivilegedProcessPathList',
            'privilegedChildStatus' => 'getPrivilegedChildStatus'
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
        $this->container['privilegedProcessPathList'] = isset($data['privilegedProcessPathList']) ? $data['privilegedProcessPathList'] : null;
        $this->container['privilegedChildStatus'] = isset($data['privilegedChildStatus']) ? $data['privilegedChildStatus'] : null;
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
    * Gets privilegedProcessPathList
    *  特权进程路径集合
    *
    * @return string[]|null
    */
    public function getPrivilegedProcessPathList()
    {
        return $this->container['privilegedProcessPathList'];
    }

    /**
    * Sets privilegedProcessPathList
    *
    * @param string[]|null $privilegedProcessPathList 特权进程路径集合
    *
    * @return $this
    */
    public function setPrivilegedProcessPathList($privilegedProcessPathList)
    {
        $this->container['privilegedProcessPathList'] = $privilegedProcessPathList;
        return $this;
    }

    /**
    * Gets privilegedChildStatus
    *  特权进程子进程可信状态
    *
    * @return bool|null
    */
    public function getPrivilegedChildStatus()
    {
        return $this->container['privilegedChildStatus'];
    }

    /**
    * Sets privilegedChildStatus
    *
    * @param bool|null $privilegedChildStatus 特权进程子进程可信状态
    *
    * @return $this
    */
    public function setPrivilegedChildStatus($privilegedChildStatus)
    {
        $this->container['privilegedChildStatus'] = $privilegedChildStatus;
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

