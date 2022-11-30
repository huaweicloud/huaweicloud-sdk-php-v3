<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionsList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  置信度，取值范围0～1。
    * action  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'double',
            'action' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  置信度，取值范围0～1。
    * action  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => 'double',
        'action' => 'int32'
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
    * confidence  置信度，取值范围0～1。
    * action  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  置信度，取值范围0～1。
    * action  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  置信度，取值范围0～1。
    * action  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'action' => 'getAction'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
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
    * Gets confidence
    *  置信度，取值范围0～1。
    *
    * @return double
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param double $confidence 置信度，取值范围0～1。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets action
    *  动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @return int|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int|null $action 动作编号，取值范围：[1,2,3,4]，其中： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

