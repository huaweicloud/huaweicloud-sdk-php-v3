<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStarRocksDataReplicationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStarRocksDataReplicationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  扩展字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'string',
            'replications' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksReplicationInfo[]',
            'extText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  扩展字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'replications' => null,
        'extText' => null
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
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  扩展字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'replications' => 'replications',
            'extText' => 'ext_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  扩展字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'replications' => 'setReplications',
            'extText' => 'setExtText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  扩展字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'replications' => 'getReplications',
            'extText' => 'getExtText'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['replications'] = isset($data['replications']) ? $data['replications'] : null;
        $this->container['extText'] = isset($data['extText']) ? $data['extText'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalCount']) && (mb_strlen($this->container['totalCount']) > 3)) {
                $invalidProperties[] = "invalid value for 'totalCount', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['totalCount']) && (mb_strlen($this->container['totalCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'totalCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['extText']) && (mb_strlen($this->container['extText']) > 10)) {
                $invalidProperties[] = "invalid value for 'extText', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['extText']) && (mb_strlen($this->container['extText']) < 0)) {
                $invalidProperties[] = "invalid value for 'extText', the character length must be bigger than or equal to 0.";
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
    * Gets totalCount
    *  查询数据同步任务数。
    *
    * @return string|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param string|null $totalCount 查询数据同步任务数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets replications
    *  数据同步任务信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksReplicationInfo[]|null
    */
    public function getReplications()
    {
        return $this->container['replications'];
    }

    /**
    * Sets replications
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksReplicationInfo[]|null $replications 数据同步任务信息。
    *
    * @return $this
    */
    public function setReplications($replications)
    {
        $this->container['replications'] = $replications;
        return $this;
    }

    /**
    * Gets extText
    *  扩展字段。
    *
    * @return string|null
    */
    public function getExtText()
    {
        return $this->container['extText'];
    }

    /**
    * Sets extText
    *
    * @param string|null $extText 扩展字段。
    *
    * @return $this
    */
    public function setExtText($extText)
    {
        $this->container['extText'] = $extText;
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

