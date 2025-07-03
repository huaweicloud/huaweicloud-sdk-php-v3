<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetLogBackupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetLogBackupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'level' => 'string',
            'logType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'level' => null,
        'logType' => null
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
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'level' => 'level',
            'logType' => 'log_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'level' => 'setLevel',
            'logType' => 'setLogType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'level' => 'getLevel',
            'logType' => 'getLogType'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
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
    * Gets instanceName
    *  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets level
    *  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets logType
    *  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType 日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
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

