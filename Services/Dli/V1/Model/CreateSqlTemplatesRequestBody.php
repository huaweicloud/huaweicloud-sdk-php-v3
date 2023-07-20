<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlTemplatesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlTemplatesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  新增的SQL模板。
    * sqlName  新增SQL模板名称，该名称在当前工程下必须唯一。
    * description  新增SQL模板的描述信息，可以为空字符串。
    * group  分组名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'sqlName' => 'string',
            'description' => 'string',
            'group' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  新增的SQL模板。
    * sqlName  新增SQL模板名称，该名称在当前工程下必须唯一。
    * description  新增SQL模板的描述信息，可以为空字符串。
    * group  分组名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'sqlName' => null,
        'description' => null,
        'group' => null
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
    * sql  新增的SQL模板。
    * sqlName  新增SQL模板名称，该名称在当前工程下必须唯一。
    * description  新增SQL模板的描述信息，可以为空字符串。
    * group  分组名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'sqlName' => 'sql_name',
            'description' => 'description',
            'group' => 'group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  新增的SQL模板。
    * sqlName  新增SQL模板名称，该名称在当前工程下必须唯一。
    * description  新增SQL模板的描述信息，可以为空字符串。
    * group  分组名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'sqlName' => 'setSqlName',
            'description' => 'setDescription',
            'group' => 'setGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  新增的SQL模板。
    * sqlName  新增SQL模板名称，该名称在当前工程下必须唯一。
    * description  新增SQL模板的描述信息，可以为空字符串。
    * group  分组名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'sqlName' => 'getSqlName',
            'description' => 'getDescription',
            'group' => 'getGroup'
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlName'] = isset($data['sqlName']) ? $data['sqlName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['sqlName'] === null) {
            $invalidProperties[] = "'sqlName' can't be null";
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
    * Gets sql
    *  新增的SQL模板。
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql 新增的SQL模板。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlName
    *  新增SQL模板名称，该名称在当前工程下必须唯一。
    *
    * @return string
    */
    public function getSqlName()
    {
        return $this->container['sqlName'];
    }

    /**
    * Sets sqlName
    *
    * @param string $sqlName 新增SQL模板名称，该名称在当前工程下必须唯一。
    *
    * @return $this
    */
    public function setSqlName($sqlName)
    {
        $this->container['sqlName'] = $sqlName;
        return $this;
    }

    /**
    * Gets description
    *  新增SQL模板的描述信息，可以为空字符串。
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
    * @param string|null $description 新增SQL模板的描述信息，可以为空字符串。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets group
    *  分组名称。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组名称。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
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

