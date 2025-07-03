<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxItemVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxItemVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  组件名称。
    * envName  环境名称。
    * txDisplayName  事务显示名称。
    * businessId  应用id。
    * envId  环境id。
    * appId  组件id。
    * txName  事务名称。
    * invokeCount  调用次数。
    * totalTime  总耗时。
    * errorCount  错误次数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'envName' => 'string',
            'txDisplayName' => 'string',
            'businessId' => 'int',
            'envId' => 'int',
            'appId' => 'int',
            'txName' => 'string',
            'invokeCount' => 'int',
            'totalTime' => 'int',
            'errorCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  组件名称。
    * envName  环境名称。
    * txDisplayName  事务显示名称。
    * businessId  应用id。
    * envId  环境id。
    * appId  组件id。
    * txName  事务名称。
    * invokeCount  调用次数。
    * totalTime  总耗时。
    * errorCount  错误次数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'envName' => null,
        'txDisplayName' => null,
        'businessId' => 'int64',
        'envId' => 'int64',
        'appId' => 'int64',
        'txName' => null,
        'invokeCount' => 'int32',
        'totalTime' => 'int32',
        'errorCount' => 'int32'
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
    * appName  组件名称。
    * envName  环境名称。
    * txDisplayName  事务显示名称。
    * businessId  应用id。
    * envId  环境id。
    * appId  组件id。
    * txName  事务名称。
    * invokeCount  调用次数。
    * totalTime  总耗时。
    * errorCount  错误次数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'envName' => 'env_name',
            'txDisplayName' => 'tx_display_name',
            'businessId' => 'business_id',
            'envId' => 'env_id',
            'appId' => 'app_id',
            'txName' => 'tx_name',
            'invokeCount' => 'invoke_count',
            'totalTime' => 'total_time',
            'errorCount' => 'error_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  组件名称。
    * envName  环境名称。
    * txDisplayName  事务显示名称。
    * businessId  应用id。
    * envId  环境id。
    * appId  组件id。
    * txName  事务名称。
    * invokeCount  调用次数。
    * totalTime  总耗时。
    * errorCount  错误次数。
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'envName' => 'setEnvName',
            'txDisplayName' => 'setTxDisplayName',
            'businessId' => 'setBusinessId',
            'envId' => 'setEnvId',
            'appId' => 'setAppId',
            'txName' => 'setTxName',
            'invokeCount' => 'setInvokeCount',
            'totalTime' => 'setTotalTime',
            'errorCount' => 'setErrorCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  组件名称。
    * envName  环境名称。
    * txDisplayName  事务显示名称。
    * businessId  应用id。
    * envId  环境id。
    * appId  组件id。
    * txName  事务名称。
    * invokeCount  调用次数。
    * totalTime  总耗时。
    * errorCount  错误次数。
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'envName' => 'getEnvName',
            'txDisplayName' => 'getTxDisplayName',
            'businessId' => 'getBusinessId',
            'envId' => 'getEnvId',
            'appId' => 'getAppId',
            'txName' => 'getTxName',
            'invokeCount' => 'getInvokeCount',
            'totalTime' => 'getTotalTime',
            'errorCount' => 'getErrorCount'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['txDisplayName'] = isset($data['txDisplayName']) ? $data['txDisplayName'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['txName'] = isset($data['txName']) ? $data['txName'] : null;
        $this->container['invokeCount'] = isset($data['invokeCount']) ? $data['invokeCount'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
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
    * Gets appName
    *  组件名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets envName
    *  环境名称。
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境名称。
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets txDisplayName
    *  事务显示名称。
    *
    * @return string|null
    */
    public function getTxDisplayName()
    {
        return $this->container['txDisplayName'];
    }

    /**
    * Sets txDisplayName
    *
    * @param string|null $txDisplayName 事务显示名称。
    *
    * @return $this
    */
    public function setTxDisplayName($txDisplayName)
    {
        $this->container['txDisplayName'] = $txDisplayName;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets appId
    *  组件id。
    *
    * @return int|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param int|null $appId 组件id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets txName
    *  事务名称。
    *
    * @return string|null
    */
    public function getTxName()
    {
        return $this->container['txName'];
    }

    /**
    * Sets txName
    *
    * @param string|null $txName 事务名称。
    *
    * @return $this
    */
    public function setTxName($txName)
    {
        $this->container['txName'] = $txName;
        return $this;
    }

    /**
    * Gets invokeCount
    *  调用次数。
    *
    * @return int|null
    */
    public function getInvokeCount()
    {
        return $this->container['invokeCount'];
    }

    /**
    * Sets invokeCount
    *
    * @param int|null $invokeCount 调用次数。
    *
    * @return $this
    */
    public function setInvokeCount($invokeCount)
    {
        $this->container['invokeCount'] = $invokeCount;
        return $this;
    }

    /**
    * Gets totalTime
    *  总耗时。
    *
    * @return int|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param int|null $totalTime 总耗时。
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets errorCount
    *  错误次数。
    *
    * @return int|null
    */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
    * Sets errorCount
    *
    * @param int|null $errorCount 错误次数。
    *
    * @return $this
    */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;
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

