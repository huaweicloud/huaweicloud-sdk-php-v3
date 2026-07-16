<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * job  job
    * nfs  nfs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'job' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobSummary',
            'nfs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NFSSummary'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * job  job
    * nfs  nfs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'job' => null,
        'nfs' => null
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
    * job  job
    * nfs  nfs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'job' => 'job',
            'nfs' => 'nfs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * job  job
    * nfs  nfs
    *
    * @var string[]
    */
    protected static $setters = [
            'job' => 'setJob',
            'nfs' => 'setNfs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * job  job
    * nfs  nfs
    *
    * @var string[]
    */
    protected static $getters = [
            'job' => 'getJob',
            'nfs' => 'getNfs'
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
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
        $this->container['nfs'] = isset($data['nfs']) ? $data['nfs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['job'] === null) {
            $invalidProperties[] = "'job' can't be null";
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
    * Gets job
    *  job
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobSummary
    */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
    * Sets job
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobSummary $job job
    *
    * @return $this
    */
    public function setJob($job)
    {
        $this->container['job'] = $job;
        return $this;
    }

    /**
    * Gets nfs
    *  nfs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NFSSummary|null
    */
    public function getNfs()
    {
        return $this->container['nfs'];
    }

    /**
    * Sets nfs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NFSSummary|null $nfs nfs
    *
    * @return $this
    */
    public function setNfs($nfs)
    {
        $this->container['nfs'] = $nfs;
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

