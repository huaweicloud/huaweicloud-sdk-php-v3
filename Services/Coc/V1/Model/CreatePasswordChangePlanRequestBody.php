<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePasswordChangePlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePasswordChangePlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendor  云服务厂商
    * resourceProvider  云服务
    * resourceType  资源类型
    * instanceType  实例类型
    * accountsToBeChanged  需要改密的账号
    * accountsNotToBeChanged  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    * accountsPasswordChangeStatus  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    * resourcesId  实例id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendor' => 'string',
            'resourceProvider' => 'string',
            'resourceType' => 'string',
            'instanceType' => 'string',
            'accountsToBeChanged' => 'string[]',
            'accountsNotToBeChanged' => 'string[]',
            'accountsPasswordChangeStatus' => 'string[]',
            'resourcesId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendor  云服务厂商
    * resourceProvider  云服务
    * resourceType  资源类型
    * instanceType  实例类型
    * accountsToBeChanged  需要改密的账号
    * accountsNotToBeChanged  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    * accountsPasswordChangeStatus  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    * resourcesId  实例id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendor' => null,
        'resourceProvider' => null,
        'resourceType' => null,
        'instanceType' => null,
        'accountsToBeChanged' => null,
        'accountsNotToBeChanged' => null,
        'accountsPasswordChangeStatus' => null,
        'resourcesId' => null
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
    * vendor  云服务厂商
    * resourceProvider  云服务
    * resourceType  资源类型
    * instanceType  实例类型
    * accountsToBeChanged  需要改密的账号
    * accountsNotToBeChanged  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    * accountsPasswordChangeStatus  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    * resourcesId  实例id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendor' => 'vendor',
            'resourceProvider' => 'resource_provider',
            'resourceType' => 'resource_type',
            'instanceType' => 'instance_type',
            'accountsToBeChanged' => 'accounts_to_be_changed',
            'accountsNotToBeChanged' => 'accounts_not_to_be_changed',
            'accountsPasswordChangeStatus' => 'accounts_password_change_status',
            'resourcesId' => 'resources_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendor  云服务厂商
    * resourceProvider  云服务
    * resourceType  资源类型
    * instanceType  实例类型
    * accountsToBeChanged  需要改密的账号
    * accountsNotToBeChanged  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    * accountsPasswordChangeStatus  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    * resourcesId  实例id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vendor' => 'setVendor',
            'resourceProvider' => 'setResourceProvider',
            'resourceType' => 'setResourceType',
            'instanceType' => 'setInstanceType',
            'accountsToBeChanged' => 'setAccountsToBeChanged',
            'accountsNotToBeChanged' => 'setAccountsNotToBeChanged',
            'accountsPasswordChangeStatus' => 'setAccountsPasswordChangeStatus',
            'resourcesId' => 'setResourcesId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendor  云服务厂商
    * resourceProvider  云服务
    * resourceType  资源类型
    * instanceType  实例类型
    * accountsToBeChanged  需要改密的账号
    * accountsNotToBeChanged  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    * accountsPasswordChangeStatus  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    * resourcesId  实例id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vendor' => 'getVendor',
            'resourceProvider' => 'getResourceProvider',
            'resourceType' => 'getResourceType',
            'instanceType' => 'getInstanceType',
            'accountsToBeChanged' => 'getAccountsToBeChanged',
            'accountsNotToBeChanged' => 'getAccountsNotToBeChanged',
            'accountsPasswordChangeStatus' => 'getAccountsPasswordChangeStatus',
            'resourcesId' => 'getResourcesId'
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['accountsToBeChanged'] = isset($data['accountsToBeChanged']) ? $data['accountsToBeChanged'] : null;
        $this->container['accountsNotToBeChanged'] = isset($data['accountsNotToBeChanged']) ? $data['accountsNotToBeChanged'] : null;
        $this->container['accountsPasswordChangeStatus'] = isset($data['accountsPasswordChangeStatus']) ? $data['accountsPasswordChangeStatus'] : null;
        $this->container['resourcesId'] = isset($data['resourcesId']) ? $data['resourcesId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
            if ((mb_strlen($this->container['vendor']) > 36)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vendor']) < 1)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/HuaweiCloud/", $this->container['vendor'])) {
                $invalidProperties[] = "invalid value for 'vendor', must be conform to the pattern /HuaweiCloud/.";
            }
        if ($this->container['resourceProvider'] === null) {
            $invalidProperties[] = "'resourceProvider' can't be null";
        }
            if ((mb_strlen($this->container['resourceProvider']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceProvider']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/ecs|rds|dcs|dms|gaussdb/", $this->container['resourceProvider'])) {
                $invalidProperties[] = "invalid value for 'resourceProvider', must be conform to the pattern /ecs|rds|dcs|dms|gaussdb/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            if ((mb_strlen($this->container['instanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourcesId'] === null) {
            $invalidProperties[] = "'resourcesId' can't be null";
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
    * Gets vendor
    *  云服务厂商
    *
    * @return string
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string $vendor 云服务厂商
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  云服务
    *
    * @return string
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string $resourceProvider 云服务
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets accountsToBeChanged
    *  需要改密的账号
    *
    * @return string[]|null
    */
    public function getAccountsToBeChanged()
    {
        return $this->container['accountsToBeChanged'];
    }

    /**
    * Sets accountsToBeChanged
    *
    * @param string[]|null $accountsToBeChanged 需要改密的账号
    *
    * @return $this
    */
    public function setAccountsToBeChanged($accountsToBeChanged)
    {
        $this->container['accountsToBeChanged'] = $accountsToBeChanged;
        return $this;
    }

    /**
    * Gets accountsNotToBeChanged
    *  不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    *
    * @return string[]|null
    */
    public function getAccountsNotToBeChanged()
    {
        return $this->container['accountsNotToBeChanged'];
    }

    /**
    * Sets accountsNotToBeChanged
    *
    * @param string[]|null $accountsNotToBeChanged 不需要改密的账号，注意：account_to_be_changed不为空时，此字段不生效！！！两者都为空时默认修改所有账号
    *
    * @return $this
    */
    public function setAccountsNotToBeChanged($accountsNotToBeChanged)
    {
        $this->container['accountsNotToBeChanged'] = $accountsNotToBeChanged;
        return $this;
    }

    /**
    * Gets accountsPasswordChangeStatus
    *  需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    *
    * @return string[]|null
    */
    public function getAccountsPasswordChangeStatus()
    {
        return $this->container['accountsPasswordChangeStatus'];
    }

    /**
    * Sets accountsPasswordChangeStatus
    *
    * @param string[]|null $accountsPasswordChangeStatus 需要改密的账号的状态，枚举值  TO_BE_CHANGED：待改密 FAILED：改密失败 SUCCESSFUL：改密成功 PROCESSING：改密中  不传默认修改所有状态的账号
    *
    * @return $this
    */
    public function setAccountsPasswordChangeStatus($accountsPasswordChangeStatus)
    {
        $this->container['accountsPasswordChangeStatus'] = $accountsPasswordChangeStatus;
        return $this;
    }

    /**
    * Gets resourcesId
    *  实例id列表
    *
    * @return string[]
    */
    public function getResourcesId()
    {
        return $this->container['resourcesId'];
    }

    /**
    * Sets resourcesId
    *
    * @param string[] $resourcesId 实例id列表
    *
    * @return $this
    */
    public function setResourcesId($resourcesId)
    {
        $this->container['resourcesId'] = $resourcesId;
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

