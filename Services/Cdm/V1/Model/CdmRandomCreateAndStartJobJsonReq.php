<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmRandomCreateAndStartJobJsonReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmRandomCreateAndStartJobJsonReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobs  作业列表，请参见jobs数据结构说明。
    * clusters  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobs' => '\HuaweiCloud\SDK\Cdm\V1\Model\Job[]',
            'clusters' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobs  作业列表，请参见jobs数据结构说明。
    * clusters  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobs' => null,
        'clusters' => null
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
    * jobs  作业列表，请参见jobs数据结构说明。
    * clusters  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobs' => 'jobs',
            'clusters' => 'clusters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobs  作业列表，请参见jobs数据结构说明。
    * clusters  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobs' => 'setJobs',
            'clusters' => 'setClusters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobs  作业列表，请参见jobs数据结构说明。
    * clusters  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobs' => 'getJobs',
            'clusters' => 'getClusters'
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
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobs'] === null) {
            $invalidProperties[] = "'jobs' can't be null";
        }
        if ($this->container['clusters'] === null) {
            $invalidProperties[] = "'clusters' can't be null";
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
    * Gets jobs
    *  作业列表，请参见jobs数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Job[]
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Job[] $jobs 作业列表，请参见jobs数据结构说明。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets clusters
    *  CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @return string[]
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param string[] $clusters CDM集群ID列表，系统会从里面随机选择一个开机状态的集群，在该集群中创建作业并执行作业。
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
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

