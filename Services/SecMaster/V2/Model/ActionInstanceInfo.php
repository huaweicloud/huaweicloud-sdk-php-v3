<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action
    * instanceLog  instanceLog
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo',
            'instanceLog' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AuditLogInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action
    * instanceLog  instanceLog
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'instanceLog' => null
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
    * action  action
    * instanceLog  instanceLog
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'instanceLog' => 'instance_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action
    * instanceLog  instanceLog
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'instanceLog' => 'setInstanceLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action
    * instanceLog  instanceLog
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'instanceLog' => 'getInstanceLog'
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
        $this->container['instanceLog'] = isset($data['instanceLog']) ? $data['instanceLog'] : null;
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
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets instanceLog
    *  instanceLog
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AuditLogInfo|null
    */
    public function getInstanceLog()
    {
        return $this->container['instanceLog'];
    }

    /**
    * Sets instanceLog
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AuditLogInfo|null $instanceLog instanceLog
    *
    * @return $this
    */
    public function setInstanceLog($instanceLog)
    {
        $this->container['instanceLog'] = $instanceLog;
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

