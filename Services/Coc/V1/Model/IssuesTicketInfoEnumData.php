<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssuesTicketInfoEnumData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssuesTicketInfoEnumData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDeleted  是否已删除。
    * matchType  匹配的枚举类型。
    * ticketId  当前工单ID。
    * realTicketId  工单单号。
    * nameZh  中文名称。
    * nameEn  英文名称。
    * bizId  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    * propId  当前枚举值对应的类型。
    * modelId  后台不同应用对应的模型id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDeleted' => 'bool',
            'matchType' => 'string',
            'ticketId' => 'string',
            'realTicketId' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string',
            'bizId' => 'string',
            'propId' => 'string',
            'modelId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDeleted  是否已删除。
    * matchType  匹配的枚举类型。
    * ticketId  当前工单ID。
    * realTicketId  工单单号。
    * nameZh  中文名称。
    * nameEn  英文名称。
    * bizId  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    * propId  当前枚举值对应的类型。
    * modelId  后台不同应用对应的模型id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDeleted' => null,
        'matchType' => null,
        'ticketId' => null,
        'realTicketId' => null,
        'nameZh' => null,
        'nameEn' => null,
        'bizId' => null,
        'propId' => null,
        'modelId' => null
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
    * isDeleted  是否已删除。
    * matchType  匹配的枚举类型。
    * ticketId  当前工单ID。
    * realTicketId  工单单号。
    * nameZh  中文名称。
    * nameEn  英文名称。
    * bizId  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    * propId  当前枚举值对应的类型。
    * modelId  后台不同应用对应的模型id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDeleted' => 'is_deleted',
            'matchType' => 'match_type',
            'ticketId' => 'ticket_id',
            'realTicketId' => 'real_ticket_id',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en',
            'bizId' => 'biz_id',
            'propId' => 'prop_id',
            'modelId' => 'model_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDeleted  是否已删除。
    * matchType  匹配的枚举类型。
    * ticketId  当前工单ID。
    * realTicketId  工单单号。
    * nameZh  中文名称。
    * nameEn  英文名称。
    * bizId  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    * propId  当前枚举值对应的类型。
    * modelId  后台不同应用对应的模型id。
    *
    * @var string[]
    */
    protected static $setters = [
            'isDeleted' => 'setIsDeleted',
            'matchType' => 'setMatchType',
            'ticketId' => 'setTicketId',
            'realTicketId' => 'setRealTicketId',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn',
            'bizId' => 'setBizId',
            'propId' => 'setPropId',
            'modelId' => 'setModelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDeleted  是否已删除。
    * matchType  匹配的枚举类型。
    * ticketId  当前工单ID。
    * realTicketId  工单单号。
    * nameZh  中文名称。
    * nameEn  英文名称。
    * bizId  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    * propId  当前枚举值对应的类型。
    * modelId  后台不同应用对应的模型id。
    *
    * @var string[]
    */
    protected static $getters = [
            'isDeleted' => 'getIsDeleted',
            'matchType' => 'getMatchType',
            'ticketId' => 'getTicketId',
            'realTicketId' => 'getRealTicketId',
            'nameZh' => 'getNameZh',
            'nameEn' => 'getNameEn',
            'bizId' => 'getBizId',
            'propId' => 'getPropId',
            'modelId' => 'getModelId'
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
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['realTicketId'] = isset($data['realTicketId']) ? $data['realTicketId'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['propId'] = isset($data['propId']) ? $data['propId'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) > 255)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) < 0)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) > 255)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) > 255)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) < 0)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) > 255)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be bigger than or equal to 0.";
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
    * Gets isDeleted
    *  是否已删除。
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否已删除。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配的枚举类型。
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType 匹配的枚举类型。
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets ticketId
    *  当前工单ID。
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 当前工单ID。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets realTicketId
    *  工单单号。
    *
    * @return string|null
    */
    public function getRealTicketId()
    {
        return $this->container['realTicketId'];
    }

    /**
    * Sets realTicketId
    *
    * @param string|null $realTicketId 工单单号。
    *
    * @return $this
    */
    public function setRealTicketId($realTicketId)
    {
        $this->container['realTicketId'] = $realTicketId;
        return $this;
    }

    /**
    * Gets nameZh
    *  中文名称。
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 中文名称。
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets bizId
    *  枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 枚举值对应的唯一id，当match_type为reference__base_config.User时，biz_id的值为操作用户唯一Id。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets propId
    *  当前枚举值对应的类型。
    *
    * @return string|null
    */
    public function getPropId()
    {
        return $this->container['propId'];
    }

    /**
    * Sets propId
    *
    * @param string|null $propId 当前枚举值对应的类型。
    *
    * @return $this
    */
    public function setPropId($propId)
    {
        $this->container['propId'] = $propId;
        return $this;
    }

    /**
    * Gets modelId
    *  后台不同应用对应的模型id。
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId 后台不同应用对应的模型id。
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
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

