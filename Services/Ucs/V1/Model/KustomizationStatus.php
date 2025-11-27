<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KustomizationStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KustomizationStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * observedGeneration  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    * conditions  当前对象的状态条件列表
    * lastAttemptedRevision  最近一次成功应用的版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'observedGeneration' => 'int',
            'conditions' => 'object[]',
            'lastAttemptedRevision' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * observedGeneration  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    * conditions  当前对象的状态条件列表
    * lastAttemptedRevision  最近一次成功应用的版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'observedGeneration' => 'int32',
        'conditions' => null,
        'lastAttemptedRevision' => null
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
    * observedGeneration  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    * conditions  当前对象的状态条件列表
    * lastAttemptedRevision  最近一次成功应用的版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'observedGeneration' => 'observedGeneration',
            'conditions' => 'conditions',
            'lastAttemptedRevision' => 'lastAttemptedRevision'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * observedGeneration  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    * conditions  当前对象的状态条件列表
    * lastAttemptedRevision  最近一次成功应用的版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'observedGeneration' => 'setObservedGeneration',
            'conditions' => 'setConditions',
            'lastAttemptedRevision' => 'setLastAttemptedRevision'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * observedGeneration  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    * conditions  当前对象的状态条件列表
    * lastAttemptedRevision  最近一次成功应用的版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'observedGeneration' => 'getObservedGeneration',
            'conditions' => 'getConditions',
            'lastAttemptedRevision' => 'getLastAttemptedRevision'
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
        $this->container['observedGeneration'] = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['lastAttemptedRevision'] = isset($data['lastAttemptedRevision']) ? $data['lastAttemptedRevision'] : null;
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
    * Gets observedGeneration
    *  最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    *
    * @return int|null
    */
    public function getObservedGeneration()
    {
        return $this->container['observedGeneration'];
    }

    /**
    * Sets observedGeneration
    *
    * @param int|null $observedGeneration 最近一次成功协调的资源版本号，用于标识控制器已处理的对象代
    *
    * @return $this
    */
    public function setObservedGeneration($observedGeneration)
    {
        $this->container['observedGeneration'] = $observedGeneration;
        return $this;
    }

    /**
    * Gets conditions
    *  当前对象的状态条件列表
    *
    * @return object[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param object[]|null $conditions 当前对象的状态条件列表
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets lastAttemptedRevision
    *  最近一次成功应用的版本号
    *
    * @return string|null
    */
    public function getLastAttemptedRevision()
    {
        return $this->container['lastAttemptedRevision'];
    }

    /**
    * Sets lastAttemptedRevision
    *
    * @param string|null $lastAttemptedRevision 最近一次成功应用的版本号
    *
    * @return $this
    */
    public function setLastAttemptedRevision($lastAttemptedRevision)
    {
        $this->container['lastAttemptedRevision'] = $lastAttemptedRevision;
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

