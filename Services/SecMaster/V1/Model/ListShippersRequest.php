<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShippersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShippersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * shipperName  投递名称
    * shipperSourceRegion  数据源区域
    * shipperSourceStrategy  数据源消费策略
    * shipperConsumptionType  数据源消费类型
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * createTime  创建时间
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'shipperName' => 'string',
            'shipperSourceRegion' => 'string',
            'shipperSourceStrategy' => 'string',
            'shipperConsumptionType' => 'string',
            'destinationShipperType' => 'string',
            'shipperStatus' => 'string',
            'createTime' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * shipperName  投递名称
    * shipperSourceRegion  数据源区域
    * shipperSourceStrategy  数据源消费策略
    * shipperConsumptionType  数据源消费类型
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * createTime  创建时间
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'shipperName' => null,
        'shipperSourceRegion' => null,
        'shipperSourceStrategy' => null,
        'shipperConsumptionType' => null,
        'destinationShipperType' => null,
        'shipperStatus' => null,
        'createTime' => null,
        'limit' => 'int64',
        'offset' => 'int64'
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
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * shipperName  投递名称
    * shipperSourceRegion  数据源区域
    * shipperSourceStrategy  数据源消费策略
    * shipperConsumptionType  数据源消费类型
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * createTime  创建时间
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'shipperName' => 'shipper_name',
            'shipperSourceRegion' => 'shipper_source_region',
            'shipperSourceStrategy' => 'shipper_source_strategy',
            'shipperConsumptionType' => 'shipper_consumption_type',
            'destinationShipperType' => 'destination_shipper_type',
            'shipperStatus' => 'shipper_status',
            'createTime' => 'create_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * shipperName  投递名称
    * shipperSourceRegion  数据源区域
    * shipperSourceStrategy  数据源消费策略
    * shipperConsumptionType  数据源消费类型
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * createTime  创建时间
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'shipperName' => 'setShipperName',
            'shipperSourceRegion' => 'setShipperSourceRegion',
            'shipperSourceStrategy' => 'setShipperSourceStrategy',
            'shipperConsumptionType' => 'setShipperConsumptionType',
            'destinationShipperType' => 'setDestinationShipperType',
            'shipperStatus' => 'setShipperStatus',
            'createTime' => 'setCreateTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * shipperName  投递名称
    * shipperSourceRegion  数据源区域
    * shipperSourceStrategy  数据源消费策略
    * shipperConsumptionType  数据源消费类型
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * createTime  创建时间
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'shipperName' => 'getShipperName',
            'shipperSourceRegion' => 'getShipperSourceRegion',
            'shipperSourceStrategy' => 'getShipperSourceStrategy',
            'shipperConsumptionType' => 'getShipperConsumptionType',
            'destinationShipperType' => 'getDestinationShipperType',
            'shipperStatus' => 'getShipperStatus',
            'createTime' => 'getCreateTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['shipperName'] = isset($data['shipperName']) ? $data['shipperName'] : null;
        $this->container['shipperSourceRegion'] = isset($data['shipperSourceRegion']) ? $data['shipperSourceRegion'] : null;
        $this->container['shipperSourceStrategy'] = isset($data['shipperSourceStrategy']) ? $data['shipperSourceStrategy'] : null;
        $this->container['shipperConsumptionType'] = isset($data['shipperConsumptionType']) ? $data['shipperConsumptionType'] : null;
        $this->container['destinationShipperType'] = isset($data['destinationShipperType']) ? $data['destinationShipperType'] : null;
        $this->container['shipperStatus'] = isset($data['shipperStatus']) ? $data['shipperStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) < 0)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shipperSourceRegion']) && (mb_strlen($this->container['shipperSourceRegion']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'shipperSourceRegion', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['shipperSourceRegion']) && (mb_strlen($this->container['shipperSourceRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'shipperSourceRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shipperSourceStrategy']) && (mb_strlen($this->container['shipperSourceStrategy']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'shipperSourceStrategy', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['shipperSourceStrategy']) && (mb_strlen($this->container['shipperSourceStrategy']) < 0)) {
                $invalidProperties[] = "invalid value for 'shipperSourceStrategy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shipperConsumptionType']) && (mb_strlen($this->container['shipperConsumptionType']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'shipperConsumptionType', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['shipperConsumptionType']) && (mb_strlen($this->container['shipperConsumptionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'shipperConsumptionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets shipperName
    *  投递名称
    *
    * @return string|null
    */
    public function getShipperName()
    {
        return $this->container['shipperName'];
    }

    /**
    * Sets shipperName
    *
    * @param string|null $shipperName 投递名称
    *
    * @return $this
    */
    public function setShipperName($shipperName)
    {
        $this->container['shipperName'] = $shipperName;
        return $this;
    }

    /**
    * Gets shipperSourceRegion
    *  数据源区域
    *
    * @return string|null
    */
    public function getShipperSourceRegion()
    {
        return $this->container['shipperSourceRegion'];
    }

    /**
    * Sets shipperSourceRegion
    *
    * @param string|null $shipperSourceRegion 数据源区域
    *
    * @return $this
    */
    public function setShipperSourceRegion($shipperSourceRegion)
    {
        $this->container['shipperSourceRegion'] = $shipperSourceRegion;
        return $this;
    }

    /**
    * Gets shipperSourceStrategy
    *  数据源消费策略
    *
    * @return string|null
    */
    public function getShipperSourceStrategy()
    {
        return $this->container['shipperSourceStrategy'];
    }

    /**
    * Sets shipperSourceStrategy
    *
    * @param string|null $shipperSourceStrategy 数据源消费策略
    *
    * @return $this
    */
    public function setShipperSourceStrategy($shipperSourceStrategy)
    {
        $this->container['shipperSourceStrategy'] = $shipperSourceStrategy;
        return $this;
    }

    /**
    * Gets shipperConsumptionType
    *  数据源消费类型
    *
    * @return string|null
    */
    public function getShipperConsumptionType()
    {
        return $this->container['shipperConsumptionType'];
    }

    /**
    * Sets shipperConsumptionType
    *
    * @param string|null $shipperConsumptionType 数据源消费类型
    *
    * @return $this
    */
    public function setShipperConsumptionType($shipperConsumptionType)
    {
        $this->container['shipperConsumptionType'] = $shipperConsumptionType;
        return $this;
    }

    /**
    * Gets destinationShipperType
    *  目的投递类型
    *
    * @return string|null
    */
    public function getDestinationShipperType()
    {
        return $this->container['destinationShipperType'];
    }

    /**
    * Sets destinationShipperType
    *
    * @param string|null $destinationShipperType 目的投递类型
    *
    * @return $this
    */
    public function setDestinationShipperType($destinationShipperType)
    {
        $this->container['destinationShipperType'] = $destinationShipperType;
        return $this;
    }

    /**
    * Gets shipperStatus
    *  数据投递状态
    *
    * @return string|null
    */
    public function getShipperStatus()
    {
        return $this->container['shipperStatus'];
    }

    /**
    * Sets shipperStatus
    *
    * @param string|null $shipperStatus 数据投递状态
    *
    * @return $this
    */
    public function setShipperStatus($shipperStatus)
    {
        $this->container['shipperStatus'] = $shipperStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  第几页
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 第几页
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

