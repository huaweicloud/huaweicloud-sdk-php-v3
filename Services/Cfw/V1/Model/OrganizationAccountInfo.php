<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationAccountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationAccountInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delegated  **参数解释**： 是否已添加 **取值范围**： 不涉及
    * id  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
    * name  **参数解释**： 账号名称 **取值范围**： 不涉及
    * orgType  **参数解释**： 组织节点类型 **取值范围**： account
    * parentId  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    * urn  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delegated' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'orgType' => 'string',
            'parentId' => 'string',
            'urn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delegated  **参数解释**： 是否已添加 **取值范围**： 不涉及
    * id  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
    * name  **参数解释**： 账号名称 **取值范围**： 不涉及
    * orgType  **参数解释**： 组织节点类型 **取值范围**： account
    * parentId  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    * urn  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delegated' => null,
        'id' => null,
        'name' => null,
        'orgType' => null,
        'parentId' => null,
        'urn' => null
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
    * delegated  **参数解释**： 是否已添加 **取值范围**： 不涉及
    * id  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
    * name  **参数解释**： 账号名称 **取值范围**： 不涉及
    * orgType  **参数解释**： 组织节点类型 **取值范围**： account
    * parentId  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    * urn  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delegated' => 'delegated',
            'id' => 'id',
            'name' => 'name',
            'orgType' => 'org_type',
            'parentId' => 'parent_id',
            'urn' => 'urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delegated  **参数解释**： 是否已添加 **取值范围**： 不涉及
    * id  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
    * name  **参数解释**： 账号名称 **取值范围**： 不涉及
    * orgType  **参数解释**： 组织节点类型 **取值范围**： account
    * parentId  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    * urn  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'delegated' => 'setDelegated',
            'id' => 'setId',
            'name' => 'setName',
            'orgType' => 'setOrgType',
            'parentId' => 'setParentId',
            'urn' => 'setUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delegated  **参数解释**： 是否已添加 **取值范围**： 不涉及
    * id  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
    * name  **参数解释**： 账号名称 **取值范围**： 不涉及
    * orgType  **参数解释**： 组织节点类型 **取值范围**： account
    * parentId  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    * urn  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'delegated' => 'getDelegated',
            'id' => 'getId',
            'name' => 'getName',
            'orgType' => 'getOrgType',
            'parentId' => 'getParentId',
            'urn' => 'getUrn'
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
        $this->container['delegated'] = isset($data['delegated']) ? $data['delegated'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orgType'] = isset($data['orgType']) ? $data['orgType'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
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
    * Gets delegated
    *  **参数解释**： 是否已添加 **取值范围**： 不涉及
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
    * @param bool|null $delegated **参数解释**： 是否已添加 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDelegated($delegated)
    {
        $this->container['delegated'] = $delegated;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
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
    * @param string|null $id **参数解释**： 账号的唯一标识符 **取值范围**： 不涉及
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
    *  **参数解释**： 账号名称 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 账号名称 **取值范围**： 不涉及
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
    *  **参数解释**： 组织节点类型 **取值范围**： account
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
    * @param string|null $orgType **参数解释**： 组织节点类型 **取值范围**： account
    *
    * @return $this
    */
    public function setOrgType($orgType)
    {
        $this->container['orgType'] = $orgType;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
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
    * @param string|null $parentId **参数解释**： 父节点（根或组织单元）的唯一标识符（ID） **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets urn
    *  **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
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
    * @param string|null $urn **参数解释**： 账号的统一资源名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
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

