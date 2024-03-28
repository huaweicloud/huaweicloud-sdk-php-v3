<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunQueueActionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunQueueActionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    * force  是否强制重启，action为restart时可选择配置，默认为false。
    * cuCount  队列的实际CU。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'force' => 'bool',
            'cuCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    * force  是否强制重启，action为restart时可选择配置，默认为false。
    * cuCount  队列的实际CU。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'force' => null,
        'cuCount' => 'int32'
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
    * action  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    * force  是否强制重启，action为restart时可选择配置，默认为false。
    * cuCount  队列的实际CU。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'force' => 'force',
            'cuCount' => 'cu_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    * force  是否强制重启，action为restart时可选择配置，默认为false。
    * cuCount  队列的实际CU。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'force' => 'setForce',
            'cuCount' => 'setCuCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    * force  是否强制重启，action为restart时可选择配置，默认为false。
    * cuCount  队列的实际CU。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'force' => 'getForce',
            'cuCount' => 'getCuCount'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
        $this->container['cuCount'] = isset($data['cuCount']) ? $data['cuCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets action
    *  执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 执行动作：restart：重启scale_out：扩容scale_in：缩容，目前只支持restart、scale_out、scale_in。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets force
    *  是否强制重启，action为restart时可选择配置，默认为false。
    *
    * @return bool|null
    */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
    * Sets force
    *
    * @param bool|null $force 是否强制重启，action为restart时可选择配置，默认为false。
    *
    * @return $this
    */
    public function setForce($force)
    {
        $this->container['force'] = $force;
        return $this;
    }

    /**
    * Gets cuCount
    *  队列的实际CU。
    *
    * @return int|null
    */
    public function getCuCount()
    {
        return $this->container['cuCount'];
    }

    /**
    * Sets cuCount
    *
    * @param int|null $cuCount 队列的实际CU。
    *
    * @return $this
    */
    public function setCuCount($cuCount)
    {
        $this->container['cuCount'] = $cuCount;
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

