<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisplayDataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisplayDataDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  应用程序提供商描述
    * displayName  应用程序提供商显示名
    * iconUrl  应用程序提供商图标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'displayName' => 'string',
            'iconUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  应用程序提供商描述
    * displayName  应用程序提供商显示名
    * iconUrl  应用程序提供商图标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'displayName' => null,
        'iconUrl' => null
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
    * description  应用程序提供商描述
    * displayName  应用程序提供商显示名
    * iconUrl  应用程序提供商图标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'displayName' => 'display_name',
            'iconUrl' => 'icon_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  应用程序提供商描述
    * displayName  应用程序提供商显示名
    * iconUrl  应用程序提供商图标
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'displayName' => 'setDisplayName',
            'iconUrl' => 'setIconUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  应用程序提供商描述
    * displayName  应用程序提供商显示名
    * iconUrl  应用程序提供商图标
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'displayName' => 'getDisplayName',
            'iconUrl' => 'getIconUrl'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 100)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iconUrl']) && (mb_strlen($this->container['iconUrl']) > 768)) {
                $invalidProperties[] = "invalid value for 'iconUrl', the character length must be smaller than or equal to 768.";
            }
            if (!is_null($this->container['iconUrl']) && (mb_strlen($this->container['iconUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'iconUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iconUrl']) && !preg_match("/(http|https):\/\/.*/", $this->container['iconUrl'])) {
                $invalidProperties[] = "invalid value for 'iconUrl', must be conform to the pattern /(http|https):\/\/.*/.";
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
    * Gets description
    *  应用程序提供商描述
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
    * @param string|null $description 应用程序提供商描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets displayName
    *  应用程序提供商显示名
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 应用程序提供商显示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets iconUrl
    *  应用程序提供商图标
    *
    * @return string|null
    */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
    * Sets iconUrl
    *
    * @param string|null $iconUrl 应用程序提供商图标
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
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

