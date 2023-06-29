<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSingleJobExeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSingleJobExeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobExecutionId  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobExecutionId' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobExecutionId  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobExecutionId' => null,
        'clusterId' => null
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
    * jobExecutionId  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobExecutionId' => 'job_execution_id',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobExecutionId  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobExecutionId' => 'setJobExecutionId',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobExecutionId  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobExecutionId' => 'getJobExecutionId',
            'clusterId' => 'getClusterId'
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
        $this->container['jobExecutionId'] = isset($data['jobExecutionId']) ? $data['jobExecutionId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobExecutionId'] === null) {
            $invalidProperties[] = "'jobExecutionId' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets jobExecutionId
    *  作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return string
    */
    public function getJobExecutionId()
    {
        return $this->container['jobExecutionId'];
    }

    /**
    * Sets jobExecutionId
    *
    * @param string $jobExecutionId 作业ID。获取方法，请参见[获取作业ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return $this
    */
    public function setJobExecutionId($jobExecutionId)
    {
        $this->container['jobExecutionId'] = $jobExecutionId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
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
    * @param string $clusterId 集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

