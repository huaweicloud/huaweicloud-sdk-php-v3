<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCloudPhoneSingleServerRequestBodyPublicIpBandWidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCloudPhoneSingleServerRequestBody_public_ip_band_width';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandWidthId  云手机服务器的带宽唯一标识，选共享带宽时必选。
    * bandWidthSize  云手机服务器的带宽大小，选独享带宽时必选。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandWidthId' => 'string',
            'bandWidthSize' => 'int',
            'bandWidthChargeMode' => 'int',
            'bandWidthShareType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandWidthId  云手机服务器的带宽唯一标识，选共享带宽时必选。
    * bandWidthSize  云手机服务器的带宽大小，选独享带宽时必选。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandWidthId' => null,
        'bandWidthSize' => 'int32',
        'bandWidthChargeMode' => 'int32',
        'bandWidthShareType' => 'int32'
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
    * bandWidthId  云手机服务器的带宽唯一标识，选共享带宽时必选。
    * bandWidthSize  云手机服务器的带宽大小，选独享带宽时必选。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandWidthId' => 'band_width_id',
            'bandWidthSize' => 'band_width_size',
            'bandWidthChargeMode' => 'band_width_charge_mode',
            'bandWidthShareType' => 'band_width_share_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandWidthId  云手机服务器的带宽唯一标识，选共享带宽时必选。
    * bandWidthSize  云手机服务器的带宽大小，选独享带宽时必选。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @var string[]
    */
    protected static $setters = [
            'bandWidthId' => 'setBandWidthId',
            'bandWidthSize' => 'setBandWidthSize',
            'bandWidthChargeMode' => 'setBandWidthChargeMode',
            'bandWidthShareType' => 'setBandWidthShareType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandWidthId  云手机服务器的带宽唯一标识，选共享带宽时必选。
    * bandWidthSize  云手机服务器的带宽大小，选独享带宽时必选。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @var string[]
    */
    protected static $getters = [
            'bandWidthId' => 'getBandWidthId',
            'bandWidthSize' => 'getBandWidthSize',
            'bandWidthChargeMode' => 'getBandWidthChargeMode',
            'bandWidthShareType' => 'getBandWidthShareType'
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
        $this->container['bandWidthId'] = isset($data['bandWidthId']) ? $data['bandWidthId'] : null;
        $this->container['bandWidthSize'] = isset($data['bandWidthSize']) ? $data['bandWidthSize'] : null;
        $this->container['bandWidthChargeMode'] = isset($data['bandWidthChargeMode']) ? $data['bandWidthChargeMode'] : null;
        $this->container['bandWidthShareType'] = isset($data['bandWidthShareType']) ? $data['bandWidthShareType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bandWidthId']) && (mb_strlen($this->container['bandWidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandWidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandWidthId']) && (mb_strlen($this->container['bandWidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'bandWidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['bandWidthSize']) && ($this->container['bandWidthSize'] > 8096)) {
                $invalidProperties[] = "invalid value for 'bandWidthSize', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['bandWidthSize']) && ($this->container['bandWidthSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'bandWidthSize', must be bigger than or equal to 0.";
            }
        if ($this->container['bandWidthChargeMode'] === null) {
            $invalidProperties[] = "'bandWidthChargeMode' can't be null";
        }
            if (($this->container['bandWidthChargeMode'] > 128)) {
                $invalidProperties[] = "invalid value for 'bandWidthChargeMode', must be smaller than or equal to 128.";
            }
            if (($this->container['bandWidthChargeMode'] < -128)) {
                $invalidProperties[] = "invalid value for 'bandWidthChargeMode', must be bigger than or equal to -128.";
            }
        if ($this->container['bandWidthShareType'] === null) {
            $invalidProperties[] = "'bandWidthShareType' can't be null";
        }
            if (($this->container['bandWidthShareType'] > 128)) {
                $invalidProperties[] = "invalid value for 'bandWidthShareType', must be smaller than or equal to 128.";
            }
            if (($this->container['bandWidthShareType'] < -128)) {
                $invalidProperties[] = "invalid value for 'bandWidthShareType', must be bigger than or equal to -128.";
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
    * Gets bandWidthId
    *  云手机服务器的带宽唯一标识，选共享带宽时必选。
    *
    * @return string|null
    */
    public function getBandWidthId()
    {
        return $this->container['bandWidthId'];
    }

    /**
    * Sets bandWidthId
    *
    * @param string|null $bandWidthId 云手机服务器的带宽唯一标识，选共享带宽时必选。
    *
    * @return $this
    */
    public function setBandWidthId($bandWidthId)
    {
        $this->container['bandWidthId'] = $bandWidthId;
        return $this;
    }

    /**
    * Gets bandWidthSize
    *  云手机服务器的带宽大小，选独享带宽时必选。
    *
    * @return int|null
    */
    public function getBandWidthSize()
    {
        return $this->container['bandWidthSize'];
    }

    /**
    * Sets bandWidthSize
    *
    * @param int|null $bandWidthSize 云手机服务器的带宽大小，选独享带宽时必选。
    *
    * @return $this
    */
    public function setBandWidthSize($bandWidthSize)
    {
        $this->container['bandWidthSize'] = $bandWidthSize;
        return $this;
    }

    /**
    * Gets bandWidthChargeMode
    *  云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    *
    * @return int
    */
    public function getBandWidthChargeMode()
    {
        return $this->container['bandWidthChargeMode'];
    }

    /**
    * Sets bandWidthChargeMode
    *
    * @param int $bandWidthChargeMode 云手机服务器带宽的计费方式。 0：bandwidth, 按带宽计费 1：traffic, 按流量计费
    *
    * @return $this
    */
    public function setBandWidthChargeMode($bandWidthChargeMode)
    {
        $this->container['bandWidthChargeMode'] = $bandWidthChargeMode;
        return $this;
    }

    /**
    * Gets bandWidthShareType
    *  云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @return int
    */
    public function getBandWidthShareType()
    {
        return $this->container['bandWidthShareType'];
    }

    /**
    * Sets bandWidthShareType
    *
    * @param int $bandWidthShareType 云手机服务器的带宽类型。 0：per，独享带宽 1：whole，共享带宽
    *
    * @return $this
    */
    public function setBandWidthShareType($bandWidthShareType)
    {
        $this->container['bandWidthShareType'] = $bandWidthShareType;
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

