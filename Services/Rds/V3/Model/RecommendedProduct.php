<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecommendedProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecommendedProduct';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recommendedLevel  推荐级别
    * applicationScenarios  应用场景
    * flavors  规格信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recommendedLevel' => 'string',
            'applicationScenarios' => 'string',
            'flavors' => '\HuaweiCloud\SDK\Rds\V3\Model\RecommendFlavor[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recommendedLevel  推荐级别
    * applicationScenarios  应用场景
    * flavors  规格信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recommendedLevel' => null,
        'applicationScenarios' => null,
        'flavors' => null
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
    * recommendedLevel  推荐级别
    * applicationScenarios  应用场景
    * flavors  规格信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recommendedLevel' => 'recommended_level',
            'applicationScenarios' => 'application_scenarios',
            'flavors' => 'flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recommendedLevel  推荐级别
    * applicationScenarios  应用场景
    * flavors  规格信息
    *
    * @var string[]
    */
    protected static $setters = [
            'recommendedLevel' => 'setRecommendedLevel',
            'applicationScenarios' => 'setApplicationScenarios',
            'flavors' => 'setFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recommendedLevel  推荐级别
    * applicationScenarios  应用场景
    * flavors  规格信息
    *
    * @var string[]
    */
    protected static $getters = [
            'recommendedLevel' => 'getRecommendedLevel',
            'applicationScenarios' => 'getApplicationScenarios',
            'flavors' => 'getFlavors'
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
    const RECOMMENDED_LEVEL__0 = '0';
    const RECOMMENDED_LEVEL__1 = '1';
    const RECOMMENDED_LEVEL__2 = '2';
    const APPLICATION_SCENARIOS__0 = '0';
    const APPLICATION_SCENARIOS__1 = '1';
    const APPLICATION_SCENARIOS__2 = '2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecommendedLevelAllowableValues()
    {
        return [
            self::RECOMMENDED_LEVEL__0,
            self::RECOMMENDED_LEVEL__1,
            self::RECOMMENDED_LEVEL__2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApplicationScenariosAllowableValues()
    {
        return [
            self::APPLICATION_SCENARIOS__0,
            self::APPLICATION_SCENARIOS__1,
            self::APPLICATION_SCENARIOS__2,
        ];
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
        $this->container['recommendedLevel'] = isset($data['recommendedLevel']) ? $data['recommendedLevel'] : null;
        $this->container['applicationScenarios'] = isset($data['applicationScenarios']) ? $data['applicationScenarios'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recommendedLevel'] === null) {
            $invalidProperties[] = "'recommendedLevel' can't be null";
        }
            $allowedValues = $this->getRecommendedLevelAllowableValues();
                if (!is_null($this->container['recommendedLevel']) && !in_array($this->container['recommendedLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recommendedLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['applicationScenarios'] === null) {
            $invalidProperties[] = "'applicationScenarios' can't be null";
        }
            $allowedValues = $this->getApplicationScenariosAllowableValues();
                if (!is_null($this->container['applicationScenarios']) && !in_array($this->container['applicationScenarios'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'applicationScenarios', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['flavors'] === null) {
            $invalidProperties[] = "'flavors' can't be null";
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
    * Gets recommendedLevel
    *  推荐级别
    *
    * @return string
    */
    public function getRecommendedLevel()
    {
        return $this->container['recommendedLevel'];
    }

    /**
    * Sets recommendedLevel
    *
    * @param string $recommendedLevel 推荐级别
    *
    * @return $this
    */
    public function setRecommendedLevel($recommendedLevel)
    {
        $this->container['recommendedLevel'] = $recommendedLevel;
        return $this;
    }

    /**
    * Gets applicationScenarios
    *  应用场景
    *
    * @return string
    */
    public function getApplicationScenarios()
    {
        return $this->container['applicationScenarios'];
    }

    /**
    * Sets applicationScenarios
    *
    * @param string $applicationScenarios 应用场景
    *
    * @return $this
    */
    public function setApplicationScenarios($applicationScenarios)
    {
        $this->container['applicationScenarios'] = $applicationScenarios;
        return $this;
    }

    /**
    * Gets flavors
    *  规格信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\RecommendFlavor[]
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\RecommendFlavor[] $flavors 规格信息
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
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

