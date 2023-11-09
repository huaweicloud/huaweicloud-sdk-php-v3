<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAclStrategyV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAclStrategyV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aclName  名称
    * aclType  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    * aclValue  ACL策略值
    * entityType  对象类型： - IP - DOMAIN - DOMAIN_ID
    * id  编号
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aclName' => 'string',
            'aclType' => 'string',
            'aclValue' => 'string',
            'entityType' => 'string',
            'id' => 'string',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aclName  名称
    * aclType  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    * aclValue  ACL策略值
    * entityType  对象类型： - IP - DOMAIN - DOMAIN_ID
    * id  编号
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aclName' => null,
        'aclType' => null,
        'aclValue' => null,
        'entityType' => null,
        'id' => null,
        'updateTime' => 'date-time'
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
    * aclName  名称
    * aclType  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    * aclValue  ACL策略值
    * entityType  对象类型： - IP - DOMAIN - DOMAIN_ID
    * id  编号
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aclName' => 'acl_name',
            'aclType' => 'acl_type',
            'aclValue' => 'acl_value',
            'entityType' => 'entity_type',
            'id' => 'id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aclName  名称
    * aclType  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    * aclValue  ACL策略值
    * entityType  对象类型： - IP - DOMAIN - DOMAIN_ID
    * id  编号
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'aclName' => 'setAclName',
            'aclType' => 'setAclType',
            'aclValue' => 'setAclValue',
            'entityType' => 'setEntityType',
            'id' => 'setId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aclName  名称
    * aclType  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    * aclValue  ACL策略值
    * entityType  对象类型： - IP - DOMAIN - DOMAIN_ID
    * id  编号
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'aclName' => 'getAclName',
            'aclType' => 'getAclType',
            'aclValue' => 'getAclValue',
            'entityType' => 'getEntityType',
            'id' => 'getId',
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
        $this->container['aclName'] = isset($data['aclName']) ? $data['aclName'] : null;
        $this->container['aclType'] = isset($data['aclType']) ? $data['aclType'] : null;
        $this->container['aclValue'] = isset($data['aclValue']) ? $data['aclValue'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets aclName
    *  名称
    *
    * @return string|null
    */
    public function getAclName()
    {
        return $this->container['aclName'];
    }

    /**
    * Sets aclName
    *
    * @param string|null $aclName 名称
    *
    * @return $this
    */
    public function setAclName($aclName)
    {
        $this->container['aclName'] = $aclName;
        return $this;
    }

    /**
    * Gets aclType
    *  类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    *
    * @return string|null
    */
    public function getAclType()
    {
        return $this->container['aclType'];
    }

    /**
    * Sets aclType
    *
    * @param string|null $aclType 类型: - PERMIT（白名单类型） - DENY（黑名单类型）
    *
    * @return $this
    */
    public function setAclType($aclType)
    {
        $this->container['aclType'] = $aclType;
        return $this;
    }

    /**
    * Gets aclValue
    *  ACL策略值
    *
    * @return string|null
    */
    public function getAclValue()
    {
        return $this->container['aclValue'];
    }

    /**
    * Sets aclValue
    *
    * @param string|null $aclValue ACL策略值
    *
    * @return $this
    */
    public function setAclValue($aclValue)
    {
        $this->container['aclValue'] = $aclValue;
        return $this;
    }

    /**
    * Gets entityType
    *  对象类型： - IP - DOMAIN - DOMAIN_ID
    *
    * @return string|null
    */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
    * Sets entityType
    *
    * @param string|null $entityType 对象类型： - IP - DOMAIN - DOMAIN_ID
    *
    * @return $this
    */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;
        return $this;
    }

    /**
    * Gets id
    *  编号
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
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
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

