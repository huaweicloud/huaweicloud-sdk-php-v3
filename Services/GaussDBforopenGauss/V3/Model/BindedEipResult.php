<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindedEipResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindedEipResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicIpId  弹性公网ID。
    * publicIpType  弹性公网类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP。
    * privateIpAddress  内网地址。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthShareType  带宽共享类型。
    * bandwidthSize  带宽大小。
    * appliedAt  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicIpId' => 'string',
            'publicIpType' => 'string',
            'portId' => 'string',
            'publicIpAddress' => 'string',
            'privateIpAddress' => 'string',
            'bandwidthId' => 'string',
            'bandwidthName' => 'string',
            'bandwidthShareType' => 'string',
            'bandwidthSize' => 'int',
            'appliedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicIpId  弹性公网ID。
    * publicIpType  弹性公网类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP。
    * privateIpAddress  内网地址。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthShareType  带宽共享类型。
    * bandwidthSize  带宽大小。
    * appliedAt  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicIpId' => null,
        'publicIpType' => null,
        'portId' => null,
        'publicIpAddress' => null,
        'privateIpAddress' => null,
        'bandwidthId' => null,
        'bandwidthName' => null,
        'bandwidthShareType' => null,
        'bandwidthSize' => null,
        'appliedAt' => null
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
    * publicIpId  弹性公网ID。
    * publicIpType  弹性公网类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP。
    * privateIpAddress  内网地址。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthShareType  带宽共享类型。
    * bandwidthSize  带宽大小。
    * appliedAt  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicIpId' => 'public_ip_id',
            'publicIpType' => 'public_ip_type',
            'portId' => 'port_id',
            'publicIpAddress' => 'public_ip_address',
            'privateIpAddress' => 'private_ip_address',
            'bandwidthId' => 'bandwidth_id',
            'bandwidthName' => 'bandwidth_name',
            'bandwidthShareType' => 'bandwidth_share_type',
            'bandwidthSize' => 'bandwidth_size',
            'appliedAt' => 'applied_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicIpId  弹性公网ID。
    * publicIpType  弹性公网类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP。
    * privateIpAddress  内网地址。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthShareType  带宽共享类型。
    * bandwidthSize  带宽大小。
    * appliedAt  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicIpId' => 'setPublicIpId',
            'publicIpType' => 'setPublicIpType',
            'portId' => 'setPortId',
            'publicIpAddress' => 'setPublicIpAddress',
            'privateIpAddress' => 'setPrivateIpAddress',
            'bandwidthId' => 'setBandwidthId',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthShareType' => 'setBandwidthShareType',
            'bandwidthSize' => 'setBandwidthSize',
            'appliedAt' => 'setAppliedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicIpId  弹性公网ID。
    * publicIpType  弹性公网类型。
    * portId  端口ID。
    * publicIpAddress  弹性公网IP。
    * privateIpAddress  内网地址。
    * bandwidthId  带宽ID。
    * bandwidthName  带宽名称。
    * bandwidthShareType  带宽共享类型。
    * bandwidthSize  带宽大小。
    * appliedAt  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicIpId' => 'getPublicIpId',
            'publicIpType' => 'getPublicIpType',
            'portId' => 'getPortId',
            'publicIpAddress' => 'getPublicIpAddress',
            'privateIpAddress' => 'getPrivateIpAddress',
            'bandwidthId' => 'getBandwidthId',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthShareType' => 'getBandwidthShareType',
            'bandwidthSize' => 'getBandwidthSize',
            'appliedAt' => 'getAppliedAt'
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
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['publicIpType'] = isset($data['publicIpType']) ? $data['publicIpType'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthShareType'] = isset($data['bandwidthShareType']) ? $data['bandwidthShareType'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['appliedAt'] = isset($data['appliedAt']) ? $data['appliedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publicIpId'] === null) {
            $invalidProperties[] = "'publicIpId' can't be null";
        }
        if ($this->container['publicIpType'] === null) {
            $invalidProperties[] = "'publicIpType' can't be null";
        }
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
        if ($this->container['publicIpAddress'] === null) {
            $invalidProperties[] = "'publicIpAddress' can't be null";
        }
        if ($this->container['privateIpAddress'] === null) {
            $invalidProperties[] = "'privateIpAddress' can't be null";
        }
        if ($this->container['bandwidthId'] === null) {
            $invalidProperties[] = "'bandwidthId' can't be null";
        }
        if ($this->container['bandwidthName'] === null) {
            $invalidProperties[] = "'bandwidthName' can't be null";
        }
        if ($this->container['bandwidthShareType'] === null) {
            $invalidProperties[] = "'bandwidthShareType' can't be null";
        }
        if ($this->container['bandwidthSize'] === null) {
            $invalidProperties[] = "'bandwidthSize' can't be null";
        }
        if ($this->container['appliedAt'] === null) {
            $invalidProperties[] = "'appliedAt' can't be null";
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
    * Gets publicIpId
    *  弹性公网ID。
    *
    * @return string
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string $publicIpId 弹性公网ID。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets publicIpType
    *  弹性公网类型。
    *
    * @return string
    */
    public function getPublicIpType()
    {
        return $this->container['publicIpType'];
    }

    /**
    * Sets publicIpType
    *
    * @param string $publicIpType 弹性公网类型。
    *
    * @return $this
    */
    public function setPublicIpType($publicIpType)
    {
        $this->container['publicIpType'] = $publicIpType;
        return $this;
    }

    /**
    * Gets portId
    *  端口ID。
    *
    * @return string
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string $portId 端口ID。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  弹性公网IP。
    *
    * @return string
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string $publicIpAddress 弹性公网IP。
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  内网地址。
    *
    * @return string
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string $privateIpAddress 内网地址。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  带宽ID。
    *
    * @return string
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string $bandwidthId 带宽ID。
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthName
    *  带宽名称。
    *
    * @return string
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string $bandwidthName 带宽名称。
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthShareType
    *  带宽共享类型。
    *
    * @return string
    */
    public function getBandwidthShareType()
    {
        return $this->container['bandwidthShareType'];
    }

    /**
    * Sets bandwidthShareType
    *
    * @param string $bandwidthShareType 带宽共享类型。
    *
    * @return $this
    */
    public function setBandwidthShareType($bandwidthShareType)
    {
        $this->container['bandwidthShareType'] = $bandwidthShareType;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽大小。
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
    * @param int $bandwidthSize 带宽大小。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets appliedAt
    *  修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @return string
    */
    public function getAppliedAt()
    {
        return $this->container['appliedAt'];
    }

    /**
    * Sets appliedAt
    *
    * @param string $appliedAt 修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+08:00。
    *
    * @return $this
    */
    public function setAppliedAt($appliedAt)
    {
        $this->container['appliedAt'] = $appliedAt;
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

