<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResizePreparationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResizePreparationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    * isSupport  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    * progress  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'isSupport' => 'bool',
            'progress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    * isSupport  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    * progress  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'isSupport' => null,
        'progress' => null
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
    * status  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    * isSupport  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    * progress  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'isSupport' => 'is_support',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    * isSupport  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    * progress  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'isSupport' => 'setIsSupport',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    * isSupport  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    * progress  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'isSupport' => 'getIsSupport',
            'progress' => 'getProgress'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isSupport'] = isset($data['isSupport']) ? $data['isSupport'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
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
    * Gets status
    *  **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 扩容准备的状态。 **取值范围**： INIT：扩容准备初始化中； PREPARING：扩容准备进行中； FAIL：扩容准备失败； SUCCESS：扩容准备成功； WAIT_RETRY：等待扩容准备重试；
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isSupport
    *  **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    *
    * @return bool|null
    */
    public function getIsSupport()
    {
        return $this->container['isSupport'];
    }

    /**
    * Sets isSupport
    *
    * @param bool|null $isSupport **参数解释**： 是否支持扩容准备。 **取值范围**： true：支持扩容准备； false：不支持扩容准备；
    *
    * @return $this
    */
    public function setIsSupport($isSupport)
    {
        $this->container['isSupport'] = $isSupport;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress **参数解释**： 扩容准备进度。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

