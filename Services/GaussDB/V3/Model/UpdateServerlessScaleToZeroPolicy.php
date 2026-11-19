<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateServerlessScaleToZeroPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateServerlessScaleToZeroPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scaleToZero  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    * idleDurationSeconds  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scaleToZero' => 'bool',
            'idleDurationSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scaleToZero  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    * idleDurationSeconds  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scaleToZero' => null,
        'idleDurationSeconds' => 'int32'
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
    * scaleToZero  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    * idleDurationSeconds  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scaleToZero' => 'scale_to_zero',
            'idleDurationSeconds' => 'idle_duration_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scaleToZero  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    * idleDurationSeconds  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'scaleToZero' => 'setScaleToZero',
            'idleDurationSeconds' => 'setIdleDurationSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scaleToZero  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    * idleDurationSeconds  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'scaleToZero' => 'getScaleToZero',
            'idleDurationSeconds' => 'getIdleDurationSeconds'
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
        $this->container['scaleToZero'] = isset($data['scaleToZero']) ? $data['scaleToZero'] : null;
        $this->container['idleDurationSeconds'] = isset($data['idleDurationSeconds']) ? $data['idleDurationSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scaleToZero'] === null) {
            $invalidProperties[] = "'scaleToZero' can't be null";
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
    * Gets scaleToZero
    *  **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    *
    * @return bool
    */
    public function getScaleToZero()
    {
        return $this->container['scaleToZero'];
    }

    /**
    * Sets scaleToZero
    *
    * @param bool $scaleToZero **参数解释**：  是否开启Scale to Zero自动启停。  **约束限制**：  仅Serverless实例支持。  **取值范围**：  - true：开启。实例空闲达idle_duration_seconds阈值时算力自动缩容到零（停止VM计费），有新连接时自动唤醒恢复。 - false：关闭。实例正常计费。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setScaleToZero($scaleToZero)
    {
        $this->container['scaleToZero'] = $scaleToZero;
        return $this;
    }

    /**
    * Gets idleDurationSeconds
    *  **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getIdleDurationSeconds()
    {
        return $this->container['idleDurationSeconds'];
    }

    /**
    * Sets idleDurationSeconds
    *
    * @param int|null $idleDurationSeconds **参数解释**：  触发缩容到零的空闲检测时长（秒）。实例所有节点无活跃用户连接达到该时长后，自动缩容到零。  **约束限制**：  - 当scale_to_zero为true时，该参数必填。 - 当scale_to_zero为false时，该参数可不传。  **取值范围**：  300～3600。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setIdleDurationSeconds($idleDurationSeconds)
    {
        $this->container['idleDurationSeconds'] = $idleDurationSeconds;
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

