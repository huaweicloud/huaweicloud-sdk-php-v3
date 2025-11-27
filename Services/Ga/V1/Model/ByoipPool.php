<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ByoipPool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ByoipPool';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自带IP地址池ID。
    * cidr  自带IP地址池的IP网段。
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * area  area
    * domainId  租户ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cidr' => 'string',
            'ipType' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => 'string',
            'area' => '\HuaweiCloud\SDK\Ga\V1\Model\Area',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自带IP地址池ID。
    * cidr  自带IP地址池的IP网段。
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * area  area
    * domainId  租户ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cidr' => null,
        'ipType' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time。',
        'area' => null,
        'domainId' => null
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
    * id  自带IP地址池ID。
    * cidr  自带IP地址池的IP网段。
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * area  area
    * domainId  租户ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cidr' => 'cidr',
            'ipType' => 'ip_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'area' => 'area',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自带IP地址池ID。
    * cidr  自带IP地址池的IP网段。
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * area  area
    * domainId  租户ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cidr' => 'setCidr',
            'ipType' => 'setIpType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'area' => 'setArea',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自带IP地址池ID。
    * cidr  自带IP地址池的IP网段。
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * area  area
    * domainId  租户ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cidr' => 'getCidr',
            'ipType' => 'getIpType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'area' => 'getArea',
            'domainId' => 'getDomainId'
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
    const IP_TYPE_IPV4 = 'IPV4';
    const IP_TYPE_IPV6 = 'IPV6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpTypeAllowableValues()
    {
        return [
            self::IP_TYPE_IPV4,
            self::IP_TYPE_IPV6,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIpTypeAllowableValues();
                if (!is_null($this->container['ipType']) && !in_array($this->container['ipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipType', must be one of '%s'",
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
    * Gets id
    *  自带IP地址池ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 自带IP地址池ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cidr
    *  自带IP地址池的IP网段。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 自带IP地址池的IP网段。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets ipType
    *  IP地址类型。 取值范围：IPV4、IPV6
    *
    * @return string|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string|null $ipType IP地址类型。 取值范围：IPV4、IPV6
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets area
    *  area
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\Area|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\Area|null $area area
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

