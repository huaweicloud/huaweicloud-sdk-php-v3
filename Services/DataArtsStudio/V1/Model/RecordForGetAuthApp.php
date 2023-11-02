<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordForGetAuthApp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordForGetAuthApp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  应用编号
    * appName  应用名称
    * instanceId  集群实例id
    * instanceName  集群实例名称
    * apiUsingTime  使用截止时间
    * approvalTime  授权时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appName' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'apiUsingTime' => 'int',
            'approvalTime' => 'int',
            'relationshipType' => 'string',
            'staticParams' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  应用编号
    * appName  应用名称
    * instanceId  集群实例id
    * instanceName  集群实例名称
    * apiUsingTime  使用截止时间
    * approvalTime  授权时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appName' => null,
        'instanceId' => null,
        'instanceName' => null,
        'apiUsingTime' => 'int64',
        'approvalTime' => 'int64',
        'relationshipType' => null,
        'staticParams' => null
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
    * appId  应用编号
    * appName  应用名称
    * instanceId  集群实例id
    * instanceName  集群实例名称
    * apiUsingTime  使用截止时间
    * approvalTime  授权时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appName' => 'app_name',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'apiUsingTime' => 'api_using_time',
            'approvalTime' => 'approval_time',
            'relationshipType' => 'relationship_type',
            'staticParams' => 'static_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  应用编号
    * appName  应用名称
    * instanceId  集群实例id
    * instanceName  集群实例名称
    * apiUsingTime  使用截止时间
    * approvalTime  授权时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'apiUsingTime' => 'setApiUsingTime',
            'approvalTime' => 'setApprovalTime',
            'relationshipType' => 'setRelationshipType',
            'staticParams' => 'setStaticParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  应用编号
    * appName  应用名称
    * instanceId  集群实例id
    * instanceName  集群实例名称
    * apiUsingTime  使用截止时间
    * approvalTime  授权时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'apiUsingTime' => 'getApiUsingTime',
            'approvalTime' => 'getApprovalTime',
            'relationshipType' => 'getRelationshipType',
            'staticParams' => 'getStaticParams'
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
    const RELATIONSHIP_TYPE_LINK_WAITING_CHECK = 'LINK_WAITING_CHECK';
    const RELATIONSHIP_TYPE_LINKED = 'LINKED';
    const RELATIONSHIP_TYPE_OFFLINE_WAITING_CHECK = 'OFFLINE_WAITING_CHECK';
    const RELATIONSHIP_TYPE_RENEW_WAITING_CHECK = 'RENEW_WAITING_CHECK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRelationshipTypeAllowableValues()
    {
        return [
            self::RELATIONSHIP_TYPE_LINK_WAITING_CHECK,
            self::RELATIONSHIP_TYPE_LINKED,
            self::RELATIONSHIP_TYPE_OFFLINE_WAITING_CHECK,
            self::RELATIONSHIP_TYPE_RENEW_WAITING_CHECK,
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['apiUsingTime'] = isset($data['apiUsingTime']) ? $data['apiUsingTime'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['relationshipType'] = isset($data['relationshipType']) ? $data['relationshipType'] : null;
        $this->container['staticParams'] = isset($data['staticParams']) ? $data['staticParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRelationshipTypeAllowableValues();
                if (!is_null($this->container['relationshipType']) && !in_array($this->container['relationshipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'relationshipType', must be one of '%s'",
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
    * Gets appId
    *  应用编号
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
    * @param string|null $appId 应用编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets instanceId
    *  集群实例id
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
    * @param string|null $instanceId 集群实例id
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
    *  集群实例名称
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
    * @param string|null $instanceName 集群实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets apiUsingTime
    *  使用截止时间
    *
    * @return int|null
    */
    public function getApiUsingTime()
    {
        return $this->container['apiUsingTime'];
    }

    /**
    * Sets apiUsingTime
    *
    * @param int|null $apiUsingTime 使用截止时间
    *
    * @return $this
    */
    public function setApiUsingTime($apiUsingTime)
    {
        $this->container['apiUsingTime'] = $apiUsingTime;
        return $this;
    }

    /**
    * Gets approvalTime
    *  授权时间
    *
    * @return int|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param int|null $approvalTime 授权时间
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets relationshipType
    *  绑定关系
    *
    * @return string|null
    */
    public function getRelationshipType()
    {
        return $this->container['relationshipType'];
    }

    /**
    * Sets relationshipType
    *
    * @param string|null $relationshipType 绑定关系
    *
    * @return $this
    */
    public function setRelationshipType($relationshipType)
    {
        $this->container['relationshipType'] = $relationshipType;
        return $this;
    }

    /**
    * Gets staticParams
    *  静态参数列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]|null
    */
    public function getStaticParams()
    {
        return $this->container['staticParams'];
    }

    /**
    * Sets staticParams
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]|null $staticParams 静态参数列表
    *
    * @return $this
    */
    public function setStaticParams($staticParams)
    {
        $this->container['staticParams'] = $staticParams;
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

