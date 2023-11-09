<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentCnt  可信节点数
    * instanceCnt  作业执行历史数
    * leagueCnt  有效联盟数
    * noticeToHandleCnt  待处理消息通知数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentCnt' => 'int',
            'instanceCnt' => 'int',
            'leagueCnt' => 'int',
            'noticeToHandleCnt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentCnt  可信节点数
    * instanceCnt  作业执行历史数
    * leagueCnt  有效联盟数
    * noticeToHandleCnt  待处理消息通知数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentCnt' => 'int64',
        'instanceCnt' => 'int64',
        'leagueCnt' => 'int64',
        'noticeToHandleCnt' => 'int64'
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
    * agentCnt  可信节点数
    * instanceCnt  作业执行历史数
    * leagueCnt  有效联盟数
    * noticeToHandleCnt  待处理消息通知数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentCnt' => 'agent_cnt',
            'instanceCnt' => 'instance_cnt',
            'leagueCnt' => 'league_cnt',
            'noticeToHandleCnt' => 'notice_to_handle_cnt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentCnt  可信节点数
    * instanceCnt  作业执行历史数
    * leagueCnt  有效联盟数
    * noticeToHandleCnt  待处理消息通知数
    *
    * @var string[]
    */
    protected static $setters = [
            'agentCnt' => 'setAgentCnt',
            'instanceCnt' => 'setInstanceCnt',
            'leagueCnt' => 'setLeagueCnt',
            'noticeToHandleCnt' => 'setNoticeToHandleCnt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentCnt  可信节点数
    * instanceCnt  作业执行历史数
    * leagueCnt  有效联盟数
    * noticeToHandleCnt  待处理消息通知数
    *
    * @var string[]
    */
    protected static $getters = [
            'agentCnt' => 'getAgentCnt',
            'instanceCnt' => 'getInstanceCnt',
            'leagueCnt' => 'getLeagueCnt',
            'noticeToHandleCnt' => 'getNoticeToHandleCnt'
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
        $this->container['agentCnt'] = isset($data['agentCnt']) ? $data['agentCnt'] : null;
        $this->container['instanceCnt'] = isset($data['instanceCnt']) ? $data['instanceCnt'] : null;
        $this->container['leagueCnt'] = isset($data['leagueCnt']) ? $data['leagueCnt'] : null;
        $this->container['noticeToHandleCnt'] = isset($data['noticeToHandleCnt']) ? $data['noticeToHandleCnt'] : null;
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
    * Gets agentCnt
    *  可信节点数
    *
    * @return int|null
    */
    public function getAgentCnt()
    {
        return $this->container['agentCnt'];
    }

    /**
    * Sets agentCnt
    *
    * @param int|null $agentCnt 可信节点数
    *
    * @return $this
    */
    public function setAgentCnt($agentCnt)
    {
        $this->container['agentCnt'] = $agentCnt;
        return $this;
    }

    /**
    * Gets instanceCnt
    *  作业执行历史数
    *
    * @return int|null
    */
    public function getInstanceCnt()
    {
        return $this->container['instanceCnt'];
    }

    /**
    * Sets instanceCnt
    *
    * @param int|null $instanceCnt 作业执行历史数
    *
    * @return $this
    */
    public function setInstanceCnt($instanceCnt)
    {
        $this->container['instanceCnt'] = $instanceCnt;
        return $this;
    }

    /**
    * Gets leagueCnt
    *  有效联盟数
    *
    * @return int|null
    */
    public function getLeagueCnt()
    {
        return $this->container['leagueCnt'];
    }

    /**
    * Sets leagueCnt
    *
    * @param int|null $leagueCnt 有效联盟数
    *
    * @return $this
    */
    public function setLeagueCnt($leagueCnt)
    {
        $this->container['leagueCnt'] = $leagueCnt;
        return $this;
    }

    /**
    * Gets noticeToHandleCnt
    *  待处理消息通知数
    *
    * @return int|null
    */
    public function getNoticeToHandleCnt()
    {
        return $this->container['noticeToHandleCnt'];
    }

    /**
    * Sets noticeToHandleCnt
    *
    * @param int|null $noticeToHandleCnt 待处理消息通知数
    *
    * @return $this
    */
    public function setNoticeToHandleCnt($noticeToHandleCnt)
    {
        $this->container['noticeToHandleCnt'] = $noticeToHandleCnt;
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

