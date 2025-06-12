<?php

namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * agencyName  分配给用户的委托或信任委托的名称
    * permissionSetName  权限集名称
    * agencyUrn  委托或信任委托的统一资源名称（URN）
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'agencyName' => 'string',
            'permissionSetName' => 'string',
            'agencyUrn' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * agencyName  分配给用户的委托或信任委托的名称
    * permissionSetName  权限集名称
    * agencyUrn  委托或信任委托的统一资源名称（URN）
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'agencyName' => null,
        'permissionSetName' => null,
        'agencyUrn' => null,
        'description' => null
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
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * agencyName  分配给用户的委托或信任委托的名称
    * permissionSetName  权限集名称
    * agencyUrn  委托或信任委托的统一资源名称（URN）
    * description  描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'agencyName' => 'agency_name',
            'permissionSetName' => 'permission_set_name',
            'agencyUrn' => 'agency_urn',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * agencyName  分配给用户的委托或信任委托的名称
    * permissionSetName  权限集名称
    * agencyUrn  委托或信任委托的统一资源名称（URN）
    * description  描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'agencyName' => 'setAgencyName',
            'permissionSetName' => 'setPermissionSetName',
            'agencyUrn' => 'setAgencyUrn',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * agencyName  分配给用户的委托或信任委托的名称
    * permissionSetName  权限集名称
    * agencyUrn  委托或信任委托的统一资源名称（URN）
    * description  描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'agencyName' => 'getAgencyName',
            'permissionSetName' => 'getPermissionSetName',
            'agencyUrn' => 'getAgencyUrn',
            'description' => 'getDescription'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['permissionSetName'] = isset($data['permissionSetName']) ? $data['permissionSetName'] : null;
        $this->container['agencyUrn'] = isset($data['agencyUrn']) ? $data['agencyUrn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets accountId
    *  分配给用户的账号的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 分配给用户的账号的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets agencyName
    *  分配给用户的委托或信任委托的名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 分配给用户的委托或信任委托的名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets permissionSetName
    *  权限集名称
    *
    * @return string|null
    */
    public function getPermissionSetName()
    {
        return $this->container['permissionSetName'];
    }

    /**
    * Sets permissionSetName
    *
    * @param string|null $permissionSetName 权限集名称
    *
    * @return $this
    */
    public function setPermissionSetName($permissionSetName)
    {
        $this->container['permissionSetName'] = $permissionSetName;
        return $this;
    }

    /**
    * Gets agencyUrn
    *  委托或信任委托的统一资源名称（URN）
    *
    * @return string|null
    */
    public function getAgencyUrn()
    {
        return $this->container['agencyUrn'];
    }

    /**
    * Sets agencyUrn
    *
    * @param string|null $agencyUrn 委托或信任委托的统一资源名称（URN）
    *
    * @return $this
    */
    public function setAgencyUrn($agencyUrn)
    {
        $this->container['agencyUrn'] = $agencyUrn;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

