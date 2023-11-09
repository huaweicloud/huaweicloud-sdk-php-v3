<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiBindAclInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiBindAclInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aclId  ACL策略编号
    * aclName  ACL策略名称
    * entityType  ACL策略作用的对象类型
    * aclType  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
    * aclValue  ACL策略值
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * bindTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aclId' => 'string',
            'aclName' => 'string',
            'entityType' => 'string',
            'aclType' => 'string',
            'aclValue' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'bindId' => 'string',
            'bindTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aclId  ACL策略编号
    * aclName  ACL策略名称
    * entityType  ACL策略作用的对象类型
    * aclType  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
    * aclValue  ACL策略值
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * bindTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aclId' => null,
        'aclName' => null,
        'entityType' => null,
        'aclType' => null,
        'aclValue' => null,
        'envId' => null,
        'envName' => null,
        'bindId' => null,
        'bindTime' => 'date-time'
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
    * aclId  ACL策略编号
    * aclName  ACL策略名称
    * entityType  ACL策略作用的对象类型
    * aclType  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
    * aclValue  ACL策略值
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * bindTime  绑定时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aclId' => 'acl_id',
            'aclName' => 'acl_name',
            'entityType' => 'entity_type',
            'aclType' => 'acl_type',
            'aclValue' => 'acl_value',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'bindId' => 'bind_id',
            'bindTime' => 'bind_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aclId  ACL策略编号
    * aclName  ACL策略名称
    * entityType  ACL策略作用的对象类型
    * aclType  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
    * aclValue  ACL策略值
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * bindTime  绑定时间
    *
    * @var string[]
    */
    protected static $setters = [
            'aclId' => 'setAclId',
            'aclName' => 'setAclName',
            'entityType' => 'setEntityType',
            'aclType' => 'setAclType',
            'aclValue' => 'setAclValue',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'bindId' => 'setBindId',
            'bindTime' => 'setBindTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aclId  ACL策略编号
    * aclName  ACL策略名称
    * entityType  ACL策略作用的对象类型
    * aclType  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
    * aclValue  ACL策略值
    * envId  生效的环境编号
    * envName  生效的环境名称
    * bindId  绑定关系编号
    * bindTime  绑定时间
    *
    * @var string[]
    */
    protected static $getters = [
            'aclId' => 'getAclId',
            'aclName' => 'getAclName',
            'entityType' => 'getEntityType',
            'aclType' => 'getAclType',
            'aclValue' => 'getAclValue',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'bindId' => 'getBindId',
            'bindTime' => 'getBindTime'
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
    const ENTITY_TYPE_IP = 'IP';
    const ENTITY_TYPE_DOMAIN = 'DOMAIN';
    const ENTITY_TYPE_DOMAIN_ID = 'DOMAIN_ID';
    const ACL_TYPE_PERMIT = 'PERMIT';
    const ACL_TYPE_DENY = 'DENY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEntityTypeAllowableValues()
    {
        return [
            self::ENTITY_TYPE_IP,
            self::ENTITY_TYPE_DOMAIN,
            self::ENTITY_TYPE_DOMAIN_ID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAclTypeAllowableValues()
    {
        return [
            self::ACL_TYPE_PERMIT,
            self::ACL_TYPE_DENY,
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
        $this->container['aclId'] = isset($data['aclId']) ? $data['aclId'] : null;
        $this->container['aclName'] = isset($data['aclName']) ? $data['aclName'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['aclType'] = isset($data['aclType']) ? $data['aclType'] : null;
        $this->container['aclValue'] = isset($data['aclValue']) ? $data['aclValue'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['bindTime'] = isset($data['bindTime']) ? $data['bindTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEntityTypeAllowableValues();
                if (!is_null($this->container['entityType']) && !in_array($this->container['entityType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'entityType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAclTypeAllowableValues();
                if (!is_null($this->container['aclType']) && !in_array($this->container['aclType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'aclType', must be one of '%s'",
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
    * Gets aclId
    *  ACL策略编号
    *
    * @return string|null
    */
    public function getAclId()
    {
        return $this->container['aclId'];
    }

    /**
    * Sets aclId
    *
    * @param string|null $aclId ACL策略编号
    *
    * @return $this
    */
    public function setAclId($aclId)
    {
        $this->container['aclId'] = $aclId;
        return $this;
    }

    /**
    * Gets aclName
    *  ACL策略名称
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
    * @param string|null $aclName ACL策略名称
    *
    * @return $this
    */
    public function setAclName($aclName)
    {
        $this->container['aclName'] = $aclName;
        return $this;
    }

    /**
    * Gets entityType
    *  ACL策略作用的对象类型
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
    * @param string|null $entityType ACL策略作用的对象类型
    *
    * @return $this
    */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;
        return $this;
    }

    /**
    * Gets aclType
    *  ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
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
    * @param string|null $aclType ACL策略类型 - PERMIT：白名单类型 - DENY：黑名单类型
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
    * Gets envId
    *  生效的环境编号
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 生效的环境编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  生效的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 生效的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets bindId
    *  绑定关系编号
    *
    * @return string|null
    */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
    * Sets bindId
    *
    * @param string|null $bindId 绑定关系编号
    *
    * @return $this
    */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;
        return $this;
    }

    /**
    * Gets bindTime
    *  绑定时间
    *
    * @return \DateTime|null
    */
    public function getBindTime()
    {
        return $this->container['bindTime'];
    }

    /**
    * Sets bindTime
    *
    * @param \DateTime|null $bindTime 绑定时间
    *
    * @return $this
    */
    public function setBindTime($bindTime)
    {
        $this->container['bindTime'] = $bindTime;
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

