<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HbaseModifySettingV2Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HbaseModifySettingV2Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isReboot  是否重启
    * hbaseModifySettings  参见HBaseModifySettingV2结构说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isReboot' => 'string',
            'hbaseModifySettings' => '\HuaweiCloud\SDK\CloudTable\V2\Model\HbaseModifySettingV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isReboot  是否重启
    * hbaseModifySettings  参见HBaseModifySettingV2结构说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isReboot' => null,
        'hbaseModifySettings' => null
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
    * isReboot  是否重启
    * hbaseModifySettings  参见HBaseModifySettingV2结构说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isReboot' => 'is_reboot',
            'hbaseModifySettings' => 'hbase_modify_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isReboot  是否重启
    * hbaseModifySettings  参见HBaseModifySettingV2结构说明
    *
    * @var string[]
    */
    protected static $setters = [
            'isReboot' => 'setIsReboot',
            'hbaseModifySettings' => 'setHbaseModifySettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isReboot  是否重启
    * hbaseModifySettings  参见HBaseModifySettingV2结构说明
    *
    * @var string[]
    */
    protected static $getters = [
            'isReboot' => 'getIsReboot',
            'hbaseModifySettings' => 'getHbaseModifySettings'
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
        $this->container['isReboot'] = isset($data['isReboot']) ? $data['isReboot'] : null;
        $this->container['hbaseModifySettings'] = isset($data['hbaseModifySettings']) ? $data['hbaseModifySettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isReboot'] === null) {
            $invalidProperties[] = "'isReboot' can't be null";
        }
        if ($this->container['hbaseModifySettings'] === null) {
            $invalidProperties[] = "'hbaseModifySettings' can't be null";
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
    * Gets isReboot
    *  是否重启
    *
    * @return string
    */
    public function getIsReboot()
    {
        return $this->container['isReboot'];
    }

    /**
    * Sets isReboot
    *
    * @param string $isReboot 是否重启
    *
    * @return $this
    */
    public function setIsReboot($isReboot)
    {
        $this->container['isReboot'] = $isReboot;
        return $this;
    }

    /**
    * Gets hbaseModifySettings
    *  参见HBaseModifySettingV2结构说明
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\HbaseModifySettingV2[]
    */
    public function getHbaseModifySettings()
    {
        return $this->container['hbaseModifySettings'];
    }

    /**
    * Sets hbaseModifySettings
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\HbaseModifySettingV2[] $hbaseModifySettings 参见HBaseModifySettingV2结构说明
    *
    * @return $this
    */
    public function setHbaseModifySettings($hbaseModifySettings)
    {
        $this->container['hbaseModifySettings'] = $hbaseModifySettings;
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

