<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterruptRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterruptRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录ID
    * sources  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    * sourcesId  来源ID
    * sourcesName  来源名称
    * region  region
    * unavailableStartTime  不可用开始时间
    * unavailableEndTime  不可用结束时间
    * descriptions  描述
    * creatorId  创建人Id
    * creator  创建人
    * modifiedId  修改人ID
    * modifiedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sources' => 'string',
            'sourcesId' => 'string',
            'sourcesName' => 'string',
            'region' => 'string',
            'unavailableStartTime' => 'int',
            'unavailableEndTime' => 'int',
            'descriptions' => 'string',
            'creatorId' => 'string',
            'creator' => 'string',
            'modifiedId' => 'string',
            'modifiedBy' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录ID
    * sources  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    * sourcesId  来源ID
    * sourcesName  来源名称
    * region  region
    * unavailableStartTime  不可用开始时间
    * unavailableEndTime  不可用结束时间
    * descriptions  描述
    * creatorId  创建人Id
    * creator  创建人
    * modifiedId  修改人ID
    * modifiedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sources' => null,
        'sourcesId' => null,
        'sourcesName' => null,
        'region' => null,
        'unavailableStartTime' => 'int64',
        'unavailableEndTime' => 'int64',
        'descriptions' => null,
        'creatorId' => null,
        'creator' => null,
        'modifiedId' => null,
        'modifiedBy' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  记录ID
    * sources  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    * sourcesId  来源ID
    * sourcesName  来源名称
    * region  region
    * unavailableStartTime  不可用开始时间
    * unavailableEndTime  不可用结束时间
    * descriptions  描述
    * creatorId  创建人Id
    * creator  创建人
    * modifiedId  修改人ID
    * modifiedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sources' => 'sources',
            'sourcesId' => 'sources_id',
            'sourcesName' => 'sources_name',
            'region' => 'region',
            'unavailableStartTime' => 'unavailable_start_time',
            'unavailableEndTime' => 'unavailable_end_time',
            'descriptions' => 'descriptions',
            'creatorId' => 'creator_id',
            'creator' => 'creator',
            'modifiedId' => 'modified_id',
            'modifiedBy' => 'modified_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录ID
    * sources  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    * sourcesId  来源ID
    * sourcesName  来源名称
    * region  region
    * unavailableStartTime  不可用开始时间
    * unavailableEndTime  不可用结束时间
    * descriptions  描述
    * creatorId  创建人Id
    * creator  创建人
    * modifiedId  修改人ID
    * modifiedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sources' => 'setSources',
            'sourcesId' => 'setSourcesId',
            'sourcesName' => 'setSourcesName',
            'region' => 'setRegion',
            'unavailableStartTime' => 'setUnavailableStartTime',
            'unavailableEndTime' => 'setUnavailableEndTime',
            'descriptions' => 'setDescriptions',
            'creatorId' => 'setCreatorId',
            'creator' => 'setCreator',
            'modifiedId' => 'setModifiedId',
            'modifiedBy' => 'setModifiedBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录ID
    * sources  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    * sourcesId  来源ID
    * sourcesName  来源名称
    * region  region
    * unavailableStartTime  不可用开始时间
    * unavailableEndTime  不可用结束时间
    * descriptions  描述
    * creatorId  创建人Id
    * creator  创建人
    * modifiedId  修改人ID
    * modifiedBy  修改人
    * createTime  创建时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sources' => 'getSources',
            'sourcesId' => 'getSourcesId',
            'sourcesName' => 'getSourcesName',
            'region' => 'getRegion',
            'unavailableStartTime' => 'getUnavailableStartTime',
            'unavailableEndTime' => 'getUnavailableEndTime',
            'descriptions' => 'getDescriptions',
            'creatorId' => 'getCreatorId',
            'creator' => 'getCreator',
            'modifiedId' => 'getModifiedId',
            'modifiedBy' => 'getModifiedBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const SOURCES_SLI = 'SLI';
    const SOURCES_WARROOM = 'WARROOM';
    const SOURCES_ALERTS = 'ALERTS';
    const SOURCES_MALFUNCTIONS = 'MALFUNCTIONS';
    const SOURCES_OTHERS = 'OTHERS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourcesAllowableValues()
    {
        return [
            self::SOURCES_SLI,
            self::SOURCES_WARROOM,
            self::SOURCES_ALERTS,
            self::SOURCES_MALFUNCTIONS,
            self::SOURCES_OTHERS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['sourcesId'] = isset($data['sourcesId']) ? $data['sourcesId'] : null;
        $this->container['sourcesName'] = isset($data['sourcesName']) ? $data['sourcesName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['unavailableStartTime'] = isset($data['unavailableStartTime']) ? $data['unavailableStartTime'] : null;
        $this->container['unavailableEndTime'] = isset($data['unavailableEndTime']) ? $data['unavailableEndTime'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['modifiedId'] = isset($data['modifiedId']) ? $data['modifiedId'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSourcesAllowableValues();
                if (!is_null($this->container['sources']) && !in_array($this->container['sources'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sources', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sourcesId']) && (mb_strlen($this->container['sourcesId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourcesId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourcesId']) && (mb_strlen($this->container['sourcesId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourcesId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourcesName']) && (mb_strlen($this->container['sourcesName']) > 100)) {
                $invalidProperties[] = "invalid value for 'sourcesName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sourcesName']) && (mb_strlen($this->container['sourcesName']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourcesName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unavailableStartTime']) && ($this->container['unavailableStartTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'unavailableStartTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['unavailableStartTime']) && ($this->container['unavailableStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'unavailableStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unavailableEndTime']) && ($this->container['unavailableEndTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'unavailableEndTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['unavailableEndTime']) && ($this->container['unavailableEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'unavailableEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptions']) && (mb_strlen($this->container['descriptions']) > 600)) {
                $invalidProperties[] = "invalid value for 'descriptions', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['descriptions']) && (mb_strlen($this->container['descriptions']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptions', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifiedId']) && (mb_strlen($this->container['modifiedId']) > 128)) {
                $invalidProperties[] = "invalid value for 'modifiedId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['modifiedId']) && (mb_strlen($this->container['modifiedId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 255)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets id
    *  记录ID
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
    * @param string|null $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sources
    *  来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    *
    * @return string|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param string|null $sources 来源 SLI SLI指标 WARROOM warroom ALERTS 告警 MALFUNCTIONS 故障 OTHERS 其他
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets sourcesId
    *  来源ID
    *
    * @return string|null
    */
    public function getSourcesId()
    {
        return $this->container['sourcesId'];
    }

    /**
    * Sets sourcesId
    *
    * @param string|null $sourcesId 来源ID
    *
    * @return $this
    */
    public function setSourcesId($sourcesId)
    {
        $this->container['sourcesId'] = $sourcesId;
        return $this;
    }

    /**
    * Gets sourcesName
    *  来源名称
    *
    * @return string|null
    */
    public function getSourcesName()
    {
        return $this->container['sourcesName'];
    }

    /**
    * Sets sourcesName
    *
    * @param string|null $sourcesName 来源名称
    *
    * @return $this
    */
    public function setSourcesName($sourcesName)
    {
        $this->container['sourcesName'] = $sourcesName;
        return $this;
    }

    /**
    * Gets region
    *  region
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
    * @param string|null $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets unavailableStartTime
    *  不可用开始时间
    *
    * @return int|null
    */
    public function getUnavailableStartTime()
    {
        return $this->container['unavailableStartTime'];
    }

    /**
    * Sets unavailableStartTime
    *
    * @param int|null $unavailableStartTime 不可用开始时间
    *
    * @return $this
    */
    public function setUnavailableStartTime($unavailableStartTime)
    {
        $this->container['unavailableStartTime'] = $unavailableStartTime;
        return $this;
    }

    /**
    * Gets unavailableEndTime
    *  不可用结束时间
    *
    * @return int|null
    */
    public function getUnavailableEndTime()
    {
        return $this->container['unavailableEndTime'];
    }

    /**
    * Sets unavailableEndTime
    *
    * @param int|null $unavailableEndTime 不可用结束时间
    *
    * @return $this
    */
    public function setUnavailableEndTime($unavailableEndTime)
    {
        $this->container['unavailableEndTime'] = $unavailableEndTime;
        return $this;
    }

    /**
    * Gets descriptions
    *  描述
    *
    * @return string|null
    */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
    * Sets descriptions
    *
    * @param string|null $descriptions 描述
    *
    * @return $this
    */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人Id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建人Id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets modifiedId
    *  修改人ID
    *
    * @return string|null
    */
    public function getModifiedId()
    {
        return $this->container['modifiedId'];
    }

    /**
    * Sets modifiedId
    *
    * @param string|null $modifiedId 修改人ID
    *
    * @return $this
    */
    public function setModifiedId($modifiedId)
    {
        $this->container['modifiedId'] = $modifiedId;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  修改人
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 修改人
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
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
    * @param int|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

