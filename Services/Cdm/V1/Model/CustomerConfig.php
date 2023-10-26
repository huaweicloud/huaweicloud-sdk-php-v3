<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failureRemind  失败提醒。
    * clusterName  集群类型。
    * serviceProvider  服务提供
    * localDisk  是否本地磁盘。
    * ssl  是否使用ssl。
    * createFrom  创建来源
    * resourceId  资源ID
    * flavorType  规格类型
    * workSpaceId  工作空间ID
    * trial  适用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failureRemind' => 'string',
            'clusterName' => 'string',
            'serviceProvider' => 'string',
            'localDisk' => 'string',
            'ssl' => 'string',
            'createFrom' => 'string',
            'resourceId' => 'string',
            'flavorType' => 'string',
            'workSpaceId' => 'string',
            'trial' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failureRemind  失败提醒。
    * clusterName  集群类型。
    * serviceProvider  服务提供
    * localDisk  是否本地磁盘。
    * ssl  是否使用ssl。
    * createFrom  创建来源
    * resourceId  资源ID
    * flavorType  规格类型
    * workSpaceId  工作空间ID
    * trial  适用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failureRemind' => null,
        'clusterName' => null,
        'serviceProvider' => null,
        'localDisk' => null,
        'ssl' => null,
        'createFrom' => null,
        'resourceId' => null,
        'flavorType' => null,
        'workSpaceId' => null,
        'trial' => null
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
    * failureRemind  失败提醒。
    * clusterName  集群类型。
    * serviceProvider  服务提供
    * localDisk  是否本地磁盘。
    * ssl  是否使用ssl。
    * createFrom  创建来源
    * resourceId  资源ID
    * flavorType  规格类型
    * workSpaceId  工作空间ID
    * trial  适用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failureRemind' => 'failureRemind',
            'clusterName' => 'clusterName',
            'serviceProvider' => 'serviceProvider',
            'localDisk' => 'localDisk',
            'ssl' => 'ssl',
            'createFrom' => 'createFrom',
            'resourceId' => 'resourceId',
            'flavorType' => 'flavorType',
            'workSpaceId' => 'workSpaceId',
            'trial' => 'trial'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failureRemind  失败提醒。
    * clusterName  集群类型。
    * serviceProvider  服务提供
    * localDisk  是否本地磁盘。
    * ssl  是否使用ssl。
    * createFrom  创建来源
    * resourceId  资源ID
    * flavorType  规格类型
    * workSpaceId  工作空间ID
    * trial  适用
    *
    * @var string[]
    */
    protected static $setters = [
            'failureRemind' => 'setFailureRemind',
            'clusterName' => 'setClusterName',
            'serviceProvider' => 'setServiceProvider',
            'localDisk' => 'setLocalDisk',
            'ssl' => 'setSsl',
            'createFrom' => 'setCreateFrom',
            'resourceId' => 'setResourceId',
            'flavorType' => 'setFlavorType',
            'workSpaceId' => 'setWorkSpaceId',
            'trial' => 'setTrial'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failureRemind  失败提醒。
    * clusterName  集群类型。
    * serviceProvider  服务提供
    * localDisk  是否本地磁盘。
    * ssl  是否使用ssl。
    * createFrom  创建来源
    * resourceId  资源ID
    * flavorType  规格类型
    * workSpaceId  工作空间ID
    * trial  适用
    *
    * @var string[]
    */
    protected static $getters = [
            'failureRemind' => 'getFailureRemind',
            'clusterName' => 'getClusterName',
            'serviceProvider' => 'getServiceProvider',
            'localDisk' => 'getLocalDisk',
            'ssl' => 'getSsl',
            'createFrom' => 'getCreateFrom',
            'resourceId' => 'getResourceId',
            'flavorType' => 'getFlavorType',
            'workSpaceId' => 'getWorkSpaceId',
            'trial' => 'getTrial'
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
        $this->container['failureRemind'] = isset($data['failureRemind']) ? $data['failureRemind'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['serviceProvider'] = isset($data['serviceProvider']) ? $data['serviceProvider'] : null;
        $this->container['localDisk'] = isset($data['localDisk']) ? $data['localDisk'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['createFrom'] = isset($data['createFrom']) ? $data['createFrom'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['workSpaceId'] = isset($data['workSpaceId']) ? $data['workSpaceId'] : null;
        $this->container['trial'] = isset($data['trial']) ? $data['trial'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets failureRemind
    *  失败提醒。
    *
    * @return string|null
    */
    public function getFailureRemind()
    {
        return $this->container['failureRemind'];
    }

    /**
    * Sets failureRemind
    *
    * @param string|null $failureRemind 失败提醒。
    *
    * @return $this
    */
    public function setFailureRemind($failureRemind)
    {
        $this->container['failureRemind'] = $failureRemind;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群类型。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群类型。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets serviceProvider
    *  服务提供
    *
    * @return string|null
    */
    public function getServiceProvider()
    {
        return $this->container['serviceProvider'];
    }

    /**
    * Sets serviceProvider
    *
    * @param string|null $serviceProvider 服务提供
    *
    * @return $this
    */
    public function setServiceProvider($serviceProvider)
    {
        $this->container['serviceProvider'] = $serviceProvider;
        return $this;
    }

    /**
    * Gets localDisk
    *  是否本地磁盘。
    *
    * @return string|null
    */
    public function getLocalDisk()
    {
        return $this->container['localDisk'];
    }

    /**
    * Sets localDisk
    *
    * @param string|null $localDisk 是否本地磁盘。
    *
    * @return $this
    */
    public function setLocalDisk($localDisk)
    {
        $this->container['localDisk'] = $localDisk;
        return $this;
    }

    /**
    * Gets ssl
    *  是否使用ssl。
    *
    * @return string|null
    */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
    * Sets ssl
    *
    * @param string|null $ssl 是否使用ssl。
    *
    * @return $this
    */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;
        return $this;
    }

    /**
    * Gets createFrom
    *  创建来源
    *
    * @return string|null
    */
    public function getCreateFrom()
    {
        return $this->container['createFrom'];
    }

    /**
    * Sets createFrom
    *
    * @param string|null $createFrom 创建来源
    *
    * @return $this
    */
    public function setCreateFrom($createFrom)
    {
        $this->container['createFrom'] = $createFrom;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
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
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets flavorType
    *  规格类型
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType 规格类型
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets workSpaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkSpaceId()
    {
        return $this->container['workSpaceId'];
    }

    /**
    * Sets workSpaceId
    *
    * @param string|null $workSpaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkSpaceId($workSpaceId)
    {
        $this->container['workSpaceId'] = $workSpaceId;
        return $this;
    }

    /**
    * Gets trial
    *  适用
    *
    * @return string|null
    */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
    * Sets trial
    *
    * @param string|null $trial 适用
    *
    * @return $this
    */
    public function setTrial($trial)
    {
        $this->container['trial'] = $trial;
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

