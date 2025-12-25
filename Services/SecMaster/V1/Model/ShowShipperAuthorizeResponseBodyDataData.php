<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShipperAuthorizeResponseBodyDataData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShipperAuthorizeResponseBody_data_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizeStatus  授权状态，0-已授权，1-未授权，2-拒绝授权
    * dataSourceQuery  数据源查询字符串，表示数据源的路径
    * dataType  数据类型，具体含义根据业务定义
    * dataspace  数据空间ID，唯一标识
    * id  唯一标识ID
    * pipe  管道ID，唯一标识
    * region  地域信息
    * requestTime  请求时间，单位为毫秒的时间戳
    * handlerTime  授权时间，单位为毫秒的时间戳
    * runStatus  运行状态，具体含义根据业务定义
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * workspace  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizeStatus' => 'int',
            'dataSourceQuery' => 'string',
            'dataType' => 'int',
            'dataspace' => 'string',
            'id' => 'int',
            'pipe' => 'string',
            'region' => 'string',
            'requestTime' => 'int',
            'handlerTime' => 'int',
            'runStatus' => 'int',
            'shipperId' => 'string',
            'shipperName' => 'string',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizeStatus  授权状态，0-已授权，1-未授权，2-拒绝授权
    * dataSourceQuery  数据源查询字符串，表示数据源的路径
    * dataType  数据类型，具体含义根据业务定义
    * dataspace  数据空间ID，唯一标识
    * id  唯一标识ID
    * pipe  管道ID，唯一标识
    * region  地域信息
    * requestTime  请求时间，单位为毫秒的时间戳
    * handlerTime  授权时间，单位为毫秒的时间戳
    * runStatus  运行状态，具体含义根据业务定义
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * workspace  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizeStatus' => null,
        'dataSourceQuery' => null,
        'dataType' => null,
        'dataspace' => null,
        'id' => null,
        'pipe' => null,
        'region' => null,
        'requestTime' => 'int64',
        'handlerTime' => 'int64',
        'runStatus' => null,
        'shipperId' => null,
        'shipperName' => null,
        'workspace' => null
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
    * authorizeStatus  授权状态，0-已授权，1-未授权，2-拒绝授权
    * dataSourceQuery  数据源查询字符串，表示数据源的路径
    * dataType  数据类型，具体含义根据业务定义
    * dataspace  数据空间ID，唯一标识
    * id  唯一标识ID
    * pipe  管道ID，唯一标识
    * region  地域信息
    * requestTime  请求时间，单位为毫秒的时间戳
    * handlerTime  授权时间，单位为毫秒的时间戳
    * runStatus  运行状态，具体含义根据业务定义
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * workspace  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizeStatus' => 'authorize_status',
            'dataSourceQuery' => 'data_source_query',
            'dataType' => 'data_type',
            'dataspace' => 'dataspace',
            'id' => 'id',
            'pipe' => 'pipe',
            'region' => 'region',
            'requestTime' => 'request_time',
            'handlerTime' => 'handler_time',
            'runStatus' => 'run_status',
            'shipperId' => 'shipper_id',
            'shipperName' => 'shipper_name',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizeStatus  授权状态，0-已授权，1-未授权，2-拒绝授权
    * dataSourceQuery  数据源查询字符串，表示数据源的路径
    * dataType  数据类型，具体含义根据业务定义
    * dataspace  数据空间ID，唯一标识
    * id  唯一标识ID
    * pipe  管道ID，唯一标识
    * region  地域信息
    * requestTime  请求时间，单位为毫秒的时间戳
    * handlerTime  授权时间，单位为毫秒的时间戳
    * runStatus  运行状态，具体含义根据业务定义
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * workspace  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizeStatus' => 'setAuthorizeStatus',
            'dataSourceQuery' => 'setDataSourceQuery',
            'dataType' => 'setDataType',
            'dataspace' => 'setDataspace',
            'id' => 'setId',
            'pipe' => 'setPipe',
            'region' => 'setRegion',
            'requestTime' => 'setRequestTime',
            'handlerTime' => 'setHandlerTime',
            'runStatus' => 'setRunStatus',
            'shipperId' => 'setShipperId',
            'shipperName' => 'setShipperName',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizeStatus  授权状态，0-已授权，1-未授权，2-拒绝授权
    * dataSourceQuery  数据源查询字符串，表示数据源的路径
    * dataType  数据类型，具体含义根据业务定义
    * dataspace  数据空间ID，唯一标识
    * id  唯一标识ID
    * pipe  管道ID，唯一标识
    * region  地域信息
    * requestTime  请求时间，单位为毫秒的时间戳
    * handlerTime  授权时间，单位为毫秒的时间戳
    * runStatus  运行状态，具体含义根据业务定义
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * workspace  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizeStatus' => 'getAuthorizeStatus',
            'dataSourceQuery' => 'getDataSourceQuery',
            'dataType' => 'getDataType',
            'dataspace' => 'getDataspace',
            'id' => 'getId',
            'pipe' => 'getPipe',
            'region' => 'getRegion',
            'requestTime' => 'getRequestTime',
            'handlerTime' => 'getHandlerTime',
            'runStatus' => 'getRunStatus',
            'shipperId' => 'getShipperId',
            'shipperName' => 'getShipperName',
            'workspace' => 'getWorkspace'
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
        $this->container['authorizeStatus'] = isset($data['authorizeStatus']) ? $data['authorizeStatus'] : null;
        $this->container['dataSourceQuery'] = isset($data['dataSourceQuery']) ? $data['dataSourceQuery'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dataspace'] = isset($data['dataspace']) ? $data['dataspace'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pipe'] = isset($data['pipe']) ? $data['pipe'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['handlerTime'] = isset($data['handlerTime']) ? $data['handlerTime'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['shipperId'] = isset($data['shipperId']) ? $data['shipperId'] : null;
        $this->container['shipperName'] = isset($data['shipperName']) ? $data['shipperName'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataspace']) && (mb_strlen($this->container['dataspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspace']) && (mb_strlen($this->container['dataspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['shipperId']) && (mb_strlen($this->container['shipperId']) > 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['shipperId']) && (mb_strlen($this->container['shipperId']) < 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) > 128)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) < 1)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 36.";
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
    * Gets authorizeStatus
    *  授权状态，0-已授权，1-未授权，2-拒绝授权
    *
    * @return int|null
    */
    public function getAuthorizeStatus()
    {
        return $this->container['authorizeStatus'];
    }

    /**
    * Sets authorizeStatus
    *
    * @param int|null $authorizeStatus 授权状态，0-已授权，1-未授权，2-拒绝授权
    *
    * @return $this
    */
    public function setAuthorizeStatus($authorizeStatus)
    {
        $this->container['authorizeStatus'] = $authorizeStatus;
        return $this;
    }

    /**
    * Gets dataSourceQuery
    *  数据源查询字符串，表示数据源的路径
    *
    * @return string|null
    */
    public function getDataSourceQuery()
    {
        return $this->container['dataSourceQuery'];
    }

    /**
    * Sets dataSourceQuery
    *
    * @param string|null $dataSourceQuery 数据源查询字符串，表示数据源的路径
    *
    * @return $this
    */
    public function setDataSourceQuery($dataSourceQuery)
    {
        $this->container['dataSourceQuery'] = $dataSourceQuery;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型，具体含义根据业务定义
    *
    * @return int|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param int|null $dataType 数据类型，具体含义根据业务定义
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dataspace
    *  数据空间ID，唯一标识
    *
    * @return string|null
    */
    public function getDataspace()
    {
        return $this->container['dataspace'];
    }

    /**
    * Sets dataspace
    *
    * @param string|null $dataspace 数据空间ID，唯一标识
    *
    * @return $this
    */
    public function setDataspace($dataspace)
    {
        $this->container['dataspace'] = $dataspace;
        return $this;
    }

    /**
    * Gets id
    *  唯一标识ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets pipe
    *  管道ID，唯一标识
    *
    * @return string|null
    */
    public function getPipe()
    {
        return $this->container['pipe'];
    }

    /**
    * Sets pipe
    *
    * @param string|null $pipe 管道ID，唯一标识
    *
    * @return $this
    */
    public function setPipe($pipe)
    {
        $this->container['pipe'] = $pipe;
        return $this;
    }

    /**
    * Gets region
    *  地域信息
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 地域信息
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets requestTime
    *  请求时间，单位为毫秒的时间戳
    *
    * @return int|null
    */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
    * Sets requestTime
    *
    * @param int|null $requestTime 请求时间，单位为毫秒的时间戳
    *
    * @return $this
    */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;
        return $this;
    }

    /**
    * Gets handlerTime
    *  授权时间，单位为毫秒的时间戳
    *
    * @return int|null
    */
    public function getHandlerTime()
    {
        return $this->container['handlerTime'];
    }

    /**
    * Sets handlerTime
    *
    * @param int|null $handlerTime 授权时间，单位为毫秒的时间戳
    *
    * @return $this
    */
    public function setHandlerTime($handlerTime)
    {
        $this->container['handlerTime'] = $handlerTime;
        return $this;
    }

    /**
    * Gets runStatus
    *  运行状态，具体含义根据业务定义
    *
    * @return int|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param int|null $runStatus 运行状态，具体含义根据业务定义
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets shipperId
    *  船运ID，唯一标识
    *
    * @return string|null
    */
    public function getShipperId()
    {
        return $this->container['shipperId'];
    }

    /**
    * Sets shipperId
    *
    * @param string|null $shipperId 船运ID，唯一标识
    *
    * @return $this
    */
    public function setShipperId($shipperId)
    {
        $this->container['shipperId'] = $shipperId;
        return $this;
    }

    /**
    * Gets shipperName
    *  船运名称
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
    * @param string|null $shipperName 船运名称
    *
    * @return $this
    */
    public function setShipperName($shipperName)
    {
        $this->container['shipperName'] = $shipperName;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID，唯一标识
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID，唯一标识
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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

