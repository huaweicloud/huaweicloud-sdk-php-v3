<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiParaForAuthToInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiParaForAuthToInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiId  api编号
    * instanceId  集群编号
    * appId  app编号
    * applyType  申请类型
    * time  截止时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiId' => 'string',
            'instanceId' => 'string',
            'appId' => 'string',
            'applyType' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiId  api编号
    * instanceId  集群编号
    * appId  app编号
    * applyType  申请类型
    * time  截止时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiId' => null,
        'instanceId' => null,
        'appId' => null,
        'applyType' => null,
        'time' => null
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
    * apiId  api编号
    * instanceId  集群编号
    * appId  app编号
    * applyType  申请类型
    * time  截止时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiId' => 'api_id',
            'instanceId' => 'instance_id',
            'appId' => 'app_id',
            'applyType' => 'apply_type',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiId  api编号
    * instanceId  集群编号
    * appId  app编号
    * applyType  申请类型
    * time  截止时间
    *
    * @var string[]
    */
    protected static $setters = [
            'apiId' => 'setApiId',
            'instanceId' => 'setInstanceId',
            'appId' => 'setAppId',
            'applyType' => 'setApplyType',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiId  api编号
    * instanceId  集群编号
    * appId  app编号
    * applyType  申请类型
    * time  截止时间
    *
    * @var string[]
    */
    protected static $getters = [
            'apiId' => 'getApiId',
            'instanceId' => 'getInstanceId',
            'appId' => 'getAppId',
            'applyType' => 'getApplyType',
            'time' => 'getTime'
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
    const APPLY_TYPE_APPLY_TYPE_AUTHORIZE = 'APPLY_TYPE_AUTHORIZE';
    const APPLY_TYPE_APPLY_TYPE_API_CANCEL_AUTHORIZE = 'APPLY_TYPE_API_CANCEL_AUTHORIZE';
    const APPLY_TYPE_APPLY_TYPE_APP_CANCEL_AUTHORIZE = 'APPLY_TYPE_APP_CANCEL_AUTHORIZE';
    const APPLY_TYPE_APPLY_TYPE_APPLY = 'APPLY_TYPE_APPLY';
    const APPLY_TYPE_APPLY_TYPE_RENEW = 'APPLY_TYPE_RENEW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApplyTypeAllowableValues()
    {
        return [
            self::APPLY_TYPE_APPLY_TYPE_AUTHORIZE,
            self::APPLY_TYPE_APPLY_TYPE_API_CANCEL_AUTHORIZE,
            self::APPLY_TYPE_APPLY_TYPE_APP_CANCEL_AUTHORIZE,
            self::APPLY_TYPE_APPLY_TYPE_APPLY,
            self::APPLY_TYPE_APPLY_TYPE_RENEW,
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
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['applyType'] = isset($data['applyType']) ? $data['applyType'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApplyTypeAllowableValues();
                if (!is_null($this->container['applyType']) && !in_array($this->container['applyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'applyType', must be one of '%s'",
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
    * Gets appId
    *  app编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId app编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets applyType
    *  申请类型
    *
    * @return string|null
    */
    public function getApplyType()
    {
        return $this->container['applyType'];
    }

    /**
    * Sets applyType
    *
    * @param string|null $applyType 申请类型
    *
    * @return $this
    */
    public function setApplyType($applyType)
    {
        $this->container['applyType'] = $applyType;
        return $this;
    }

    /**
    * Gets time
    *  截止时间
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 截止时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

