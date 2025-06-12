<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NameDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NameDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formatted  包含要显示的名称的格式化版本的字符串
    * familyName  用户的姓氏
    * givenName  用户的名字
    * middleName  用户的中间名
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formatted' => 'string',
            'familyName' => 'string',
            'givenName' => 'string',
            'middleName' => 'string',
            'honorificPrefix' => 'string',
            'honorificSuffix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formatted  包含要显示的名称的格式化版本的字符串
    * familyName  用户的姓氏
    * givenName  用户的名字
    * middleName  用户的中间名
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formatted' => null,
        'familyName' => null,
        'givenName' => null,
        'middleName' => null,
        'honorificPrefix' => null,
        'honorificSuffix' => null
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
    * formatted  包含要显示的名称的格式化版本的字符串
    * familyName  用户的姓氏
    * givenName  用户的名字
    * middleName  用户的中间名
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formatted' => 'formatted',
            'familyName' => 'familyName',
            'givenName' => 'givenName',
            'middleName' => 'middleName',
            'honorificPrefix' => 'honorificPrefix',
            'honorificSuffix' => 'honorificSuffix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formatted  包含要显示的名称的格式化版本的字符串
    * familyName  用户的姓氏
    * givenName  用户的名字
    * middleName  用户的中间名
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    *
    * @var string[]
    */
    protected static $setters = [
            'formatted' => 'setFormatted',
            'familyName' => 'setFamilyName',
            'givenName' => 'setGivenName',
            'middleName' => 'setMiddleName',
            'honorificPrefix' => 'setHonorificPrefix',
            'honorificSuffix' => 'setHonorificSuffix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formatted  包含要显示的名称的格式化版本的字符串
    * familyName  用户的姓氏
    * givenName  用户的名字
    * middleName  用户的中间名
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    *
    * @var string[]
    */
    protected static $getters = [
            'formatted' => 'getFormatted',
            'familyName' => 'getFamilyName',
            'givenName' => 'getGivenName',
            'middleName' => 'getMiddleName',
            'honorificPrefix' => 'getHonorificPrefix',
            'honorificSuffix' => 'getHonorificSuffix'
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
        $this->container['formatted'] = isset($data['formatted']) ? $data['formatted'] : null;
        $this->container['familyName'] = isset($data['familyName']) ? $data['familyName'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['honorificPrefix'] = isset($data['honorificPrefix']) ? $data['honorificPrefix'] : null;
        $this->container['honorificSuffix'] = isset($data['honorificSuffix']) ? $data['honorificSuffix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['familyName'] === null) {
            $invalidProperties[] = "'familyName' can't be null";
        }
        if ($this->container['givenName'] === null) {
            $invalidProperties[] = "'givenName' can't be null";
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
    * Gets formatted
    *  包含要显示的名称的格式化版本的字符串
    *
    * @return string|null
    */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
    * Sets formatted
    *
    * @param string|null $formatted 包含要显示的名称的格式化版本的字符串
    *
    * @return $this
    */
    public function setFormatted($formatted)
    {
        $this->container['formatted'] = $formatted;
        return $this;
    }

    /**
    * Gets familyName
    *  用户的姓氏
    *
    * @return string
    */
    public function getFamilyName()
    {
        return $this->container['familyName'];
    }

    /**
    * Sets familyName
    *
    * @param string $familyName 用户的姓氏
    *
    * @return $this
    */
    public function setFamilyName($familyName)
    {
        $this->container['familyName'] = $familyName;
        return $this;
    }

    /**
    * Gets givenName
    *  用户的名字
    *
    * @return string
    */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
    * Sets givenName
    *
    * @param string $givenName 用户的名字
    *
    * @return $this
    */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;
        return $this;
    }

    /**
    * Gets middleName
    *  用户的中间名
    *
    * @return string|null
    */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
    * Sets middleName
    *
    * @param string|null $middleName 用户的中间名
    *
    * @return $this
    */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;
        return $this;
    }

    /**
    * Gets honorificPrefix
    *  用户的尊称前缀
    *
    * @return string|null
    */
    public function getHonorificPrefix()
    {
        return $this->container['honorificPrefix'];
    }

    /**
    * Sets honorificPrefix
    *
    * @param string|null $honorificPrefix 用户的尊称前缀
    *
    * @return $this
    */
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->container['honorificPrefix'] = $honorificPrefix;
        return $this;
    }

    /**
    * Gets honorificSuffix
    *  用户的尊称后缀
    *
    * @return string|null
    */
    public function getHonorificSuffix()
    {
        return $this->container['honorificSuffix'];
    }

    /**
    * Sets honorificSuffix
    *
    * @param string|null $honorificSuffix 用户的尊称后缀
    *
    * @return $this
    */
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->container['honorificSuffix'] = $honorificSuffix;
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

