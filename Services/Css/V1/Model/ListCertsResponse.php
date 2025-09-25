<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certsRecords  certsRecords
    * totalSize  证书记录数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certsRecords' => '\HuaweiCloud\SDK\Css\V1\Model\CertsRecordsDatastore',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certsRecords  certsRecords
    * totalSize  证书记录数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certsRecords' => null,
        'totalSize' => null
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
    * certsRecords  certsRecords
    * totalSize  证书记录数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certsRecords' => 'certsRecords',
            'totalSize' => 'totalSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certsRecords  certsRecords
    * totalSize  证书记录数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'certsRecords' => 'setCertsRecords',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certsRecords  certsRecords
    * totalSize  证书记录数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'certsRecords' => 'getCertsRecords',
            'totalSize' => 'getTotalSize'
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
        $this->container['certsRecords'] = isset($data['certsRecords']) ? $data['certsRecords'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
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
    * Gets certsRecords
    *  certsRecords
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CertsRecordsDatastore|null
    */
    public function getCertsRecords()
    {
        return $this->container['certsRecords'];
    }

    /**
    * Sets certsRecords
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CertsRecordsDatastore|null $certsRecords certsRecords
    *
    * @return $this
    */
    public function setCertsRecords($certsRecords)
    {
        $this->container['certsRecords'] = $certsRecords;
        return $this;
    }

    /**
    * Gets totalSize
    *  证书记录数量。
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 证书记录数量。
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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

