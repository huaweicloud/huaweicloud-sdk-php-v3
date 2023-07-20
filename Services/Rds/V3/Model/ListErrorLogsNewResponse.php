<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListErrorLogsNewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListErrorLogsNewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorLogList  errorLogList
    * totalRecord  总记录数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorLogList' => '\HuaweiCloud\SDK\Rds\V3\Model\ErrorLog[]',
            'totalRecord' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorLogList  errorLogList
    * totalRecord  总记录数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorLogList' => null,
        'totalRecord' => null
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
    * errorLogList  errorLogList
    * totalRecord  总记录数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorLogList' => 'error_log_list',
            'totalRecord' => 'total_record'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorLogList  errorLogList
    * totalRecord  总记录数。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorLogList' => 'setErrorLogList',
            'totalRecord' => 'setTotalRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorLogList  errorLogList
    * totalRecord  总记录数。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorLogList' => 'getErrorLogList',
            'totalRecord' => 'getTotalRecord'
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
        $this->container['errorLogList'] = isset($data['errorLogList']) ? $data['errorLogList'] : null;
        $this->container['totalRecord'] = isset($data['totalRecord']) ? $data['totalRecord'] : null;
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
    * Gets errorLogList
    *  errorLogList
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ErrorLog[]|null
    */
    public function getErrorLogList()
    {
        return $this->container['errorLogList'];
    }

    /**
    * Sets errorLogList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ErrorLog[]|null $errorLogList errorLogList
    *
    * @return $this
    */
    public function setErrorLogList($errorLogList)
    {
        $this->container['errorLogList'] = $errorLogList;
        return $this;
    }

    /**
    * Gets totalRecord
    *  总记录数。
    *
    * @return int|null
    */
    public function getTotalRecord()
    {
        return $this->container['totalRecord'];
    }

    /**
    * Sets totalRecord
    *
    * @param int|null $totalRecord 总记录数。
    *
    * @return $this
    */
    public function setTotalRecord($totalRecord)
    {
        $this->container['totalRecord'] = $totalRecord;
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

