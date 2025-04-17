<?php

namespace HuaweiCloud\SDK\AntiDDoS\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CleanLimitDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CleanLimitDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cleaningAccessPosId' => 'int',
            'newConnectionLimited' => 'int',
            'totalConnectionLimited' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cleaningAccessPosId' => 'int64',
        'newConnectionLimited' => 'int64',
        'totalConnectionLimited' => 'int64'
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
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cleaningAccessPosId' => 'cleaning_access_pos_id',
            'newConnectionLimited' => 'new_connection_limited',
            'totalConnectionLimited' => 'total_connection_limited'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    *
    * @var string[]
    */
    protected static $setters = [
            'cleaningAccessPosId' => 'setCleaningAccessPosId',
            'newConnectionLimited' => 'setNewConnectionLimited',
            'totalConnectionLimited' => 'setTotalConnectionLimited'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * newConnectionLimited  单一源IP新建连接个数
    * totalConnectionLimited  单一源IP连接数总个数
    *
    * @var string[]
    */
    protected static $getters = [
            'cleaningAccessPosId' => 'getCleaningAccessPosId',
            'newConnectionLimited' => 'getNewConnectionLimited',
            'totalConnectionLimited' => 'getTotalConnectionLimited'
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
        $this->container['cleaningAccessPosId'] = isset($data['cleaningAccessPosId']) ? $data['cleaningAccessPosId'] : null;
        $this->container['newConnectionLimited'] = isset($data['newConnectionLimited']) ? $data['newConnectionLimited'] : null;
        $this->container['totalConnectionLimited'] = isset($data['totalConnectionLimited']) ? $data['totalConnectionLimited'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cleaningAccessPosId'] === null) {
            $invalidProperties[] = "'cleaningAccessPosId' can't be null";
        }
        if ($this->container['newConnectionLimited'] === null) {
            $invalidProperties[] = "'newConnectionLimited' can't be null";
        }
        if ($this->container['totalConnectionLimited'] === null) {
            $invalidProperties[] = "'totalConnectionLimited' can't be null";
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
    * Gets cleaningAccessPosId
    *  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return int
    */
    public function getCleaningAccessPosId()
    {
        return $this->container['cleaningAccessPosId'];
    }

    /**
    * Sets cleaningAccessPosId
    *
    * @param int $cleaningAccessPosId 清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return $this
    */
    public function setCleaningAccessPosId($cleaningAccessPosId)
    {
        $this->container['cleaningAccessPosId'] = $cleaningAccessPosId;
        return $this;
    }

    /**
    * Gets newConnectionLimited
    *  单一源IP新建连接个数
    *
    * @return int
    */
    public function getNewConnectionLimited()
    {
        return $this->container['newConnectionLimited'];
    }

    /**
    * Sets newConnectionLimited
    *
    * @param int $newConnectionLimited 单一源IP新建连接个数
    *
    * @return $this
    */
    public function setNewConnectionLimited($newConnectionLimited)
    {
        $this->container['newConnectionLimited'] = $newConnectionLimited;
        return $this;
    }

    /**
    * Gets totalConnectionLimited
    *  单一源IP连接数总个数
    *
    * @return int
    */
    public function getTotalConnectionLimited()
    {
        return $this->container['totalConnectionLimited'];
    }

    /**
    * Sets totalConnectionLimited
    *
    * @param int $totalConnectionLimited 单一源IP连接数总个数
    *
    * @return $this
    */
    public function setTotalConnectionLimited($totalConnectionLimited)
    {
        $this->container['totalConnectionLimited'] = $totalConnectionLimited;
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

