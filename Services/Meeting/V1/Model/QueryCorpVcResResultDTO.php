<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCorpVcResResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCorpVcResResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vmrPkgList  云会议室类型列表。
    * te1080pHardCount  1080P硬终端接入帐号数量。
    * te720pHardCount  720P硬终端接入帐号数量。
    * teSoftCount  软终端账户数量。
    * roomCount  电子白板（SmartRooms）接入帐号数量。
    * recordCapability  录播存储空间 (单位:G)。
    * confCallCount  会议并发方数量。
    * liveCount  直播端口数量。
    * thirdPartyHardCount  第三方硬终端接入帐号数量。
    * hwVisionCount  智慧屏终端接入帐号数量。
    * ideaHubCount  IdeaHub终端接入帐号数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vmrPkgList' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryVmrPkgResResultDTO[]',
            'te1080pHardCount' => 'int',
            'te720pHardCount' => 'int',
            'teSoftCount' => 'int',
            'roomCount' => 'int',
            'recordCapability' => 'int',
            'confCallCount' => 'int',
            'liveCount' => 'int',
            'thirdPartyHardCount' => 'int',
            'hwVisionCount' => 'int',
            'ideaHubCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vmrPkgList  云会议室类型列表。
    * te1080pHardCount  1080P硬终端接入帐号数量。
    * te720pHardCount  720P硬终端接入帐号数量。
    * teSoftCount  软终端账户数量。
    * roomCount  电子白板（SmartRooms）接入帐号数量。
    * recordCapability  录播存储空间 (单位:G)。
    * confCallCount  会议并发方数量。
    * liveCount  直播端口数量。
    * thirdPartyHardCount  第三方硬终端接入帐号数量。
    * hwVisionCount  智慧屏终端接入帐号数量。
    * ideaHubCount  IdeaHub终端接入帐号数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vmrPkgList' => null,
        'te1080pHardCount' => null,
        'te720pHardCount' => null,
        'teSoftCount' => null,
        'roomCount' => null,
        'recordCapability' => null,
        'confCallCount' => null,
        'liveCount' => null,
        'thirdPartyHardCount' => null,
        'hwVisionCount' => null,
        'ideaHubCount' => null
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
    * vmrPkgList  云会议室类型列表。
    * te1080pHardCount  1080P硬终端接入帐号数量。
    * te720pHardCount  720P硬终端接入帐号数量。
    * teSoftCount  软终端账户数量。
    * roomCount  电子白板（SmartRooms）接入帐号数量。
    * recordCapability  录播存储空间 (单位:G)。
    * confCallCount  会议并发方数量。
    * liveCount  直播端口数量。
    * thirdPartyHardCount  第三方硬终端接入帐号数量。
    * hwVisionCount  智慧屏终端接入帐号数量。
    * ideaHubCount  IdeaHub终端接入帐号数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vmrPkgList' => 'vmrPkgList',
            'te1080pHardCount' => 'te1080pHardCount',
            'te720pHardCount' => 'te720pHardCount',
            'teSoftCount' => 'teSoftCount',
            'roomCount' => 'roomCount',
            'recordCapability' => 'recordCapability',
            'confCallCount' => 'confCallCount',
            'liveCount' => 'liveCount',
            'thirdPartyHardCount' => 'thirdPartyHardCount',
            'hwVisionCount' => 'hwVisionCount',
            'ideaHubCount' => 'ideaHubCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vmrPkgList  云会议室类型列表。
    * te1080pHardCount  1080P硬终端接入帐号数量。
    * te720pHardCount  720P硬终端接入帐号数量。
    * teSoftCount  软终端账户数量。
    * roomCount  电子白板（SmartRooms）接入帐号数量。
    * recordCapability  录播存储空间 (单位:G)。
    * confCallCount  会议并发方数量。
    * liveCount  直播端口数量。
    * thirdPartyHardCount  第三方硬终端接入帐号数量。
    * hwVisionCount  智慧屏终端接入帐号数量。
    * ideaHubCount  IdeaHub终端接入帐号数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'vmrPkgList' => 'setVmrPkgList',
            'te1080pHardCount' => 'setTe1080pHardCount',
            'te720pHardCount' => 'setTe720pHardCount',
            'teSoftCount' => 'setTeSoftCount',
            'roomCount' => 'setRoomCount',
            'recordCapability' => 'setRecordCapability',
            'confCallCount' => 'setConfCallCount',
            'liveCount' => 'setLiveCount',
            'thirdPartyHardCount' => 'setThirdPartyHardCount',
            'hwVisionCount' => 'setHwVisionCount',
            'ideaHubCount' => 'setIdeaHubCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vmrPkgList  云会议室类型列表。
    * te1080pHardCount  1080P硬终端接入帐号数量。
    * te720pHardCount  720P硬终端接入帐号数量。
    * teSoftCount  软终端账户数量。
    * roomCount  电子白板（SmartRooms）接入帐号数量。
    * recordCapability  录播存储空间 (单位:G)。
    * confCallCount  会议并发方数量。
    * liveCount  直播端口数量。
    * thirdPartyHardCount  第三方硬终端接入帐号数量。
    * hwVisionCount  智慧屏终端接入帐号数量。
    * ideaHubCount  IdeaHub终端接入帐号数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'vmrPkgList' => 'getVmrPkgList',
            'te1080pHardCount' => 'getTe1080pHardCount',
            'te720pHardCount' => 'getTe720pHardCount',
            'teSoftCount' => 'getTeSoftCount',
            'roomCount' => 'getRoomCount',
            'recordCapability' => 'getRecordCapability',
            'confCallCount' => 'getConfCallCount',
            'liveCount' => 'getLiveCount',
            'thirdPartyHardCount' => 'getThirdPartyHardCount',
            'hwVisionCount' => 'getHwVisionCount',
            'ideaHubCount' => 'getIdeaHubCount'
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
        $this->container['vmrPkgList'] = isset($data['vmrPkgList']) ? $data['vmrPkgList'] : null;
        $this->container['te1080pHardCount'] = isset($data['te1080pHardCount']) ? $data['te1080pHardCount'] : null;
        $this->container['te720pHardCount'] = isset($data['te720pHardCount']) ? $data['te720pHardCount'] : null;
        $this->container['teSoftCount'] = isset($data['teSoftCount']) ? $data['teSoftCount'] : null;
        $this->container['roomCount'] = isset($data['roomCount']) ? $data['roomCount'] : null;
        $this->container['recordCapability'] = isset($data['recordCapability']) ? $data['recordCapability'] : null;
        $this->container['confCallCount'] = isset($data['confCallCount']) ? $data['confCallCount'] : null;
        $this->container['liveCount'] = isset($data['liveCount']) ? $data['liveCount'] : null;
        $this->container['thirdPartyHardCount'] = isset($data['thirdPartyHardCount']) ? $data['thirdPartyHardCount'] : null;
        $this->container['hwVisionCount'] = isset($data['hwVisionCount']) ? $data['hwVisionCount'] : null;
        $this->container['ideaHubCount'] = isset($data['ideaHubCount']) ? $data['ideaHubCount'] : null;
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
    * Gets vmrPkgList
    *  云会议室类型列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryVmrPkgResResultDTO[]|null
    */
    public function getVmrPkgList()
    {
        return $this->container['vmrPkgList'];
    }

    /**
    * Sets vmrPkgList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryVmrPkgResResultDTO[]|null $vmrPkgList 云会议室类型列表。
    *
    * @return $this
    */
    public function setVmrPkgList($vmrPkgList)
    {
        $this->container['vmrPkgList'] = $vmrPkgList;
        return $this;
    }

    /**
    * Gets te1080pHardCount
    *  1080P硬终端接入帐号数量。
    *
    * @return int|null
    */
    public function getTe1080pHardCount()
    {
        return $this->container['te1080pHardCount'];
    }

    /**
    * Sets te1080pHardCount
    *
    * @param int|null $te1080pHardCount 1080P硬终端接入帐号数量。
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
    *  720P硬终端接入帐号数量。
    *
    * @return int|null
    */
    public function getTe720pHardCount()
    {
        return $this->container['te720pHardCount'];
    }

    /**
    * Sets te720pHardCount
    *
    * @param int|null $te720pHardCount 720P硬终端接入帐号数量。
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
    *  软终端账户数量。
    *
    * @return int|null
    */
    public function getTeSoftCount()
    {
        return $this->container['teSoftCount'];
    }

    /**
    * Sets teSoftCount
    *
    * @param int|null $teSoftCount 软终端账户数量。
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
    *  电子白板（SmartRooms）接入帐号数量。
    *
    * @return int|null
    */
    public function getRoomCount()
    {
        return $this->container['roomCount'];
    }

    /**
    * Sets roomCount
    *
    * @param int|null $roomCount 电子白板（SmartRooms）接入帐号数量。
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
    *  录播存储空间 (单位:G)。
    *
    * @return int|null
    */
    public function getRecordCapability()
    {
        return $this->container['recordCapability'];
    }

    /**
    * Sets recordCapability
    *
    * @param int|null $recordCapability 录播存储空间 (单位:G)。
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
    *  会议并发方数量。
    *
    * @return int|null
    */
    public function getConfCallCount()
    {
        return $this->container['confCallCount'];
    }

    /**
    * Sets confCallCount
    *
    * @param int|null $confCallCount 会议并发方数量。
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
    *  直播端口数量。
    *
    * @return int|null
    */
    public function getLiveCount()
    {
        return $this->container['liveCount'];
    }

    /**
    * Sets liveCount
    *
    * @param int|null $liveCount 直播端口数量。
    *
    * @return $this
    */
    public function setLiveCount($liveCount)
    {
        $this->container['liveCount'] = $liveCount;
        return $this;
    }

    /**
    * Gets thirdPartyHardCount
    *  第三方硬终端接入帐号数量。
    *
    * @return int|null
    */
    public function getThirdPartyHardCount()
    {
        return $this->container['thirdPartyHardCount'];
    }

    /**
    * Sets thirdPartyHardCount
    *
    * @param int|null $thirdPartyHardCount 第三方硬终端接入帐号数量。
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
    *  智慧屏终端接入帐号数量。
    *
    * @return int|null
    */
    public function getHwVisionCount()
    {
        return $this->container['hwVisionCount'];
    }

    /**
    * Sets hwVisionCount
    *
    * @param int|null $hwVisionCount 智慧屏终端接入帐号数量。
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
    *  IdeaHub终端接入帐号数量。
    *
    * @return int|null
    */
    public function getIdeaHubCount()
    {
        return $this->container['ideaHubCount'];
    }

    /**
    * Sets ideaHubCount
    *
    * @param int|null $ideaHubCount IdeaHub终端接入帐号数量。
    *
    * @return $this
    */
    public function setIdeaHubCount($ideaHubCount)
    {
        $this->container['ideaHubCount'] = $ideaHubCount;
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

