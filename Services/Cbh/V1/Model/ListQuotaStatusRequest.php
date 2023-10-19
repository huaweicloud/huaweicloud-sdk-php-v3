<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotaStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotaStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'resourceSpecCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'resourceSpecCode' => null
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
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'resourceSpecCode' => 'resource_spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'resourceSpecCode' => 'setResourceSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'resourceSpecCode' => 'getResourceSpecCode'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
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
    * Gets availabilityZone
    *  创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 创建云堡垒机所在的可用区，需要指定可用分区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 待创建云堡垒机规格ID，例如： - cbh.basic.10  10资产标准版 - cbh.enhance.10  10资产专业版 已上线的规格详情请参见《云堡垒机常见问题》的购买，[云堡垒机实例有哪些规格](https://support.huaweicloud.com/cbh_faq/cbh_03_0025.html)章节。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
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

