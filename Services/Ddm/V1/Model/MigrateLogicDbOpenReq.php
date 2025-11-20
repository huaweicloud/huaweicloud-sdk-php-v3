<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateLogicDbOpenReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateLogicDbOpenReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataNodes  关联的后端DN信息。
    * switchRouteBeginTime  路由切换开始时间。
    * switchRouteEndTime  路由切换结束时间。
    * newShardNumber  新分片数。
    * isExclusive  是否独占。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataNodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\DataNode[]',
            'switchRouteBeginTime' => 'string',
            'switchRouteEndTime' => 'string',
            'newShardNumber' => 'string',
            'isExclusive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataNodes  关联的后端DN信息。
    * switchRouteBeginTime  路由切换开始时间。
    * switchRouteEndTime  路由切换结束时间。
    * newShardNumber  新分片数。
    * isExclusive  是否独占。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataNodes' => null,
        'switchRouteBeginTime' => null,
        'switchRouteEndTime' => null,
        'newShardNumber' => null,
        'isExclusive' => null
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
    * dataNodes  关联的后端DN信息。
    * switchRouteBeginTime  路由切换开始时间。
    * switchRouteEndTime  路由切换结束时间。
    * newShardNumber  新分片数。
    * isExclusive  是否独占。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataNodes' => 'data_nodes',
            'switchRouteBeginTime' => 'switch_route_begin_time',
            'switchRouteEndTime' => 'switch_route_end_time',
            'newShardNumber' => 'new_shard_number',
            'isExclusive' => 'is_exclusive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataNodes  关联的后端DN信息。
    * switchRouteBeginTime  路由切换开始时间。
    * switchRouteEndTime  路由切换结束时间。
    * newShardNumber  新分片数。
    * isExclusive  是否独占。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataNodes' => 'setDataNodes',
            'switchRouteBeginTime' => 'setSwitchRouteBeginTime',
            'switchRouteEndTime' => 'setSwitchRouteEndTime',
            'newShardNumber' => 'setNewShardNumber',
            'isExclusive' => 'setIsExclusive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataNodes  关联的后端DN信息。
    * switchRouteBeginTime  路由切换开始时间。
    * switchRouteEndTime  路由切换结束时间。
    * newShardNumber  新分片数。
    * isExclusive  是否独占。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataNodes' => 'getDataNodes',
            'switchRouteBeginTime' => 'getSwitchRouteBeginTime',
            'switchRouteEndTime' => 'getSwitchRouteEndTime',
            'newShardNumber' => 'getNewShardNumber',
            'isExclusive' => 'getIsExclusive'
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
        $this->container['dataNodes'] = isset($data['dataNodes']) ? $data['dataNodes'] : null;
        $this->container['switchRouteBeginTime'] = isset($data['switchRouteBeginTime']) ? $data['switchRouteBeginTime'] : null;
        $this->container['switchRouteEndTime'] = isset($data['switchRouteEndTime']) ? $data['switchRouteEndTime'] : null;
        $this->container['newShardNumber'] = isset($data['newShardNumber']) ? $data['newShardNumber'] : null;
        $this->container['isExclusive'] = isset($data['isExclusive']) ? $data['isExclusive'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['switchRouteBeginTime']) && (mb_strlen($this->container['switchRouteBeginTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'switchRouteBeginTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['switchRouteBeginTime']) && (mb_strlen($this->container['switchRouteBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'switchRouteBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['switchRouteEndTime']) && (mb_strlen($this->container['switchRouteEndTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'switchRouteEndTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['switchRouteEndTime']) && (mb_strlen($this->container['switchRouteEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'switchRouteEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['newShardNumber']) && (mb_strlen($this->container['newShardNumber']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'newShardNumber', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['newShardNumber']) && (mb_strlen($this->container['newShardNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'newShardNumber', the character length must be bigger than or equal to 1.";
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
    * Gets dataNodes
    *  关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DataNode[]|null
    */
    public function getDataNodes()
    {
        return $this->container['dataNodes'];
    }

    /**
    * Sets dataNodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DataNode[]|null $dataNodes 关联的后端DN信息。
    *
    * @return $this
    */
    public function setDataNodes($dataNodes)
    {
        $this->container['dataNodes'] = $dataNodes;
        return $this;
    }

    /**
    * Gets switchRouteBeginTime
    *  路由切换开始时间。
    *
    * @return string|null
    */
    public function getSwitchRouteBeginTime()
    {
        return $this->container['switchRouteBeginTime'];
    }

    /**
    * Sets switchRouteBeginTime
    *
    * @param string|null $switchRouteBeginTime 路由切换开始时间。
    *
    * @return $this
    */
    public function setSwitchRouteBeginTime($switchRouteBeginTime)
    {
        $this->container['switchRouteBeginTime'] = $switchRouteBeginTime;
        return $this;
    }

    /**
    * Gets switchRouteEndTime
    *  路由切换结束时间。
    *
    * @return string|null
    */
    public function getSwitchRouteEndTime()
    {
        return $this->container['switchRouteEndTime'];
    }

    /**
    * Sets switchRouteEndTime
    *
    * @param string|null $switchRouteEndTime 路由切换结束时间。
    *
    * @return $this
    */
    public function setSwitchRouteEndTime($switchRouteEndTime)
    {
        $this->container['switchRouteEndTime'] = $switchRouteEndTime;
        return $this;
    }

    /**
    * Gets newShardNumber
    *  新分片数。
    *
    * @return string|null
    */
    public function getNewShardNumber()
    {
        return $this->container['newShardNumber'];
    }

    /**
    * Sets newShardNumber
    *
    * @param string|null $newShardNumber 新分片数。
    *
    * @return $this
    */
    public function setNewShardNumber($newShardNumber)
    {
        $this->container['newShardNumber'] = $newShardNumber;
        return $this;
    }

    /**
    * Gets isExclusive
    *  是否独占。
    *
    * @return bool|null
    */
    public function getIsExclusive()
    {
        return $this->container['isExclusive'];
    }

    /**
    * Sets isExclusive
    *
    * @param bool|null $isExclusive 是否独占。
    *
    * @return $this
    */
    public function setIsExclusive($isExclusive)
    {
        $this->container['isExclusive'] = $isExclusive;
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

