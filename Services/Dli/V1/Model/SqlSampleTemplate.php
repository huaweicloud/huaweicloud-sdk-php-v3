<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlSampleTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlSampleTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lang  语言。
    * name  样例模板名称。
    * sql  样例模板内容。
    * description  样例模板描述。
    * group  样例模板分组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lang' => 'string',
            'name' => 'string',
            'sql' => 'string',
            'description' => 'string',
            'group' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lang  语言。
    * name  样例模板名称。
    * sql  样例模板内容。
    * description  样例模板描述。
    * group  样例模板分组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lang' => null,
        'name' => null,
        'sql' => null,
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
    * lang  语言。
    * name  样例模板名称。
    * sql  样例模板内容。
    * description  样例模板描述。
    * group  样例模板分组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lang' => 'lang',
            'name' => 'name',
            'sql' => 'sql',
            'description' => 'description',
            'group' => 'group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lang  语言。
    * name  样例模板名称。
    * sql  样例模板内容。
    * description  样例模板描述。
    * group  样例模板分组。
    *
    * @var string[]
    */
    protected static $setters = [
            'lang' => 'setLang',
            'name' => 'setName',
            'sql' => 'setSql',
            'description' => 'setDescription',
            'group' => 'setGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lang  语言。
    * name  样例模板名称。
    * sql  样例模板内容。
    * description  样例模板描述。
    * group  样例模板分组。
    *
    * @var string[]
    */
    protected static $getters = [
            'lang' => 'getLang',
            'name' => 'getName',
            'sql' => 'getSql',
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
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
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
    * Gets lang
    *  语言。
    *
    * @return string|null
    */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
    * Sets lang
    *
    * @param string|null $lang 语言。
    *
    * @return $this
    */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;
        return $this;
    }

    /**
    * Gets name
    *  样例模板名称。
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
    * @param string|null $name 样例模板名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sql
    *  样例模板内容。
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql 样例模板内容。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets description
    *  样例模板描述。
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
    * @param string|null $description 样例模板描述。
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
    *  样例模板分组。
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
    * @param string|null $group 样例模板分组。
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

