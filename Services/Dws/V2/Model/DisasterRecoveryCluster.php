<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisasterRecoveryCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisasterRecoveryCluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  容灾集群信息ID
    * name  容灾集群名称
    * clusterAz  容灾集群所在AZ
    * role  容灾集群角色
    * region  容灾集群所在region
    * status  容灾集群状态
    * progress  容灾进度
    * lastSuccessTime  上一次容灾时间
    * obsBucketName  OBS桶名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'clusterAz' => 'string',
            'role' => 'string',
            'region' => 'string',
            'status' => 'string',
            'progress' => 'string',
            'lastSuccessTime' => 'string',
            'obsBucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  容灾集群信息ID
    * name  容灾集群名称
    * clusterAz  容灾集群所在AZ
    * role  容灾集群角色
    * region  容灾集群所在region
    * status  容灾集群状态
    * progress  容灾进度
    * lastSuccessTime  上一次容灾时间
    * obsBucketName  OBS桶名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'clusterAz' => null,
        'role' => null,
        'region' => null,
        'status' => null,
        'progress' => null,
        'lastSuccessTime' => null,
        'obsBucketName' => null
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
    * id  容灾集群信息ID
    * name  容灾集群名称
    * clusterAz  容灾集群所在AZ
    * role  容灾集群角色
    * region  容灾集群所在region
    * status  容灾集群状态
    * progress  容灾进度
    * lastSuccessTime  上一次容灾时间
    * obsBucketName  OBS桶名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'clusterAz' => 'cluster_az',
            'role' => 'role',
            'region' => 'region',
            'status' => 'status',
            'progress' => 'progress',
            'lastSuccessTime' => 'last_success_time',
            'obsBucketName' => 'obs_bucket_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  容灾集群信息ID
    * name  容灾集群名称
    * clusterAz  容灾集群所在AZ
    * role  容灾集群角色
    * region  容灾集群所在region
    * status  容灾集群状态
    * progress  容灾进度
    * lastSuccessTime  上一次容灾时间
    * obsBucketName  OBS桶名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'clusterAz' => 'setClusterAz',
            'role' => 'setRole',
            'region' => 'setRegion',
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'lastSuccessTime' => 'setLastSuccessTime',
            'obsBucketName' => 'setObsBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  容灾集群信息ID
    * name  容灾集群名称
    * clusterAz  容灾集群所在AZ
    * role  容灾集群角色
    * region  容灾集群所在region
    * status  容灾集群状态
    * progress  容灾进度
    * lastSuccessTime  上一次容灾时间
    * obsBucketName  OBS桶名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'clusterAz' => 'getClusterAz',
            'role' => 'getRole',
            'region' => 'getRegion',
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'lastSuccessTime' => 'getLastSuccessTime',
            'obsBucketName' => 'getObsBucketName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['clusterAz'] = isset($data['clusterAz']) ? $data['clusterAz'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['lastSuccessTime'] = isset($data['lastSuccessTime']) ? $data['lastSuccessTime'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
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
    * Gets id
    *  容灾集群信息ID
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
    * @param string|null $id 容灾集群信息ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  容灾集群名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 容灾集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets clusterAz
    *  容灾集群所在AZ
    *
    * @return string|null
    */
    public function getClusterAz()
    {
        return $this->container['clusterAz'];
    }

    /**
    * Sets clusterAz
    *
    * @param string|null $clusterAz 容灾集群所在AZ
    *
    * @return $this
    */
    public function setClusterAz($clusterAz)
    {
        $this->container['clusterAz'] = $clusterAz;
        return $this;
    }

    /**
    * Gets role
    *  容灾集群角色
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 容灾集群角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets region
    *  容灾集群所在region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 容灾集群所在region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets status
    *  容灾集群状态
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
    * @param string|null $status 容灾集群状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progress
    *  容灾进度
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 容灾进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets lastSuccessTime
    *  上一次容灾时间
    *
    * @return string|null
    */
    public function getLastSuccessTime()
    {
        return $this->container['lastSuccessTime'];
    }

    /**
    * Sets lastSuccessTime
    *
    * @param string|null $lastSuccessTime 上一次容灾时间
    *
    * @return $this
    */
    public function setLastSuccessTime($lastSuccessTime)
    {
        $this->container['lastSuccessTime'] = $lastSuccessTime;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  OBS桶名称
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName OBS桶名称
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
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

