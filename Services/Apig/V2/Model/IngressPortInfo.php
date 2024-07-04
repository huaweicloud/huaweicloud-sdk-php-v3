<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IngressPortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IngressPortInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    * ingressPort  实例自定义入方向端口，支持的端口范围为1024~49151。
    * ingressPortId  实例自定义入方向端口ID。
    * status  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'ingressPort' => 'int',
            'ingressPortId' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    * ingressPort  实例自定义入方向端口，支持的端口范围为1024~49151。
    * ingressPortId  实例自定义入方向端口ID。
    * status  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'ingressPort' => 'int32',
        'ingressPortId' => null,
        'status' => null
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
    * protocol  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    * ingressPort  实例自定义入方向端口，支持的端口范围为1024~49151。
    * ingressPortId  实例自定义入方向端口ID。
    * status  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'ingressPort' => 'ingress_port',
            'ingressPortId' => 'ingress_port_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    * ingressPort  实例自定义入方向端口，支持的端口范围为1024~49151。
    * ingressPortId  实例自定义入方向端口ID。
    * status  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'ingressPort' => 'setIngressPort',
            'ingressPortId' => 'setIngressPortId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    * ingressPort  实例自定义入方向端口，支持的端口范围为1024~49151。
    * ingressPortId  实例自定义入方向端口ID。
    * status  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'ingressPort' => 'getIngressPort',
            'ingressPortId' => 'getIngressPortId',
            'status' => 'getStatus'
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
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const STATUS_NORMAL = 'normal';
    const STATUS_ABNORMAL = 'abnormal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_ABNORMAL,
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ingressPort'] = isset($data['ingressPort']) ? $data['ingressPort'] : null;
        $this->container['ingressPortId'] = isset($data['ingressPortId']) ? $data['ingressPortId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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

            if (!is_null($this->container['ingressPort']) && ($this->container['ingressPort'] > 49151)) {
                $invalidProperties[] = "invalid value for 'ingressPort', must be smaller than or equal to 49151.";
            }
            if (!is_null($this->container['ingressPort']) && ($this->container['ingressPort'] < 1024)) {
                $invalidProperties[] = "invalid value for 'ingressPort', must be bigger than or equal to 1024.";
            }
            if (!is_null($this->container['ingressPortId']) && (mb_strlen($this->container['ingressPortId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ingressPortId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ingressPortId']) && (mb_strlen($this->container['ingressPortId']) < 32)) {
                $invalidProperties[] = "invalid value for 'ingressPortId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets protocol
    *  实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
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
    * @param string|null $protocol 实例自定义入方向端口协议。 - HTTP：实例自定义入方向端口使用HTTP协议。 - HTTPS：实例自定义入方向端口使用HTTPS协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ingressPort
    *  实例自定义入方向端口，支持的端口范围为1024~49151。
    *
    * @return int|null
    */
    public function getIngressPort()
    {
        return $this->container['ingressPort'];
    }

    /**
    * Sets ingressPort
    *
    * @param int|null $ingressPort 实例自定义入方向端口，支持的端口范围为1024~49151。
    *
    * @return $this
    */
    public function setIngressPort($ingressPort)
    {
        $this->container['ingressPort'] = $ingressPort;
        return $this;
    }

    /**
    * Gets ingressPortId
    *  实例自定义入方向端口ID。
    *
    * @return string|null
    */
    public function getIngressPortId()
    {
        return $this->container['ingressPortId'];
    }

    /**
    * Sets ingressPortId
    *
    * @param string|null $ingressPortId 实例自定义入方向端口ID。
    *
    * @return $this
    */
    public function setIngressPortId($ingressPortId)
    {
        $this->container['ingressPortId'] = $ingressPortId;
        return $this;
    }

    /**
    * Gets status
    *  实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例自定义入方向端口的有效状态。 - normal：实例自定义入方向端口状态正常。 - abnormal：实例自定义入方向端口状态异常，无法使用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

