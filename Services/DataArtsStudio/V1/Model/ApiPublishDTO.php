<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiPublishDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiPublishDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  发布编号
    * apiId  api编号
    * instanceId  集群编号
    * instanceName  集群名称
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'apiId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'apiStatus' => 'string',
            'apiDebug' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  发布编号
    * apiId  api编号
    * instanceId  集群编号
    * instanceName  集群名称
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'apiId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'apiStatus' => null,
        'apiDebug' => null
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
    * id  发布编号
    * apiId  api编号
    * instanceId  集群编号
    * instanceName  集群名称
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'apiId' => 'api_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'apiStatus' => 'api_status',
            'apiDebug' => 'api_debug'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  发布编号
    * apiId  api编号
    * instanceId  集群编号
    * instanceName  集群名称
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'apiId' => 'setApiId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'apiStatus' => 'setApiStatus',
            'apiDebug' => 'setApiDebug'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  发布编号
    * apiId  api编号
    * instanceId  集群编号
    * instanceName  集群名称
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'apiId' => 'getApiId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'apiStatus' => 'getApiStatus',
            'apiDebug' => 'getApiDebug'
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
    const API_STATUS_API_STATUS_CREATED = 'API_STATUS_CREATED';
    const API_STATUS_API_STATUS_PUBLISH_WAIT_REVIEW = 'API_STATUS_PUBLISH_WAIT_REVIEW';
    const API_STATUS_API_STATUS_PUBLISH_REJECT = 'API_STATUS_PUBLISH_REJECT';
    const API_STATUS_API_STATUS_PUBLISHED = 'API_STATUS_PUBLISHED';
    const API_STATUS_API_STATUS_WAITING_STOP = 'API_STATUS_WAITING_STOP';
    const API_STATUS_API_STATUS_STOPPED = 'API_STATUS_STOPPED';
    const API_STATUS_API_STATUS_RECOVER_WAIT_REVIEW = 'API_STATUS_RECOVER_WAIT_REVIEW';
    const API_STATUS_API_STATUS_WAITING_OFFLINE = 'API_STATUS_WAITING_OFFLINE';
    const API_STATUS_API_STATUS_OFFLINE = 'API_STATUS_OFFLINE';
    const API_DEBUG_API_DEBUG_WAITING = 'API_DEBUG_WAITING';
    const API_DEBUG_API_DEBUG_FAILED = 'API_DEBUG_FAILED';
    const API_DEBUG_API_DEBUG_SUCCESS = 'API_DEBUG_SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiStatusAllowableValues()
    {
        return [
            self::API_STATUS_API_STATUS_CREATED,
            self::API_STATUS_API_STATUS_PUBLISH_WAIT_REVIEW,
            self::API_STATUS_API_STATUS_PUBLISH_REJECT,
            self::API_STATUS_API_STATUS_PUBLISHED,
            self::API_STATUS_API_STATUS_WAITING_STOP,
            self::API_STATUS_API_STATUS_STOPPED,
            self::API_STATUS_API_STATUS_RECOVER_WAIT_REVIEW,
            self::API_STATUS_API_STATUS_WAITING_OFFLINE,
            self::API_STATUS_API_STATUS_OFFLINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiDebugAllowableValues()
    {
        return [
            self::API_DEBUG_API_DEBUG_WAITING,
            self::API_DEBUG_API_DEBUG_FAILED,
            self::API_DEBUG_API_DEBUG_SUCCESS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['apiStatus'] = isset($data['apiStatus']) ? $data['apiStatus'] : null;
        $this->container['apiDebug'] = isset($data['apiDebug']) ? $data['apiDebug'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApiStatusAllowableValues();
                if (!is_null($this->container['apiStatus']) && !in_array($this->container['apiStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiDebugAllowableValues();
                if (!is_null($this->container['apiDebug']) && !in_array($this->container['apiDebug'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiDebug', must be one of '%s'",
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
    * Gets id
    *  发布编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 发布编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets apiId
    *  api编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId api编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets instanceId
    *  集群编号
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 集群编号
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  集群名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 集群名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets apiStatus
    *  api状态
    *
    * @return string|null
    */
    public function getApiStatus()
    {
        return $this->container['apiStatus'];
    }

    /**
    * Sets apiStatus
    *
    * @param string|null $apiStatus api状态
    *
    * @return $this
    */
    public function setApiStatus($apiStatus)
    {
        $this->container['apiStatus'] = $apiStatus;
        return $this;
    }

    /**
    * Gets apiDebug
    *  api调试状态
    *
    * @return string|null
    */
    public function getApiDebug()
    {
        return $this->container['apiDebug'];
    }

    /**
    * Sets apiDebug
    *
    * @param string|null $apiDebug api调试状态
    *
    * @return $this
    */
    public function setApiDebug($apiDebug)
    {
        $this->container['apiDebug'] = $apiDebug;
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

