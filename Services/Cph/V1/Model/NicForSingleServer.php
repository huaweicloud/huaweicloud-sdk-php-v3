<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NicForSingleServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NicForSingleServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    * ipv6Enable  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    * ipv6BandWidthId  ipv6绑定的共享带宽ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'ipv6Enable' => 'bool',
            'ipv6BandWidthId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    * ipv6Enable  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    * ipv6BandWidthId  ipv6绑定的共享带宽ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'ipv6Enable' => null,
        'ipv6BandWidthId' => null
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
    * subnetId  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    * ipv6Enable  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    * ipv6BandWidthId  ipv6绑定的共享带宽ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'ipv6Enable' => 'ipv6_enable',
            'ipv6BandWidthId' => 'ipv6_band_width_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    * ipv6Enable  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    * ipv6BandWidthId  ipv6绑定的共享带宽ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'ipv6Enable' => 'setIpv6Enable',
            'ipv6BandWidthId' => 'setIpv6BandWidthId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    * ipv6Enable  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    * ipv6BandWidthId  ipv6绑定的共享带宽ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'ipv6Enable' => 'getIpv6Enable',
            'ipv6BandWidthId' => 'getIpv6BandWidthId'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['ipv6BandWidthId'] = isset($data['ipv6BandWidthId']) ? $data['ipv6BandWidthId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipv6BandWidthId']) && (mb_strlen($this->container['ipv6BandWidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ipv6BandWidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ipv6BandWidthId']) && (mb_strlen($this->container['ipv6BandWidthId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipv6BandWidthId', the character length must be bigger than or equal to 0.";
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
    * Gets subnetId
    *  租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 租户自定义的子网 ID，为待创建的云手机裸服务器所属的子网。 需要指定vpc_id对应VPC下已创建的子网（subnet）的网络ID，UUID格式
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否支持ipv6，默认不支持ipv6。 false：不支持ipv6 true：支持ipv6
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets ipv6BandWidthId
    *  ipv6绑定的共享带宽ID。
    *
    * @return string|null
    */
    public function getIpv6BandWidthId()
    {
        return $this->container['ipv6BandWidthId'];
    }

    /**
    * Sets ipv6BandWidthId
    *
    * @param string|null $ipv6BandWidthId ipv6绑定的共享带宽ID。
    *
    * @return $this
    */
    public function setIpv6BandWidthId($ipv6BandWidthId)
    {
        $this->container['ipv6BandWidthId'] = $ipv6BandWidthId;
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

