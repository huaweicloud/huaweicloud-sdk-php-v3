<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobMonitorInfoRespPayloadJobsMetricsSources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobMonitorInfoResp_payload_jobs_metrics_sources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  输入流或输出流名称。
    * records  总记录数。
    * corruptedRecords  脏数据记录数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'records' => 'int',
            'corruptedRecords' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  输入流或输出流名称。
    * records  总记录数。
    * corruptedRecords  脏数据记录数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'records' => 'int64',
        'corruptedRecords' => 'int64'
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
    * name  输入流或输出流名称。
    * records  总记录数。
    * corruptedRecords  脏数据记录数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'records' => 'records',
            'corruptedRecords' => 'corrupted_records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  输入流或输出流名称。
    * records  总记录数。
    * corruptedRecords  脏数据记录数。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'records' => 'setRecords',
            'corruptedRecords' => 'setCorruptedRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  输入流或输出流名称。
    * records  总记录数。
    * corruptedRecords  脏数据记录数。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'records' => 'getRecords',
            'corruptedRecords' => 'getCorruptedRecords'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['corruptedRecords'] = isset($data['corruptedRecords']) ? $data['corruptedRecords'] : null;
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
    * Gets name
    *  输入流或输出流名称。
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
    * @param string|null $name 输入流或输出流名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets records
    *  总记录数。
    *
    * @return int|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param int|null $records 总记录数。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets corruptedRecords
    *  脏数据记录数。
    *
    * @return int|null
    */
    public function getCorruptedRecords()
    {
        return $this->container['corruptedRecords'];
    }

    /**
    * Sets corruptedRecords
    *
    * @param int|null $corruptedRecords 脏数据记录数。
    *
    * @return $this
    */
    public function setCorruptedRecords($corruptedRecords)
    {
        $this->container['corruptedRecords'] = $corruptedRecords;
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

