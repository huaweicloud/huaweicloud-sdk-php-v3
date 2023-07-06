<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchQueryParamReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchQueryParamReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobs  查询任务ID集合。
    * refresh  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobs' => 'string[]',
            'refresh' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobs  查询任务ID集合。
    * refresh  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobs' => null,
        'refresh' => null
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
    * jobs  查询任务ID集合。
    * refresh  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobs' => 'jobs',
            'refresh' => 'refresh'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobs  查询任务ID集合。
    * refresh  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobs' => 'setJobs',
            'refresh' => 'setRefresh'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobs  查询任务ID集合。
    * refresh  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobs' => 'getJobs',
            'refresh' => 'getRefresh'
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
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
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
        if ($this->container['refresh'] === null) {
            $invalidProperties[] = "'refresh' can't be null";
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
    *  查询任务ID集合。
    *
    * @return string[]
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param string[] $jobs 查询任务ID集合。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets refresh
    *  是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @return string
    */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
    * Sets refresh
    *
    * @param string $refresh 是否重新获取数据库参数，1代表是，0代表否（从缓存中获取），第一次调用时请设置为1。
    *
    * @return $this
    */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;
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

