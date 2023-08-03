<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAddonTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAddonTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addonTemplateName  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addonTemplateName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addonTemplateName  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addonTemplateName' => null
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
    * addonTemplateName  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addonTemplateName' => 'addon_template_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addonTemplateName  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'addonTemplateName' => 'setAddonTemplateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addonTemplateName  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'addonTemplateName' => 'getAddonTemplateName'
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
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['addonTemplateName']) && (mb_strlen($this->container['addonTemplateName']) > 30)) {
                $invalidProperties[] = "invalid value for 'addonTemplateName', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['addonTemplateName']) && (mb_strlen($this->container['addonTemplateName']) < 2)) {
                $invalidProperties[] = "invalid value for 'addonTemplateName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['addonTemplateName']) && !preg_match("/^(([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9])+$/", $this->container['addonTemplateName'])) {
                $invalidProperties[] = "invalid value for 'addonTemplateName', must be conform to the pattern /^(([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9])+$/.";
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
    * Gets addonTemplateName
    *  指定的插件名称或插件别名，不填写则查询列表。
    *
    * @return string|null
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string|null $addonTemplateName 指定的插件名称或插件别名，不填写则查询列表。
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
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

