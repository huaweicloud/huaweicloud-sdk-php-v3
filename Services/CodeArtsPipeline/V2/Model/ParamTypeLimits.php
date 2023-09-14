<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamTypeLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamTypeLimits';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disable  是否废弃
    * name  语言名字
    * displayname  语言展示名字
    * id  规则集ID
    * language  扫描语言
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disable' => 'string',
            'name' => 'string',
            'displayname' => 'string',
            'id' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disable  是否废弃
    * name  语言名字
    * displayname  语言展示名字
    * id  规则集ID
    * language  扫描语言
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disable' => null,
        'name' => null,
        'displayname' => null,
        'id' => null,
        'language' => null
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
    * disable  是否废弃
    * name  语言名字
    * displayname  语言展示名字
    * id  规则集ID
    * language  扫描语言
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disable' => 'disable',
            'name' => 'name',
            'displayname' => 'displayname',
            'id' => 'id',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disable  是否废弃
    * name  语言名字
    * displayname  语言展示名字
    * id  规则集ID
    * language  扫描语言
    *
    * @var string[]
    */
    protected static $setters = [
            'disable' => 'setDisable',
            'name' => 'setName',
            'displayname' => 'setDisplayname',
            'id' => 'setId',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disable  是否废弃
    * name  语言名字
    * displayname  语言展示名字
    * id  规则集ID
    * language  扫描语言
    *
    * @var string[]
    */
    protected static $getters = [
            'disable' => 'getDisable',
            'name' => 'getName',
            'displayname' => 'getDisplayname',
            'id' => 'getId',
            'language' => 'getLanguage'
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
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayname'] = isset($data['displayname']) ? $data['displayname'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disable'] === null) {
            $invalidProperties[] = "'disable' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['displayname'] === null) {
            $invalidProperties[] = "'displayname' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
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
    * Gets disable
    *  是否废弃
    *
    * @return string
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param string $disable 是否废弃
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets name
    *  语言名字
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
    * @param string $name 语言名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayname
    *  语言展示名字
    *
    * @return string
    */
    public function getDisplayname()
    {
        return $this->container['displayname'];
    }

    /**
    * Sets displayname
    *
    * @param string $displayname 语言展示名字
    *
    * @return $this
    */
    public function setDisplayname($displayname)
    {
        $this->container['displayname'] = $displayname;
        return $this;
    }

    /**
    * Gets id
    *  规则集ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 规则集ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets language
    *  扫描语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 扫描语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

