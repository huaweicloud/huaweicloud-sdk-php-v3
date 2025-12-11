<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchAntivirusTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchAntivirusTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * hostIds  关联主机列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'hostIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * hostIds  关联主机列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'hostIds' => null
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
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * hostIds  关联主机列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'hostIds' => 'host_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * hostIds  关联主机列表
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'hostIds' => 'setHostIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    * taskName  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    * hostIds  关联主机列表
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'hostIds' => 'getHostIds'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['hostIds'] === null) {
            $invalidProperties[] = "'hostIds' can't be null";
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
    * Gets taskId
    *  **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId **参数解释**： 任务ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName **参数解释**: 任务名称 **取值范围**: 最大长度255个unicode字符。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets hostIds
    *  关联主机列表
    *
    * @return string[]
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[] $hostIds 关联主机列表
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
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

