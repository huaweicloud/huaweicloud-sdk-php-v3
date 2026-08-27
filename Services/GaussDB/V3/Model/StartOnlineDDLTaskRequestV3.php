<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartOnlineDDLTaskRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartOnlineDDLTaskRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoClear  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    * taskContent  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoClear' => 'bool',
            'taskContent' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineTaskContentItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoClear  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    * taskContent  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoClear' => null,
        'taskContent' => null
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
    * autoClear  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    * taskContent  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoClear' => 'auto_clear',
            'taskContent' => 'task_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoClear  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    * taskContent  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoClear' => 'setAutoClear',
            'taskContent' => 'setTaskContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoClear  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    * taskContent  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoClear' => 'getAutoClear',
            'taskContent' => 'getTaskContent'
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
        $this->container['autoClear'] = isset($data['autoClear']) ? $data['autoClear'] : null;
        $this->container['taskContent'] = isset($data['taskContent']) ? $data['taskContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskContent'] === null) {
            $invalidProperties[] = "'taskContent' can't be null";
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
    * Gets autoClear
    *  **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getAutoClear()
    {
        return $this->container['autoClear'];
    }

    /**
    * Sets autoClear
    *
    * @param bool|null $autoClear **参数解释**：  是否开启自动清理临时表。  **约束限制**：  不涉及。  **取值范围**： - true：开启自动清理临时表。 - false：关闭自动清理临时表。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setAutoClear($autoClear)
    {
        $this->container['autoClear'] = $autoClear;
        return $this;
    }

    /**
    * Gets taskContent
    *  **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineTaskContentItem[]
    */
    public function getTaskContent()
    {
        return $this->container['taskContent'];
    }

    /**
    * Sets taskContent
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineTaskContentItem[] $taskContent **参数解释**：  无锁变更任务详细内容。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setTaskContent($taskContent)
    {
        $this->container['taskContent'] = $taskContent;
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

