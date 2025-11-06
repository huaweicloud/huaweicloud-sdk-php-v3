<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GpgKeyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GpgKeyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gpgName  gpg名称
    * openGpgVerified  是否开启gpg认证
    * verificationStatus  gpg认证状态
    * gpgPrimaryKeyId  gpg初始化id
    * gpgNickName  gpg昵称
    * gpgTenantName  gpg租户昵称
    * gpgUserName  gpg用户名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gpgName' => 'string',
            'openGpgVerified' => 'bool',
            'verificationStatus' => 'int',
            'gpgPrimaryKeyId' => 'string',
            'gpgNickName' => 'string',
            'gpgTenantName' => 'string',
            'gpgUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gpgName  gpg名称
    * openGpgVerified  是否开启gpg认证
    * verificationStatus  gpg认证状态
    * gpgPrimaryKeyId  gpg初始化id
    * gpgNickName  gpg昵称
    * gpgTenantName  gpg租户昵称
    * gpgUserName  gpg用户名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gpgName' => null,
        'openGpgVerified' => null,
        'verificationStatus' => null,
        'gpgPrimaryKeyId' => null,
        'gpgNickName' => null,
        'gpgTenantName' => null,
        'gpgUserName' => null
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
    * gpgName  gpg名称
    * openGpgVerified  是否开启gpg认证
    * verificationStatus  gpg认证状态
    * gpgPrimaryKeyId  gpg初始化id
    * gpgNickName  gpg昵称
    * gpgTenantName  gpg租户昵称
    * gpgUserName  gpg用户名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gpgName' => 'gpg_name',
            'openGpgVerified' => 'open_gpg_verified',
            'verificationStatus' => 'verification_status',
            'gpgPrimaryKeyId' => 'gpg_primary_key_id',
            'gpgNickName' => 'gpg_nick_name',
            'gpgTenantName' => 'gpg_tenant_name',
            'gpgUserName' => 'gpg_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gpgName  gpg名称
    * openGpgVerified  是否开启gpg认证
    * verificationStatus  gpg认证状态
    * gpgPrimaryKeyId  gpg初始化id
    * gpgNickName  gpg昵称
    * gpgTenantName  gpg租户昵称
    * gpgUserName  gpg用户名称
    *
    * @var string[]
    */
    protected static $setters = [
            'gpgName' => 'setGpgName',
            'openGpgVerified' => 'setOpenGpgVerified',
            'verificationStatus' => 'setVerificationStatus',
            'gpgPrimaryKeyId' => 'setGpgPrimaryKeyId',
            'gpgNickName' => 'setGpgNickName',
            'gpgTenantName' => 'setGpgTenantName',
            'gpgUserName' => 'setGpgUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gpgName  gpg名称
    * openGpgVerified  是否开启gpg认证
    * verificationStatus  gpg认证状态
    * gpgPrimaryKeyId  gpg初始化id
    * gpgNickName  gpg昵称
    * gpgTenantName  gpg租户昵称
    * gpgUserName  gpg用户名称
    *
    * @var string[]
    */
    protected static $getters = [
            'gpgName' => 'getGpgName',
            'openGpgVerified' => 'getOpenGpgVerified',
            'verificationStatus' => 'getVerificationStatus',
            'gpgPrimaryKeyId' => 'getGpgPrimaryKeyId',
            'gpgNickName' => 'getGpgNickName',
            'gpgTenantName' => 'getGpgTenantName',
            'gpgUserName' => 'getGpgUserName'
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
        $this->container['gpgName'] = isset($data['gpgName']) ? $data['gpgName'] : null;
        $this->container['openGpgVerified'] = isset($data['openGpgVerified']) ? $data['openGpgVerified'] : null;
        $this->container['verificationStatus'] = isset($data['verificationStatus']) ? $data['verificationStatus'] : null;
        $this->container['gpgPrimaryKeyId'] = isset($data['gpgPrimaryKeyId']) ? $data['gpgPrimaryKeyId'] : null;
        $this->container['gpgNickName'] = isset($data['gpgNickName']) ? $data['gpgNickName'] : null;
        $this->container['gpgTenantName'] = isset($data['gpgTenantName']) ? $data['gpgTenantName'] : null;
        $this->container['gpgUserName'] = isset($data['gpgUserName']) ? $data['gpgUserName'] : null;
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
    * Gets gpgName
    *  gpg名称
    *
    * @return string|null
    */
    public function getGpgName()
    {
        return $this->container['gpgName'];
    }

    /**
    * Sets gpgName
    *
    * @param string|null $gpgName gpg名称
    *
    * @return $this
    */
    public function setGpgName($gpgName)
    {
        $this->container['gpgName'] = $gpgName;
        return $this;
    }

    /**
    * Gets openGpgVerified
    *  是否开启gpg认证
    *
    * @return bool|null
    */
    public function getOpenGpgVerified()
    {
        return $this->container['openGpgVerified'];
    }

    /**
    * Sets openGpgVerified
    *
    * @param bool|null $openGpgVerified 是否开启gpg认证
    *
    * @return $this
    */
    public function setOpenGpgVerified($openGpgVerified)
    {
        $this->container['openGpgVerified'] = $openGpgVerified;
        return $this;
    }

    /**
    * Gets verificationStatus
    *  gpg认证状态
    *
    * @return int|null
    */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
    * Sets verificationStatus
    *
    * @param int|null $verificationStatus gpg认证状态
    *
    * @return $this
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->container['verificationStatus'] = $verificationStatus;
        return $this;
    }

    /**
    * Gets gpgPrimaryKeyId
    *  gpg初始化id
    *
    * @return string|null
    */
    public function getGpgPrimaryKeyId()
    {
        return $this->container['gpgPrimaryKeyId'];
    }

    /**
    * Sets gpgPrimaryKeyId
    *
    * @param string|null $gpgPrimaryKeyId gpg初始化id
    *
    * @return $this
    */
    public function setGpgPrimaryKeyId($gpgPrimaryKeyId)
    {
        $this->container['gpgPrimaryKeyId'] = $gpgPrimaryKeyId;
        return $this;
    }

    /**
    * Gets gpgNickName
    *  gpg昵称
    *
    * @return string|null
    */
    public function getGpgNickName()
    {
        return $this->container['gpgNickName'];
    }

    /**
    * Sets gpgNickName
    *
    * @param string|null $gpgNickName gpg昵称
    *
    * @return $this
    */
    public function setGpgNickName($gpgNickName)
    {
        $this->container['gpgNickName'] = $gpgNickName;
        return $this;
    }

    /**
    * Gets gpgTenantName
    *  gpg租户昵称
    *
    * @return string|null
    */
    public function getGpgTenantName()
    {
        return $this->container['gpgTenantName'];
    }

    /**
    * Sets gpgTenantName
    *
    * @param string|null $gpgTenantName gpg租户昵称
    *
    * @return $this
    */
    public function setGpgTenantName($gpgTenantName)
    {
        $this->container['gpgTenantName'] = $gpgTenantName;
        return $this;
    }

    /**
    * Gets gpgUserName
    *  gpg用户名称
    *
    * @return string|null
    */
    public function getGpgUserName()
    {
        return $this->container['gpgUserName'];
    }

    /**
    * Sets gpgUserName
    *
    * @param string|null $gpgUserName gpg用户名称
    *
    * @return $this
    */
    public function setGpgUserName($gpgUserName)
    {
        $this->container['gpgUserName'] = $gpgUserName;
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

