<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyEngineRisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyEngineRisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * level  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    * suggest  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    * influence  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    * guidance  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    * serviceImpactDuration  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    * upgradeDuration  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'level' => 'int',
            'suggest' => 'string',
            'influence' => 'string',
            'guidance' => 'string',
            'serviceImpactDuration' => 'string',
            'upgradeDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * level  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    * suggest  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    * influence  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    * guidance  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    * serviceImpactDuration  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    * upgradeDuration  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'level' => null,
        'suggest' => null,
        'influence' => null,
        'guidance' => null,
        'serviceImpactDuration' => null,
        'upgradeDuration' => null
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
    * level  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    * suggest  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    * influence  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    * guidance  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    * serviceImpactDuration  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    * upgradeDuration  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'level' => 'level',
            'suggest' => 'suggest',
            'influence' => 'influence',
            'guidance' => 'guidance',
            'serviceImpactDuration' => 'service_impact_duration',
            'upgradeDuration' => 'upgrade_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * level  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    * suggest  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    * influence  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    * guidance  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    * serviceImpactDuration  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    * upgradeDuration  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'level' => 'setLevel',
            'suggest' => 'setSuggest',
            'influence' => 'setInfluence',
            'guidance' => 'setGuidance',
            'serviceImpactDuration' => 'setServiceImpactDuration',
            'upgradeDuration' => 'setUpgradeDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * level  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    * suggest  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    * influence  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    * guidance  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    * serviceImpactDuration  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    * upgradeDuration  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'level' => 'getLevel',
            'suggest' => 'getSuggest',
            'influence' => 'getInfluence',
            'guidance' => 'getGuidance',
            'serviceImpactDuration' => 'getServiceImpactDuration',
            'upgradeDuration' => 'getUpgradeDuration'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['suggest'] = isset($data['suggest']) ? $data['suggest'] : null;
        $this->container['influence'] = isset($data['influence']) ? $data['influence'] : null;
        $this->container['guidance'] = isset($data['guidance']) ? $data['guidance'] : null;
        $this->container['serviceImpactDuration'] = isset($data['serviceImpactDuration']) ? $data['serviceImpactDuration'] : null;
        $this->container['upgradeDuration'] = isset($data['upgradeDuration']) ? $data['upgradeDuration'] : null;
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
    * Gets level
    *  **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释**：  风险级别。  **取值范围**： 1：一级风险。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets suggest
    *  **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSuggest()
    {
        return $this->container['suggest'];
    }

    /**
    * Sets suggest
    *
    * @param string|null $suggest **参数解释**：  建议升级原因。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSuggest($suggest)
    {
        $this->container['suggest'] = $suggest;
        return $this;
    }

    /**
    * Gets influence
    *  **参数解释**：  升级影响。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInfluence()
    {
        return $this->container['influence'];
    }

    /**
    * Sets influence
    *
    * @param string|null $influence **参数解释**：  升级影响。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInfluence($influence)
    {
        $this->container['influence'] = $influence;
        return $this;
    }

    /**
    * Gets guidance
    *  **参数解释**：  升级指导。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getGuidance()
    {
        return $this->container['guidance'];
    }

    /**
    * Sets guidance
    *
    * @param string|null $guidance **参数解释**：  升级指导。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setGuidance($guidance)
    {
        $this->container['guidance'] = $guidance;
        return $this;
    }

    /**
    * Gets serviceImpactDuration
    *  **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getServiceImpactDuration()
    {
        return $this->container['serviceImpactDuration'];
    }

    /**
    * Sets serviceImpactDuration
    *
    * @param string|null $serviceImpactDuration **参数解释**：  预估业务影响时长。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setServiceImpactDuration($serviceImpactDuration)
    {
        $this->container['serviceImpactDuration'] = $serviceImpactDuration;
        return $this;
    }

    /**
    * Gets upgradeDuration
    *  **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getUpgradeDuration()
    {
        return $this->container['upgradeDuration'];
    }

    /**
    * Sets upgradeDuration
    *
    * @param string|null $upgradeDuration **参数解释**：  预估升级时长。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setUpgradeDuration($upgradeDuration)
    {
        $this->container['upgradeDuration'] = $upgradeDuration;
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

