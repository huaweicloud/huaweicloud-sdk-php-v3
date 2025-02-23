<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHpcShareRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHpcShareRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    * gcTime  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'gcTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    * gcTime  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'gcTime' => null
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
    * action  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    * gcTime  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'gcTime' => 'gc_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    * gcTime  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'gcTime' => 'setGcTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    * gcTime  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'gcTime' => 'getGcTime'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['gcTime'] = isset($data['gcTime']) ? $data['gcTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['gcTime'] === null) {
            $invalidProperties[] = "'gcTime' can't be null";
        }
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
    * Gets action
    *  更新文件系统的操作类型。当前仅支持取值 config_gc_time
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 更新文件系统的操作类型。当前仅支持取值 config_gc_time
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets gcTime
    *  文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @return int
    */
    public function getGcTime()
    {
        return $this->container['gcTime'];
    }

    /**
    * Sets gcTime
    *
    * @param int $gcTime 文件系统冷数据淘汰时间，单位为小时，取值范围 [1, 100000000]。系统默认为 60 小时
    *
    * @return $this
    */
    public function setGcTime($gcTime)
    {
        $this->container['gcTime'] = $gcTime;
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

