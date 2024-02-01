<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthQuotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthQuotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quota  配额大小。
    * used  已使用值。
    * type  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quota' => 'int',
            'used' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quota  配额大小。
    * used  已使用值。
    * type  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quota' => null,
        'used' => null,
        'type' => null
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
    * quota  配额大小。
    * used  已使用值。
    * type  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quota' => 'quota',
            'used' => 'used',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quota  配额大小。
    * used  已使用值。
    * type  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @var string[]
    */
    protected static $setters = [
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quota  配额大小。
    * used  已使用值。
    * type  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @var string[]
    */
    protected static $getters = [
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'type' => 'getType'
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
    const TYPE_GCB_SIZE = 'gcb.size';
    const TYPE_GCB_COUNT = 'gcb.count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_GCB_SIZE,
            self::TYPE_GCB_COUNT,
        ];
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
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['quota']) && ($this->container['quota'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'quota', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] < 0)) {
                $invalidProperties[] = "invalid value for 'quota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'used', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] < 0)) {
                $invalidProperties[] = "invalid value for 'used', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets quota
    *  配额大小。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 配额大小。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  已使用值。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已使用值。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets type
    *  配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 配额类型。 gcb.size：全域互联带宽大小 gcb.count：全域互联带宽数量
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

