<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterDmsKafkaInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterDmsKafkaInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  kafka ID
    * kafkaName  kafka 名称
    * connectInfo  connectInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'kafkaName' => 'string',
            'connectInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\RegisterDmsKafkaInstanceRequestBodyConnectInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  kafka ID
    * kafkaName  kafka 名称
    * connectInfo  connectInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'kafkaName' => null,
        'connectInfo' => null
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
    * instanceId  kafka ID
    * kafkaName  kafka 名称
    * connectInfo  connectInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'kafkaName' => 'kafka_name',
            'connectInfo' => 'connect_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  kafka ID
    * kafkaName  kafka 名称
    * connectInfo  connectInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'kafkaName' => 'setKafkaName',
            'connectInfo' => 'setConnectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  kafka ID
    * kafkaName  kafka 名称
    * connectInfo  connectInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'kafkaName' => 'getKafkaName',
            'connectInfo' => 'getConnectInfo'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['kafkaName'] = isset($data['kafkaName']) ? $data['kafkaName'] : null;
        $this->container['connectInfo'] = isset($data['connectInfo']) ? $data['connectInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[0-9a-z-]{1,36}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z-]{1,36}/.";
            }
        if ($this->container['kafkaName'] === null) {
            $invalidProperties[] = "'kafkaName' can't be null";
        }
            if ((mb_strlen($this->container['kafkaName']) > 256)) {
                $invalidProperties[] = "invalid value for 'kafkaName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['kafkaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'kafkaName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['connectInfo'] === null) {
            $invalidProperties[] = "'connectInfo' can't be null";
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
    * Gets instanceId
    *  kafka ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId kafka ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets kafkaName
    *  kafka 名称
    *
    * @return string
    */
    public function getKafkaName()
    {
        return $this->container['kafkaName'];
    }

    /**
    * Sets kafkaName
    *
    * @param string $kafkaName kafka 名称
    *
    * @return $this
    */
    public function setKafkaName($kafkaName)
    {
        $this->container['kafkaName'] = $kafkaName;
        return $this;
    }

    /**
    * Gets connectInfo
    *  connectInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\RegisterDmsKafkaInstanceRequestBodyConnectInfo
    */
    public function getConnectInfo()
    {
        return $this->container['connectInfo'];
    }

    /**
    * Sets connectInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\RegisterDmsKafkaInstanceRequestBodyConnectInfo $connectInfo connectInfo
    *
    * @return $this
    */
    public function setConnectInfo($connectInfo)
    {
        $this->container['connectInfo'] = $connectInfo;
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

