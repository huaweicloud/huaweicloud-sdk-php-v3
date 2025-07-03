<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchAgentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchAgentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalPage  总页数。
    * totalCount  总个数。
    * onlineCount  正常个数。
    * offlineCount  心跳异常个数。
    * disableCount  被关闭的个数。
    * agentInfoList  agent地址列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalPage' => 'int',
            'totalCount' => 'int',
            'onlineCount' => 'int',
            'offlineCount' => 'int',
            'disableCount' => 'int',
            'agentInfoList' => '\HuaweiCloud\SDK\Apm\V1\Model\InstanceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalPage  总页数。
    * totalCount  总个数。
    * onlineCount  正常个数。
    * offlineCount  心跳异常个数。
    * disableCount  被关闭的个数。
    * agentInfoList  agent地址列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalPage' => 'int32',
        'totalCount' => 'int32',
        'onlineCount' => 'int32',
        'offlineCount' => 'int32',
        'disableCount' => 'int32',
        'agentInfoList' => null
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
    * totalPage  总页数。
    * totalCount  总个数。
    * onlineCount  正常个数。
    * offlineCount  心跳异常个数。
    * disableCount  被关闭的个数。
    * agentInfoList  agent地址列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalPage' => 'total_page',
            'totalCount' => 'total_count',
            'onlineCount' => 'online_count',
            'offlineCount' => 'offline_count',
            'disableCount' => 'disable_count',
            'agentInfoList' => 'agent_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalPage  总页数。
    * totalCount  总个数。
    * onlineCount  正常个数。
    * offlineCount  心跳异常个数。
    * disableCount  被关闭的个数。
    * agentInfoList  agent地址列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalPage' => 'setTotalPage',
            'totalCount' => 'setTotalCount',
            'onlineCount' => 'setOnlineCount',
            'offlineCount' => 'setOfflineCount',
            'disableCount' => 'setDisableCount',
            'agentInfoList' => 'setAgentInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalPage  总页数。
    * totalCount  总个数。
    * onlineCount  正常个数。
    * offlineCount  心跳异常个数。
    * disableCount  被关闭的个数。
    * agentInfoList  agent地址列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalPage' => 'getTotalPage',
            'totalCount' => 'getTotalCount',
            'onlineCount' => 'getOnlineCount',
            'offlineCount' => 'getOfflineCount',
            'disableCount' => 'getDisableCount',
            'agentInfoList' => 'getAgentInfoList'
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
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['onlineCount'] = isset($data['onlineCount']) ? $data['onlineCount'] : null;
        $this->container['offlineCount'] = isset($data['offlineCount']) ? $data['offlineCount'] : null;
        $this->container['disableCount'] = isset($data['disableCount']) ? $data['disableCount'] : null;
        $this->container['agentInfoList'] = isset($data['agentInfoList']) ? $data['agentInfoList'] : null;
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
    * Gets totalPage
    *  总页数。
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数。
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalCount
    *  总个数。
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
    * @param int|null $totalCount 总个数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets onlineCount
    *  正常个数。
    *
    * @return int|null
    */
    public function getOnlineCount()
    {
        return $this->container['onlineCount'];
    }

    /**
    * Sets onlineCount
    *
    * @param int|null $onlineCount 正常个数。
    *
    * @return $this
    */
    public function setOnlineCount($onlineCount)
    {
        $this->container['onlineCount'] = $onlineCount;
        return $this;
    }

    /**
    * Gets offlineCount
    *  心跳异常个数。
    *
    * @return int|null
    */
    public function getOfflineCount()
    {
        return $this->container['offlineCount'];
    }

    /**
    * Sets offlineCount
    *
    * @param int|null $offlineCount 心跳异常个数。
    *
    * @return $this
    */
    public function setOfflineCount($offlineCount)
    {
        $this->container['offlineCount'] = $offlineCount;
        return $this;
    }

    /**
    * Gets disableCount
    *  被关闭的个数。
    *
    * @return int|null
    */
    public function getDisableCount()
    {
        return $this->container['disableCount'];
    }

    /**
    * Sets disableCount
    *
    * @param int|null $disableCount 被关闭的个数。
    *
    * @return $this
    */
    public function setDisableCount($disableCount)
    {
        $this->container['disableCount'] = $disableCount;
        return $this;
    }

    /**
    * Gets agentInfoList
    *  agent地址列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\InstanceInfo[]|null
    */
    public function getAgentInfoList()
    {
        return $this->container['agentInfoList'];
    }

    /**
    * Sets agentInfoList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\InstanceInfo[]|null $agentInfoList agent地址列表。
    *
    * @return $this
    */
    public function setAgentInfoList($agentInfoList)
    {
        $this->container['agentInfoList'] = $agentInfoList;
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

