<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNewNodeAutoAddSwitchRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNewNodeAutoAddSwitchRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchStatus  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    * weight  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchStatus' => 'string',
            'weight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchStatus  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    * weight  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchStatus' => null,
        'weight' => 'int32'
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
    * switchStatus  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    * weight  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchStatus' => 'switch_status',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchStatus  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    * weight  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchStatus' => 'setSwitchStatus',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchStatus  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    * weight  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchStatus' => 'getSwitchStatus',
            'weight' => 'getWeight'
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
        $this->container['switchStatus'] = isset($data['switchStatus']) ? $data['switchStatus'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switchStatus'] === null) {
            $invalidProperties[] = "'switchStatus' can't be null";
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
    * Gets switchStatus
    *  是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    *
    * @return string
    */
    public function getSwitchStatus()
    {
        return $this->container['switchStatus'];
    }

    /**
    * Sets switchStatus
    *
    * @param string $switchStatus 是否开启新增节点自动加入该Proxy。  取值范围： - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setSwitchStatus($switchStatus)
    {
        $this->container['switchStatus'] = $switchStatus;
        return $this;
    }

    /**
    * Gets weight
    *  新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 新增节点的读权重：  - 新增节点自动加入为ON，取值为0~1000。 - 新增节点自动加入为OFF，则可不输入读权重。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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

