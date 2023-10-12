<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgresqlHbaHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgresqlHbaHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  修改结果，    success：已生效     failed：未生效     setting：设置中\",
    * time  修改时间
    * failReason  修改失败原因
    * beforeConfs  修改之前的值
    * afterConfs  修改之后的值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'time' => '\DateTime',
            'failReason' => 'string',
            'beforeConfs' => '\HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]',
            'afterConfs' => '\HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  修改结果，    success：已生效     failed：未生效     setting：设置中\",
    * time  修改时间
    * failReason  修改失败原因
    * beforeConfs  修改之前的值
    * afterConfs  修改之后的值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'time' => 'date-time',
        'failReason' => null,
        'beforeConfs' => null,
        'afterConfs' => null
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
    * status  修改结果，    success：已生效     failed：未生效     setting：设置中\",
    * time  修改时间
    * failReason  修改失败原因
    * beforeConfs  修改之前的值
    * afterConfs  修改之后的值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'time' => 'time',
            'failReason' => 'fail_reason',
            'beforeConfs' => 'before_confs',
            'afterConfs' => 'after_confs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  修改结果，    success：已生效     failed：未生效     setting：设置中\",
    * time  修改时间
    * failReason  修改失败原因
    * beforeConfs  修改之前的值
    * afterConfs  修改之后的值
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'time' => 'setTime',
            'failReason' => 'setFailReason',
            'beforeConfs' => 'setBeforeConfs',
            'afterConfs' => 'setAfterConfs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  修改结果，    success：已生效     failed：未生效     setting：设置中\",
    * time  修改时间
    * failReason  修改失败原因
    * beforeConfs  修改之前的值
    * afterConfs  修改之后的值
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'time' => 'getTime',
            'failReason' => 'getFailReason',
            'beforeConfs' => 'getBeforeConfs',
            'afterConfs' => 'getAfterConfs'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['beforeConfs'] = isset($data['beforeConfs']) ? $data['beforeConfs'] : null;
        $this->container['afterConfs'] = isset($data['afterConfs']) ? $data['afterConfs'] : null;
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
    * Gets status
    *  修改结果，    success：已生效     failed：未生效     setting：设置中\",
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
    * @param string|null $status 修改结果，    success：已生效     failed：未生效     setting：设置中\",
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets time
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \DateTime|null $time 修改时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets failReason
    *  修改失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 修改失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets beforeConfs
    *  修改之前的值
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]|null
    */
    public function getBeforeConfs()
    {
        return $this->container['beforeConfs'];
    }

    /**
    * Sets beforeConfs
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]|null $beforeConfs 修改之前的值
    *
    * @return $this
    */
    public function setBeforeConfs($beforeConfs)
    {
        $this->container['beforeConfs'] = $beforeConfs;
        return $this;
    }

    /**
    * Gets afterConfs
    *  修改之后的值
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]|null
    */
    public function getAfterConfs()
    {
        return $this->container['afterConfs'];
    }

    /**
    * Sets afterConfs
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PostgresqlHbaConf[]|null $afterConfs 修改之后的值
    *
    * @return $this
    */
    public function setAfterConfs($afterConfs)
    {
        $this->container['afterConfs'] = $afterConfs;
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

