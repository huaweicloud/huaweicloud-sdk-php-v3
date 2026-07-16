<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventCategoriesResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventCategoriesResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    * name  **参数解释**：事件类型名称。 **取值范围**：不涉及。
    * description  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    * notification  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'notification' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    * name  **参数解释**：事件类型名称。 **取值范围**：不涉及。
    * description  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    * notification  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'notification' => null
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
    * id  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    * name  **参数解释**：事件类型名称。 **取值范围**：不涉及。
    * description  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    * notification  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'notification' => 'notification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    * name  **参数解释**：事件类型名称。 **取值范围**：不涉及。
    * description  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    * notification  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'notification' => 'setNotification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    * name  **参数解释**：事件类型名称。 **取值范围**：不涉及。
    * description  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    * notification  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'notification' => 'getNotification'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
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
    * Gets id
    *  **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：事件类型id。 **取值范围**：枚举值如下： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业疑似卡死 - JobPreempted：作业抢占
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：事件类型名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：事件类型名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：事件类型描述。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：事件类型描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets notification
    *  **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @return bool|null
    */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
    * Sets notification
    *
    * @param bool|null $notification **参数解释**：是否通知。 **取值范围**： - true：通知 - false：不通知
    *
    * @return $this
    */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;
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

