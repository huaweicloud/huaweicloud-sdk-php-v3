<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobEntities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobEntities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  云服务器相关操作显示server_id。
    * nicId  网卡相关操作显示nic_id。
    * subJobs  每个子任务的执行信息。
    * subJobsTotal  子任务数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'nicId' => 'string',
            'subJobs' => '\HuaweiCloud\SDK\Ecs\V2\Model\SubJob[]',
            'subJobsTotal' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  云服务器相关操作显示server_id。
    * nicId  网卡相关操作显示nic_id。
    * subJobs  每个子任务的执行信息。
    * subJobsTotal  子任务数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'nicId' => null,
        'subJobs' => null,
        'subJobsTotal' => 'int32'
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
    * serverId  云服务器相关操作显示server_id。
    * nicId  网卡相关操作显示nic_id。
    * subJobs  每个子任务的执行信息。
    * subJobsTotal  子任务数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'nicId' => 'nic_id',
            'subJobs' => 'sub_jobs',
            'subJobsTotal' => 'sub_jobs_total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  云服务器相关操作显示server_id。
    * nicId  网卡相关操作显示nic_id。
    * subJobs  每个子任务的执行信息。
    * subJobsTotal  子任务数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'nicId' => 'setNicId',
            'subJobs' => 'setSubJobs',
            'subJobsTotal' => 'setSubJobsTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  云服务器相关操作显示server_id。
    * nicId  网卡相关操作显示nic_id。
    * subJobs  每个子任务的执行信息。
    * subJobsTotal  子任务数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'nicId' => 'getNicId',
            'subJobs' => 'getSubJobs',
            'subJobsTotal' => 'getSubJobsTotal'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['nicId'] = isset($data['nicId']) ? $data['nicId'] : null;
        $this->container['subJobs'] = isset($data['subJobs']) ? $data['subJobs'] : null;
        $this->container['subJobsTotal'] = isset($data['subJobsTotal']) ? $data['subJobsTotal'] : null;
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
    * Gets serverId
    *  云服务器相关操作显示server_id。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云服务器相关操作显示server_id。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets nicId
    *  网卡相关操作显示nic_id。
    *
    * @return string|null
    */
    public function getNicId()
    {
        return $this->container['nicId'];
    }

    /**
    * Sets nicId
    *
    * @param string|null $nicId 网卡相关操作显示nic_id。
    *
    * @return $this
    */
    public function setNicId($nicId)
    {
        $this->container['nicId'] = $nicId;
        return $this;
    }

    /**
    * Gets subJobs
    *  每个子任务的执行信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\SubJob[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\SubJob[]|null $subJobs 每个子任务的执行信息。
    *
    * @return $this
    */
    public function setSubJobs($subJobs)
    {
        $this->container['subJobs'] = $subJobs;
        return $this;
    }

    /**
    * Gets subJobsTotal
    *  子任务数量。
    *
    * @return int|null
    */
    public function getSubJobsTotal()
    {
        return $this->container['subJobsTotal'];
    }

    /**
    * Sets subJobsTotal
    *
    * @param int|null $subJobsTotal 子任务数量。
    *
    * @return $this
    */
    public function setSubJobsTotal($subJobsTotal)
    {
        $this->container['subJobsTotal'] = $subJobsTotal;
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

