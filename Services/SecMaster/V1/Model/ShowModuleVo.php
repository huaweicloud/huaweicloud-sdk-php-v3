<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowModuleVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowModuleVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * children  相关描述信息
    * connectionModuleId  UUID
    * fields  相关描述信息
    * name  名称
    * templateId  UUID
    * moduleId  UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'children' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]',
            'connectionModuleId' => 'string',
            'fields' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ModuleFieldVo[]',
            'name' => 'string',
            'templateId' => 'string',
            'moduleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * children  相关描述信息
    * connectionModuleId  UUID
    * fields  相关描述信息
    * name  名称
    * templateId  UUID
    * moduleId  UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'children' => null,
        'connectionModuleId' => null,
        'fields' => null,
        'name' => null,
        'templateId' => null,
        'moduleId' => null
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
    * children  相关描述信息
    * connectionModuleId  UUID
    * fields  相关描述信息
    * name  名称
    * templateId  UUID
    * moduleId  UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'children' => 'children',
            'connectionModuleId' => 'connection_module_id',
            'fields' => 'fields',
            'name' => 'name',
            'templateId' => 'template_id',
            'moduleId' => 'module_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * children  相关描述信息
    * connectionModuleId  UUID
    * fields  相关描述信息
    * name  名称
    * templateId  UUID
    * moduleId  UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'children' => 'setChildren',
            'connectionModuleId' => 'setConnectionModuleId',
            'fields' => 'setFields',
            'name' => 'setName',
            'templateId' => 'setTemplateId',
            'moduleId' => 'setModuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * children  相关描述信息
    * connectionModuleId  UUID
    * fields  相关描述信息
    * name  名称
    * templateId  UUID
    * moduleId  UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'children' => 'getChildren',
            'connectionModuleId' => 'getConnectionModuleId',
            'fields' => 'getFields',
            'name' => 'getName',
            'templateId' => 'getTemplateId',
            'moduleId' => 'getModuleId'
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
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['connectionModuleId'] = isset($data['connectionModuleId']) ? $data['connectionModuleId'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['connectionModuleId']) && (mb_strlen($this->container['connectionModuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'connectionModuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['connectionModuleId']) && (mb_strlen($this->container['connectionModuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'connectionModuleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 36.";
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
    * Gets children
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateModuleVo[]|null $children 相关描述信息
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets connectionModuleId
    *  UUID
    *
    * @return string|null
    */
    public function getConnectionModuleId()
    {
        return $this->container['connectionModuleId'];
    }

    /**
    * Sets connectionModuleId
    *
    * @param string|null $connectionModuleId UUID
    *
    * @return $this
    */
    public function setConnectionModuleId($connectionModuleId)
    {
        $this->container['connectionModuleId'] = $connectionModuleId;
        return $this;
    }

    /**
    * Gets fields
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ModuleFieldVo[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ModuleFieldVo[]|null $fields 相关描述信息
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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
    * Gets templateId
    *  UUID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId UUID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets moduleId
    *  UUID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId UUID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
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

