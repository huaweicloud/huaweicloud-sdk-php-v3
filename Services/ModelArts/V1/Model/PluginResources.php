<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * involvedObject  involvedObject
    * replicas  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    * limits  **参数解释**： 申请的资源限制。
    * requests  **参数解释**： 申请的资源需求。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'involvedObject' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ObjectReference',
            'replicas' => 'int',
            'limits' => 'map[string,string]',
            'requests' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * involvedObject  involvedObject
    * replicas  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    * limits  **参数解释**： 申请的资源限制。
    * requests  **参数解释**： 申请的资源需求。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'involvedObject' => null,
        'replicas' => 'int32',
        'limits' => null,
        'requests' => null
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
    * involvedObject  involvedObject
    * replicas  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    * limits  **参数解释**： 申请的资源限制。
    * requests  **参数解释**： 申请的资源需求。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'involvedObject' => 'involvedObject',
            'replicas' => 'replicas',
            'limits' => 'limits',
            'requests' => 'requests'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * involvedObject  involvedObject
    * replicas  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    * limits  **参数解释**： 申请的资源限制。
    * requests  **参数解释**： 申请的资源需求。
    *
    * @var string[]
    */
    protected static $setters = [
            'involvedObject' => 'setInvolvedObject',
            'replicas' => 'setReplicas',
            'limits' => 'setLimits',
            'requests' => 'setRequests'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * involvedObject  involvedObject
    * replicas  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    * limits  **参数解释**： 申请的资源限制。
    * requests  **参数解释**： 申请的资源需求。
    *
    * @var string[]
    */
    protected static $getters = [
            'involvedObject' => 'getInvolvedObject',
            'replicas' => 'getReplicas',
            'limits' => 'getLimits',
            'requests' => 'getRequests'
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
        $this->container['involvedObject'] = isset($data['involvedObject']) ? $data['involvedObject'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
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
    * Gets involvedObject
    *  involvedObject
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ObjectReference|null
    */
    public function getInvolvedObject()
    {
        return $this->container['involvedObject'];
    }

    /**
    * Sets involvedObject
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ObjectReference|null $involvedObject involvedObject
    *
    * @return $this
    */
    public function setInvolvedObject($involvedObject)
    {
        $this->container['involvedObject'] = $involvedObject;
        return $this;
    }

    /**
    * Gets replicas
    *  **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
    * Sets replicas
    *
    * @param int|null $replicas **参数解释**： 资源对象的副本数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;
        return $this;
    }

    /**
    * Gets limits
    *  **参数解释**： 申请的资源限制。
    *
    * @return map[string,string]|null
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param map[string,string]|null $limits **参数解释**： 申请的资源限制。
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
        return $this;
    }

    /**
    * Gets requests
    *  **参数解释**： 申请的资源需求。
    *
    * @return map[string,string]|null
    */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
    * Sets requests
    *
    * @param map[string,string]|null $requests **参数解释**： 申请的资源需求。
    *
    * @return $this
    */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;
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

