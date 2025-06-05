<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionUpdateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionUpdateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  订阅描述
    * sources  订阅事件源列表，字段存在则代表全量更新订阅源
    * targets  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'sources' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[]',
            'targets' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  订阅描述
    * sources  订阅事件源列表，字段存在则代表全量更新订阅源
    * targets  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'sources' => null,
        'targets' => null
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
    * description  订阅描述
    * sources  订阅事件源列表，字段存在则代表全量更新订阅源
    * targets  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'sources' => 'sources',
            'targets' => 'targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  订阅描述
    * sources  订阅事件源列表，字段存在则代表全量更新订阅源
    * targets  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'sources' => 'setSources',
            'targets' => 'setTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  订阅描述
    * sources  订阅事件源列表，字段存在则代表全量更新订阅源
    * targets  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'sources' => 'getSources',
            'targets' => 'getTargets'
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
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
    *  订阅描述
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
    * @param string|null $description 订阅描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sources
    *  订阅事件源列表，字段存在则代表全量更新订阅源
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[]|null $sources 订阅事件源列表，字段存在则代表全量更新订阅源
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets targets
    *  订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[]|null $targets 订阅事件目标列表，字段存在则代表全量更新订阅目标
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
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

