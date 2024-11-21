<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchRecommendationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchRecommendationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recommendations  标签信息。
    * guids  资产guid。
    * addType  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recommendations' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Recommendation[]',
            'guids' => 'string[]',
            'addType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recommendations  标签信息。
    * guids  资产guid。
    * addType  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recommendations' => null,
        'guids' => null,
        'addType' => null
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
    * recommendations  标签信息。
    * guids  资产guid。
    * addType  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recommendations' => 'recommendations',
            'guids' => 'guids',
            'addType' => 'add_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recommendations  标签信息。
    * guids  资产guid。
    * addType  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @var string[]
    */
    protected static $setters = [
            'recommendations' => 'setRecommendations',
            'guids' => 'setGuids',
            'addType' => 'setAddType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recommendations  标签信息。
    * guids  资产guid。
    * addType  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @var string[]
    */
    protected static $getters = [
            'recommendations' => 'getRecommendations',
            'guids' => 'getGuids',
            'addType' => 'getAddType'
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
        $this->container['recommendations'] = isset($data['recommendations']) ? $data['recommendations'] : null;
        $this->container['guids'] = isset($data['guids']) ? $data['guids'] : null;
        $this->container['addType'] = isset($data['addType']) ? $data['addType'] : null;
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
    * Gets recommendations
    *  标签信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Recommendation[]|null
    */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
    * Sets recommendations
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Recommendation[]|null $recommendations 标签信息。
    *
    * @return $this
    */
    public function setRecommendations($recommendations)
    {
        $this->container['recommendations'] = $recommendations;
        return $this;
    }

    /**
    * Gets guids
    *  资产guid。
    *
    * @return string[]|null
    */
    public function getGuids()
    {
        return $this->container['guids'];
    }

    /**
    * Sets guids
    *
    * @param string[]|null $guids 资产guid。
    *
    * @return $this
    */
    public function setGuids($guids)
    {
        $this->container['guids'] = $guids;
        return $this;
    }

    /**
    * Gets addType
    *  添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @return string|null
    */
    public function getAddType()
    {
        return $this->container['addType'];
    }

    /**
    * Sets addType
    *
    * @param string|null $addType 添加资产类型。cover：覆盖  追加：append。默认追加。
    *
    * @return $this
    */
    public function setAddType($addType)
    {
        $this->container['addType'] = $addType;
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

