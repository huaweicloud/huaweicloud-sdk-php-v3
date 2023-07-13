<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSpResourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSpResourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * te1080pHardCount  te1080pHardCount
    * te720pHardCount  te720pHardCount
    * teSoftCount  teSoftCount
    * roomCount  roomCount
    * recordCapability  recordCapability
    * confCallCount  confCallCount
    * liveCount  liveCount
    * corpCount  corpCount
    * thirdPartyHardCount  thirdPartyHardCount
    * hwVisionCount  hwVisionCount
    * ideaHubCount  ideaHubCount
    * enablePstn  在创建企业的时候设置的pstn权限开关。
    * enableSms  企业是否通过短信形式发送会议通知。
    * groupList  SP管理员绑定的分组列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'te1080pHardCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'te720pHardCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'teSoftCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'roomCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'recordCapability' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'confCallCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'liveCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'corpCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'thirdPartyHardCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'hwVisionCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'ideaHubCount' => '\HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO',
            'enablePstn' => 'bool',
            'enableSms' => 'bool',
            'groupList' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpGroupDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * te1080pHardCount  te1080pHardCount
    * te720pHardCount  te720pHardCount
    * teSoftCount  teSoftCount
    * roomCount  roomCount
    * recordCapability  recordCapability
    * confCallCount  confCallCount
    * liveCount  liveCount
    * corpCount  corpCount
    * thirdPartyHardCount  thirdPartyHardCount
    * hwVisionCount  hwVisionCount
    * ideaHubCount  ideaHubCount
    * enablePstn  在创建企业的时候设置的pstn权限开关。
    * enableSms  企业是否通过短信形式发送会议通知。
    * groupList  SP管理员绑定的分组列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'te1080pHardCount' => null,
        'te720pHardCount' => null,
        'teSoftCount' => null,
        'roomCount' => null,
        'recordCapability' => null,
        'confCallCount' => null,
        'liveCount' => null,
        'corpCount' => null,
        'thirdPartyHardCount' => null,
        'hwVisionCount' => null,
        'ideaHubCount' => null,
        'enablePstn' => null,
        'enableSms' => null,
        'groupList' => null
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
    * te1080pHardCount  te1080pHardCount
    * te720pHardCount  te720pHardCount
    * teSoftCount  teSoftCount
    * roomCount  roomCount
    * recordCapability  recordCapability
    * confCallCount  confCallCount
    * liveCount  liveCount
    * corpCount  corpCount
    * thirdPartyHardCount  thirdPartyHardCount
    * hwVisionCount  hwVisionCount
    * ideaHubCount  ideaHubCount
    * enablePstn  在创建企业的时候设置的pstn权限开关。
    * enableSms  企业是否通过短信形式发送会议通知。
    * groupList  SP管理员绑定的分组列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'te1080pHardCount' => 'te1080pHardCount',
            'te720pHardCount' => 'te720pHardCount',
            'teSoftCount' => 'teSoftCount',
            'roomCount' => 'roomCount',
            'recordCapability' => 'recordCapability',
            'confCallCount' => 'confCallCount',
            'liveCount' => 'liveCount',
            'corpCount' => 'corpCount',
            'thirdPartyHardCount' => 'thirdPartyHardCount',
            'hwVisionCount' => 'hwVisionCount',
            'ideaHubCount' => 'ideaHubCount',
            'enablePstn' => 'enablePstn',
            'enableSms' => 'enableSMS',
            'groupList' => 'groupList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * te1080pHardCount  te1080pHardCount
    * te720pHardCount  te720pHardCount
    * teSoftCount  teSoftCount
    * roomCount  roomCount
    * recordCapability  recordCapability
    * confCallCount  confCallCount
    * liveCount  liveCount
    * corpCount  corpCount
    * thirdPartyHardCount  thirdPartyHardCount
    * hwVisionCount  hwVisionCount
    * ideaHubCount  ideaHubCount
    * enablePstn  在创建企业的时候设置的pstn权限开关。
    * enableSms  企业是否通过短信形式发送会议通知。
    * groupList  SP管理员绑定的分组列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'te1080pHardCount' => 'setTe1080pHardCount',
            'te720pHardCount' => 'setTe720pHardCount',
            'teSoftCount' => 'setTeSoftCount',
            'roomCount' => 'setRoomCount',
            'recordCapability' => 'setRecordCapability',
            'confCallCount' => 'setConfCallCount',
            'liveCount' => 'setLiveCount',
            'corpCount' => 'setCorpCount',
            'thirdPartyHardCount' => 'setThirdPartyHardCount',
            'hwVisionCount' => 'setHwVisionCount',
            'ideaHubCount' => 'setIdeaHubCount',
            'enablePstn' => 'setEnablePstn',
            'enableSms' => 'setEnableSms',
            'groupList' => 'setGroupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * te1080pHardCount  te1080pHardCount
    * te720pHardCount  te720pHardCount
    * teSoftCount  teSoftCount
    * roomCount  roomCount
    * recordCapability  recordCapability
    * confCallCount  confCallCount
    * liveCount  liveCount
    * corpCount  corpCount
    * thirdPartyHardCount  thirdPartyHardCount
    * hwVisionCount  hwVisionCount
    * ideaHubCount  ideaHubCount
    * enablePstn  在创建企业的时候设置的pstn权限开关。
    * enableSms  企业是否通过短信形式发送会议通知。
    * groupList  SP管理员绑定的分组列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'te1080pHardCount' => 'getTe1080pHardCount',
            'te720pHardCount' => 'getTe720pHardCount',
            'teSoftCount' => 'getTeSoftCount',
            'roomCount' => 'getRoomCount',
            'recordCapability' => 'getRecordCapability',
            'confCallCount' => 'getConfCallCount',
            'liveCount' => 'getLiveCount',
            'corpCount' => 'getCorpCount',
            'thirdPartyHardCount' => 'getThirdPartyHardCount',
            'hwVisionCount' => 'getHwVisionCount',
            'ideaHubCount' => 'getIdeaHubCount',
            'enablePstn' => 'getEnablePstn',
            'enableSms' => 'getEnableSms',
            'groupList' => 'getGroupList'
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
        $this->container['te1080pHardCount'] = isset($data['te1080pHardCount']) ? $data['te1080pHardCount'] : null;
        $this->container['te720pHardCount'] = isset($data['te720pHardCount']) ? $data['te720pHardCount'] : null;
        $this->container['teSoftCount'] = isset($data['teSoftCount']) ? $data['teSoftCount'] : null;
        $this->container['roomCount'] = isset($data['roomCount']) ? $data['roomCount'] : null;
        $this->container['recordCapability'] = isset($data['recordCapability']) ? $data['recordCapability'] : null;
        $this->container['confCallCount'] = isset($data['confCallCount']) ? $data['confCallCount'] : null;
        $this->container['liveCount'] = isset($data['liveCount']) ? $data['liveCount'] : null;
        $this->container['corpCount'] = isset($data['corpCount']) ? $data['corpCount'] : null;
        $this->container['thirdPartyHardCount'] = isset($data['thirdPartyHardCount']) ? $data['thirdPartyHardCount'] : null;
        $this->container['hwVisionCount'] = isset($data['hwVisionCount']) ? $data['hwVisionCount'] : null;
        $this->container['ideaHubCount'] = isset($data['ideaHubCount']) ? $data['ideaHubCount'] : null;
        $this->container['enablePstn'] = isset($data['enablePstn']) ? $data['enablePstn'] : null;
        $this->container['enableSms'] = isset($data['enableSms']) ? $data['enableSms'] : null;
        $this->container['groupList'] = isset($data['groupList']) ? $data['groupList'] : null;
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
    * Gets te1080pHardCount
    *  te1080pHardCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getTe1080pHardCount()
    {
        return $this->container['te1080pHardCount'];
    }

    /**
    * Sets te1080pHardCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $te1080pHardCount te1080pHardCount
    *
    * @return $this
    */
    public function setTe1080pHardCount($te1080pHardCount)
    {
        $this->container['te1080pHardCount'] = $te1080pHardCount;
        return $this;
    }

    /**
    * Gets te720pHardCount
    *  te720pHardCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getTe720pHardCount()
    {
        return $this->container['te720pHardCount'];
    }

    /**
    * Sets te720pHardCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $te720pHardCount te720pHardCount
    *
    * @return $this
    */
    public function setTe720pHardCount($te720pHardCount)
    {
        $this->container['te720pHardCount'] = $te720pHardCount;
        return $this;
    }

    /**
    * Gets teSoftCount
    *  teSoftCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getTeSoftCount()
    {
        return $this->container['teSoftCount'];
    }

    /**
    * Sets teSoftCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $teSoftCount teSoftCount
    *
    * @return $this
    */
    public function setTeSoftCount($teSoftCount)
    {
        $this->container['teSoftCount'] = $teSoftCount;
        return $this;
    }

    /**
    * Gets roomCount
    *  roomCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getRoomCount()
    {
        return $this->container['roomCount'];
    }

    /**
    * Sets roomCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $roomCount roomCount
    *
    * @return $this
    */
    public function setRoomCount($roomCount)
    {
        $this->container['roomCount'] = $roomCount;
        return $this;
    }

    /**
    * Gets recordCapability
    *  recordCapability
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getRecordCapability()
    {
        return $this->container['recordCapability'];
    }

    /**
    * Sets recordCapability
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $recordCapability recordCapability
    *
    * @return $this
    */
    public function setRecordCapability($recordCapability)
    {
        $this->container['recordCapability'] = $recordCapability;
        return $this;
    }

    /**
    * Gets confCallCount
    *  confCallCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getConfCallCount()
    {
        return $this->container['confCallCount'];
    }

    /**
    * Sets confCallCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $confCallCount confCallCount
    *
    * @return $this
    */
    public function setConfCallCount($confCallCount)
    {
        $this->container['confCallCount'] = $confCallCount;
        return $this;
    }

    /**
    * Gets liveCount
    *  liveCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getLiveCount()
    {
        return $this->container['liveCount'];
    }

    /**
    * Sets liveCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $liveCount liveCount
    *
    * @return $this
    */
    public function setLiveCount($liveCount)
    {
        $this->container['liveCount'] = $liveCount;
        return $this;
    }

    /**
    * Gets corpCount
    *  corpCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getCorpCount()
    {
        return $this->container['corpCount'];
    }

    /**
    * Sets corpCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $corpCount corpCount
    *
    * @return $this
    */
    public function setCorpCount($corpCount)
    {
        $this->container['corpCount'] = $corpCount;
        return $this;
    }

    /**
    * Gets thirdPartyHardCount
    *  thirdPartyHardCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getThirdPartyHardCount()
    {
        return $this->container['thirdPartyHardCount'];
    }

    /**
    * Sets thirdPartyHardCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $thirdPartyHardCount thirdPartyHardCount
    *
    * @return $this
    */
    public function setThirdPartyHardCount($thirdPartyHardCount)
    {
        $this->container['thirdPartyHardCount'] = $thirdPartyHardCount;
        return $this;
    }

    /**
    * Gets hwVisionCount
    *  hwVisionCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getHwVisionCount()
    {
        return $this->container['hwVisionCount'];
    }

    /**
    * Sets hwVisionCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $hwVisionCount hwVisionCount
    *
    * @return $this
    */
    public function setHwVisionCount($hwVisionCount)
    {
        $this->container['hwVisionCount'] = $hwVisionCount;
        return $this;
    }

    /**
    * Gets ideaHubCount
    *  ideaHubCount
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null
    */
    public function getIdeaHubCount()
    {
        return $this->container['ideaHubCount'];
    }

    /**
    * Sets ideaHubCount
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ResDetailDTO|null $ideaHubCount ideaHubCount
    *
    * @return $this
    */
    public function setIdeaHubCount($ideaHubCount)
    {
        $this->container['ideaHubCount'] = $ideaHubCount;
        return $this;
    }

    /**
    * Gets enablePstn
    *  在创建企业的时候设置的pstn权限开关。
    *
    * @return bool|null
    */
    public function getEnablePstn()
    {
        return $this->container['enablePstn'];
    }

    /**
    * Sets enablePstn
    *
    * @param bool|null $enablePstn 在创建企业的时候设置的pstn权限开关。
    *
    * @return $this
    */
    public function setEnablePstn($enablePstn)
    {
        $this->container['enablePstn'] = $enablePstn;
        return $this;
    }

    /**
    * Gets enableSms
    *  企业是否通过短信形式发送会议通知。
    *
    * @return bool|null
    */
    public function getEnableSms()
    {
        return $this->container['enableSms'];
    }

    /**
    * Sets enableSms
    *
    * @param bool|null $enableSms 企业是否通过短信形式发送会议通知。
    *
    * @return $this
    */
    public function setEnableSms($enableSms)
    {
        $this->container['enableSms'] = $enableSms;
        return $this;
    }

    /**
    * Gets groupList
    *  SP管理员绑定的分组列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpGroupDTO[]|null
    */
    public function getGroupList()
    {
        return $this->container['groupList'];
    }

    /**
    * Sets groupList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryCorpGroupDTO[]|null $groupList SP管理员绑定的分组列表。
    *
    * @return $this
    */
    public function setGroupList($groupList)
    {
        $this->container['groupList'] = $groupList;
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

