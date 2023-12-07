<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiAclCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiAclCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aclName  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * aclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * aclValue  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    * entityType  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aclName' => 'string',
            'aclType' => 'string',
            'aclValue' => 'string',
            'entityType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aclName  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * aclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * aclValue  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    * entityType  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aclName' => null,
        'aclType' => null,
        'aclValue' => null,
        'entityType' => null
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
    * aclName  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * aclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * aclValue  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    * entityType  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aclName' => 'acl_name',
            'aclType' => 'acl_type',
            'aclValue' => 'acl_value',
            'entityType' => 'entity_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aclName  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * aclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * aclValue  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    * entityType  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @var string[]
    */
    protected static $setters = [
            'aclName' => 'setAclName',
            'aclType' => 'setAclType',
            'aclValue' => 'setAclValue',
            'entityType' => 'setEntityType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aclName  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    * aclType  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    * aclValue  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    * entityType  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @var string[]
    */
    protected static $getters = [
            'aclName' => 'getAclName',
            'aclType' => 'getAclType',
            'aclValue' => 'getAclValue',
            'entityType' => 'getEntityType'
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
    const ACL_TYPE_PERMIT = 'PERMIT';
    const ACL_TYPE_DENY = 'DENY';
    const ENTITY_TYPE_IP = 'IP';
    const ENTITY_TYPE_DOMAIN = 'DOMAIN';
    const ENTITY_TYPE_DOMAIN_ID = 'DOMAIN_ID';
    

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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aclName'] === null) {
            $invalidProperties[] = "'aclName' can't be null";
        }
        if ($this->container['aclType'] === null) {
            $invalidProperties[] = "'aclType' can't be null";
        }
            $allowedValues = $this->getAclTypeAllowableValues();
                if (!is_null($this->container['aclType']) && !in_array($this->container['aclType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'aclType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['aclValue'] === null) {
            $invalidProperties[] = "'aclValue' can't be null";
        }
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
            $allowedValues = $this->getEntityTypeAllowableValues();
                if (!is_null($this->container['entityType']) && !in_array($this->container['entityType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'entityType', must be one of '%s'",
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
    * Gets aclName
    *  ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getAclName()
    {
        return $this->container['aclName'];
    }

    /**
    * Sets aclName
    *
    * @param string $aclName ACL策略名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3 ~ 64字符。 > 中文字符必须为UTF-8或者unicode编码。
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
    *  类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
    *
    * @return string
    */
    public function getAclType()
    {
        return $this->container['aclType'];
    }

    /**
    * Sets aclType
    *
    * @param string $aclType 类型 -  PERMIT (白名单类型) -  DENY (黑名单类型)
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
    *  ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
    *
    * @return string
    */
    public function getAclValue()
    {
        return $this->container['aclValue'];
    }

    /**
    * Sets aclValue
    *
    * @param string $aclValue ACL策略值，支持一个或多个值，使用英文半角逗号分隔。 - entity_type为IP时，策略值需填写IP地址，最多可支持100个IP地址。 - entity_type为DOMAIN时，策略值需填写账号名，账号支持除英文半角逗号以外的任意ASCII字符，账号名长度限制在1-64个字符，不支持纯数字。多账号名字符的总长度不超过1024。 - entity_type为DOMAIN_ID时，策略值需填写账号ID，获取方式请参见API参考的“附录 > 获取账号ID”章节。
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
    *  对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @return string
    */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
    * Sets entityType
    *
    * @param string $entityType 对象类型： - IP：IP地址 - DOMAIN：账号名 - DOMAIN_ID：账号ID
    *
    * @return $this
    */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;
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

