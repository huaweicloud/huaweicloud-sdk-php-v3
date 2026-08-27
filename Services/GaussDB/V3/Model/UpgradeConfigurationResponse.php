<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    * diffParameters  **参数解释**：  差异参数列表。
    * skippedParameterNames  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'diffParameters' => '\HuaweiCloud\SDK\GaussDB\V3\Model\GroupParameterDiffInfo[]',
            'skippedParameterNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    * diffParameters  **参数解释**：  差异参数列表。
    * skippedParameterNames  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'diffParameters' => null,
        'skippedParameterNames' => null
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
    * name  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    * diffParameters  **参数解释**：  差异参数列表。
    * skippedParameterNames  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'diffParameters' => 'diff_parameters',
            'skippedParameterNames' => 'skipped_parameter_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    * diffParameters  **参数解释**：  差异参数列表。
    * skippedParameterNames  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'diffParameters' => 'setDiffParameters',
            'skippedParameterNames' => 'setSkippedParameterNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    * diffParameters  **参数解释**：  差异参数列表。
    * skippedParameterNames  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'diffParameters' => 'getDiffParameters',
            'skippedParameterNames' => 'getSkippedParameterNames'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['diffParameters'] = isset($data['diffParameters']) ? $data['diffParameters'] : null;
        $this->container['skippedParameterNames'] = isset($data['skippedParameterNames']) ? $data['skippedParameterNames'] : null;
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
    * Gets name
    *  **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：  参数模板名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets diffParameters
    *  **参数解释**：  差异参数列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\GroupParameterDiffInfo[]|null
    */
    public function getDiffParameters()
    {
        return $this->container['diffParameters'];
    }

    /**
    * Sets diffParameters
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\GroupParameterDiffInfo[]|null $diffParameters **参数解释**：  差异参数列表。
    *
    * @return $this
    */
    public function setDiffParameters($diffParameters)
    {
        $this->container['diffParameters'] = $diffParameters;
        return $this;
    }

    /**
    * Gets skippedParameterNames
    *  **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @return string[]|null
    */
    public function getSkippedParameterNames()
    {
        return $this->container['skippedParameterNames'];
    }

    /**
    * Sets skippedParameterNames
    *
    * @param string[]|null $skippedParameterNames **参数解释**：  执行更新操作被跳过的参数名称列表（原值与目标值相同）。
    *
    * @return $this
    */
    public function setSkippedParameterNames($skippedParameterNames)
    {
        $this->container['skippedParameterNames'] = $skippedParameterNames;
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

