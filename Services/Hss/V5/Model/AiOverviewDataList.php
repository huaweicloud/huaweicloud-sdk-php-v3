<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiOverviewDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiOverviewDataList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    * dimensionStats  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    * sourceInfo  sourceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'dimensionStats' => '\HuaweiCloud\SDK\Hss\V5\Model\AiOverviewDimensionStats[]',
            'sourceInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\AiOverviewSourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    * dimensionStats  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    * sourceInfo  sourceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'dimensionStats' => null,
        'sourceInfo' => null
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
    * source  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    * dimensionStats  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    * sourceInfo  sourceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'dimensionStats' => 'dimension_stats',
            'sourceInfo' => 'source_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    * dimensionStats  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    * sourceInfo  sourceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'dimensionStats' => 'setDimensionStats',
            'sourceInfo' => 'setSourceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    * dimensionStats  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    * sourceInfo  sourceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'dimensionStats' => 'getDimensionStats',
            'sourceInfo' => 'getSourceInfo'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['dimensionStats'] = isset($data['dimensionStats']) ? $data['dimensionStats'] : null;
        $this->container['sourceInfo'] = isset($data['sourceInfo']) ? $data['sourceInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 64)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 1)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 1.";
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
    * Gets source
    *  **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**： 产品类型 **取值范围**： - AgentArts - OfficeAce - OpenClaw
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets dimensionStats
    *  **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AiOverviewDimensionStats[]|null
    */
    public function getDimensionStats()
    {
        return $this->container['dimensionStats'];
    }

    /**
    * Sets dimensionStats
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AiOverviewDimensionStats[]|null $dimensionStats **参数解释**: 维度统计列表（type=alarm/risk时返回） **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDimensionStats($dimensionStats)
    {
        $this->container['dimensionStats'] = $dimensionStats;
        return $this;
    }

    /**
    * Gets sourceInfo
    *  sourceInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AiOverviewSourceInfo|null
    */
    public function getSourceInfo()
    {
        return $this->container['sourceInfo'];
    }

    /**
    * Sets sourceInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AiOverviewSourceInfo|null $sourceInfo sourceInfo
    *
    * @return $this
    */
    public function setSourceInfo($sourceInfo)
    {
        $this->container['sourceInfo'] = $sourceInfo;
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

