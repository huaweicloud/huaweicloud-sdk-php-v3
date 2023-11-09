<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationLifecycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationLifecycle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entrypoint  entrypoint
    * postStart  postStart
    * preStop  preStop
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entrypoint' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleEntrypoint',
            'postStart' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess',
            'preStop' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entrypoint  entrypoint
    * postStart  postStart
    * preStop  preStop
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entrypoint' => null,
        'postStart' => null,
        'preStop' => null
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
    * entrypoint  entrypoint
    * postStart  postStart
    * preStop  preStop
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entrypoint' => 'entrypoint',
            'postStart' => 'post-start',
            'preStop' => 'pre-stop'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entrypoint  entrypoint
    * postStart  postStart
    * preStop  preStop
    *
    * @var string[]
    */
    protected static $setters = [
            'entrypoint' => 'setEntrypoint',
            'postStart' => 'setPostStart',
            'preStop' => 'setPreStop'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entrypoint  entrypoint
    * postStart  postStart
    * preStop  preStop
    *
    * @var string[]
    */
    protected static $getters = [
            'entrypoint' => 'getEntrypoint',
            'postStart' => 'getPostStart',
            'preStop' => 'getPreStop'
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
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['postStart'] = isset($data['postStart']) ? $data['postStart'] : null;
        $this->container['preStop'] = isset($data['preStop']) ? $data['preStop'] : null;
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
    * Gets entrypoint
    *  entrypoint
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleEntrypoint|null
    */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
    * Sets entrypoint
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleEntrypoint|null $entrypoint entrypoint
    *
    * @return $this
    */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;
        return $this;
    }

    /**
    * Gets postStart
    *  postStart
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess|null
    */
    public function getPostStart()
    {
        return $this->container['postStart'];
    }

    /**
    * Sets postStart
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess|null $postStart postStart
    *
    * @return $this
    */
    public function setPostStart($postStart)
    {
        $this->container['postStart'] = $postStart;
        return $this;
    }

    /**
    * Gets preStop
    *  preStop
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess|null
    */
    public function getPreStop()
    {
        return $this->container['preStop'];
    }

    /**
    * Sets preStop
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\LifecycleProcess|null $preStop preStop
    *
    * @return $this
    */
    public function setPreStop($preStop)
    {
        $this->container['preStop'] = $preStop;
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

