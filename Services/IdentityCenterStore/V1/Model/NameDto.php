<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

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
    * familyName  用户的姓氏
    * formatted  包含要显示的名称的格式化版本的字符串
    * givenName  用户的名字
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    * middleName  用户的中间名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'familyName' => 'string',
            'formatted' => 'string',
            'givenName' => 'string',
            'honorificPrefix' => 'string',
            'honorificSuffix' => 'string',
            'middleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * familyName  用户的姓氏
    * formatted  包含要显示的名称的格式化版本的字符串
    * givenName  用户的名字
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    * middleName  用户的中间名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'familyName' => null,
        'formatted' => null,
        'givenName' => null,
        'honorificPrefix' => null,
        'honorificSuffix' => null,
        'middleName' => null
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
    * familyName  用户的姓氏
    * formatted  包含要显示的名称的格式化版本的字符串
    * givenName  用户的名字
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    * middleName  用户的中间名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'familyName' => 'family_name',
            'formatted' => 'formatted',
            'givenName' => 'given_name',
            'honorificPrefix' => 'honorific_prefix',
            'honorificSuffix' => 'honorific_suffix',
            'middleName' => 'middle_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * familyName  用户的姓氏
    * formatted  包含要显示的名称的格式化版本的字符串
    * givenName  用户的名字
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    * middleName  用户的中间名
    *
    * @var string[]
    */
    protected static $setters = [
            'familyName' => 'setFamilyName',
            'formatted' => 'setFormatted',
            'givenName' => 'setGivenName',
            'honorificPrefix' => 'setHonorificPrefix',
            'honorificSuffix' => 'setHonorificSuffix',
            'middleName' => 'setMiddleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * familyName  用户的姓氏
    * formatted  包含要显示的名称的格式化版本的字符串
    * givenName  用户的名字
    * honorificPrefix  用户的尊称前缀
    * honorificSuffix  用户的尊称后缀
    * middleName  用户的中间名
    *
    * @var string[]
    */
    protected static $getters = [
            'familyName' => 'getFamilyName',
            'formatted' => 'getFormatted',
            'givenName' => 'getGivenName',
            'honorificPrefix' => 'getHonorificPrefix',
            'honorificSuffix' => 'getHonorificSuffix',
            'middleName' => 'getMiddleName'
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
        $this->container['familyName'] = isset($data['familyName']) ? $data['familyName'] : null;
        $this->container['formatted'] = isset($data['formatted']) ? $data['formatted'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['honorificPrefix'] = isset($data['honorificPrefix']) ? $data['honorificPrefix'] : null;
        $this->container['honorificSuffix'] = isset($data['honorificSuffix']) ? $data['honorificSuffix'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
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
            if ((mb_strlen($this->container['familyName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'familyName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['familyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'familyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['familyName'])) {
                $invalidProperties[] = "invalid value for 'familyName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['formatted']) && (mb_strlen($this->container['formatted']) > 1024)) {
                $invalidProperties[] = "invalid value for 'formatted', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['formatted']) && (mb_strlen($this->container['formatted']) < 1)) {
                $invalidProperties[] = "invalid value for 'formatted', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['formatted']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['formatted'])) {
                $invalidProperties[] = "invalid value for 'formatted', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['givenName'] === null) {
            $invalidProperties[] = "'givenName' can't be null";
        }
            if ((mb_strlen($this->container['givenName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'givenName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['givenName']) < 1)) {
                $invalidProperties[] = "invalid value for 'givenName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['givenName'])) {
                $invalidProperties[] = "invalid value for 'givenName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['honorificPrefix']) && (mb_strlen($this->container['honorificPrefix']) > 1024)) {
                $invalidProperties[] = "invalid value for 'honorificPrefix', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['honorificPrefix']) && (mb_strlen($this->container['honorificPrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'honorificPrefix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['honorificPrefix']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['honorificPrefix'])) {
                $invalidProperties[] = "invalid value for 'honorificPrefix', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['honorificSuffix']) && (mb_strlen($this->container['honorificSuffix']) > 1024)) {
                $invalidProperties[] = "invalid value for 'honorificSuffix', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['honorificSuffix']) && (mb_strlen($this->container['honorificSuffix']) < 1)) {
                $invalidProperties[] = "invalid value for 'honorificSuffix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['honorificSuffix']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['honorificSuffix'])) {
                $invalidProperties[] = "invalid value for 'honorificSuffix', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['middleName']) && (mb_strlen($this->container['middleName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'middleName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['middleName']) && (mb_strlen($this->container['middleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'middleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['middleName']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['middleName'])) {
                $invalidProperties[] = "invalid value for 'middleName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
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

