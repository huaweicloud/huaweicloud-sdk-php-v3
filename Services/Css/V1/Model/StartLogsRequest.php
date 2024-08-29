<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  指定开启日志的集群ID。
    * action  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'action' => 'string',
            'body' => '\HuaweiCloud\SDK\Css\V1\Model\StartLogsReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  指定开启日志的集群ID。
    * action  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'action' => null,
        'body' => null
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
    * clusterId  指定开启日志的集群ID。
    * action  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'action' => 'action',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  指定开启日志的集群ID。
    * action  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'action' => 'setAction',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  指定开启日志的集群ID。
    * action  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'action' => 'getAction',
            'body' => 'getBody'
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
    const ACTION_BASE_LOG_COLLECT = 'base_log_collect';
    const ACTION_REAL_TIME_LOG_COLLECT = 'real_time_log_collect';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_BASE_LOG_COLLECT,
            self::ACTION_REAL_TIME_LOG_COLLECT,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets clusterId
    *  指定开启日志的集群ID。
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
    * @param string $clusterId 指定开启日志的集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets action
    *  action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action action支持base_log_collect和real_time_log_collect两种，base就是之前历史的能力，real_time为实时采集能力，默认不传就是base，兼容之前的逻辑
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\StartLogsReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\StartLogsReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

