<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPolicyGeoipMapResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPolicyGeoipMapResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * continent  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    * geomap  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    * locale  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'continent' => 'object',
            'geomap' => 'object',
            'locale' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * continent  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    * geomap  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    * locale  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'continent' => null,
        'geomap' => null,
        'locale' => null
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
    * continent  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    * geomap  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    * locale  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'continent' => 'continent',
            'geomap' => 'geomap',
            'locale' => 'locale'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * continent  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    * geomap  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    * locale  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'continent' => 'setContinent',
            'geomap' => 'setGeomap',
            'locale' => 'setLocale'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * continent  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    * geomap  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    * locale  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'continent' => 'getContinent',
            'geomap' => 'getGeomap',
            'locale' => 'getLocale'
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
        $this->container['continent'] = isset($data['continent']) ? $data['continent'] : null;
        $this->container['geomap'] = isset($data['geomap']) ? $data['geomap'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
    * Gets continent
    *  **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getContinent()
    {
        return $this->container['continent'];
    }

    /**
    * Sets continent
    *
    * @param object|null $continent **参数解释：** 各个洲上的国家名称分布信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setContinent($continent)
    {
        $this->container['continent'] = $continent;
        return $this;
    }

    /**
    * Gets geomap
    *  **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getGeomap()
    {
        return $this->container['geomap'];
    }

    /**
    * Sets geomap
    *
    * @param object|null $geomap **参数解释：** key值为各个国家的简称（AB和AB2除外，AB表示海外及港澳台，AB2表示海外），当key为CN时，里面是数组内容为各个省份的简称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setGeomap($geomap)
    {
        $this->container['geomap'] = $geomap;
        return $this;
    }

    /**
    * Gets locale
    *  **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param object|null $locale **参数解释：** geomap中的值对应语言的显示名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
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

