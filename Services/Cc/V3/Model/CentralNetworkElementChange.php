<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkElementChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'operation_id';

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkElementChange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationId  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationId  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationId' => null
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
    * operationId  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationId' => 'operation_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationId  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @var string[]
    */
    protected static $setters = [
            'operationId' => 'setOperationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationId  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @var string[]
    */
    protected static $getters = [
            'operationId' => 'getOperationId'
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
    const OPERATION_ID_CREATE_CENTRAL_NETWORK_PLANE = 'CreateCentralNetworkPlane';
    const OPERATION_ID_DELETE_CENTRAL_NETWORK_PLANE = 'DeleteCentralNetworkPlane';
    const OPERATION_ID_UPDATE_CENTRAL_NETWORK_PLANE = 'UpdateCentralNetworkPlane';
    const OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_INSTANCE = 'CreateCentralNetworkErInstance';
    const OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_INSTANCE = 'DeleteCentralNetworkErInstance';
    const OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_CONNECTION = 'CreateCentralNetworkErConnection';
    const OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_CONNECTION = 'DeleteCentralNetworkErConnection';
    const OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_TABLE = 'CreateCentralNetworkErTable';
    const OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_TABLE = 'DeleteCentralNetworkErTable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationIdAllowableValues()
    {
        return [
            self::OPERATION_ID_CREATE_CENTRAL_NETWORK_PLANE,
            self::OPERATION_ID_DELETE_CENTRAL_NETWORK_PLANE,
            self::OPERATION_ID_UPDATE_CENTRAL_NETWORK_PLANE,
            self::OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_INSTANCE,
            self::OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_INSTANCE,
            self::OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_CONNECTION,
            self::OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_CONNECTION,
            self::OPERATION_ID_CREATE_CENTRAL_NETWORK_ER_TABLE,
            self::OPERATION_ID_DELETE_CENTRAL_NETWORK_ER_TABLE,
        ];
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
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
    // Initialize discriminator property with the model name.
    $this->container['operation_id'] = static::$openAPIModelName;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operationId'] === null) {
            $invalidProperties[] = "'operationId' can't be null";
        }
            $allowedValues = $this->getOperationIdAllowableValues();
                if (!is_null($this->container['operationId']) && !in_array($this->container['operationId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets operationId
    *  实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @return string
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string $operationId 实例状态。 - CreateCentralNetworkPlane: 新增中心网络平面 - DeleteCentralNetworkPlane: 移除中心网络平面 - UpdateCentralNetworkPlane: 更新中心网络平面 - CreateCentralNetworkErInstance: 新增中心网络ER实例 - DeleteCentralNetworkErInstance: 移除中心网络ER实例 - CreateCentralNetworkErConnection: 新增中心网络ER连接 - DeleteCentralNetworkErConnection: 移除中心网络ER连接 - CreateCentralNetworkErTable: 新增中心网络ER路由表 - DeleteCentralNetworkErTable: 移除中心网络ER路由表
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
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

