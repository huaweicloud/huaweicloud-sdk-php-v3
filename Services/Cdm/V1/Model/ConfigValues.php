<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigValues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configs  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    * extendedConfigs  extendedConfigs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configs' => '\HuaweiCloud\SDK\Cdm\V1\Model\Configs[]',
            'extendedConfigs' => '\HuaweiCloud\SDK\Cdm\V1\Model\ExtendedConfigs'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configs  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    * extendedConfigs  extendedConfigs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configs' => null,
        'extendedConfigs' => null
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
    * configs  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    * extendedConfigs  extendedConfigs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configs' => 'configs',
            'extendedConfigs' => 'extended-configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configs  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    * extendedConfigs  extendedConfigs
    *
    * @var string[]
    */
    protected static $setters = [
            'configs' => 'setConfigs',
            'extendedConfigs' => 'setExtendedConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configs  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    * extendedConfigs  extendedConfigs
    *
    * @var string[]
    */
    protected static $getters = [
            'configs' => 'getConfigs',
            'extendedConfigs' => 'getExtendedConfigs'
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
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['extendedConfigs'] = isset($data['extendedConfigs']) ? $data['extendedConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configs'] === null) {
            $invalidProperties[] = "'configs' can't be null";
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
    * Gets configs
    *  源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Configs[]
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Configs[] $configs 源连接参数、目的连接参数和作业任务参数，它们的配置数据结构相同，其中“inputs”里的参数不一样，详细请参见configs数据结构说明
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
        return $this;
    }

    /**
    * Gets extendedConfigs
    *  extendedConfigs
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ExtendedConfigs|null
    */
    public function getExtendedConfigs()
    {
        return $this->container['extendedConfigs'];
    }

    /**
    * Sets extendedConfigs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ExtendedConfigs|null $extendedConfigs extendedConfigs
    *
    * @return $this
    */
    public function setExtendedConfigs($extendedConfigs)
    {
        $this->container['extendedConfigs'] = $extendedConfigs;
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

