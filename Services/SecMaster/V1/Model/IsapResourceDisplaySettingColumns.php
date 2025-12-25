<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapResourceDisplaySettingColumns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapResource_display_setting_columns';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnAlias  列别名
    * columnName  列名称
    * displayByDefault  是否默认显示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnAlias' => 'string',
            'columnName' => 'string',
            'displayByDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnAlias  列别名
    * columnName  列名称
    * displayByDefault  是否默认显示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnAlias' => null,
        'columnName' => null,
        'displayByDefault' => null
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
    * columnAlias  列别名
    * columnName  列名称
    * displayByDefault  是否默认显示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnAlias' => 'column_alias',
            'columnName' => 'column_name',
            'displayByDefault' => 'display_by_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnAlias  列别名
    * columnName  列名称
    * displayByDefault  是否默认显示
    *
    * @var string[]
    */
    protected static $setters = [
            'columnAlias' => 'setColumnAlias',
            'columnName' => 'setColumnName',
            'displayByDefault' => 'setDisplayByDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnAlias  列别名
    * columnName  列名称
    * displayByDefault  是否默认显示
    *
    * @var string[]
    */
    protected static $getters = [
            'columnAlias' => 'getColumnAlias',
            'columnName' => 'getColumnName',
            'displayByDefault' => 'getDisplayByDefault'
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
        $this->container['columnAlias'] = isset($data['columnAlias']) ? $data['columnAlias'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['displayByDefault'] = isset($data['displayByDefault']) ? $data['displayByDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['columnAlias']) && (mb_strlen($this->container['columnAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnAlias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnAlias']) && (mb_strlen($this->container['columnAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
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
    * Gets columnAlias
    *  列别名
    *
    * @return string|null
    */
    public function getColumnAlias()
    {
        return $this->container['columnAlias'];
    }

    /**
    * Sets columnAlias
    *
    * @param string|null $columnAlias 列别名
    *
    * @return $this
    */
    public function setColumnAlias($columnAlias)
    {
        $this->container['columnAlias'] = $columnAlias;
        return $this;
    }

    /**
    * Gets columnName
    *  列名称
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets displayByDefault
    *  是否默认显示
    *
    * @return bool|null
    */
    public function getDisplayByDefault()
    {
        return $this->container['displayByDefault'];
    }

    /**
    * Sets displayByDefault
    *
    * @param bool|null $displayByDefault 是否默认显示
    *
    * @return $this
    */
    public function setDisplayByDefault($displayByDefault)
    {
        $this->container['displayByDefault'] = $displayByDefault;
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

