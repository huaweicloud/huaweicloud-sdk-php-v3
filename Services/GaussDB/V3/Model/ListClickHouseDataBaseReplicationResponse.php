<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClickHouseDataBaseReplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClickHouseDataBaseReplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  taurus操作表示，重启、规格变更、倒换等。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'replications' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseReplicationInfo[]',
            'extText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  查询数据同步任务数。
    * replications  数据同步任务信息。
    * extText  taurus操作表示，重启、规格变更、倒换等。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
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
    * extText  taurus操作表示，重启、规格变更、倒换等。
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
    * extText  taurus操作表示，重启、规格变更、倒换等。
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
    * extText  taurus操作表示，重启、规格变更、倒换等。
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
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 查询数据同步任务数。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseReplicationInfo[]|null
    */
    public function getReplications()
    {
        return $this->container['replications'];
    }

    /**
    * Sets replications
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseReplicationInfo[]|null $replications 数据同步任务信息。
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
    *  taurus操作表示，重启、规格变更、倒换等。
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
    * @param string|null $extText taurus操作表示，重启、规格变更、倒换等。
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

