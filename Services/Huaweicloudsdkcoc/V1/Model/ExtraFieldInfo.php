<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtraFieldInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtraFieldInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentCloudServiceId' => 'string',
            'description' => 'string',
            'levelId' => 'string',
            'mtmRegion' => 'string',
            'mtmType' => 'string',
            'sourceId' => 'string',
            'title' => 'string',
            'isChangeEvent' => 'bool',
            'isServiceInterrupt' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentCloudServiceId' => null,
        'description' => null,
        'levelId' => null,
        'mtmRegion' => null,
        'mtmType' => null,
        'sourceId' => null,
        'title' => null,
        'isChangeEvent' => null,
        'isServiceInterrupt' => null
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
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentCloudServiceId' => 'current_cloud_service_id',
            'description' => 'description',
            'levelId' => 'level_id',
            'mtmRegion' => 'mtm_region',
            'mtmType' => 'mtm_type',
            'sourceId' => 'source_id',
            'title' => 'title',
            'isChangeEvent' => 'is_change_event',
            'isServiceInterrupt' => 'is_service_interrupt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    *
    * @var string[]
    */
    protected static $setters = [
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'description' => 'setDescription',
            'levelId' => 'setLevelId',
            'mtmRegion' => 'setMtmRegion',
            'mtmType' => 'setMtmType',
            'sourceId' => 'setSourceId',
            'title' => 'setTitle',
            'isChangeEvent' => 'setIsChangeEvent',
            'isServiceInterrupt' => 'setIsServiceInterrupt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    *
    * @var string[]
    */
    protected static $getters = [
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'description' => 'getDescription',
            'levelId' => 'getLevelId',
            'mtmRegion' => 'getMtmRegion',
            'mtmType' => 'getMtmType',
            'sourceId' => 'getSourceId',
            'title' => 'getTitle',
            'isChangeEvent' => 'getIsChangeEvent',
            'isServiceInterrupt' => 'getIsServiceInterrupt'
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
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['levelId'] = isset($data['levelId']) ? $data['levelId'] : null;
        $this->container['mtmRegion'] = isset($data['mtmRegion']) ? $data['mtmRegion'] : null;
        $this->container['mtmType'] = isset($data['mtmType']) ? $data['mtmType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['isChangeEvent'] = isset($data['isChangeEvent']) ? $data['isChangeEvent'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
    * Gets currentCloudServiceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string|null $currentCloudServiceId 扩展字段
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets description
    *  扩展字段
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 扩展字段
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets levelId
    *  扩展字段
    *
    * @return string|null
    */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
    * Sets levelId
    *
    * @param string|null $levelId 扩展字段
    *
    * @return $this
    */
    public function setLevelId($levelId)
    {
        $this->container['levelId'] = $levelId;
        return $this;
    }

    /**
    * Gets mtmRegion
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmRegion()
    {
        return $this->container['mtmRegion'];
    }

    /**
    * Sets mtmRegion
    *
    * @param string|null $mtmRegion 扩展字段
    *
    * @return $this
    */
    public function setMtmRegion($mtmRegion)
    {
        $this->container['mtmRegion'] = $mtmRegion;
        return $this;
    }

    /**
    * Gets mtmType
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmType()
    {
        return $this->container['mtmType'];
    }

    /**
    * Sets mtmType
    *
    * @param string|null $mtmType 扩展字段
    *
    * @return $this
    */
    public function setMtmType($mtmType)
    {
        $this->container['mtmType'] = $mtmType;
        return $this;
    }

    /**
    * Gets sourceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 扩展字段
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets title
    *  扩展字段
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 扩展字段
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets isChangeEvent
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsChangeEvent()
    {
        return $this->container['isChangeEvent'];
    }

    /**
    * Sets isChangeEvent
    *
    * @param bool|null $isChangeEvent 是否变更事件
    *
    * @return $this
    */
    public function setIsChangeEvent($isChangeEvent)
    {
        $this->container['isChangeEvent'] = $isChangeEvent;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool|null $isServiceInterrupt 是否变更事件
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
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

