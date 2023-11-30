<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonConditionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommonConditionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * fieldIds  字段id信息， 格式：table_id.field_id
    * fieldNames  字段名称信息， 格式：表名称.字段名称
    * calExp  计算表达式
    * calFnIds  计算表达式id
    * frontConfigs  前端表达式配置，用于前端数据恢复
    * id  id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'fieldIds' => 'string[]',
            'fieldNames' => 'string[]',
            'calExp' => 'string',
            'calFnIds' => 'int[]',
            'frontConfigs' => 'string',
            'id' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * fieldIds  字段id信息， 格式：table_id.field_id
    * fieldNames  字段名称信息， 格式：表名称.字段名称
    * calExp  计算表达式
    * calFnIds  计算表达式id
    * frontConfigs  前端表达式配置，用于前端数据恢复
    * id  id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'fieldIds' => null,
        'fieldNames' => null,
        'calExp' => null,
        'calFnIds' => 'int64',
        'frontConfigs' => null,
        'id' => 'int64'
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
    * name  名称
    * fieldIds  字段id信息， 格式：table_id.field_id
    * fieldNames  字段名称信息， 格式：表名称.字段名称
    * calExp  计算表达式
    * calFnIds  计算表达式id
    * frontConfigs  前端表达式配置，用于前端数据恢复
    * id  id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'fieldIds' => 'field_ids',
            'fieldNames' => 'field_names',
            'calExp' => 'cal_exp',
            'calFnIds' => 'cal_fn_ids',
            'frontConfigs' => 'front_configs',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * fieldIds  字段id信息， 格式：table_id.field_id
    * fieldNames  字段名称信息， 格式：表名称.字段名称
    * calExp  计算表达式
    * calFnIds  计算表达式id
    * frontConfigs  前端表达式配置，用于前端数据恢复
    * id  id
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'fieldIds' => 'setFieldIds',
            'fieldNames' => 'setFieldNames',
            'calExp' => 'setCalExp',
            'calFnIds' => 'setCalFnIds',
            'frontConfigs' => 'setFrontConfigs',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * fieldIds  字段id信息， 格式：table_id.field_id
    * fieldNames  字段名称信息， 格式：表名称.字段名称
    * calExp  计算表达式
    * calFnIds  计算表达式id
    * frontConfigs  前端表达式配置，用于前端数据恢复
    * id  id
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'fieldIds' => 'getFieldIds',
            'fieldNames' => 'getFieldNames',
            'calExp' => 'getCalExp',
            'calFnIds' => 'getCalFnIds',
            'frontConfigs' => 'getFrontConfigs',
            'id' => 'getId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fieldIds'] = isset($data['fieldIds']) ? $data['fieldIds'] : null;
        $this->container['fieldNames'] = isset($data['fieldNames']) ? $data['fieldNames'] : null;
        $this->container['calExp'] = isset($data['calExp']) ? $data['calExp'] : null;
        $this->container['calFnIds'] = isset($data['calFnIds']) ? $data['calFnIds'] : null;
        $this->container['frontConfigs'] = isset($data['frontConfigs']) ? $data['frontConfigs'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\(\\)\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\(\\)\\-]*$/.";
            }
        if ($this->container['fieldIds'] === null) {
            $invalidProperties[] = "'fieldIds' can't be null";
        }
        if ($this->container['calExp'] === null) {
            $invalidProperties[] = "'calExp' can't be null";
        }
            if ((mb_strlen($this->container['calExp']) > 20000)) {
                $invalidProperties[] = "invalid value for 'calExp', the character length must be smaller than or equal to 20000.";
            }
        if ($this->container['calFnIds'] === null) {
            $invalidProperties[] = "'calFnIds' can't be null";
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
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fieldIds
    *  字段id信息， 格式：table_id.field_id
    *
    * @return string[]
    */
    public function getFieldIds()
    {
        return $this->container['fieldIds'];
    }

    /**
    * Sets fieldIds
    *
    * @param string[] $fieldIds 字段id信息， 格式：table_id.field_id
    *
    * @return $this
    */
    public function setFieldIds($fieldIds)
    {
        $this->container['fieldIds'] = $fieldIds;
        return $this;
    }

    /**
    * Gets fieldNames
    *  字段名称信息， 格式：表名称.字段名称
    *
    * @return string[]|null
    */
    public function getFieldNames()
    {
        return $this->container['fieldNames'];
    }

    /**
    * Sets fieldNames
    *
    * @param string[]|null $fieldNames 字段名称信息， 格式：表名称.字段名称
    *
    * @return $this
    */
    public function setFieldNames($fieldNames)
    {
        $this->container['fieldNames'] = $fieldNames;
        return $this;
    }

    /**
    * Gets calExp
    *  计算表达式
    *
    * @return string
    */
    public function getCalExp()
    {
        return $this->container['calExp'];
    }

    /**
    * Sets calExp
    *
    * @param string $calExp 计算表达式
    *
    * @return $this
    */
    public function setCalExp($calExp)
    {
        $this->container['calExp'] = $calExp;
        return $this;
    }

    /**
    * Gets calFnIds
    *  计算表达式id
    *
    * @return int[]
    */
    public function getCalFnIds()
    {
        return $this->container['calFnIds'];
    }

    /**
    * Sets calFnIds
    *
    * @param int[] $calFnIds 计算表达式id
    *
    * @return $this
    */
    public function setCalFnIds($calFnIds)
    {
        $this->container['calFnIds'] = $calFnIds;
        return $this;
    }

    /**
    * Gets frontConfigs
    *  前端表达式配置，用于前端数据恢复
    *
    * @return string|null
    */
    public function getFrontConfigs()
    {
        return $this->container['frontConfigs'];
    }

    /**
    * Sets frontConfigs
    *
    * @param string|null $frontConfigs 前端表达式配置，用于前端数据恢复
    *
    * @return $this
    */
    public function setFrontConfigs($frontConfigs)
    {
        $this->container['frontConfigs'] = $frontConfigs;
        return $this;
    }

    /**
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

