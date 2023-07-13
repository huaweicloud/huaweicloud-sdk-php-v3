<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allCounts  总数
    * results  迁移用户信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allCounts' => 'int',
            'results' => '\HuaweiCloud\SDK\Drs\V3\Model\QueryUserResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allCounts  总数
    * results  迁移用户信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allCounts' => null,
        'results' => null
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
    * allCounts  总数
    * results  迁移用户信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allCounts' => 'all_counts',
            'results' => 'results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allCounts  总数
    * results  迁移用户信息
    *
    * @var string[]
    */
    protected static $setters = [
            'allCounts' => 'setAllCounts',
            'results' => 'setResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allCounts  总数
    * results  迁移用户信息
    *
    * @var string[]
    */
    protected static $getters = [
            'allCounts' => 'getAllCounts',
            'results' => 'getResults'
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
        $this->container['allCounts'] = isset($data['allCounts']) ? $data['allCounts'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
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
    * Gets allCounts
    *  总数
    *
    * @return int|null
    */
    public function getAllCounts()
    {
        return $this->container['allCounts'];
    }

    /**
    * Sets allCounts
    *
    * @param int|null $allCounts 总数
    *
    * @return $this
    */
    public function setAllCounts($allCounts)
    {
        $this->container['allCounts'] = $allCounts;
        return $this;
    }

    /**
    * Gets results
    *  迁移用户信息
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\QueryUserResp[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\QueryUserResp[]|null $results 迁移用户信息
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
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

