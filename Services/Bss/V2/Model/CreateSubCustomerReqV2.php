<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubCustomerReqV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubCustomerReqV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partyId  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    * displayName  企业子账号的显示名称，不限制特殊字符。
    * subCustomerAssociationType  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    * permissionIds  申请的权限列表。 支持的权限项请参见下表。
    * newSubCustomer  newSubCustomer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partyId' => 'string',
            'displayName' => 'string',
            'subCustomerAssociationType' => 'int',
            'permissionIds' => 'string[]',
            'newSubCustomer' => '\HuaweiCloud\SDK\Bss\V2\Model\NewCustomerV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partyId  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    * displayName  企业子账号的显示名称，不限制特殊字符。
    * subCustomerAssociationType  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    * permissionIds  申请的权限列表。 支持的权限项请参见下表。
    * newSubCustomer  newSubCustomer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partyId' => null,
        'displayName' => null,
        'subCustomerAssociationType' => 'int32',
        'permissionIds' => null,
        'newSubCustomer' => null
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
    * partyId  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    * displayName  企业子账号的显示名称，不限制特殊字符。
    * subCustomerAssociationType  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    * permissionIds  申请的权限列表。 支持的权限项请参见下表。
    * newSubCustomer  newSubCustomer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partyId' => 'party_id',
            'displayName' => 'display_name',
            'subCustomerAssociationType' => 'sub_customer_association_type',
            'permissionIds' => 'permission_ids',
            'newSubCustomer' => 'new_sub_customer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partyId  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    * displayName  企业子账号的显示名称，不限制特殊字符。
    * subCustomerAssociationType  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    * permissionIds  申请的权限列表。 支持的权限项请参见下表。
    * newSubCustomer  newSubCustomer
    *
    * @var string[]
    */
    protected static $setters = [
            'partyId' => 'setPartyId',
            'displayName' => 'setDisplayName',
            'subCustomerAssociationType' => 'setSubCustomerAssociationType',
            'permissionIds' => 'setPermissionIds',
            'newSubCustomer' => 'setNewSubCustomer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partyId  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    * displayName  企业子账号的显示名称，不限制特殊字符。
    * subCustomerAssociationType  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    * permissionIds  申请的权限列表。 支持的权限项请参见下表。
    * newSubCustomer  newSubCustomer
    *
    * @var string[]
    */
    protected static $getters = [
            'partyId' => 'getPartyId',
            'displayName' => 'getDisplayName',
            'subCustomerAssociationType' => 'getSubCustomerAssociationType',
            'permissionIds' => 'getPermissionIds',
            'newSubCustomer' => 'getNewSubCustomer'
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
        $this->container['partyId'] = isset($data['partyId']) ? $data['partyId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['subCustomerAssociationType'] = isset($data['subCustomerAssociationType']) ? $data['subCustomerAssociationType'] : null;
        $this->container['permissionIds'] = isset($data['permissionIds']) ? $data['permissionIds'] : null;
        $this->container['newSubCustomer'] = isset($data['newSubCustomer']) ? $data['newSubCustomer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['partyId'] === null) {
            $invalidProperties[] = "'partyId' can't be null";
        }
            if ((mb_strlen($this->container['partyId']) > 20)) {
                $invalidProperties[] = "invalid value for 'partyId', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['partyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'partyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 64)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 0)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subCustomerAssociationType'] === null) {
            $invalidProperties[] = "'subCustomerAssociationType' can't be null";
        }
            if (($this->container['subCustomerAssociationType'] > 1)) {
                $invalidProperties[] = "invalid value for 'subCustomerAssociationType', must be smaller than or equal to 1.";
            }
            if (($this->container['subCustomerAssociationType'] < -1)) {
                $invalidProperties[] = "invalid value for 'subCustomerAssociationType', must be bigger than or equal to -1.";
            }
        if ($this->container['newSubCustomer'] === null) {
            $invalidProperties[] = "'newSubCustomer' can't be null";
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
    * Gets partyId
    *  企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    *
    * @return string
    */
    public function getPartyId()
    {
        return $this->container['partyId'];
    }

    /**
    * Sets partyId
    *
    * @param string $partyId 企业子账号挂载的组织单元。 组织单元的Party ID，通过查询企业组织结构接口的响应获得。
    *
    * @return $this
    */
    public function setPartyId($partyId)
    {
        $this->container['partyId'] = $partyId;
        return $this;
    }

    /**
    * Gets displayName
    *  企业子账号的显示名称，不限制特殊字符。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 企业子账号的显示名称，不限制特殊字符。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets subCustomerAssociationType
    *  子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    *
    * @return int
    */
    public function getSubCustomerAssociationType()
    {
        return $this->container['subCustomerAssociationType'];
    }

    /**
    * Sets subCustomerAssociationType
    *
    * @param int $subCustomerAssociationType 子账号关联类型：1：同一法人。 关联类型目前只能是同一法人。
    *
    * @return $this
    */
    public function setSubCustomerAssociationType($subCustomerAssociationType)
    {
        $this->container['subCustomerAssociationType'] = $subCustomerAssociationType;
        return $this;
    }

    /**
    * Gets permissionIds
    *  申请的权限列表。 支持的权限项请参见下表。
    *
    * @return string[]|null
    */
    public function getPermissionIds()
    {
        return $this->container['permissionIds'];
    }

    /**
    * Sets permissionIds
    *
    * @param string[]|null $permissionIds 申请的权限列表。 支持的权限项请参见下表。
    *
    * @return $this
    */
    public function setPermissionIds($permissionIds)
    {
        $this->container['permissionIds'] = $permissionIds;
        return $this;
    }

    /**
    * Gets newSubCustomer
    *  newSubCustomer
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\NewCustomerV2
    */
    public function getNewSubCustomer()
    {
        return $this->container['newSubCustomer'];
    }

    /**
    * Sets newSubCustomer
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\NewCustomerV2 $newSubCustomer newSubCustomer
    *
    * @return $this
    */
    public function setNewSubCustomer($newSubCustomer)
    {
        $this->container['newSubCustomer'] = $newSubCustomer;
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

