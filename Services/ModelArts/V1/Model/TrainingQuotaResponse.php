<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrainingQuotaResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrainingQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    * quota  **参数解释**：配额个数。 **取值范围**：不涉及。
    * used  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'string',
            'quota' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    * quota  **参数解释**：配额个数。 **取值范围**：不涉及。
    * used  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'quota' => 'int32',
        'used' => 'int32'
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
    * resource  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    * quota  **参数解释**：配额个数。 **取值范围**：不涉及。
    * used  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'quota' => 'quota',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    * quota  **参数解释**：配额个数。 **取值范围**：不涉及。
    * used  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'quota' => 'setQuota',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    * quota  **参数解释**：配额个数。 **取值范围**：不涉及。
    * used  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'quota' => 'getQuota',
            'used' => 'getUsed'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
    * Gets resource
    *  **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource **参数解释**：配额的资源类型，当前支持：job-num，作业的个数配额。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**：配额个数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota **参数解释**：配额个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used **参数解释**：已使用的个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

