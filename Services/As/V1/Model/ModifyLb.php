<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyLb implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyLb';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lbaasListener  lbaasListener
    * listener  经典型负载均衡器信息
    * failedReason  负载均衡器迁移失败原因。
    * failedDetails  负载均衡器迁移失败详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lbaasListener' => '\HuaweiCloud\SDK\_As\V1\Model\LbaasListener',
            'listener' => 'string',
            'failedReason' => 'string',
            'failedDetails' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lbaasListener  lbaasListener
    * listener  经典型负载均衡器信息
    * failedReason  负载均衡器迁移失败原因。
    * failedDetails  负载均衡器迁移失败详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lbaasListener' => null,
        'listener' => null,
        'failedReason' => null,
        'failedDetails' => null
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
    * lbaasListener  lbaasListener
    * listener  经典型负载均衡器信息
    * failedReason  负载均衡器迁移失败原因。
    * failedDetails  负载均衡器迁移失败详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lbaasListener' => 'lbaas_listener',
            'listener' => 'listener',
            'failedReason' => 'failed_reason',
            'failedDetails' => 'failed_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lbaasListener  lbaasListener
    * listener  经典型负载均衡器信息
    * failedReason  负载均衡器迁移失败原因。
    * failedDetails  负载均衡器迁移失败详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'lbaasListener' => 'setLbaasListener',
            'listener' => 'setListener',
            'failedReason' => 'setFailedReason',
            'failedDetails' => 'setFailedDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lbaasListener  lbaasListener
    * listener  经典型负载均衡器信息
    * failedReason  负载均衡器迁移失败原因。
    * failedDetails  负载均衡器迁移失败详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'lbaasListener' => 'getLbaasListener',
            'listener' => 'getListener',
            'failedReason' => 'getFailedReason',
            'failedDetails' => 'getFailedDetails'
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
        $this->container['lbaasListener'] = isset($data['lbaasListener']) ? $data['lbaasListener'] : null;
        $this->container['listener'] = isset($data['listener']) ? $data['listener'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['failedDetails'] = isset($data['failedDetails']) ? $data['failedDetails'] : null;
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
    * Gets lbaasListener
    *  lbaasListener
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\LbaasListener|null
    */
    public function getLbaasListener()
    {
        return $this->container['lbaasListener'];
    }

    /**
    * Sets lbaasListener
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\LbaasListener|null $lbaasListener lbaasListener
    *
    * @return $this
    */
    public function setLbaasListener($lbaasListener)
    {
        $this->container['lbaasListener'] = $lbaasListener;
        return $this;
    }

    /**
    * Gets listener
    *  经典型负载均衡器信息
    *
    * @return string|null
    */
    public function getListener()
    {
        return $this->container['listener'];
    }

    /**
    * Sets listener
    *
    * @param string|null $listener 经典型负载均衡器信息
    *
    * @return $this
    */
    public function setListener($listener)
    {
        $this->container['listener'] = $listener;
        return $this;
    }

    /**
    * Gets failedReason
    *  负载均衡器迁移失败原因。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 负载均衡器迁移失败原因。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets failedDetails
    *  负载均衡器迁移失败详情。
    *
    * @return string|null
    */
    public function getFailedDetails()
    {
        return $this->container['failedDetails'];
    }

    /**
    * Sets failedDetails
    *
    * @param string|null $failedDetails 负载均衡器迁移失败详情。
    *
    * @return $this
    */
    public function setFailedDetails($failedDetails)
    {
        $this->container['failedDetails'] = $failedDetails;
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

