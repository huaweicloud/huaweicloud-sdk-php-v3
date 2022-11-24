<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  云服务器名称。
    * instanceId  云服务器id。
    * failedReason  实例伸缩失败原因。
    * failedDetails  实例伸缩失败详情。
    * instanceConfig  实例配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'instanceId' => 'string',
            'failedReason' => 'string',
            'failedDetails' => 'string',
            'instanceConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  云服务器名称。
    * instanceId  云服务器id。
    * failedReason  实例伸缩失败原因。
    * failedDetails  实例伸缩失败详情。
    * instanceConfig  实例配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'instanceId' => null,
        'failedReason' => null,
        'failedDetails' => null,
        'instanceConfig' => null
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
    * instanceName  云服务器名称。
    * instanceId  云服务器id。
    * failedReason  实例伸缩失败原因。
    * failedDetails  实例伸缩失败详情。
    * instanceConfig  实例配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'failedReason' => 'failed_reason',
            'failedDetails' => 'failed_details',
            'instanceConfig' => 'instance_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  云服务器名称。
    * instanceId  云服务器id。
    * failedReason  实例伸缩失败原因。
    * failedDetails  实例伸缩失败详情。
    * instanceConfig  实例配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'failedReason' => 'setFailedReason',
            'failedDetails' => 'setFailedDetails',
            'instanceConfig' => 'setInstanceConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  云服务器名称。
    * instanceId  云服务器id。
    * failedReason  实例伸缩失败原因。
    * failedDetails  实例伸缩失败详情。
    * instanceConfig  实例配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'failedReason' => 'getFailedReason',
            'failedDetails' => 'getFailedDetails',
            'instanceConfig' => 'getInstanceConfig'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['failedDetails'] = isset($data['failedDetails']) ? $data['failedDetails'] : null;
        $this->container['instanceConfig'] = isset($data['instanceConfig']) ? $data['instanceConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets instanceName
    *  云服务器名称。
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
    * @param string|null $instanceName 云服务器名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  云服务器id。
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
    * @param string|null $instanceId 云服务器id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets failedReason
    *  实例伸缩失败原因。
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
    * @param string|null $failedReason 实例伸缩失败原因。
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
    *  实例伸缩失败详情。
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
    * @param string|null $failedDetails 实例伸缩失败详情。
    *
    * @return $this
    */
    public function setFailedDetails($failedDetails)
    {
        $this->container['failedDetails'] = $failedDetails;
        return $this;
    }

    /**
    * Gets instanceConfig
    *  实例配置信息。
    *
    * @return string|null
    */
    public function getInstanceConfig()
    {
        return $this->container['instanceConfig'];
    }

    /**
    * Sets instanceConfig
    *
    * @param string|null $instanceConfig 实例配置信息。
    *
    * @return $this
    */
    public function setInstanceConfig($instanceConfig)
    {
        $this->container['instanceConfig'] = $instanceConfig;
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

