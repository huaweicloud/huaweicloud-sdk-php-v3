<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Bandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Bandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandWidthName  云手机服务器的带宽名称。
    * bandWidthId  云手机服务器的带宽唯一标识。
    * bandWidthSize  云手机服务器的带宽大小。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    * createTime  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandWidthName' => 'string',
            'bandWidthId' => 'string',
            'bandWidthSize' => 'int',
            'bandWidthChargeMode' => 'int',
            'bandWidthShareType' => 'int',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandWidthName  云手机服务器的带宽名称。
    * bandWidthId  云手机服务器的带宽唯一标识。
    * bandWidthSize  云手机服务器的带宽大小。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    * createTime  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandWidthName' => null,
        'bandWidthId' => null,
        'bandWidthSize' => 'int32',
        'bandWidthChargeMode' => 'int32',
        'bandWidthShareType' => 'int32',
        'createTime' => null,
        'updateTime' => null
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
    * bandWidthName  云手机服务器的带宽名称。
    * bandWidthId  云手机服务器的带宽唯一标识。
    * bandWidthSize  云手机服务器的带宽大小。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    * createTime  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandWidthName' => 'band_width_name',
            'bandWidthId' => 'band_width_id',
            'bandWidthSize' => 'band_width_size',
            'bandWidthChargeMode' => 'band_width_charge_mode',
            'bandWidthShareType' => 'band_width_share_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandWidthName  云手机服务器的带宽名称。
    * bandWidthId  云手机服务器的带宽唯一标识。
    * bandWidthSize  云手机服务器的带宽大小。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    * createTime  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'bandWidthName' => 'setBandWidthName',
            'bandWidthId' => 'setBandWidthId',
            'bandWidthSize' => 'setBandWidthSize',
            'bandWidthChargeMode' => 'setBandWidthChargeMode',
            'bandWidthShareType' => 'setBandWidthShareType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandWidthName  云手机服务器的带宽名称。
    * bandWidthId  云手机服务器的带宽唯一标识。
    * bandWidthSize  云手机服务器的带宽大小。
    * bandWidthChargeMode  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    * bandWidthShareType  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    * createTime  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'bandWidthName' => 'getBandWidthName',
            'bandWidthId' => 'getBandWidthId',
            'bandWidthSize' => 'getBandWidthSize',
            'bandWidthChargeMode' => 'getBandWidthChargeMode',
            'bandWidthShareType' => 'getBandWidthShareType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['bandWidthName'] = isset($data['bandWidthName']) ? $data['bandWidthName'] : null;
        $this->container['bandWidthId'] = isset($data['bandWidthId']) ? $data['bandWidthId'] : null;
        $this->container['bandWidthSize'] = isset($data['bandWidthSize']) ? $data['bandWidthSize'] : null;
        $this->container['bandWidthChargeMode'] = isset($data['bandWidthChargeMode']) ? $data['bandWidthChargeMode'] : null;
        $this->container['bandWidthShareType'] = isset($data['bandWidthShareType']) ? $data['bandWidthShareType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bandWidthName']) && (mb_strlen($this->container['bandWidthName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bandWidthName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bandWidthName']) && (mb_strlen($this->container['bandWidthName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandWidthName', the character length must be bigger than or equal to 0.";
            }
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
            if (!is_null($this->container['bandWidthChargeMode']) && ($this->container['bandWidthChargeMode'] > 128)) {
                $invalidProperties[] = "invalid value for 'bandWidthChargeMode', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bandWidthChargeMode']) && ($this->container['bandWidthChargeMode'] < -128)) {
                $invalidProperties[] = "invalid value for 'bandWidthChargeMode', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['bandWidthShareType']) && ($this->container['bandWidthShareType'] > 128)) {
                $invalidProperties[] = "invalid value for 'bandWidthShareType', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bandWidthShareType']) && ($this->container['bandWidthShareType'] < -128)) {
                $invalidProperties[] = "invalid value for 'bandWidthShareType', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets bandWidthName
    *  云手机服务器的带宽名称。
    *
    * @return string|null
    */
    public function getBandWidthName()
    {
        return $this->container['bandWidthName'];
    }

    /**
    * Sets bandWidthName
    *
    * @param string|null $bandWidthName 云手机服务器的带宽名称。
    *
    * @return $this
    */
    public function setBandWidthName($bandWidthName)
    {
        $this->container['bandWidthName'] = $bandWidthName;
        return $this;
    }

    /**
    * Gets bandWidthId
    *  云手机服务器的带宽唯一标识。
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
    * @param string|null $bandWidthId 云手机服务器的带宽唯一标识。
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
    *  云手机服务器的带宽大小。
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
    * @param int|null $bandWidthSize 云手机服务器的带宽大小。
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
    *  云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
    *
    * @return int|null
    */
    public function getBandWidthChargeMode()
    {
        return $this->container['bandWidthChargeMode'];
    }

    /**
    * Sets bandWidthChargeMode
    *
    * @param int|null $bandWidthChargeMode 云手机服务器带宽的计费方式。  - 0：bandwidth, 按带宽计费  - 1：traffic, 按流量计费
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
    *  云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    *
    * @return int|null
    */
    public function getBandWidthShareType()
    {
        return $this->container['bandWidthShareType'];
    }

    /**
    * Sets bandWidthShareType
    *
    * @param int|null $bandWidthShareType 云手机服务器的带宽类型。  - 0：per，独享带宽 - 1：whole，共享带宽
    *
    * @return $this
    */
    public function setBandWidthShareType($bandWidthShareType)
    {
        $this->container['bandWidthShareType'] = $bandWidthShareType;
        return $this;
    }

    /**
    * Gets createTime
    *  带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 带宽创建时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 带宽更新时间，  时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

