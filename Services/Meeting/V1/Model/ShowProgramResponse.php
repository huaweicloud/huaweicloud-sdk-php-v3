<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProgramResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProgramResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节目ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * programName  节目名称。
    * materialSizeStr  节目的总素材大小（含单位）。
    * playTime  节目的总播放时长，单位秒。
    * programItemList  节目素材列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'lastUpdatedBy' => 'string',
            'updateTime' => 'int',
            'programName' => 'string',
            'materialSizeStr' => 'string',
            'playTime' => 'int',
            'programItemList' => '\HuaweiCloud\SDK\Meeting\V1\Model\ProgramItemResponseBase[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节目ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * programName  节目名称。
    * materialSizeStr  节目的总素材大小（含单位）。
    * playTime  节目的总播放时长，单位秒。
    * programItemList  节目素材列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'lastUpdatedBy' => null,
        'updateTime' => 'int64',
        'programName' => null,
        'materialSizeStr' => null,
        'playTime' => null,
        'programItemList' => null
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
    * id  节目ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * programName  节目名称。
    * materialSizeStr  节目的总素材大小（含单位）。
    * playTime  节目的总播放时长，单位秒。
    * programItemList  节目素材列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'lastUpdatedBy' => 'lastUpdatedBy',
            'updateTime' => 'updateTime',
            'programName' => 'programName',
            'materialSizeStr' => 'materialSizeStr',
            'playTime' => 'playTime',
            'programItemList' => 'programItemList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节目ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * programName  节目名称。
    * materialSizeStr  节目的总素材大小（含单位）。
    * playTime  节目的总播放时长，单位秒。
    * programItemList  节目素材列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'lastUpdatedBy' => 'setLastUpdatedBy',
            'updateTime' => 'setUpdateTime',
            'programName' => 'setProgramName',
            'materialSizeStr' => 'setMaterialSizeStr',
            'playTime' => 'setPlayTime',
            'programItemList' => 'setProgramItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节目ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * programName  节目名称。
    * materialSizeStr  节目的总素材大小（含单位）。
    * playTime  节目的总播放时长，单位秒。
    * programItemList  节目素材列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'lastUpdatedBy' => 'getLastUpdatedBy',
            'updateTime' => 'getUpdateTime',
            'programName' => 'getProgramName',
            'materialSizeStr' => 'getMaterialSizeStr',
            'playTime' => 'getPlayTime',
            'programItemList' => 'getProgramItemList'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['programName'] = isset($data['programName']) ? $data['programName'] : null;
        $this->container['materialSizeStr'] = isset($data['materialSizeStr']) ? $data['materialSizeStr'] : null;
        $this->container['playTime'] = isset($data['playTime']) ? $data['playTime'] : null;
        $this->container['programItemList'] = isset($data['programItemList']) ? $data['programItemList'] : null;
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
    * Gets id
    *  节目ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 节目ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastUpdatedBy
    *  更新者。
    *
    * @return string|null
    */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
    * Sets lastUpdatedBy
    *
    * @param string|null $lastUpdatedBy 更新者。
    *
    * @return $this
    */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets programName
    *  节目名称。
    *
    * @return string|null
    */
    public function getProgramName()
    {
        return $this->container['programName'];
    }

    /**
    * Sets programName
    *
    * @param string|null $programName 节目名称。
    *
    * @return $this
    */
    public function setProgramName($programName)
    {
        $this->container['programName'] = $programName;
        return $this;
    }

    /**
    * Gets materialSizeStr
    *  节目的总素材大小（含单位）。
    *
    * @return string|null
    */
    public function getMaterialSizeStr()
    {
        return $this->container['materialSizeStr'];
    }

    /**
    * Sets materialSizeStr
    *
    * @param string|null $materialSizeStr 节目的总素材大小（含单位）。
    *
    * @return $this
    */
    public function setMaterialSizeStr($materialSizeStr)
    {
        $this->container['materialSizeStr'] = $materialSizeStr;
        return $this;
    }

    /**
    * Gets playTime
    *  节目的总播放时长，单位秒。
    *
    * @return int|null
    */
    public function getPlayTime()
    {
        return $this->container['playTime'];
    }

    /**
    * Sets playTime
    *
    * @param int|null $playTime 节目的总播放时长，单位秒。
    *
    * @return $this
    */
    public function setPlayTime($playTime)
    {
        $this->container['playTime'] = $playTime;
        return $this;
    }

    /**
    * Gets programItemList
    *  节目素材列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ProgramItemResponseBase[]|null
    */
    public function getProgramItemList()
    {
        return $this->container['programItemList'];
    }

    /**
    * Sets programItemList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ProgramItemResponseBase[]|null $programItemList 节目素材列表。
    *
    * @return $this
    */
    public function setProgramItemList($programItemList)
    {
        $this->container['programItemList'] = $programItemList;
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

