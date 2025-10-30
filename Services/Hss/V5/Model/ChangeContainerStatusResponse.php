<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeContainerStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeContainerStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * success  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    * newStatus  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerName' => 'string',
            'success' => 'bool',
            'newStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * success  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    * newStatus  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerName' => null,
        'success' => null,
        'newStatus' => null
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
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * success  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    * newStatus  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'success' => 'success',
            'newStatus' => 'new_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * success  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    * newStatus  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'success' => 'setSuccess',
            'newStatus' => 'setNewStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * success  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    * newStatus  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'success' => 'getSuccess',
            'newStatus' => 'getNewStatus'
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
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['newStatus'] = isset($data['newStatus']) ? $data['newStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['newStatus']) && (mb_strlen($this->container['newStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'newStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['newStatus']) && (mb_strlen($this->container['newStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'newStatus', the character length must be bigger than or equal to 1.";
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
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets success
    *  **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success **参数解释**: 是否成功 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets newStatus
    *  **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @return string|null
    */
    public function getNewStatus()
    {
        return $this->container['newStatus'];
    }

    /**
    * Sets newStatus
    *
    * @param string|null $newStatus **参数解释**： 状态 **取值范围**： - Running：运行中。 - Terminated：终止。 - Waiting：等待。 - Isolated：已隔离。
    *
    * @return $this
    */
    public function setNewStatus($newStatus)
    {
        $this->container['newStatus'] = $newStatus;
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

