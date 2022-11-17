<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDiagnosisTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDiagnosisTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  诊断开始时间。UNIX时间戳，单位毫秒。
    * endTime  诊断结束时间。UNIX时间戳，单位毫秒。
    * nodeIpList  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'endTime' => 'string',
            'nodeIpList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  诊断开始时间。UNIX时间戳，单位毫秒。
    * endTime  诊断结束时间。UNIX时间戳，单位毫秒。
    * nodeIpList  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'endTime' => null,
        'nodeIpList' => null
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
    * beginTime  诊断开始时间。UNIX时间戳，单位毫秒。
    * endTime  诊断结束时间。UNIX时间戳，单位毫秒。
    * nodeIpList  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'nodeIpList' => 'node_ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  诊断开始时间。UNIX时间戳，单位毫秒。
    * endTime  诊断结束时间。UNIX时间戳，单位毫秒。
    * nodeIpList  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'nodeIpList' => 'setNodeIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  诊断开始时间。UNIX时间戳，单位毫秒。
    * endTime  诊断结束时间。UNIX时间戳，单位毫秒。
    * nodeIpList  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'nodeIpList' => 'getNodeIpList'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['nodeIpList'] = isset($data['nodeIpList']) ? $data['nodeIpList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets beginTime
    *  诊断开始时间。UNIX时间戳，单位毫秒。
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime 诊断开始时间。UNIX时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  诊断结束时间。UNIX时间戳，单位毫秒。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 诊断结束时间。UNIX时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets nodeIpList
    *  诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @return string[]|null
    */
    public function getNodeIpList()
    {
        return $this->container['nodeIpList'];
    }

    /**
    * Sets nodeIpList
    *
    * @param string[]|null $nodeIpList 诊断节点IP列表。默认诊断所有节点。 非读写分离实例查询方法如下：   - 方法一：参考[查看实例信息](https://support.huaweicloud.com/usermanual-dcs/dcs-ug-0312016.html)。   - 方法二：调用[查询指定实例](https://support.huaweicloud.com/api-dcs/ShowInstance.html)查询。  读写分离实例查询方法：调用[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html#ListGroupReplicationInfo__response_InstanceReplicationListInfo)。
    *
    * @return $this
    */
    public function setNodeIpList($nodeIpList)
    {
        $this->container['nodeIpList'] = $nodeIpList;
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

