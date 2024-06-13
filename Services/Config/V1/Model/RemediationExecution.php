<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemediationExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemediationExecution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * automatic  是否为自动修正。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceProvider  云服务名称。
    * resourceType  资源类型。
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'automatic' => 'bool',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceProvider' => 'string',
            'resourceType' => 'string',
            'invocationTime' => 'string',
            'state' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * automatic  是否为自动修正。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceProvider  云服务名称。
    * resourceType  资源类型。
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'automatic' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceProvider' => null,
        'resourceType' => null,
        'invocationTime' => null,
        'state' => null,
        'message' => null
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
    * automatic  是否为自动修正。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceProvider  云服务名称。
    * resourceType  资源类型。
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'automatic' => 'automatic',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceProvider' => 'resource_provider',
            'resourceType' => 'resource_type',
            'invocationTime' => 'invocation_time',
            'state' => 'state',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * automatic  是否为自动修正。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceProvider  云服务名称。
    * resourceType  资源类型。
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'automatic' => 'setAutomatic',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceProvider' => 'setResourceProvider',
            'resourceType' => 'setResourceType',
            'invocationTime' => 'setInvocationTime',
            'state' => 'setState',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * automatic  是否为自动修正。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceProvider  云服务名称。
    * resourceType  资源类型。
    * invocationTime  补救执行的开始时间。
    * state  合规规则修正执行的状态。
    * message  合规规则修正执行的信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'automatic' => 'getAutomatic',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceProvider' => 'getResourceProvider',
            'resourceType' => 'getResourceType',
            'invocationTime' => 'getInvocationTime',
            'state' => 'getState',
            'message' => 'getMessage'
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
    const STATE_IN_QUEUE = 'IN_QUEUE';
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_SUCCEEDED = 'SUCCEEDED';
    const STATE_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_IN_QUEUE,
            self::STATE_IN_PROGRESS,
            self::STATE_SUCCEEDED,
            self::STATE_FAILED,
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
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['invocationTime'] = isset($data['invocationTime']) ? $data['invocationTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/[_.:\\w-]+/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[_.:\\w-]+/.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && !preg_match("/[_.:\\w-]+/", $this->container['resourceName'])) {
                $invalidProperties[] = "invalid value for 'resourceName', must be conform to the pattern /[_.:\\w-]+/.";
            }
            if (!is_null($this->container['resourceProvider']) && (mb_strlen($this->container['resourceProvider']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets automatic
    *  是否为自动修正。
    *
    * @return bool|null
    */
    public function getAutomatic()
    {
        return $this->container['automatic'];
    }

    /**
    * Sets automatic
    *
    * @param bool|null $automatic 是否为自动修正。
    *
    * @return $this
    */
    public function setAutomatic($automatic)
    {
        $this->container['automatic'] = $automatic;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  云服务名称。
    *
    * @return string|null
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string|null $resourceProvider 云服务名称。
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets invocationTime
    *  补救执行的开始时间。
    *
    * @return string|null
    */
    public function getInvocationTime()
    {
        return $this->container['invocationTime'];
    }

    /**
    * Sets invocationTime
    *
    * @param string|null $invocationTime 补救执行的开始时间。
    *
    * @return $this
    */
    public function setInvocationTime($invocationTime)
    {
        $this->container['invocationTime'] = $invocationTime;
        return $this;
    }

    /**
    * Gets state
    *  合规规则修正执行的状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 合规规则修正执行的状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets message
    *  合规规则修正执行的信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 合规规则修正执行的信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

