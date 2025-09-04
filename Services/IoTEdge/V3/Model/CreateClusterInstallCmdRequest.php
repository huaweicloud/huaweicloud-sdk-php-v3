<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterInstallCmdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterInstallCmdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  边缘集群ID
    * arch  边缘集群架构
    * os  集群操作系统内核
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'arch' => 'string',
            'os' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  边缘集群ID
    * arch  边缘集群架构
    * os  集群操作系统内核
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'arch' => null,
        'os' => null
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
    * clusterId  边缘集群ID
    * arch  边缘集群架构
    * os  集群操作系统内核
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'arch' => 'arch',
            'os' => 'os'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  边缘集群ID
    * arch  边缘集群架构
    * os  集群操作系统内核
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'arch' => 'setArch',
            'os' => 'setOs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  边缘集群ID
    * arch  边缘集群架构
    * os  集群操作系统内核
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'arch' => 'getArch',
            'os' => 'getOs'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['arch'] === null) {
            $invalidProperties[] = "'arch' can't be null";
        }
            if ((mb_strlen($this->container['arch']) > 16)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['arch']) < 1)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(x86_64|arm64)/", $this->container['arch'])) {
                $invalidProperties[] = "invalid value for 'arch', must be conform to the pattern /(x86_64|arm64)/.";
            }
            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) > 16)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) < 1)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['os']) && !preg_match("/(OpenEuler|Euler|KylinSec|Centos7)/", $this->container['os'])) {
                $invalidProperties[] = "invalid value for 'os', must be conform to the pattern /(OpenEuler|Euler|KylinSec|Centos7)/.";
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
    * Gets clusterId
    *  边缘集群ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 边缘集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets arch
    *  边缘集群架构
    *
    * @return string
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string $arch 边缘集群架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets os
    *  集群操作系统内核
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 集群操作系统内核
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
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

