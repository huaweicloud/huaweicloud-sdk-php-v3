<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AffectedResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AffectedResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affectedAttachedDomainId  被防护对象账户ID
    * affectedAttachedProjectId  被防护对象项目ID
    * affectedHead  affectedHead
    * affectedProperties  资源扩展信息
    * affectedProtectedId  被防护(受影响）对象在防线系统内唯一ID
    * affectedSubtype  被防护(受影响）对象子类型: 固定为：DB
    * affectedType  被防护(受影响）对象类型，数据库资产，固定为：Data
    * affectedUrn  被防护对象urn
    * affectedUrnext  被防护对象URN扩展
    * affectedValue  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affectedAttachedDomainId' => 'string',
            'affectedAttachedProjectId' => 'string',
            'affectedHead' => '\HuaweiCloud\SDK\Dbss\V1\Model\DataResourceHead',
            'affectedProperties' => 'object',
            'affectedProtectedId' => 'string',
            'affectedSubtype' => 'string',
            'affectedType' => 'string',
            'affectedUrn' => 'string',
            'affectedUrnext' => 'string',
            'affectedValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affectedAttachedDomainId  被防护对象账户ID
    * affectedAttachedProjectId  被防护对象项目ID
    * affectedHead  affectedHead
    * affectedProperties  资源扩展信息
    * affectedProtectedId  被防护(受影响）对象在防线系统内唯一ID
    * affectedSubtype  被防护(受影响）对象子类型: 固定为：DB
    * affectedType  被防护(受影响）对象类型，数据库资产，固定为：Data
    * affectedUrn  被防护对象urn
    * affectedUrnext  被防护对象URN扩展
    * affectedValue  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affectedAttachedDomainId' => null,
        'affectedAttachedProjectId' => null,
        'affectedHead' => null,
        'affectedProperties' => null,
        'affectedProtectedId' => null,
        'affectedSubtype' => null,
        'affectedType' => null,
        'affectedUrn' => null,
        'affectedUrnext' => null,
        'affectedValue' => null
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
    * affectedAttachedDomainId  被防护对象账户ID
    * affectedAttachedProjectId  被防护对象项目ID
    * affectedHead  affectedHead
    * affectedProperties  资源扩展信息
    * affectedProtectedId  被防护(受影响）对象在防线系统内唯一ID
    * affectedSubtype  被防护(受影响）对象子类型: 固定为：DB
    * affectedType  被防护(受影响）对象类型，数据库资产，固定为：Data
    * affectedUrn  被防护对象urn
    * affectedUrnext  被防护对象URN扩展
    * affectedValue  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affectedAttachedDomainId' => 'affected_attached_domain_id',
            'affectedAttachedProjectId' => 'affected_attached_project_id',
            'affectedHead' => 'affected_head',
            'affectedProperties' => 'affected_properties',
            'affectedProtectedId' => 'affected_protected_id',
            'affectedSubtype' => 'affected_subtype',
            'affectedType' => 'affected_type',
            'affectedUrn' => 'affected_urn',
            'affectedUrnext' => 'affected_urnext',
            'affectedValue' => 'affected_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affectedAttachedDomainId  被防护对象账户ID
    * affectedAttachedProjectId  被防护对象项目ID
    * affectedHead  affectedHead
    * affectedProperties  资源扩展信息
    * affectedProtectedId  被防护(受影响）对象在防线系统内唯一ID
    * affectedSubtype  被防护(受影响）对象子类型: 固定为：DB
    * affectedType  被防护(受影响）对象类型，数据库资产，固定为：Data
    * affectedUrn  被防护对象urn
    * affectedUrnext  被防护对象URN扩展
    * affectedValue  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @var string[]
    */
    protected static $setters = [
            'affectedAttachedDomainId' => 'setAffectedAttachedDomainId',
            'affectedAttachedProjectId' => 'setAffectedAttachedProjectId',
            'affectedHead' => 'setAffectedHead',
            'affectedProperties' => 'setAffectedProperties',
            'affectedProtectedId' => 'setAffectedProtectedId',
            'affectedSubtype' => 'setAffectedSubtype',
            'affectedType' => 'setAffectedType',
            'affectedUrn' => 'setAffectedUrn',
            'affectedUrnext' => 'setAffectedUrnext',
            'affectedValue' => 'setAffectedValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affectedAttachedDomainId  被防护对象账户ID
    * affectedAttachedProjectId  被防护对象项目ID
    * affectedHead  affectedHead
    * affectedProperties  资源扩展信息
    * affectedProtectedId  被防护(受影响）对象在防线系统内唯一ID
    * affectedSubtype  被防护(受影响）对象子类型: 固定为：DB
    * affectedType  被防护(受影响）对象类型，数据库资产，固定为：Data
    * affectedUrn  被防护对象urn
    * affectedUrnext  被防护对象URN扩展
    * affectedValue  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @var string[]
    */
    protected static $getters = [
            'affectedAttachedDomainId' => 'getAffectedAttachedDomainId',
            'affectedAttachedProjectId' => 'getAffectedAttachedProjectId',
            'affectedHead' => 'getAffectedHead',
            'affectedProperties' => 'getAffectedProperties',
            'affectedProtectedId' => 'getAffectedProtectedId',
            'affectedSubtype' => 'getAffectedSubtype',
            'affectedType' => 'getAffectedType',
            'affectedUrn' => 'getAffectedUrn',
            'affectedUrnext' => 'getAffectedUrnext',
            'affectedValue' => 'getAffectedValue'
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
        $this->container['affectedAttachedDomainId'] = isset($data['affectedAttachedDomainId']) ? $data['affectedAttachedDomainId'] : null;
        $this->container['affectedAttachedProjectId'] = isset($data['affectedAttachedProjectId']) ? $data['affectedAttachedProjectId'] : null;
        $this->container['affectedHead'] = isset($data['affectedHead']) ? $data['affectedHead'] : null;
        $this->container['affectedProperties'] = isset($data['affectedProperties']) ? $data['affectedProperties'] : null;
        $this->container['affectedProtectedId'] = isset($data['affectedProtectedId']) ? $data['affectedProtectedId'] : null;
        $this->container['affectedSubtype'] = isset($data['affectedSubtype']) ? $data['affectedSubtype'] : null;
        $this->container['affectedType'] = isset($data['affectedType']) ? $data['affectedType'] : null;
        $this->container['affectedUrn'] = isset($data['affectedUrn']) ? $data['affectedUrn'] : null;
        $this->container['affectedUrnext'] = isset($data['affectedUrnext']) ? $data['affectedUrnext'] : null;
        $this->container['affectedValue'] = isset($data['affectedValue']) ? $data['affectedValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets affectedAttachedDomainId
    *  被防护对象账户ID
    *
    * @return string|null
    */
    public function getAffectedAttachedDomainId()
    {
        return $this->container['affectedAttachedDomainId'];
    }

    /**
    * Sets affectedAttachedDomainId
    *
    * @param string|null $affectedAttachedDomainId 被防护对象账户ID
    *
    * @return $this
    */
    public function setAffectedAttachedDomainId($affectedAttachedDomainId)
    {
        $this->container['affectedAttachedDomainId'] = $affectedAttachedDomainId;
        return $this;
    }

    /**
    * Gets affectedAttachedProjectId
    *  被防护对象项目ID
    *
    * @return string|null
    */
    public function getAffectedAttachedProjectId()
    {
        return $this->container['affectedAttachedProjectId'];
    }

    /**
    * Sets affectedAttachedProjectId
    *
    * @param string|null $affectedAttachedProjectId 被防护对象项目ID
    *
    * @return $this
    */
    public function setAffectedAttachedProjectId($affectedAttachedProjectId)
    {
        $this->container['affectedAttachedProjectId'] = $affectedAttachedProjectId;
        return $this;
    }

    /**
    * Gets affectedHead
    *  affectedHead
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\DataResourceHead|null
    */
    public function getAffectedHead()
    {
        return $this->container['affectedHead'];
    }

    /**
    * Sets affectedHead
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\DataResourceHead|null $affectedHead affectedHead
    *
    * @return $this
    */
    public function setAffectedHead($affectedHead)
    {
        $this->container['affectedHead'] = $affectedHead;
        return $this;
    }

    /**
    * Gets affectedProperties
    *  资源扩展信息
    *
    * @return object|null
    */
    public function getAffectedProperties()
    {
        return $this->container['affectedProperties'];
    }

    /**
    * Sets affectedProperties
    *
    * @param object|null $affectedProperties 资源扩展信息
    *
    * @return $this
    */
    public function setAffectedProperties($affectedProperties)
    {
        $this->container['affectedProperties'] = $affectedProperties;
        return $this;
    }

    /**
    * Gets affectedProtectedId
    *  被防护(受影响）对象在防线系统内唯一ID
    *
    * @return string|null
    */
    public function getAffectedProtectedId()
    {
        return $this->container['affectedProtectedId'];
    }

    /**
    * Sets affectedProtectedId
    *
    * @param string|null $affectedProtectedId 被防护(受影响）对象在防线系统内唯一ID
    *
    * @return $this
    */
    public function setAffectedProtectedId($affectedProtectedId)
    {
        $this->container['affectedProtectedId'] = $affectedProtectedId;
        return $this;
    }

    /**
    * Gets affectedSubtype
    *  被防护(受影响）对象子类型: 固定为：DB
    *
    * @return string|null
    */
    public function getAffectedSubtype()
    {
        return $this->container['affectedSubtype'];
    }

    /**
    * Sets affectedSubtype
    *
    * @param string|null $affectedSubtype 被防护(受影响）对象子类型: 固定为：DB
    *
    * @return $this
    */
    public function setAffectedSubtype($affectedSubtype)
    {
        $this->container['affectedSubtype'] = $affectedSubtype;
        return $this;
    }

    /**
    * Gets affectedType
    *  被防护(受影响）对象类型，数据库资产，固定为：Data
    *
    * @return string|null
    */
    public function getAffectedType()
    {
        return $this->container['affectedType'];
    }

    /**
    * Sets affectedType
    *
    * @param string|null $affectedType 被防护(受影响）对象类型，数据库资产，固定为：Data
    *
    * @return $this
    */
    public function setAffectedType($affectedType)
    {
        $this->container['affectedType'] = $affectedType;
        return $this;
    }

    /**
    * Gets affectedUrn
    *  被防护对象urn
    *
    * @return string|null
    */
    public function getAffectedUrn()
    {
        return $this->container['affectedUrn'];
    }

    /**
    * Sets affectedUrn
    *
    * @param string|null $affectedUrn 被防护对象urn
    *
    * @return $this
    */
    public function setAffectedUrn($affectedUrn)
    {
        $this->container['affectedUrn'] = $affectedUrn;
        return $this;
    }

    /**
    * Gets affectedUrnext
    *  被防护对象URN扩展
    *
    * @return string|null
    */
    public function getAffectedUrnext()
    {
        return $this->container['affectedUrnext'];
    }

    /**
    * Sets affectedUrnext
    *
    * @param string|null $affectedUrnext 被防护对象URN扩展
    *
    * @return $this
    */
    public function setAffectedUrnext($affectedUrnext)
    {
        $this->container['affectedUrnext'] = $affectedUrnext;
        return $this;
    }

    /**
    * Gets affectedValue
    *  被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @return string|null
    */
    public function getAffectedValue()
    {
        return $this->container['affectedValue'];
    }

    /**
    * Sets affectedValue
    *
    * @param string|null $affectedValue 被防护(受影响）对象值，云下数据库同affectedProtectedId，云上不传
    *
    * @return $this
    */
    public function setAffectedValue($affectedValue)
    {
        $this->container['affectedValue'] = $affectedValue;
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

