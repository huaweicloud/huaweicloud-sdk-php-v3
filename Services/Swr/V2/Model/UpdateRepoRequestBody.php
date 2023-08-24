<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isPublic  是否为公共仓库，可选值为true或false。
    * category  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * description  镜像仓库的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isPublic' => 'bool',
            'category' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isPublic  是否为公共仓库，可选值为true或false。
    * category  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * description  镜像仓库的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isPublic' => null,
        'category' => null,
        'description' => null
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
    * isPublic  是否为公共仓库，可选值为true或false。
    * category  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * description  镜像仓库的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isPublic' => 'is_public',
            'category' => 'category',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isPublic  是否为公共仓库，可选值为true或false。
    * category  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * description  镜像仓库的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'isPublic' => 'setIsPublic',
            'category' => 'setCategory',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isPublic  是否为公共仓库，可选值为true或false。
    * category  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * description  镜像仓库的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'isPublic' => 'getIsPublic',
            'category' => 'getCategory',
            'description' => 'getDescription'
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
    const CATEGORY_APP_SERVER = 'app_server';
    const CATEGORY_LINUX = 'linux';
    const CATEGORY_FRAMEWORK_APP = 'framework_app';
    const CATEGORY_DATABASE = 'database';
    const CATEGORY_LANG = 'lang';
    const CATEGORY_WINDOWS = 'windows';
    const CATEGORY_ARMS = 'arms';
    const CATEGORY_OTHER = 'other';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_APP_SERVER,
            self::CATEGORY_LINUX,
            self::CATEGORY_FRAMEWORK_APP,
            self::CATEGORY_DATABASE,
            self::CATEGORY_LANG,
            self::CATEGORY_WINDOWS,
            self::CATEGORY_ARMS,
            self::CATEGORY_OTHER,
        ];
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
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets isPublic
    *  是否为公共仓库，可选值为true或false。
    *
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 是否为公共仓库，可选值为true或false。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets category
    *  仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 仓库类型，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  镜像仓库的描述信息。
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
    * @param string|null $description 镜像仓库的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

