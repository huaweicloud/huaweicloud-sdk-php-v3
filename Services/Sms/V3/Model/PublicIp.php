<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  弹性公网IP类型，默认为5_bgp
    * bandwidthSize  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    * bandwidthShareType  带宽共享类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'bandwidthSize' => 'int',
            'bandwidthShareType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  弹性公网IP类型，默认为5_bgp
    * bandwidthSize  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    * bandwidthShareType  带宽共享类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'bandwidthSize' => 'int32',
        'bandwidthShareType' => null
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
    * type  弹性公网IP类型，默认为5_bgp
    * bandwidthSize  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    * bandwidthShareType  带宽共享类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthShareType' => 'bandwidth_share_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  弹性公网IP类型，默认为5_bgp
    * bandwidthSize  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    * bandwidthShareType  带宽共享类型
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthShareType' => 'setBandwidthShareType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  弹性公网IP类型，默认为5_bgp
    * bandwidthSize  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    * bandwidthShareType  带宽共享类型
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthShareType' => 'getBandwidthShareType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthShareType'] = isset($data['bandwidthShareType']) ? $data['bandwidthShareType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bandwidthSize'] === null) {
            $invalidProperties[] = "'bandwidthSize' can't be null";
        }
            if (($this->container['bandwidthSize'] > 2000)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 2000.";
            }
            if (($this->container['bandwidthSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidthShareType']) && (mb_strlen($this->container['bandwidthShareType']) > 255)) {
                $invalidProperties[] = "invalid value for 'bandwidthShareType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bandwidthShareType']) && (mb_strlen($this->container['bandwidthShareType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthShareType', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  弹性公网IP类型，默认为5_bgp
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 弹性公网IP类型，默认为5_bgp
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    *
    * @return int
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int $bandwidthSize 带宽大小，单位：Mbit/s。 调整带宽时的最小单位会根据带宽范围不同存在差异。 小于等于300Mbit/s，默认最小单位为1Mbit/s。300Mbit/s~1000Mbit/s，默认最小单位为50Mbit/s。大于1000Mbit/s：默认最小单位为500Mbit/s。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthShareType
    *  带宽共享类型
    *
    * @return string|null
    */
    public function getBandwidthShareType()
    {
        return $this->container['bandwidthShareType'];
    }

    /**
    * Sets bandwidthShareType
    *
    * @param string|null $bandwidthShareType 带宽共享类型
    *
    * @return $this
    */
    public function setBandwidthShareType($bandwidthShareType)
    {
        $this->container['bandwidthShareType'] = $bandwidthShareType;
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

