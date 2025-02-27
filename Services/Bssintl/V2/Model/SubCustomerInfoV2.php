<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubCustomerInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubCustomerInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  企业子账号的客户ID。
    * name  企业子账号的用户名。
    * displayName  企业子账号的显示名称。 不限制特殊字符。
    * status  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    * orgId  子账号归属的组织单元ID。
    * orgName  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'status' => 'int',
            'orgId' => 'string',
            'orgName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  企业子账号的客户ID。
    * name  企业子账号的用户名。
    * displayName  企业子账号的显示名称。 不限制特殊字符。
    * status  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    * orgId  子账号归属的组织单元ID。
    * orgName  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'displayName' => null,
        'status' => 'int32',
        'orgId' => null,
        'orgName' => null
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
    * id  企业子账号的客户ID。
    * name  企业子账号的用户名。
    * displayName  企业子账号的显示名称。 不限制特殊字符。
    * status  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    * orgId  子账号归属的组织单元ID。
    * orgName  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'displayName' => 'display_name',
            'status' => 'status',
            'orgId' => 'org_id',
            'orgName' => 'org_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  企业子账号的客户ID。
    * name  企业子账号的用户名。
    * displayName  企业子账号的显示名称。 不限制特殊字符。
    * status  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    * orgId  子账号归属的组织单元ID。
    * orgName  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'status' => 'setStatus',
            'orgId' => 'setOrgId',
            'orgName' => 'setOrgName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  企业子账号的客户ID。
    * name  企业子账号的用户名。
    * displayName  企业子账号的显示名称。 不限制特殊字符。
    * status  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    * orgId  子账号归属的组织单元ID。
    * orgName  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'status' => 'getStatus',
            'orgId' => 'getOrgId',
            'orgName' => 'getOrgName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['orgName'] = isset($data['orgName']) ? $data['orgName'] : null;
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
    * Gets id
    *  企业子账号的客户ID。
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
    * @param string|null $id 企业子账号的客户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  企业子账号的用户名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 企业子账号的用户名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  企业子账号的显示名称。 不限制特殊字符。
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
    * @param string|null $displayName 企业子账号的显示名称。 不限制特殊字符。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets status
    *  子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 子账号状态： 1：正常2：创建中3：关闭中4：已关闭101：子账号注册中102：子账号待激活
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orgId
    *  子账号归属的组织单元ID。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 子账号归属的组织单元ID。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets orgName
    *  子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @return string|null
    */
    public function getOrgName()
    {
        return $this->container['orgName'];
    }

    /**
    * Sets orgName
    *
    * @param string|null $orgName 子账号归属的组织单元名称。  说明： 当子账号归属的组织是企业组织根节点时，本属性可能为空。
    *
    * @return $this
    */
    public function setOrgName($orgName)
    {
        $this->container['orgName'] = $orgName;
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

