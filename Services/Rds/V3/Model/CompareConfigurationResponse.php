<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceId  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    * targetId  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    * sourceName  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    * targetName  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    * parameters  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceId' => 'string',
            'targetId' => 'string',
            'sourceName' => 'string',
            'targetName' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Rds\V3\Model\ParamGroupParameterDiff[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceId  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    * targetId  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    * sourceName  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    * targetName  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    * parameters  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceId' => null,
        'targetId' => null,
        'sourceName' => null,
        'targetName' => null,
        'parameters' => null
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
    * sourceId  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    * targetId  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    * sourceName  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    * targetName  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    * parameters  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceId' => 'source_id',
            'targetId' => 'target_id',
            'sourceName' => 'source_name',
            'targetName' => 'target_name',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceId  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    * targetId  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    * sourceName  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    * targetName  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    * parameters  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceId' => 'setSourceId',
            'targetId' => 'setTargetId',
            'sourceName' => 'setSourceName',
            'targetName' => 'setTargetName',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceId  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    * targetId  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    * sourceName  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    * targetName  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    * parameters  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceId' => 'getSourceId',
            'targetId' => 'getTargetId',
            'sourceName' => 'getSourceName',
            'targetName' => 'getTargetName',
            'parameters' => 'getParameters'
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) > 512)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['sourceName']) && (mb_strlen($this->container['sourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetName']) && (mb_strlen($this->container['targetName']) > 512)) {
                $invalidProperties[] = "invalid value for 'targetName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['targetName']) && (mb_strlen($this->container['targetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetName', the character length must be bigger than or equal to 0.";
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
    * Gets sourceId
    *  **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释**：  源参数模板id。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets targetId
    *  **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId **参数解释**：  目标参数模板id。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets sourceName
    *  **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName **参数解释**：  源参数模板名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets targetName
    *  **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string|null $targetName **参数解释**：  目标参数模板名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets parameters
    *  **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ParamGroupParameterDiff[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ParamGroupParameterDiff[]|null $parameters **参数解释**：  模板参数差异信息。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

