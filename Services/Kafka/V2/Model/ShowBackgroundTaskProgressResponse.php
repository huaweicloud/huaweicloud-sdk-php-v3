<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackgroundTaskProgressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackgroundTaskProgressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progressPercentage  **参数解释**： 进度。 **取值范围**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    * stepList  **参数解释**： 步骤列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progressPercentage' => 'int',
            'remainTime' => 'int',
            'stepList' => '\HuaweiCloud\SDK\Kafka\V2\Model\StepDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progressPercentage  **参数解释**： 进度。 **取值范围**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    * stepList  **参数解释**： 步骤列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progressPercentage' => null,
        'remainTime' => null,
        'stepList' => null
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
    * progressPercentage  **参数解释**： 进度。 **取值范围**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    * stepList  **参数解释**： 步骤列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progressPercentage' => 'progress_percentage',
            'remainTime' => 'remain_time',
            'stepList' => 'step_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progressPercentage  **参数解释**： 进度。 **取值范围**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    * stepList  **参数解释**： 步骤列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'progressPercentage' => 'setProgressPercentage',
            'remainTime' => 'setRemainTime',
            'stepList' => 'setStepList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progressPercentage  **参数解释**： 进度。 **取值范围**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    * stepList  **参数解释**： 步骤列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'progressPercentage' => 'getProgressPercentage',
            'remainTime' => 'getRemainTime',
            'stepList' => 'getStepList'
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
        $this->container['progressPercentage'] = isset($data['progressPercentage']) ? $data['progressPercentage'] : null;
        $this->container['remainTime'] = isset($data['remainTime']) ? $data['remainTime'] : null;
        $this->container['stepList'] = isset($data['stepList']) ? $data['stepList'] : null;
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
    * Gets progressPercentage
    *  **参数解释**： 进度。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getProgressPercentage()
    {
        return $this->container['progressPercentage'];
    }

    /**
    * Sets progressPercentage
    *
    * @param int|null $progressPercentage **参数解释**： 进度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProgressPercentage($progressPercentage)
    {
        $this->container['progressPercentage'] = $progressPercentage;
        return $this;
    }

    /**
    * Gets remainTime
    *  **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRemainTime()
    {
        return $this->container['remainTime'];
    }

    /**
    * Sets remainTime
    *
    * @param int|null $remainTime **参数解释**： 剩余时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRemainTime($remainTime)
    {
        $this->container['remainTime'] = $remainTime;
        return $this;
    }

    /**
    * Gets stepList
    *  **参数解释**： 步骤列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\StepDetail[]|null
    */
    public function getStepList()
    {
        return $this->container['stepList'];
    }

    /**
    * Sets stepList
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\StepDetail[]|null $stepList **参数解释**： 步骤列表。
    *
    * @return $this
    */
    public function setStepList($stepList)
    {
        $this->container['stepList'] = $stepList;
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

