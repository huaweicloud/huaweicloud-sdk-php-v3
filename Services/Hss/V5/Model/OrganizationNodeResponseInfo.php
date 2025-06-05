<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationNodeResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationNodeResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentId  父节点Id
    * id  节点Id
    * urn  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    * name  名称
    * orgType  节点类型，unit:组织单元、account:账号
    * delegated  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentId' => 'string',
            'id' => 'string',
            'urn' => 'string',
            'name' => 'string',
            'orgType' => 'string',
            'delegated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentId  父节点Id
    * id  节点Id
    * urn  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    * name  名称
    * orgType  节点类型，unit:组织单元、account:账号
    * delegated  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentId' => null,
        'id' => null,
        'urn' => null,
        'name' => null,
        'orgType' => null,
        'delegated' => null
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
    * parentId  父节点Id
    * id  节点Id
    * urn  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    * name  名称
    * orgType  节点类型，unit:组织单元、account:账号
    * delegated  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentId' => 'parent_id',
            'id' => 'id',
            'urn' => 'urn',
            'name' => 'name',
            'orgType' => 'org_type',
            'delegated' => 'delegated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentId  父节点Id
    * id  节点Id
    * urn  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    * name  名称
    * orgType  节点类型，unit:组织单元、account:账号
    * delegated  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @var string[]
    */
    protected static $setters = [
            'parentId' => 'setParentId',
            'id' => 'setId',
            'urn' => 'setUrn',
            'name' => 'setName',
            'orgType' => 'setOrgType',
            'delegated' => 'setDelegated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentId  父节点Id
    * id  节点Id
    * urn  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    * name  名称
    * orgType  节点类型，unit:组织单元、account:账号
    * delegated  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @var string[]
    */
    protected static $getters = [
            'parentId' => 'getParentId',
            'id' => 'getId',
            'urn' => 'getUrn',
            'name' => 'getName',
            'orgType' => 'getOrgType',
            'delegated' => 'getDelegated'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orgType'] = isset($data['orgType']) ? $data['orgType'] : null;
        $this->container['delegated'] = isset($data['delegated']) ? $data['delegated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && !preg_match("/^.*$/", $this->container['parentId'])) {
                $invalidProperties[] = "invalid value for 'parentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && !preg_match("/^.*$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) > 64)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urn']) && !preg_match("/^.*$/", $this->container['urn'])) {
                $invalidProperties[] = "invalid value for 'urn', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^.*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['orgType']) && (mb_strlen($this->container['orgType']) > 64)) {
                $invalidProperties[] = "invalid value for 'orgType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orgType']) && (mb_strlen($this->container['orgType']) < 1)) {
                $invalidProperties[] = "invalid value for 'orgType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orgType']) && !preg_match("/^.*$/", $this->container['orgType'])) {
                $invalidProperties[] = "invalid value for 'orgType', must be conform to the pattern /^.*$/.";
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
    * Gets parentId
    *  父节点Id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点Id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets id
    *  节点Id
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
    * @param string|null $id 节点Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn 组织的统一资源名称,格式：organizations::{management_account_id}:xxxxx:{org_id}/xxxxxxxx。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets orgType
    *  节点类型，unit:组织单元、account:账号
    *
    * @return string|null
    */
    public function getOrgType()
    {
        return $this->container['orgType'];
    }

    /**
    * Sets orgType
    *
    * @param string|null $orgType 节点类型，unit:组织单元、account:账号
    *
    * @return $this
    */
    public function setOrgType($orgType)
    {
        $this->container['orgType'] = $orgType;
        return $this;
    }

    /**
    * Gets delegated
    *  组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @return bool|null
    */
    public function getDelegated()
    {
        return $this->container['delegated'];
    }

    /**
    * Sets delegated
    *
    * @param bool|null $delegated 组织或账号是否已授权。   - true: 已授权（无需授权）。   - false: 未授权。
    *
    * @return $this
    */
    public function setDelegated($delegated)
    {
        $this->container['delegated'] = $delegated;
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

