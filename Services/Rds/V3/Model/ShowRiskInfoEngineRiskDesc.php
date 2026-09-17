<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRiskInfoEngineRiskDesc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRiskInfoEngineRiskDesc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id
    * engineName  当前引擎
    * engineVersion  当前引擎小版本
    * level  风险等级，默认1
    * suggest  建议升级原因,无风险为空
    * influence  升级影响，无风险为空
    * guidance  指导链接，无风险为空
    * serviceImpactDuration  业务影响时长，无风险为空
    * upgradeDuration  升级时长，无风险为空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'level' => 'int',
            'suggest' => 'string',
            'influence' => 'string',
            'guidance' => 'string',
            'serviceImpactDuration' => 'string',
            'upgradeDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id
    * engineName  当前引擎
    * engineVersion  当前引擎小版本
    * level  风险等级，默认1
    * suggest  建议升级原因,无风险为空
    * influence  升级影响，无风险为空
    * guidance  指导链接，无风险为空
    * serviceImpactDuration  业务影响时长，无风险为空
    * upgradeDuration  升级时长，无风险为空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'engineName' => null,
        'engineVersion' => null,
        'level' => 'int64',
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
    * instanceId  实例id
    * engineName  当前引擎
    * engineVersion  当前引擎小版本
    * level  风险等级，默认1
    * suggest  建议升级原因,无风险为空
    * influence  升级影响，无风险为空
    * guidance  指导链接，无风险为空
    * serviceImpactDuration  业务影响时长，无风险为空
    * upgradeDuration  升级时长，无风险为空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'level' => 'level',
            'suggest' => 'suggest',
            'influence' => 'influence',
            'guidance' => 'guidance',
            'serviceImpactDuration' => 'service_impact_duration',
            'upgradeDuration' => 'upgrade_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id
    * engineName  当前引擎
    * engineVersion  当前引擎小版本
    * level  风险等级，默认1
    * suggest  建议升级原因,无风险为空
    * influence  升级影响，无风险为空
    * guidance  指导链接，无风险为空
    * serviceImpactDuration  业务影响时长，无风险为空
    * upgradeDuration  升级时长，无风险为空
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'level' => 'setLevel',
            'suggest' => 'setSuggest',
            'influence' => 'setInfluence',
            'guidance' => 'setGuidance',
            'serviceImpactDuration' => 'setServiceImpactDuration',
            'upgradeDuration' => 'setUpgradeDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id
    * engineName  当前引擎
    * engineVersion  当前引擎小版本
    * level  风险等级，默认1
    * suggest  建议升级原因,无风险为空
    * influence  升级影响，无风险为空
    * guidance  指导链接，无风险为空
    * serviceImpactDuration  业务影响时长，无风险为空
    * upgradeDuration  升级时长，无风险为空
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
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
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) > 128)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 100)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['suggest']) && (mb_strlen($this->container['suggest']) > 4096)) {
                $invalidProperties[] = "invalid value for 'suggest', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['suggest']) && (mb_strlen($this->container['suggest']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['influence']) && (mb_strlen($this->container['influence']) > 4096)) {
                $invalidProperties[] = "invalid value for 'influence', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['influence']) && (mb_strlen($this->container['influence']) < 0)) {
                $invalidProperties[] = "invalid value for 'influence', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) > 4096)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['guidance']) && (mb_strlen($this->container['guidance']) < 0)) {
                $invalidProperties[] = "invalid value for 'guidance', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceImpactDuration']) && (mb_strlen($this->container['serviceImpactDuration']) > 4096)) {
                $invalidProperties[] = "invalid value for 'serviceImpactDuration', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['serviceImpactDuration']) && (mb_strlen($this->container['serviceImpactDuration']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceImpactDuration', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeDuration']) && (mb_strlen($this->container['upgradeDuration']) > 4096)) {
                $invalidProperties[] = "invalid value for 'upgradeDuration', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['upgradeDuration']) && (mb_strlen($this->container['upgradeDuration']) < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeDuration', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets engineName
    *  当前引擎
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 当前引擎
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  当前引擎小版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 当前引擎小版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets level
    *  风险等级，默认1
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
    * @param int|null $level 风险等级，默认1
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
    *  建议升级原因,无风险为空
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
    * @param string|null $suggest 建议升级原因,无风险为空
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
    *  升级影响，无风险为空
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
    * @param string|null $influence 升级影响，无风险为空
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
    *  指导链接，无风险为空
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
    * @param string|null $guidance 指导链接，无风险为空
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
    *  业务影响时长，无风险为空
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
    * @param string|null $serviceImpactDuration 业务影响时长，无风险为空
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
    *  升级时长，无风险为空
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
    * @param string|null $upgradeDuration 升级时长，无风险为空
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

