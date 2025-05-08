<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKafkaPortProtocolResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKafkaPortProtocolResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  后台任务id。
    * protocol  开启或者关闭的Kafka接入方式。
    * enable  开启动作或者关闭动作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'protocol' => 'string',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  后台任务id。
    * protocol  开启或者关闭的Kafka接入方式。
    * enable  开启动作或者关闭动作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'protocol' => null,
        'enable' => null
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
    * jobId  后台任务id。
    * protocol  开启或者关闭的Kafka接入方式。
    * enable  开启动作或者关闭动作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'protocol' => 'protocol',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  后台任务id。
    * protocol  开启或者关闭的Kafka接入方式。
    * enable  开启动作或者关闭动作。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'protocol' => 'setProtocol',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  后台任务id。
    * protocol  开启或者关闭的Kafka接入方式。
    * enable  开启动作或者关闭动作。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'protocol' => 'getProtocol',
            'enable' => 'getEnable'
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
    const PROTOCOL_PRIVATE_PLAIN_ENABLE = 'private_plain_enable';
    const PROTOCOL_PRIVATE_SASL_SSL_ENABLE = 'private_sasl_ssl_enable';
    const PROTOCOL_PRIVATE_SASL_PLAINTEXT_ENABLE = 'private_sasl_plaintext_enable';
    const PROTOCOL_PUBLIC_PLAIN_ENABLE = 'public_plain_enable';
    const PROTOCOL_PUBLIC_SASL_SSL_ENABLE = 'public_sasl_ssl_enable';
    const PROTOCOL_PUBLIC_SASL_PLAINTEXT_ENABLE = 'public_sasl_plaintext_enable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_PRIVATE_PLAIN_ENABLE,
            self::PROTOCOL_PRIVATE_SASL_SSL_ENABLE,
            self::PROTOCOL_PRIVATE_SASL_PLAINTEXT_ENABLE,
            self::PROTOCOL_PUBLIC_PLAIN_ENABLE,
            self::PROTOCOL_PUBLIC_SASL_SSL_ENABLE,
            self::PROTOCOL_PUBLIC_SASL_PLAINTEXT_ENABLE,
        ];
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets jobId
    *  后台任务id。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 后台任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets protocol
    *  开启或者关闭的Kafka接入方式。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 开启或者关闭的Kafka接入方式。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets enable
    *  开启动作或者关闭动作。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 开启动作或者关闭动作。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

