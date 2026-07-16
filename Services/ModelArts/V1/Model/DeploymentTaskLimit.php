<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentTaskLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentTaskLimit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxConcurrentTask  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxConcurrentTask' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxConcurrentTask  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxConcurrentTask' => null
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
    * maxConcurrentTask  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxConcurrentTask' => 'max_concurrent_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxConcurrentTask  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'maxConcurrentTask' => 'setMaxConcurrentTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxConcurrentTask  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'maxConcurrentTask' => 'getMaxConcurrentTask'
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
        $this->container['maxConcurrentTask'] = isset($data['maxConcurrentTask']) ? $data['maxConcurrentTask'] : null;
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
    * Gets maxConcurrentTask
    *  **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getMaxConcurrentTask()
    {
        return $this->container['maxConcurrentTask'];
    }

    /**
    * Sets maxConcurrentTask
    *
    * @param int|null $maxConcurrentTask **参数解释：** 最大并发任务数 **约束限制：** 不填保留原有值。 **取值范围：** [1, 100]。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMaxConcurrentTask($maxConcurrentTask)
    {
        $this->container['maxConcurrentTask'] = $maxConcurrentTask;
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

