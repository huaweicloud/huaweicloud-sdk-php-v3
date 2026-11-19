<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DelegatedAccountResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DelegatedAccountResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentId  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    * parentName  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    * id  **参数解释** 账号ID **取值范围** 字符长度1-64位
    * urn  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
    * name  **参数解释** 账号名称 **取值范围** 字符长度1-64位
    * orgType  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentId' => 'string',
            'parentName' => 'string',
            'id' => 'string',
            'urn' => 'string',
            'name' => 'string',
            'orgType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentId  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    * parentName  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    * id  **参数解释** 账号ID **取值范围** 字符长度1-64位
    * urn  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
    * name  **参数解释** 账号名称 **取值范围** 字符长度1-64位
    * orgType  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentId' => null,
        'parentName' => null,
        'id' => null,
        'urn' => null,
        'name' => null,
        'orgType' => null
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
    * parentId  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    * parentName  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    * id  **参数解释** 账号ID **取值范围** 字符长度1-64位
    * urn  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
    * name  **参数解释** 账号名称 **取值范围** 字符长度1-64位
    * orgType  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentId' => 'parent_id',
            'parentName' => 'parent_name',
            'id' => 'id',
            'urn' => 'urn',
            'name' => 'name',
            'orgType' => 'org_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentId  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    * parentName  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    * id  **参数解释** 账号ID **取值范围** 字符长度1-64位
    * urn  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
    * name  **参数解释** 账号名称 **取值范围** 字符长度1-64位
    * orgType  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @var string[]
    */
    protected static $setters = [
            'parentId' => 'setParentId',
            'parentName' => 'setParentName',
            'id' => 'setId',
            'urn' => 'setUrn',
            'name' => 'setName',
            'orgType' => 'setOrgType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentId  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    * parentName  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    * id  **参数解释** 账号ID **取值范围** 字符长度1-64位
    * urn  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
    * name  **参数解释** 账号名称 **取值范围** 字符长度1-64位
    * orgType  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @var string[]
    */
    protected static $getters = [
            'parentId' => 'getParentId',
            'parentName' => 'getParentName',
            'id' => 'getId',
            'urn' => 'getUrn',
            'name' => 'getName',
            'orgType' => 'getOrgType'
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
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orgType'] = isset($data['orgType']) ? $data['orgType'] : null;
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
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) > 2048)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) < 0)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orgType']) && !preg_match("/^unit|account|project$/", $this->container['orgType'])) {
                $invalidProperties[] = "invalid value for 'orgType', must be conform to the pattern /^unit|account|project$/.";
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
    *  **参数解释** 父节点的ID **取值范围** 字符长度1-64位
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
    * @param string|null $parentId **参数解释** 父节点的ID **取值范围** 字符长度1-64位
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets parentName
    *  **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName **参数解释** 父节点名称 **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释** 账号ID **取值范围** 字符长度1-64位
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
    * @param string|null $id **参数解释** 账号ID **取值范围** 字符长度1-64位
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
    *  **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
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
    * @param string|null $urn **参数解释** 账号的统一资源名称 **取值范围** 字符长度0-2048位
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
    *  **参数解释** 账号名称 **取值范围** 字符长度1-64位
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
    * @param string|null $name **参数解释** 账号名称 **取值范围** 字符长度1-64位
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
    *  **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
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
    * @param string|null $orgType **参数解释** 节点类型 **取值范围** - unit：组织 - account：账号 - project：项目
    *
    * @return $this
    */
    public function setOrgType($orgType)
    {
        $this->container['orgType'] = $orgType;
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

